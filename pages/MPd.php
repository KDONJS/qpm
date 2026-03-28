<?php
/**
 * Página de MPd y Confiabilidad
 * QPM Servicios Técnicos
 */

$title = 'MPd y Confiabilidad';
$description = 'Tecnología avanzada de análisis predictivo para maximizar la confiabilidad operacional';
$backgroundImage = 'assets/img/servicios/1.jpg';

include __DIR__ . '/../includes/hero-service.php';
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/mpd-services.css">

<main>
    <section class="section">
        <div class="container">
            <div class="section-header-modern">
                <h2>Servicios Especializados</h2>
                <p>
                    Analizamos datos para detectar anomalías en el funcionamiento de los equipos. Esto permite solucionar problemas antes de que ocurran, lo que aumenta la vida útil de los equipos y reduce costos.
                    Además aseguramos que los equipos puedan cumplir su función designada, durante un periodo establecido y bajo condiciones predeterminadas.
                </p>
            </div>
            
            <div class="section-intro-left">
                <h3>Gestión y Ejecución de la Confiabilidad y/o Mantenimiento Predictivo Plantas Procesadoras</h3>
            </div>

            <div class="services-grid-modern">
                <?php echo renderMpdServiceCards(); ?>
            </div>
        </div>
    </section>
</main>

<?php
/**
 * Renderiza las tarjetas de servicios de MPd
 * @return string
 */
function renderMpdServiceCards(): string {
    $services = getMpdServices();
    $html = '';
    
    foreach ($services as $service) {
        $html .= renderMpdServiceCard($service);
    }
    
    return $html;
}

/**
 * Renderiza una tarjeta de servicio MPd
 * @param array<string, string> $service
 * @return string
 */
function renderMpdServiceCard(array $service): string {
    $imageUrl = BASE_URL . 'assets/img/mpd/' . $service['image'];
    
    return '<div class="service-card-modern">' .
           '<div class="service-thumb">' .
           '<img src="' . $imageUrl . '" alt="' . $service['title'] . '" />' .
           '</div>' .
           '<div class="service-content">' .
           '<h3>' . $service['title'] . '</h3>' .
           '<div class="service-definition">' .
           '<div class="definition-content">' . $service['description'] . '</div>' .
           '</div>' .
           '</div>' .
           '</div>';
}

/**
 * Obtiene los datos de los servicios MPd
 * @return array<int, array<string, string>>
 */
function getMpdServices(): array {
    return [
        [
            'title' => 'Análisis Vibracional Convencional y Avanzado',
            'image' => '1A.jpg',
            'description' => 'El Análisis de Vibración es una técnica utilizada para identificar y predecir anomalías mecánicas en maquinaria industrial, midiendo la vibración e identificando las frecuencias involucradas.'
        ],
        [
            'title' => 'Termografía Infrarroja',
            'image' => '2A.jpg',
            'description' => 'La Termografía Infrarroja mide la temperatura de la superficie de los componentes eléctricos y mecánicos mediante tecnologías de escaneo visual de infrarrojos altamente especializada.'
        ],
        [
            'title' => 'Alineamiento de Máquinas: Ejes Colineales, Ejes Paralelos, Engranajes',
            'image' => '3A.jpg',
            'description' => 'El alineamiento de ejes es un proceso que se realiza para ajustar los ejes de una máquina con el fin de que los componentes rotativos estén alineados. Esto ayuda a que la máquina funcione de manera óptima.'
        ],
        [
            'title' => 'Ultrasonido Acústico',
            'image' => '4A.jpg',
            'description' => 'El ultrasonido acústico opera emitiendo ondas sonoras de alta frecuencia a través de un transductor. Estas ondas viajan a través de los materiales y generan eco al encontrar discontinuidades.'
        ],
        [
            'title' => 'Verificaciones Geométricas con Láser: Planitud, Rectitud, Verticalidad, Paralelismo, Concentricidad',
            'image' => '5A.jpg',
            'description' => 'Las verificaciones geométricas son procesos que buscan identificar errores de posicionamiento y trayectoria en objetos o máquinas con sistema láser de alta precisión y fácil uso.'
        ],
        [
            'title' => 'Balanceo Dinámico In Situ',
            'image' => '6A.jpg',
            'description' => 'Técnica de mantenimiento que permite equilibrar equipos rotativos sin necesidad de desmontarlos. Se utiliza para reducir la vibración y mejorar el funcionamiento de las máquinas.'
        ],
        [
            'title' => 'Sistemas de monitoreo remoto de vibraciones y termografía insitu',
            'image' => '7A.png',
            'description' => 'Los sistemas de monitoreo remoto son dispositivos que se instalan en máquinas para monitorizar sus vibraciones, temperatura y otros parámetros para optimizar el mantenimiento.'
        ],
        [
            'title' => 'Medición Elongación de pernos en molinos',
            'image' => '8A.jpg',
            'description' => 'La elongación de pernos se refiere al estiramiento que experimentan los pernos al ser apretados. Se mide con un medidor ultrasónico para conocer la tensión o carga generada.'
        ],
        [
            'title' => 'Análisis de aceites',
            'image' => '9A.jpg',
            'description' => 'Técnica de mantenimiento que mediante el análisis de muestras de aceite de máquinas permite conocer el nivel de contaminación y degradación de los aceites.'
        ],
    ];
}
