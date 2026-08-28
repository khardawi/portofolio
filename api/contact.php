<?php 
include_once __DIR__ . '/config.php'; 
include_once __DIR__ . '/includes/header.php'; 
include_once __DIR__ . '/includes/navbar.php'; 
?>

<main class="contact-page">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">KONTAK</span>
            <h1 class="page-title">Hubungi <span class="gradient-text">Saya</span></h1>
            <p class="section-desc">Jangan ragu untuk menghubungi saya melalui kontak di bawah ini</p>
        </div>

        <!-- Tampilkan pesan sukses/error -->
        <?php if (isset($_GET['success'])): ?>
        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i> Pesan berhasil dikirim!
        </div>
        <?php elseif (isset($_GET['error'])): ?>
        <div class="alert alert-error">
            <i class="fas fa-exclamation-circle"></i> Gagal mengirim pesan. Silahkan hubungi melalui kontak langsung.
        </div>
        <?php endif; ?>

        <div class="contact-wrapper">
            <div class="contact-info glass-card">
                <h2>Informasi Kontak</h2>

                <div class="contact-item">
                    <div class="contact-icon"><i class="fas fa-phone"></i></div>
                    <div>
                        <h4>Telepon / WhatsApp</h4>
                        <p><a href="https://wa.me/6281264294425" target="_blank">081264294425</a></p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                    <div>
                        <h4>Email</h4>
                        <p><a href="mailto:muhammadkhadawir@gmail.com">muhammadkhadawir@gmail.com</a></p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon"><i class="fab fa-instagram"></i></div>
                    <div>
                        <h4>Instagram</h4>
                        <p><a href="https://instagram.com/mhmmd.khardawi" target="_blank">@mhmmd.khardawi</a></p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon"><i class="fab fa-github"></i></div>
                    <div>
                        <h4>GitHub</h4>
                        <p><a href="https://github.com/muhammadkhardawi13" target="_blank">muhammadkhardawi13</a></p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon"><i class="fab fa-linkedin"></i></div>
                    <div>
                        <h4>LinkedIn</h4>
                        <p><a href="https://linkedin.com/in/muhammadkhardawi" target="_blank">muhammadkhardawi</a></p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div>
                        <h4>Lokasi</h4>
                        <p>Lhokseumawe, Aceh Utara</p>
                    </div>
                </div>

                <div class="social-links-contact">
                    <a href="https://wa.me/6281264294425" target="_blank" class="social-link whatsapp"><i
                            class="fab fa-whatsapp"></i></a>
                    <a href="https://instagram.com/mhmmd.khardawi" target="_blank" class="social-link instagram"><i
                            class="fab fa-instagram"></i></a>
                    <a href="https://github.com/muhammadkhardawi13" target="_blank" class="social-link github"><i
                            class="fab fa-github"></i></a>
                    <a href="https://linkedin.com/in/muhammadkhardawi" target="_blank" class="social-link linkedin"><i
                            class="fab fa-linkedin"></i></a>
                    <a href="mailto:muhammadkhadawir@gmail.com" class="social-link email"><i
                            class="fas fa-envelope"></i></a>
                </div>
            </div>

            <div class="contact-form glass-card">
                <h2>Kirim Pesan</h2>
                <form action="process_contact.php" method="POST">
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subjek</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane"></i> Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>

<style>
.alert {
    padding: 15px 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.alert-success {
    background: rgba(34, 197, 94, 0.1);
    border: 1px solid #22c55e;
    color: #22c55e;
}

.alert-error {
    background: rgba(239, 68, 68, 0.1);
    border: 1px solid #ef4444;
    color: #ef4444;
}

.alert i {
    font-size: 1.2rem;
}
</style>

<?php include_once __DIR__ . '/includes/footer.php'; ?>