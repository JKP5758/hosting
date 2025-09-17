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
$db_table = $env['DB_TABLE'] ?? 'domains';
$db_column = $env['DB_COLUMN'] ?? 'domain_name';

// Get domain from request
$domain = isset($_GET['domain']) ? trim($_GET['domain']) : '';

if ($domain === '') {
    echo json_encode(['error' => 'Domain tidak boleh kosong.']);
    exit;
}

if (!preg_match('/^[a-z0-9\-]+$/', $domain)) {
    echo json_encode(['error' => 'Domain hanya boleh berisi huruf kecil, angka, dan strip.']);
    exit;
}

// The full domain includes the suffix
$full_domain = $domain . '.host.jkp.my.id';

// Database connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    // In production, log this error instead of exposing it.
    echo json_encode(['error' => 'Koneksi database gagal. Silakan coba lagi nanti.']);
    exit;
}

// Check if domain exists
$stmt = $conn->prepare("SELECT COUNT(*) FROM `{$db_table}` WHERE `{$db_column}` = ?");
if ($stmt === false) {
    // Log error
    echo json_encode(['error' => 'Terjadi kesalahan pada server.']);
    $conn->close();
    exit;
}

$stmt->bind_param("s", $full_domain);
$stmt->execute();
$count = 0;
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
$conn->close();

// Return result
echo json_encode(['exists' => $count > 0]);
?>