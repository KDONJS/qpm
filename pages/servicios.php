<?php
/**
 * Página: Servicios
 * QPM Servicios Técnicos
 */

// Configuración del hero
$title = "Nuestros Servicios";
$description = "Servicios especializados en medición, certificación y consultoría técnica de alta calidad";

// Incluir hero
include __DIR__ . '/../includes/hero-service.php';
?>

<main>
    <section class="section services-section">
        <div class="container">
            <div class="section-header-modern">
                <h2 class="section-title">Servicios Especializados</h2>
                <p class="section-subtitle">
                    Ofrecemos una amplia gama de servicios técnicos especializados para diversos sectores industriales
                </p>
            </div>
            
            <div class="services-grid">
                <!-- MPd y Confiabilidad -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>MPd y Confiabilidad</h3>
                    <p>Análisis de confiabilidad y mediciones de precisión para equipos industriales críticos.</p>
                    <a href="<?php echo getPageUrl('MPd'); ?>" class="btn btn-primary">Ver detalles</a>
                </div>
                
                <!-- Ensayos No Destructivos -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Ensayos No Destructivos</h3>
                    <p>Pruebas especializadas que preservan la integridad de materiales y estructuras.</p>
                    <a href="<?php echo getPageUrl('ensayos'); ?>" class="btn btn-primary">Ver detalles</a>
                </div>
                
                <!-- Topografía y Geodesia -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h3>Topografía y Geodesia</h3>
                    <p>Servicios de medición territorial con tecnología de última generación.</p>
                    <a href="<?php echo getPageUrl('topografia'); ?>" class="btn btn-primary">Ver detalles</a>
                </div>
                
                <!-- Inspección y Certificación -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Inspección y Certificación de Equipos</h3>
                    <p>Certificación de equipos de medición según normas internacionales.</p>
                    <a href="<?php echo getPageUrl('inspeccion'); ?>" class="btn btn-primary">Ver detalles</a>
                </div>
                
                <!-- Consultoría -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Consultoría y Asesoramiento</h3>
                    <p>Asesoramiento técnico especializado para optimizar procesos de medición.</p>
                    <a href="<?php echo getPageUrl('consultoria'); ?>" class="btn btn-primary">Ver detalles</a>
                </div>
                
                <!-- Servicios Especializados -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Servicios Especializados</h3>
                    <p>Soluciones personalizadas para necesidades específicas de medición.</p>
                    <a href="<?php echo getPageUrl('especializados'); ?>" class="btn btn-primary">Ver detalles</a>
                </div>
                
                <!-- Alquiler y Venta -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>Alquiler y Venta de Equipos</h3>
                    <p>Equipos de medición de alta precisión disponibles para alquiler y venta.</p>
                    <a href="<?php echo getPageUrl('alquiler'); ?>" class="btn btn-primary">Ver detalles</a>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
/* Estilos específicos para la página de servicios */
.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: var(--spacing-xl);
    margin-top: var(--spacing-3xl);
}

.service-card {
    background: var(--card-bg);
    border-radius: var(--border-radius);
    padding: var(--spacing-xl);
    box-shadow: var(--shadow-soft);
    transition: var(--transition);
    text-align: center;
}

.service-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-medium);
}

.service-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto var(--spacing-lg);
    background: linear-gradient(135deg, var(--bright-blue), var(--teal));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: var(--font-size-3xl);
    color: var(--white);
}

.service-card h3 {
    font-size: var(--font-size-xl);
    font-weight: var(--font-weight-bold);
    color: var(--dark-blue);
    margin-bottom: var(--spacing-md);
}

.service-card p {
    color: var(--text-light);
    margin-bottom: var(--spacing-lg);
    line-height: 1.6;
}

.btn {
    display: inline-block;
    padding: 0.75rem 1.5rem;
    border-radius: var(--border-radius-sm);
    text-decoration: none;
    font-weight: var(--font-weight-semibold);
    transition: var(--transition);
}

.btn-primary {
    background: var(--bright-blue);
    color: var(--white);
}

.btn-primary:hover {
    background: var(--dark-blue);
}

@media (max-width: 768px) {
    .services-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .service-card {
        padding: var(--spacing-lg);
    }
}
</style>