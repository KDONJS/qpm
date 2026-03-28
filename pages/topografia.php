<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Sora:wght@600;700;800&display=swap" rel="stylesheet">

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

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Plus Jakarta Sans', sans-serif;
    line-height: 1.6;
    color: var(--text-dark);
    overflow-x: hidden;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
}

/* Secciones */
.services-modern {
    position: relative;
    padding: 4rem 0;
    background: linear-gradient(180deg, #f5f9ff 0%, #f9fcff 100%);
}

.services-modern::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: radial-gradient(circle at 20% 20%, rgba(38, 198, 218, 0.14) 0, transparent 32%),
                      radial-gradient(circle at 80% 0%, rgba(47, 66, 144, 0.08) 0, transparent 30%);
    pointer-events: none;
}

.section-header-modern {
    margin-bottom: 3rem;
    max-width: 760px;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    position: relative;
    z-index: 1;
}

.section-header-modern h2 {
    font-family: 'Sora', sans-serif;
    font-size: clamp(2rem, 4vw, 2.8rem);
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 1.1rem;
    position: relative;
}

.section-header-modern h2::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 70px;
    height: 4px;
    background: var(--teal);
    border-radius: 2px;
}

.section-header-modern p {
    font-size: 1rem;
    color: var(--text-light);
    line-height: 1.7;
    max-width: 620px;
    margin: 0 auto;
}

/* Grid de Servicios */
.services-grid-modern {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 1.5rem;
    position: relative;
    z-index: 1;
}

.service-card-modern {
    background: linear-gradient(180deg, #ffffff 0%, #fdfefe 100%);
    border-radius: 20px;
    padding: 0;
    box-shadow: 0 10px 30px rgba(20, 34, 66, 0.08);
    border: 1px solid #d9e4f3;
    transition: var(--transition);
    position: relative;
    overflow: hidden;
}

.service-thumb-modern {
    position: relative;
    margin: 0;
    height: 205px;
    background: #eef3f8;
    overflow: hidden;
}

.service-thumb-modern::after {
    content: '';
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    height: 56px;
    background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(17, 28, 46, 0.35) 100%);
}

.service-thumb-modern img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.35s ease;
}

.service-card-modern::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: var(--green);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.service-card-modern:hover::before {
    transform: scaleX(1);
}

.service-card-modern:hover {
    transform: translateY(-6px);
    box-shadow: var(--shadow-medium);
}

.service-card-modern:hover .service-thumb-modern img {
    transform: scale(1.04);
}

.service-content {
    padding: 1.15rem 1.25rem 1.35rem;
    text-align: left;
}

.service-content h3 {
    font-family: 'Sora', sans-serif;
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 0.45rem;
    line-height: 1.3;
}

/* Responsive Design */
@media (max-width: 1200px) {
    .services-grid-modern {
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    }
}

@media (max-width: 768px) {
    .services-modern {
        padding: 3rem 0;
    }
    
    .section-header-modern {
        margin-bottom: 3rem;
    }
    
    .services-grid-modern {
        grid-template-columns: 1fr;
        gap: 1.1rem;
    }
    
    .service-card-modern {
        min-height: auto;
    }

    .service-thumb-modern {
        height: 180px;
    }

    .service-content {
        padding: 1rem 1rem 1.2rem;
    }
}

@media (max-width: 480px) {
    .container {
        padding: 0 0.5rem;
    }
    
    .service-thumb-modern {
        height: 165px;
    }

    .service-content h3 {
        font-size: 1rem;
    }
}

/* Animaciones */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.service-card-modern {
    animation: fadeInUp 0.6s ease-out;
}

.service-card-modern:nth-child(1) { animation-delay: 0.1s; }
.service-card-modern:nth-child(2) { animation-delay: 0.2s; }
.service-card-modern:nth-child(3) { animation-delay: 0.3s; }
.service-card-modern:nth-child(4) { animation-delay: 0.4s; }
.service-card-modern:nth-child(5) { animation-delay: 0.5s; }
.service-card-modern:nth-child(6) { animation-delay: 0.6s; }

html {
    scroll-behavior: smooth;
}

@media (prefers-reduced-motion: reduce) {
    * {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
    }
}
</style>

<main>
    <?php 
    // Configuración del hero para esta página
    $title = "Topografía, Geodesia y Medición láser 3D";
    $description = "Brindamos soluciones tecnológicas en topografía y geodesia en diversos proyectos a nivel nacional. También realizamos mediciones en 3D con equipo láser tracker que permite medir con alta precisión las dimensiones de un objeto grande a través de la reflexión de la luz láser en dianas retroreflectoras colocadas sobre los puntos a medir.";

    $backgroundImage = "assets/img/servicios/topografia.png";
    
    // Incluir el componente hero
    include __DIR__ . '/../includes/hero-service.php';
    ?>

    <section class="services-modern">
        <div class="container">
            <div class="section-header-modern">
                <h2>Servicios Especializados</h2>
            </div>
            
            <div class="services-grid-modern">
                <?php
                $topographyServices = [
                    [
                        'title' => 'Levantamiento Topográfico en General',
                        'image' => 'D_1_Levantamiento Topografico en General.jpg',
                    ],
                    [
                        'title' => 'Medición de superficies topográficas',
                        'image' => 'D_2_Medición de Superficie Topográfica.JPG',
                    ],
                    [
                        'title' => 'Topografía en obra y construcción',
                        'image' => 'D_3_Topografia en Obra y Construccion.jpeg',
                    ],
                    [
                        'title' => 'Colocación de puntos geodésicos',
                        'image' => 'D_4_Colocación de Puntos Geodesicos.jpg',
                    ],
                    [
                        'title' => 'Topografía con drones',
                        'image' => 'D_5_Topografia con Drones.avif',
                    ],
                    [
                        'title' => 'Medición 3D de estructuras con láser tracker',
                        'image' => 'D_6_Medición 3D de estructuras.jpg',
                    ],
                ];

                foreach ($topographyServices as $service):
                    $imageUrl = BASE_URL . 'assets/img/topografia/' . rawurlencode($service['image']);
                ?>
                    <article class="service-card-modern">
                        <div class="service-thumb-modern">
                            <img src="<?php echo e($imageUrl); ?>" alt="<?php echo e($service['title']); ?>" loading="lazy">
                        </div>
                        <div class="service-content">
                            <h3><?php echo e($service['title']); ?></h3>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>
