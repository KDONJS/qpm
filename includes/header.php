<?php
/**
 * Header principal del sitio
 * QPM Servicios Técnicos
 */

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/functions.php';

$currentPage = getCurrentPage();
$pageInfo = getPageInfo($currentPage);
$pageTitle = $pageInfo ? $pageInfo['title'] . ' - ' . COMPANY_NAME : COMPANY_NAME;
$metaDescription = $pageInfo ? $pageInfo['meta_description'] : 'QPM Servicios Técnicos';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo e($metaDescription); ?>">
    <meta name="keywords" content="QPM, servicios técnicos, mantenimiento predictivo, ensayos no destructivos">
    <meta name="author" content="<?php echo e(COMPANY_NAME); ?>">
    
    <title><?php echo e($pageTitle); ?></title>
    
    <!-- Preconexión para optimizar carga de fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Fuentes globales -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Sora:wght@600;700;800&display=swap" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" href="<?php echo asset('img/LOGO SIN FONDO.png'); ?>" type="image/png">
    
    <!-- Estilos -->
    <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('css/header.css'); ?>">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <div class="nav-brand">
                    <a href="<?php echo getPageUrl('home'); ?>">
                        <img src="<?php echo asset('img/LOGO SIN FONDO.png'); ?>" alt="<?php echo e(COMPANY_NAME); ?>" class="logo">
                    </a>
                </div>
                
                <?php echo renderDesktopMenu($currentPage); ?>
                <?php echo renderMobileMenu(); ?>
                
                <div class="mobile-menu-overlay"></div>
                
                <div class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>

<?php
/**
 * Renderiza el menú de navegación desktop
 * @param string $currentPage Página actual
 * @return string HTML del menú
 */
function renderDesktopMenu(string $currentPage): string {
    $menuItems = [
        ['url' => getPageUrl('home'), 'label' => 'Inicio', 'page' => 'home'],
        ['url' => getPageUrl('nuestro-equipo'), 'label' => 'Nosotros', 'page' => 'nuestro-equipo'],
        ['url' => '#', 'label' => 'Servicios', 'page' => '', 'dropdown' => renderServicesDropdown()],
        ['url' => getPageUrl('boletin'), 'label' => 'Boletín', 'page' => 'boletin'],
        ['url' => getPageUrl('contactenos'), 'label' => 'Contacto', 'page' => 'contactenos'],
    ];
    
    $html = '<ul class="nav-menu">';
    
    foreach ($menuItems as $item) {
        $activeClass = getActiveClass($item['page']);
        $dropdownClass = isset($item['dropdown']) ? 'dropdown' : '';
        
        $html .= '<li class="' . $dropdownClass . '">';
        $html .= '<a href="' . $item['url'] . '" class="nav-link ' . $activeClass . '">' . $item['label'] . '</a>';
        
        if (isset($item['dropdown'])) {
            $html .= $item['dropdown'];
        }
        
        $html .= '</li>';
    }
    
    $html .= '</ul>';
    
    return $html;
}

/**
 * Renderiza el dropdown de servicios
 * @return string HTML del dropdown
 */
function renderServicesDropdown(): string {
    $services = [
        ['url' => getPageUrl('MPd'), 'label' => 'MPd y Confiabilidad'],
        ['url' => getPageUrl('ensayos'), 'label' => 'Ensayos No Destructivos'],
        ['url' => getPageUrl('topografia'), 'label' => 'Topografía y Geodesia'],
        ['url' => getPageUrl('inspeccion'), 'label' => 'Inspección y Certificación de Equipos', 'separator' => true],
        ['url' => getPageUrl('consultoria'), 'label' => 'Consultoría y Asesoramiento'],
        ['url' => getPageUrl('especializados'), 'label' => 'Servicios Especializados', 'separator' => true],
        ['url' => getPageUrl('alquiler'), 'label' => 'Alquiler y Venta de Equipos'],
    ];
    
    $html = '<ul class="dropdown-menu">';
    
    foreach ($services as $service) {
        $separatorClass = ($service['separator'] ?? false) ? 'separator' : '';
        $html .= '<li class="dropdown-item ' . $separatorClass . '">';
        $html .= '<a href="' . $service['url'] . '" class="nav-link">' . $service['label'] . '</a>';
        $html .= '</li>';
    }
    
    $html .= '</ul>';
    
    return $html;
}

/**
 * Renderiza el menú móvil
 * @return string HTML del menú móvil
 */
function renderMobileMenu(): string {
    $sections = [
        [
            'title' => '',
            'icon' => 'fa-home',
            'items' => [
                ['url' => getPageUrl('home'), 'label' => 'Inicio', 'icon' => 'fa-home']
            ]
        ],
        [
            'title' => 'Nosotros',
            'icon' => 'fa-users',
            'items' => [
                ['url' => getPageUrl('nuestro-equipo'), 'label' => 'Nuestro Equipo', 'icon' => 'fa-user-tie'],
                ['url' => getPageUrl('vision'), 'label' => 'Visión y Misión', 'icon' => 'fa-eye'],
            ]
        ],
        [
            'title' => 'Servicios',
            'icon' => 'fa-cogs',
            'items' => [
                ['url' => getPageUrl('MPd'), 'label' => 'MPd y Confiabilidad', 'icon' => 'fa-chart-line'],
                ['url' => getPageUrl('ensayos'), 'label' => 'Ensayos No Destructivos', 'icon' => 'fa-microscope'],
                ['url' => getPageUrl('topografia'), 'label' => 'Topografía y Geodesia', 'icon' => 'fa-map-marked-alt'],
                ['url' => getPageUrl('inspeccion'), 'label' => 'Inspección y Certificación', 'icon' => 'fa-search'],
                ['url' => getPageUrl('consultoria'), 'label' => 'Consultoría y Asesoramiento', 'icon' => 'fa-handshake'],
                ['url' => getPageUrl('especializados'), 'label' => 'Servicios Especializados', 'icon' => 'fa-tools'],
                ['url' => getPageUrl('alquiler'), 'label' => 'Alquiler y Venta de Equipos', 'icon' => 'fa-shopping-cart'],
            ]
        ],
        [
            'title' => '',
            'items' => [
                ['url' => getPageUrl('boletin'), 'label' => 'Boletín y Noticias', 'icon' => 'fa-newspaper'],
                ['url' => getPageUrl('contactenos'), 'label' => 'Contacto', 'icon' => 'fa-envelope'],
            ]
        ],
    ];
    
    $html = '<div class="mobile-menu">';
    $html .= '<div class="mobile-menu-header">';
    $html .= '<h3>Menú</h3>';
    $html .= '<button class="mobile-menu-close" aria-label="Cerrar menú">&times;</button>';
    $html .= '</div>';
    $html .= '<div class="mobile-menu-content">';
    
    foreach ($sections as $section) {
        if (empty($section['title'])) {
            foreach ($section['items'] as $item) {
                $html .= renderMobileMenuItem($item);
            }
        } else {
            $html .= '<div class="mobile-menu-section">';
            $html .= '<h4 class="mobile-section-title">';
            $html .= '<i class="fas ' . $section['icon'] . '"></i>';
            $html .= $section['title'];
            $html .= '</h4>';
            $html .= '<div class="mobile-section-items">';
            
            foreach ($section['items'] as $item) {
                $html .= renderMobileNavLink($item);
            }
            
            $html .= '</div>';
            $html .= '</div>';
        }
    }
    
    $html .= '</div>';
    $html .= '</div>';
    
    return $html;
}

/**
 * Renderiza un item del menú móvil simple
 * @param array<string, string> $item
 * @return string
 */
function renderMobileMenuItem(array $item): string {
    return '<div class="mobile-menu-item">' .
           '<a href="' . $item['url'] . '" class="mobile-nav-link">' .
           '<i class="fas ' . $item['icon'] . '"></i>' .
           $item['label'] .
           '</a>' .
           '</div>';
}

/**
 * Renderiza un link de navegación móvil
 * @param array<string, string> $item
 * @return string
 */
function renderMobileNavLink(array $item): string {
    return '<a href="' . $item['url'] . '" class="mobile-nav-link">' .
           '<i class="fas ' . $item['icon'] . '"></i>' .
           $item['label'] .
           '</a>';
}
?>

<script>
    (function() {
        'use strict';
        
        const DOM = {
            navToggle: document.querySelector('.nav-toggle'),
            mobileMenu: document.querySelector('.mobile-menu'),
            mobileMenuClose: document.querySelector('.mobile-menu-close'),
            mobileMenuOverlay: document.querySelector('.mobile-menu-overlay'),
            mobileNavLinks: document.querySelectorAll('.mobile-nav-link'),
            body: document.body
        };

        function openMobileMenu() {
            DOM.mobileMenu?.classList.add('active');
            DOM.mobileMenuOverlay?.classList.add('active');
            DOM.navToggle?.classList.add('active');
            DOM.body.style.overflow = 'hidden';
        }

        function closeMobileMenu() {
            DOM.mobileMenu?.classList.remove('active');
            DOM.mobileMenuOverlay?.classList.remove('active');
            DOM.navToggle?.classList.remove('active');
            DOM.body.style.overflow = '';
        }

        function toggleMobileMenu() {
            const isOpen = DOM.mobileMenu?.classList.contains('active');
            isOpen ? closeMobileMenu() : openMobileMenu();
        }

        DOM.navToggle?.addEventListener('click', toggleMobileMenu);
        DOM.mobileMenuClose?.addEventListener('click', closeMobileMenu);
        DOM.mobileMenuOverlay?.addEventListener('click', closeMobileMenu);
        
        DOM.mobileNavLinks.forEach(link => {
            link.addEventListener('click', closeMobileMenu);
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && DOM.mobileMenu?.classList.contains('active')) {
                closeMobileMenu();
            }
        });
    })();
</script>
