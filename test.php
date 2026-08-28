<?php
include 'config.php';

$query = "SELECT * FROM messages";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "✅ Koneksi dan query berhasil!<br>";
    echo "Jumlah data: " . mysqli_num_rows($result);
} else {
    echo "❌ Error: " . mysqli_error($conn);
}
?>
<?php include 'includes/navbar.php'; ?>