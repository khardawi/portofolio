<?php
include_once __DIR__ . '/config.php';

// Cek apakah koneksi database tersedia
if ($conn) {
    $query = "SELECT * FROM messages";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "✅ Koneksi dan query berhasil!<br>";
        echo "Jumlah data: " . mysqli_num_rows($result);
    } else {
        echo "❌ Error: " . mysqli_error($conn);
    }
} else {
    echo "⚠️ Database tidak tersedia (mode production tanpa database)";
}
?>