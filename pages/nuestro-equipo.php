<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

<main>
    <section class="page-hero">
        <div class="container">
            <h1>Nuestro Equipo</h1>
            <p>Profesionales multidisciplinarios con amplia experiencia nacional e internacional</p>
        </div>
    </section>

    <section class="team-content">
        <div class="container">
            <div class="team-intro">
                <h2>Quiénes Somos</h2>
                <p>Somos un equipo de profesionales multidisciplinarios con amplia experiencia en la industria nacional e internacional. Contamos con certificaciones internacionales como AWS, ASNT, Crane Institute, API, entre otras, que respaldan la calidad y excelencia de nuestros servicios.</p>
                
                <div class="experience-highlight">
                    <div class="highlight-item">
                        <i class="fas fa-calendar-alt"></i>
                        <div>
                            <h3>Desde Febrero 2015</h3>
                            <p>Trabajando con compromiso y responsabilidad</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="commitment-section">
                <h2>Nuestro Compromiso</h2>
                <p>Brindamos soluciones confiables e innovadoras que contribuyen al desarrollo sostenible de nuestros clientes en el sector minero e industrial, manteniendo siempre los más altos estándares de calidad y excelencia profesional.</p>
            </div>
        </div>
    </section>

    <!-- Galería del Equipo -->
    <section class="team-gallery">
        <div class="container">
            <div class="section-header-modern-gallery">
                <h2 class="section-title-gallery">Galería del Equipo</h2>
                <p class="section-subtitle-gallery">Momentos destacados de nuestro trabajo y equipo</p>
            </div>

            <div class="gallery-grid">
                <!-- Imágenes del folder assets/img/equipo -->
                <div class="gallery-item">
                    <img src="../assets/img/equipo/20240710_142812.jpg" alt="Equipo QPM 20240710_142812">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/equipo/20240911_172653.jpg" alt="Equipo QPM 20240911_172653">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/equipo/20240911_172657.jpg" alt="Equipo QPM 20240911_172657">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/equipo/20241003_121130.jpg" alt="Equipo QPM 20241003_121130">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/equipo/20241003_121131.jpg" alt="Equipo QPM 20241003_121131">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/equipo/20241003_121214.jpg" alt="Equipo QPM 20241003_121214">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/equipo/20241003_121217.jpg" alt="Equipo QPM 20241003_121217">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/equipo/WhatsApp%20Image%202025-06-24%20at%206.32.30%20PM%20(1)%20(1).jpeg" alt="Equipo QPM WhatsApp 2025-06-24">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/equipo/WhatsApp%20Image%202025-07-02%20at%204.18.14%20PM%20(9)%20(1).jpeg" alt="Equipo QPM WhatsApp 2025-07-02">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/equipo/WhatsApp%20Image%202025-08-28%20at%2010.45.52%20AM%20(1).jpeg" alt="Equipo QPM WhatsApp 2025-08-28 (1)">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/equipo/WhatsApp%20Image%202025-08-28%20at%2010.45.52%20AM.jpeg" alt="Equipo QPM WhatsApp 2025-08-28">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
            </div>
        </div>

        <!-- Lightbox -->
        <div id="lightbox" class="lightbox" aria-hidden="true">
            <button class="lightbox-close" aria-label="Cerrar"><i class="fas fa-times"></i></button>
            <img id="lightbox-img" src="" alt="Imagen de la galería">
        </div>
    </section>

    <script>
    // Lightbox simple
    (function() {
        const items = document.querySelectorAll('.gallery-item img');
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const closeBtn = document.querySelector('.lightbox-close');

        items.forEach(img => {
            img.addEventListener('click', () => {
                lightboxImg.src = img.src;
                lightbox.classList.add('open');
                lightbox.setAttribute('aria-hidden', 'false');
                document.body.style.overflow = 'hidden';
            });
        });

        function closeLightbox() {
            lightbox.classList.remove('open');
            lightbox.setAttribute('aria-hidden', 'true');
            lightboxImg.src = '';
            document.body.style.overflow = '';
        }

        closeBtn.addEventListener('click', closeLightbox);
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) closeLightbox();
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeLightbox();
        });
    })();
    </script>
</main>

<style>
:root {
    --dark-blue: #3f51b5;
    --teal: #26c6da;
    --bright-blue: #2196f3;
    --white: #ffffff;
    --green: #4caf50;
    --lime: #8bc34a;
    --text-dark: #1e293b;
    --text-light: #64748b;
    --light-bg: #f8fafc;
}

.page-hero {
    background: var(--dark-blue);
    color: var(--white);
    padding: 5rem 0;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.page-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: var(--teal);
    clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
    opacity: 0.1;
}

.page-hero h1 {
    font-size: 3rem;
    font-weight: 800;
    margin-bottom: 1.5rem;
    position: relative;
    z-index: 2;
}

.page-hero p {
    font-size: 1.3rem;
    opacity: 0.95;
    max-width: 700px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}

.team-content {
    padding: 5rem 0;
    background: var(--light-bg);
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
}

.team-intro {
    text-align: center;
    margin-bottom: 5rem;
}

.team-intro h2 {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--dark-blue);
    margin-bottom: 2rem;
    position: relative;
}

.team-intro h2::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: var(--teal);
    border-radius: 2px;
}

.team-intro p {
    font-size: 1.2rem;
    color: var(--text-light);
    line-height: 1.8;
    max-width: 900px;
    margin: 0 auto 4rem;
}

.experience-highlight {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 2rem;
    margin-top: 4rem;
}

.highlight-item {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    background: var(--white);
    padding: 2rem;
    border-radius: 16px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    overflow: hidden;
}

.highlight-item:nth-child(2) {
    border-left-color: var(--green);
}

.highlight-item:nth-child(3) {
    border-left-color: var(--lime);
}

.highlight-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
}

.highlight-item i {
    font-size: 2.5rem;
    color: var(--bright-blue);
    width: 70px;
    height: 70px;
    background: rgba(33, 150, 243, 0.1);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.highlight-item:nth-child(2) i {
    color: var(--green);
    background: rgba(76, 175, 80, 0.1);
}

.highlight-item:nth-child(3) i {
    color: var(--lime);
    background: rgba(139, 195, 74, 0.1);
}

.highlight-item h3 {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 0.5rem;
}

.highlight-item p {
    font-size: 1rem;
    color: var(--text-light);
    margin: 0;
    line-height: 1.5;
}

.commitment-section {
    background: var(--white);
    padding: 4rem;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    text-align: center;
    margin-bottom: 5rem;
    position: relative;
    overflow: hidden;
}

.commitment-section h2 {
    font-size: 2.2rem;
    font-weight: 800;
    color: var(--dark-blue);
    margin-bottom: 2rem;
}

.commitment-section p {
    font-size: 1.2rem;
    color: var(--text-light);
    line-height: 1.8;
    max-width: 900px;
    margin: 0 auto;
}

.certifications-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2.5rem;
}

.cert-card {
    background: var(--white);
    padding: 3rem 2rem;
    border-radius: 20px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    text-align: center;
    transition: all 0.4s ease;
    border-top: 6px solid var(--bright-blue);
    position: relative;
    overflow: hidden;
}

.cert-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 6px;
    background: var(--bright-blue);
    transform: scaleX(0);
    transition: transform 0.4s ease;
    transform-origin: left;
}

.cert-card.aws {
    border-top-color: var(--bright-blue);
}

.cert-card.aws::before {
    background: var(--bright-blue);
}

.cert-card.asnt {
    border-top-color: var(--teal);
}

.cert-card.asnt::before {
    background: var(--teal);
}

.cert-card.crane {
    border-top-color: var(--green);
}

.cert-card.crane::before {
    background: var(--green);
}

.cert-card.api {
    border-top-color: var(--lime);
}

.cert-card.api::before {
    background: var(--lime);
}

.cert-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.cert-card:hover::before {
    transform: scaleX(1);
}

.cert-card i {
    font-size: 4rem;
    margin-bottom: 1.5rem;
    width: 100px;
    height: 100px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-left: auto;
    margin-right: auto;
}

.cert-card.aws i {
    color: var(--bright-blue);
    background: rgba(33, 150, 243, 0.1);
}

.cert-card.asnt i {
    color: var(--teal);
    background: rgba(38, 198, 218, 0.1);
}

.cert-card.crane i {
    color: var(--green);
    background: rgba(76, 175, 80, 0.1);
}

.cert-card.api i {
    color: var(--lime);
    background: rgba(139, 195, 74, 0.1);
}

.cert-card h3 {
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--text-dark);
    margin-bottom: 1.5rem;
}

.cert-card p {
    color: var(--text-light);
    line-height: 1.7;
    margin: 0;
    font-size: 1rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    .page-hero {
        padding: 3rem 0;
    }
    
    .page-hero h1 {
        font-size: 2.2rem;
    }
    
    .page-hero p {
        font-size: 1.1rem;
    }
    
    .team-content {
        padding: 3rem 0;
    }
    
    .team-intro h2 {
        font-size: 2rem;
    }
    
    .experience-highlight {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .highlight-item {
        padding: 1.5rem;
        gap: 1rem;
    }
    
    .highlight-item i {
        width: 60px;
        height: 60px;
        font-size: 2rem;
    }
    
    .commitment-section {
        padding: 2.5rem;
        margin-bottom: 3rem;
    }
    
    .certifications-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .cert-card {
        padding: 2rem 1.5rem;
    }
    
    .cert-card i {
        width: 80px;
        height: 80px;
        font-size: 3rem;
    }
}

@media (max-width: 480px) {
    .container {
        padding: 0 0.5rem;
    }
    
    .page-hero h1 {
        font-size: 1.8rem;
    }
    
    .highlight-item {
        flex-direction: column;
        text-align: center;
        gap: 1rem;
    }
    
    .highlight-item i {
        margin-bottom: 0;
        width: 70px;
        height: 70px;
        font-size: 2.2rem;
    }
    
    .commitment-section {
        padding: 2rem 1.5rem;
    }
    
    .cert-card i {
        width: 70px;
        height: 70px;
        font-size: 2.5rem;
    }
}

/* Galería moderna */
.team-gallery {
    padding: 5rem 0;
    background: var(--light-bg);
}

.section-header-modern-gallery {
    text-align: center;
    margin-bottom: 3rem;
}

.section-title-gallery {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--dark-blue);
    margin-bottom: 1rem;
    position: relative;
}

.section-title-gallery::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: var(--teal);
    border-radius: 2px;
}

.section-subtitle-gallery {
    font-size: 1.1rem;
    color: var(--text-light);
    line-height: 1.7;
    max-width: 800px;
    margin: 0 auto;
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 1.5rem;
}

.gallery-item {
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    cursor: zoom-in;
    background: #fff;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}

.gallery-item img {
    width: 100%;
    height: 240px;
    object-fit: cover;
    display: block;
    transition: transform 0.4s ease;
}

.gallery-item .gallery-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(63,81,181,0.2), rgba(38,198,218,0.35));
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.25s ease;
}

.gallery-item .gallery-overlay i {
    color: var(--white);
    font-size: 1.5rem;
    filter: drop-shadow(0 2px 6px rgba(0,0,0,0.3));
}

.gallery-item:hover {
    transform: translateY(-4px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
}

.gallery-item:hover img {
    transform: scale(1.06);
}

.gallery-item:hover .gallery-overlay {
    opacity: 1;
}

/* Lightbox */
.lightbox {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.85);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 9999;
    padding: 1rem;
}

.lightbox.open {
    display: flex;
}

.lightbox img {
    max-width: min(1000px, 90vw);
    max-height: 85vh;
    border-radius: 12px;
    box-shadow: 0 20px 50px rgba(0,0,0,0.35);
}

.lightbox-close {
    position: absolute;
    top: 1.5rem;
    right: 1.5rem;
    background: rgba(255,255,255,0.15);
    border: 1px solid rgba(255,255,255,0.3);
    color: #fff;
    padding: 0.6rem 0.8rem;
    border-radius: 50%;
    cursor: pointer;
    transition: all 0.25s ease;
}

.lightbox-close:hover {
    background: rgba(255,255,255,0.25);
    transform: scale(1.05);
}

/* Responsive */
@media (max-width: 768px) {
    .section-title-gallery {
        font-size: 2rem;
    }
    .gallery-item img {
        height: 200px;
    }
}

@media (max-width: 480px) {
    .gallery-item img {
        height: 180px;
    }
}
</style>