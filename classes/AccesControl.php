<?php
class AccessControl {

    public static function checkRole($role) {
        if ($_SESSION['user']['role'] != $role) {
            echo "Akses ditolak!";
            exit;
        }
    }

    public static function isLoggedIn() {
        if (!isset($_SESSION['user'])) {
            header("Location: ../auth/login.php");
            exit;
        }
    }

    public static function isSessionActive() {
        if (isset($_SESSION['user'])) {
            header("Location: ../backend/dashboard.php");
            exit;
        }
    }
}
?>