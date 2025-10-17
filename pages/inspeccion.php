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
    grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
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

.service-description {
    color: var(--text-light);
    line-height: 1.6;
    flex: 1;
    font-size: 0.95rem;
    margin-bottom: 1.5rem;
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

.service-benefits {
    margin-top: 1.5rem;
}

.service-benefits h4 {
    color: var(--bright-blue);
    font-weight: 600;
    margin-bottom: 0.75rem;
    font-size: 1.1rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.service-benefits h4 i {
    color: var(--teal);
    font-size: 1rem;
}

.benefit-item {
    position: relative;
    margin-bottom: 0.5rem;
    color: var(--text-light);
    padding-left: 1.5rem;
    line-height: 1.5;
    font-size: 0.95rem;
}

.benefit-item::before {
    content: '\f00c';
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    position: absolute;
    left: 0;
    color: var(--green);
    font-size: 0.9rem;
}

.normative-section {
    background: var(--light-bg);
    padding: 1.5rem;
    border-radius: var(--border-radius);
    margin-top: 2rem;
    border-left: 4px solid var(--bright-blue);
}

.normative-section h4 {
    color: var(--bright-blue);
    margin-bottom: 1rem;
    font-size: 1.1rem;
    font-weight: 700;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.normative-section h4 i {
    font-size: 1rem;
}

.normative-section p {
    margin: 0;
    font-size: 0.9rem;
    color: var(--text-light);
    line-height: 1.6;
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
    $title = "Inspección y Certificación de Equipos";
    $description = "Inspecciones integrales con tecnología avanzada, personal certificado y cumplimiento de normativas internacionales para garantizar la seguridad operativa";
    $backgroundImage = "assets/img/servicios/5.jpg";
    
    // Incluir el componente hero
    include __DIR__ . '/../includes/hero-service.php';
    ?>

    <section class="services-modern">
        <div class="container">
            <div class="section-header-modern">
                
                <h2 class="section-title">Inspección Integral de Equipos</h2>
                <p class="section-subtitle">
                    Ofrecemos inspecciones integrales con tecnología avanzada, personal certificado y cumplimiento de normativas internacionales para garantizar la seguridad operativa
                </p>
            </div>

            <div class="services-grid-modern">
                <!-- Izajes y Manejo de Cargas -->
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-weight-hanging"></i>
                    </div>
                    <div class="service-content">
                        <h3>Izajes y Manejo de Cargas</h3>
                        <div class="service-description">
                            La inspección de izajes y manejo de cargas es un proceso que garantiza la seguridad y eficiencia en el uso de equipos de izaje. Finalidad:
                            • Revisar que los ganchos no estén desgastados, doblados o estirados
                            • Verificar que los pines estén derechos y ajustados.
                            • Inspeccionar las eslingas antes de cada elevación
                            • Someter los equipos a pruebas de carga.
                        </div>
                        
                        <div class="service-benefits">
                            <h4><i class="fas fa-list"></i> ALCANCE</h4>
                            <div class="benefit-item">
                                <span>Grúa Puente y Pórtico</span>
                            </div>
                            <div class="benefit-item">
                                <span>Grúa Móvil y Locomotora</span>
                            </div>
                            <div class="benefit-item">
                                <span>Bloques debajo del Gancho</span>
                            </div>
                            <div class="benefit-item">
                                <span>Sistemas de Elevación de Personal</span>
                            </div>
                            <div class="benefit-item">
                                <span>Montacarga, Cargadores y Telehandlers</span>
                            </div>
                            <div class="benefit-item">
                                <span>Otros: Aparajos de Izaje, Ganchos, Eslingas, Monorieles, Polipastos, Grúas Torre</span>
                            </div>
                            
                            <div class="normative-section">
                                <h4><i class="fas fa-certificate"></i> Normativa Aplicable</h4>
                                <p>• ASME B30.2, OSHA 29 CFR 1910.179 y 1926 Subpart CC<br>
                                • ASME B30.5, OSHA 29 CFR 1926, 1910, 1915 y 1917, y ANSI A10.31<br>
                                • ASME B30.20, OSHA 29 CFR 1910.179 y 1926 Subpart CC<br>
                                • ANSI/SAIA A92 y ASME B30.23<br>
                                • OSHA 29 CFR 1926, 1910, 1917, 1918 y ANSI B56</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recipientes a Presión -->
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-gauge-high"></i>
                    </div>
                    <div class="service-content">
                        <h3>Recipientes a Presión</h3>
                        <div class="service-description">
                            Brindamos el servicio de inspección, mantenimiento y reparación de Recipientes a Presión de acuerdo con API 510, y que incluye: Inspección Visual exterior, medición de espesores, inspección interna. Lo realizamos con Inspectores certificados por el American Petroleum Institute.
                        </div>
                        
                        <div class="service-benefits">
                            <h4><i class="fas fa-list"></i> ALCANCE</h4>
                            <div class="benefit-item">
                                <span>Tanque Aire Comprimido</span>
                            </div>
                            <div class="benefit-item">
                                <span>Otros</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tanques de Almacenamiento sobre suelo -->
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-container-storage"></i>
                    </div>
                    <div class="service-content">
                        <h3>Tanques de Almacenamiento sobre suelo</h3>
                        <div class="service-description">
                            Brindamos el servicio de Inspección, reparación, alteración y reconstrucción de tanques de almacenamiento sobre suelo de acuerdo con l API 653,
                        </div>
                        
                        <div class="service-benefits">
                            <h4><i class="fas fa-list"></i> ALCANCE</h4>
                            <div class="benefit-item">
                                <span>Tanque Almacenamiento de Hidrocarburos</span>
                            </div>
                            <div class="benefit-item">
                                <span>Tanque Espesador</span>
                            </div>
                            <div class="benefit-item">
                                <span>Tanque de Agua</span>
                            </div>
                            <div class="benefit-item">
                                <span>Otros</span>
                            </div>
                            
                            <div class="normative-section">
                                <h4><i class="fas fa-certificate"></i> Normativa Aplicable</h4>
                                <p>• API 653 (Todos)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sistemas de Tubería -->
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-pipe"></i>
                    </div>
                    <div class="service-content">
                        <h3>Sistemas de Tubería</h3>
                        <div class="service-description">
                            Brindamos el servicio de Inspección, mantenimiento, y reparación de sistemas de tuberías de acuerdo con API 570. Se aplica a sistemas de tuberías metálicas y de fibra de vidrio/plástico.
                        </div>
                        
                        <div class="service-benefits">
                            <h4><i class="fas fa-list"></i> ALCANCE</h4>
                            <div class="benefit-item">
                                <span>Tuberías a Gas, Aire y Agua.</span>
                            </div>
                            <div class="benefit-item">
                                <span>Tuberías de Procesos.</span>
                            </div>
                            <div class="benefit-item">
                                <span>Otros</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pruebas Neumáticas e Hidrostáticas -->
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-wind"></i>
                    </div>
                    <div class="service-content">
                        <h3>Pruebas Neumáticas e Hidrostáticas a tanques y equipos</h3>
                        <div class="service-description">
                            Las pruebas neumáticas es un procedimiento que utiliza aire o gases inertes para verificar la integridad de recipientes, tuberías, y otros sistemas presurizados. Reemplaza a la prueba hidrostática para la realización en tuberías/tanques en las que no se puede o no está permitido llenarlas con agua. Las pruebas hidrostáticas son un tipo de prueba de presión que se realiza para verificar la resistencia y hermeticidad de equipos y sistemas
                        </div>
                        
                        <div class="service-benefits">
                            <h4><i class="fas fa-list"></i> ALCANCE</h4>
                            <div class="benefit-item">
                                <span>Tuberías</span>
                            </div>
                            <div class="benefit-item">
                                <span>recipientes de transporte</span>
                            </div>
                            <div class="benefit-item">
                                <span>tanques de combustible</span>
                            </div>
                            <div class="benefit-item">
                                <span>calderas</span>
                            </div>
                            <div class="benefit-item">
                                <span>intercambiadores de calor, y columnas</span>
                            </div>
                            <div class="benefit-item">
                                <span>sistemas presurizados</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

</html>