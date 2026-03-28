<?php
/**
 * Archivo principal del sitio web
 * QPM Servicios Técnicos
 * 
 * Sistema de enrutamiento dinámico centralizado
 */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';

$currentPage = getCurrentPage();
$pageInfo = getPageInfo($currentPage);

include 'includes/header.php';

if ($currentPage === 'home') {
    echo '<link rel="stylesheet" href="' . asset('css/index.css') . '">';
}
?>

<main>
    <?php
    $pageFile = "pages/{$pageInfo['file']}";
    
    if (file_exists($pageFile)) {
        include $pageFile;
    } else {
        render404Page();
    }
    ?>
</main>

<?php
include 'includes/footer.php';

/**
 * Renderiza la página de error 404
 * @return void
 */
function render404Page(): void {
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
</body>
</html>
