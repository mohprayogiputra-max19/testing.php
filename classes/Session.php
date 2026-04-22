<?php
class Session {
    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start(); // Memulai session jika belum aktif
        }
    }

    // Mengatur data session
    public function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    // Mengambil data session
    public function get($key) {
        return $_SESSION[$key] ?? null;
    }

    // Memeriksa apakah session ada
    public function exists($key) {
        return isset($_SESSION[$key]);
    }

    // Menghapus data session
    public function delete($key) {
        if ($this->exists($key)) {
            unset($_SESSION[$key]);
        }
    }

    // Menghancurkan semua session (logout)
    public function destroy() {
        session_unset();
        session_destroy();
    }
}
?>