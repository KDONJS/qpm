<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

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
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
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
    padding: 4rem 0;
    background: var(--light-bg);
}

.section-header-modern {
    margin-bottom: 4rem;
    max-width: 900px;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
}

.section-header-modern h2 {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--dark-blue);
    margin-bottom: 2rem;
    position: relative;
}

.section-header-modern h2::after {
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

.section-header-modern p {
    font-size: 1.2rem;
    color: var(--text-light);
    line-height: 1.8;
    max-width: 700px;
    margin: 0 auto;
}

/* Grid de Servicios */
.services-grid-modern {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.service-card-modern {
    background: var(--card-bg);
    border-radius: var(--border-radius);
    padding: 2.5rem;
    box-shadow: var(--shadow-soft);
    border: 1px solid var(--border-color);
    transition: var(--transition);
    position: relative;
    overflow: hidden;
}

.service-card-modern::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--green);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.service-card-modern:hover::before {
    transform: scaleX(1);
}

.service-card-modern:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-medium);
}

.service-icon-modern {
    width: 70px;
    height: 70px;
    background: var(--green);
    border-radius: var(--border-radius);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 2rem;
    box-shadow: var(--shadow-soft);
}

.service-icon-modern i {
    font-size: 1.8rem;
    color: var(--white);
}

.service-content {
    text-align: left;
}

.service-content h3 {
    font-size: 1.4rem;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 1rem;
    line-height: 1.3;
}

/* Responsive Design */
@media (max-width: 1200px) {
    .services-grid-modern {
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    }
}

@media (max-width: 768px) {
    .services-modern {
        padding: 3rem 0;
    }
    
    .section-header-modern {
        margin-bottom: 3rem;
    }
    
    .section-header-modern h2 {
        font-size: 2rem;
    }
    
    .services-grid-modern {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .service-card-modern {
        padding: 2rem;
        min-height: auto;
    }
    
    .service-icon-modern {
        width: 60px;
        height: 60px;
    }
    
    .service-icon-modern i {
        font-size: 1.5rem;
    }
}

@media (max-width: 480px) {
    .container {
        padding: 0 0.5rem;
    }
    
    .service-card-modern {
        padding: 1.5rem;
    }
    
    .service-icon-modern {
        width: 60px;
        height: 60px;
    }
    
    .service-icon-modern i {
        font-size: 1.5rem;
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
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <div class="service-content">
                        <h3>Levantamiento Topográfico en General</h3>
                    </div>
                </div>
                
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-mountain"></i>
                    </div>
                    <div class="service-content">
                        <h3>Medición de superficies topográficas</h3>
                    </div>
                </div>
                
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <div class="service-content">
                        <h3>Topografía en obra y construcción</h3>
                    </div>
                </div>
                
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-crosshairs"></i>
                    </div>
                    <div class="service-content">
                        <h3>Colocación de puntos geodésicos</h3>
                    </div>
                </div>
                
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fa fa-plane" aria-hidden="true"></i>
                    </div>
                    <div class="service-content">
                        <h3>Topografía con drones</h3>
                    </div>
                </div>
                
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-cube"></i>
                    </div>
                    <div class="service-content">
                        <h3>Medición 3D de estructuras con láser tracker</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>