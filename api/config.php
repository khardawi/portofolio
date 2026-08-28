<?php
// ============================================
// KONFIGURASI WEBSITE
// ============================================

// Cek apakah di environment Vercel
$is_vercel = getenv('VERCEL') !== false;

if (!defined('DB_HOST')) {
    
    // ============================================
    // KONFIGURASI DATABASE
    // ============================================
    
    if ($is_vercel) {
        // ===== PRODUCTION (Vercel) =====
        // Tanpa Database untuk sementara
        define('DB_HOST', '');
        define('DB_USER', '');
        define('DB_PASS', '');
        define('DB_NAME', '');
        
    } else {
        // ===== LOCAL (Laragon) =====
        define('DB_HOST', 'localhost');
        define('DB_USER', 'root');
        define('DB_PASS', '');
        define('DB_NAME', 'portofolio_db');
    }

    // ============================================
    // KONFIGURASI WEBSITE
    // ============================================
    define('SITE_NAME', 'Muhammad Khardawi, S.Kom');
    define('SITE_URL', 'https://portofolio-website-eosin-rho.vercel.app');
    define('PHONE', '081264294425');
    define('EMAIL', 'muhammadkhadawir@gmail.com');
    define('INSTAGRAM', '@mhmmd.khardawi');
    define('GITHUB', 'github.com/muhammadkhardawi13');
    define('LINKEDIN', 'linkedin.com/in/muhammadkhardawi');

    // ============================================
    // KONEKSI DATABASE (HANYA JIKA ADA)
    // ============================================
    if (DB_HOST && DB_USER && DB_NAME) {
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if (!$conn) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }
    } else {
        // Jika tidak ada database, buat variabel kosong
        $conn = null;
    }

    date_default_timezone_set('Asia/Jakarta');
}

// ============================================
// BASE PATH UNTUK INCLUDE
// ============================================
$base_path = __DIR__ . '/';
?>