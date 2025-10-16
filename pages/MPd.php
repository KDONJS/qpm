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

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(255, 255, 255, 0.2);
    padding: 0.8rem 1.5rem;
    border-radius: 50px;
    font-weight: 600;
    margin-bottom: 2rem;
    border: 1px solid rgba(255, 255, 255, 0.3);
    position: relative;
    z-index: 2;
}

/* Secciones */
.section {
    padding: 5rem 0;
    background: var(--light-bg);
}

.section-header-modern {
    text-align: center;
    margin-bottom: 5rem;
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

/* Grid de Servicios */
.services-grid-modern {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 2.5rem;
}

.service-card-modern {
    background: var(--card-bg);
    border-radius: var(--border-radius-lg);
    padding: 3rem;
    box-shadow: var(--shadow-soft);
    border: 1px solid var(--border-color);
    transition: var(--transition);
    position: relative;
    overflow: hidden;
}

.service-card-modern:hover {
    transform: translateY(-12px);
    box-shadow: var(--shadow-medium);
}

.service-icon-modern {
    width: 100px;
    height: 100px;
    border-radius: var(--border-radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 2rem;
    margin-left: auto;
    margin-right: auto;
    color: var(--bright-blue);
    background: var(--bright-blue);
}

.service-icon-modern i {
    font-size: 2.5rem;
    color: var(--white);
}

.service-content {
    text-align: center;
}

.service-content h3 {
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--text-dark);
    margin-bottom: 1.5rem;
    line-height: 1.3;
}

.service-definition {
    background: var(--light-bg);
    padding: 1.5rem;
    border-radius: var(--border-radius);
    border-left: 4px solid var(--bright-blue);
    margin-bottom: 2rem;
}

.service-definition .definition-content {
    color: var(--text-light);
    font-size: 1rem;
    line-height: 1.7;
    font-style: italic;
    margin: 0;
}

/* Responsive Design */
@media (max-width: 1200px) {
    .services-grid-modern {
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    }
}

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
    
    .section {
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
        gap: 2rem;
    }
    
    .service-card-modern {
        padding: 2rem;
    }
    
    .service-icon-modern {
        width: 80px;
        height: 80px;
    }
    
    .service-icon-modern i {
        font-size: 2rem;
    }
}

@media (max-width: 480px) {
    .container {
        padding: 0 0.5rem;
    }
    
    .page-hero h1 {
        font-size: 1.8rem;
    }
    
    .service-card-modern {
        padding: 1.5rem;
    }
    
    .service-icon-modern {
        width: 70px;
        height: 70px;
    }
    
    .service-icon-modern i {
        font-size: 1.8rem;
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
.service-card-modern:nth-child(8) { animation-delay: 0.8s; }
.service-card-modern:nth-child(9) { animation-delay: 0.9s; }
.service-card-modern:nth-child(10) { animation-delay: 1.0s; }

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
    <!-- Hero Section -->
    <section class="page-hero">
        <div class="container">
            <div class="hero-badge">
                <i class="fas fa-cogs"></i>
                Mantenimiento Predictivo
            </div>
            <h1>MPd y Confiabilidad</h1>
            <p>Tecnología avanzada de análisis predictivo para maximizar la confiabilidad operacional</p>
        </div>
    </section>

    <!-- Servicios Especializados -->
    <section class="section">
        <div class="container">
            <div class="section-header-modern">
                <div class="section-badge">
                    <i class="fas fa-tools"></i>
                    Nuestros Servicios
                </div>
                <h2>Servicios Especializados</h2>
                <p>
                    Ofrecemos soluciones integrales de mantenimiento predictivo y confiabilidad para plantas procesadoras, utilizando tecnología de vanguardia y metodologías probadas en la industria.
                </p>
            </div>

            <div class="services-grid-modern">
                <!-- Gestión y Ejecución de la Confiabilidad -->
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-industry"></i>
                    </div>
                    <div class="service-content">
                        <h3>Gestión y Ejecución de la Confiabilidad y/o Mantenimiento Predictivo</h3>
                        <div class="service-definition">
                            <div class="definition-content">
                                Plantas Procesadoras
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Análisis Vibracional -->
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-wave-square"></i>
                    </div>
                    <div class="service-content">
                        <h3>Análisis Vibracional Convencional y Avanzado</h3>
                        <div class="service-definition">
                            <div class="definition-content">
                                El Análisis de Vibración es una técnica utilizada para identificar y predecir anomalías mecánicas en maquinaria industrial, midiendo la vibración e identificando las frecuencias involucradas.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Termografía Infrarroja -->
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-thermometer-half"></i>
                    </div>
                    <div class="service-content">
                        <h3>Termografía Infrarroja</h3>
                        <div class="service-definition">
                            <div class="definition-content">
                                La Termografía Infrarroja mide la temperatura de la superficie de los componentes eléctricos y mecámicos mediante un tecnologías de escaneo visual de infrarrojos altamente especializada. Para ello, utiliza una cámara sensible o una cámara térmica que es capaz de detectar la cantidad de energía infrarroja liberada por los objetos calientes.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Alineamiento de Máquinas -->
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-crosshairs"></i>
                    </div>
                    <div class="service-content">
                        <h3>Alineamiento de Máquinas: Ejes Colineales, Ejes Paralelos, Engranajes</h3>
                        <div class="service-definition">
                            <div class="definition-content">
                                El alineamiento de ejes es un proceso que se realiza para ajustar los ejes de una máquina con el fin de que los componentes rotativos estén alineados. Esto ayuda a que la máquina funcione de manera óptima y a prevenir problemas.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ultrasonido Acústico -->
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-volume-up"></i>
                    </div>
                    <div class="service-content">
                        <h3>Ultrasonido Acústico</h3>
                        <div class="service-definition">
                            <div class="definition-content">
                                El ultrasonido acústico opera emitiendo ondas sonoras de alta frecuencia a través de un transductor. Estas ondas viajan a través de los materiales y, al encontrar cambios en la densidad o discontinuidades, generan eco. Este eco es analizado para identificar posibles problemas, ofreciendo una visión detallada del estado de los activos.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Verificaciones Geométricas con Láser -->
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-ruler-combined"></i>
                    </div>
                    <div class="service-content">
                        <h3>Verificaciones Geométricas con Láser: Planitud, Rectitud, Verticalidad, Paralelismo, Concentricidad</h3>
                        <div class="service-definition">
                            <div class="definition-content">
                                Las verificaciones geométricas son procesos que buscan identificar errores de posicionamiento y trayectoria en objetos o máquinas con sistema láser de alta precisión y fácil uso. El objetivo es corregir estos errores y evitar que se trasladen a la pieza.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Balanceo Dinámico In Situ -->
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <div class="service-content">
                        <h3>Balanceo Dinámico In Situ</h3>
                        <div class="service-definition">
                            <div class="definition-content">
                                Técnica de mantenimiento que permite equilibrar equipos rotativos sin necesidad de desmontarlos. Se utiliza para reducir la vibración y mejorar el funcionamiento de las máquinas.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sistemas de monitoreo remoto -->
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-satellite-dish"></i>
                    </div>
                    <div class="service-content">
                        <h3>Sistemas de monitoreo remoto de vibraciones y termografía insitu</h3>
                        <div class="service-definition">
                            <div class="definition-content">
                                Los sistemas de monitoreo remoto de vibraciones y termografía insitu son dispositivos que se instalan en máquinas para monitorizar sus vibraciones / temperatura y otros parámetros. Estos sistemas pueden ser utilizados para optimizar el mantenimiento de las máquinas y predecir posibles problemas.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Medición Elongación de pernos -->
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <div class="service-content">
                        <h3>Medición Elongación de pernos en molinos</h3>
                        <div class="service-definition">
                            <div class="definition-content">
                                La elongación de pernos se refiere al estiramiento o alargamiento que experimentan los pernos al ser apretados. Para medir la elongación de un perno se puede utilizar un medidor ultrasónico. Este método permite conocer la tensión o carga generada por el perno.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Análisis de aceites -->
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-flask"></i>
                    </div>
                    <div class="service-content">
                        <h3>Análisis de aceites</h3>
                        <div class="service-definition">
                            <div class="definition-content">
                                Técnica de mantenimiento que mediante el análisis de muestras de aceite de máquinas (cajas de engranajes, cojinetes, etc) permite conocer el nivel de contaminación y degradación de los aceites.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>