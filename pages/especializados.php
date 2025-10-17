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
    --success-color: #10b981;
    
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
    font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
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
    grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
    gap: 2rem;
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

.service-description {
    color: var(--text-light);
    line-height: 1.7;
    margin-bottom: 2rem;
    font-size: 1rem;
}

.service-details {
    margin-bottom: 2rem;
    text-align: left;
}

.detail-section {
    margin-bottom: 1.5rem;
}

.detail-title {
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 0.8rem;
    font-size: 1rem;
}

.detail-content {
    color: var(--text-light);
    font-size: 0.95rem;
    line-height: 1.5;
}

.detail-list {
    list-style: none;
    padding: 0;
}

.detail-list li {
    display: flex;
    align-items: flex-start;
    gap: 0.8rem;
    margin-bottom: 0.6rem;
    font-size: 0.95rem;
    color: var(--text-light);
}

.detail-list li i {
    color: var(--success-color);
    font-size: 0.9rem;
    margin-top: 0.2rem;
    flex-shrink: 0;
}

.normativa-badge {
    display: inline-block;
    background: var(--light-bg);
    color: var(--dark-blue);
    padding: 0.4rem 0.8rem;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    margin: 0.2rem 0.2rem 0 0;
    border: 1px solid var(--border-color);
}

/* Responsive Design */
@media (max-width: 1200px) {
    .services-grid-modern {
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    }
}

@media (max-width: 768px) {
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
    $title = "Servicios Especializados";
    $description = "Desarrollamos tus proyectos con eficiencia, seguridad y calidad. Soluciones técnicas avanzadas para la industria más exigente.";
    $backgroundImage = "assets/img/servicios/7.jpg";
    
    // Incluir el componente hero
    include __DIR__ . '/../includes/hero-service.php';
    ?>

    <!-- Servicios Especializados -->
    <section class="section">
        <div class="container">
            <div class="section-header-modern">
                <h2>Servicios Especializados</h2>
                <p>
                    Soluciones de alta complejidad con experiencia y conocimiento especializado para la industria más exigente
                </p>
            </div>

            <div class="services-grid-modern">
                <!-- Tratamiento Térmico -->
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-fire"></i>
                    </div>
                    <div class="service-content">
                        <h3>Tratamiento Térmico</h3>
                        <div class="service-description">
                            El tratamiento térmico posterior a la soldadura (PWHT) es un proceso que se aplica a materiales soldados para mejorar la calidad de la soldadura. Consiste en calentar la zona soldada y luego enfriarla lentamente.
                        </div>
                        <div class="service-details">
                            <div class="detail-section">
                                <div class="detail-title">Alcance del Servicio:</div>
                                <ul class="detail-list">
                                    <li><i class="fas fa-check"></i>Tratamiento térmico post-soldadura (PWHT)</li>
                                    <li><i class="fas fa-check"></i>Alivio de tensiones en estructuras soldadas</li>
                                    <li><i class="fas fa-check"></i>Mejora de propiedades mecánicas</li>
                                    <li><i class="fas fa-check"></i>Control de temperatura y tiempo de proceso</li>
                                </ul>
                            </div>
                            <div class="detail-section">
                                <div class="detail-title">Normativas Aplicables:</div>
                                <div class="detail-content">
                                    <span class="normativa-badge">ASME VIII</span>
                                    <span class="normativa-badge">AWS D1.1</span>
                                    <span class="normativa-badge">API 510</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Reparaciones y Montajes Críticos -->
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-tools"></i>
                    </div>
                    <div class="service-content">
                        <h3>Reparaciones y Montajes Críticos</h3>
                        <div class="service-description">
                            Realizamos todo tipo de reparaciones y montajes críticos en plantas industriales, garantizando la continuidad operacional y la seguridad de los procesos.
                        </div>
                        <div class="service-details">
                            <div class="detail-section">
                                <div class="detail-title">Alcance del Servicio:</div>
                                <ul class="detail-list">
                                    <li><i class="fas fa-check"></i>Reparaciones de equipos críticos en operación</li>
                                    <li><i class="fas fa-check"></i>Montajes de estructuras industriales</li>
                                    <li><i class="fas fa-check"></i>Inspección visual especializada</li>
                                    <li><i class="fas fa-check"></i>Pruebas de carga y funcionamiento</li>
                                    <li><i class="fas fa-check"></i>Soldadura especializada en campo</li>
                                </ul>
                            </div>
                            <div class="detail-section">
                                <div class="detail-title">Normativas Aplicables:</div>
                                <div class="detail-content">
                                    <span class="normativa-badge">AWS D1.1</span>
                                    <span class="normativa-badge">ASME B31.3</span>
                                    <span class="normativa-badge">API 653</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mantenimiento de Grúas Puente y Polipastos -->
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-weight-hanging"></i>
                    </div>
                    <div class="service-content">
                        <h3>Mantenimiento de Grúas Puente y Polipastos</h3>
                        <div class="service-description">
                            Se realiza mediante dos tipos de mantenimiento: preventivo que incluye inspecciones regulares, lubricación y pruebas de carga; y correctivo que aborda averías imprevistas, minimiza el tiempo de inactividad y evita daños adicionales.
                        </div>
                        <div class="service-details">
                            <div class="detail-section">
                                <div class="detail-title">Alcance del Servicio:</div>
                                <ul class="detail-list">
                                    <li><i class="fas fa-check"></i>Lubricación de cables, poleas, engranajes y rodamientos</li>
                                    <li><i class="fas fa-check"></i>Inspección de vías, rieles y conexiones</li>
                                    <li><i class="fas fa-check"></i>Ajuste de cables y sistemas de elevación</li>
                                    <li><i class="fas fa-check"></i>Inspección de componentes eléctricos</li>
                                    <li><i class="fas fa-check"></i>Calibración de dispositivos de medición y control</li>
                                    <li><i class="fas fa-check"></i>Prueba de sistemas de seguridad</li>
                                </ul>
                            </div>
                            <div class="detail-section">
                                <div class="detail-title">Normativas Aplicables:</div>
                                <div class="detail-content">
                                    <span class="normativa-badge">OSHA 1910.179</span>
                                    <span class="normativa-badge">ASME B30.2</span>
                                    <span class="normativa-badge">CMAA 70</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sistemas de Torque / Tensionado Hidráulico -->
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <div class="service-content">
                        <h3>Sistemas de Torque / Tensionado Hidráulico Controlado</h3>
                        <div class="service-description">
                            Los sistemas de torque/tensión hidráulico controlado son herramientas y sistemas que permiten medir y controlar el torque aplicado en diferentes operaciones industriales críticas.
                        </div>
                        <div class="service-details">
                            <div class="detail-section">
                                <div class="detail-title">Alcance del Servicio:</div>
                                <ul class="detail-list">
                                    <li><i class="fas fa-check"></i>Torque hidráulico en superficie</li>
                                    <li><i class="fas fa-check"></i>Torque hidráulico submarino</li>
                                    <li><i class="fas fa-check"></i>Tensionado hidráulico en superficie</li>
                                    <li><i class="fas fa-check"></i>Calibración de equipos de torque</li>
                                    <li><i class="fas fa-check"></i>Control de calidad en uniones críticas</li>
                                </ul>
                            </div>
                            <div class="detail-section">
                                <div class="detail-title">Normativas Aplicables:</div>
                                <div class="detail-content">
                                    <span class="normativa-badge">ASME PCC-1</span>
                                    <span class="normativa-badge">API 6A</span>
                                    <span class="normativa-badge">ISO 12944</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Elaboración de Procedimientos WPS -->
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <div class="service-content">
                        <h3>Elaboración de Procedimientos de Soldadura (WPS)</h3>
                        <div class="service-description">
                            Son procesos fundamentales en la soldadura para asegurar la calidad y la integridad de las uniones soldadas. Contamos con especialistas CWI a disposición.
                        </div>
                        <div class="service-details">
                            <div class="detail-section">
                                <div class="detail-title">Alcance del Servicio:</div>
                                <ul class="detail-list">
                                    <li><i class="fas fa-check"></i>Elaboración de WPS según normativas</li>
                                    <li><i class="fas fa-check"></i>Validación de procesos de soldadura</li>
                                    <li><i class="fas fa-check"></i>Documentación técnica especializada</li>
                                    <li><i class="fas fa-check"></i>Asesoramiento en soldadura especializada</li>
                                    <li><i class="fas fa-check"></i>Capacitación técnica especializada</li>
                                </ul>
                            </div>
                            <div class="detail-section">
                                <div class="detail-title">Normativas Aplicables:</div>
                                <div class="detail-content">
                                    <span class="normativa-badge">AWS D1.1</span>
                                    <span class="normativa-badge">ASME IX</span>
                                    <span class="normativa-badge">API 1104</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Análisis Estructural -->
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <div class="service-content">
                        <h3>Análisis Estructural</h3>
                        <div class="service-description">
                            Evaluación integral de estructuras mediante análisis computacional avanzado, garantizando seguridad y optimización en el diseño de componentes críticos.
                        </div>
                        <div class="service-details">
                            <div class="detail-section">
                                <div class="detail-title">Alcance del Servicio:</div>
                                <ul class="detail-list">
                                    <li><i class="fas fa-check"></i>Análisis de elementos finitos (FEA)</li>
                                    <li><i class="fas fa-check"></i>Evaluación de cargas y tensiones</li>
                                    <li><i class="fas fa-check"></i>Optimización de diseños estructurales</li>
                                    <li><i class="fas fa-check"></i>Simulación de comportamiento dinámico</li>
                                    <li><i class="fas fa-check"></i>Reportes técnicos especializados</li>
                                </ul>
                            </div>
                            <div class="detail-section">
                                <div class="detail-title">Normativas Aplicables:</div>
                                <div class="detail-content">
                                    <span class="normativa-badge">AISC 360</span>
                                    <span class="normativa-badge">ASME VIII</span>
                                    <span class="normativa-badge">API 579</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

</main>