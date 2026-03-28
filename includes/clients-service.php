<?php
/**
 * Servicio de clientes - Funciones para manejar logos y galerías
 * QPM Servicios Técnicos
 * 
 * @deprecated Este archivo se mantiene para compatibilidad.
 *             Las nuevas implementaciones deben usar includes/functions.php
 */

require_once __DIR__ . '/functions.php';

/**
 * Obtiene imágenes de clientes de un directorio
 * @deprecated Usar getImages() de functions.php en su lugar
 * @param string $dir Directorio a escanear
 * @return array<int, string>
 */
function getClientImages(string $dir): array {
    return getImages($dir);
}
