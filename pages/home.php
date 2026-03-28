<?php
/**
 * Página de inicio
 * QPM Servicios Técnicos
 */

require_once __DIR__ . '/../includes/clients-service.php';

$heroImages = getHeroImages();
$clientLogos = getClientImages(__DIR__ . '/../assets/img/clients');
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/index.css">

<?php echo renderHeroSection($heroImages); ?>
<?php echo renderClientsSection($clientLogos); ?>
<?php echo renderServicesSection(); ?>

<script src="<?php echo BASE_URL; ?>assets/js/hero-carousel.js"></script>

<?php
/**
 * Obtiene las imágenes del hero carousel
 * @return array<int, string>
 */
function getHeroImages(): array {
    $heroDir = __DIR__ . '/../assets/img/hero';
    return getImages($heroDir);
}

/**
 * Renderiza la sección hero con el carousel
 * @param array<int, string> $images
 * @return string
 */
function renderHeroSection(array $images): string {
    $html = '<section class="hero-modern" id="hero-carousel">';
    $html .= '<div class="hero-carousel">';
    
    foreach ($images as $index => $image) {
        $activeClass = $index === 0 ? ' active' : '';
        $imageUrl = BASE_URL . 'assets/img/hero/' . rawurlencode($image);
        $html .= '<div class="hero-slide' . $activeClass . '" style="background-image: url(\'' . $imageUrl . '\');"></div>';
    }
    
    $html .= '</div>';
    $html .= '<div class="container"><div class="hero-content"></div></div>';
    $html .= renderCarouselIndicators(count($images));
    $html .= renderCarouselControls();
    $html .= '</section>';
    
    return $html;
}

/**
 * Renderiza los indicadores del carousel
 * @param int $count
 * @return string
 */
function renderCarouselIndicators(int $count): string {
    if ($count === 0) {
        return '';
    }
    
    $html = '<div class="carousel-indicators">';
    
    for ($i = 0; $i < $count; $i++) {
        $activeClass = $i === 0 ? ' active' : '';
        $html .= '<button class="indicator' . $activeClass . '" data-slide="' . $i . '"></button>';
    }
    
    $html .= '</div>';
    
    return $html;
}

/**
 * Renderiza los controles del carousel
 * @return string
 */
function renderCarouselControls(): string {
    return '<div class="carousel-controls">' .
           '<button class="carousel-btn prev-btn" id="prevBtn"><i class="fas fa-chevron-left"></i></button>' .
           '<button class="carousel-btn next-btn" id="nextBtn"><i class="fas fa-chevron-right"></i></button>' .
           '</div>';
}

/**
 * Renderiza la sección de clientes
 * @param array<int, string> $images
 * @return string
 */
function renderClientsSection(array $images): string {
    $html = '<section class="clients-section">';
    $html .= '<div class="container">';
    $html .= '<div class="clients-header">';
    $html .= '<h2>Nuestros Clientes</h2>';
    $html .= '<p>Empresas líderes que confían en nuestros servicios</p>';
    $html .= '</div>';
    $html .= '<div class="clients-carousel">';
    ob_start();
    renderClientLogos($images, BASE_URL);
    $html .= (string) ob_get_clean();
    $html .= '</div>';
    $html .= '</div>';
    $html .= '<style>@keyframes scroll{0%{transform:translateX(0)}100%{transform:translateX(calc((var(--logo-width) + var(--logo-gap)) * var(--logo-count) * -1))}}</style>';
    $html .= '</section>';
    
    return $html;
}

/**
 * Renderiza la sección de servicios
 * @return string
 */
function renderServicesSection(): string {
    $services = getServicesData();
    
    $html = '<section class="services-modern">';
    $html .= '<div class="container">';
    $html .= '<div class="section-header-modern">';
    $html .= '<h2 class="section-title">Servicios</h2>';
    $html .= '<p class="section-subtitle">Ponemos a su disposición servicios de valor en múltiples especialidades</p>';
    $html .= '</div>';
    $html .= renderServiceStyles();
    $html .= '<div class="services-grid-modern">';
    
    foreach ($services as $service) {
        $html .= renderHomeServiceCard($service);
    }
    
    $html .= '</div>';
    $html .= '</div>';
    $html .= '</section>';
    
    return $html;
}

/**
 * Renderiza los estilos específicos de servicios
 * @return string
 */
function renderServiceStyles(): string {
    return '<style>' .
           '.service-thumb{width:100%;height:220px;border-radius:14px;overflow:hidden;margin-bottom:1.2rem;background:var(--accent-color)}' .
           '.service-thumb img{width:100%;height:100%;object-fit:cover;object-position:center center;display:block;transition:transform .35s ease}' .
           '.services-grid-modern .service-card-modern{animation:none}' .
           '.services-grid-modern .service-card-modern:hover{transform:translateY(-6px)}' .
           '.services-grid-modern .service-card-modern:hover .service-thumb img{transform:scale(1.04)}' .
           '.services-modern .services-grid-modern{display:grid;grid-template-columns:repeat(auto-fit,minmax(380px,1fr));gap:1.5rem}' .
           '.services-modern .service-card-modern{padding:1.2rem}' .
           '@media(max-width:768px){' .
           '.services-modern .services-grid-modern{grid-template-columns:1fr;gap:1.5rem}' .
           '.service-thumb{height:200px}' .
           '.services-modern .service-card-modern{padding:1rem}' .
           '}' .
           '</style>';
}

/**
 * Renderiza una tarjeta de servicio para la página de inicio
 * @param array<string, mixed> $service
 * @return string
 */
function renderHomeServiceCard(array $service): string {
    $html = '<article class="service-card-modern" data-service="' . $service['id'] . '">';
    $html .= '<div class="service-thumb">';
    $html .= '<img src="' . BASE_URL . 'assets/img/servicios/' . $service['image'] . '" alt="' . $service['title'] . '">';
    $html .= '</div>';
    $html .= '<div class="service-content">';
    $html .= '<h3>' . $service['title'] . '</h3>';
    $html .= '<p class="service-tagline">' . $service['tagline'] . '</p>';
    $html .= '<p class="service-description">' . $service['description'] . '</p>';
    $html .= '<div class="service-benefits">';
    
    foreach ($service['benefits'] as $benefit) {
        $html .= '<div class="benefit-item"><i class="fas fa-check-circle"></i><span>' . $benefit . '</span></div>';
    }
    
    $html .= '</div>';
    $html .= '</div>';
    $html .= '</article>';
    
    return $html;
}

/**
 * Obtiene los datos de los servicios
 * @return array<int, array<string, mixed>>
 */
function getServicesData(): array {
    return [
        [
            'id' => 'predictivo',
            'page' => 'MPd',
            'title' => 'Confiabilidad y MPd',
            'tagline' => 'Anticipamos defectos y aseguramos el funcionamiento de tus equipos.',
            'description' => 'Analizamos datos para detectar anomalías en el funcionamiento de los equipos.',
            'image' => '1.jpg',
            'benefits' => ['Análisis Vibracional', 'Termografía Infrarroja', 'Alineamiento de Máquinas']
        ],
        [
            'id' => 'ensayos',
            'page' => 'ensayos',
            'title' => 'Ensayos No Destructivos (END)',
            'tagline' => 'Sin integridad no hay éxito.',
            'description' => 'Evaluamos la integridad y las propiedades de materiales o componentes sin dañar el objeto.',
            'image' => 'ensayos.png',
            'benefits' => ['Inspección Visual', 'Partículas Magnéticas', 'Ultrasonido y Radiografía']
        ],
        [
            'id' => 'inspeccion',
            'page' => 'inspeccion',
            'title' => 'Inspección y Certificación de Equipos',
            'tagline' => 'No tenemos límites para la inspección de equipos',
            'description' => 'Evaluamos el funcionamiento de equipos para identificar riesgos potenciales, fallas o defectos.',
            'image' => 'inspeccion.png',
            'benefits' => ['Equipos de Izaje y Manejo de Cargas', 'Recipientes a Presión', 'Recipientes a Presión Atmosférica']
        ],
        [
            'id' => 'topografia',
            'page' => 'topografia',
            'title' => 'Topografía, Geodesia y Medición Láser 3D',
            'tagline' => 'Ponemos a tu alcance alta tecnología, precisión y pasión.',
            'description' => 'Brindamos soluciones tecnológicas en topografía y geodesia en diversos proyectos a nivel nacional.',
            'image' => 'topografia.png',
            'benefits' => ['Levantamiento Topográfico', 'Topografía con drones', 'Medición 3D con láser']
        ],
        [
            'id' => 'consultoria',
            'page' => 'consultoria',
            'title' => 'Consultoría y Asesoramiento',
            'tagline' => 'Convertimos tu idea o proyecto en realidad',
            'description' => 'Desarrollamos soluciones para tu empresa, trabajando juntos de la mejor manera de implementación e inversión.',
            'image' => 'consultorioa.jpeg',
            'benefits' => ['Integridad Mecánica', 'Planes de Inspección', 'Control de Calidad']
        ],
        [
            'id' => 'especializados',
            'page' => 'especializados',
            'title' => 'Servicios Especializados',
            'tagline' => 'Somos los expertos',
            'description' => 'Desarrollamos tus proyectos con eficiencia, seguridad y calidad.',
            'image' => 'servicios.png',
            'benefits' => ['Tratamiento Térmico', 'Montajes Críticos', 'Mantenimiento de Grúas']
        ],
        [
            'id' => 'alquiler',
            'page' => 'alquiler',
            'title' => 'Alquiler y Venta de Equipos & Calibraciones',
            'tagline' => 'Tecnología a tu alcance, sin complicaciones.',
            'description' => 'Venta y alquiler de Equipos de Inspección y Gestión de Calibración Electrónica fuera de Perú.',
            'image' => 'alquiler.jpg',
            'benefits' => ['Venta de Equipos', 'Alquiler de Equipos', 'Calibraciones en el extranjero']
        ],
    ];
}
