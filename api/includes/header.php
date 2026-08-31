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

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <style>
    /* ============================================
       RESET & BASE - Background Gradasi Emas
       ============================================ */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
        line-height: 1.6;
        color: #2d1b0e;
        background: linear-gradient(135deg, #faf3e8 0%, #f5e6d3 30%, #eddcc8 60%, #e5d2bc 100%);
        background-attachment: fixed;
        min-height: 100vh;
        padding-top: 80px;
        overflow-x: hidden;
    }

    /* ============================================
       ANIMASI BACKGROUND BERGERAK - Emas
       ============================================ */
    .animated-bg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        background: linear-gradient(135deg, #faf3e8 0%, #f5e6d3 20%, #eddcc8 40%, #e5d2bc 60%, #faf3e8 80%, #f5e6d3 100%);
        background-size: 400% 400%;
        animation: gradientBG 15s ease-in-out infinite;
    }

    @keyframes gradientBG {
        0% {
            background-position: 0% 50%;
        }

        25% {
            background-position: 50% 0%;
        }

        50% {
            background-position: 100% 50%;
        }

        75% {
            background-position: 50% 100%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    /* Floating Particles - Emas */
    .particles {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        overflow: hidden;
        pointer-events: none;
    }

    .particle {
        position: absolute;
        bottom: -100px;
        background: radial-gradient(circle, rgba(212, 175, 55, 0.15), rgba(212, 175, 55, 0.05));
        border-radius: 50%;
        animation: floatParticle 14s ease-in-out infinite;
        border: 1px solid rgba(212, 175, 55, 0.08);
        box-shadow: 0 0 30px rgba(212, 175, 55, 0.05);
    }

    .particle:nth-child(1) {
        width: 100px;
        height: 100px;
        left: 5%;
        animation-delay: 0s;
    }

    .particle:nth-child(2) {
        width: 140px;
        height: 140px;
        left: 20%;
        animation-delay: 2s;
    }

    .particle:nth-child(3) {
        width: 70px;
        height: 70px;
        left: 35%;
        animation-delay: 4s;
    }

    .particle:nth-child(4) {
        width: 180px;
        height: 180px;
        left: 55%;
        animation-delay: 1s;
    }

    .particle:nth-child(5) {
        width: 110px;
        height: 110px;
        left: 70%;
        animation-delay: 3s;
    }

    .particle:nth-child(6) {
        width: 130px;
        height: 130px;
        left: 85%;
        animation-delay: 5s;
    }

    .particle:nth-child(7) {
        width: 80px;
        height: 80px;
        left: 10%;
        animation-delay: 7s;
    }

    .particle:nth-child(8) {
        width: 150px;
        height: 150px;
        left: 45%;
        animation-delay: 6s;
    }

    @keyframes floatParticle {
        0% {
            transform: translateY(0) scale(1) rotate(0deg);
            opacity: 0;
        }

        10% {
            opacity: 0.3;
        }

        50% {
            transform: translateY(-60vh) scale(0.8) rotate(180deg);
            opacity: 0.5;
        }

        90% {
            opacity: 0.2;
        }

        100% {
            transform: translateY(-110vh) scale(0.5) rotate(360deg);
            opacity: 0;
        }
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* ============================================
       SCROLL REVEAL - Dari Kiri ke Kanan
       ============================================ */
    .reveal-left {
        opacity: 0;
        transform: translateX(-60px);
        transition: all 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .reveal-left.revealed {
        opacity: 1;
        transform: translateX(0);
    }

    .reveal-right {
        opacity: 0;
        transform: translateX(60px);
        transition: all 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .reveal-right.revealed {
        opacity: 1;
        transform: translateX(0);
    }

    /* ============================================
       TEKS MENONJOL - Emas
       ============================================ */
    .text-highlight {
        position: relative;
        display: inline-block;
        font-weight: 800;
        color: #8B6914;
        text-shadow: 0 0 30px rgba(212, 175, 55, 0.2);
        transition: all 0.3s;
    }

    .text-highlight::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 30%;
        background: linear-gradient(90deg, rgba(212, 175, 55, 0.15), rgba(212, 175, 55, 0.3), rgba(212, 175, 55, 0.15));
        z-index: -1;
        transform: skewX(-5deg);
        transition: all 0.3s;
    }

    .text-highlight:hover::after {
        height: 60%;
        background: linear-gradient(90deg, rgba(212, 175, 55, 0.2), rgba(212, 175, 55, 0.4), rgba(212, 175, 55, 0.2));
    }

    .text-highlight:hover {
        transform: scale(1.05);
        color: #6B4F12;
        text-shadow: 0 0 40px rgba(212, 175, 55, 0.3);
    }

    /* ============================================
       GLASS CARD - Emas
       ============================================ */
    .glass-card {
        background: rgba(255, 248, 235, 0.88);
        -webkit-backdrop-filter: blur(15px);
        backdrop-filter: blur(15px);
        border: 1px solid rgba(212, 175, 55, 0.25);
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 8px 32px rgba(212, 175, 55, 0.15);
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .glass-card:hover {
        transform: translateY(-8px) scale(1.01);
        box-shadow: 0 16px 48px rgba(212, 175, 55, 0.25);
        border-color: rgba(212, 175, 55, 0.4);
        background: rgba(255, 248, 235, 0.95);
    }

    /* ============================================
       GRADIENT TEXT - Emas
       ============================================ */
    .gradient-text {
        background: linear-gradient(135deg, #8B6914 0%, #B8860B 20%, #D4AF37 40%, #FFD700 60%, #F0C040 80%, #C5A028 100%);
        background-size: 300% 300%;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        color: transparent;
        animation: gradientMove 5s ease-in-out infinite;
        font-weight: 800;
        text-shadow: none;
    }

    @keyframes gradientMove {

        0%,
        100% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }
    }

    /* ============================================
       GRADIENT BACKGROUND - Emas
       ============================================ */
    .gradient-bg {
        background: linear-gradient(135deg, #8B6914, #B8860B, #D4AF37, #FFD700, #F0C040, #C5A028);
        background-size: 300% 300%;
        animation: gradientBg 4s ease-in-out infinite;
    }

    @keyframes gradientBg {

        0%,
        100% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }
    }

    /* ============================================
       BUTTONS - Gradasi Emas dengan Efek Timbul
       ============================================ */
    .btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 34px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 700;
        font-size: 1rem;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        border: none;
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }

    .btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: all 0.6s;
    }

    .btn:hover::before {
        left: 100%;
    }

    .btn-primary {
        background: linear-gradient(135deg, #8B6914, #B8860B, #D4AF37, #FFD700);
        background-size: 300% 300%;
        color: #2d1b0e;
        box-shadow: 0 4px 25px rgba(212, 175, 55, 0.4), inset 0 -3px 0 rgba(0, 0, 0, 0.1);
        animation: gradientBtn 4s ease-in-out infinite;
    }

    @keyframes gradientBtn {

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
        box-shadow: 0 8px 40px rgba(212, 175, 55, 0.5), inset 0 -3px 0 rgba(0, 0, 0, 0.15);
        color: #1a0f06;
    }

    .btn-primary:active {
        transform: translateY(0px) scale(0.98);
        box-shadow: 0 2px 15px rgba(212, 175, 55, 0.3);
    }

    .btn-secondary {
        background: rgba(255, 248, 235, 0.9);
        color: #8B6914;
        border: 2px solid #D4AF37;
        box-shadow: 0 4px 20px rgba(212, 175, 55, 0.15);
    }

    .btn-secondary:hover {
        transform: translateY(-4px) scale(1.02);
        background: rgba(255, 248, 235, 1);
        box-shadow: 0 8px 35px rgba(212, 175, 55, 0.3);
    }

    .btn-secondary:active {
        transform: translateY(0px) scale(0.98);
    }

    /* ============================================
       NAVBAR - Emas
       ============================================ */
    .navbar {
        background: rgba(255, 248, 235, 0.92);
        -webkit-backdrop-filter: blur(15px);
        backdrop-filter: blur(15px);
        box-shadow: 0 2px 20px rgba(212, 175, 55, 0.15);
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
        transition: all 0.4s ease;
    }

    .navbar.scrolled {
        background: rgba(255, 248, 235, 0.95);
        box-shadow: 0 2px 30px rgba(212, 175, 55, 0.25);
    }

    .navbar .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 20px;
    }

    .nav-brand a {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 1.5rem;
        font-weight: 800;
        color: #8B6914;
        text-decoration: none;
        transition: all 0.3s;
    }

    .nav-brand a:hover {
        transform: scale(1.05);
    }

    .brand-icon {
        font-size: 1.8rem;
        animation: iconPulse 2s ease-in-out infinite;
    }

    @keyframes iconPulse {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1) rotate(5deg);
        }
    }

    .brand-text {
        background: linear-gradient(135deg, #8B6914, #B8860B, #D4AF37, #FFD700, #C5A028, #8B6914);
        background-size: 300% 300%;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        color: transparent;
        animation: gradientMove 4s ease-in-out infinite;
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
        color: #8B6914;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.95rem;
        border-radius: 8px;
        transition: all 0.3s;
        position: relative;
    }

    .nav-menu a:hover {
        color: #6B4F12;
        background: rgba(212, 175, 55, 0.15);
        transform: translateY(-2px);
    }

    .nav-menu a.active {
        color: #6B4F12;
        background: rgba(212, 175, 55, 0.2);
        font-weight: 700;
    }

    .nav-menu a.active::after {
        content: '';
        position: absolute;
        bottom: 5px;
        left: 50%;
        transform: translateX(-50%);
        width: 20px;
        height: 3px;
        background: linear-gradient(90deg, #8B6914, #D4AF37);
        border-radius: 10px;
        animation: activePulse 2s ease-in-out infinite;
    }

    @keyframes activePulse {

        0%,
        100% {
            width: 20px;
            opacity: 1;
        }

        50% {
            width: 30px;
            opacity: 0.7;
        }
    }

    .btn-cv {
        padding: 8px 22px !important;
        background: linear-gradient(135deg, #8B6914, #B8860B, #D4AF37, #FFD700) !important;
        background-size: 200% 200%;
        color: #2d1b0e !important;
        border-radius: 25px !important;
        font-weight: 700 !important;
        box-shadow: 0 4px 20px rgba(212, 175, 55, 0.4) !important;
        animation: gradientBtn 3s ease-in-out infinite;
    }

    .btn-cv:hover {
        transform: translateY(-3px) scale(1.05) !important;
        box-shadow: 0 8px 35px rgba(212, 175, 55, 0.6) !important;
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
        background: #8B6914;
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
            background: rgba(255, 248, 235, 0.95);
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

    /* ============================================
       HERO SECTION
       ============================================ */
    .hero {
        padding: 60px 0 40px;
        min-height: 90vh;
        display: flex;
        align-items: center;
    }

    .hero-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
    }

    .hero-text h1 {
        font-size: 3rem;
        line-height: 1.2;
        margin-bottom: 10px;
        color: #6B4F12;
    }

    .badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 20px;
        background: linear-gradient(135deg, rgba(212, 175, 55, 0.15), rgba(139, 105, 20, 0.1));
        border-radius: 50px;
        color: #8B6914;
        font-size: 0.85rem;
        font-weight: 600;
        margin-bottom: 20px;
        border: 1px solid rgba(212, 175, 55, 0.2);
        animation: pulseBadge 2s ease-in-out infinite;
    }

    @keyframes pulseBadge {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.02);
        }
    }

    .badge-dot {
        width: 8px;
        height: 8px;
        background: #D4AF37;
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
        color: #8B6914;
        font-weight: 500;
    }

    .typing-text {
        font-size: 1.3rem;
        font-weight: 700;
        color: #6B4F12;
        border-right: 3px solid #D4AF37;
        padding-right: 5px;
        min-height: 35px;
        animation: typingPulse 1s step-end infinite;
    }

    @keyframes typingPulse {

        0%,
        100% {
            border-color: #D4AF37;
        }

        50% {
            border-color: transparent;
        }
    }

    .description {
        color: #6B4F12;
        font-size: 1.1rem;
        line-height: 1.8;
        margin-bottom: 25px;
    }

    /* ============================================
       HERO STATS
       ============================================ */
    .hero-stats {
        display: flex;
        align-items: center;
        gap: 30px;
        padding: 20px 0;
        border-top: 1px solid rgba(212, 175, 55, 0.2);
        border-bottom: 1px solid rgba(212, 175, 55, 0.2);
        margin-bottom: 25px;
    }

    .stat-item {
        display: flex;
        flex-direction: column;
    }

    .stat-number {
        font-size: 2rem;
        font-weight: 800;
        color: #6B4F12;
        position: relative;
    }

    .stat-number::after {
        content: '+';
        color: #D4AF37;
        font-weight: 800;
    }

    .stat-label {
        font-size: 0.85rem;
        color: #8B6914;
        font-weight: 500;
    }

    .stat-divider {
        width: 2px;
        height: 40px;
        background: rgba(212, 175, 55, 0.2);
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
       PROFILE IMAGE - Ring Emas
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
        box-shadow: 0 10px 40px rgba(212, 175, 55, 0.3);
        border: 5px solid rgba(255, 248, 235, 0.8);
        position: relative;
        z-index: 2;
        transition: all 0.5s;
        animation: profileFloat 4s ease-in-out infinite;
    }

    @keyframes profileFloat {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    .profile-img:hover {
        transform: scale(1.02);
        box-shadow: 0 15px 50px rgba(212, 175, 55, 0.4);
    }

    .profile-ring {
        position: absolute;
        top: -15px;
        left: -15px;
        right: -15px;
        bottom: -15px;
        border-radius: 50%;
        border: 4px solid transparent;
        background: linear-gradient(135deg, #8B6914, #B8860B, #D4AF37, #FFD700, #F0C040, #C5A028, #8B6914) border-box;
        background-size: 300% 300%;
        -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
        mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        animation: spinRing 8s linear infinite, ringColor 4s ease-in-out infinite;
        z-index: 1;
        box-shadow: 0 0 40px rgba(212, 175, 55, 0.2);
    }

    @keyframes spinRing {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes ringColor {

        0%,
        100% {
            background: linear-gradient(135deg, #8B6914, #B8860B) border-box;
        }

        33% {
            background: linear-gradient(135deg, #B8860B, #D4AF37) border-box;
        }

        66% {
            background: linear-gradient(135deg, #D4AF37, #FFD700) border-box;
        }
    }

    /* ============================================
       QUICK INFO - Emas
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
        padding: 25px;
        background: rgba(255, 248, 235, 0.8);
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        border: 1px solid rgba(212, 175, 55, 0.2);
        box-shadow: 0 4px 15px rgba(212, 175, 55, 0.1);
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .info-card:hover {
        transform: translateY(-8px) scale(1.03);
        box-shadow: 0 12px 30px rgba(212, 175, 55, 0.2);
        border-color: rgba(212, 175, 55, 0.3);
    }

    .info-card i {
        font-size: 2.2rem;
        background: linear-gradient(135deg, #8B6914, #D4AF37);
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
        font-size: 0.9rem;
        color: #8B6914;
        margin-bottom: 5px;
        font-weight: 600;
    }

    .info-card p {
        font-weight: 600;
        color: #6B4F12;
    }

    .info-card a {
        color: #6B4F12;
        text-decoration: none;
        transition: all 0.3s;
    }

    .info-card a:hover {
        color: #D4AF37;
    }

    /* ============================================
       SECTION HEADER - Emas
       ============================================ */
    .section-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .section-subtitle {
        display: inline-block;
        padding: 6px 20px;
        background: linear-gradient(135deg, rgba(212, 175, 55, 0.15), rgba(139, 105, 20, 0.1));
        color: #8B6914;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 10px;
        border: 1px solid rgba(212, 175, 55, 0.2);
        animation: pulseBadge 2s ease-in-out infinite;
    }

    .page-title {
        font-size: 2.5rem;
        text-align: center;
        margin-bottom: 50px;
        color: #6B4F12;
        font-weight: 800;
    }

    .section-desc {
        color: #8B6914;
        margin-top: 10px;
        font-size: 1.1rem;
    }

    /* ============================================
       MODAL - Emas
       ============================================ */
    .modal {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(45, 27, 14, 0.7);
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        animation: modalFadeIn 0.4s ease;
    }

    @keyframes modalFadeIn {
        from {
            opacity: 0;
            transform: scale(0.9);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .modal-content {
        margin: 3% auto;
        padding: 40px;
        width: 70%;
        max-width: 800px;
        border-radius: 25px;
        position: relative;
        animation: modalSlideUp 0.5s ease;
    }

    @keyframes modalSlideUp {
        from {
            transform: translateY(50px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .modal-close {
        position: absolute;
        right: 20px;
        top: 15px;
        font-size: 2.5rem;
        cursor: pointer;
        color: #8B6914;
        transition: all 0.3s;
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: rgba(212, 175, 55, 0.05);
    }

    .modal-close:hover {
        color: #6B4F12;
        transform: rotate(90deg) scale(1.1);
        background: rgba(212, 175, 55, 0.15);
    }

    .modal-image {
        width: 100%;
        max-height: 400px;
        object-fit: cover;
        border-radius: 15px;
        margin: 10px 0 20px;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
    }

    .modal-title {
        font-size: 1.8rem;
        color: #6B4F12;
        margin-bottom: 10px;
    }

    .modal-desc {
        color: #8B6914;
        line-height: 1.8;
        font-size: 1.05rem;
    }

    .modal-tech {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 15px;
    }

    .modal-tech-tag {
        padding: 6px 18px;
        background: linear-gradient(135deg, #8B6914, #D4AF37);
        color: #fff;
        border-radius: 25px;
        font-size: 0.8rem;
        font-weight: 600;
    }

    /* ============================================
       PORTFOLIO - Emas
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
        border-radius: 18px;
        cursor: pointer;
        box-shadow: 0 5px 20px rgba(212, 175, 55, 0.15);
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .portfolio-item:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 15px 40px rgba(212, 175, 55, 0.3);
    }

    .portfolio-item img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        transition: transform 0.6s;
    }

    .portfolio-item:hover img {
        transform: scale(1.08);
    }

    .portfolio-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(139, 105, 20, 0.92), rgba(212, 175, 55, 0.92));
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: #fff;
        opacity: 0;
        transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        padding: 20px;
        text-align: center;
    }

    .portfolio-item:hover .portfolio-overlay {
        opacity: 1;
    }

    .portfolio-overlay h3 {
        font-size: 1.3rem;
        margin-bottom: 5px;
        font-weight: 700;
        transform: translateY(20px);
        transition: all 0.5s;
    }

    .portfolio-item:hover .portfolio-overlay h3 {
        transform: translateY(0);
    }

    .portfolio-overlay p {
        font-size: 0.9rem;
        opacity: 0.8;
        margin-bottom: 10px;
        transform: translateY(20px);
        transition: all 0.5s 0.1s;
    }

    .portfolio-item:hover .portfolio-overlay p {
        transform: translateY(0);
    }

    .portfolio-tag {
        display: inline-block;
        padding: 4px 16px;
        background: rgba(255, 255, 255, 0.25);
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 600;
        transform: translateY(20px);
        transition: all 0.5s 0.2s;
    }

    .portfolio-item:hover .portfolio-tag {
        transform: translateY(0);
    }

    .portfolio-overlay .btn {
        margin-top: 10px;
        padding: 8px 24px;
        font-size: 0.85rem;
        background: linear-gradient(135deg, #8B6914, #D4AF37);
        color: #fff;
        transform: translateY(20px);
        transition: all 0.5s 0.3s;
    }

    .portfolio-item:hover .portfolio-overlay .btn {
        transform: translateY(0);
    }

    /* ============================================
       FLOATING BUTTON - Emas
       ============================================ */
    .float-btn {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: linear-gradient(135deg, #8B6914, #B8860B, #D4AF37, #FFD700);
        background-size: 200% 200%;
        color: #2d1b0e;
        border: none;
        cursor: pointer;
        font-size: 1.5rem;
        box-shadow: 0 4px 25px rgba(212, 175, 55, 0.5);
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        z-index: 999;
        opacity: 0;
        visibility: hidden;
        animation: gradientBtn 3s ease-in-out infinite;
    }

    .float-btn.show {
        opacity: 1;
        visibility: visible;
        animation: floatBtnPop 0.5s ease-out, gradientBtn 3s ease-in-out infinite;
    }

    @keyframes floatBtnPop {
        0% {
            transform: scale(0);
            opacity: 0;
        }

        60% {
            transform: scale(1.2);
        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    .float-btn:hover {
        transform: translateY(-5px) scale(1.1);
        box-shadow: 0 8px 40px rgba(212, 175, 55, 0.7);
    }

    .float-btn:active {
        transform: translateY(0px) scale(0.95);
    }

    /* ============================================
       FOOTER - Gradasi Emas
       ============================================ */
    .footer {
        background: linear-gradient(135deg, #5a3e0e, #7a5518, #9a6b22, #ba822c, #5a3e0e);
        background-size: 300% 300%;
        color: #fff;
        padding: 50px 0 20px;
        margin-top: 60px;
        animation: gradientBg 6s ease-in-out infinite;
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
    }

    .footer-section h3::after {
        content: '';
        display: block;
        width: 40px;
        height: 3px;
        background: linear-gradient(90deg, #D4AF37, #FFD700);
        margin-top: 8px;
        border-radius: 5px;
    }

    .footer-section h4 {
        margin-bottom: 15px;
        color: #f0d080;
        font-weight: 600;
    }

    .footer-section p {
        color: #f5e6d3;
        line-height: 1.6;
    }

    .footer-contact {
        margin-top: 10px;
    }

    .footer-contact i {
        color: #D4AF37;
        width: 20px;
    }

    .footer-section ul {
        list-style: none;
    }

    .footer-section ul li {
        margin-bottom: 8px;
    }

    .footer-section ul a {
        color: #f5e6d3;
        text-decoration: none;
        transition: all 0.3s;
        font-weight: 500;
    }

    .footer-section ul a:hover {
        color: #D4AF37;
        transform: translateX(5px);
        display: inline-block;
    }

    .social-links {
        display: flex;
        gap: 12px;
    }

    .social-links a {
        width: 42px;
        height: 42px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #f5e6d3;
        text-decoration: none;
        transition: all 0.3s;
        font-size: 1.2rem;
    }

    .social-links a:hover {
        background: linear-gradient(135deg, #D4AF37, #FFD700);
        color: #2d1b0e;
        transform: translateY(-5px) scale(1.1);
        box-shadow: 0 5px 20px rgba(212, 175, 55, 0.3);
    }

    .footer-bottom {
        text-align: center;
        padding-top: 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
        color: #f0d080;
        font-size: 0.9rem;
    }

    /* ============================================
       EXPERIENCE PAGE - Emas
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
        color: #6B4F12;
    }

    .experience-item {
        padding: 25px;
        background: rgba(255, 248, 235, 0.6);
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        margin-bottom: 20px;
        border-left: 4px solid #D4AF37;
        transition: all 0.3s;
    }

    .experience-item:hover {
        transform: translateX(5px);
        box-shadow: 0 5px 20px rgba(212, 175, 55, 0.15);
    }

    .exp-header {
        display: flex;
        gap: 15px;
        margin-bottom: 12px;
    }

    .exp-icon {
        width: 50px;
        height: 50px;
        background: rgba(212, 175, 55, 0.15);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
        color: #D4AF37;
        flex-shrink: 0;
    }

    .exp-title h3 {
        font-size: 1.1rem;
        margin-bottom: 2px;
        color: #6B4F12;
    }

    .exp-company {
        font-weight: 500;
        font-size: 0.95rem;
        color: #8B6914;
    }

    .exp-date {
        display: inline-block;
        padding: 2px 12px;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 500;
        background: rgba(212, 175, 55, 0.1);
        color: #8B6914;
    }

    .exp-desc {
        padding-left: 20px;
        color: #6B4F12;
        margin: 10px 0;
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
        font-size: 0.8rem;
        border: 1px solid rgba(212, 175, 55, 0.2);
        background: rgba(212, 175, 55, 0.08);
        color: #8B6914;
        transition: all 0.3s;
    }

    .tech-tag:hover {
        transform: translateY(-2px);
        box-shadow: 0 3px 10px rgba(212, 175, 55, 0.2);
        background: linear-gradient(135deg, #8B6914, #D4AF37);
        color: #fff;
    }

    /* ============================================
       SKILLS - Emas
       ============================================ */
    .skills-wrapper {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
    }

    .skills-category h3 {
        margin-bottom: 12px;
        color: #6B4F12;
        font-size: 1rem;
    }

    .skills-category .skill-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .skills-category .skill-tag {
        background: rgba(212, 175, 55, 0.1);
        padding: 6px 16px;
        border-radius: 20px;
        font-size: 0.85rem;
        color: #8B6914;
        border: 1px solid rgba(212, 175, 55, 0.15);
        transition: all 0.3s;
    }

    .skills-category .skill-tag:hover {
        background: linear-gradient(135deg, #8B6914, #D4AF37);
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
    }

    /* ============================================
       ORGANIZATION - Emas
       ============================================ */
    .org-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .org-item {
        padding: 20px;
        background: rgba(255, 248, 235, 0.6);
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        border-radius: 12px;
        border: 1px solid rgba(212, 175, 55, 0.1);
        transition: all 0.3s;
    }

    .org-item:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 20px rgba(212, 175, 55, 0.12);
    }

    .org-header {
        display: flex;
        gap: 12px;
        margin-bottom: 10px;
    }

    .org-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.1rem;
        flex-shrink: 0;
        background: rgba(212, 175, 55, 0.15);
        color: #D4AF37;
    }

    .org-info h3 {
        font-size: 0.95rem;
        margin-bottom: 2px;
        color: #6B4F12;
    }

    .org-role {
        font-weight: 500;
        font-size: 0.85rem;
        color: #8B6914;
    }

    .org-date {
        display: inline-block;
        padding: 1px 10px;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 500;
        background: rgba(212, 175, 55, 0.1);
        color: #8B6914;
    }

    .org-desc {
        color: #6B4F12;
        font-size: 0.9rem;
        margin-top: 8px;
        padding-left: 52px;
    }

    /* ============================================
       ACHIEVEMENT - Emas
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
        background: rgba(255, 248, 235, 0.6);
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        border-radius: 12px;
        border: 1px solid rgba(212, 175, 55, 0.08);
        transition: all 0.3s;
    }

    .achievement-item:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 20px rgba(212, 175, 55, 0.12);
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
        background: rgba(212, 175, 55, 0.15);
        color: #D4AF37;
    }

    .achievement-info h3 {
        font-size: 0.95rem;
        margin-bottom: 2px;
        color: #6B4F12;
    }

    .achievement-info p {
        color: #8B6914;
        font-size: 0.85rem;
    }

    /* ============================================
       CONTACT - Emas
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
        color: #6B4F12;
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 12px 0;
        border-bottom: 1px solid rgba(212, 175, 55, 0.1);
    }

    .contact-item:last-child {
        border-bottom: none;
    }

    .contact-icon {
        width: 45px;
        height: 45px;
        background: rgba(212, 175, 55, 0.1);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #D4AF37;
        font-size: 1.2rem;
        flex-shrink: 0;
    }

    .contact-item h4 {
        font-size: 0.85rem;
        color: #8B6914;
    }

    .contact-item p {
        font-weight: 500;
    }

    .contact-item a {
        color: #6B4F12;
        text-decoration: none;
    }

    .contact-item a:hover {
        color: #D4AF37;
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
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 1.3rem;
        transition: all 0.3s;
        text-decoration: none;
    }

    .social-link:hover {
        transform: translateY(-3px);
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
        color: #6B4F12;
    }

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

    .form-group {
        margin-bottom: 18px;
    }

    .form-group label {
        display: block;
        font-weight: 500;
        margin-bottom: 5px;
        color: #6B4F12;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 12px 16px;
        border: 2px solid rgba(212, 175, 55, 0.2);
        border-radius: 10px;
        font-family: inherit;
        font-size: 1rem;
        transition: border-color 0.3s;
        background: rgba(255, 248, 235, 0.8);
    }

    .form-group input:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #D4AF37;
        box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.1);
    }

    /* ============================================
       RESPONSIVE
       ============================================ */
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

        .portfolio-grid {
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
            background: rgba(255, 248, 235, 0.95);
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
            max-width: 280px;
            height: 280px;
        }

        .glass-card {
            padding: 20px;
        }

        .float-btn {
            width: 50px;
            height: 50px;
            font-size: 1.2rem;
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
    }

    @media (max-width: 480px) {
        .hero-text h1 {
            font-size: 1.6rem;
        }

        .profile-img {
            max-width: 200px;
            height: 200px;
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
    }
    </style>
</head>

<body>
    <!-- Animated Background -->
    <div class="animated-bg"></div>
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>