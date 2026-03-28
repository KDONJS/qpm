<?php
/**
 * Página de contacto
 * QPM Servicios Técnicos
 */

$title = 'Contáctenos';
include __DIR__ . '/../includes/hero-service.php';
?>

<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/contactenos.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<section class="contact-modern">
    <div class="container">
        <div class="section-header-modern">
            <h2 class="section-title">Contáctanos</h2>
            <p class="section-subtitle">
                Estamos aquí para ayudarte. Selecciona el tipo de consulta y te responderemos a la brevedad.
            </p>
        </div>

        <!-- Tabs -->
        <div class="services-tabs">
            <button class="tab-button active" data-tab="contact">
                <i class="fas fa-envelope"></i>
                <span>Contacto General</span>
            </button>
            <button class="tab-button" data-tab="certificate">
                <i class="fas fa-certificate"></i>
                <span>Consulta de Certificados</span>
            </button>
        </div>

        <!-- Tab Contacto -->
        <div id="contact-tab" class="tab-content active">
            <div class="contact-info-panel">
                <div class="contact-info-header">
                    <h3><i class="fas fa-address-book"></i> Información de Contacto</h3>
                </div>

                <div class="contact-info-list">
                    <div class="contact-info-row">
                        <div class="contact-info-label">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Dirección</span>
                        </div>
                        <span class="contact-info-value">La Molina, Lima</span>
                    </div>

                    <div class="contact-info-row">
                        <div class="contact-info-label">
                            <i class="fas fa-phone"></i>
                            <span>Teléfono</span>
                        </div>
                        <a href="tel:+51940061321" class="contact-info-value contact-link">+51 940 061 321</a>
                    </div>

                    <div class="contact-info-row">
                        <div class="contact-info-label">
                            <i class="fas fa-envelope"></i>
                            <span>Email</span>
                        </div>
                        <a href="mailto:ventas@qpmsac.com.pe" class="contact-info-value contact-link">ventas@qpmsac.com.pe</a>
                    </div>

                    <div class="contact-info-row">
                        <div class="contact-info-label">
                            <i class="fas fa-globe"></i>
                            <span>Sitio Web</span>
                        </div>
                        <a href="https://www.qpmsac.com.pe" target="_blank" rel="noopener" class="contact-info-value contact-link">www.qpmsac.com.pe</a>
                    </div>

                    <div class="contact-info-row">
                        <div class="contact-info-label">
                            <i class="fab fa-linkedin"></i>
                            <span>LinkedIn</span>
                        </div>
                        <a href="https://www.linkedin.com/company/qpm-sacperu" target="_blank" rel="noopener" class="contact-info-value contact-link">www.linkedin.com/company/qpm-sacperu</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab Certificados -->
        <div id="certificate-tab" class="tab-content">
            <div class="contact-grid">
                <div class="certificate-section">
                    <div class="certificate-header">
                        <i class="fas fa-award" style="font-size: 3rem; margin-bottom: 1rem; opacity: 0.9;"></i>
                        <h3>Consulta de Certificados</h3>
                        <p>Complete el formulario con sus datos y el número de certificado. Nos pondremos en contacto en un plazo máximo de 72 horas hábiles.</p>
                        <div class="response-badge">
                            <i class="fas fa-clock"></i>
                            <span>Tiempo de respuesta: 72 horas hábiles</span>
                        </div>
                    </div>
                    <div class="certificate-body">
                        <iframe 
                            src="https://docs.google.com/forms/d/e/1FAIpQLSdsUOKS_1TQVR6RUijQimRqvSUSLoWiVmfCB4K3aTOtp-maMg/viewform" 
                            class="google-form"
                            title="Formulario de consulta de certificados">
                            Cargando formulario...
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo BASE_URL; ?>assets/js/contact-tabs.js"></script>
