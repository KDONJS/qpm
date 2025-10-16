<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="<?php echo $basePath; ?>assets/css/index.css">

<?php
// Sistema de enrutamiento dinámico
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Páginas válidas
$valid_pages = [
    'home' => 'Inicio',
    'nosotros' => 'Nosotros',
    'MPd' => 'MPd y Confiabilidad', 
    'ensayos' => 'Ensayos No Destructivos',
    'topografia' => 'Topografía y Geodesia',
    'inspeccion' => 'Inspección y Certificación',
    'consultoria' => 'Consultoría y Asesoramiento',
    'especializados' => 'Servicios Especializados',
    'alquiler' => 'Alquiler y Venta de Equipos',
    'boletin' => 'Boletín y Noticias',
    'nuestro-equipo' => 'Nuestro Equipo',
    'vision' => 'Visión y Misión',
    'contactenos' => 'Contáctenos'
];

// Validar que la página existe
if (!array_key_exists($page, $valid_pages)) {
    $page = 'home';
}
?>

<main>
    <?php
    // Cargar contenido dinámico según la página seleccionada
    switch($page) {
        case 'home': 
                include 'pages/home.php';
            break;
            
        default:
            // Cargar páginas dinámicamente desde la carpeta pages
            $page_file = "pages/{$page}.php";
            if (file_exists($page_file)) {
                include $page_file;
            } else {
                // Página no encontrada
                ?>
                <section class="page-section">
                    <div class="container">
                        <h1>Página no encontrada</h1>
                        <p>La página que buscas no existe.</p>
                        <a href="?" class="btn btn-primary">Volver al inicio</a>
                    </div>
                </section>
                <?php
            }
            break;
    }
    ?>
</main>

<?php include 'includes/footer.php'; ?>
</body>
</html>