<?php
/**
 * Funciones auxiliares reutilizables
 * QPM Servicios Técnicos
 */

require_once __DIR__ . '/../config/config.php';

// ==========================================
// FUNCIONES DE PÁGINA Y NAVEGACIÓN
// ==========================================

/**
 * Obtiene la página actual solicitada
 * @return string
 */
function getCurrentPage(): string {
    $page = $_GET['page'] ?? 'home';
    $sanitizedPage = preg_replace('/[^a-zA-Z0-9\-_]/', '', $page);
    
    return array_key_exists($sanitizedPage, VALID_PAGES) ? $sanitizedPage : 'home';
}

/**
 * Obtiene información de una página
 * @param string $page
 * @return array<string, string>|null
 */
function getPageInfo(string $page): ?array {
    return VALID_PAGES[$page] ?? null;
}

/**
 * Genera URL de página
 * @param string $page
 * @return string
 */
function getPageUrl(string $page): string {
    return BASE_URL . '?page=' . $page;
}

/**
 * Genera URL de asset
 * @param string $path
 * @return string
 */
function asset(string $path): string {
    return ASSETS_PATH . ltrim($path, '/');
}

/**
 * Escapa HTML para prevenir XSS
 * @param string $text
 * @return string
 */
function e(string $text): string {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

/**
 * Verifica si una página está activa
 * @param string $page
 * @return bool
 */
function isActivePage(string $page): bool {
    return getCurrentPage() === $page;
}

/**
 * Obtiene clase CSS para página activa
 * @param string $page
 * @return string
 */
function getActiveClass(string $page): string {
    return isActivePage($page) ? 'active' : '';
}

// ==========================================
// FUNCIONES DE IMÁGENES Y MEDIOS
// ==========================================

/**
 * Obtiene imágenes de un directorio
 * @param string $dir Directorio a escanear
 * @return array<int, string> Lista de archivos de imagen
 */
function getImages(string $dir): array {
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'];
    $images = [];
    
    if (!is_dir($dir)) {
        return $images;
    }
    
    $files = scandir($dir);
    
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') {
            continue;
        }
        
        $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        
        if (in_array($extension, $allowedExtensions, true)) {
            $images[] = $file;
        }
    }
    
    natsort($images);
    return array_values($images);
}

/**
 * Renderiza logos de clientes en carrusel
 * @param array<int, string> $images Array de nombres de archivo
 * @param string $basePath Ruta base
 * @return void
 */
function renderClientLogos(array $images, string $basePath = ''): void {
    $count = count($images);
    
    if ($count === 0) {
        return;
    }
    
    $cssVariables = sprintf(
        '--logo-count: %d; --logo-width: 180px; --logo-gap: 3rem;',
        $count
    );
    
    echo '<div class="clients-track" style="' . $cssVariables . '">';
    
    for ($iteration = 0; $iteration < 2; $iteration++) {
        foreach ($images as $img) {
            $alt = ucwords(strtolower(trim(pathinfo($img, PATHINFO_FILENAME))));
            $imgUrl = $basePath . 'assets/img/clients/' . rawurlencode($img);
            
            echo '<div class="client-logo">';
            echo '<img src="' . e($imgUrl) . '" alt="' . e($alt) . '" loading="lazy">';
            echo '</div>';
        }
    }
    
    echo '</div>';
}

// ==========================================
// FUNCIONES DE UTILIDAD
// ==========================================

/**
 * Obtiene el año actual
 * @return int
 */
function getCurrentYear(): int {
    return (int) date('Y');
}

/**
 * Sanitiza nombre de archivo
 * @param string $filename
 * @return string
 */
function sanitizeFilename(string $filename): string {
    return preg_replace('/[^a-zA-Z0-9\-_\.]/', '', $filename);
}

/**
 * Formatea número de teléfono
 * @param string $phone
 * @return string
 */
function formatPhone(string $phone): string {
    return preg_replace('/[^0-9+]/', '', $phone);
}

/**
 * Verifica si es solicitud AJAX
 * @return bool
 */
function isAjaxRequest(): bool {
    $requestedWith = $_SERVER['HTTP_X_REQUESTED_WITH'] ?? '';
    return strtolower($requestedWith) === 'xmlhttprequest';
}

/**
 * Redirige a una página
 * @param string $page
 * @return never
 */
function redirect(string $page = 'home'): void {
    header('Location: ' . getPageUrl($page));
    exit;
}

/**
 * Obtiene IP del cliente
 * @return string
 */
function getClientIP(): string {
    $ip = '';
    
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'] ?? '';
    }
    
    return filter_var($ip, FILTER_VALIDATE_IP) ? $ip : '0.0.0.0';
}

// ==========================================
// FUNCIONES DE RENDERIZADO
// ==========================================

/**
 * Renderiza un hero para páginas de servicio
 * @param string $title Título del hero
 * @param string $description Descripción opcional
 * @param string|null $badge Badge opcional
 * @param string|null $backgroundImage Imagen de fondo opcional
 * @return void
 */
function renderServiceHero(
    string $title, 
    string $description = '', 
    ?string $badge = null, 
    ?string $backgroundImage = null
): void {
    $style = '';
    if ($backgroundImage) {
        $style = ' style="background-image: url(\'' . e($backgroundImage) . '\');"';
    }
    
    echo '<section class="service-hero"' . $style . '>';
    echo '<div class="container">';
    
    if ($badge) {
        echo '<div class="service-hero-badge">';
        echo '<i class="fas fa-check-circle"></i>';
        echo '<span>' . e($badge) . '</span>';
        echo '</div>';
    }
    
    echo '<h1>' . e($title) . '</h1>';
    
    if ($description) {
        echo '<p>' . e($description) . '</p>';
    }
    
    echo '</div>';
    echo '</section>';
}

/**
 * Renderiza una tarjeta de servicio
 * @param string $title Título del servicio
 * @param string $tagline Eslogan corto
 * @param string $description Descripción del servicio
 * @param array<int, string> $benefits Lista de beneficios
 * @param string $imageUrl URL de la imagen
 * @param string $imageAlt Texto alternativo de la imagen
 * @return void
 */
function renderServiceCard(
    string $title,
    string $tagline,
    string $description,
    array $benefits,
    string $imageUrl,
    string $imageAlt
): void {
    echo '<div class="service-card-modern">';
    echo '<div class="service-thumb">';
    echo '<img src="' . e($imageUrl) . '" alt="' . e($imageAlt) . '">';
    echo '</div>';
    echo '<div class="service-content">';
    echo '<h3>' . e($title) . '</h3>';
    echo '<p class="service-tagline">' . e($tagline) . '</p>';
    echo '<p class="service-description">' . e($description) . '</p>';
    echo '<div class="service-benefits">';
    
    foreach ($benefits as $benefit) {
        echo '<div class="benefit-item">';
        echo '<i class="fas fa-check-circle"></i>';
        echo '<span>' . e($benefit) . '</span>';
        echo '</div>';
    }
    
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
