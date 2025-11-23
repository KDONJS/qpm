<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

<main>
    <?php 
    // Configuración del hero para esta página
    $title = "Boletín";
    // Incluir el componente hero
    include __DIR__ . '/../includes/hero-service.php';
    ?>


    <!-- Sección de Noticias Recientes -->
    <section class="recent-news">
        <div class="container">
            <h2 class="section-title">Noticias Recientes</h2>
            <div class="news-timeline">
                <div class="news-item">
                    <div class="news-date">
                        <span class="day">15</span>
                        <span class="month">Julio</span>
                        <span class="year">2025</span>
                    </div>
                    <div class="news-content">
                        <h3>Visita Estratégica a GOLD FIELDS - Fortaleciendo Alianzas</h3>
                        <p>En QPM SAC PERÚ compartimos lo que fue nuestra visita a nuestro socio estratégico GOLD FIELDS, una valiosa oportunidad para seguir potenciándonos como equipo y elevar continuamente nuestros estándares de prestación de servicios en Mantenimiento Predictivo (MPD), Ensayos No Destructivos (NDT) y Confiabilidad de Equipos de Planta y Procesos.</p>
                        <div class="news-tags">
                            <span class="tag">#MantenimientoPredictivo</span>
                            <span class="tag">#NDT</span>
                            <span class="tag">#Confiabilidad</span>
                            <span class="tag">#IndustriaMinera</span>
                        </div>
                        <a href="https://www.linkedin.com/feed/update/urn:li:activity:7350909494236696582" target="_blank" class="news-link">
                            <i class="fab fa-linkedin"></i>
                            Ver en LinkedIn <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>

                <div class="news-item">
                    <div class="news-date">
                        <span class="day">15</span>
                        <span class="month">Junio</span>
                        <span class="year">2025</span>
                    </div>
                    <div class="news-content">
                        <h3>Charla Especializada: Normativa de Inspección de Equipos de Izaje</h3>
                        <p>Como parte del valor agregado que ofrecemos a nuestros socios estratégicos como Aceros Arequipa, organizamos una charla especializada sobre "Normativa Aplicable a la Inspección de Equipos de Izaje y manejo de Cargas", en colaboración con C3PERU CAPACITACION. Este tipo de iniciativas refuerzan nuestro compromiso con la seguridad, la formación continua y la excelencia operativa en entornos industriales.</p>
                        <div class="news-tags">
                            <span class="tag">#SeguridadIndustrial</span>
                            <span class="tag">#IzajeDeCargas</span>
                            <span class="tag">#CapacitaciónIndustrial</span>
                            <span class="tag">#QPM</span>
                        </div>
                        <a href="https://www.linkedin.com/feed/update/urn:li:activity:7321548567720955905/" target="_blank" class="news-link">
                            <i class="fab fa-linkedin"></i>
                            Ver en LinkedIn <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

</main>

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
    
    /* Variables específicas para compatibilidad */
    --primary-color: var(--dark-blue);
    --secondary-color: var(--dark-blue);
    --accent-color: var(--bright-blue);
    --light-blue: #e8f4fd;
    --light-gray: var(--light-bg);
    --success-color: #28a745;
    --warning-color: #ffc107;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
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
    border-radius: var(--border-radius);
    padding: 2rem;
    box-shadow: var(--shadow-soft);
    transition: var(--transition);
    border: 1px solid var(--border-color);
}

.bulletin-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-medium);
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
    border-radius: var(--border-radius);
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

.news-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    margin-bottom: 1rem;
}

.tag {
    background: var(--light-blue);
    color: var(--primary-color);
    padding: 0.3rem 0.8rem;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 500;
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

.news-link .fab {
    color: #0077b5;
    font-size: 1.1rem;
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
    border-radius: var(--border-radius);
    padding: 2rem;
    box-shadow: var(--shadow-soft);
    display: flex;
    gap: 1.5rem;
    transition: var(--transition);
}

.event-card:hover {
    transform: translateY(-3px);
    box-shadow: var(--shadow-medium);
}

.event-date {
    flex-shrink: 0;
    width: 70px;
    text-align: center;
    background: var(--primary-color);
    color: var(--white);
    border-radius: var(--border-radius);
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
    border-radius: var(--border-radius);
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
    border-radius: var(--border-radius);
    text-decoration: none;
    font-weight: 500;
    transition: var(--transition);
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
    
    .news-tags {
        justify-content: center;
        margin-bottom: 1.5rem;
    }
    
    .tag {
        font-size: 0.75rem;
        padding: 0.25rem 0.6rem;
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