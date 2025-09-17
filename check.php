<?php
header('Content-Type: application/json');

$host = isset($_GET['host']) ? trim($_GET['host']) : '';

if ($host === '' || !preg_match('/^[0-9A-Za-z\.\-]+$/', $host)) {
    echo json_encode(['error' => 'Subdomain tidak valid']);
    exit;
}

// cek DNS A/AAAA/CNAME
$records = dns_get_record($host, DNS_A + DNS_AAAA + DNS_CNAME);
$dnsFound = $records && count($records) > 0;

echo json_encode([
    'host' => $host,
    'dnsFound' => $dnsFound
]);
