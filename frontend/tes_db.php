<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/Database.php';

$db = new Database();

if ($db->conn) {
    echo "Koneksi Database Berhasil!";
} else {
    echo "Koneksi Database Gagal!";
}
?>