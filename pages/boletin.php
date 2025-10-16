<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

<main>
    <!-- Hero Section -->
    <section class="page-hero">
        <div class="container">
            <h1>Boletín y Noticias</h1>
            <p>Mantente informado sobre las últimas novedades, avances tecnológicos y actualizaciones del sector industrial</p>
        </div>
    </section>

    <!-- Sección de Boletines Destacados -->
    <section class="featured-bulletins">
        <div class="container">
            <h2 class="section-title">Boletines Destacados</h2>
            <div class="bulletins-grid">
                <div class="bulletin-card featured">
                    <div class="bulletin-header">
                        <i class="fas fa-file-pdf bulletin-icon"></i>
                        <div class="bulletin-meta">
                            <span class="bulletin-type">Boletín Técnico</span>
                            <span class="bulletin-date">Enero 2024</span>
                        </div>
                    </div>
                    <h3>Avances en Ensayos No Destructivos 2024</h3>
                    <p>Nuevas tecnologías en ultrasonido phased array, radiografía digital y termografía infrarroja para la industria minera y petroquímica.</p>
                    <div class="bulletin-actions">
                        <a href="#" class="btn-primary">
                            <i class="fas fa-download"></i>
                            Descargar PDF
                        </a>
                        <a href="#" class="btn-secondary">
                            <i class="fas fa-eye"></i>
                            Vista previa
                        </a>
                    </div>
                </div>

                <div class="bulletin-card">
                    <div class="bulletin-header">
                        <i class="fas fa-certificate bulletin-icon"></i>
                        <div class="bulletin-meta">
                            <span class="bulletin-type">Certificación</span>
                            <span class="bulletin-date">Diciembre 2023</span>
                        </div>
                    </div>
                    <h3>QPM Obtiene Certificación ISO 17025</h3>
                    <p>Reconocimiento internacional para laboratorios de ensayo y calibración, fortaleciendo nuestro compromiso con la calidad.</p>
                    <div class="bulletin-actions">
                        <a href="#" class="btn-primary">
                            <i class="fas fa-download"></i>
                            Descargar
                        </a>
                    </div>
                </div>

                <div class="bulletin-card">
                    <div class="bulletin-header">
                        <i class="fas fa-industry bulletin-icon"></i>
                        <div class="bulletin-meta">
                            <span class="bulletin-type">Caso de Estudio</span>
                            <span class="bulletin-date">Noviembre 2023</span>
                        </div>
                    </div>
                    <h3>Inspección de Grúas Puente en Minería</h3>
                    <p>Análisis detallado de metodologías aplicadas en la inspección y certificación de equipos de izaje en operaciones mineras.</p>
                    <div class="bulletin-actions">
                        <a href="#" class="btn-primary">
                            <i class="fas fa-download"></i>
                            Descargar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Noticias Recientes -->
    <section class="recent-news">
        <div class="container">
            <h2 class="section-title">Noticias Recientes</h2>
            <div class="news-timeline">
                <div class="news-item">
                    <div class="news-date">
                        <span class="day">15</span>
                        <span class="month">ENE</span>
                        <span class="year">2024</span>
                    </div>
                    <div class="news-content">
                        <h3>Expansión de Servicios de Topografía con Drones</h3>
                        <p>QPM incorpora tecnología de drones avanzados para levantamientos topográficos de alta precisión, optimizando tiempos y mejorando la seguridad en proyectos de gran escala.</p>
                        <a href="#" class="news-link">Leer más <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="news-item">
                    <div class="news-date">
                        <span class="day">08</span>
                        <span class="month">ENE</span>
                        <span class="year">2024</span>
                    </div>
                    <div class="news-content">
                        <h3>Nuevo Laboratorio de Calibración Electrónica</h3>
                        <p>Inauguración de nuestras nuevas instalaciones para calibración de equipos electrónicos, ampliando nuestra capacidad de servicio a nivel nacional e internacional.</p>
                        <a href="#" class="news-link">Leer más <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="news-item">
                    <div class="news-date">
                        <span class="day">22</span>
                        <span class="month">DIC</span>
                        <span class="year">2023</span>
                    </div>
                    <div class="news-content">
                        <h3>Participación en Congreso Internacional de Metrología</h3>
                        <p>Nuestro equipo técnico presenta ponencias sobre innovaciones en medición láser 3D y sistemas de monitoreo remoto en el Congreso Internacional de Lima.</p>
                        <a href="#" class="news-link">Leer más <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<style>
:root {
    --primary-color: #2c5aa0;
    --secondary-color: #1e3d72;
    --accent-color: #4a90e2;
    --light-blue: #e8f4fd;
    --text-dark: #2c3e50;
    --text-light: #6c757d;
    --white: #ffffff;
    --light-gray: #f8f9fa;
    --border-color: #e9ecef;
    --success-color: #28a745;
    --warning-color: #ffc107;
}

.page-hero {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    color: var(--white);
    padding: 4rem 0;
    text-align: center;
}

.page-hero h1 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.page-hero p {
    font-size: 1.2rem;
    opacity: 0.9;
    max-width: 600px;
    margin: 0 auto;
}

.section-title {
    font-size: 2rem;
    font-weight: 700;
    color: var(--text-dark);
    text-align: center;
    margin-bottom: 3rem;
    position: relative;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 3px;
    background: var(--accent-color);
}

/* Boletines Destacados */
.featured-bulletins {
    padding: 4rem 0;
    background: var(--light-gray);
}

.bulletins-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
}

.bulletin-card {
    background: var(--white);
    border-radius: 12px;
    padding: 2rem;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    border: 1px solid var(--border-color);
}

.bulletin-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 30px rgba(0,0,0,0.15);
}

.bulletin-card.featured {
    border: 2px solid var(--accent-color);
    position: relative;
}

.bulletin-card.featured::before {
    content: 'Destacado';
    position: absolute;
    top: -10px;
    right: 20px;
    background: var(--accent-color);
    color: var(--white);
    padding: 5px 15px;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
}

.bulletin-header {
    display: flex;
    align-items: center;
    margin-bottom: 1.5rem;
}

.bulletin-icon {
    font-size: 2rem;
    color: var(--accent-color);
    margin-right: 1rem;
}

.bulletin-meta {
    display: flex;
    flex-direction: column;
}

.bulletin-type {
    font-weight: 600;
    color: var(--text-dark);
    font-size: 0.9rem;
}

.bulletin-date {
    color: var(--text-light);
    font-size: 0.8rem;
}

.bulletin-card h3 {
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--text-dark);
    margin-bottom: 1rem;
    line-height: 1.4;
}

.bulletin-card p {
    color: var(--text-light);
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.bulletin-actions {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

/* Noticias Recientes */
.recent-news {
    padding: 4rem 0;
}

.news-timeline {
    max-width: 800px;
    margin: 0 auto;
}

.news-item {
    display: flex;
    margin-bottom: 2.5rem;
    padding-bottom: 2.5rem;
    border-bottom: 1px solid var(--border-color);
}

.news-item:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.news-date {
    flex-shrink: 0;
    width: 80px;
    text-align: center;
    margin-right: 2rem;
    background: var(--light-blue);
    border-radius: 8px;
    padding: 1rem 0.5rem;
}

.news-date .day {
    display: block;
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary-color);
}

.news-date .month {
    display: block;
    font-size: 0.8rem;
    font-weight: 600;
    color: var(--text-dark);
}

.news-date .year {
    display: block;
    font-size: 0.7rem;
    color: var(--text-light);
}

.news-content h3 {
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--text-dark);
    margin-bottom: 0.5rem;
}

.news-content p {
    color: var(--text-light);
    line-height: 1.6;
    margin-bottom: 1rem;
}

.news-link {
    color: var(--accent-color);
    text-decoration: none;
    font-weight: 500;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    transition: color 0.3s ease;
}

.news-link:hover {
    color: var(--primary-color);
}

/* Eventos */
.events-section {
    padding: 4rem 0;
    background: var(--light-gray);
}

.events-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
}

.event-card {
    background: var(--white);
    border-radius: 12px;
    padding: 2rem;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    display: flex;
    gap: 1.5rem;
    transition: transform 0.3s ease;
}

.event-card:hover {
    transform: translateY(-3px);
}

.event-date {
    flex-shrink: 0;
    width: 70px;
    text-align: center;
    background: var(--primary-color);
    color: var(--white);
    border-radius: 8px;
    padding: 1rem 0.5rem;
}

.event-day {
    display: block;
    font-size: 1.5rem;
    font-weight: 700;
}

.event-month {
    display: block;
    font-size: 0.8rem;
    font-weight: 600;
}

.event-content h3 {
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--text-dark);
    margin-bottom: 0.5rem;
}

.event-content p {
    color: var(--text-light);
    font-size: 0.9rem;
    margin-bottom: 0.5rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.event-content p:last-of-type {
    margin-bottom: 1rem;
    line-height: 1.5;
}

/* Suscripción */
.subscription-section {
    padding: 4rem 0;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    color: var(--white);
}

.subscription-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
    align-items: center;
}

.subscription-text h2 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.subscription-text p {
    font-size: 1.1rem;
    opacity: 0.9;
    line-height: 1.6;
}

.newsletter-form .form-group {
    display: flex;
    gap: 1rem;
    margin-bottom: 1rem;
}

.newsletter-form input {
    flex: 1;
    padding: 1rem;
    border: none;
    border-radius: 8px;
    font-size: 1rem;
}

.newsletter-form input:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(255,255,255,0.3);
}

.form-note {
    font-size: 0.9rem;
    opacity: 0.8;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

/* Botones */
.btn-primary, .btn-secondary {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.8rem 1.5rem;
    border: none;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
    cursor: pointer;
    font-size: 0.9rem;
}

.btn-primary {
    background: var(--accent-color);
    color: var(--white);
}

.btn-primary:hover {
    background: var(--primary-color);
    transform: translateY(-2px);
}

.btn-secondary {
    background: transparent;
    color: var(--accent-color);
    border: 2px solid var(--accent-color);
}

.btn-secondary:hover {
    background: var(--accent-color);
    color: var(--white);
}

/* Responsive */
@media (max-width: 768px) {
    .page-hero h1 {
        font-size: 2rem;
    }
    
    .page-hero p {
        font-size: 1rem;
    }
    
    .bulletins-grid {
        grid-template-columns: 1fr;
    }
    
    .news-item {
        flex-direction: column;
    }
    
    .news-date {
        width: auto;
        margin-right: 0;
        margin-bottom: 1rem;
        display: flex;
        justify-content: center;
        gap: 1rem;
        padding: 1rem;
    }
    
    .news-date .day,
    .news-date .month,
    .news-date .year {
        display: inline;
    }
    
    .events-grid {
        grid-template-columns: 1fr;
    }
    
    .event-card {
        flex-direction: column;
        text-align: center;
    }
    
    .subscription-content {
        grid-template-columns: 1fr;
        text-align: center;
    }
    
    .newsletter-form .form-group {
        flex-direction: column;
    }
    
    .bulletin-actions {
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .bulletin-card,
    .event-card {
        padding: 1.5rem;
    }
    
    .section-title {
        font-size: 1.5rem;
    }
}
</style>