<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?> - Portofolio</title>
    <meta name="description" content="Portofolio Muhammad Khardawi, S.Kom - Full Stack Developer">

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;800;900&family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
    /* ============================================
       ROOT VARIABLES - Tema Biru Segar
       ============================================ */
    :root {
        --blue-dark: #0A2463;
        --blue-primary: #1E3A8A;
        --blue-mid: #2563EB;
        --blue-light: #3B82F6;
        --blue-sky: #60A5FA;
        --blue-pale: #93C5FD;
        --blue-soft: #DBEAFE;
        --blue-bg: #EFF6FF;
        --white: #FFFFFF;
        --gray-light: #F8FAFC;
        --gray: #94A3B8;
        --dark: #0F172A;
        --shadow: 0 8px 40px rgba(30, 58, 138, 0.1);
        --shadow-hover: 0 16px 60px rgba(30, 58, 138, 0.18);
        --gradient-blue: linear-gradient(135deg, #0A2463 0%, #1E3A8A 30%, #2563EB 60%, #3B82F6 100%);
        --gradient-blue-soft: linear-gradient(135deg, #DBEAFE 0%, #EFF6FF 100%);
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
        color: var(--dark);
        background: var(--blue-bg);
        padding-top: 80px;
        overflow-x: hidden;
        cursor: none;
    }

    /* ============================================
       KURSUSUR BEREKOR - Ekor Mengikuti Kursor
       ============================================ */
    .cursor-dot {
        position: fixed;
        pointer-events: none;
        z-index: 99999;
        width: 12px;
        height: 12px;
        background: var(--blue-primary);
        border-radius: 50%;
        transform: translate(-50%, -50%);
        transition: width 0.3s, height 0.3s, background 0.3s;
        box-shadow: 0 0 20px rgba(37, 99, 235, 0.3);
    }

    .cursor-trail {
        position: fixed;
        pointer-events: none;
        z-index: 99998;
        width: 6px;
        height: 6px;
        background: var(--blue-light);
        border-radius: 50%;
        opacity: 0.6;
        transform: translate(-50%, -50%);
        transition: none;
    }

    .cursor-dot.active {
        width: 30px;
        height: 30px;
        background: var(--blue-light);
        box-shadow: 0 0 40px rgba(59, 130, 246, 0.4);
    }

    .cursor-dot.click {
        width: 20px;
        height: 20px;
        background: var(--blue-dark);
        box-shadow: 0 0 30px rgba(10, 36, 99, 0.5);
    }

    /* ============================================
       BACKGROUND - Biru Segar
       ============================================ */
    .bg-pattern {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -2;
        background:
            radial-gradient(ellipse at 10% 20%, rgba(59, 130, 246, 0.04) 0%, transparent 60%),
            radial-gradient(ellipse at 90% 80%, rgba(37, 99, 235, 0.04) 0%, transparent 60%),
            linear-gradient(180deg, #EFF6FF 0%, #DBEAFE 50%, #BFDBFE 100%);
    }

    .bg-shapes {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        overflow: hidden;
        pointer-events: none;
    }

    .shape {
        position: absolute;
        border-radius: 50%;
        opacity: 0.06;
        background: var(--blue-primary);
        animation: shapeFloat 25s ease-in-out infinite;
    }

    .shape:nth-child(1) {
        width: 500px;
        height: 500px;
        top: -200px;
        right: -100px;
        animation-delay: 0s;
    }

    .shape:nth-child(2) {
        width: 350px;
        height: 350px;
        bottom: -100px;
        left: -50px;
        animation-delay: 5s;
    }

    .shape:nth-child(3) {
        width: 250px;
        height: 250px;
        top: 40%;
        left: 60%;
        animation-delay: 10s;
    }

    .shape:nth-child(4) {
        width: 400px;
        height: 400px;
        bottom: 30%;
        right: 10%;
        animation-delay: 3s;
    }

    @keyframes shapeFloat {

        0%,
        100% {
            transform: translate(0, 0) scale(1) rotate(0deg);
        }

        25% {
            transform: translate(40px, -30px) scale(1.05) rotate(5deg);
        }

        50% {
            transform: translate(-30px, 40px) scale(0.95) rotate(-5deg);
        }

        75% {
            transform: translate(30px, 30px) scale(1.02) rotate(3deg);
        }
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* ============================================
       SCROLL REVEAL - Natural
       ============================================ */
    .reveal {
        opacity: 0;
        transform: translateY(30px) scale(0.98);
        transition: all 0.9s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .reveal.revealed {
        opacity: 1;
        transform: translateY(0) scale(1);
    }

    .reveal-left {
        opacity: 0;
        transform: translateX(-50px) scale(0.96);
        transition: all 0.9s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .reveal-left.revealed {
        opacity: 1;
        transform: translateX(0) scale(1);
    }

    .reveal-right {
        opacity: 0;
        transform: translateX(50px) scale(0.96);
        transition: all 0.9s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .reveal-right.revealed {
        opacity: 1;
        transform: translateX(0) scale(1);
    }

    /* ============================================
       CARD - Kotak/Bulat Sedang dengan Zoom
       ============================================ */
    .card-box {
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.4);
        border-radius: 24px;
        padding: 30px;
        box-shadow: var(--shadow);
        transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
        position: relative;
        overflow: hidden;
        cursor: none;
    }

    .card-box:hover {
        transform: scale(1.03) translateY(-6px);
        box-shadow: var(--shadow-hover);
        border-color: rgba(59, 130, 246, 0.2);
    }

    .card-circle {
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.4);
        border-radius: 50%;
        width: 200px;
        height: 200px;
        padding: 25px;
        box-shadow: var(--shadow);
        transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
        position: relative;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        cursor: none;
        margin: 0 auto;
    }

    .card-circle:hover {
        transform: scale(1.08) translateY(-6px);
        box-shadow: var(--shadow-hover);
        border-color: rgba(59, 130, 246, 0.2);
    }

    .card-circle i {
        font-size: 2.5rem;
        color: var(--blue-primary);
        margin-bottom: 10px;
    }

    .card-circle h4 {
        font-size: 0.9rem;
        color: var(--dark);
        font-weight: 600;
    }

    /* ============================================
       ZOOM EFFECT - Untuk Item yang Diklik
       ============================================ */
    .zoom-item {
        transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
        cursor: none;
    }

    .zoom-item:hover {
        transform: scale(1.05);
        z-index: 10;
    }

    .zoom-item:active {
        transform: scale(0.95);
    }

    /* ============================================
       GRADIENT TEXT - Biru
       ============================================ */
    .gradient-text {
        background: linear-gradient(135deg, #0A2463 0%, #1E3A8A 30%, #2563EB 60%, #3B82F6 100%);
        background-size: 300% 300%;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        color: transparent;
        animation: gradientBlue 5s ease-in-out infinite;
        font-weight: 800;
    }

    @keyframes gradientBlue {

        0%,
        100% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }
    }

    /* ============================================
       BUTTONS
       ============================================ */
    .btn-group {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
        margin-top: 10px;
    }

    .btn-group.split {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 14px 28px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.9rem;
        transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
        border: none;
        cursor: none;
        position: relative;
        overflow: hidden;
        min-width: 130px;
        letter-spacing: 0.3px;
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
        background: var(--gradient-blue);
        color: #fff;
        box-shadow: 0 4px 25px rgba(30, 58, 138, 0.25);
    }

    .btn-primary:hover {
        transform: translateY(-4px) scale(1.02);
        box-shadow: 0 8px 40px rgba(30, 58, 138, 0.35);
    }

    .btn-secondary {
        background: rgba(255, 255, 255, 0.9);
        color: var(--blue-primary);
        border: 2px solid var(--blue-light);
        box-shadow: 0 4px 20px rgba(37, 99, 235, 0.08);
    }

    .btn-secondary:hover {
        transform: translateY(-4px) scale(1.02);
        background: #fff;
        box-shadow: 0 8px 35px rgba(37, 99, 235, 0.15);
        border-color: var(--blue-primary);
    }

    .btn-outline {
        background: transparent;
        color: var(--blue-primary);
        border: 2px solid var(--blue-primary);
    }

    .btn-outline:hover {
        background: var(--blue-primary);
        color: #fff;
        transform: translateY(-4px) scale(1.02);
        box-shadow: 0 8px 35px rgba(30, 58, 138, 0.2);
    }

    .btn-light {
        background: rgba(255, 255, 255, 0.95);
        color: var(--blue-primary);
        border: 1px solid rgba(255, 255, 255, 0.3);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
    }

    .btn-light:hover {
        transform: translateY(-4px) scale(1.02);
        box-shadow: 0 8px 35px rgba(0, 0, 0, 0.08);
    }

    .btn-sm {
        padding: 10px 20px;
        font-size: 0.8rem;
        min-width: 100px;
    }

    /* ============================================
       NAVBAR
       ============================================ */
    .navbar {
        background: rgba(255, 255, 255, 0.92);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        box-shadow: 0 2px 30px rgba(0, 0, 0, 0.04);
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
        transition: all 0.4s ease;
        border-bottom: 1px solid rgba(59, 130, 246, 0.06);
    }

    .navbar.scrolled {
        background: rgba(255, 255, 255, 0.95);
        box-shadow: 0 2px 40px rgba(0, 0, 0, 0.06);
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
        gap: 10px;
        font-size: 1.3rem;
        font-weight: 800;
        color: var(--blue-primary);
        text-decoration: none;
        transition: all 0.3s;
    }

    .nav-brand a:hover {
        transform: scale(1.03);
    }

    .brand-icon {
        font-size: 1.5rem;
        animation: iconFloat 3s ease-in-out infinite;
    }

    @keyframes iconFloat {

        0%,
        100% {
            transform: translateY(0) rotate(0deg);
        }

        50% {
            transform: translateY(-3px) rotate(5deg);
        }
    }

    .brand-text {
        background: var(--gradient-blue);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        color: transparent;
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
        padding: 10px 16px;
        color: var(--dark);
        text-decoration: none;
        font-weight: 500;
        font-size: 0.85rem;
        border-radius: 12px;
        transition: all 0.3s;
        position: relative;
        cursor: none;
    }

    .nav-menu a:hover {
        color: var(--blue-primary);
        background: rgba(37, 99, 235, 0.06);
        transform: translateY(-2px);
    }

    .nav-menu a.active {
        color: var(--blue-primary);
        background: rgba(37, 99, 235, 0.08);
        font-weight: 600;
    }

    .nav-menu a.active::after {
        content: '';
        position: absolute;
        bottom: 4px;
        left: 50%;
        transform: translateX(-50%);
        width: 20px;
        height: 2px;
        background: var(--blue-primary);
        border-radius: 5px;
    }

    .btn-cv {
        padding: 8px 20px !important;
        background: var(--gradient-blue) !important;
        color: #fff !important;
        border-radius: 25px !important;
        font-weight: 600 !important;
        box-shadow: 0 4px 20px rgba(30, 58, 138, 0.2) !important;
        cursor: none;
    }

    .btn-cv:hover {
        transform: translateY(-3px) scale(1.05) !important;
        box-shadow: 0 8px 35px rgba(30, 58, 138, 0.3) !important;
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
        background: var(--dark);
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
        font-size: 3.2rem;
        line-height: 1.1;
        margin-bottom: 15px;
        color: var(--dark);
        font-weight: 800;
    }

    .badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 6px 20px;
        background: rgba(59, 130, 246, 0.08);
        border-radius: 50px;
        color: var(--blue-primary);
        font-size: 0.8rem;
        font-weight: 600;
        margin-bottom: 20px;
        border: 1px solid rgba(59, 130, 246, 0.1);
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
        font-size: 1.1rem;
        color: var(--dark);
        font-weight: 500;
        opacity: 0.6;
    }

    .typing-text {
        font-size: 1.2rem;
        font-weight: 700;
        color: var(--blue-primary);
        border-right: 2px solid var(--blue-primary);
        padding-right: 5px;
        min-height: 35px;
    }

    .description {
        color: var(--dark);
        font-size: 1rem;
        line-height: 1.8;
        margin-bottom: 25px;
        opacity: 0.7;
    }

    /* ============================================
       HERO STATS
       ============================================ */
    .hero-stats {
        display: flex;
        align-items: center;
        gap: 30px;
        padding: 18px 0;
        border-top: 1px solid rgba(59, 130, 246, 0.08);
        border-bottom: 1px solid rgba(59, 130, 246, 0.08);
        margin-bottom: 25px;
    }

    .stat-item {
        display: flex;
        flex-direction: column;
    }

    .stat-number {
        font-size: 2rem;
        font-weight: 800;
        color: var(--dark);
    }

    .stat-number::after {
        content: '+';
        color: var(--blue-primary);
        font-weight: 800;
    }

    .stat-label {
        font-size: 0.75rem;
        color: var(--dark);
        opacity: 0.5;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .stat-divider {
        width: 1px;
        height: 35px;
        background: rgba(59, 130, 246, 0.1);
    }

    .hero-buttons {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
    }

    .hero-image {
        flex: 1;
    }

    /* ============================================
       PROFILE IMAGE
       ============================================ */
    .profile-wrapper {
        position: relative;
        display: inline-block;
    }

    .profile-img {
        width: 100%;
        max-width: 380px;
        height: 380px;
        border-radius: 50%;
        object-fit: cover;
        box-shadow: 0 20px 60px rgba(30, 58, 138, 0.12);
        border: 4px solid rgba(255, 255, 255, 0.8);
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
            transform: translateY(-10px);
        }
    }

    .profile-img:hover {
        transform: scale(1.02);
        box-shadow: 0 25px 70px rgba(30, 58, 138, 0.15);
    }

    .profile-ring {
        position: absolute;
        top: -12px;
        left: -12px;
        right: -12px;
        bottom: -12px;
        border-radius: 50%;
        border: 2px solid transparent;
        background: linear-gradient(135deg, #0A2463, #1E3A8A, #2563EB, #3B82F6, #0A2463) border-box;
        background-size: 300% 300%;
        -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
        mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        animation: spinRing 12s linear infinite, ringBlue 4s ease-in-out infinite;
        z-index: 1;
        box-shadow: 0 0 50px rgba(37, 99, 235, 0.06);
    }

    @keyframes spinRing {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes ringBlue {

        0%,
        100% {
            background: linear-gradient(135deg, #0A2463, #1E3A8A) border-box;
        }

        33% {
            background: linear-gradient(135deg, #1E3A8A, #2563EB) border-box;
        }

        66% {
            background: linear-gradient(135deg, #2563EB, #3B82F6) border-box;
        }
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
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border-radius: 16px;
        border: 1px solid rgba(255, 255, 255, 0.3);
        box-shadow: var(--shadow);
        transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
        cursor: none;
    }

    .info-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: var(--shadow-hover);
        border-color: rgba(59, 130, 246, 0.15);
    }

    .info-card i {
        font-size: 2rem;
        background: var(--gradient-blue);
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
        font-size: 0.8rem;
        color: var(--dark);
        margin-bottom: 5px;
        font-weight: 600;
        opacity: 0.5;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .info-card p {
        font-weight: 600;
        color: var(--dark);
    }

    .info-card a {
        color: var(--dark);
        text-decoration: none;
        transition: all 0.3s;
    }

    .info-card a:hover {
        color: var(--blue-primary);
    }

    /* ============================================
       PORTFOLIO - Kotak/Bulat Sedang
       ============================================ */
    .portfolio-page {
        padding: 30px 0 60px;
    }

    .section-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .section-subtitle {
        display: inline-block;
        padding: 6px 20px;
        background: rgba(59, 130, 246, 0.06);
        color: var(--blue-primary);
        border-radius: 50px;
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 10px;
        border: 1px solid rgba(59, 130, 246, 0.06);
    }

    .page-title {
        font-size: 2.5rem;
        text-align: center;
        margin-bottom: 50px;
        color: var(--dark);
        font-weight: 800;
    }

    .section-desc {
        color: var(--dark);
        margin-top: 10px;
        font-size: 1rem;
        opacity: 0.6;
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
        transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .portfolio-item:hover {
        transform: translateY(-8px) scale(1.03);
        box-shadow: var(--shadow-hover);
        border-color: rgba(59, 130, 246, 0.15);
    }

    .portfolio-item:active {
        transform: scale(0.95);
    }

    .portfolio-item img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        transition: transform 0.6s;
        border-bottom: 1px solid rgba(59, 130, 246, 0.04);
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
        background: linear-gradient(135deg, rgba(10, 36, 99, 0.85), rgba(30, 58, 138, 0.9));
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: #fff;
        opacity: 0;
        transition: all 0.6s cubic-bezier(0.22, 1, 0.36, 1);
        padding: 25px;
        text-align: center;
    }

    .portfolio-item:hover .portfolio-overlay {
        opacity: 1;
    }

    .portfolio-overlay .portfolio-tag {
        display: inline-block;
        padding: 4px 14px;
        background: rgba(255, 255, 255, 0.15);
        border-radius: 50px;
        font-size: 0.65rem;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 10px;
        transform: translateY(20px);
        transition: all 0.5s 0.05s;
    }

    .portfolio-item:hover .portfolio-overlay .portfolio-tag {
        transform: translateY(0);
    }

    .portfolio-overlay h3 {
        font-size: 1.1rem;
        margin-bottom: 5px;
        font-weight: 700;
        transform: translateY(20px);
        transition: all 0.5s 0.1s;
    }

    .portfolio-item:hover .portfolio-overlay h3 {
        transform: translateY(0);
    }

    .portfolio-overlay p {
        font-size: 0.8rem;
        opacity: 0.7;
        margin-bottom: 15px;
        transform: translateY(20px);
        transition: all 0.5s 0.15s;
    }

    .portfolio-item:hover .portfolio-overlay p {
        transform: translateY(0);
    }

    .portfolio-overlay .btn {
        transform: translateY(20px);
        transition: all 0.5s 0.2s;
        font-size: 0.75rem;
        padding: 8px 20px;
        background: rgba(255, 255, 255, 0.15);
        color: #fff;
        border: 1px solid rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(5px);
    }

    .portfolio-overlay .btn:hover {
        background: rgba(255, 255, 255, 0.25);
        transform: translateY(-2px) scale(1.05);
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
        background: rgba(10, 36, 99, 0.6);
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
        padding: 35px;
        width: 70%;
        max-width: 750px;
        border-radius: 28px;
        position: relative;
        animation: modalSlide 0.5s ease;
        max-height: 90vh;
        overflow-y: auto;
        background: rgba(255, 255, 255, 0.92);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        box-shadow: 0 20px 80px rgba(0, 0, 0, 0.08);
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
        font-size: 1.8rem;
        cursor: none;
        color: var(--dark);
        transition: all 0.3s;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: rgba(59, 130, 246, 0.04);
        border: none;
        margin-top: -5px;
    }

    .modal-close:hover {
        color: var(--blue-primary);
        transform: rotate(90deg) scale(1.1);
        background: rgba(59, 130, 246, 0.08);
    }

    .modal-image {
        width: 100%;
        max-height: 320px;
        object-fit: cover;
        border-radius: 16px;
        margin: 15px 0 20px;
        box-shadow: var(--shadow);
    }

    .modal-title {
        font-size: 1.6rem;
        color: var(--dark);
        margin-bottom: 10px;
        font-weight: 700;
    }

    .modal-desc {
        color: var(--dark);
        line-height: 1.8;
        font-size: 0.95rem;
        opacity: 0.7;
    }

    .modal-tech {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 15px;
    }

    .modal-tech-tag {
        padding: 5px 16px;
        background: var(--gradient-blue);
        color: #fff;
        border-radius: 25px;
        font-size: 0.7rem;
        font-weight: 600;
        letter-spacing: 0.3px;
    }

    /* ============================================
       FOOTER
       ============================================ */
    .footer {
        background: var(--gradient-blue);
        color: #fff;
        padding: 50px 0 30px;
        margin-top: 60px;
        border-top: 1px solid rgba(255, 255, 255, 0.04);
    }

    .footer-content {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr;
        gap: 40px;
        margin-bottom: 30px;
    }

    .footer-section h3 {
        font-size: 1.2rem;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .footer-section h3::after {
        content: '';
        display: block;
        width: 30px;
        height: 2px;
        background: rgba(255, 255, 255, 0.2);
        margin-top: 8px;
        border-radius: 5px;
    }

    .footer-section h4 {
        margin-bottom: 15px;
        color: rgba(255, 255, 255, 0.6);
        font-weight: 600;
        font-size: 0.8rem;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    .footer-section p {
        color: rgba(255, 255, 255, 0.6);
        line-height: 1.6;
    }

    .footer-contact {
        margin-top: 10px;
    }

    .footer-contact i {
        color: rgba(255, 255, 255, 0.4);
        width: 20px;
    }

    .footer-section ul {
        list-style: none;
    }

    .footer-section ul li {
        margin-bottom: 8px;
    }

    .footer-section ul a {
        color: rgba(255, 255, 255, 0.5);
        text-decoration: none;
        transition: all 0.3s;
        font-weight: 400;
        font-size: 0.9rem;
    }

    .footer-section ul a:hover {
        color: #fff;
        transform: translateX(4px);
        display: inline-block;
    }

    .social-links {
        display: flex;
        gap: 10px;
    }

    .social-links a {
        width: 38px;
        height: 38px;
        background: rgba(255, 255, 255, 0.04);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: rgba(255, 255, 255, 0.4);
        text-decoration: none;
        transition: all 0.3s;
        font-size: 1rem;
        border: 1px solid rgba(255, 255, 255, 0.04);
    }

    .social-links a:hover {
        background: rgba(255, 255, 255, 0.08);
        color: #fff;
        transform: translateY(-4px) scale(1.05);
    }

    .footer-bottom {
        text-align: center;
        padding-top: 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.04);
        color: rgba(255, 255, 255, 0.3);
        font-size: 0.8rem;
    }

    /* ============================================
       FLOATING BUTTON
       ============================================ */
    .float-btn {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: var(--gradient-blue);
        color: #fff;
        border: none;
        cursor: none;
        font-size: 1.2rem;
        box-shadow: 0 4px 25px rgba(30, 58, 138, 0.2);
        transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
        z-index: 999;
        opacity: 0;
        visibility: hidden;
    }

    .float-btn.show {
        opacity: 1;
        visibility: visible;
        animation: floatPop 0.5s ease-out;
    }

    @keyframes floatPop {
        0% {
            transform: scale(0) rotate(-180deg);
            opacity: 0;
        }

        60% {
            transform: scale(1.15) rotate(10deg);
        }

        100% {
            transform: scale(1) rotate(0deg);
            opacity: 1;
        }
    }

    .float-btn:hover {
        transform: translateY(-4px) scale(1.05);
        box-shadow: 0 8px 40px rgba(30, 58, 138, 0.3);
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

        .btn-group.split {
            grid-template-columns: 1fr;
        }

        .card-circle {
            width: 160px;
            height: 160px;
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
            background: rgba(255, 255, 255, 0.95);
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
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

        .card-box {
            padding: 20px;
        }

        .card-circle {
            width: 140px;
            height: 140px;
            padding: 20px;
        }

        .float-btn {
            width: 42px;
            height: 42px;
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
            font-size: 1.3rem;
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
        .float-btn,
        .info-card {
            cursor: pointer;
        }

        .zoom-item {
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

        .card-circle {
            width: 120px;
            height: 120px;
            padding: 15px;
        }

        .card-circle i {
            font-size: 2rem;
        }

        .card-circle h4 {
            font-size: 0.75rem;
        }
    }

    /* ============================================
       SCROLLBAR
       ============================================ */
    ::-webkit-scrollbar {
        width: 6px;
    }

    ::-webkit-scrollbar-track {
        background: var(--blue-bg);
    }

    ::-webkit-scrollbar-thumb {
        background: var(--gradient-blue);
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
        opacity: 0.8;
    }
    </style>
</head>

<body>

    <!-- Kursor Berekor -->
    <div class="cursor-dot" id="cursorDot"></div>
    <div class="cursor-trail" id="cursorTrail1"></div>
    <div class="cursor-trail" id="cursorTrail2"></div>
    <div class="cursor-trail" id="cursorTrail3"></div>
    <div class="cursor-trail" id="cursorTrail4"></div>
    <div class="cursor-trail" id="cursorTrail5"></div>

    <!-- Background -->
    <div class="bg-pattern"></div>
    <div class="bg-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>