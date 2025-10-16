<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

<main>
    <section class="page-hero">
        <div class="container">
            <h1>Visión y Misión</h1>
            <p>Nuestros valores y objetivos que guían cada uno de nuestros servicios</p>
        </div>
    </section>

    <section class="vision-mission-content">
        <div class="container">
            <div class="vision-mission-grid">
                <div class="vision-card">
                    <div class="card-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Nuestra Visión</h3>
                    <p>Ser una empresa de crecimiento sólido, siendo la mejor alternativa de soporte y suministro de nuestros clientes en los sectores minería, energía, hidrocarburos e industria en general, nacional e internacionalmente.</p>
                </div>
                
                <div class="mission-card">
                    <div class="card-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Nuestra Misión</h3>
                    <p>Brindar soluciones innovadoras, flexibles e integrales alineadas a los objetivos estratégicos de nuestros clientes, así como establecer internamente estrategias orientadas a nuestro crecimiento sostenido y con ello el de nuestros colaboradores.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="commitment-section">
        <div class="container">
            <div class="commitment-content">
                <h2>Nuestro Compromiso con el Futuro</h2>
                <p class="commitment-description">Desde febrero de 2015, hemos demostrado nuestro compromiso con la excelencia y el crecimiento sostenible. Miramos hacia el futuro con la determinación de seguir siendo líderes en nuestro sector.</p>
                
                <div class="commitment-grid">
                    <div class="commitment-item">
                        <div class="commitment-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="commitment-text">
                            <h4>Crecimiento Sostenible</h4>
                            <p>Desarrollamos estrategias que aseguran nuestro crecimiento a largo plazo mientras contribuimos al éxito de nuestros clientes y el desarrollo de nuestro equipo.</p>
                        </div>
                    </div>
                    
                    <div class="commitment-item">
                        <div class="commitment-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="commitment-text">
                            <h4>Desarrollo del Talento</h4>
                            <p>Invertimos en la capacitación y crecimiento profesional de nuestros colaboradores, manteniendo las certificaciones más exigentes del mercado.</p>
                        </div>
                    </div>
                    
                    <div class="commitment-item">
                        <div class="commitment-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="commitment-text">
                            <h4>Expansión Internacional</h4>
                            <p>Trabajamos para consolidar nuestra presencia en mercados internacionales, llevando nuestra experiencia y calidad más allá de las fronteras nacionales.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

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

.page-hero p {
    font-size: 1.3rem;
    opacity: 0.95;
    max-width: 700px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
}

.vision-mission-content {
    padding: 5rem 0;
    background: var(--light-bg);
}

.vision-mission-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
    gap: 3rem;
}

.vision-card, .mission-card {
    background: var(--white);
    padding: 3rem;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    text-align: center;
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
}

.vision-card:hover, .mission-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.card-icon {
    width: 100px;
    height: 100px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 2rem;
    overflow: hidden;
}

.vision-card .card-icon {
    background: rgba(33, 150, 243, 0.1);
}

.mission-card .card-icon {
    background: rgba(38, 198, 218, 0.1);
}

.card-icon i {
    font-size: 3rem;
}

.vision-card .card-icon i {
    color: var(--bright-blue);
}

.mission-card .card-icon i {
    color: var(--teal);
}

.vision-card h3, .mission-card h3 {
    font-size: 1.8rem;
    font-weight: 800;
    color: var(--text-dark);
    margin-bottom: 1.5rem;
}

.vision-card p, .mission-card p {
    color: var(--text-light);
    line-height: 1.8;
    font-size: 1.1rem;
    margin: 0;
}

.values-section {
    padding: 5rem 0;
    background: var(--white);
}

.values-intro {
    text-align: center;
    margin-bottom: 5rem;
}

.values-intro h2 {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--dark-blue);
    margin-bottom: 2rem;
    position: relative;
}

.values-intro h2::after {
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

.values-intro p {
    font-size: 1.2rem;
    color: var(--text-light);
    line-height: 1.8;
    max-width: 900px;
    margin: 0 auto;
}

.values-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2.5rem;
}

.value-item {
    display: flex;
    align-items: flex-start;
    gap: 1.5rem;
    background: var(--light-bg);
    padding: 2.5rem;
    border-radius: 16px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    overflow: hidden;
}

.value-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
}

.value-icon {
    width: 70px;
    height: 70px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    overflow: hidden;
}

.value-item:nth-child(1) .value-icon {
    background: rgba(33, 150, 243, 0.1);
}

.value-item:nth-child(2) .value-icon {
    background: rgba(76, 175, 80, 0.1);
}

.value-item:nth-child(3) .value-icon {
    background: rgba(38, 198, 218, 0.1);
}

.value-item:nth-child(4) .value-icon {
    background: rgba(139, 195, 74, 0.1);
}

.value-icon i {
    font-size: 2.2rem;
}

.value-item:nth-child(1) .value-icon i {
    color: var(--bright-blue);
}

.value-item:nth-child(2) .value-icon i {
    color: var(--green);
}

.value-item:nth-child(3) .value-icon i {
    color: var(--teal);
}

.value-item:nth-child(4) .value-icon i {
    color: var(--lime);
}

.value-content h4 {
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 0.8rem;
}

.value-content p {
    color: var(--text-light);
    line-height: 1.7;
    margin: 0;
    font-size: 1rem;
}

.commitment-section {
    padding: 5rem 0;
}

.commitment-content {
    background: var(--white);
    padding: 4rem;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    text-align: center;
    position: relative;
    overflow: hidden;
}

.commitment-content h2 {
    font-size: 2.2rem;
    font-weight: 800;
    color: var(--dark-blue);
    margin-bottom: 2rem;
}

.commitment-description {
    font-size: 1.2rem;
    color: var(--text-light);
    line-height: 1.8;
    max-width: 900px;
    margin: 0 auto 4rem;
}

.commitment-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 2.5rem;
    text-align: left;
}

.commitment-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1.5rem;
    background: var(--light-bg);
    padding: 2.5rem;
    border-radius: 16px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    overflow: hidden;
    text-align: center;
}

.commitment-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
}

.commitment-icon {
    width: 70px;
    height: 70px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    overflow: hidden;
}

.commitment-item:nth-child(1) .commitment-icon {
    background: rgba(33, 150, 243, 0.1);
}

.commitment-item:nth-child(2) .commitment-icon {
    background: rgba(76, 175, 80, 0.1);
}

.commitment-item:nth-child(3) .commitment-icon {
    background: rgba(38, 198, 218, 0.1);
}

.commitment-icon i {
    font-size: 2.2rem;
}

.commitment-item:nth-child(1) .commitment-icon i {
    color: var(--bright-blue);
}

.commitment-item:nth-child(2) .commitment-icon i {
    color: var(--green);
}

.commitment-item:nth-child(3) .commitment-icon i {
    color: var(--teal);
}

.commitment-text h4 {
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 0.8rem;
}

.commitment-text p {
    color: var(--text-light);
    line-height: 1.7;
    margin: 0;
    font-size: 1rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    .page-hero {
        padding: 3rem 0;
    }
    
    .page-hero h1 {
        font-size: 2.2rem;
    }
    
    .page-hero p {
        font-size: 1.1rem;
    }
    
    .vision-mission-content, .values-section, .commitment-section {
        padding: 3rem 0;
    }
    
    .vision-mission-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .vision-card, .mission-card {
        padding: 2.5rem;
    }
    
    .card-icon {
        width: 80px;
        height: 80px;
    }
    
    .card-icon i {
        font-size: 2.5rem;
    }
    
    .values-intro h2 {
        font-size: 2rem;
    }
    
    .values-grid, .commitment-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .value-item, .commitment-item {
        padding: 2rem;
        gap: 1rem;
    }
    
    .value-icon, .commitment-icon {
        width: 60px;
        height: 60px;
    }
    
    .value-icon i, .commitment-icon i {
        font-size: 1.8rem;
    }
    
    .commitment-content {
        padding: 2.5rem;
    }
}

@media (max-width: 480px) {
    .container {
        padding: 0 0.5rem;
    }
    
    .page-hero h1 {
        font-size: 1.8rem;
    }
    
    .vision-card, .mission-card {
        padding: 2rem;
    }
    
    .value-item, .commitment-item {
        flex-direction: column;
        text-align: center;
        gap: 1rem;
    }
    
    .value-icon, .commitment-icon {
        margin: 0 auto;
        width: 70px;
        height: 70px;
    }
    
    .value-icon i, .commitment-icon i {
        font-size: 2rem;
    }
    
    .commitment-content {
        padding: 2rem 1.5rem;
    }
}
</style>