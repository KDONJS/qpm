<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

<style>
:root {
    --dark-blue: #3f51b5;
    --teal: #26c6da;
    --bright-blue: #2196f3;
    --white: #ffffff;
    --green: #4caf50;
    --lime: #8bc34a;
    --text-dark: #1e293b;
    --text-light: #64748b;
    --light-bg: #f8fafc;
}

.page-hero {
    background: var(--dark-blue);
    color: var(--white);
    padding: 5rem 0;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.page-hero::before {
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

.page-hero h1 {
    font-size: 3rem;
    font-weight: 800;
    margin-bottom: 1.5rem;
    position: relative;
    z-index: 2;
}

.page-hero .subtitle {
    font-size: 1.4rem;
    font-weight: 600;
    background: rgba(38, 198, 218, 0.15);
    color: var(--teal);
    padding: 0.75rem 2rem;
    border-radius: 25px;
    display: inline-block;
    margin-bottom: 1.5rem;
    box-shadow: 0 4px 15px rgba(38, 198, 218, 0.2);
    border: 2px solid rgba(38, 198, 218, 0.3);
    position: relative;
    z-index: 2;
}

.page-hero p {
    font-size: 1.3rem;
    opacity: 0.95;
    max-width: 700px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
    line-height: 1.6;
}

.main-content {
    padding: 5rem 0;
    background: var(--light-bg);
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
}

.services-section {
    text-align: center;
    margin-bottom: 5rem;
}

.services-section h2 {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--dark-blue);
    margin-bottom: 2rem;
    position: relative;
}

.services-section h2::after {
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

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 2.5rem;
    margin-top: 4rem;
}

.service-card {
    background: var(--white);
    padding: 3rem 2rem;
    border-radius: 20px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
    text-align: center;
}

.service-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.service-card h3 {
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--text-dark);
    margin-bottom: 1.5rem;
    display: block;
    text-align: center;
}

/* Eliminamos todos los estilos de iconos ::before */
/* .service-card:nth-child(1) h3::before,
.service-card:nth-child(2) h3::before,
.service-card:nth-child(3) h3::before,
.service-card:nth-child(4) h3::before,
.service-card:nth-child(5) h3::before,
.service-card:nth-child(6) h3::before {
    display: none;
} */

/* Responsive Design */
@media (max-width: 768px) {
    .page-hero {
        padding: 3rem 0;
    }
    
    .page-hero h1 {
        font-size: 2.2rem;
    }
    
    .page-hero .subtitle {
        font-size: 1.2rem;
        padding: 0.5rem 1.5rem;
    }
    
    .page-hero p {
        font-size: 1.1rem;
    }
    
    .main-content {
        padding: 3rem 0;
    }
    
    .services-section h2 {
        font-size: 2rem;
        margin-bottom: 2rem;
    }
    
    .services-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .service-card {
        padding: 2rem 1.5rem;
    }
}

@media (max-width: 480px) {
    .container {
        padding: 0 0.5rem;
    }
    
    .page-hero h1 {
        font-size: 1.8rem;
    }
    
    .page-hero .subtitle {
        font-size: 1rem;
        padding: 0.5rem 1rem;
    }
    
    .service-card {
        padding: 1.5rem 1rem;
    }
}
</style>

<main>
    <section class="page-hero">
        <div class="container">
            <h1>Topografía, Geodesia y Medición láser 3D</h1>
            <p class="subtitle">Ponemos a tu alcance alta tecnología, precisión y pasión</p>
            <p>Brindamos soluciones tecnológicas en topografía y geodesia en diversos proyectos a nivel nacional. También realizamos mediciones en 3D con equipo láser tracker que permite medir con alta precisión las dimensiones de un objeto grande a través de la reflexión de la luz láser en dianas retroreflectoras colocadas sobre los puntos a medir.</p>
        </div>
    </section>

    <section class="main-content">
        <div class="container">
            <div class="services-section">
                <h2>Servicios Especializados</h2>
                <div class="services-grid">
                    <div class="service-card">
                        <h3>Levantamiento Topográfico en General</h3>
                    </div>
                    
                    <div class="service-card">
                        <h3>Medición de superficies topográficas</h3>
                    </div>
                    
                    <div class="service-card">
                        <h3>Topografía en obra y construcción</h3>
                    </div>
                    
                    <div class="service-card">
                        <h3>Colocación de puntos geodésicos</h3>
                    </div>
                    
                    <div class="service-card">
                        <h3>Topografía con drones</h3>
                    </div>
                    
                    <div class="service-card">
                        <h3>Medición 3D de estructuras con láser trucker</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>