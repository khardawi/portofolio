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
                <a href="portfolio.php" class="<?php echo ($current_page == 'portfolio.php') ? 'active' : ''; ?>">
                    <i class="fas fa-briefcase"></i> Portfolio
                </a>
            </li>
            <li>
                <a href="contact.php" class="<?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">
                    <i class="fas fa-envelope"></i> Contact
                </a>
            </li>
            <li class="nav-cta">
                <a href="/api/assets/cv.pdf" class="btn-cv" download>
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

<style>
.navbar {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    box-shadow: 0 2px 20px rgba(0, 0, 0, 0.08);
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
    transition: all 0.3s ease;
}

.navbar.scrolled {
    background: rgba(255, 255, 255, 0.98);
    box-shadow: 0 2px 30px rgba(0, 0, 0, 0.1);
}

.navbar .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.nav-brand a {
    display: flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
    font-size: 1.4rem;
    font-weight: 700;
    color: #1a1a2e;
}

.brand-icon {
    font-size: 1.6rem;
}

.brand-text {
    background: linear-gradient(135deg, #6C63FF, #a855f7);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.nav-menu {
    display: flex;
    align-items: center;
    list-style: none;
    gap: 5px;
    margin: 0;
    padding: 0;
}

.nav-menu a {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 16px;
    color: #4a4a4a;
    text-decoration: none;
    font-weight: 500;
    font-size: 0.95rem;
    border-radius: 8px;
    transition: all 0.3s;
}

.nav-menu a:hover {
    color: #6C63FF;
    background: rgba(108, 99, 255, 0.08);
}

.nav-menu a.active {
    color: #6C63FF;
    background: rgba(108, 99, 255, 0.12);
    font-weight: 600;
}

.nav-menu a.active::after {
    content: '';
    position: absolute;
    bottom: 2px;
    left: 50%;
    transform: translateX(-50%);
    width: 20px;
    height: 3px;
    background: #6C63FF;
    border-radius: 10px;
}

.nav-menu li {
    position: relative;
}

.btn-cv {
    padding: 8px 20px !important;
    background: linear-gradient(135deg, #6C63FF, #a855f7) !important;
    color: #fff !important;
    border-radius: 25px !important;
    font-weight: 600 !important;
    box-shadow: 0 4px 15px rgba(108, 99, 255, 0.3);
}

.btn-cv:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 25px rgba(108, 99, 255, 0.4);
}

.hamburger {
    display: none;
    flex-direction: column;
    cursor: pointer;
    padding: 10px;
    gap: 5px;
}

.hamburger span {
    width: 28px;
    height: 3px;
    background: #1a1a2e;
    border-radius: 10px;
    transition: all 0.3s;
}

.hamburger.active span:nth-child(1) {
    transform: rotate(45deg) translate(5px, 5px);
}

.hamburger.active span:nth-child(2) {
    opacity: 0;
}

.hamburger.active span:nth-child(3) {
    transform: rotate(-45deg) translate(7px, -7px);
}

@media (max-width: 768px) {
    .hamburger {
        display: flex;
    }

    .nav-menu {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: #fff;
        padding: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .nav-menu.active {
        display: flex;
    }

    .nav-menu a {
        justify-content: center;
        padding: 12px;
    }

    .nav-cta {
        width: 100%;
    }

    .btn-cv {
        justify-content: center;
        width: 100%;
    }
}

body {
    padding-top: 70px;
}
</style>

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