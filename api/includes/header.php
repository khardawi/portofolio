<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?> - Portofolio</title>
    <meta name="description" content="Portofolio Muhammad Khardawi, S.Kom - Full Stack Developer">

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <style>
    /* ============================================
       RESET & BASE - Background Biru Cerah
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
        background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 30%, #90caf9 60%, #64b5f6 100%);
        background-attachment: fixed;
        min-height: 100vh;
        padding-top: 80px;
        overflow-x: hidden;
    }

    /* ============================================
       ANIMASI BACKGROUND BERGERAK
       ============================================ */
    .animated-bg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 25%, #90caf9 50%, #64b5f6 75%, #42a5f5 100%);
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

    /* Floating Bubbles */
    .bubbles {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        overflow: hidden;
        pointer-events: none;
    }

    .bubble {
        position: absolute;
        bottom: -100px;
        background: rgba(255, 255, 255, 0.15);
        border-radius: 50%;
        animation: floatBubble 12s ease-in-out infinite;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .bubble:nth-child(1) {
        width: 80px;
        height: 80px;
        left: 10%;
        animation-delay: 0s;
    }

    .bubble:nth-child(2) {
        width: 120px;
        height: 120px;
        left: 25%;
        animation-delay: 2s;
    }

    .bubble:nth-child(3) {
        width: 60px;
        height: 60px;
        left: 40%;
        animation-delay: 4s;
    }

    .bubble:nth-child(4) {
        width: 150px;
        height: 150px;
        left: 60%;
        animation-delay: 1s;
    }

    .bubble:nth-child(5) {
        width: 90px;
        height: 90px;
        left: 75%;
        animation-delay: 3s;
    }

    .bubble:nth-child(6) {
        width: 110px;
        height: 110px;
        left: 85%;
        animation-delay: 5s;
    }

    .bubble:nth-child(7) {
        width: 70px;
        height: 70px;
        left: 5%;
        animation-delay: 7s;
    }

    .bubble:nth-child(8) {
        width: 130px;
        height: 130px;
        left: 50%;
        animation-delay: 6s;
    }

    @keyframes floatBubble {
        0% {
            transform: translateY(0) scale(1);
            opacity: 0;
        }

        10% {
            opacity: 0.3;
        }

        50% {
            transform: translateY(-60vh) scale(0.8);
            opacity: 0.5;
        }

        90% {
            opacity: 0.2;
        }

        100% {
            transform: translateY(-110vh) scale(0.5);
            opacity: 0;
        }
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* ============================================
       TEKS MENONJOL (HIGHLIGHT EFFECT)
       ============================================ */
    .text-highlight {
        position: relative;
        display: inline-block;
        font-weight: 800;
        color: #0d47a1;
        text-shadow: 0 0 20px rgba(33, 150, 243, 0.3);
        transition: all 0.3s;
    }

    .text-highlight::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 30%;
        background: rgba(33, 150, 243, 0.2);
        z-index: -1;
        transform: skewX(-5deg);
        transition: all 0.3s;
    }

    .text-highlight:hover::after {
        height: 60%;
        background: rgba(33, 150, 243, 0.3);
    }

    .text-highlight:hover {
        transform: scale(1.05);
        color: #0d47a1;
    }

    /* ============================================
       GLASS CARD - Dengan Background Biru Transparan
       ============================================ */
    .glass-card {
        background: rgba(255, 255, 255, 0.85);
        -webkit-backdrop-filter: blur(15px);
        backdrop-filter: blur(15px);
        border: 1px solid rgba(255, 255, 255, 0.4);
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 8px 32px rgba(33, 150, 243, 0.15);
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        animation: fadeInUp 0.8s ease-out;
    }

    .glass-card:hover {
        transform: translateY(-8px) scale(1.01);
        box-shadow: 0 16px 48px rgba(33, 150, 243, 0.25);
        border-color: rgba(33, 150, 243, 0.3);
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ============================================
       GRADIENT TEXT - Biru dengan Gradasi
       ============================================ */
    .gradient-text {
        background: linear-gradient(135deg, #0d47a1 0%, #1565C0 20%, #2196F3 40%, #42A5F5 60%, #64B5F6 80%, #0d47a1 100%);
        background-size: 300% 300%;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        color: transparent;
        animation: gradientMove 6s ease-in-out infinite;
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
       GRADIENT BACKGROUND UNTUK SEMUA ELEMEN
       ============================================ */
    .gradient-bg {
        background: linear-gradient(135deg, #0d47a1, #1565C0, #1e88e5, #42A5F5);
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
       BUTTONS - Gradasi Biru dengan Efek Timbul
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
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: all 0.6s;
    }

    .btn:hover::before {
        left: 100%;
    }

    .btn-primary {
        background: linear-gradient(135deg, #0d47a1, #1565C0, #1e88e5);
        background-size: 200% 200%;
        color: #fff;
        box-shadow: 0 4px 20px rgba(33, 150, 243, 0.4), inset 0 -3px 0 rgba(0, 0, 0, 0.1);
        animation: gradientBtn 3s ease-in-out infinite;
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
        box-shadow: 0 8px 35px rgba(33, 150, 243, 0.5), inset 0 -3px 0 rgba(0, 0, 0, 0.15);
    }

    .btn-primary:active {
        transform: translateY(0px) scale(0.98);
        box-shadow: 0 2px 10px rgba(33, 150, 243, 0.3);
    }

    .btn-secondary {
        background: rgba(255, 255, 255, 0.9);
        color: #0d47a1;
        border: 2px solid #2196F3;
        box-shadow: 0 4px 15px rgba(33, 150, 243, 0.15);
    }

    .btn-secondary:hover {
        transform: translateY(-4px) scale(1.02);
        background: rgba(255, 255, 255, 1);
        box-shadow: 0 8px 30px rgba(33, 150, 243, 0.3);
    }

    .btn-secondary:active {
        transform: translateY(0px) scale(0.98);
    }

    /* ============================================
       NAVBAR - Biru dengan Glassmorphism
       ============================================ */
    .navbar {
        background: rgba(255, 255, 255, 0.92);
        -webkit-backdrop-filter: blur(15px);
        backdrop-filter: blur(15px);
        box-shadow: 0 2px 20px rgba(33, 150, 243, 0.15);
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
        transition: all 0.4s ease;
        animation: slideDown 0.6s ease-out;
    }

    @keyframes slideDown {
        from {
            transform: translateY(-100%);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .navbar.scrolled {
        background: rgba(255, 255, 255, 0.95);
        box-shadow: 0 2px 30px rgba(33, 150, 243, 0.25);
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
        color: #0d47a1;
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
        background: linear-gradient(135deg, #0d47a1, #1565C0, #1e88e5, #42A5F5, #0d47a1);
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
        color: #1565C0;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.95rem;
        border-radius: 8px;
        transition: all 0.3s;
        position: relative;
    }

    .nav-menu a:hover {
        color: #0d47a1;
        background: rgba(33, 150, 243, 0.15);
        transform: translateY(-2px);
    }

    .nav-menu a.active {
        color: #0d47a1;
        background: rgba(33, 150, 243, 0.2);
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
        background: linear-gradient(90deg, #0d47a1, #2196F3);
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
        background: linear-gradient(135deg, #0d47a1, #1565C0, #1e88e5) !important;
        background-size: 200% 200%;
        color: #fff !important;
        border-radius: 25px !important;
        font-weight: 700 !important;
        box-shadow: 0 4px 20px rgba(33, 150, 243, 0.4) !important;
        animation: gradientBtn 3s ease-in-out infinite;
    }

    .btn-cv:hover {
        transform: translateY(-3px) scale(1.05) !important;
        box-shadow: 0 8px 35px rgba(33, 150, 243, 0.6) !important;
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
        background: #0d47a1;
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
            background: rgba(255, 255, 255, 0.95);
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
       HERO SECTION - Dengan Animasi Masuk
       ============================================ */
    .hero {
        padding: 60px 0 40px;
        min-height: 90vh;
        display: flex;
        align-items: center;
        animation: heroFade 1s ease-out;
    }

    @keyframes heroFade {
        from {
            opacity: 0;
            transform: scale(0.95);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
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
        color: #0d47a1;
        animation: slideInLeft 0.8s ease-out;
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 20px;
        background: linear-gradient(135deg, rgba(33, 150, 243, 0.15), rgba(13, 71, 161, 0.1));
        border-radius: 50px;
        color: #0d47a1;
        font-size: 0.85rem;
        font-weight: 600;
        margin-bottom: 20px;
        border: 1px solid rgba(33, 150, 243, 0.2);
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
        color: #1565C0;
        font-weight: 500;
    }

    .typing-text {
        font-size: 1.3rem;
        font-weight: 700;
        color: #0d47a1;
        border-right: 3px solid #2196F3;
        padding-right: 5px;
        min-height: 35px;
        animation: typingPulse 1s step-end infinite;
    }

    @keyframes typingPulse {

        0%,
        100% {
            border-color: #2196F3;
        }

        50% {
            border-color: transparent;
        }
    }

    .description {
        color: #0d47a1;
        font-size: 1.1rem;
        line-height: 1.8;
        margin-bottom: 25px;
        animation: slideInLeft 1s ease-out;
    }

    /* ============================================
       HERO STATS - Dengan Animasi Counter
       ============================================ */
    .hero-stats {
        display: flex;
        align-items: center;
        gap: 30px;
        padding: 20px 0;
        border-top: 1px solid rgba(33, 150, 243, 0.2);
        border-bottom: 1px solid rgba(33, 150, 243, 0.2);
        margin-bottom: 25px;
        animation: fadeInUp 1.2s ease-out;
    }

    .stat-item {
        display: flex;
        flex-direction: column;
    }

    .stat-number {
        font-size: 2rem;
        font-weight: 800;
        color: #0d47a1;
        position: relative;
    }

    .stat-number::after {
        content: '+';
        color: #2196F3;
        font-weight: 800;
    }

    .stat-label {
        font-size: 0.85rem;
        color: #1565C0;
        font-weight: 500;
    }

    .stat-divider {
        width: 2px;
        height: 40px;
        background: rgba(33, 150, 243, 0.2);
    }

    .hero-buttons {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
        animation: fadeInUp 1.4s ease-out;
    }

    .hero-image {
        flex: 1;
        animation: fadeInRight 1s ease-out;
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(50px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /* ============================================
       PROFILE IMAGE - Dengan Ring Beranimasi
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
        box-shadow: 0 10px 40px rgba(33, 150, 243, 0.3);
        border: 5px solid rgba(255, 255, 255, 0.8);
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
        box-shadow: 0 15px 50px rgba(33, 150, 243, 0.4);
    }

    .profile-ring {
        position: absolute;
        top: -15px;
        left: -15px;
        right: -15px;
        bottom: -15px;
        border-radius: 50%;
        border: 4px solid transparent;
        background: linear-gradient(135deg, #0d47a1, #1565C0, #1e88e5, #42A5F5, #64B5F6, #0d47a1) border-box;
        background-size: 300% 300%;
        -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
        mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        animation: spinRing 8s linear infinite, ringColor 4s ease-in-out infinite;
        z-index: 1;
        box-shadow: 0 0 40px rgba(33, 150, 243, 0.2);
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
            background: linear-gradient(135deg, #0d47a1, #1565C0) border-box;
        }

        33% {
            background: linear-gradient(135deg, #1565C0, #1e88e5) border-box;
        }

        66% {
            background: linear-gradient(135deg, #1e88e5, #42A5F5) border-box;
        }
    }

    /* ============================================
       MODAL - Untuk Detail Foto
       ============================================ */
    .modal {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
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
        color: #666;
        transition: all 0.3s;
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: rgba(0, 0, 0, 0.05);
    }

    .modal-close:hover {
        color: #0d47a1;
        transform: rotate(90deg) scale(1.1);
        background: rgba(33, 150, 243, 0.1);
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
        color: #0d47a1;
        margin-bottom: 10px;
    }

    .modal-desc {
        color: #1565C0;
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
        background: linear-gradient(135deg, #0d47a1, #1e88e5);
        color: #fff;
        border-radius: 25px;
        font-size: 0.8rem;
        font-weight: 600;
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
        background: rgba(255, 255, 255, 0.8);
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        border: 1px solid rgba(255, 255, 255, 0.3);
        box-shadow: 0 4px 15px rgba(33, 150, 243, 0.1);
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        animation: fadeInUp 0.6s ease-out;
    }

    .info-card:hover {
        transform: translateY(-8px) scale(1.03);
        box-shadow: 0 12px 30px rgba(33, 150, 243, 0.2);
        border-color: rgba(33, 150, 243, 0.3);
    }

    .info-card i {
        font-size: 2.2rem;
        background: linear-gradient(135deg, #0d47a1, #2196F3);
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
        color: #1565C0;
        margin-bottom: 5px;
        font-weight: 600;
    }

    .info-card p {
        font-weight: 600;
        color: #0d47a1;
    }

    .info-card a {
        color: #0d47a1;
        text-decoration: none;
        transition: all 0.3s;
    }

    .info-card a:hover {
        color: #2196F3;
    }

    /* ============================================
       PORTFOLIO - Dengan Hover dan Modal
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
        box-shadow: 0 5px 20px rgba(33, 150, 243, 0.15);
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        animation: fadeInUp 0.6s ease-out;
    }

    .portfolio-item:nth-child(1) {
        animation-delay: 0.1s;
    }

    .portfolio-item:nth-child(2) {
        animation-delay: 0.2s;
    }

    .portfolio-item:nth-child(3) {
        animation-delay: 0.3s;
    }

    .portfolio-item:nth-child(4) {
        animation-delay: 0.4s;
    }

    .portfolio-item:nth-child(5) {
        animation-delay: 0.5s;
    }

    .portfolio-item:nth-child(6) {
        animation-delay: 0.6s;
    }

    .portfolio-item:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 15px 40px rgba(33, 150, 243, 0.3);
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
        background: linear-gradient(135deg, rgba(13, 71, 161, 0.92), rgba(33, 150, 243, 0.92));
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
        background: #fff;
        color: #0d47a1;
        transform: translateY(20px);
        transition: all 0.5s 0.3s;
    }

    .portfolio-item:hover .portfolio-overlay .btn {
        transform: translateY(0);
    }

    /* ============================================
       FLOATING BUTTON - Dengan Efek Timbul
       ============================================ */
    .float-btn {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: linear-gradient(135deg, #0d47a1, #1565C0, #1e88e5);
        background-size: 200% 200%;
        color: #fff;
        border: none;
        cursor: pointer;
        font-size: 1.5rem;
        box-shadow: 0 4px 25px rgba(33, 150, 243, 0.5);
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        z-index: 999;
        opacity: 0;
        visibility: hidden;
        animation: gradientBtn 3s ease-in-out infinite;
    }

    .float-btn.show {
        opacity: 1;
        visibility: visible;
        animation: floatBtnPop 0.5s ease-out;
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
        box-shadow: 0 8px 40px rgba(33, 150, 243, 0.7);
    }

    .float-btn:active {
        transform: translateY(0px) scale(0.95);
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
        padding: 6px 20px;
        background: linear-gradient(135deg, rgba(33, 150, 243, 0.15), rgba(13, 71, 161, 0.1));
        color: #1565C0;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 10px;
        border: 1px solid rgba(33, 150, 243, 0.2);
        animation: pulseBadge 2s ease-in-out infinite;
    }

    .page-title {
        font-size: 2.5rem;
        text-align: center;
        margin-bottom: 50px;
        color: #0d47a1;
        font-weight: 800;
    }

    .section-desc {
        color: #1565C0;
        margin-top: 10px;
        font-size: 1.1rem;
    }

    /* ============================================
       FOOTER - Gradasi Biru
       ============================================ */
    .footer {
        background: linear-gradient(135deg, #0d47a1, #0a3d91, #072b6b, #0d47a1);
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
        background: linear-gradient(90deg, #42A5F5, #64B5F6);
        margin-top: 8px;
        border-radius: 5px;
    }

    .footer-section h4 {
        margin-bottom: 15px;
        color: #90caf9;
        font-weight: 600;
    }

    .footer-section p {
        color: #bbdefb;
        line-height: 1.6;
    }

    .footer-contact {
        margin-top: 10px;
    }

    .footer-contact i {
        color: #42A5F5;
        width: 20px;
    }

    .footer-section ul {
        list-style: none;
    }

    .footer-section ul li {
        margin-bottom: 8px;
    }

    .footer-section ul a {
        color: #bbdefb;
        text-decoration: none;
        transition: all 0.3s;
        font-weight: 500;
    }

    .footer-section ul a:hover {
        color: #64B5F6;
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
        color: #bbdefb;
        text-decoration: none;
        transition: all 0.3s;
        font-size: 1.2rem;
    }

    .social-links a:hover {
        background: linear-gradient(135deg, #42A5F5, #64B5F6);
        color: #fff;
        transform: translateY(-5px) scale(1.1);
        box-shadow: 0 5px 20px rgba(66, 165, 245, 0.3);
    }

    .footer-bottom {
        text-align: center;
        padding-top: 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
        color: #90caf9;
        font-size: 0.9rem;
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
    <div class="bubbles">
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
    </div>