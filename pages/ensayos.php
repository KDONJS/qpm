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

.section-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: var(--bright-blue);
    color: white;
    padding: 0.8rem 1.5rem;
    border-radius: 50px;
    font-weight: 600;
    margin-bottom: 2rem;
    box-shadow: var(--shadow-soft);
}

.section-title {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--dark-blue);
    margin-bottom: 2rem;
    line-height: 1.2;
    position: relative;
}

.section-title::after {
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

.section-subtitle {
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

.service-definition {
    background: var(--light-bg);
    padding: 1.5rem;
    border-radius: var(--border-radius);
    margin-bottom: 2rem;
}

.service-definition .definition-content {
    color: var(--text-light);
    font-size: 1rem;
    line-height: 1.6;
    font-style: italic;
    margin: 0;
}

.definition-card {
    margin-bottom: 3rem;
    border: 2px solid var(--accent-green);
    background: linear-gradient(135deg, rgba(12, 175, 113, 0.05), rgba(47, 66, 144, 0.05));
}

.definition-card .service-icon-modern {
    background: var(--accent-green);
    color: white;
}

.service-tagline {
    font-size: 1rem;
    font-weight: 600;
    color: var(--bright-blue);
    margin-bottom: 1rem;
    font-style: italic;
}

.service-description {
    color: var(--text-light);
    line-height: 1.6;
    flex: 1;
    font-size: 0.95rem;
}

.service-description strong {
    color: var(--bright-blue);
    font-weight: 600;
    display: block;
    margin-bottom: 0.5rem;
    font-size: 1rem;
}

.service-description p {
    margin-bottom: 0.8rem;
}

.service-description p:last-child {
    margin-bottom: 0;
}

.service-techniques {
    margin-bottom: 1.5rem;
}

.service-techniques h4 {
    color: var(--bright-blue);
    font-weight: 600;
    margin-bottom: 0.75rem;
    font-size: 1.1rem;
}

.service-techniques ul {
    margin: 0;
    padding-left: 0;
    list-style-type: none;
}

.service-techniques li {
    position: relative;
    margin-bottom: 0.5rem;
    color: var(--text-light);
    padding-left: 1.5rem;
    line-height: 1.5;
}

.service-techniques li::before {
    content: '\f00c';
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    position: absolute;
    left: 0;
    color: var(--green);
    font-size: 0.9rem;
}

/* Sección de Beneficios */
.benefits-modern {
    padding: 5rem 0;
    background: var(--dark-blue);
    color: white;
    position: relative;
    overflow: hidden;
}

.benefits-modern::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: var(--teal);
    clip-path: polygon(0 15%, 100% 0, 100% 100%, 0 100%);
    opacity: 0.1;
}

.benefits-modern .container {
    position: relative;
    z-index: 1;
}

.benefits-header {
    margin-bottom: 3rem;
}

.benefits-header h2 {
    font-size: 2.2rem;
    font-weight: 800;
    margin-bottom: 1.5rem;
    text-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.benefits-header p {
    font-size: 1.1rem;
    opacity: 0.9;
    max-width: 700px;
    margin: 0 auto;
    line-height: 1.7;
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
}

.benefit-card {
    padding: 2rem 1.5rem;
    background: rgba(255, 255, 255, 0.1);
    border-radius: var(--border-radius-lg);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    transition: var(--transition);
}

.benefit-card:hover {
    transform: translateY(-8px);
    background: rgba(255, 255, 255, 0.15);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

.benefit-card i {
    font-size: 2.5rem;
    margin-bottom: 1.5rem;
    color: rgba(255, 255, 255, 0.9);
    text-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.benefit-card h4 {
    font-size: 1.2rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.benefit-card p {
    line-height: 1.6;
    margin: 0;
    opacity: 0.9;
    font-size: 0.95rem;
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
    
    .definition-section,
    .complementary-services {
        padding: 2rem;
    }
    
    .benefits-modern {
        padding: 4rem 0;
    }
    
    .benefits-grid {
        grid-template-columns: 1fr;
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
    
    .definition-section,
    .complementary-services {
        padding: 1.5rem;
    }
    
    .benefit-card {
        padding: 1.5rem;
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
.service-card-modern:nth-child(7) { animation-delay: 0.7s; }

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
    $title = "Ensayos No Destructivos";
    $description = "Evaluamos la integridad y las propiedades de materiales o componentes sin dañar el objeto mediante técnicas especializadas y normativas internacionales";
    $backgroundImage = "assets/img/servicios/3.jpg";
    
    // Incluir el componente hero
    include __DIR__ . '/../includes/hero-service.php';
    ?>

    <section class="services-modern">
        <div class="container">

            <div class="section-header-modern">
                <h2 class="section-title">Técnicas de Inspección Avanzadas</h2>
                <p class="section-subtitle">Aplicamos los métodos más efectivos según las necesidades específicas de cada proyecto</p>
            </div>

            <style>
            .services-grid-modern.two-cols { grid-template-columns: repeat(2, minmax(420px, 1fr)); gap: 2rem; }
            .services-grid-modern.two-cols .service-card-modern { min-height: 420px; }
            @media (max-width: 1200px) { .services-grid-modern.two-cols { grid-template-columns: repeat(2, minmax(360px, 1fr)); } }
            @media (max-width: 768px) { .services-grid-modern.two-cols { grid-template-columns: 1fr; } .services-grid-modern.two-cols .service-card-modern { min-height: auto; } }
            </style>

            <div class="services-grid-modern two-cols">
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="service-content">
                        <h3>Inspección Visual</h3>
                        <div class="service-description">
                            <strong>Descripción:</strong>
                            <p>Permite la detección de discontinuidades que afectan a la superficie visualmente accesible de los objetos.</p>
                        </div>
                    </div>
                </div>
                
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-tint"></i>
                    </div>
                    <div class="service-content">
                        <h3>Tintes Penetrantes</h3>
                        <div class="service-description">
                            <strong>Descripción:</strong>
                            <p>Método END que permite la detección de defectos superficiales finos (fisuras, grietas, etc). Existen diferentes técnicas, siendo la más usada la aplicación de Tintes Visibles en aerosol y en ocasiones Tintes Fluorescentes (Tipo I, requiere de zona oscura y lámpara UV) siendo este último el de mayor sensibilidad.</p>
                        </div>
                    </div>
                </div>
                
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-magnet"></i>
                    </div>
                    <div class="service-content">
                        <h3>Partículas Magnéticas</h3>
                        <div class="service-description">
                            <strong>Descripción:</strong>
                            <p>Método END que permite la detección de defectos superficiales y cercanos a la superficie de componentes ferromagnéticos mediante la magnetización de los componentes (con Yoke AC y DC, imanes, bobinas, entre otros). Se agregan partículas magnéticas (Visibles/Fluorescentes) las cuales forman un puente en el flujo magnético generando evidencias del defecto.</p>
                        </div>
                    </div>
                </div>
                
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-wave-square"></i>
                    </div>
                    <div class="service-content">
                        <h3>Ultrasonido Convencional, Phased Array y TOFD</h3>
                        <div class="service-description">
                            <strong>Descripción:</strong>
                            <p>UT Convencional: Técnica UT con la cual las ondas son transferidas al material evaluado de manera perpendicular (Haz Normal) y al rebotar con el fondo del material y llegar nuevamente al sensor se clasifica la discontinuidad para determinar el espesor, morfología/orientación del mismo e incluso el tipo.</p>
                            <p>UT Phased Array: Técnica UT en la que un solo sensor incluye 16 a 64 elementos de ultrasonido. El primer elemento emite las ondas completando un proceso de transmisión sucesivo por tiempo en micro segundos (delay law), en donde se requiere generar trazabilidad mediante software que registran posición (encoder), y otros mecanismos para desplazar el sensor de manera continua (esquemas semiautomáticos, automáticos y manuales).</p>
                            <p>TOFD: Técnica UT que sincroniza la emisión de señales de ultrasonido angular con dos sensores ubicados a una distancia determinada. En el caso de que esto sea interrumpido por el defecto (eco), lo registrará.</p>
                        </div>
                    </div>
                </div>
                
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <div class="service-content">
                        <h3>Eddy Current y Eddy Current Array</h3>
                        <div class="service-description">
                            <strong>Descripción:</strong>
                            <p>Eddy Current: Técnica básica de ET, en la que se hace aproximar al componente evaluado una bobina que induce sobre este un campo magnético de comportamiento predecible (respecto a una probeta o al mismo material) y al ser alterado permite detectar defectos superficiales o cercanos a la superficie evaluada.</p>
                            <p>Eddy Current Array: Técnica ET, en la que el sensor incluye más de una bobina, permitiendo escanear una zona con una mayor visualización del componente evaluado. En algunas ocasiones se requiere la adición de un registrador de posición (encoder).</p>
                        </div>
                    </div>
                </div>
                
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-search-plus"></i>
                    </div>
                    <div class="service-content">
                        <h3>Magnetic Flux Leakage - MFL</h3>
                        <div class="service-description">
                            <strong>Descripción:</strong>
                            <p>Es una técnica de prueba no destructiva que detecta defectos en materiales ferromagnéticos causada por corrosión o estrés. Se utiliza para inspeccionar tuberías, tanques de almacenamiento, cables y otras estructuras metálicas.</p>
                        </div>
                    </div>
                </div>
                
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-radiation"></i>
                    </div>
                    <div class="service-content">
                        <h3>Radiografía industrial</h3>
                        <div class="service-description">
                            <strong>Descripción:</strong>
                            <p>Método END Volumétrico que permite detectar defectos al interior de los componentes evaluados mediante la exposición a rayos Gamma o X.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-card-modern">
                <div class="service-icon-modern">
                    <i class="fas fa-tools"></i>
                </div>
                <div class="service-content">
                    <h3>Dureza superficial portátil rugosidad</h3>
                    <div class="service-definition">
                        <div class="definition-content">
                            <strong>Dureza Superficial Portátil, Rugosidad:</strong>
                            Dureza: es una prueba que evalúa la resistencia de un material a ser rayado o penetrado. Es una herramienta portátil útil para determinar si un material es adecuado para un propósito específico. Rugosidad: La inspección de rugosidad evalúa la textura de una superficie. Identifica defectos de la superficie, su gravedad y el impacto en el material evaluado.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>