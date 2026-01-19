<?php
/**
 * Funciones auxiliares reutilizables
 * QPM Servicios Técnicos
 */

// Requerir configuración
require_once __DIR__ . '/../config/config.php';

/**
 * Obtiene imágenes de un directorio
 * @param string $dir Directorio a escanear
 * @return array Lista de archivos de imagen
 */
function getImages($dir) {
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
        
        if (in_array($extension, $allowedExtensions)) {
            $images[] = $file;
        }
    }
    
    natsort($images);
    return array_values($images);
}

/**
 * Renderiza logos de clientes en carrusel
 * @param array $images Array de nombres de archivo
 * @param string $basePath Ruta base
 * @return void
 */
function renderClientLogos($images, $basePath = '') {
    $count = count($images);
    
    if ($count === 0) {
        return;
    }
    
    echo '<div class="clients-track" style="--logo-count: ' . $count . '; --logo-width: 180px; --logo-gap: 3rem;">';
    
    // Renderizar dos veces para efecto de loop infinito
    for ($i = 0; $i < 2; $i++) {
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

/**
 * Renderiza un hero para páginas de servicio
 * @param string $title Título del hero
 * @param string $description Descripción opcional
 * @param string $badge Badge opcional
 * @param string $backgroundImage Imagen de fondo opcional
 * @return void
 */
function renderServiceHero($title, $description = '', $badge = null, $backgroundImage = null) {
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
 * Obtiene el año actual
 * @return int
 */
function getCurrentYear() {
    return date('Y');
}

/**
 * Verifica si una página está activa
 * @param string $page
 * @return bool
 */
function isActivePage($page) {
    return getCurrentPage() === $page;
}

/**
 * Obtiene clase CSS para página activa
 * @param string $page
 * @return string
 */
function getActiveClass($page) {
    return isActivePage($page) ? 'active' : '';
}

/**
 * Sanitiza nombre de archivo
 * @param string $filename
 * @return string
 */
function sanitizeFilename($filename) {
    return preg_replace('/[^a-zA-Z0-9\-_\.]/', '', $filename);
}

/**
 * Formatea número de teléfono
 * @param string $phone
 * @return string
 */
function formatPhone($phone) {
    return preg_replace('/[^0-9+]/', '', $phone);
}

/**
 * Verifica si es solicitud AJAX
 * @return bool
 */
function isAjaxRequest() {
    return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
           strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
}

/**
 * Redirige a una página
 * @param string $page
 * @return void
 */
function redirect($page = 'home') {
    header('Location: ' . getPageUrl($page));
    exit;
}

/**
 * Obtiene IP del cliente
 * @return string
 */
function getClientIP() {
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
