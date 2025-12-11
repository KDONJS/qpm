<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

<main>
    <?php 
    // Configuración del hero para esta página
    $title = "Nosotros";
    $backgroundImage = "assets/img/equipo/WhatsApp Image 2025-08-28 at 10.45.52 AM.jpeg";
    
    // Incluir el componente hero
    include __DIR__ . '/../includes/hero-service.php';
    ?>

    <section class="team-content">
        <div class="container">
            <div class="team-intro">
                <h2>Quiénes Somos</h2>
                <p>Somos un equipo de profesionales multidisciplinarios con amplia experiencia en la industria nacional e internacional. Contamos con certificaciones internacionales como AWS, ASNT, Crane Institute, API, entre otras, que respaldan la calidad y excelencia de nuestros servicios.
                    <br>
                    <br>
                     Desde febrero de 2015, hemos trabajado con compromiso y responsabilidad, brindando soluciones confiables e innovadoras que contribuyen al desarrollo sostenible de nuestros clientes en el sector minero e industrial.
                </p>
                
            </div>

            <div class="commitment-section">
                <h2>Nuestro Compromiso</h2>
                <p>Brindamos soluciones confiables e innovadoras que contribuyen al desarrollo sostenible de nuestros clientes en el sector minero e industrial, manteniendo siempre los más altos estándares de calidad y excelencia profesional.</p>
            </div>
        </div>
    </section>

    <section class="vision-mission-content">
        <div class="container">
            <div class="vision-mission-grid">
                <div class="vision-card">
                    <div class="card-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Nuestra Visión</h3>
                    <p>Ser una empresa de crecimiento sólido, siendo la mejor alternativa de soporte y suministro de nuestros clientes en los sectores minería, energía, hidrocarburos e industria en general, nacional e internacionalmente.</p>
                </div>
                <div class="mission-card">
                    <div class="card-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Nuestra Misión</h3>
                    <p>Brindar soluciones innovadoras, flexibles e integrales alineadas a los objetivos estratégicos de nuestros clientes, así como establecer internamente estrategias orientadas a nuestro crecimiento sostenido y con ello el de nuestros colaboradores.</p>
                </div>
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
                <?php include_once $basePath.'includes/clients-service.php'; $imgs = getClientImages(__DIR__.'/../assets/img/equipo'); $i=0; foreach ($imgs as $img) { $alt = 'Equipo QPM '.ucwords(strtolower(trim(pathinfo($img, PATHINFO_FILENAME)))); $url = $basePath.'assets/img/equipo/'.rawurlencode($img); echo '<div class="gallery-item" data-index="'.$i.'"><img src="'.$url.'" alt="'.$alt.'" loading="lazy" decoding="async"><div class="gallery-overlay"><i class="fas fa-search-plus"></i></div></div>'; $i++; } ?>
            </div>
        </div>

        <!-- Lightbox -->
        <div id="lightbox" class="lightbox" aria-hidden="true">
            <button class="lightbox-close" aria-label="Cerrar"><i class="fas fa-times"></i></button>
            <button class="lightbox-prev" aria-label="Anterior"><i class="fas fa-chevron-left"></i></button>
            <img id="lightbox-img" src="" alt="Imagen de la galería">
            <button class="lightbox-next" aria-label="Siguiente"><i class="fas fa-chevron-right"></i></button>
        </div>
    </section>

    <script>
    (function() {
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const closeBtn = document.querySelector('.lightbox-close');
        const prevBtn = document.querySelector('.lightbox-prev');
        const nextBtn = document.querySelector('.lightbox-next');
        const items = Array.from(document.querySelectorAll('.gallery-item'));
        const isMobile = () => (
            window.matchMedia('(hover: none)').matches ||
            window.matchMedia('(pointer: coarse)').matches ||
            window.matchMedia('(max-width: 768px)').matches
        );
        let currentIndex = -1;

        function openAt(index) {
            if (isMobile()) return;
            const item = items[index];
            if (!item) return;
            const img = item.querySelector('img');
            lightboxImg.src = img.src;
            lightbox.classList.add('open');
            lightbox.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
            currentIndex = index;
        }

        function closeLightbox() {
            lightbox.classList.remove('open');
            lightbox.setAttribute('aria-hidden', 'true');
            lightboxImg.classList.remove('zoomed');
            lightboxImg.src = '';
            document.body.style.overflow = '';
            currentIndex = -1;
        }

        function next() { if (items.length) openAt((currentIndex + 1) % items.length); }
        function prev() { if (items.length) openAt((currentIndex - 1 + items.length) % items.length); }

        if (!isMobile()) {
            items.forEach((item, idx) => {
                const overlay = item.querySelector('.gallery-overlay');
                const handler = () => openAt(idx);
                item.addEventListener('click', handler);
                if (overlay) overlay.addEventListener('click', function(e) { e.stopPropagation(); handler(); });
            });
        }

        closeBtn.addEventListener('click', closeLightbox);
        prevBtn.addEventListener('click', function(e){ e.stopPropagation(); prev(); });
        nextBtn.addEventListener('click', function(e){ e.stopPropagation(); next(); });

        lightbox.addEventListener('click', function(e) { if (e.target === lightbox) closeLightbox(); });
        lightboxImg.addEventListener('click', function(e) { e.stopPropagation(); lightboxImg.classList.toggle('zoomed'); });

        document.addEventListener('keydown', function(e) {
            if (!lightbox.classList.contains('open')) return;
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowRight') next();
            if (e.key === 'ArrowLeft') prev();
        });

        let startX = 0;
        lightbox.addEventListener('touchstart', function(e){ if(!lightbox.classList.contains('open')) return; startX = e.changedTouches[0].clientX; }, {passive:true});
        lightbox.addEventListener('touchend', function(e){ if(!lightbox.classList.contains('open')) return; const dx = e.changedTouches[0].clientX - startX; if (Math.abs(dx) > 40) { if (dx < 0) next(); else prev(); } }, {passive:true});
    })();
    </script>
</main>

<style>
:root {
    --dark-blue: #2f4290;
    --teal: #26c6da;
    --bright-blue: #2196f3;
    --white: #ffffff;
    --green: #0caf71;
    --lime: #0caf71;
    --text-dark: #1e293b;
    --text-light: #64748b;
    --light-bg: #f8fafc;
    --border-color: #e2e8f0;
    --card-bg: #ffffff;
    
    --shadow-soft: 0 8px 25px rgba(0, 0, 0, 0.08);
    --shadow-medium: 0 15px 35px rgba(0, 0, 0, 0.12);
    --shadow-strong: 0 20px 40px rgba(0, 0, 0, 0.15);
    
    --border-radius: 16px;
    --border-radius-lg: 20px;
    --transition: all 0.3s ease;
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
    margin-top: 2rem;
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
    transition: transform 0.25s ease;
    user-select: none;
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

.lightbox-prev, .lightbox-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255,255,255,0.15);
    border: 1px solid rgba(255,255,255,0.3);
    color: #fff;
    width: 44px;
    height: 44px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.25s ease;
}
.lightbox-prev { left: 1rem; }
.lightbox-next { right: 1rem; }
.lightbox-prev:hover, .lightbox-next:hover { background: rgba(255,255,255,0.25); }
.lightbox img.zoomed { transform: scale(1.25); }

/* Responsive */
@media (max-width: 768px) {
    .section-title-gallery {
        font-size: 2rem;
    }
    .gallery-item img {
        height: 200px;
    }
    .gallery-item { cursor: default; }
    .gallery-item .gallery-overlay { display: none; }
    .lightbox-prev, .lightbox-next { width: 40px; height: 40px; }
    .lightbox img { max-width: 95vw; max-height: 80vh; }
}

@media (max-width: 480px) {
    .gallery-item img {
        height: 180px;
    }
    .lightbox-prev, .lightbox-next { width: 38px; height: 38px; }
    .lightbox-close { top: 1rem; right: 1rem; }
    .lightbox img { max-width: 96vw; max-height: 78vh; }
}

/* Desactivar interacción en dispositivos táctiles/coarse pointer */
@media (hover: none), (pointer: coarse) {
    .gallery-item { cursor: default; pointer-events: none; }
    .gallery-item .gallery-overlay { display: none; }
}

.vision-mission-content {
    padding: 5rem 0;
    background: var(--light-bg);
}

.vision-mission-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
    gap: 3rem;
}

.vision-card, .mission-card {
    background: var(--white);
    padding: 3rem;
    border-radius: var(--border-radius-lg);
    box-shadow: var(--shadow-soft);
    text-align: center;
    transition: var(--transition);
    position: relative;
    overflow: hidden;
}

.vision-card:hover, .mission-card:hover {
    transform: translateY(-12px);
    box-shadow: var(--shadow-strong);
}

.card-icon {
    width: 100px;
    height: 100px;
    border-radius: var(--border-radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 2rem;
    overflow: hidden;
}

.vision-card .card-icon { background: rgba(33, 150, 243, 0.1); }
.mission-card .card-icon { background: rgba(38, 198, 218, 0.1); }
.card-icon i { font-size: 3rem; }
.vision-card .card-icon i { color: var(--bright-blue); }
.mission-card .card-icon i { color: var(--teal); }

.vision-card h3, .mission-card h3 {
    font-size: 1.8rem;
    font-weight: 800;
    color: var(--text-dark);
    margin-bottom: 1.5rem;
}

.vision-card p, .mission-card p {
    color: var(--text-light);
    line-height: 1.8;
    font-size: 1.1rem;
    margin: 0;
}

.values-section { padding: 5rem 0; background: var(--white); }
.values-intro { text-align: center; margin-bottom: 5rem; }
.values-intro h2 {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--dark-blue);
    margin-bottom: 2rem;
    position: relative;
}
.values-intro h2::after {
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
.values-intro p { font-size: 1.2rem; color: var(--text-light); line-height: 1.8; max-width: 900px; margin: 0 auto; }
.values-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2.5rem; }
.value-item { display: flex; align-items: flex-start; gap: 1.5rem; background: var(--light-bg); padding: 2.5rem; border-radius: var(--border-radius); box-shadow: var(--shadow-soft); transition: var(--transition); overflow: hidden; }
.value-item:hover { transform: translateY(-8px); box-shadow: var(--shadow-medium); }
.value-icon { width: 70px; height: 70px; border-radius: var(--border-radius); display: flex; align-items: center; justify-content: center; flex-shrink: 0; overflow: hidden; }
.value-item:nth-child(1) .value-icon { background: rgba(33, 150, 243, 0.1); }
.value-item:nth-child(2) .value-icon { background: rgba(76, 175, 80, 0.1); }
.value-item:nth-child(3) .value-icon { background: rgba(38, 198, 218, 0.1); }
.value-item:nth-child(4) .value-icon { background: rgba(139, 195, 74, 0.1); }
.value-icon i { font-size: 2.2rem; }
.value-item:nth-child(1) .value-icon i { color: var(--bright-blue); }
.value-item:nth-child(2) .value-icon i { color: var(--green); }
.value-item:nth-child(3) .value-icon i { color: var(--teal); }
.value-item:nth-child(4) .value-icon i { color: var(--lime); }
.value-content h4 { font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.8rem; }
.value-content p { color: var(--text-light); line-height: 1.7; margin: 0; font-size: 1rem; }

.vision-commitment-section { padding: 5rem 0; }
.vision-commitment-content { background: var(--white); padding: 4rem; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-soft); text-align: center; position: relative; overflow: hidden; }
.vision-commitment-content h2 { font-size: 2.2rem; font-weight: 800; color: var(--dark-blue); margin-bottom: 2rem; }
.vision-commitment-description { font-size: 1.2rem; color: var(--text-light); line-height: 1.8; max-width: 900px; margin: 0 auto 4rem; }
.vision-commitment-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2.5rem; text-align: left; }
.vision-commitment-item { display: flex; flex-direction: column; align-items: center; gap: 1.5rem; background: var(--light-bg); padding: 2.5rem; border-radius: var(--border-radius); box-shadow: var(--shadow-soft); transition: var(--transition); overflow: hidden; text-align: center; }
.vision-commitment-item:hover { transform: translateY(-8px); box-shadow: var(--shadow-medium); }
.vision-commitment-icon { width: 70px; height: 70px; border-radius: var(--border-radius); display: flex; align-items: center; justify-content: center; flex-shrink: 0; overflow: hidden; }
.vision-commitment-item:nth-child(1) .vision-commitment-icon { background: rgba(33, 150, 243, 0.1); }
.vision-commitment-item:nth-child(2) .vision-commitment-icon { background: rgba(76, 175, 80, 0.1); }
.vision-commitment-item:nth-child(3) .vision-commitment-icon { background: rgba(38, 198, 218, 0.1); }
.vision-commitment-icon i { font-size: 2.2rem; }
.vision-commitment-item:nth-child(1) .vision-commitment-icon i { color: var(--bright-blue); }
.vision-commitment-item:nth-child(2) .vision-commitment-icon i { color: var(--green); }
.vision-commitment-item:nth-child(3) .vision-commitment-icon i { color: var(--teal); }
.vision-commitment-text h4 { font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.8rem; }
.vision-commitment-text p { color: var(--text-light); line-height: 1.7; margin: 0; font-size: 1rem; }

@media (max-width: 768px) {
    .vision-mission-content, .values-section, .vision-commitment-section { padding: 3rem 0; }
    .vision-mission-grid { grid-template-columns: 1fr; gap: 2rem; }
    .vision-card, .mission-card { padding: 2.5rem; }
    .card-icon { width: 80px; height: 80px; }
    .card-icon i { font-size: 2.5rem; }
    .values-intro h2 { font-size: 2rem; }
    .values-grid, .vision-commitment-grid { grid-template-columns: 1fr; gap: 2rem; }
    .value-item, .vision-commitment-item { padding: 2rem; gap: 1rem; }
    .value-icon, .vision-commitment-icon { width: 60px; height: 60px; }
    .value-icon i, .vision-commitment-icon i { font-size: 1.8rem; }
    .vision-commitment-content { padding: 2.5rem; }
}

@media (max-width: 480px) {
    .vision-card, .mission-card { padding: 2rem; }
    .value-item, .vision-commitment-item { flex-direction: column; text-align: center; gap: 1rem; }
    .value-icon, .vision-commitment-icon { margin: 0 auto; width: 70px; height: 70px; }
    .value-icon i, .vision-commitment-icon i { font-size: 2rem; }
    .vision-commitment-content { padding: 2rem 1.5rem; }
}
</style>