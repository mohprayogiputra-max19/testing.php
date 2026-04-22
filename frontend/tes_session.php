<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/classes/Session.php';

// Inisialisasi objek session
$session = new Session();

// 1. Contoh Set Session (Saat Login Berhasil)
$session->set('user_id', 123);
$session->set('username', 'admin');

// 2. Contoh Get Session
echo "Selamat datang, " . $session->get('username');

// 3. Contoh Check Session
if (!$session->exists('user_id')) {
    header('Location: login.php'); // Redirect jika belum login
    exit();
}

// 4. Contoh Hapus Session (Logout)
if (isset($_GET['logout'])) {
    $session->destroy();
    header('Location: login.php');
}
?>