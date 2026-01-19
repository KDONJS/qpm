<?php
/**
 * Componente Hero reutilizable para páginas de servicios
 * QPM Servicios Técnicos
 * 
 * Variables requeridas:
 * @var string $title - Título principal del hero
 * @var string $description - Descripción del servicio (opcional)
 * @var string $badge - Texto del badge (opcional)
 * @var string $backgroundImage - URL de la imagen de fondo (opcional)
 */

// Valores por defecto si no se pasan parámetros
$title = $title ?? 'Nuestros Servicios';
$description = $description ?? '';
$badge = $badge ?? null;
$backgroundImage = $backgroundImage ?? null;

// Construir estilo de fondo
$heroStyle = '';
if ($backgroundImage) {
    $heroStyle = ' style="background-image: url(\'' . htmlspecialchars($backgroundImage, ENT_QUOTES, 'UTF-8') . '\');"';
}
?>

<style>
/* Hero Section con imagen de fondo */
.service-hero {
    background: var(--dark-blue);
    color: var(--white);
    padding: 4rem 0;
    text-align: center;
    position: relative;
    overflow: hidden;
    min-height: 50vh;
    display: flex;
    align-items: center;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

/* Overlay semitransparente */
.service-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, 
        rgba(47, 66, 144, 0.67) 0%);
    z-index: 1;
}

/* Patrón decorativo opcional */
.service-hero::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: 
        radial-gradient(circle at 25% 25%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
    z-index: 1;
}

.service-hero .container {
    position: relative;
    z-index: 2;
    max-width: 800px;
}

.service-hero h1 {
    font-family: 'Poppins', sans-serif;
    font-size: clamp(2.5rem, 5vw, 3.5rem);
    font-weight: 800;
    margin-bottom: 1.5rem;
    line-height: 1.1;
    color: var(--white);
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

.service-hero p {
    font-family: 'Poppins', sans-serif;
    font-size: clamp(1.1rem, 2.5vw, 1.3rem);
    opacity: 0.95;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
    color: var(--white);
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
}

.service-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    padding: 0.8rem 1.5rem;
    border-radius: 50px;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    margin-bottom: 2rem;
    border: 1px solid rgba(255, 255, 255, 0.2);
    font-size: 0.9rem;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.service-hero-badge i {
    color: var(--lime);
    filter: drop-shadow(0 0 4px rgba(12, 175, 113, 0.5));
}

@media (max-width: 768px) {
    .service-hero {
        padding: 3rem 0;
        min-height: 40vh;
    }
    
    .service-hero h1 {
        margin-bottom: 1rem;
    }
    
    .service-hero-badge {
        margin-bottom: 1.5rem;
        padding: 0.6rem 1.2rem;
        font-size: 0.85rem;
    }
}

@media (max-width: 480px) {
    .service-hero {
        padding: 2rem 0;
        min-height: 35vh;
    }
}
</style>

<section class="service-hero"<?php echo $heroStyle; ?>>
    <div class="container">
        <?php if ($badge): ?>
            <div class="service-hero-badge">
                <i class="fas fa-star"></i>
                <span><?php echo htmlspecialchars($badge, ENT_QUOTES, 'UTF-8'); ?></span>
            </div>
        <?php endif; ?>
        
        <h1><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></h1>
        
        <?php if ($description): ?>
            <p><?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?></p>
        <?php endif; ?>
    </div>
</section>