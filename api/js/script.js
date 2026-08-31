// ============================================
// CUSTOM CURSOR - Anak Panah Mewah
// ============================================
const cursor = document.getElementById('customCursor');
let mouseX = 0, mouseY = 0;
let cursorX = 0, cursorY = 0;

document.addEventListener('mousemove', (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;
});

function animateCursor() {
    cursorX += (mouseX - cursorX) * 0.08;
    cursorY += (mouseY - cursorY) * 0.08;
    cursor.style.left = cursorX + 'px';
    cursor.style.top = cursorY + 'px';
    requestAnimationFrame(animateCursor);
}
animateCursor();

// Hover effect pada elemen interactif
const interactiveElements = document.querySelectorAll('a, button, .btn, .portfolio-item, .info-card, .org-item, .achievement-item, .experience-item');

interactiveElements.forEach(el => {
    el.addEventListener('mouseenter', () => {
        cursor.classList.add('active');
    });
    el.addEventListener('mouseleave', () => {
        cursor.classList.remove('active');
    });
    el.addEventListener('mousedown', () => {
        cursor.classList.add('click');
    });
    el.addEventListener('mouseup', () => {
        cursor.classList.remove('click');
    });
});

// Sembunyikan kursor di mobile
if (window.innerWidth <= 768) {
    cursor.style.display = 'none';
}

// ============================================
// SCROLL REVEAL
// ============================================
const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .glass-card, .info-card, .portfolio-item, .experience-item, .org-item, .achievement-item');

const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
            const delay = index * 0.08;
            setTimeout(() => {
                entry.target.classList.add('revealed');
            }, delay * 1000);
        }
    });
}, {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
});

revealElements.forEach(el => {
    if (!el.classList.contains('reveal') && 
        !el.classList.contains('reveal-left') && 
        !el.classList.contains('reveal-right')) {
        el.classList.add('reveal');
    }
    revealObserver.observe(el);
});

// ============================================
// TYPING EFFECT
// ============================================
const typingElement = document.getElementById('typingText');
if (typingElement) {
    const words = ['Full Stack Developer', 'UI/UX Enthusiast', 'Tech Explorer', 'Problem Solver', 'Innovator'];
    let wordIndex = 0, charIndex = 0, isDeleting = false;

    function typeEffect() {
        const currentWord = words[wordIndex];
        if (isDeleting) {
            typingElement.textContent = currentWord.substring(0, charIndex - 1);
            charIndex--;
        } else {
            typingElement.textContent = currentWord.substring(0, charIndex + 1);
            charIndex++;
        }
        if (!isDeleting && charIndex === currentWord.length) {
            isDeleting = true;
            setTimeout(typeEffect, 2000);
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            wordIndex = (wordIndex + 1) % words.length;
            setTimeout(typeEffect, 500);
        } else {
            setTimeout(typeEffect, isDeleting ? 50 : 100);
        }
    }
    typeEffect();
}

// ============================================
// COUNTER ANIMATION
// ============================================
function animateCounters() {
    const counters = document.querySelectorAll('.stat-number');
    counters.forEach(counter => {
        const target = parseInt(counter.dataset.target);
        let current = 0;
        const increment = target / 60;
        function updateCounter() {
            current += increment;
            if (current < target) {
                counter.textContent = Math.floor(current);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
            }
        }
        updateCounter();
    });
}

document.addEventListener('DOMContentLoaded', animateCounters);

// ============================================
// FLOATING BUTTON
// ============================================
const floatBtn = document.getElementById('floatBtn');

window.addEventListener('scroll', function() {
    floatBtn.classList.toggle('show', window.scrollY > 300);
});

function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// ============================================
// MODAL - Untuk Detail Foto
// ============================================
function openModal(projectId) {
    const modal = document.getElementById('projectModal');
    const modalBody = document.getElementById('modalBody');
    
    const projects = {
        project1: {
            title: '🏔️ Leadership Ecoturism Expedition #2',
            desc: 'Terpilih dari 700+ pendaftar untuk menjadi salah satu anggota Top Fully Funded dan diamanahkan sebagai Ketua Divisi Pariwisata & Ekonomi Kreatif. Opening Ceremonial Visit Bur Telege, ID – MY – TH. Koordinator pembuatan Daifuku Mochikop avocado, Pastisipan Kobee Mask coffee, Koordinator pembuatan sabun cuci piring, Anggota pembuatan kopi jahe, Koordinator pembuatan kripik labu siam, Persembahan atraksi tari budaya, suku & Nusantara, Closing Ecotourism & UMKM FIELD TRIP, Museum Gayo, Lukup Penalam, Kapal wisata, Arum jeram.',
            image: '/api/assets/images/foto-2.jpg',
            tech: ['Leadership', 'Tourism', 'UMKM', 'Culture']
        },
        project2: {
            title: '🏡 Desa Binaan Mahasiswa Fakultas Teknik (DESBIMTEK)',
            desc: 'Sebagai Sekretaris. Anggota Pelatihan sanggar seni tari adat gayo siswa/i se desa pondok baru, Panitia Bimbingan mengaji di balai (TPA) se tempat, Anggota Apotik hidup kolaborasi PKK Pondok baru, Panitia Pengolahan limbah sayur pupuk cair organic (POC), Panitia les privat anak se desa Pondok Baru, Gotong royong kolaborasi Babinsa Pondok baru, Delegasi Sosialisasi & aksi clean Up Goes to school SMP N 1 Bandar, Juri Lomba Pekan Kreativitas Siswa (PKS) se Desa Pondok Baru, Team mendemonstrasikan alat pencacah dan pelebur sampah menjadi paving block bersama warga setempat.',
            image: '/api/assets/images/foto-3.jpg',
            tech: ['Pengabdian', 'Sosial', 'Edukasi', 'Lingkungan']
        },
        project3: {
            title: '🤝 Generasi Baru Indonesia (GENBI Komisariat Unimal)',
            desc: 'Penerima BEASISWA BANK INDONESIA sekaligus perpanjangan tangan dari Bank Indonesia Wilayah Lhokseumawe. Terlibat dalam berbagai kegiatan: Family Gathering, Training of Trainers Millenial, Pekan QRIS Nasional, Saweu Syedara & Pengabdian Masyarakat, Clean Up Lingkungan, Apotek Hidup, Sosialisasi CBP & CIKUR, Leadership Camp, Beach Clean Up, Unlocking BI Scholarship, SERAMBI Festival Ekonomi Syariah.',
            image: '/api/assets/images/foto-4.jpg',
            tech: ['Organisasi', 'Bank Indonesia', 'Pengabdian', 'Sosial']
        },
        project4: {
            title: '🏆 Pekan QRIS Nasional (PQN) Lhokseumawe 2025',
            desc: 'Juara 1 Lomba Estafet QRIS Kategori E-Wallet dan Juara 1 Lomba Musical Chair pada ajang Pekan QRIS Nasional (PQN) Lhokseumawe. Merupakan delegasi dan panitia dalam berbagai kegiatan QRIS dan literasi keuangan.',
            image: '/api/assets/images/foto-5.jpg',
            tech: ['QRIS', 'Literasi Keuangan', 'Kompetisi', 'Juara 1']
        },
        project5: {
            title: '🆘 Relawan Bencana - Banjir Bandang Sumatera',
            desc: 'Delegasi Team Survey Unimal Teknik (Informatika) Pasca Banjir Bandang Sumatera. Terlibat aktif dalam penanganan bencana dan pengabdian masyarakat pada saat bencana alam.',
            image: '/api/assets/images/foto-6.jpg',
            tech: ['Relawan', 'Bencana', 'Pengabdian', 'Sosial']
        },
        project6: {
            title: '💻 Muhammad Khardawi, S.Kom',
            desc: 'Lulusan Teknik Informatika Universitas Malikussaleh dengan IPK 3.74/4.00. Penerima Beasiswa BANK INDONESIA. Full Stack Developer dengan pengalaman di bidang pengembangan web, organisasi, dan pengabdian masyarakat. Memiliki rekam jejak yang kuat dalam kegiatan organisasi dan terlibat aktif pada ranah sosial.',
            image: '/api/assets/images/foto-1.jpg',
            tech: ['Full Stack', 'PHP', 'JavaScript', 'UI/UX']
        }
    };

    const project = projects[projectId];
    if (project) {
        modalBody.innerHTML = `
            <button class="modal-close" onclick="closeModal()">&times;</button>
            <h2 class="modal-title">${project.title}</h2>
            <img src="${project.image}" alt="${project.title}" class="modal-image" loading="lazy">
            <p class="modal-desc">${project.desc}</p>
            <div class="modal-tech">
                ${project.tech.map(t => `<span class="modal-tech-tag">${t}</span>`).join('')}
            </div>
            <div style="margin-top: 25px; text-align: center;">
                <button class="btn btn-primary" onclick="closeModal()">Tutup</button>
            </div>
        `;
    }
    
    modal.style.display = 'block';
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    const modal = document.getElementById('projectModal');
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
}

// Close modal klik di luar
window.onclick = function(event) {
    const modal = document.getElementById('projectModal');
    if (event.target === modal) {
        closeModal();
    }
};

// Close modal dengan tombol ESC
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeModal();
    }
});

// ============================================
// SMOOTH SCROLL
// ============================================
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});

// ============================================
// NAVBAR SCROLL EFFECT
// ============================================
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', function() {
    navbar.classList.toggle('scrolled', window.scrollY > 50);
});

// ============================================
// MOBILE MENU
// ============================================
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

document.querySelectorAll('.nav-menu a').forEach(link => {
    link.addEventListener('click', function() {
        document.getElementById('hamburger').classList.remove('active');
        document.getElementById('navMenu').classList.remove('active');
    });
});

console.log('✨ Portofolio Muhammad Khardawi - Tema Klasik Mewah ✨');