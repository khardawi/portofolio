<?php
include_once __DIR__ . '/config.php';
include_once __DIR__ . '/includes/header.php';
include_once __DIR__ . '/includes/navbar.php';
?>

<main>
    <div class="container" style="padding-top: 100px;">
        <div class="glass-card" style="max-width: 800px; margin: 0 auto;">
            <h1 style="text-align: center; margin-bottom: 30px;">Test Database</h1>

            <?php
            // Cek apakah koneksi database tersedia
            if ($conn) {
                $query = "SELECT * FROM messages";
                $result = mysqli_query($conn, $query);

                if ($result) {
                    echo '<div style="padding: 20px; background: rgba(34, 197, 94, 0.1); border-radius: 10px; border-left: 4px solid #22c55e;">';
                    echo '<h3 style="color: #22c55e;">✅ Koneksi dan query berhasil!</h3>';
                    echo '<p>Jumlah data: ' . mysqli_num_rows($result) . '</p>';
                    echo '</div>';
                } else {
                    echo '<div style="padding: 20px; background: rgba(239, 68, 68, 0.1); border-radius: 10px; border-left: 4px solid #ef4444;">';
                    echo '<h3 style="color: #ef4444;">❌ Error Query</h3>';
                    echo '<p>' . mysqli_error($conn) . '</p>';
                    echo '</div>';
                }
            } else {
                echo '<div style="padding: 20px; background: rgba(234, 179, 8, 0.1); border-radius: 10px; border-left: 4px solid #eab308;">';
                echo '<h3 style="color: #eab308;">⚠️ Database tidak tersedia</h3>';
                echo '<p>Mode production tanpa database (Vercel)</p>';
                echo '</div>';
            }
            ?>

            <div style="margin-top: 30px; text-align: center;">
                <a href="index.php" class="btn btn-primary">Kembali ke Home</a>
            </div>
        </div>
    </div>
</main>

<?php include_once __DIR__ . '/includes/footer.php'; ?>