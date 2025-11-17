## Objetivo
- Cargar automáticamente todos los logos desde `assets/img/clients` en la sección de clientes de `pages/home.php` manteniendo el mismo diseño y el efecto de scroll infinito.

## Enfoque
- Crear un servicio reutilizable en `includes/clients-service.php` que:
  - Lea el directorio `assets/img/clients`.
  - Filtre solo imágenes válidas (`jpg`, `jpeg`, `png`, `gif`, `webp`, `svg`).
  - Ordene de forma natural por nombre de archivo.
  - Genere el marcado `.client-logo > img` para cada imagen.
  - Duplique la lista para mantener el efecto infinito.
- Integrar el servicio en `pages/home.php` reemplazando el bloque estático entre `L50-127` por una llamada al servicio.

## Mantenimiento del diseño
- Conservar exactamente las clases y estructura existentes: `.clients-carousel`, `.clients-track`, `.client-logo` y el `<img>`.
- Mantener el efecto de animación. Para que el desplazamiento sea correcto con cualquier número de logos, definir variables CSS en línea con el conteo y reusar la misma animación:
  - Agregar `style="--logo-count: N; --logo-width: 150px; --logo-gap: 3rem;"` al contenedor `.clients-track`.
  - Redefinir `@keyframes scroll` mediante un `<style>` local usando esas variables: `transform: translateX(calc((var(--logo-width) + var(--logo-gap)) * var(--logo-count) * -1));`.
  - Resultado: el efecto infinito se ajusta automáticamente al número de imágenes sin alterar el look.

## Cambios a realizar
- Nuevo archivo: `includes/clients-service.php` con dos funciones:
  - `getClientImages(string $dir): array`
  - `renderClientLogos(array $images, string $basePath): void`
- Editar `pages/home.php` para:
  - Incluir el servicio.
  - Invocar `getClientImages` y `renderClientLogos` dentro del `<div class="clients-track">`.
  - Añadir el `<style>` de redefinición de `@keyframes scroll` justo antes de la sección de clientes (para que domine a `assets/css/index.css`).

## Especificación de implementación
- `includes/clients-service.php`:
```php
<?php
function getClientImages($dir) {
    $allowed = ['jpg','jpeg','png','gif','webp','svg'];
    $files = is_dir($dir) ? scandir($dir) : [];
    $images = [];
    foreach ($files as $f) {
        if ($f === '.' || $f === '..') continue;
        $ext = strtolower(pathinfo($f, PATHINFO_EXTENSION));
        if (in_array($ext, $allowed)) $images[] = $f;
    }
    natsort($images);
    return array_values($images);
}

function renderClientLogos($images, $basePath) {
    $count = count($images);
    echo '<div class="clients-track" style="--logo-count: '.$count.'; --logo-width: 150px; --logo-gap: 3rem;">';
    foreach ($images as $img) {
        $alt = ucwords(strtolower(trim(pathinfo($img, PATHINFO_FILENAME))));
        echo '<div class="client-logo"><img src="'.$basePath.'assets/img/clients/'.$img.'" alt="'.$alt.'"></div>';
    }
    foreach ($images as $img) {
        $alt = ucwords(strtolower(trim(pathinfo($img, PATHINFO_FILENAME))));
        echo '<div class="client-logo"><img src="'.$basePath.'assets/img/clients/'.$img.'" alt="'.$alt.'"></div>';
    }
    echo '</div>';
}
```
- `pages/home.php` (dentro de la sección de clientes):
```php
<?php include_once $basePath.'includes/clients-service.php'; ?>
<style>
@keyframes scroll { 0% { transform: translateX(0); } 100% { transform: translateX(calc((var(--logo-width) + var(--logo-gap)) * var(--logo-count) * -1)); } }
</style>
<div class="clients-carousel">
    <?php $imgs = getClientImages(__DIR__.'/../assets/img/clients'); renderClientLogos($imgs, $basePath); ?>
</div>
```

## Consideraciones
- Respeta `$basePath` definido en `includes/header.php` para rutas públicas.
- Evita incluir archivos no-imagen (por ejemplo `Nuestros Clientes.xlsx`).
- Filenames con espacios se manejan como en el código actual; se puede optimizar con `rawurlencode` si fuera necesario.

## Verificación
- Abrir `?page=home` y confirmar:
  - Se muestran todas las imágenes de `assets/img/clients`.
  - El carrusel mantiene el estilo y recorre infinitamente.
  - Al pasar el cursor se pausa la animación como antes.

¿Procedo con estos cambios?