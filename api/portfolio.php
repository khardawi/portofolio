<?php 
include_once __DIR__ . '/config.php'; 
include_once __DIR__ . '/includes/header.php'; 
include_once __DIR__ . '/includes/navbar.php'; 
?>

<main class="portfolio-page">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-subtitle">PORTFOLIO</span>
            <h1 class="page-title">Galeri <span class="gradient-text">Kegiatan</span></h1>
            <p class="section-desc">Klik pada foto untuk melihat detail lengkap</p>
        </div>

        <!-- Split Button Group -->
        <div class="btn-group split"
            style="margin-bottom: 40px; max-width: 500px; margin-left: auto; margin-right: auto;">
            <button class="btn btn-primary zoom-item" onclick="filterPortfolio('all')">Semua</button>
            <button class="btn btn-secondary zoom-item" onclick="filterPortfolio('organisasi')">Organisasi</button>
            <button class="btn btn-outline zoom-item" onclick="filterPortfolio('prestasi')">Prestasi</button>
            <button class="btn btn-light zoom-item" onclick="filterPortfolio('relawan')">Relawan</button>
        </div>

        <div class="portfolio-grid" id="portfolioGrid">
            <!-- Project 1 - Organisasi -->
            <div class="portfolio-item zoom-item" data-category="organisasi" onclick="openModal('project3')">
                <img src="/api/assets/images/foto-4.jpg" alt="GenBI Komisariat Unimal" loading="lazy">
                <div class="portfolio-overlay">
                    <span class="portfolio-tag">🤝 Organisasi</span>
                    <h3>GenBI Komisariat Unimal</h3>
                    <p>Kegiatan Sosial & Pengabdian</p>
                    <button class="btn">Lihat Detail</button>
                </div>
            </div>

            <!-- Project 2 - Prestasi -->
            <div class="portfolio-item zoom-item" data-category="prestasi" onclick="openModal('project4')">
                <img src="/api/assets/images/foto-5.jpg" alt="Pekan QRIS Nasional" loading="lazy">
                <div class="portfolio-overlay">
                    <span class="portfolio-tag">🏆 Prestasi</span>
                    <h3>Pekan QRIS Nasional</h3>
                    <p>Lhokseumawe, 2025</p>
                    <button class="btn">Lihat Detail</button>
                </div>
            </div>

            <!-- Project 3 - Organisasi -->
            <div class="portfolio-item zoom-item" data-category="organisasi" onclick="openModal('project1')">
                <img src="/api/assets/images/foto-2.jpg" alt="Leadership Ecoturism Expedition" loading="lazy">
                <div class="portfolio-overlay">
                    <span class="portfolio-tag">🏔️ Ekspedisi</span>
                    <h3>Leadership Ecoturism</h3>
                    <p>Aceh Tengah Takengon, 2024</p>
                    <button class="btn">Lihat Detail</button>
                </div>
            </div>

            <!-- Project 4 - Relawan -->
            <div class="portfolio-item zoom-item" data-category="relawan" onclick="openModal('project5')">
                <img src="/api/assets/images/foto-6.jpg" alt="Relawan Bencana" loading="lazy">
                <div class="portfolio-overlay">
                    <span class="portfolio-tag">🆘 Relawan</span>
                    <h3>Relawan Bencana</h3>
                    <p>Banjir Bandang Sumatera, 2026</p>
                    <button class="btn">Lihat Detail</button>
                </div>
            </div>

            <!-- Project 5 - Organisasi -->
            <div class="portfolio-item zoom-item" data-category="organisasi" onclick="openModal('project2')">
                <img src="/api/assets/images/foto-3.jpg" alt="Desa Binaan Mahasiswa" loading="lazy">
                <div class="portfolio-overlay">
                    <span class="portfolio-tag">🏡 Pengabdian</span>
                    <h3>Desa Binaan Mahasiswa FT</h3>
                    <p>Bener Meriah, 2024</p>
                    <button class="btn">Lihat Detail</button>
                </div>
            </div>

            <!-- Project 6 - Profil -->
            <div class="portfolio-item zoom-item" data-category="all" onclick="openModal('project6')">
                <img src="/api/assets/images/foto-1.jpg" alt="Muhammad Khardawi" loading="lazy">
                <div class="portfolio-overlay">
                    <span class="portfolio-tag">💻 Profil</span>
                    <h3>Muhammad Khardawi, S.Kom</h3>
                    <p>Full Stack Developer</p>
                    <button class="btn">Lihat Detail</button>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- ===== MODAL ===== -->
<div id="projectModal" class="modal">
    <div class="modal-content" id="modalBody">
        <!-- Konten akan diisi oleh JavaScript -->
    </div>
</div>

<script>
function filterPortfolio(category) {
    const items = document.querySelectorAll('.portfolio-item');
    items.forEach(item => {
        if (category === 'all' || item.dataset.category === category) {
            item.style.display = 'block';
            item.style.animation = 'fadeInUp 0.5s ease-out';
        } else {
            item.style.display = 'none';
        }
    });
}
</script>

<?php include_once __DIR__ . '/includes/footer.php'; ?>