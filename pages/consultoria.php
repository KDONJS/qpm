<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultoría y Asesoramiento - QPM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            /* Paleta de colores actualizada según nuestro-equipo.php */
            --primary-color: #1e40af;
            --primary-light: #3b82f6;
            --primary-dark: #1e3a8a;
            --secondary-color: #64748b;
            --accent-color: #f1f5f9;
            --text-dark: #0f172a;
            --text-medium: #334155;
            --text-light: #64748b;
            --border-color: #e2e8f0;
            --success-color: #059669;
            --warning-color: #d97706;
            --white: #ffffff;
            --light-bg: #f8fafc;
            --card-bg: #ffffff;
            
            --shadow-soft: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            --shadow-medium: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-strong: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            
            --border-radius: 12px;
            --border-radius-lg: 16px;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        /* Hero Section con clip-path */
        .hero-modern {
            min-height: 100vh;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            color: white;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        }

        .hero-modern::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(30, 64, 175, 0.9) 0%, rgba(30, 58, 138, 0.9) 100%);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .hero-title {
            font-size: clamp(2.5rem, 6vw, 4rem);
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1rem;
            letter-spacing: -0.02em;
        }

        .hero-lema {
            font-size: 1.5rem;
            font-weight: 600;
            color: #93c5fd;
            margin-bottom: 2rem;
            font-style: italic;
        }

        .hero-description {
            font-size: 1.2rem;
            line-height: 1.7;
            margin-bottom: 3rem;
            opacity: 0.9;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Servicios Section */
        .services-modern {
            padding: 8rem 0;
            background: var(--light-bg);
        }

        .section-header-modern {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: var(--primary-color);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.875rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .section-subtitle {
            font-size: 1.2rem;
            color: var(--text-light);
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .services-grid-modern {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .service-card-modern {
            background: var(--card-bg);
            padding: 2.5rem;
            border-radius: var(--border-radius-lg);
            box-shadow: var(--shadow-soft);
            transition: var(--transition);
            border: 1px solid var(--border-color);
            position: relative;
            overflow: hidden;
        }

        .service-card-modern:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-strong);
        }

        .service-icon-modern {
            width: 64px;
            height: 64px;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
            border-radius: var(--border-radius);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        .service-icon-modern i {
            font-size: 1.5rem;
            color: white;
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
            font-size: 1rem;
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
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            }
            
            .collaboration-content {
                grid-template-columns: 1fr;
                gap: 3rem;
                text-align: center;
            }
        }

        @media (max-width: 768px) {
            .hero-modern {
                min-height: 80vh;
                padding: 4rem 0;
                clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
            }
            
            .services-modern {
                padding: 4rem 0;
            }
            
            .services-grid-modern {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .service-card-modern {
                padding: 2rem;
            }
            
            .collaboration-modern {
                padding: 4rem 0;
            }
            
            .collaboration-features {
                grid-template-columns: 1fr;
            }
            
            .feature-card {
                padding: 1.5rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 480px) {
            .hero-modern {
                clip-path: polygon(0 0, 100% 0, 100% 95%, 0 100%);
            }
            
            .service-card-modern {
                padding: 1.5rem;
            }
            
            .collaboration-text h2 {
                font-size: 1.8rem;
            }
        }

        /* Animaciones */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
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

        /* Scroll suave */
        html {
            scroll-behavior: smooth;
        }

        /* Mejoras de accesibilidad */
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
    <!-- Hero Section -->
    <section class="hero-modern">
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">
                    <i class="fas fa-lightbulb"></i>
                    Consultoría Especializada
                </div>
                <h1 class="hero-title">Consultoría y Asesoramiento</h1>
                <p class="hero-lema">"Convertimos tu idea o proyecto en realidad"</p>
                <p class="hero-description">
                    Desarrollamos soluciones para tu empresa, trabajando juntos de la mano para brindarte la mejor opción de implementación e inversión.
                </p>
            </div>
        </div>
    </section>

    <!-- Servicios Especializados -->
    <section id="servicios" class="services-modern">
        <div class="container">
            <div class="section-header-modern">
                <div class="section-badge">
                    <i class="fas fa-cogs"></i>
                    Servicios Especializados
                </div>
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
                        <p class="service-description">
                            Evaluación y desarrollo de programas de integridad mecánica para equipos críticos, asegurando operaciones confiables y seguras en instalaciones industriales.
                        </p>
                    </div>
                </div>

                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <div class="service-content">
                        <h3>Planes de Inspección</h3>
                        <p class="service-description">
                            Diseño e implementación de planes de inspección personalizados, optimizando frecuencias y métodos para maximizar la vida útil de equipos y estructuras.
                        </p>
                    </div>
                </div>

                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="service-content">
                        <h3>Aseguramiento y Control de Calidad</h3>
                        <p class="service-description">
                            Desarrollo de sistemas de aseguramiento de calidad para proyectos electromecánicos, garantizando cumplimiento de estándares y especificaciones técnicas.
                        </p>
                    </div>
                </div>

                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-satellite-dish"></i>
                    </div>
                    <div class="service-content">
                        <h3>Sistemas de Monitoreo Remoto Inhouse</h3>
                        <p class="service-description">
                            Implementación de soluciones de monitoreo remoto personalizadas, permitiendo supervisión continua y análisis predictivo de equipos críticos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>