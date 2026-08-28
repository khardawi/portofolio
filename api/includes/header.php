<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?> - Portofolio</title>
    <meta name="description" content="Portofolio Muhammad Khardawi, S.Kom - Full Stack Developer">

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
    /* ============================================
       RESET & BASE
       ============================================ */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
        line-height: 1.6;
        color: #1a1a2e;
        background: #f8f9fa;
        padding-top: 80px;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* ============================================
       GLASS CARD
       ============================================ */
    .glass-card {
        background: rgba(255, 255, 255, 0.8);
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.06);
        transition: all 0.3s ease;
    }

    .glass-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 40px rgba(108, 99, 255, 0.15);
    }

    /* ============================================
       GRADIENT TEXT
       ============================================ */
    .gradient-text {
        background: linear-gradient(135deg, #6C63FF, #a855f7, #ec4899);
        background-size: 300% 300%;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        color: transparent;
        animation: gradientMove 4s ease-in-out infinite;
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
       BUTTONS
       ============================================ */
    .btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 12px 30px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s;
        border: none;
        cursor: pointer;
        font-size: 1rem;
    }

    .btn-primary {
        background: linear-gradient(135deg, #6C63FF, #a855f7);
        color: #fff;
        box-shadow: 0 4px 20px rgba(108, 99, 255, 0.3);
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 30px rgba(108, 99, 255, 0.4);
    }

    .btn-secondary {
        background: rgba(108, 99, 255, 0.1);
        color: #6C63FF;
        border: 2px solid #6C63FF;
    }

    .btn-secondary:hover {
        background: rgba(108, 99, 255, 0.2);
        transform: translateY(-2px);
    }

    /* ============================================
       NAVBAR
       ============================================ */
    .navbar {
        background: rgba(255, 255, 255, 0.95);
        -webkit-backdrop-filter: blur(10px);
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
        padding: 15px 20px;
    }

    .nav-brand a {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 1.5rem;
        font-weight: 700;
        color: #1a1a2e;
        text-decoration: none;
    }

    .brand-icon {
        font-size: 1.6rem;
    }

    .brand-text {
        background: linear-gradient(135deg, #6C63FF, #a855f7);
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
        padding: 10px 18px;
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
        bottom: 5px;
        left: 50%;
        transform: translateX(-50%);
        width: 20px;
        height: 3px;
        background: #6C63FF;
        border-radius: 10px;
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
    }

    .badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 6px 16px;
        background: rgba(108, 99, 255, 0.1);
        border-radius: 50px;
        color: #6C63FF;
        font-size: 0.85rem;
        font-weight: 500;
        margin-bottom: 20px;
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
        color: #666;
    }

    .typing-text {
        font-size: 1.3rem;
        font-weight: 600;
        color: #6C63FF;
        border-right: 2px solid #6C63FF;
        padding-right: 5px;
        min-height: 35px;
    }

    .description {
        color: #666;
        font-size: 1.1rem;
        line-height: 1.8;
        margin-bottom: 25px;
    }

    .hero-stats {
        display: flex;
        align-items: center;
        gap: 30px;
        padding: 20px 0;
        border-top: 1px solid rgba(0, 0, 0, 0.06);
        border-bottom: 1px solid rgba(0, 0, 0, 0.06);
        margin-bottom: 25px;
    }

    .stat-item {
        display: flex;
        flex-direction: column;
    }

    .stat-number {
        font-size: 2rem;
        font-weight: 700;
        color: #1a1a2e;
    }

    .stat-number::after {
        content: '+';
        color: #6C63FF;
    }

    .stat-label {
        font-size: 0.85rem;
        color: #888;
    }

    .stat-divider {
        width: 2px;
        height: 40px;
        background: rgba(0, 0, 0, 0.06);
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
       PROFILE IMAGE
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
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        border: 5px solid #fff;
        position: relative;
        z-index: 2;
    }

    .profile-ring {
        position: absolute;
        top: -10px;
        left: -10px;
        right: -10px;
        bottom: -10px;
        border-radius: 50%;
        border: 3px solid transparent;
        background: linear-gradient(135deg, #6C63FF, #a855f7, #ec4899, #6C63FF) border-box;
        -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
        mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        animation: spinRing 6s linear infinite;
        z-index: 1;
    }

    @keyframes spinRing {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
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
        padding: 25px;
        background: #fff;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        transition: all 0.3s;
    }

    .info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    }

    .info-card i {
        font-size: 2rem;
        color: #6C63FF;
        margin-bottom: 10px;
    }

    .info-card h4 {
        font-size: 0.9rem;
        color: #888;
        margin-bottom: 5px;
    }

    .info-card p {
        font-weight: 600;
    }

    .info-card a {
        color: #1a1a2e;
        text-decoration: none;
    }

    .info-card a:hover {
        color: #6C63FF;
    }

    /* ============================================
       FOOTER
       ============================================ */
    .footer {
        background: #1a1a2e;
        color: #fff;
        padding: 50px 0 20px;
        margin-top: 60px;
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
    }

    .footer-section h3::after {
        content: '';
        display: block;
        width: 40px;
        height: 3px;
        background: #6C63FF;
        margin-top: 8px;
    }

    .footer-section h4 {
        margin-bottom: 15px;
        color: #aaa;
    }

    .footer-section p {
        color: #aaa;
        line-height: 1.6;
    }

    .footer-contact {
        margin-top: 10px;
    }

    .footer-contact i {
        color: #6C63FF;
        width: 20px;
    }

    .footer-section ul {
        list-style: none;
    }

    .footer-section ul li {
        margin-bottom: 8px;
    }

    .footer-section ul a {
        color: #aaa;
        text-decoration: none;
        transition: color 0.3s;
    }

    .footer-section ul a:hover {
        color: #6C63FF;
    }

    .social-links {
        display: flex;
        gap: 12px;
    }

    .social-links a {
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #aaa;
        text-decoration: none;
        transition: all 0.3s;
    }

    .social-links a:hover {
        background: #6C63FF;
        color: #fff;
        transform: translateY(-3px);
    }

    .footer-bottom {
        text-align: center;
        padding-top: 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
        color: #666;
        font-size: 0.9rem;
    }

    /* ============================================
       FLOATING BUTTON
       ============================================ */
    .float-btn {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 55px;
        height: 55px;
        border-radius: 50%;
        background: linear-gradient(135deg, #6C63FF, #5a52d5);
        color: #fff;
        border: none;
        cursor: pointer;
        font-size: 1.3rem;
        box-shadow: 0 4px 20px rgba(108, 99, 255, 0.4);
        transition: all 0.3s;
        z-index: 999;
        opacity: 0;
        visibility: hidden;
    }

    .float-btn.show {
        opacity: 1;
        visibility: visible;
    }

    .float-btn:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 6px 30px rgba(108, 99, 255, 0.6);
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

        .footer-content {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .social-links {
            justify-content: center;
        }
    }

    @media (max-width: 768px) {
        body {
            padding-top: 70px;
        }

        .info-cards {
            grid-template-columns: 1fr;
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
            width: 45px;
            height: 45px;
            font-size: 1rem;
            bottom: 20px;
            right: 20px;
        }

        .profile-ring {
            display: none;
        }
    }
    </style>
</head>

<body>