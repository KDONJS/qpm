<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

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

/* Hero Section */
.hero-modern {
    background: var(--dark-blue);
    color: var(--white);
    padding: 3rem 0;
    position: relative;
    overflow: hidden;
}

.hero-modern::before {
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

.hero-content {
    position: relative;
    z-index: 2;
    max-width: 800px;
    margin: 0 auto;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(255, 255, 255, 0.2);
    padding: 0.6rem 1.2rem;
    border-radius: 50px;
    font-weight: 600;
    margin-bottom: 1.5rem;
    border: 1px solid rgba(255, 255, 255, 0.3);
    position: relative;
    z-index: 2;
    font-size: 0.9rem;
}

.hero-title {
    font-size: 2.5rem;
    font-weight: 800;
    margin-bottom: 1rem;
    position: relative;
    z-index: 2;
}

.hero-description {
    font-size: 1.1rem;
    opacity: 0.95;
    max-width: 700px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
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

/* Definición Destacada */
.definition-section {
    background: var(--card-bg);
    border-radius: var(--border-radius-lg);
    padding: 2.5rem;
    box-shadow: var(--shadow-medium);
    border: 1px solid var(--border-color);
    margin-bottom: 3rem;
    position: relative;
    overflow: hidden;
}

.definition-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--bright-blue);
}

.definition-section h2 {
    font-size: 2rem;
    font-weight: 800;
    color: var(--dark-blue);
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
}

.definition-section h2::before {
    content: '\f0e7';
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    color: var(--bright-blue);
    font-size: 1.5rem;
}

.definition-section p {
    font-size: 1.1rem;
    color: var(--text-light);
    line-height: 1.7;
    max-width: 800px;
    margin: 0 auto;
}

/* Grid de Servicios */
.services-grid-modern {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.service-card-modern {
    background: var(--card-bg);
    border-radius: var(--border-radius-lg);
    padding: 2.5rem;
    box-shadow: var(--shadow-soft);
    border: 1px solid var(--border-color);
    transition: var(--transition);
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    min-height: 320px;
}

.service-card-modern:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-medium);
    border-color: var(--bright-blue);
}

.service-icon-modern {
    width: 80px;
    height: 80px;
    border-radius: var(--border-radius);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    background: linear-gradient(135deg, var(--bright-blue), var(--teal));
    box-shadow: 0 4px 15px rgba(33, 150, 243, 0.3);
}

.service-icon-modern i {
    font-size: 2rem;
    color: var(--white);
}

.service-content {
    flex: 1;
    display: flex;
    flex-direction: column;
}

.service-content h3 {
    font-size: 1.4rem;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 1rem;
    line-height: 1.3;
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

/* Servicios Complementarios */
.complementary-services {
    background: var(--card-bg);
    border-radius: var(--border-radius-lg);
    padding: 2.5rem;
    box-shadow: var(--shadow-medium);
    border: 1px solid var(--border-color);
    margin-bottom: 3rem;
    position: relative;
    overflow: hidden;
}

.complementary-services::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--teal);
}

.complementary-services h3 {
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 2rem;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.75rem;
}

.complementary-services h3::before {
    content: '\f085';
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    color: var(--bright-blue);
    font-size: 1.3rem;
}

.complementary-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.complementary-item {
    padding: 2rem;
    background: var(--light-bg);
    border-radius: var(--border-radius);
    border-left: 5px solid var(--bright-blue);
    transition: var(--transition);
}

.complementary-item:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-soft);
    border-left-color: var(--teal);
}

.complementary-item h4 {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.complementary-item:nth-child(1) h4::before { 
    content: '\f0e4'; 
    font-family: 'Font Awesome 6 Free'; 
    font-weight: 900; 
    color: var(--bright-blue); 
    font-size: 1.1rem; 
}

.complementary-item:nth-child(2) h4::before { 
    content: '\f1fc'; 
    font-family: 'Font Awesome 6 Free'; 
    font-weight: 900; 
    color: var(--teal); 
    font-size: 1.1rem; 
}

.complementary-item .description,
.complementary-item .scope {
    margin-bottom: 1rem;
}

.complementary-item .description strong,
.complementary-item .scope strong {
    color: var(--bright-blue);
    font-weight: 600;
    display: block;
    margin-bottom: 0.5rem;
    font-size: 1rem;
}

.complementary-item p {
    color: var(--text-light);
    line-height: 1.6;
    margin: 0.5rem 0;
    font-size: 0.95rem;
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
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    }
}

@media (max-width: 768px) {
    .hero-modern {
        padding: 2rem 0;
    }
    
    .hero-title {
        font-size: 2rem;
    }
    
    .hero-description {
        font-size: 1rem;
    }
    
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
        width: 70px;
        height: 70px;
    }
    
    .service-icon-modern i {
        font-size: 1.8rem;
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
    
    .hero-title {
        font-size: 1.8rem;
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
    <section class="hero-modern">
        <div class="hero-background">
            <div class="floating-shapes">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>
                <div class="shape shape-4"></div>
            </div>
        </div>
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">
                    <i class="fas fa-microscope"></i>
                    Tecnología de Vanguardia
                </div>
                <h1 class="hero-title">Ensayos No Destructivos</h1>
                <p class="hero-description">Evaluamos la integridad y las propiedades de materiales o componentes sin dañar el objeto mediante técnicas especializadas y normativas internacionales</p>
            </div>
        </div>
    </section>

    <section class="services-modern">
        <div class="container">
            <div class="definition-section">
                <h2>¿Qué son los END?</h2>
                <p>Los Ensayos No Destructivos son técnicas especializadas que nos permiten evaluar la integridad y las propiedades de materiales o componentes sin dañar el objeto de inspección, preservando su funcionalidad y valor operacional.</p>
            </div>

            <div class="section-header-modern">
                <div class="section-badge">
                    <i class="fas fa-cogs"></i>
                    Métodos Especializados
                </div>
                <h2 class="section-title">Técnicas de Inspección Avanzadas</h2>
                <p class="section-subtitle">Aplicamos los métodos más efectivos según las necesidades específicas de cada proyecto</p>
            </div>

            <div class="services-grid-modern">
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

            <div class="complementary-services">
                <h3>Servicios Complementarios</h3>
                <div class="complementary-grid">
                    <div class="complementary-item">
                        <h4>Dureza Superficial Portátil, Rugosidad.</h4>
                        <div class="description">
                            <strong>Descripción:</strong>
                            <p>Dureza: es una prueba que evalúa la resistencia de un material a ser rayado o penetrado. Es una herramienta portátil útil para determinar si un material es adecuado para un propósito específico.</p>
                            <p>Rugosidad: La inspección de rugosidad evalúa la textura de una superficie. Identifica defectos de la superficie, su gravedad y el impacto en el material evaluado.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>