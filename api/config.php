<?php
if (!defined('DB_HOST')) {
    // Konfigurasi database
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'portofolio_db');

    // Konfigurasi website
    define('SITE_NAME', 'Muhammad Khardawi, S.Kom');
    define('SITE_URL', 'https://portofolio-website-eosin-rho.vercel.app');

    // Informasi Kontak
    define('PHONE', '081264294425');
    define('EMAIL', 'muhammadkhadawir@gmail.com');
    define('INSTAGRAM', '@mhmmd.khardawi');
    define('GITHUB', 'github.com/muhammadkhardawi13');
    define('LINKEDIN', 'linkedin.com/in/muhammadkhardawi');

    // Koneksi Database
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    date_default_timezone_set('Asia/Jakarta');
}
?>

<?php
if (!defined('DB_HOST')) {
    // Konfigurasi website
    define('SITE_NAME', 'Muhammad Khardawi, S.Kom');
    define('SITE_URL', 'https://portofolio-website-eosin-rho.vercel.app');

    // ===== TANPA DATABASE =====
    // Hanya untuk tampilan statis, tidak pakai database
    
    // Atau gunakan SQLite (opsional)
    // $conn = new SQLite3('database.db');

    date_default_timezone_set('Asia/Jakarta');
}
?>