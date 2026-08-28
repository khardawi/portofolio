<?php 
include_once __DIR__ . '/config.php'; 
include_once __DIR__ . '/includes/header.php'; 
include_once __DIR__ . '/includes/navbar.php'; 
?>

<main class="portfolio-page">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">PORTFOLIO</span>
            <h1 class="page-title">Galeri <span class="gradient-text">Kegiatan</span></h1>
            <p class="section-desc">Dokumentasi kegiatan dan project yang telah saya kerjakan</p>
        </div>

        <div class="portfolio-grid">
            <div class="portfolio-item glass-card">
                <img src="/api/assets/images/foto-2.jpg" alt="Foto Kegiatan 2">
                <div class="portfolio-overlay">
                    <h3>Leadership Ecoturism Expedition</h3>
                    <p>Aceh Tengah Takengon, 2024</p>
                    <span class="portfolio-tag">Ekspedisi</span>
                </div>
            </div>

            <div class="portfolio-item glass-card">
                <img src="/api/assets/images/foto-3.jpg" alt="Foto Kegiatan 3">
                <div class="portfolio-overlay">
                    <h3>Desa Binaan Mahasiswa Fakultas Teknik</h3>
                    <p>Bener Meriah, 2024</p>
                    <span class="portfolio-tag">Pengabdian</span>
                </div>
            </div>

            <div class="portfolio-item glass-card">
                <img src="/api/assets/images/foto-4.jpg" alt="Foto Kegiatan 4">
                <div class="portfolio-overlay">
                    <h3>GenBI Komisariat Unimal</h3>
                    <p>Kegiatan Sosial & Pengabdian</p>
                    <span class="portfolio-tag">Organisasi</span>
                </div>
            </div>

            <div class="portfolio-item glass-card">
                <img src="/api/assets/images/foto-5.jpg" alt="Foto Kegiatan 5">
                <div class="portfolio-overlay">
                    <h3>Pekan QRIS Nasional</h3>
                    <p>Lhokseumawe, 2025</p>
                    <span class="portfolio-tag">Juara 1</span>
                </div>
            </div>

            <div class="portfolio-item glass-card">
                <img src="/api/assets/images/foto-6.jpg" alt="Foto Kegiatan 6">
                <div class="portfolio-overlay">
                    <h3>Relawan Bencana</h3>
                    <p>Banjir Bandang Sumatera, 2026</p>
                    <span class="portfolio-tag">Relawan</span>
                </div>
            </div>

            <div class="portfolio-item glass-card">
                <img src="/api/assets/images/foto-1.jpg" alt="Foto Profil">
                <div class="portfolio-overlay">
                    <h3>Muhammad Khardawi, S.Kom</h3>
                    <p>Full Stack Developer</p>
                    <span class="portfolio-tag">Profil</span>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include_once __DIR__ . '/includes/footer.php'; ?>