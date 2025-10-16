<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alquiler y Venta de Equipos & Calibraciones - QPM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            /* Paleta de colores actualizada según especializados.php */
            --dark-blue: #3f51b5;
            --teal: #26c6da;
            --bright-blue: #2196f3;
            --white: #ffffff;
            --green: #4caf50;
            --lime: #8bc34a;
            --text-dark: #1e293b;
            --text-light: #64748b;
            --light-bg: #f8fafc;
            --card-bg: #ffffff;
            --border-color: #e2e8f0;
            --success-color: #10b981;
            
            --shadow-soft: 0 8px 25px rgba(0, 0, 0, 0.08);
            --shadow-medium: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            --shadow-strong: 0 15px 35px rgba(0, 0, 0, 0.12);
            
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
            background: var(--dark-blue);
            color: var(--white);
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
            background: var(--teal);
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
            opacity: 0.1;
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
            padding: 0.8rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            margin-bottom: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .hero-title {
            font-size: clamp(2.5rem, 6vw, 4rem);
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 2rem;
            letter-spacing: -0.02em;
        }

        .hero-description {
            font-size: 1.3rem;
            line-height: 1.7;
            margin-bottom: 3rem;
            opacity: 0.95;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-actions {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-primary-modern {
            background: var(--bright-blue);
            color: white;
            padding: 1.2rem 2.5rem;
            border-radius: var(--border-radius);
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
            transition: var(--transition);
            box-shadow: var(--shadow-medium);
            border: none;
        }

        .btn-primary-modern:hover {
            background: var(--dark-blue);
            transform: translateY(-2px);
            box-shadow: var(--shadow-strong);
        }

        .btn-secondary-modern {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            padding: 1.2rem 2.5rem;
            border-radius: var(--border-radius);
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
            transition: var(--transition);
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .btn-secondary-modern:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-2px);
        }

        /* Servicios */
        .services-modern {
            padding: 8rem 0;
            background: var(--light-bg);
        }

        .section-header-modern {
            text-align: center;
            margin-bottom: 4rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .section-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: var(--dark-blue);
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
            max-width: 900px;
            margin: 0 auto;
        }

        .services-grid-modern {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2.5rem;
        }

        .service-card-modern {
            background: var(--card-bg);
            border-radius: var(--border-radius-lg);
            padding: 3rem;
            box-shadow: var(--shadow-soft);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .service-card-modern:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-strong);
        }

        .service-icon-modern {
            width: 100px;
            height: 100px;
            background: rgba(33, 150, 243, 0.1);
            border-radius: var(--border-radius);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
        }

        .service-icon-modern i {
            font-size: 2.5rem;
            color: var(--bright-blue);
        }

        .service-card-modern:nth-child(2) .service-icon-modern {
            background: rgba(76, 175, 80, 0.1);
        }

        .service-card-modern:nth-child(2) .service-icon-modern i {
            color: var(--green);
        }

        .service-card-modern:nth-child(3) .service-icon-modern {
            background: rgba(139, 195, 74, 0.1);
        }

        .service-card-modern:nth-child(3) .service-icon-modern i {
            color: var(--lime);
        }

        .service-content h3 {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 1.5rem;
            line-height: 1.3;
        }

        .service-description {
            color: var(--text-light);
            line-height: 1.7;
            margin-bottom: 2rem;
            font-size: 1rem;
        }

        .service-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--dark-blue);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            padding: 0.8rem 1.5rem;
            border: 2px solid var(--dark-blue);
            border-radius: var(--border-radius);
        }

        .service-link:hover {
            background: var(--dark-blue);
            color: white;
            transform: translateY(-2px);
        }

        /* Sección Internacional */
        .international-modern {
            padding: 8rem 0;
            background: white;
        }

        .international-content {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 4rem;
            align-items: start;
        }

        .international-text h2 {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--dark-blue);
            margin-bottom: 1.5rem;
            line-height: 1.2;
            position: relative;
        }

        .international-text h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 80px;
            height: 4px;
            background: var(--teal);
            border-radius: 2px;
        }

        .international-text p {
            font-size: 1.1rem;
            color: var(--text-light);
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }

        .international-features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            display: flex;
            gap: 1.5rem;
            padding: 2rem;
            background: var(--light-bg);
            border-radius: var(--border-radius);
            transition: var(--transition);
            box-shadow: var(--shadow-soft);
        }

        .feature-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-medium);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            background: var(--bright-blue);
            border-radius: var(--border-radius);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .feature-icon i {
            font-size: 1.5rem;
            color: white;
        }

        .feature-card:nth-child(2) .feature-icon {
            background: var(--green);
        }

        .feature-card:nth-child(3) .feature-icon {
            background: var(--teal);
        }

        .feature-card:nth-child(4) .feature-icon {
            background: var(--lime);
        }

        .feature-content h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .feature-content p {
            color: var(--text-light);
            font-size: 0.95rem;
            line-height: 1.5;
        }

        /* Beneficios */
        .benefits-modern {
            padding: 8rem 0;
            background: var(--light-bg);
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .benefit-card {
            background: var(--card-bg);
            padding: 2.5rem;
            border-radius: var(--border-radius-lg);
            text-align: center;
            box-shadow: var(--shadow-soft);
            transition: var(--transition);
        }

        .benefit-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-strong);
        }

        .benefit-icon {
            width: 80px;
            height: 80px;
            background: var(--bright-blue);
            border-radius: var(--border-radius);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
        }

        .benefit-icon i {
            font-size: 1.8rem;
            color: white;
        }

        .benefit-card:nth-child(2) .benefit-icon {
            background: var(--green);
        }

        .benefit-card:nth-child(3) .benefit-icon {
            background: var(--teal);
        }

        .benefit-card:nth-child(4) .benefit-icon {
            background: var(--lime);
        }

        .benefit-card h4 {
            font-size: 1.3rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .benefit-card p {
            color: var(--text-light);
            line-height: 1.6;
        }

        /* CTA */
        .cta-modern {
            padding: 8rem 0;
            background: var(--text-dark);
            color: white;
            text-align: center;
        }

        .cta-content {
            max-width: 700px;
            margin: 0 auto;
        }

        .cta-text h2 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            line-height: 1.3;
        }

        .cta-text p {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-bottom: 3rem;
            line-height: 1.7;
        }

        .cta-actions {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-cta-primary {
            background: var(--bright-blue);
            color: white;
            padding: 1.2rem 2.5rem;
            border-radius: var(--border-radius);
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
            transition: var(--transition);
            box-shadow: var(--shadow-medium);
        }

        .btn-cta-primary:hover {
            background: var(--dark-blue);
            transform: translateY(-2px);
            box-shadow: var(--shadow-strong);
        }

        .btn-cta-secondary {
            background: transparent;
            color: white;
            padding: 1.2rem 2.5rem;
            border-radius: var(--border-radius);
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
            transition: var(--transition);
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .btn-cta-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-2px);
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .services-grid-modern {
                grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            }
            
            .international-content {
                grid-template-columns: 1fr;
                gap: 3rem;
                text-align: center;
            }
            
            .international-text h2::after {
                left: 50%;
                transform: translateX(-50%);
            }
        }

        @media (max-width: 768px) {
            .hero-modern {
                min-height: 80vh;
                padding: 4rem 0;
                clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
            }
            
            .hero-actions {
                flex-direction: column;
                align-items: center;
            }
            
            .btn-primary-modern,
            .btn-secondary-modern {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }
            
            .services-modern,
            .international-modern,
            .benefits-modern,
            .cta-modern {
                padding: 4rem 0;
            }
            
            .services-grid-modern {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .service-card-modern {
                padding: 2rem;
            }
            
            .international-features {
                grid-template-columns: 1fr;
            }
            
            .feature-card {
                padding: 1.5rem;
            }
            
            .cta-actions {
                flex-direction: column;
                align-items: center;
            }
            
            .btn-cta-primary,
            .btn-cta-secondary {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 0.5rem;
            }
            
            .hero-modern {
                clip-path: polygon(0 0, 100% 0, 100% 95%, 0 100%);
            }
            
            .hero-content {
                padding: 0 1rem;
            }
            
            .hero-description {
                font-size: 1.1rem;
            }
            
            .service-card-modern {
                padding: 1.5rem;
            }
            
            .service-icon-modern {
                width: 80px;
                height: 80px;
            }
            
            .service-icon-modern i {
                font-size: 2rem;
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

        .btn-primary-modern:focus,
        .btn-secondary-modern:focus,
        .btn-cta-primary:focus,
        .btn-cta-secondary:focus,
        .service-link:focus {
            outline: 3px solid rgba(63, 81, 181, 0.5);
            outline-offset: 2px;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-modern">
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">
                    <i class="fas fa-shopping-cart"></i>
                    Soluciones Comerciales
                </div>
                <h1 class="hero-title">Alquiler y Venta de Equipos & Calibraciones</h1>
                <p class="hero-description">
                    Soluciones comerciales integrales para equipos de inspección con soporte técnico especializado y alcance internacional.
                </p>
                <div class="hero-actions">
                    <a href="#servicios" class="btn-primary-modern">
                        <i class="fas fa-eye"></i>
                        Ver Servicios
                    </a>
                    <a href="#contacto" class="btn-secondary-modern">
                        <i class="fas fa-phone"></i>
                        Solicitar Cotización
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Servicios Principales -->
    <section id="servicios" class="services-modern">
        <div class="container">
            <div class="section-header-modern">
                <div class="section-badge">
                    <i class="fas fa-cogs"></i>
                    Servicios Comerciales
                </div>
                <h2 class="section-title">Nuestros Servicios Comerciales</h2>
                <p class="section-subtitle">
                    Comercialización y soporte técnico de equipos de inspección con enfoque directo y profesional para todas tus necesidades industriales
                </p>
            </div>

            <div class="services-grid-modern">
                <!-- ... existing code ... -->
                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-tools"></i>
                    </div>
                    <div class="service-content">
                        <h3>Alquiler de Equipos</h3>
                        <p class="service-description">
                            Amplio inventario de equipos de inspección disponibles para alquiler con soporte técnico completo y mantenimiento incluido.
                        </p>
                        <a href="#" class="service-link">
                            <i class="fas fa-arrow-right"></i>
                            Ver Catálogo
                        </a>
                    </div>
                </div>

                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="service-content">
                        <h3>Venta de Equipos</h3>
                        <p class="service-description">
                            Comercialización de equipos nuevos y usados con garantía, capacitación y soporte técnico post-venta especializado.
                        </p>
                        <a href="#" class="service-link">
                            <i class="fas fa-arrow-right"></i>
                            Solicitar Cotización
                        </a>
                    </div>
                </div>

                <div class="service-card-modern">
                    <div class="service-icon-modern">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div class="service-content">
                        <h3>Calibraciones</h3>
                        <p class="service-description">
                            Servicios de calibración certificada para equipos de medición e inspección con trazabilidad internacional garantizada.
                        </p>
                        <a href="#" class="service-link">
                            <i class="fas fa-arrow-right"></i>
                            Más Información
                        </a>
                    </div>
                </div>
                <!-- ... existing code ... -->
            </div>
        </div>
    </section>

</body>
</html>