<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar" id="navbar">
    <div class="container">
        <div class="nav-brand">
            <a href="index.php">
                <span class="brand-icon">💻</span>
                <span class="brand-text">Khardawi</span>
            </a>
        </div>

        <ul class="nav-menu" id="navMenu">
            <li>
                <a href="index.php"
                    class="<?php echo ($current_page == 'index.php' || $current_page == '') ? 'active' : ''; ?>">
                    <i class="fas fa-home"></i> Home
                </a>
            </li>
            <li>
                <a href="about.php" class="<?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">
                    <i class="fas fa-user"></i> About
                </a>
            </li>
            <li>
                <a href="experience.php" class="<?php echo ($current_page == 'experience.php') ? 'active' : ''; ?>">
                    <i class="fas fa-briefcase"></i> Pengalaman
                </a>
            </li>
            <li>
                <a href="portfolio.php" class="<?php echo ($current_page == 'portfolio.php') ? 'active' : ''; ?>">
                    <i class="fas fa-image"></i> Portfolio
                </a>
            </li>
            <li>
                <a href="contact.php" class="<?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">
                    <i class="fas fa-envelope"></i> Contact
                </a>
            </li>
            <li class="nav-cta">
                <a href="/api/assets/cv.pdf" class="btn-cv" download="CV_Muhammad_Khardawi.pdf">
                    <i class="fas fa-download"></i> Download CV
                </a>
            </li>
        </ul>

        <div class="hamburger" id="hamburger" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</nav>

<script>
function toggleMenu() {
    document.getElementById('hamburger').classList.toggle('active');
    document.getElementById('navMenu').classList.toggle('active');
}

document.addEventListener('click', function(e) {
    const nav = document.getElementById('navbar');
    if (!nav.contains(e.target)) {
        document.getElementById('hamburger').classList.remove('active');
        document.getElementById('navMenu').classList.remove('active');
    }
});

window.addEventListener('scroll', function() {
    document.getElementById('navbar').classList.toggle('scrolled', window.scrollY > 50);
});

document.querySelectorAll('.nav-menu a').forEach(link => {
    link.addEventListener('click', function() {
        document.getElementById('hamburger').classList.remove('active');
        document.getElementById('navMenu').classList.remove('active');
    });
});
</script>