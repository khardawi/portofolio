<?php 
include_once __DIR__ . '/config.php'; 
include_once __DIR__ . '/includes/header.php'; 
include_once __DIR__ . '/includes/navbar.php'; 
?>

<main class="about-page">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">TENTANG SAYA</span>
            <h1 class="page-title">Profil <span class="gradient-text">Lengkap</span></h1>
        </div>

        <!-- Profil Singkat -->
        <div class="profile-summary glass-card">
            <div class="profile-summary-grid">
                <div class="profile-summary-image">
                    <img src="/api/assets/images/foto-1.jpg" alt="Muhammad Khardawi">
                </div>
                <div class="profile-summary-text">
                    <h2>Muhammad Khardawi, S.Kom</h2>
                    <p class="subtitle-text">Full Stack Developer | UI/UX Enthusiast</p>
                    <div class="contact-quick">
                        <span><i class="fas fa-phone"></i> 081264294425</span>
                        <span><i class="fas fa-envelope"></i> muhammadkhadawir@gmail.com</span>
                        <span><i class="fab fa-instagram"></i> @mhmmd.khardawi</span>
                        <span><i class="fab fa-github"></i> github khardawi</span>
                        <span><i class="fab fa-linkedin"></i> linkedin.com/in/muhammadkhardawi</span>
                    </div>
                    <p class="location"><i class="fas fa-map-marker-alt"></i> Lhokseumawe, Aceh Utara</p>
                </div>
            </div>
        </div>

        <!-- Tentang Saya -->
        <div class="about-text glass-card">
            <h2><i class="fas fa-user-astronaut"></i> Tentang Saya</h2>
            <p>Lulusan Program Studi S-1 Teknik Informatika Universitas Malikussaleh dengan IPK 3.74 / 4.00 tergabung
                dalam penerima beasiswa BANK INDONESIA dan beberapa organisasi internal maupun external kampus, dengan
                landasan kerja keras, komitmen, dan semangat belajar hal baru sebagai prinsip utama.</p>
            <p>Memiliki rekam jejak yang kuat dalam kegiatan organisasi dan terlibat aktif pada ranah sosial, serta
                mampu beradaptasi dengan cepat di berbagai lingkungan. Terbiasa menjalankan peran secara sukarela dalam
                tim dengan mengikuti alur kerja yang sistematis.</p>
            <p>Unggul dalam komunikasi, bertanggung jawab, aktif di media sosial, dan memiliki minat tinggi dalam
                penyelenggaraan acara, siap berperan secara produktif di lingkungan organizer struktural dan
                kolaboratif.</p>
        </div>

        <!-- Pendidikan -->
        <div class="education-section glass-card">
            <h2><i class="fas fa-graduation-cap"></i> Jenjang Pendidikan</h2>
            <div class="education-grid">
                <div class="edu-item">
                    <div class="edu-icon"><i class="fas fa-university"></i></div>
                    <div class="edu-info">
                        <h3>Universitas Malikussaleh</h3>
                        <p>Bachelor of Degree Informatics Engineering</p>
                        <span class="edu-year">Sep 2021 - Feb 2026</span>
                        <span class="edu-grade">IPK: 3.74 / 4.00</span>
                    </div>
                </div>
                <div class="edu-item">
                    <div class="edu-icon"><i class="fas fa-school"></i></div>
                    <div class="edu-info">
                        <h3>Sekolah Menengah Kejuruan Negeri 1 Lhokseumawe</h3>
                        <p>Computer and Network Engineering</p>
                        <span class="edu-year">Jul 2018 - Jun 2021</span>
                        <span class="edu-grade">Nilai: 87.99 / 100.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include_once __DIR__ . '/includes/footer.php'; ?>