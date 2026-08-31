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
            <p class="section-desc">Klik pada foto untuk melihat detail lengkap</p>
        </div>

        <div class="portfolio-grid">
            <!-- Project 1 -->
            <div class="portfolio-item glass-card" onclick="openModal('project1')">
                <img src="/api/assets/images/foto-2.jpg" alt="Leadership Ecoturism Expedition">
                <div class="portfolio-overlay">
                    <h3>Leadership Ecoturism Expedition</h3>
                    <p>Aceh Tengah Takengon, 2024</p>
                    <span class="portfolio-tag">🏔️ Ekspedisi</span>
                    <button class="btn btn-small">Lihat Detail</button>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="portfolio-item glass-card" onclick="openModal('project2')">
                <img src="/api/assets/images/foto-3.jpg" alt="Desa Binaan Mahasiswa">
                <div class="portfolio-overlay">
                    <h3>Desa Binaan Mahasiswa Fakultas Teknik</h3>
                    <p>Bener Meriah, 2024</p>
                    <span class="portfolio-tag">🏡 Pengabdian</span>
                    <button class="btn btn-small">Lihat Detail</button>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="portfolio-item glass-card" onclick="openModal('project3')">
                <img src="/api/assets/images/foto-4.jpg" alt="GenBI Komisariat Unimal">
                <div class="portfolio-overlay">
                    <h3>GenBI Komisariat Unimal</h3>
                    <p>Kegiatan Sosial & Pengabdian</p>
                    <span class="portfolio-tag">🤝 Organisasi</span>
                    <button class="btn btn-small">Lihat Detail</button>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="portfolio-item glass-card" onclick="openModal('project4')">
                <img src="/api/assets/images/foto-5.jpg" alt="Pekan QRIS Nasional">
                <div class="portfolio-overlay">
                    <h3>Pekan QRIS Nasional</h3>
                    <p>Lhokseumawe, 2025</p>
                    <span class="portfolio-tag">🏆 Juara 1</span>
                    <button class="btn btn-small">Lihat Detail</button>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="portfolio-item glass-card" onclick="openModal('project5')">
                <img src="/api/assets/images/foto-6.jpg" alt="Relawan Bencana">
                <div class="portfolio-overlay">
                    <h3>Relawan Bencana</h3>
                    <p>Banjir Bandang Sumatera, 2026</p>
                    <span class="portfolio-tag">🆘 Relawan</span>
                    <button class="btn btn-small">Lihat Detail</button>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="portfolio-item glass-card" onclick="openModal('project6')">
                <img src="/api/assets/images/foto-1.jpg" alt="Muhammad Khardawi">
                <div class="portfolio-overlay">
                    <h3>Muhammad Khardawi, S.Kom</h3>
                    <p>Full Stack Developer</p>
                    <span class="portfolio-tag">💻 Profil</span>
                    <button class="btn btn-small">Lihat Detail</button>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- ===== MODAL ===== -->
<div id="projectModal" class="modal">
    <div class="modal-content glass-card">
        <span class="modal-close" onclick="closeModal()">&times;</span>
        <div id="modalBody">
            <!-- Konten akan diisi oleh JavaScript -->
        </div>
    </div>
</div>

<?php include_once __DIR__ . '/includes/footer.php'; ?>