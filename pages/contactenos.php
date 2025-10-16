<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctenos - QPM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            /* Paleta de colores actualizada según consultoria.php y alquiler.php */
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
            --error-color: #dc2626;
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
            min-height: 50vh;
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

        .hero-description {
            font-size: 1.2rem;
            line-height: 1.7;
            margin-bottom: 3rem;
            opacity: 0.9;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Contenido de Contacto */
        .contact-modern {
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

        /* Pestañas de servicios */
        .services-tabs {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-bottom: 4rem;
            flex-wrap: wrap;
        }

        .tab-button {
            padding: 1.2rem 2rem;
            background: var(--card-bg);
            border: 2px solid var(--border-color);
            border-radius: var(--border-radius);
            color: var(--text-dark);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.8rem;
            box-shadow: var(--shadow-soft);
            font-size: 1rem;
        }

        .tab-button:hover {
            border-color: var(--primary-color);
            color: var(--primary-color);
            transform: translateY(-2px);
            box-shadow: var(--shadow-medium);
        }

        .tab-button.active {
            background: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
            transform: translateY(-2px);
            box-shadow: var(--shadow-strong);
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        /* Grid de contacto */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 3rem;
            align-items: start;
        }

        .contact-info {
            background: var(--card-bg);
            padding: 3rem;
            border-radius: var(--border-radius-lg);
            box-shadow: var(--shadow-soft);
            border: 1px solid var(--border-color);
            transition: var(--transition);
        }

        .contact-info:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-strong);
        }

        .contact-info h2 {
            color: var(--text-dark);
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 2.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .contact-info h2 i {
            color: var(--primary-color);
            font-size: 1.5rem;
        }

        /* Tarjetas de contacto modernas */
        .contact-item {
            margin-bottom: 2.5rem;
            padding: 2rem;
            background: var(--light-bg);
            border-radius: var(--border-radius);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .contact-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--primary-color);
        }

        .contact-item:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-medium);
        }

        .contact-item h3 {
            color: var(--text-dark);
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }

        .contact-item h3 i {
            color: var(--primary-color);
            font-size: 1.2rem;
            width: 24px;
            text-align: center;
        }

        .contact-item p {
            color: var(--text-light);
            line-height: 1.7;
            margin: 0;
            font-size: 1rem;
        }

        /* Información de certificados */
        .certificate-info {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
            border: 1px solid var(--warning-color);
            border-radius: var(--border-radius);
            padding: 2rem;
            margin-bottom: 2.5rem;
            position: relative;
            overflow: hidden;
        }

        .certificate-info::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--warning-color);
        }

        .certificate-info h4 {
            color: #92400e;
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }

        .certificate-info h4 i {
            color: var(--warning-color);
            font-size: 1.1rem;
        }

        .certificate-info p {
            color: #92400e;
            font-size: 1rem;
            line-height: 1.6;
            margin: 0 0 1rem 0;
        }

        .certificate-info ul {
            color: #92400e;
            font-size: 1rem;
            line-height: 1.6;
            margin: 1rem 0 0 2rem;
        }

        .certificate-info .red-text {
            color: var(--error-color);
            font-weight: 700;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .hero-modern {
                min-height: 80vh;
                padding: 4rem 0;
                clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
            }
            
            .contact-modern {
                padding: 4rem 0;
            }
            
            .services-tabs {
                flex-direction: column;
                align-items: center;
                gap: 1rem;
            }
            
            .tab-button {
                width: 100%;
                max-width: 300px;
                justify-content: center;
                padding: 1rem 1.5rem;
            }
            
            .contact-info {
                padding: 2rem;
            }
            
            .contact-item {
                padding: 1.5rem;
            }
            
            .certificate-info {
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
            .container {
                padding: 0 0.5rem;
            }
            
            .hero-modern {
                clip-path: polygon(0 0, 100% 0, 100% 95%, 0 100%);
            }
            
            .contact-info {
                padding: 1.5rem;
            }
            
            .contact-item {
                padding: 1rem;
            }
            
            .certificate-info {
                padding: 1rem;
            }
            
            .hero-title {
                font-size: 2rem;
            }
            
            .services-tabs {
                gap: 0.5rem;
            }
            
            .tab-button {
                padding: 0.8rem 1.2rem;
                font-size: 0.9rem;
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

        .contact-info {
            animation: fadeInUp 0.6s ease-out;
        }

        .contact-item {
            animation: fadeInUp 0.6s ease-out;
        }

        .contact-item:nth-child(1) { animation-delay: 0.1s; }
        .contact-item:nth-child(2) { animation-delay: 0.2s; }
        .contact-item:nth-child(3) { animation-delay: 0.3s; }
        .contact-item:nth-child(4) { animation-delay: 0.4s; }

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

        .tab-button:focus {
            outline: 3px solid rgba(30, 64, 175, 0.5);
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
                    <i class="fas fa-phone"></i>
                    Contacto Directo
                </div>
                <h1 class="hero-title">Contáctenos</h1>
                <p class="hero-description">
                    Estamos aquí para ayudarte con tus necesidades de medición, certificación y servicios técnicos especializados
                </p>
            </div>
        </div>
    </section>

    <!-- Contenido de Contacto -->
    <section class="contact-modern">
        <div class="container">
            <div class="section-header-modern">
                <div class="section-badge">
                    <i class="fas fa-headset"></i>
                    Atención Especializada
                </div>
                <h2 class="section-title">¿Cómo podemos ayudarte?</h2>
                <p class="section-subtitle">
                    Selecciona el tipo de consulta que necesitas y te brindaremos la información correspondiente
                </p>
            </div>

            <!-- Pestañas de servicios -->
            <div class="services-tabs">
                <button class="tab-button active" onclick="showTab('contact')">
                    <i class="fas fa-envelope"></i>
                    Contacto General
                </button>
                <button class="tab-button" onclick="showTab('certificate')">
                    <i class="fas fa-certificate"></i>
                    Consulta de Certificados
                </button>
            </div>

            <!-- Contenido de Contacto General -->
            <div id="contact-tab" class="tab-content active">
                <div class="contact-grid">
                    <div class="contact-info">
                        <h2>
                            <i class="fas fa-address-book"></i>
                            Información de Contacto
                        </h2>
                        
                        <div class="contact-item">
                            <h3>
                                <i class="fas fa-map-marker-alt"></i>
                                Dirección
                            </h3>
                            <p>La Molina, Lima</p>
                        </div>

                        <div class="contact-item">
                            <h3>
                                <i class="fas fa-phone"></i>
                                Teléfono
                            </h3>
                            <p>+51 940 061 321</p>
                        </div>

                        <div class="contact-item">
                            <h3>
                                <i class="fas fa-envelope"></i>
                                Email
                            </h3>
                            <p>ventas@qpmsac.com.pe</p>
                        </div>

                        <div class="contact-item">
                            <h3>
                                <i class="fas fa-globe"></i>
                                Sitio Web
                            </h3>
                            <p><a href="https://www.qpmsac.com.pe" target="_blank" rel="noopener">www.qpmsac.com.pe</a></p>
                        </div>

                        <div class="contact-item">
                            <h3>
                                <i class="fab fa-linkedin"></i>
                                LinkedIn
                            </h3>
                            <p><a href="https://www.linkedin.com/company/qpm-sacperu" target="_blank" rel="noopener">www.linkedin.com/company/qpm-sacperu</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contenido de Consulta de Certificados -->
            <div id="certificate-tab" class="tab-content">
                <div class="contact-grid">
                    <div class="contact-info">
                        <h2>
                            <i class="fas fa-search"></i>
                            Consulta de Certificados
                        </h2>
                        
                        <div class="certificate-info">
                            <h4>
                                <i class="fas fa-info-circle"></i>
                                Instrucciones Importantes
                            </h4>
                            <p>Con tu número de certificado podrás solicitar que se te envíe vía correo tus certificaciones emitidas por QPM S.A.C.</p>
                            
                            <p><strong>Proceso de validación:</strong></p>
                            <ul>
                                <li>Validaremos los datos ingresados</li>
                                <li>Verificaremos la autenticidad del certificado</li>
                                <li class="red-text">Tiempo de respuesta: 72 horas hábiles</li>
                            </ul>
                        </div>

                        <div class="contact-item">
                            <h3>
                                <i class="fas fa-mail-bulk"></i>
                                Correos de Notificación
                            </h3>
                            <p><strong>Principal:</strong> operaciones@qpmsac.com.pe</p>
                            <p><strong>Con copia a:</strong><br>
                            • ventas@qpmsac.com.pe<br>
                            • administracion@qpmsac.com.pe<br>
                            • ana.castillo@qpmsa.com.pe</p>
                        </div>

                        <div class="contact-item">
                            <h3>
                                <i class="fas fa-list-check"></i>
                                Información Requerida
                            </h3>
                            <p>Para procesar tu solicitud necesitamos:</p>
                            <ul style="margin-top: 1rem; padding-left: 2rem;">
                                <li>Número de certificado</li>
                                <li>Nombre de la empresa propietaria</li>
                                <li>Nombre completo del solicitante</li>
                                <li>DNI del solicitante</li>
                                <li>Correo electrónico</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<script>
function showTab(tabName) {
    // Ocultar todos los contenidos de pestañas
    const tabContents = document.querySelectorAll('.tab-content');
    tabContents.forEach(content => {
        content.classList.remove('active');
    });
    
    // Remover clase active de todos los botones
    const tabButtons = document.querySelectorAll('.tab-button');
    tabButtons.forEach(button => {
        button.classList.remove('active');
    });
    
    // Mostrar el contenido seleccionado
    document.getElementById(tabName + '-tab').classList.add('active');
    
    // Activar el botón correspondiente
    event.target.classList.add('active');
}
</script>
</html>