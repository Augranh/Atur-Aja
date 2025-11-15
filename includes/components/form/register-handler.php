<?php
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

if (!$data || !isset($data['email']) || !isset($data['password'])) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Data tidak lengkap']);
    exit;
}

$email = $data['email'];
$password = $data['password'];
$username = $data['username'] ?? '';

$usersFile = __DIR__ . '/data/users.json';

if (!file_exists($usersFile)) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'File users.json tidak ditemukan']);
    exit;
}

$usersJson = file_get_contents($usersFile);
$users = json_decode($usersJson, true);

if (!is_array($users)) {
    $users = [];
}

foreach ($users as $user) {
    if ($user['email'] === $email) {
        http_response_code(409);
        echo json_encode(['success' => false, 'message' => 'Email sudah terdaftar']);
        exit;
    }
}

$newUser = [
    'email' => $email,
    'password' => $password
];

if (!empty($username)) {
    $newUser['username'] = $username;
}

$users[] = $newUser;

$result = file_put_contents($usersFile, json_encode($users, JSON_PRETTY_PRINT));

if ($result === false) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Gagal menyimpan data']);
    exit;
}

echo json_encode(['success' => true, 'message' => 'Registrasi berhasil']);
?>
