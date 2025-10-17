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
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
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
    font-size: 1rem;
    line-height: 1.6;
    margin-bottom: 2rem;
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
    $title = "Alquiler y Venta de Equipos & Calibraciones";
    $description = "Soluciones comerciales integrales para equipos de inspección con soporte técnico especializado y alcance internacional";
    
    // Incluir el componente hero
    include __DIR__ . '/../includes/hero-service.php';
    ?>

    <!-- Servicios Principales -->
    <section class="section">
        <div class="container">
            <div class="section-header-modern">
                <h2>Nuestros Servicios Comerciales</h2>
                <p>
                    Comercialización y soporte técnico de equipos de inspección con enfoque directo y profesional para todas tus necesidades industriales
                </p>
            </div>

            <div class="services-grid-modern">
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
            </div>
        </div>
    </section>

</main>