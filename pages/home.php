<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Hero Section Vanguardista -->
<section class="hero-modern" id="hero-carousel">
    <!-- Carrusel de imágenes de fondo -->
    <div class="hero-carousel">
        <div class="hero-slide active" style="background-image: url('<?php echo $basePath; ?>assets/img/hero/1.jpg');"></div>
        <div class="hero-slide" style="background-image: url('<?php echo $basePath; ?>assets/img/hero/2.jpeg');"></div>
        <div class="hero-slide" style="background-image: url('<?php echo $basePath; ?>assets/img/hero/3.jpeg');"></div>
    </div>
    
    <!-- Overlay para mejor legibilidad -->
    <div class="hero-overlay"></div>
    
    <div class="container">
        <div class="hero-content">
        </div>
    </div>
    
    <!-- Indicadores del carrusel -->
    <div class="carousel-indicators">
        <button class="indicator active" data-slide="0"></button>
        <button class="indicator" data-slide="1"></button>
        <button class="indicator" data-slide="2"></button>
    </div>
    
    <!-- Controles del carrusel -->
    <div class="carousel-controls">
        <button class="carousel-btn prev-btn" id="prevBtn">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="carousel-btn next-btn" id="nextBtn">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
</section>

<!-- Sección de Clientes -->
<section class="clients-section">
    <div class="container">
        <div class="clients-header">
            <h2>Nuestros Clientes</h2>
            <p>Empresas líderes que confían en nuestros servicios</p>
        </div>
        <style>
        @keyframes scroll { 0% { transform: translateX(0); } 100% { transform: translateX(calc((var(--logo-width) + var(--logo-gap)) * var(--logo-count) * -1)); } }
        </style>
        <div class="clients-carousel">
            <?php include_once $basePath.'includes/clients-service.php'; $imgs = getClientImages(__DIR__.'/../assets/img/clients'); renderClientLogos($imgs, $basePath); ?>
        </div>
    </div>
</section>

<!-- Servicios Grid Moderno -->
<section class="services-modern">
    <div class="container">
        <div class="section-header-modern">

            <h2 class="section-title">Servicios</h2>
            <p class="section-subtitle">
                Ponemos a su disposición servicios de valor en múltiples especialidades
            </p>
        </div>
        
        <div class="services-grid-modern">
            <!-- Confiabilidad y MPd -->
            <div class="service-card-modern" data-service="predictivo">
                <div class="service-icon-modern">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="service-content">
                    <h3>Confiabilidad y MPd</h3>
                    <p class="service-tagline">Anticipamos errores y aseguramos el funcionamiento de tus equipos.</p>
                    <p class="service-description">
                        Analizamos datos para detectar anomalías en el funcionamiento de los equipos.
                    </p>
                    <div class="service-benefits">
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Análisis Vibracional</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Termografía Infrarroja</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Alineamiento de Máquinas</span>
                        </div>
                    </div>
                </div>
                <a href="?page=MPd" class="service-link">
                    <span>Ver más</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <!-- Ensayos No Destructivos (END) -->
            <div class="service-card-modern" data-service="ensayos">
                <div class="service-icon-modern">
                    <i class="fas fa-search"></i>
                </div>
                <div class="service-content">
                    <h3>Ensayos No Destructivos (END)</h3>
                    <p class="service-tagline">Sin integridad no hay éxito.</p>
                    <p class="service-description">
                        Evaluamos la integridad y las propiedades de materiales o componentes sin dañar el objeto.
                    </p>
                    <div class="service-benefits">
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Inspección Visual</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Partículas Magnéticas</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Ultrasonido y Radiografía</span>
                        </div>
                    </div>
                </div>
                <a href="?page=ensayos" class="service-link">
                    <span>Ver más</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <!-- Inspección y Certificación de Equipos -->
            <div class="service-card-modern" data-service="inspeccion">
                <div class="service-icon-modern">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <div class="service-content">
                    <h3>Inspección y Certificación de Equipos</h3>
                    <p class="service-tagline">No tenemos límites para la inspección de equipos</p>
                    <p class="service-description">
                        Evaluamos el funcionamiento de equipos para identificar riesgos potenciales, fallas o defectos.
                    </p>
                    <div class="service-benefits">
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Equipos de Izaje y Manejo de Cargas</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Recipientes a Presión</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Recipientes a Presión Atmosférica</span>
                        </div>
                    </div>
                </div>
                <a href="?page=inspeccion" class="service-link">
                    <span>Ver más</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <!-- Topografía, Geodesia y Medición Láser 3D -->
            <div class="service-card-modern" data-service="topografia">
                <div class="service-icon-modern">
                    <i class="fas fa-map-marked-alt"></i>
                </div>
                <div class="service-content">
                    <h3>Topografía, Geodesia y Medición Láser 3D</h3>
                    <p class="service-tagline">Ponemos a tu alcance alta tecnología, precisión y pasión.</p>
                    <p class="service-description">
                        Brindamos soluciones tecnológicas en topografía y geodesia en diversos proyectos a nivel nacional.
                    </p>
                    <div class="service-benefits">
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Levantamiento Topográfico</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Topografía con drones</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Medición 3D con láser</span>
                        </div>
                    </div>
                </div>
                <a href="?page=topografia" class="service-link">
                    <span>Ver más</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <!-- Consultoría y Asesoramiento -->
            <div class="service-card-modern" data-service="consultoria">
                <div class="service-icon-modern">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <div class="service-content">
                    <h3>Consultoría y Asesoramiento</h3>
                    <p class="service-tagline">Convertimos tu idea o proyecto en realidad</p>
                    <p class="service-description">
                        Desarrollamos soluciones para tu empresa, trabajando juntos de la mejor manera de implementación e inversión.
                    </p>
                    <div class="service-benefits">
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Integridad Mecánica</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Planes de Inspección</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Control de Calidad</span>
                        </div>
                    </div>
                </div>
                <a href="?page=consultoria" class="service-link">
                    <span>Ver más</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <!-- Servicios Especializados -->
            <div class="service-card-modern" data-service="especializados">
                <div class="service-icon-modern">
                    <i class="fas fa-cogs"></i>
                </div>
                <div class="service-content">
                    <h3>Servicios Especializados</h3>
                    <p class="service-tagline">Somos los expertos</p>
                    <p class="service-description">
                        Desarrollamos tus proyectos con eficiencia, seguridad y calidad.
                    </p>
                    <div class="service-benefits">
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Tratamiento Térmico</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Montajes Críticos</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Mantenimiento de Grúas</span>
                        </div>
                    </div>
                </div>
                <a href="?page=especializados" class="service-link">
                    <span>Ver más</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <!-- Alquiler y Venta de Equipos & Calibraciones -->
            <div class="service-card-modern" data-service="alquiler">
                <div class="service-icon-modern">
                    <i class="fas fa-tools"></i>
                </div>
                <div class="service-content">
                    <h3>Alquiler y Venta de Equipos & Calibraciones</h3>
                    <p class="service-tagline">Tecnología a tu alcance, sin complicaciones.</p>
                    <p class="service-description">
                        Venta y alquiler de Equipos de Inspección y Gestión de Calibración Electrónica fuera de Perú.
                    </p>
                    <div class="service-benefits">
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Venta de Equipos</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Alquiler de Equipos</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Calibración Electrónica</span>
                        </div>
                    </div>
                </div>
                <a href="?page=alquiler" class="service-link">
                    <span>Ver más</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript para el carrusel del hero -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.hero-slide');
    const indicators = document.querySelectorAll('.indicator');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    
    let currentSlide = 0;
    let slideInterval;
    
    // Función para mostrar slide específico
    function showSlide(index) {
        // Remover clase active de todos los slides e indicadores
        slides.forEach(slide => slide.classList.remove('active'));
        indicators.forEach(indicator => indicator.classList.remove('active'));
        
        // Agregar clase active al slide e indicador actual
        slides[index].classList.add('active');
        indicators[index].classList.add('active');
        
        currentSlide = index;
    }
    
    // Función para ir al siguiente slide
    function nextSlide() {
        const next = (currentSlide + 1) % slides.length;
        showSlide(next);
    }
    
    // Función para ir al slide anterior
    function prevSlide() {
        const prev = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(prev);
    }
    
    // Función para iniciar el carrusel automático
    function startCarousel() {
        slideInterval = setInterval(nextSlide, 5000); // Cambiar cada 5 segundos
    }
    
    // Función para detener el carrusel automático
    function stopCarousel() {
        clearInterval(slideInterval);
    }
    
    // Event listeners para los controles
    nextBtn.addEventListener('click', () => {
        nextSlide();
        stopCarousel();
        startCarousel(); // Reiniciar el timer
    });
    
    prevBtn.addEventListener('click', () => {
        prevSlide();
        stopCarousel();
        startCarousel(); // Reiniciar el timer
    });
    
    // Event listeners para los indicadores
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            showSlide(index);
            stopCarousel();
            startCarousel(); // Reiniciar el timer
        });
    });
    
    // Pausar carrusel al hacer hover sobre el hero
    const heroSection = document.getElementById('hero-carousel');
    heroSection.addEventListener('mouseenter', stopCarousel);
    heroSection.addEventListener('mouseleave', startCarousel);
    
    // Iniciar el carrusel automático
    startCarousel();
    
    // Soporte para navegación con teclado
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            prevSlide();
            stopCarousel();
            startCarousel();
        } else if (e.key === 'ArrowRight') {
            nextSlide();
            stopCarousel();
            startCarousel();
        }
    });
});
</script>