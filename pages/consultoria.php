<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultoría y Asesoramiento - QPM</title>
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

        .service-description {
            color: var(--text-light);
            line-height: 1.6;
            flex: 1;
            font-size: 0.95rem;
        }

        .service-description p {
            margin-bottom: 0.8rem;
        }

        .service-description p:last-child {
            margin-bottom: 0;
        }

        /* Colaboración Section */
        .collaboration-modern {
            padding: 8rem 0;
            background: var(--white);
        }

        .collaboration-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .collaboration-text h2 {
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 1.5rem;
            line-height: 1.3;
        }

        .collaboration-text p {
            color: var(--text-light);
            line-height: 1.7;
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }

        .collaboration-features {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        .feature-card {
            background: var(--light-bg);
            padding: 2rem;
            border-radius: var(--border-radius);
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            transition: var(--transition);
        }

        .feature-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-medium);
        }

        .feature-icon {
            width: 48px;
            height: 48px;
            background: var(--primary-color);
            border-radius: var(--border-radius);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .feature-icon i {
            font-size: 1.2rem;
            color: white;
        }

        .feature-content h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .feature-content p {
            color: var(--text-light);
            font-size: 0.9rem;
            line-height: 1.5;
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
</head>
<body>
    <main>
        <?php 
        // Configuración del hero para esta página
        $title = "Consultoría y Asesoramiento";
        $description = "Desarrollamos soluciones para tu empresa, trabajando juntos de la mano para brindarte la mejor opción de implementación e inversión";
        $badge = "Convertimos tu idea o proyecto en realidad";
        $backgroundImage = "assets/img/servicios/6.jpg";
        
        // Incluir el componente hero
        include __DIR__ . '/../includes/hero-service.php';
        ?>

        <section class="services-modern">
            <div class="container">
                <div class="section-header-modern">
                    <h2 class="section-title">Consultoría Técnica Integral</h2>
                    <p class="section-subtitle">
                        Acompañamiento técnico integral para transformar tus ideas en proyectos exitosos
                    </p>
                </div>

                <div class="services-grid-modern">
                    <div class="service-card-modern">
                        <div class="service-icon-modern">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <div class="service-content">
                            <h3>Integridad Mecánica</h3>
                            <div class="service-description">
                                <p>Evaluación y desarrollo de programas de integridad mecánica para equipos críticos, asegurando operaciones confiables y seguras en instalaciones industriales.</p>
                            </div>
                        </div>
                    </div>

                    <div class="service-card-modern">
                        <div class="service-icon-modern">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <div class="service-content">
                            <h3>Planes de Inspección</h3>
                            <div class="service-description">
                                <p>Diseño e implementación de planes de inspección personalizados, optimizando frecuencias y métodos para maximizar la vida útil de equipos y estructuras.</p>
                            </div>
                        </div>
                    </div>

                    <div class="service-card-modern">
                        <div class="service-icon-modern">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="service-content">
                            <h3>Aseguramiento y Control de Calidad</h3>
                            <div class="service-description">
                                <p>Desarrollo de sistemas de aseguramiento de calidad para proyectos electromecánicos, garantizando cumplimiento de estándares y especificaciones técnicas.</p>
                            </div>
                        </div>
                    </div>

                    <div class="service-card-modern">
                        <div class="service-icon-modern">
                            <i class="fas fa-satellite-dish"></i>
                        </div>
                        <div class="service-content">
                            <h3>Sistemas de Monitoreo Remoto Inhouse</h3>
                            <div class="service-description">
                                <p>Implementación de soluciones de monitoreo remoto personalizadas, permitiendo supervisión continua y análisis predictivo de equipos críticos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>