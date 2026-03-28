<?php
/**
 * Archivo de configuración central
 * QPM Servicios Técnicos
 * 
 * Este archivo contiene todas las configuraciones globales del sitio
 * NOTA: Las funciones auxiliares se han movido a includes/functions.php
 */

// Prevenir acceso directo
if (!defined('QPM_INIT')) {
    define('QPM_INIT', true);
}

// ==========================================
// CONFIGURACIÓN DE RUTAS
// ==========================================

/** @var string Ruta base del proyecto */
define('BASE_PATH', dirname(__DIR__) . '/');

/** @var string URL base detectada automáticamente */
$scriptDirectory = basename(dirname($_SERVER['PHP_SELF']));
$baseUrl = ($scriptDirectory === 'pages') ? '../' : '';
define('BASE_URL', $baseUrl);

// ==========================================
// CONFIGURACIÓN DE PÁGINAS
// ==========================================

/** @var array<string, array{title: string, file: string, meta_description: string}> */
define('VALID_PAGES', [
    'home' => [
        'title' => 'Inicio',
        'file' => 'home.php',
        'meta_description' => 'QPM Servicios Técnicos - Calidad y Precisión en Medición'
    ],
    'nosotros' => [
        'title' => 'Nosotros',
        'file' => 'nosotros.php',
        'meta_description' => 'Conoce más sobre QPM y nuestro equipo de profesionales'
    ],
    'nuestro-equipo' => [
        'title' => 'Nuestro Equipo',
        'file' => 'nuestro-equipo.php',
        'meta_description' => 'Equipo profesional certificado de QPM'
    ],
    'vision' => [
        'title' => 'Visión y Misión',
        'file' => 'vision.php',
        'meta_description' => 'Nuestra visión y misión en QPM'
    ],
    'MPd' => [
        'title' => 'MPd y Confiabilidad',
        'file' => 'MPd.php',
        'meta_description' => 'Servicios de Mantenimiento Predictivo y Confiabilidad'
    ],
    'ensayos' => [
        'title' => 'Ensayos No Destructivos',
        'file' => 'ensayos.php',
        'meta_description' => 'Ensayos No Destructivos especializados'
    ],
    'topografia' => [
        'title' => 'Topografía y Geodesia',
        'file' => 'topografia.php',
        'meta_description' => 'Servicios de topografía y geodesia de precisión'
    ],
    'inspeccion' => [
        'title' => 'Inspección y Certificación',
        'file' => 'inspeccion.php',
        'meta_description' => 'Inspección y certificación de equipos industriales'
    ],
    'consultoria' => [
        'title' => 'Consultoría y Asesoramiento',
        'file' => 'consultoria.php',
        'meta_description' => 'Consultoría técnica especializada'
    ],
    'especializados' => [
        'title' => 'Servicios Especializados',
        'file' => 'especializados.php',
        'meta_description' => 'Servicios técnicos especializados'
    ],
    'alquiler' => [
        'title' => 'Alquiler y Venta de Equipos',
        'file' => 'alquiler.php',
        'meta_description' => 'Alquiler y venta de equipos de medición'
    ],
    'boletin' => [
        'title' => 'Boletín y Noticias',
        'file' => 'boletin.php',
        'meta_description' => 'Últimas noticias y boletines de QPM'
    ],
    'contactenos' => [
        'title' => 'Contáctenos',
        'file' => 'contactenos.php',
        'meta_description' => 'Contacta con QPM Servicios Técnicos'
    ]
]);

// ==========================================
// INFORMACIÓN DE CONTACTO
// ==========================================

define('COMPANY_NAME', 'QPM Servicios Técnicos');
define('COMPANY_EMAIL', 'ventas@qpmsac.com.pe');
define('COMPANY_PHONE', '+51 940 061 321');
define('COMPANY_WHATSAPP', '51940061321');
define('COMPANY_ADDRESS', 'La Molina, Lima');
define('COMPANY_LINKEDIN', 'https://www.linkedin.com/company/qpm-sacperu');
define('COMPANY_WEBSITE', 'https://www.qpmsac.com.pe');

// ==========================================
// CONFIGURACIÓN DE ASSETS
// ==========================================

define('ASSETS_PATH', BASE_URL . 'assets/');
define('CSS_PATH', ASSETS_PATH . 'css/');
define('JS_PATH', ASSETS_PATH . 'js/');
define('IMG_PATH', ASSETS_PATH . 'img/');

// ==========================================
// CONFIGURACIÓN DE SEGURIDAD
// ==========================================

ini_set('session.cookie_httponly', '1');
ini_set('session.cookie_secure', '1');
ini_set('session.use_strict_mode', '1');
