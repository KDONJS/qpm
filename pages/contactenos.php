<?php 
// Configuración del hero para esta página
$title = "Contáctenos";
$description = "Estamos aquí para ayudarte con tus necesidades de medición, certificación y servicios técnicos especializados";


// Incluir el componente hero
include __DIR__ . '/../includes/hero-service.php';
?>

<head>
    <!-- Estilos únicos para contactenos -->
    <link rel="stylesheet" href="../assets/css/contactenos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="contactenos-page">

    <!-- Contenido de Contacto -->
    <section class="contact-modern">
        <div class="container">
            <div class="section-header-modern">
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

                        <!-- Google Form Integrado -->
                        <div class="form-section">
                            <div class="form-header">
                                <h3>
                                    Formulario de Consulta de Certificados
                                </h3>
                                <p>Complete el siguiente formulario con sus datos y número de certificado. Nos pondremos en contacto con usted en un plazo máximo de 72 horas hábiles.</p>
                            </div>
                            
                            <div class="form-container">
                                <iframe 
                                    src="https://docs.google.com/forms/d/e/1FAIpQLSdsUOKS_1TQVR6RUijQimRqvSUSLoWiVmfCB4K3aTOtp-maMg/viewform" 
                                    width="100%" 
                                    height="900" 
                                    frameborder="0" 
                                    marginheight="0" 
                                    marginwidth="0"
                                    class="google-form">
                                    Cargando formulario...
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
</body>