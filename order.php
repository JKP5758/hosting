<?php
header('Content-Type: application/json');

// Function to parse .env file
function parse_env($path) {
    if (!file_exists($path)) {
        return [];
    }
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $env = [];
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue;
        }
        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value);
        $env[$name] = $value;
    }
    return $env;
}

// Load .env
$env = parse_env(__DIR__ . '/.env');

$db_host = $env['DB_HOST'] ?? 'localhost';
$db_user = $env['DB_USERNAME'] ?? 'root';
$db_pass = $env['DB_PASSWORD'] ?? '';
$db_name = $env['DB_DATABASE'] ?? 'hosting';
$orders_table = $env['ORDERS_TABLE'] ?? 'orders';
$domains_table = $env['DB_TABLE'] ?? 'domains';

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['error' => 'Method tidak diizinkan.']);
    exit;
}

// Validate and sanitize input data
$nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$telepon = isset($_POST['telepon']) ? trim($_POST['telepon']) : '';
$domain = isset($_POST['domain']) ? trim($_POST['domain']) : '';
$nickname = isset($_POST['nickname']) ? trim($_POST['nickname']) : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$confirm_password = isset($_POST['confirm-password']) ? $_POST['confirm-password'] : '';

// Validation
$errors = [];

if (empty($nama)) {
    $errors[] = 'Nama lengkap harus diisi.';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email harus valid.';
}

if (empty($telepon)) {
    $errors[] = 'Nomor telepon harus diisi.';
}

if (empty($domain) || !preg_match('/^[a-z0-9\-]+$/', $domain)) {
    $errors[] = 'Nama domain harus valid (hanya huruf kecil, angka, dan strip).';
}

if (empty($nickname)) {
    $errors[] = 'Nickname harus diisi.';
}

if (empty($password)) {
    $errors[] = 'Password harus diisi.';
} elseif (strlen($password) < 8) {
    $errors[] = 'Password minimal 8 karakter.';
} elseif (!preg_match('/[a-zA-Z]/', $password)) {
    $errors[] = 'Password harus mengandung minimal 1 huruf.';
} elseif (!preg_match('/\d/', $password)) {
    $errors[] = 'Password harus mengandung minimal 1 angka.';
}

if ($password !== $confirm_password) {
    $errors[] = 'Konfirmasi password tidak cocok.';
}

// If there are validation errors, return them
if (!empty($errors)) {
    echo json_encode(['error' => implode(' ', $errors)]);
    exit;
}

// Database connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    echo json_encode(['error' => 'Koneksi database gagal. Silakan coba lagi nanti.']);
    exit;
}

// Set charset to utf8
$conn->set_charset("utf8");

try {
    // Start transaction
    $conn->begin_transaction();
    
    // Check if domain is still available
    $full_domain = $domain . '.host.jkp.my.id';
    $stmt = $conn->prepare("SELECT COUNT(*) FROM `{$domains_table}` WHERE domain_name = ? OR domain_name = ?");
    if ($stmt === false) {
        throw new Exception('Terjadi kesalahan pada server.');
    }
    
    $stmt->bind_param("ss", $full_domain, $domain);
    $stmt->execute();
    $count = 0;
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();
    
    if ($count > 0) {
        throw new Exception('Domain sudah tidak tersedia.');
    }
    
    // Insert domain into domains table (only subdomain part)
    $stmt = $conn->prepare("INSERT INTO `{$domains_table}` (domain_name) VALUES (?)");
    if ($stmt === false) {
        throw new Exception('Terjadi kesalahan pada server.');
    }
    
    $stmt->bind_param("s", $domain);
    if (!$stmt->execute()) {
        throw new Exception('Gagal menyimpan domain.');
    }
    $stmt->close();
    
    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    // Insert order into orders table
    $stmt = $conn->prepare("INSERT INTO `{$orders_table}` (nama, email, telepon, domain, nickname, password) VALUES (?, ?, ?, ?, ?, ?)");
    if ($stmt === false) {
        throw new Exception('Terjadi kesalahan pada server.');
    }
    
    $stmt->bind_param("ssssss", $nama, $email, $telepon, $full_domain, $nickname, $hashed_password);
    if (!$stmt->execute()) {
        throw new Exception('Gagal menyimpan data order.');
    }
    
    $order_id = $conn->insert_id;
    $stmt->close();
    
    // Commit transaction
    $conn->commit();
    
    // Return success response
    echo json_encode([
        'success' => true,
        'message' => 'Pendaftaran berhasil!',
        'order_id' => $order_id,
        'domain' => $full_domain
    ]);
    
} catch (Exception $e) {
    // Rollback transaction on error
    $conn->rollback();
    echo json_encode(['error' => $e->getMessage()]);
} finally {
    $conn->close();
}
?>
