<?php 
include_once __DIR__ . '/config.php'; 
include_once __DIR__ . '/includes/header.php'; 
include_once __DIR__ . '/includes/navbar.php'; 
?>

<main>
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <div class="badge">
                        <span class="badge-dot"></span>
                        Tersedia untuk Kolaborasi
                    </div>

                    <h1>Halo, Saya <br><span class="gradient-text">Muhammad Khardawi, S.Kom</span></h1>

                    <div class="typing-wrapper">
                        <span class="typing-prefix">Saya</span>
                        <span class="typing-text" id="typingText"></span>
                    </div>

                    <p class="description">Lulusan Teknik Informatika Universitas Malikussaleh dengan pengalaman di
                        bidang pengembangan web, organisasi, dan pengabdian masyarakat. Berkomitmen untuk memberikan
                        solusi digital terbaik.</p>

                    <div class="hero-stats">
                        <div class="stat-item">
                            <span class="stat-number" data-target="3">0</span>
                            <span class="stat-label">+ Tahun Pengalaman</span>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <span class="stat-number" data-target="20">0</span>
                            <span class="stat-label">+ Project</span>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <span class="stat-number" data-target="15">0</span>
                            <span class="stat-label">+ Organisasi</span>
                        </div>
                    </div>

                    <div class="hero-buttons">
                        <a href="/api/assets/cv.pdf" class="btn btn-primary" download>
                            <i class="fas fa-download"></i> Download CV
                        </a>
                        <a href="about.php" class="btn btn-secondary">
                            <i class="fas fa-user"></i> Tentang Saya
                        </a>
                    </div>
                </div>

                <div class="hero-image">
                    <div class="profile-wrapper">
                        <img src="/api/assets/images/foto-1.jpg" alt="Muhammad Khardawi" class="profile-img">
                        <div class="profile-ring"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="quick-info">
        <div class="container">
            <div class="info-cards">
                <div class="info-card">
                    <i class="fas fa-phone"></i>
                    <h4>Telepon</h4>
                    <p><a href="tel:081264294425">081264294425</a></p>
                </div>
                <div class="info-card">
                    <i class="fas fa-envelope"></i>
                    <h4>Email</h4>
                    <p><a href="mailto:muhammadkhadawir@gmail.com">muhammadkhadawir@gmail.com</a></p>
                </div>
                <div class="info-card">
                    <i class="fab fa-instagram"></i>
                    <h4>Instagram</h4>
                    <p><a href="https://instagram.com/mhmmd.khardawi" target="_blank">@mhmmd.khardawi</a></p>
                </div>
                <div class="info-card">
                    <i class="fab fa-github"></i>
                    <h4>GitHub</h4>
                    <p><a href="https://github.com/muhammadkhardawi13" target="_blank">muhammadkhardawi13</a></p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include_once __DIR__ . '/includes/footer.php'; ?>