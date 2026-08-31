<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?> - Portofolio</title>
    <meta name="description" content="Portofolio Muhammad Khardawi, S.Kom - Full Stack Developer">
    <meta property="og:url" content="https://portofolio-muhammad-khardawi.vercel.app/">
    <meta property="og:title" content="Portofolio Muhammad Khardawi, S.Kom">
    <meta property="og:description" content="Full Stack Developer | UI/UX Enthusiast">

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;800;900&family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
    /* ============================================
       ROOT VARIABLES - TEMA KLASIK MEWAH
       ============================================ */
    :root {
        --gold: #C9A84C;
        --gold-light: #E8D5A3;
        --gold-dark: #A8873A;
        --gold-glow: rgba(201, 168, 76, 0.3);
        --cream: #F8F4EC;
        --cream-dark: #EDE5D6;
        --dark: #1A1410;
        --dark-brown: #2C1F14;
        --text-light: #F5F0E8;
        --text-dark: #2C1F14;
        --shadow: 0 8px 40px rgba(26, 20, 16, 0.12);
        --shadow-hover: 0 16px 60px rgba(201, 168, 76, 0.2);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: 'Inter', sans-serif;
        line-height: 1.6;
        color: var(--dark-brown);
        background: var(--cream);
        padding-top: 80px;
        overflow-x: hidden;
        cursor: none;
    }

    /* ============================================
       KURSOR KHUSUS - Anak Panah Mewah
       ============================================ */
    .custom-cursor {
        position: fixed;
        pointer-events: none;
        z-index: 99999;
        width: 40px;
        height: 40px;
        border: 2px solid var(--gold);
        border-radius: 50%;
        transform: translate(-50%, -50%);
        transition: width 0.3s, height 0.3s, border-color 0.3s, background 0.3s;
        background: rgba(201, 168, 76, 0.05);
        box-shadow: 0 0 30px rgba(201, 168, 76, 0.1);
        mix-blend-mode: difference;
    }

    .custom-cursor::after {
        content: '→';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 0.8rem;
        color: var(--gold);
        opacity: 0.3;
        transition: all 0.3s;
    }

    .custom-cursor.active {
        width: 60px;
        height: 60px;
        border-color: var(--gold-dark);
        background: rgba(201, 168, 76, 0.15);
        box-shadow: 0 0 50px rgba(201, 168, 76, 0.2);
    }

    .custom-cursor.active::after {
        opacity: 1;
        font-size: 1.2rem;
        color: var(--gold-dark);
    }

    .custom-cursor.click {
        width: 30px;
        height: 30px;
        border-color: var(--gold-dark);
        background: rgba(201, 168, 76, 0.3);
    }

    /* ============================================
       ANIMASI BACKGROUND - Klasik Mewah
       ============================================ */
    .bg-pattern {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -2;
        background:
            radial-gradient(ellipse at 20% 50%, rgba(201, 168, 76, 0.05) 0%, transparent 60%),
            radial-gradient(ellipse at 80% 50%, rgba(201, 168, 76, 0.05) 0%, transparent 60%),
            linear-gradient(180deg, #F8F4EC 0%, #EDE5D6 100%);
    }

    .bg-ornament {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        overflow: hidden;
        pointer-events: none;
    }

    .ornament {
        position: absolute;
        border-radius: 50%;
        border: 1px solid rgba(201, 168, 76, 0.06);
        background: radial-gradient(circle, rgba(201, 168, 76, 0.03), transparent);
        animation: ornamentFloat 20s ease-in-out infinite;
    }

    .ornament:nth-child(1) {
        width: 600px;
        height: 600px;
        top: -200px;
        right: -200px;
        animation-delay: 0s;
    }

    .ornament:nth-child(2) {
        width: 400px;
        height: 400px;
        bottom: -100px;
        left: -100px;
        animation-delay: 5s;
    }

    .ornament:nth-child(3) {
        width: 300px;
        height: 300px;
        top: 40%;
        left: 50%;
        animation-delay: 10s;
    }

    .ornament:nth-child(4) {
        width: 500px;
        height: 500px;
        bottom: 20%;
        right: 10%;
        animation-delay: 3s;
    }

    @keyframes ornamentFloat {

        0%,
        100% {
            transform: translate(0, 0) scale(1) rotate(0deg);
        }

        25% {
            transform: translate(30px, -20px) scale(1.05) rotate(5deg);
        }

        50% {
            transform: translate(-20px, 30px) scale(0.95) rotate(-5deg);
        }

        75% {
            transform: translate(20px, 20px) scale(1.02) rotate(3deg);
        }
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* ============================================
       SCROLL REVEAL
       ============================================ */
    .reveal {
        opacity: 0;
        transform: translateY(40px);
        transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .reveal.revealed {
        opacity: 1;
        transform: translateY(0);
    }

    .reveal-left {
        opacity: 0;
        transform: translateX(-60px);
        transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .reveal-left.revealed {
        opacity: 1;
        transform: translateX(0);
    }

    .reveal-right {
        opacity: 0;
        transform: translateX(60px);
        transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .reveal-right.revealed {
        opacity: 1;
        transform: translateX(0);
    }

    /* ============================================
       GLASS CARD - Klasik Mewah
       ============================================ */
    .glass-card {
        background: rgba(255, 252, 248, 0.85);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(201, 168, 76, 0.15);
        border-radius: 24px;
        padding: 35px;
        box-shadow: var(--shadow);
        transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        position: relative;
        overflow: hidden;
    }

    .glass-card::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle at center, rgba(201, 168, 76, 0.03), transparent 70%);
        opacity: 0;
        transition: all 0.6s;
        pointer-events: none;
    }

    .glass-card:hover::before {
        opacity: 1;
    }

    .glass-card:hover {
        transform: translateY(-6px);
        box-shadow: var(--shadow-hover);
        border-color: rgba(201, 168, 76, 0.3);
    }

    /* ============================================
       GRADIENT TEXT - Emas Klasik
       ============================================ */
    .gradient-text {
        background: linear-gradient(135deg, #A8873A 0%, #C9A84C 30%, #E8D5A3 60%, #C9A84C 80%, #A8873A 100%);
        background-size: 300% 300%;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        color: transparent;
        animation: gradientGold 5s ease-in-out infinite;
        font-weight: 800;
    }

    @keyframes gradientGold {

        0%,
        100% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }
    }

    /* ============================================
       BUTTONS - Klasik Mewah dengan Split
       ============================================ */
    .btn-group {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
        margin-top: 10px;
    }

    .btn-group.split {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        padding: 14px 32px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 700;
        font-size: 0.95rem;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        border: none;
        cursor: none;
        position: relative;
        overflow: hidden;
        min-width: 140px;
        letter-spacing: 0.5px;
    }

    .btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.15), transparent);
        transition: all 0.6s;
    }

    .btn:hover::before {
        left: 100%;
    }

    .btn-primary {
        background: linear-gradient(135deg, #A8873A, #C9A84C, #E8D5A3);
        background-size: 200% 200%;
        color: var(--dark);
        box-shadow: 0 4px 25px rgba(201, 168, 76, 0.3);
        animation: btnGold 3s ease-in-out infinite;
    }

    @keyframes btnGold {

        0%,
        100% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }
    }

    .btn-primary:hover {
        transform: translateY(-4px) scale(1.02);
        box-shadow: 0 8px 40px rgba(201, 168, 76, 0.4);
        color: #1A1410;
    }

    .btn-secondary {
        background: rgba(255, 252, 248, 0.9);
        color: #A8873A;
        border: 2px solid #C9A84C;
        box-shadow: 0 4px 20px rgba(201, 168, 76, 0.1);
    }

    .btn-secondary:hover {
        transform: translateY(-4px) scale(1.02);
        background: rgba(255, 252, 248, 1);
        box-shadow: 0 8px 35px rgba(201, 168, 76, 0.2);
        border-color: #A8873A;
    }

    .btn-outline {
        background: transparent;
        color: var(--gold);
        border: 2px solid var(--gold);
        box-shadow: none;
    }

    .btn-outline:hover {
        background: var(--gold);
        color: var(--dark);
        transform: translateY(-4px) scale(1.02);
        box-shadow: 0 8px 35px rgba(201, 168, 76, 0.3);
    }

    .btn-gold {
        background: linear-gradient(135deg, #C9A84C, #E8D5A3, #C9A84C);
        background-size: 200% 200%;
        color: var(--dark);
        box-shadow: 0 4px 25px rgba(201, 168, 76, 0.3);
        animation: btnGold 3s ease-in-out infinite;
    }

    .btn-gold:hover {
        transform: translateY(-4px) scale(1.02);
        box-shadow: 0 8px 40px rgba(201, 168, 76, 0.5);
    }

    .btn-dark {
        background: var(--dark-brown);
        color: var(--text-light);
        box-shadow: 0 4px 25px rgba(26, 20, 16, 0.2);
    }

    .btn-dark:hover {
        transform: translateY(-4px) scale(1.02);
        box-shadow: 0 8px 35px rgba(26, 20, 16, 0.3);
        background: #3A2A1E;
    }

    .btn-sm {
        padding: 10px 24px;
        font-size: 0.85rem;
        min-width: 100px;
    }

    .btn-lg {
        padding: 18px 40px;
        font-size: 1.1rem;
        min-width: 180px;
    }

    /* ============================================
       NAVBAR - Klasik Mewah
       ============================================ */
    .navbar {
        background: rgba(255, 252, 248, 0.92);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        box-shadow: 0 2px 30px rgba(26, 20, 16, 0.06);
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
        transition: all 0.4s ease;
        border-bottom: 1px solid rgba(201, 168, 76, 0.08);
    }

    .navbar.scrolled {
        background: rgba(255, 252, 248, 0.95);
        box-shadow: 0 2px 40px rgba(26, 20, 16, 0.1);
        border-bottom-color: rgba(201, 168, 76, 0.15);
    }

    .navbar .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 20px;
    }

    .nav-brand a {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 1.4rem;
        font-weight: 800;
        color: var(--dark-brown);
        text-decoration: none;
        font-family: 'Playfair Display', serif;
        transition: all 0.3s;
    }

    .nav-brand a:hover {
        transform: scale(1.03);
    }

    .brand-icon {
        font-size: 1.6rem;
        animation: iconRotate 3s ease-in-out infinite;
    }

    @keyframes iconRotate {

        0%,
        100% {
            transform: rotate(0deg) scale(1);
        }

        50% {
            transform: rotate(10deg) scale(1.05);
        }
    }

    .brand-text {
        background: linear-gradient(135deg, #A8873A, #C9A84C, #E8D5A3, #C9A84C, #A8873A);
        background-size: 300% 300%;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        color: transparent;
        animation: gradientGold 4s ease-in-out infinite;
    }

    .nav-menu {
        display: flex;
        align-items: center;
        list-style: none;
        gap: 5px;
        margin: 0;
        padding: 0;
    }

    .nav-menu li {
        position: relative;
    }

    .nav-menu a {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 10px 18px;
        color: var(--dark-brown);
        text-decoration: none;
        font-weight: 600;
        font-size: 0.9rem;
        border-radius: 12px;
        transition: all 0.3s;
        position: relative;
        cursor: none;
    }

    .nav-menu a:hover {
        color: #A8873A;
        background: rgba(201, 168, 76, 0.08);
        transform: translateY(-2px);
    }

    .nav-menu a.active {
        color: #A8873A;
        background: rgba(201, 168, 76, 0.12);
        font-weight: 700;
    }

    .nav-menu a.active::after {
        content: '';
        position: absolute;
        bottom: 6px;
        left: 50%;
        transform: translateX(-50%);
        width: 24px;
        height: 2px;
        background: linear-gradient(90deg, #A8873A, #C9A84C);
        border-radius: 5px;
        animation: activeGold 2s ease-in-out infinite;
    }

    @keyframes activeGold {

        0%,
        100% {
            width: 24px;
            opacity: 1;
        }

        50% {
            width: 35px;
            opacity: 0.6;
        }
    }

    .btn-cv {
        padding: 8px 24px !important;
        background: linear-gradient(135deg, #A8873A, #C9A84C, #E8D5A3) !important;
        background-size: 200% 200%;
        color: var(--dark) !important;
        border-radius: 25px !important;
        font-weight: 700 !important;
        box-shadow: 0 4px 20px rgba(201, 168, 76, 0.3) !important;
        animation: btnGold 3s ease-in-out infinite;
        cursor: none;
    }

    .btn-cv:hover {
        transform: translateY(-3px) scale(1.05) !important;
        box-shadow: 0 8px 35px rgba(201, 168, 76, 0.5) !important;
    }

    .hamburger {
        display: none;
        flex-direction: column;
        cursor: none;
        padding: 10px;
        gap: 5px;
    }

    .hamburger span {
        width: 28px;
        height: 2px;
        background: var(--dark-brown);
        border-radius: 5px;
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

    /* ============================================
       HERO SECTION
       ============================================ */
    .hero {
        padding: 40px 0 30px;
        min-height: 85vh;
        display: flex;
        align-items: center;
        position: relative;
    }

    .hero-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        align-items: center;
    }

    .hero-text h1 {
        font-size: 3.5rem;
        line-height: 1.1;
        margin-bottom: 15px;
        color: var(--dark-brown);
        font-family: 'Playfair Display', serif;
        font-weight: 800;
    }

    .hero-text h1 .gradient-text {
        font-family: 'Playfair Display', serif;
    }

    .badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 8px 24px;
        background: linear-gradient(135deg, rgba(201, 168, 76, 0.12), rgba(168, 135, 58, 0.08));
        border-radius: 50px;
        color: #A8873A;
        font-size: 0.8rem;
        font-weight: 600;
        margin-bottom: 20px;
        border: 1px solid rgba(201, 168, 76, 0.15);
        letter-spacing: 0.5px;
    }

    .badge-dot {
        width: 8px;
        height: 8px;
        background: #22c55e;
        border-radius: 50%;
        animation: blink 1.5s infinite;
    }

    @keyframes blink {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.3;
        }
    }

    .typing-wrapper {
        display: flex;
        align-items: center;
        gap: 6px;
        flex-wrap: wrap;
        margin-bottom: 15px;
    }

    .typing-prefix {
        font-size: 1.2rem;
        color: var(--dark-brown);
        font-weight: 500;
        opacity: 0.7;
    }

    .typing-text {
        font-size: 1.3rem;
        font-weight: 700;
        color: #A8873A;
        border-right: 2px solid #C9A84C;
        padding-right: 5px;
        min-height: 35px;
    }

    .description {
        color: var(--dark-brown);
        font-size: 1.05rem;
        line-height: 1.8;
        margin-bottom: 25px;
        opacity: 0.8;
    }

    /* ============================================
       HERO STATS
       ============================================ */
    .hero-stats {
        display: flex;
        align-items: center;
        gap: 30px;
        padding: 20px 0;
        border-top: 1px solid rgba(201, 168, 76, 0.12);
        border-bottom: 1px solid rgba(201, 168, 76, 0.12);
        margin-bottom: 25px;
    }

    .stat-item {
        display: flex;
        flex-direction: column;
    }

    .stat-number {
        font-size: 2.2rem;
        font-weight: 800;
        color: var(--dark-brown);
        font-family: 'Playfair Display', serif;
    }

    .stat-number::after {
        content: '+';
        color: #C9A84C;
        font-weight: 800;
    }

    .stat-label {
        font-size: 0.8rem;
        color: var(--dark-brown);
        opacity: 0.6;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .stat-divider {
        width: 1px;
        height: 40px;
        background: rgba(201, 168, 76, 0.15);
    }

    .hero-buttons {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .hero-image {
        flex: 1;
    }

    /* ============================================
       PROFILE IMAGE - Klasik Mewah
       ============================================ */
    .profile-wrapper {
        position: relative;
        display: inline-block;
    }

    .profile-img {
        width: 100%;
        max-width: 400px;
        height: 400px;
        border-radius: 50%;
        object-fit: cover;
        box-shadow: 0 20px 60px rgba(201, 168, 76, 0.15);
        border: 4px solid rgba(255, 252, 248, 0.8);
        position: relative;
        z-index: 2;
        transition: all 0.5s;
        animation: profileFloat 6s ease-in-out infinite;
    }

    @keyframes profileFloat {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-12px);
        }
    }

    .profile-img:hover {
        transform: scale(1.02);
        box-shadow: 0 25px 70px rgba(201, 168, 76, 0.2);
    }

    .profile-ring {
        position: absolute;
        top: -12px;
        left: -12px;
        right: -12px;
        bottom: -12px;
        border-radius: 50%;
        border: 2px solid transparent;
        background: linear-gradient(135deg, #A8873A, #C9A84C, #E8D5A3, #C9A84C, #A8873A) border-box;
        background-size: 300% 300%;
        -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
        mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        animation: spinRing 12s linear infinite, ringGold 4s ease-in-out infinite;
        z-index: 1;
        box-shadow: 0 0 60px rgba(201, 168, 76, 0.08);
    }

    @keyframes spinRing {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes ringGold {

        0%,
        100% {
            background: linear-gradient(135deg, #A8873A, #C9A84C) border-box;
        }

        33% {
            background: linear-gradient(135deg, #C9A84C, #E8D5A3) border-box;
        }

        66% {
            background: linear-gradient(135deg, #E8D5A3, #A8873A) border-box;
        }
    }

    .profile-ring-2 {
        position: absolute;
        top: -25px;
        left: -25px;
        right: -25px;
        bottom: -25px;
        border-radius: 50%;
        border: 1px solid rgba(201, 168, 76, 0.08);
        z-index: 0;
        animation: spinRing 20s linear infinite reverse;
    }

    /* ============================================
       QUICK INFO
       ============================================ */
    .quick-info {
        padding: 20px 0 50px;
    }

    .info-cards {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .info-card {
        text-align: center;
        padding: 25px 20px;
        background: rgba(255, 252, 248, 0.85);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border-radius: 16px;
        border: 1px solid rgba(201, 168, 76, 0.08);
        box-shadow: var(--shadow);
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        cursor: none;
    }

    .info-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: var(--shadow-hover);
        border-color: rgba(201, 168, 76, 0.2);
    }

    .info-card i {
        font-size: 2rem;
        background: linear-gradient(135deg, #A8873A, #C9A84C);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 10px;
        transition: all 0.3s;
    }

    .info-card:hover i {
        transform: scale(1.1);
    }

    .info-card h4 {
        font-size: 0.85rem;
        color: var(--dark-brown);
        margin-bottom: 5px;
        font-weight: 600;
        opacity: 0.6;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .info-card p {
        font-weight: 600;
        color: var(--dark-brown);
    }

    .info-card a {
        color: var(--dark-brown);
        text-decoration: none;
        transition: all 0.3s;
    }

    .info-card a:hover {
        color: #A8873A;
    }

    /* ============================================
       SECTION HEADER
       ============================================ */
    .section-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .section-subtitle {
        display: inline-block;
        padding: 6px 24px;
        background: linear-gradient(135deg, rgba(201, 168, 76, 0.1), rgba(168, 135, 58, 0.05));
        color: #A8873A;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 10px;
        border: 1px solid rgba(201, 168, 76, 0.1);
    }

    .page-title {
        font-size: 2.8rem;
        text-align: center;
        margin-bottom: 50px;
        color: var(--dark-brown);
        font-weight: 800;
        font-family: 'Playfair Display', serif;
    }

    .section-desc {
        color: var(--dark-brown);
        margin-top: 10px;
        font-size: 1.05rem;
        opacity: 0.7;
    }

    /* ============================================
       PORTFOLIO
       ============================================ */
    .portfolio-page {
        padding: 30px 0 60px;
    }

    .portfolio-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    .portfolio-item {
        position: relative;
        overflow: hidden;
        border-radius: 20px;
        cursor: none;
        box-shadow: var(--shadow);
        transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        background: rgba(255, 252, 248, 0.9);
        border: 1px solid rgba(201, 168, 76, 0.05);
    }

    .portfolio-item:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: var(--shadow-hover);
        border-color: rgba(201, 168, 76, 0.2);
    }

    .portfolio-item img {
        width: 100%;
        height: 280px;
        object-fit: cover;
        transition: transform 0.6s;
        border-bottom: 1px solid rgba(201, 168, 76, 0.05);
    }

    .portfolio-item:hover img {
        transform: scale(1.05);
    }

    .portfolio-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(26, 20, 16, 0.85), rgba(44, 31, 20, 0.9));
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: #fff;
        opacity: 0;
        transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        padding: 25px;
        text-align: center;
    }

    .portfolio-item:hover .portfolio-overlay {
        opacity: 1;
    }

    .portfolio-overlay .portfolio-tag {
        display: inline-block;
        padding: 4px 16px;
        background: rgba(201, 168, 76, 0.2);
        border: 1px solid rgba(201, 168, 76, 0.2);
        border-radius: 50px;
        font-size: 0.7rem;
        font-weight: 600;
        color: #C9A84C;
        margin-bottom: 10px;
        transform: translateY(20px);
        transition: all 0.5s 0.1s;
    }

    .portfolio-item:hover .portfolio-overlay .portfolio-tag {
        transform: translateY(0);
    }

    .portfolio-overlay h3 {
        font-size: 1.2rem;
        margin-bottom: 5px;
        font-weight: 700;
        transform: translateY(20px);
        transition: all 0.5s 0.15s;
        font-family: 'Playfair Display', serif;
    }

    .portfolio-item:hover .portfolio-overlay h3 {
        transform: translateY(0);
    }

    .portfolio-overlay p {
        font-size: 0.85rem;
        opacity: 0.7;
        margin-bottom: 15px;
        transform: translateY(20px);
        transition: all 0.5s 0.2s;
    }

    .portfolio-item:hover .portfolio-overlay p {
        transform: translateY(0);
    }

    .portfolio-overlay .btn {
        transform: translateY(20px);
        transition: all 0.5s 0.25s;
        font-size: 0.8rem;
        padding: 10px 24px;
    }

    .portfolio-item:hover .portfolio-overlay .btn {
        transform: translateY(0);
    }

    /* ============================================
       MODAL
       ============================================ */
    .modal {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(26, 20, 16, 0.7);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        animation: modalFade 0.4s ease;
    }

    @keyframes modalFade {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .modal-content {
        margin: 2% auto;
        padding: 40px;
        width: 70%;
        max-width: 800px;
        border-radius: 28px;
        position: relative;
        animation: modalSlide 0.5s ease;
        max-height: 90vh;
        overflow-y: auto;
    }

    @keyframes modalSlide {
        from {
            transform: translateY(30px) scale(0.95);
            opacity: 0;
        }

        to {
            transform: translateY(0) scale(1);
            opacity: 1;
        }
    }

    .modal-close {
        position: sticky;
        float: right;
        font-size: 2.2rem;
        cursor: none;
        color: var(--dark-brown);
        transition: all 0.3s;
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: rgba(201, 168, 76, 0.05);
        border: none;
        margin-top: -10px;
    }

    .modal-close:hover {
        color: #A8873A;
        transform: rotate(90deg) scale(1.1);
        background: rgba(201, 168, 76, 0.1);
    }

    .modal-image {
        width: 100%;
        max-height: 350px;
        object-fit: cover;
        border-radius: 16px;
        margin: 15px 0 20px;
        box-shadow: var(--shadow);
    }

    .modal-title {
        font-size: 1.8rem;
        color: var(--dark-brown);
        margin-bottom: 10px;
        font-family: 'Playfair Display', serif;
    }

    .modal-desc {
        color: var(--dark-brown);
        line-height: 1.8;
        font-size: 1rem;
        opacity: 0.8;
    }

    .modal-tech {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 15px;
    }

    .modal-tech-tag {
        padding: 6px 18px;
        background: linear-gradient(135deg, #A8873A, #C9A84C);
        color: #fff;
        border-radius: 25px;
        font-size: 0.75rem;
        font-weight: 600;
        letter-spacing: 0.3px;
    }

    /* ============================================
       EXPERIENCE PAGE
       ============================================ */
    .experience-page {
        padding: 30px 0 60px;
    }

    .experience-section,
    .organization-section,
    .achievement-section,
    .skills-section {
        margin-bottom: 40px;
    }

    .experience-section h2,
    .organization-section h2,
    .achievement-section h2,
    .skills-section h2 {
        margin-bottom: 25px;
        color: var(--dark-brown);
        font-family: 'Playfair Display', serif;
        font-size: 1.8rem;
    }

    .experience-item {
        padding: 25px;
        background: rgba(255, 252, 248, 0.7);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border-radius: 16px;
        margin-bottom: 20px;
        border-left: 3px solid #C9A84C;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        box-shadow: var(--shadow);
    }

    .experience-item:hover {
        transform: translateX(8px) scale(1.01);
        box-shadow: var(--shadow-hover);
        border-left-color: #A8873A;
    }

    .exp-header {
        display: flex;
        gap: 15px;
        margin-bottom: 12px;
    }

    .exp-icon {
        width: 50px;
        height: 50px;
        background: rgba(201, 168, 76, 0.1);
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
        color: #C9A84C;
        flex-shrink: 0;
        border: 1px solid rgba(201, 168, 76, 0.08);
    }

    .exp-title h3 {
        font-size: 1.1rem;
        margin-bottom: 2px;
        color: var(--dark-brown);
        font-weight: 700;
    }

    .exp-company {
        font-weight: 500;
        font-size: 0.9rem;
        color: #A8873A;
    }

    .exp-date {
        display: inline-block;
        padding: 2px 14px;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 600;
        background: rgba(201, 168, 76, 0.08);
        color: #A8873A;
    }

    .exp-desc {
        padding-left: 20px;
        color: var(--dark-brown);
        margin: 10px 0;
        opacity: 0.8;
    }

    .exp-desc li {
        margin-bottom: 6px;
        list-style-type: disc;
    }

    .exp-tech {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 10px;
    }

    .tech-tag {
        padding: 4px 14px;
        border-radius: 15px;
        font-size: 0.75rem;
        border: 1px solid rgba(201, 168, 76, 0.15);
        background: rgba(201, 168, 76, 0.05);
        color: #A8873A;
        font-weight: 500;
        transition: all 0.3s;
    }

    .tech-tag:hover {
        transform: translateY(-2px);
        background: linear-gradient(135deg, #A8873A, #C9A84C);
        color: #fff;
        box-shadow: 0 4px 15px rgba(201, 168, 76, 0.2);
    }

    /* ============================================
       ORGANIZATION
       ============================================ */
    .org-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .org-item {
        padding: 20px;
        background: rgba(255, 252, 248, 0.7);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border-radius: 16px;
        border: 1px solid rgba(201, 168, 76, 0.06);
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        box-shadow: var(--shadow);
    }

    .org-item:hover {
        transform: translateY(-5px) scale(1.01);
        box-shadow: var(--shadow-hover);
        border-color: rgba(201, 168, 76, 0.15);
    }

    .org-header {
        display: flex;
        gap: 12px;
        margin-bottom: 10px;
    }

    .org-icon {
        width: 40px;
        height: 40px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.1rem;
        flex-shrink: 0;
        background: rgba(201, 168, 76, 0.1);
        color: #C9A84C;
    }

    .org-info h3 {
        font-size: 0.95rem;
        margin-bottom: 2px;
        color: var(--dark-brown);
        font-weight: 700;
    }

    .org-role {
        font-weight: 500;
        font-size: 0.85rem;
        color: #A8873A;
    }

    .org-date {
        display: inline-block;
        padding: 1px 12px;
        border-radius: 50px;
        font-size: 0.7rem;
        font-weight: 600;
        background: rgba(201, 168, 76, 0.08);
        color: #A8873A;
    }

    .org-desc {
        color: var(--dark-brown);
        font-size: 0.9rem;
        margin-top: 8px;
        padding-left: 52px;
        opacity: 0.7;
    }

    /* ============================================
       ACHIEVEMENT
       ============================================ */
    .achievement-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .achievement-item {
        display: flex;
        gap: 15px;
        padding: 20px;
        background: rgba(255, 252, 248, 0.7);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border-radius: 16px;
        border: 1px solid rgba(201, 168, 76, 0.06);
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        box-shadow: var(--shadow);
    }

    .achievement-item:hover {
        transform: translateY(-5px) scale(1.01);
        box-shadow: var(--shadow-hover);
        border-color: rgba(201, 168, 76, 0.15);
    }

    .achievement-icon {
        width: 45px;
        height: 45px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        flex-shrink: 0;
        background: rgba(201, 168, 76, 0.1);
        color: #C9A84C;
    }

    .achievement-info h3 {
        font-size: 0.95rem;
        margin-bottom: 2px;
        color: var(--dark-brown);
        font-weight: 700;
    }

    .achievement-info p {
        color: var(--dark-brown);
        font-size: 0.85rem;
        opacity: 0.7;
    }

    /* ============================================
       SKILLS
       ============================================ */
    .skills-wrapper {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
    }

    .skills-category h3 {
        margin-bottom: 12px;
        color: var(--dark-brown);
        font-size: 1rem;
        font-weight: 700;
    }

    .skills-category .skill-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .skills-category .skill-tag {
        background: rgba(201, 168, 76, 0.06);
        padding: 6px 18px;
        border-radius: 20px;
        font-size: 0.8rem;
        color: #A8873A;
        border: 1px solid rgba(201, 168, 76, 0.08);
        font-weight: 500;
        transition: all 0.3s;
    }

    .skills-category .skill-tag:hover {
        background: linear-gradient(135deg, #A8873A, #C9A84C);
        color: #fff;
        transform: translateY(-3px);
        box-shadow: 0 4px 20px rgba(201, 168, 76, 0.2);
    }

    /* ============================================
       CONTACT
       ============================================ */
    .contact-page {
        padding: 30px 0 60px;
    }

    .contact-wrapper {
        display: grid;
        grid-template-columns: 1fr 2fr;
        gap: 30px;
    }

    .contact-info h2 {
        margin-bottom: 20px;
        color: var(--dark-brown);
        font-family: 'Playfair Display', serif;
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 12px 0;
        border-bottom: 1px solid rgba(201, 168, 76, 0.06);
    }

    .contact-item:last-child {
        border-bottom: none;
    }

    .contact-icon {
        width: 45px;
        height: 45px;
        background: rgba(201, 168, 76, 0.06);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #C9A84C;
        font-size: 1.2rem;
        flex-shrink: 0;
        border: 1px solid rgba(201, 168, 76, 0.06);
    }

    .contact-item h4 {
        font-size: 0.8rem;
        color: var(--dark-brown);
        opacity: 0.5;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .contact-item p {
        font-weight: 600;
        color: var(--dark-brown);
    }

    .contact-item a {
        color: var(--dark-brown);
        text-decoration: none;
        transition: all 0.3s;
    }

    .contact-item a:hover {
        color: #A8873A;
    }

    .social-links-contact {
        display: flex;
        gap: 12px;
        margin-top: 20px;
        flex-wrap: wrap;
    }

    .social-link {
        width: 50px;
        height: 50px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 1.2rem;
        transition: all 0.3s;
        text-decoration: none;
        box-shadow: var(--shadow);
    }

    .social-link:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: var(--shadow-hover);
    }

    .social-link.whatsapp {
        background: #25D366;
    }

    .social-link.instagram {
        background: #E4405F;
    }

    .social-link.github {
        background: #181717;
    }

    .social-link.linkedin {
        background: #0A66C2;
    }

    .social-link.email {
        background: #EA4335;
    }

    .contact-form h2 {
        margin-bottom: 20px;
        color: var(--dark-brown);
        font-family: 'Playfair Display', serif;
    }

    .alert {
        padding: 15px 20px;
        border-radius: 12px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .alert-success {
        background: rgba(34, 197, 94, 0.05);
        border: 1px solid rgba(34, 197, 94, 0.1);
        color: #22c55e;
    }

    .alert-error {
        background: rgba(239, 68, 68, 0.05);
        border: 1px solid rgba(239, 68, 68, 0.1);
        color: #ef4444;
    }

    .form-group {
        margin-bottom: 18px;
    }

    .form-group label {
        display: block;
        font-weight: 600;
        margin-bottom: 5px;
        color: var(--dark-brown);
        font-size: 0.85rem;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 14px 18px;
        border: 2px solid rgba(201, 168, 76, 0.08);
        border-radius: 14px;
        font-family: inherit;
        font-size: 1rem;
        transition: border-color 0.3s, box-shadow 0.3s;
        background: rgba(255, 252, 248, 0.7);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        color: var(--dark-brown);
    }

    .form-group input:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #C9A84C;
        box-shadow: 0 0 0 4px rgba(201, 168, 76, 0.05);
    }

    /* ============================================
       FOOTER - Klasik Mewah
       ============================================ */
    .footer {
        background: linear-gradient(135deg, #1A1410 0%, #2C1F14 50%, #1A1410 100%);
        color: var(--text-light);
        padding: 50px 0 30px;
        margin-top: 60px;
        border-top: 1px solid rgba(201, 168, 76, 0.05);
    }

    .footer-content {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr;
        gap: 40px;
        margin-bottom: 30px;
    }

    .footer-section h3 {
        font-size: 1.3rem;
        margin-bottom: 15px;
        font-weight: 700;
        font-family: 'Playfair Display', serif;
        color: #C9A84C;
    }

    .footer-section h3::after {
        content: '';
        display: block;
        width: 40px;
        height: 2px;
        background: linear-gradient(90deg, #C9A84C, #E8D5A3);
        margin-top: 8px;
        border-radius: 5px;
    }

    .footer-section h4 {
        margin-bottom: 15px;
        color: #C9A84C;
        font-weight: 600;
        font-size: 0.9rem;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    .footer-section p {
        color: rgba(245, 240, 232, 0.6);
        line-height: 1.6;
    }

    .footer-contact {
        margin-top: 10px;
    }

    .footer-contact i {
        color: #C9A84C;
        width: 20px;
    }

    .footer-section ul {
        list-style: none;
    }

    .footer-section ul li {
        margin-bottom: 8px;
    }

    .footer-section ul a {
        color: rgba(245, 240, 232, 0.6);
        text-decoration: none;
        transition: all 0.3s;
        font-weight: 500;
        font-size: 0.9rem;
    }

    .footer-section ul a:hover {
        color: #C9A84C;
        transform: translateX(6px);
        display: inline-block;
    }

    .social-links {
        display: flex;
        gap: 12px;
    }

    .social-links a {
        width: 42px;
        height: 42px;
        background: rgba(255, 255, 255, 0.04);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: rgba(245, 240, 232, 0.5);
        text-decoration: none;
        transition: all 0.3s;
        font-size: 1.1rem;
        border: 1px solid rgba(201, 168, 76, 0.05);
    }

    .social-links a:hover {
        background: linear-gradient(135deg, #A8873A, #C9A84C);
        color: #fff;
        transform: translateY(-5px) scale(1.1);
        box-shadow: 0 5px 20px rgba(201, 168, 76, 0.15);
        border-color: transparent;
    }

    .footer-bottom {
        text-align: center;
        padding-top: 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.03);
        color: rgba(245, 240, 232, 0.3);
        font-size: 0.85rem;
    }

    /* ============================================
       FLOATING BUTTON - Klasik Mewah
       ============================================ */
    .float-btn {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 55px;
        height: 55px;
        border-radius: 50%;
        background: linear-gradient(135deg, #A8873A, #C9A84C, #E8D5A3);
        background-size: 200% 200%;
        color: var(--dark);
        border: none;
        cursor: none;
        font-size: 1.3rem;
        box-shadow: 0 4px 25px rgba(201, 168, 76, 0.3);
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        z-index: 999;
        opacity: 0;
        visibility: hidden;
        animation: btnGold 3s ease-in-out infinite;
    }

    .float-btn.show {
        opacity: 1;
        visibility: visible;
        animation: floatPop 0.5s ease-out, btnGold 3s ease-in-out infinite;
    }

    @keyframes floatPop {
        0% {
            transform: scale(0) rotate(-180deg);
            opacity: 0;
        }

        60% {
            transform: scale(1.2) rotate(10deg);
        }

        100% {
            transform: scale(1) rotate(0deg);
            opacity: 1;
        }
    }

    .float-btn:hover {
        transform: translateY(-5px) scale(1.1);
        box-shadow: 0 8px 40px rgba(201, 168, 76, 0.4);
    }

    .float-btn:active {
        transform: scale(0.9);
    }

    /* ============================================
       RESPONSIVE
       ============================================ */
    @media (max-width: 1024px) {
        .hero-text h1 {
            font-size: 2.8rem;
        }

        .portfolio-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 992px) {
        .hero-content {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .hero-text h1 {
            font-size: 2.5rem;
        }

        .hero-stats {
            justify-content: center;
        }

        .hero-buttons {
            justify-content: center;
        }

        .typing-wrapper {
            justify-content: center;
        }

        .info-cards {
            grid-template-columns: repeat(2, 1fr);
        }

        .contact-wrapper {
            grid-template-columns: 1fr;
        }

        .org-grid {
            grid-template-columns: 1fr;
        }

        .achievement-grid {
            grid-template-columns: 1fr;
        }

        .skills-wrapper {
            grid-template-columns: 1fr;
        }

        .footer-content {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .social-links {
            justify-content: center;
        }

        .modal-content {
            width: 90%;
            margin: 5% auto;
        }

        .org-desc {
            padding-left: 0;
            text-align: center;
        }

        .org-header {
            flex-direction: column;
            text-align: center;
        }

        .achievement-item {
            flex-direction: column;
            text-align: center;
        }

        .skills-wrapper {
            text-align: center;
        }

        .skills-category .skill-tags {
            justify-content: center;
        }

        .btn-group.split {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        body {
            padding-top: 70px;
        }

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
            background: rgba(255, 252, 248, 0.95);
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
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

        .info-cards {
            grid-template-columns: 1fr;
        }

        .portfolio-grid {
            grid-template-columns: 1fr;
        }

        .footer-content {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .social-links {
            justify-content: center;
        }

        .hero-text h1 {
            font-size: 2rem;
        }

        .profile-img {
            max-width: 250px;
            height: 250px;
        }

        .glass-card {
            padding: 20px;
        }

        .float-btn {
            width: 45px;
            height: 45px;
            font-size: 1rem;
            bottom: 20px;
            right: 20px;
        }

        .profile-ring {
            display: none;
        }

        .modal-content {
            width: 95%;
            padding: 20px;
            margin: 5% auto;
        }

        .modal-title {
            font-size: 1.4rem;
        }

        .exp-header {
            flex-direction: column;
            text-align: center;
        }

        .exp-desc {
            padding-left: 0;
            text-align: center;
            list-style: none;
        }

        .exp-tech {
            justify-content: center;
        }

        .custom-cursor {
            display: none;
        }

        body {
            cursor: auto;
        }

        .btn,
        .btn-cv,
        .nav-menu a,
        .portfolio-item,
        .modal-close,
        .float-btn {
            cursor: pointer;
        }

        .info-card,
        .org-item,
        .achievement-item {
            cursor: pointer;
        }
    }

    @media (max-width: 480px) {
        .hero-text h1 {
            font-size: 1.8rem;
        }

        .profile-img {
            max-width: 180px;
            height: 180px;
        }

        .hero-stats {
            flex-direction: column;
            gap: 10px;
        }

        .stat-divider {
            display: none;
        }

        .hero-buttons {
            flex-direction: column;
            align-items: center;
        }

        .btn {
            width: 100%;
            justify-content: center;
        }

        .page-title {
            font-size: 2rem;
        }

        .btn-group {
            flex-direction: column;
            width: 100%;
        }

        .btn-group .btn {
            width: 100%;
        }

        .btn-group.split {
            grid-template-columns: 1fr;
        }
    }

    /* ============================================
       SCROLLBAR - Klasik Mewah
       ============================================ */
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: var(--cream);
    }

    ::-webkit-scrollbar-thumb {
        background: linear-gradient(180deg, #A8873A, #C9A84C);
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(180deg, #C9A84C, #E8D5A3);
    }
    </style>
</head>

<body>
    <!-- Custom Cursor -->
    <div class="custom-cursor" id="customCursor"></div>

    <!-- Background -->
    <div class="bg-pattern"></div>
    <div class="bg-ornament">
        <div class="ornament"></div>
        <div class="ornament"></div>
        <div class="ornament"></div>
        <div class="ornament"></div>
    </div>