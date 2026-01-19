<?php
/**
 * Servicio de clientes - Funciones para manejar logos y galerías
 * QPM Servicios Técnicos
 * 
 * Este archivo mantiene la compatibilidad con el código legacy
 * mientras que las nuevas implementaciones deben usar includes/functions.php
 */

// Cargar funciones centralizadas
require_once __DIR__ . '/functions.php';

/**
 * Obtiene imágenes de clientes de un directorio
 * @deprecated Usar getImages() de functions.php en su lugar
 * @param string $dir Directorio a escanear
 * @return array
 */
function getClientImages($dir) {
    return getImages($dir);
}

/**
 * Alias para mantener compatibilidad
 * Las nuevas implementaciones deben usar getImages() directamente
 */