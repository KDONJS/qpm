# QPM Servicios Técnicos - Estándares de Código

## 📋 Tabla de Contenidos
- [Estructura del Proyecto](#estructura-del-proyecto)
- [Estándares de Código](#estándares-de-código)
- [Sistema de Configuración](#sistema-de-configuración)
- [Creación de Páginas](#creación-de-páginas)
- [Estilos CSS](#estilos-css)
- [Funciones y Helpers](#funciones-y-helpers)
- [Seguridad](#seguridad)

## 🗂️ Estructura del Proyecto

```
qpm/
├── config/
│   └── config.php          # Configuración central del sistema
├── includes/
│   ├── header.php          # Header global
│   ├── footer.php          # Footer global
│   ├── functions.php       # Funciones auxiliares reutilizables
│   ├── hero-service.php    # Componente hero para páginas
│   └── clients-service.php # Funciones de clientes (legacy)
├── pages/
│   ├── _template.php       # Plantilla estándar para nuevas páginas
│   ├── home.php
│   ├── servicios.php
│   └── ...                 # Otras páginas
├── assets/
│   ├── css/
│   │   ├── variables.css   # Variables CSS globales
│   │   ├── style.css       # Estilos principales
│   │   └── ...
│   ├── img/
│   └── js/
├── index.php               # Archivo principal - Router
└── nosotros.php            # Redirección legacy
```

## 📝 Estándares de Código

### PHP

#### 1. Estructura de Archivos
Todos los archivos PHP deben seguir esta estructura:

```php
<?php
/**
 * Título del archivo
 * QPM Servicios Técnicos
 * 
 * Descripción breve del propósito del archivo
 */

// Cargar dependencias necesarias
require_once __DIR__ . '/../config/config.php';

// Código del archivo
?>
```

#### 2. Nomenclatura
- **Variables**: camelCase (`$currentPage`, `$pageInfo`)
- **Funciones**: camelCase (`getCurrentPage()`, `getPageUrl()`)
- **Constantes**: UPPER_SNAKE_CASE (`BASE_PATH`, `COMPANY_NAME`)
- **Archivos**: kebab-case (`hero-service.php`, `clients-service.php`)

#### 3. Buenas Prácticas
- ✅ Usar comillas simples para strings simples
- ✅ Escapar todo output HTML con `htmlspecialchars()` o función `e()`
- ✅ Validar y sanitizar todas las entradas de usuario
- ✅ Usar constantes para valores que no cambian
- ✅ Comentar código complejo
- ❌ NO usar variables globales
- ❌ NO mezclar lógica con presentación
- ❌ NO usar includes sin verificar existencia del archivo

## ⚙️ Sistema de Configuración

### config/config.php
Archivo central que contiene:
- Constantes del sistema
- Configuración de rutas
- Información de contacto
- Definición de páginas válidas
- Funciones auxiliares básicas

### Uso:
```php
// En cualquier archivo PHP
require_once __DIR__ . '/../config/config.php';

// Acceder a configuración
echo COMPANY_NAME;
echo BASE_URL;
$currentPage = getCurrentPage();
```

## 📄 Creación de Páginas

### 1. Usar la Plantilla
Copiar `pages/_template.php` como punto de partida:

```bash
cp pages/_template.php pages/nueva-pagina.php
```

### 2. Estructura Estándar
Cada página debe seguir este orden:

```php
<?php
/**
 * Página: Nombre de la Página
 * QPM Servicios Técnicos
 */

// 1. Configuración del hero (si aplica)
$title = "Título";
$description = "Descripción";
include __DIR__ . '/../includes/hero-service.php';
?>

<!-- 2. Contenido principal -->
<main>
    <section class="section">
        <div class="container">
            <!-- Contenido -->
        </div>
    </section>
</main>

<!-- 3. Estilos específicos -->
<style>
/* Usar variables CSS globales */
</style>

<!-- 4. Scripts (si son necesarios) -->
<script>
(function() {
    'use strict';
    // Código JavaScript
})();
</script>
```

### 3. Registrar en config.php
Agregar la nueva página a `VALID_PAGES`:

```php
'nueva-pagina' => [
    'title' => 'Nueva Página',
    'file' => 'nueva-pagina.php',
    'meta_description' => 'Descripción para SEO'
]
```

## 🎨 Estilos CSS

### Variables CSS
Siempre usar las variables definidas en `assets/css/variables.css`:

```css
/* ✅ CORRECTO */
.elemento {
    color: var(--dark-blue);
    padding: var(--spacing-lg);
    border-radius: var(--border-radius);
    transition: var(--transition);
}

/* ❌ INCORRECTO */
.elemento {
    color: #2f4290;
    padding: 24px;
    border-radius: 16px;
    transition: all 0.3s ease;
}
```

### Orden de Propiedades CSS
1. Posicionamiento (`position`, `top`, `left`, etc.)
2. Box model (`display`, `width`, `height`, `margin`, `padding`)
3. Tipografía (`font`, `color`, `text-align`)
4. Visual (`background`, `border`, `box-shadow`)
5. Otros (`transition`, `transform`, `cursor`)

### Responsive Design
Usar mobile-first approach:

```css
/* Base (móvil) */
.elemento {
    width: 100%;
}

/* Tablet */
@media (min-width: 768px) {
    .elemento {
        width: 50%;
    }
}

/* Desktop */
@media (min-width: 1200px) {
    .elemento {
        width: 33.333%;
    }
}
```

## 🔧 Funciones y Helpers

### Funciones Disponibles (includes/functions.php)

#### Navegación
```php
getCurrentPage()           // Obtiene página actual
getPageInfo($page)         // Obtiene info de una página
getPageUrl($page)          // Genera URL de página
isActivePage($page)        // Verifica si página está activa
getActiveClass($page)      // Retorna 'active' si está activa
```

#### Assets
```php
asset($path)               // Genera URL de asset
```

#### Seguridad
```php
e($text)                   // Escapa HTML (alias de htmlspecialchars)
sanitizeFilename($name)    // Sanitiza nombres de archivo
getClientIP()              // Obtiene IP del cliente
```

#### Imágenes
```php
getImages($dir)            // Obtiene imágenes de un directorio
renderClientLogos($imgs)   // Renderiza carrusel de logos
```

#### Utilidades
```php
getCurrentYear()           // Año actual
formatPhone($phone)        // Formatea teléfono
isAjaxRequest()           // Verifica si es AJAX
redirect($page)           // Redirige a una página
```

### Crear Nuevas Funciones
Agregar en `includes/functions.php`:

```php
/**
 * Descripción de la función
 * @param tipo $param Descripción del parámetro
 * @return tipo Descripción del retorno
 */
function miFuncion($param) {
    // Código
    return $resultado;
}
```

## 🔒 Seguridad

### 1. Validación de Entrada
```php
// Siempre validar y sanitizar
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$page = preg_replace('/[^a-zA-Z0-9\-_]/', '', $page);
```

### 2. Escape de Salida
```php
// Escapar TODO lo que se muestra al usuario
echo htmlspecialchars($userInput, ENT_QUOTES, 'UTF-8');
// O usar la función helper
echo e($userInput);
```

### 3. Prevenir Inclusión de Archivos
```php
// Verificar antes de incluir
if (file_exists($pageFile)) {
    include $pageFile;
}
```

### 4. CSRF Protection
```php
// Para formularios, agregar token CSRF
// TODO: Implementar en futuras versiones
```

## 📱 Responsive y Accesibilidad

### Breakpoints Estándar
- Mobile: < 768px
- Tablet: 768px - 1199px
- Desktop: ≥ 1200px

### Accesibilidad
- Usar etiquetas semánticas HTML5
- Agregar atributos `aria-label` en elementos interactivos
- Asegurar contraste de colores adecuado
- Hacer todos los elementos interactivos accesibles por teclado

## 🚀 Mejores Prácticas

### Performance
- ✅ Lazy loading para imágenes
- ✅ Minificar CSS y JS en producción
- ✅ Usar CDN para recursos externos
- ✅ Optimizar imágenes antes de subir

### SEO
- ✅ Meta descriptions únicas por página
- ✅ Títulos descriptivos
- ✅ URLs amigables
- ✅ Alt text en imágenes

### Mantenibilidad
- ✅ Comentar código complejo
- ✅ Usar nombres descriptivos
- ✅ DRY (Don't Repeat Yourself)
- ✅ Separar concerns (lógica/presentación)

## 📞 Soporte

Para dudas sobre estos estándares, contactar al equipo de desarrollo.

---

**Última actualización**: Enero 2025
**Versión**: 2.0.0
