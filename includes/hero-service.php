<?php
/**
 * Componente Hero reutilizable para páginas de servicios
 * QPM Servicios Técnicos
 * 
 * Variables requeridas (opcionales, tienen valores por defecto):
 * @var string $title Título principal del hero
 * @var string $description Descripción del servicio
 * @var string|null $badge Texto del badge
 * @var string|null $backgroundImage URL de la imagen de fondo
 */

$title = $title ?? 'Nuestros Servicios';
$description = $description ?? '';
$badge = $badge ?? null;
$backgroundImage = $backgroundImage ?? null;

$heroStyle = $backgroundImage 
    ? ' style="background-image: url(\'' . e($backgroundImage) . '\');"' 
    : '';
?>

<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/hero-service.css">

<section class="service-hero"<?php echo $heroStyle; ?>>
    <div class="container">
        <?php if ($badge): ?>
            <div class="service-hero-badge">
                <i class="fas fa-star"></i>
                <span><?php echo e($badge); ?></span>
            </div>
        <?php endif; ?>
        
        <h1><?php echo e($title); ?></h1>
        
        <?php if ($description): ?>
            <p><?php echo e($description); ?></p>
        <?php endif; ?>
    </div>
</section>
