<?php
/**
 * Archivo principal del sitio web
 * QPM Servicios Técnicos
 * 
 * Sistema de enrutamiento dinámico centralizado
 */

// Cargar configuración y funciones
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';

// Obtener página actual de forma segura
$currentPage = getCurrentPage();
$pageInfo = getPageInfo($currentPage);

// Incluir el header
include 'includes/header.php';

// Cargar CSS específico si existe
if ($currentPage === 'home') {
    echo '<link rel="stylesheet" href="' . asset('css/index.css') . '">';
}
?>

<main>
    <?php
    // Cargar contenido de la página
    $pageFile = "pages/{$pageInfo['file']}";
    
    if (file_exists($pageFile)) {
        include $pageFile;
    } else {
        // Página no encontrada - Mostrar error 404
        ?>
        <section class="page-section error-404">
            <div class="container">
                <div class="error-content">
                    <h1>404</h1>
                    <h2>Página no encontrada</h2>
                    <p>Lo sentimos, la página que buscas no existe o ha sido movida.</p>
                    <a href="<?php echo getPageUrl('home'); ?>" class="btn btn-primary">Volver al inicio</a>
                </div>
            </div>
        </section>
        <?php
    }
    ?>
</main>

<?php
// Incluir el footer
include 'includes/footer.php';
?>
</body>
</html>