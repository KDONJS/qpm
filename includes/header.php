<?php
/**
 * Header principal del sitio
 * QPM Servicios Técnicos
 */

// Cargar configuración y funciones
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/functions.php';

// Obtener información de la página actual
$currentPage = getCurrentPage();
$pageInfo = getPageInfo($currentPage);
$pageTitle = $pageInfo ? $pageInfo['title'] . ' - ' . COMPANY_NAME : COMPANY_NAME;
$metaDescription = $pageInfo ? $pageInfo['meta_description'] : 'QPM Servicios Técnicos';

// Mantener compatibilidad con código existente
$basePath = BASE_URL;
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
    
    <!-- Fuente Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
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
                
                <!-- Menú Desktop -->
                <ul class="nav-menu">
                    <li><a href="<?php echo getPageUrl('home'); ?>" class="nav-link <?php echo getActiveClass('home'); ?>">Inicio</a></li>
                    <li><a href="<?php echo getPageUrl('nuestro-equipo'); ?>" class="nav-link <?php echo getActiveClass('nuestro-equipo'); ?>">Nosotros</a></li>
                    <li class="dropdown">
                        <a href="#" class="nav-link">Servicios</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="<?php echo getPageUrl('MPd'); ?>" class="nav-link">MPd y Confiabilidad</a></li>
                            <li class="dropdown-item"><a href="<?php echo getPageUrl('ensayos'); ?>" class="nav-link">Ensayos No Destructivos</a></li>
                            <li class="dropdown-item"><a href="<?php echo getPageUrl('topografia'); ?>" class="nav-link">Topografía y Geodesia</a></li>
                            <li class="dropdown-item separator"><a href="<?php echo getPageUrl('inspeccion'); ?>" class="nav-link">Inspección y Certificación de Equipos</a></li>
                            <li class="dropdown-item"><a href="<?php echo getPageUrl('consultoria'); ?>" class="nav-link">Consultoría y Asesoramiento</a></li>
                            <li class="dropdown-item separator"><a href="<?php echo getPageUrl('especializados'); ?>" class="nav-link">Servicios Especializados</a></li>
                            <li class="dropdown-item"><a href="<?php echo getPageUrl('alquiler'); ?>" class="nav-link">Alquiler y Venta de Equipos</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo getPageUrl('boletin'); ?>" class="nav-link <?php echo getActiveClass('boletin'); ?>">Boletín</a></li>
                    <li><a href="<?php echo getPageUrl('contactenos'); ?>" class="nav-link <?php echo getActiveClass('contactenos'); ?>">Contacto</a></li>
                </ul>

                <!-- Menú Móvil -->
                <div class="mobile-menu">
                    <div class="mobile-menu-header">
                        <h3>Menú</h3>
                        <button class="mobile-menu-close" aria-label="Cerrar menú">&times;</button>
                    </div>
                    
                    <div class="mobile-menu-content">
                        <!-- Inicio -->
                        <div class="mobile-menu-item">
                            <a href="<?php echo getPageUrl('home'); ?>" class="mobile-nav-link">
                                <i class="fas fa-home"></i>
                                Inicio
                            </a>
                        </div>

                        <!-- Nosotros -->
                        <div class="mobile-menu-section">
                            <h4 class="mobile-section-title">
                                <i class="fas fa-users"></i>
                                Nosotros
                            </h4>
                            <div class="mobile-section-items">
                                <a href="<?php echo getPageUrl('nuestro-equipo'); ?>" class="mobile-nav-link">
                                    <i class="fas fa-user-tie"></i>
                                    Nuestro Equipo
                                </a>
                                <a href="<?php echo getPageUrl('vision'); ?>" class="mobile-nav-link">
                                    <i class="fas fa-eye"></i>
                                    Visión y Misión
                                </a>
                            </div>
                        </div>

                        <!-- Servicios -->
                        <div class="mobile-menu-section">
                            <h4 class="mobile-section-title">
                                <i class="fas fa-cogs"></i>
                                Servicios
                            </h4>
                            <div class="mobile-section-items">
                                <a href="<?php echo getPageUrl('MPd'); ?>" class="mobile-nav-link">
                                    <i class="fas fa-chart-line"></i>
                                    MPd y Confiabilidad
                                </a>
                                <a href="<?php echo getPageUrl('ensayos'); ?>" class="mobile-nav-link">
                                    <i class="fas fa-microscope"></i>
                                    Ensayos No Destructivos
                                </a>
                                <a href="<?php echo getPageUrl('topografia'); ?>" class="mobile-nav-link">
                                    <i class="fas fa-map-marked-alt"></i>
                                    Topografía y Geodesia
                                </a>
                                <a href="<?php echo getPageUrl('inspeccion'); ?>" class="mobile-nav-link">
                                    <i class="fas fa-search"></i>
                                    Inspección y Certificación
                                </a>
                                <a href="<?php echo getPageUrl('consultoria'); ?>" class="mobile-nav-link">
                                    <i class="fas fa-handshake"></i>
                                    Consultoría y Asesoramiento
                                </a>
                                <a href="<?php echo getPageUrl('especializados'); ?>" class="mobile-nav-link">
                                    <i class="fas fa-tools"></i>
                                    Servicios Especializados
                                </a>
                                <a href="<?php echo getPageUrl('alquiler'); ?>" class="mobile-nav-link">
                                    <i class="fas fa-shopping-cart"></i>
                                    Alquiler y Venta de Equipos
                                </a>
                            </div>
                        </div>

                        <!-- Boletín y Contacto -->
                        <div class="mobile-menu-item">
                            <a href="<?php echo getPageUrl('boletin'); ?>" class="mobile-nav-link">
                                <i class="fas fa-newspaper"></i>
                                Boletín y Noticias
                            </a>
                        </div>

                        <div class="mobile-menu-item">
                            <a href="<?php echo getPageUrl('contactenos'); ?>" class="mobile-nav-link">
                                <i class="fas fa-envelope"></i>
                                Contacto
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Overlay para el menú móvil -->
                <div class="mobile-menu-overlay"></div>
                
                <!-- Botón hamburguesa -->
                <div class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>

    <script>
        /**
         * Control del menú móvil
         */
        (function() {
            'use strict';
            
            const navToggle = document.querySelector('.nav-toggle');
            const mobileMenu = document.querySelector('.mobile-menu');
            const mobileMenuClose = document.querySelector('.mobile-menu-close');
            const mobileMenuOverlay = document.querySelector('.mobile-menu-overlay');
            const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
            const body = document.body;

            function openMobileMenu() {
                mobileMenu.classList.add('active');
                mobileMenuOverlay.classList.add('active');
                navToggle.classList.add('active');
                body.style.overflow = 'hidden';
            }

            function closeMobileMenu() {
                mobileMenu.classList.remove('active');
                mobileMenuOverlay.classList.remove('active');
                navToggle.classList.remove('active');
                body.style.overflow = '';
            }

            function toggleMobileMenu() {
                if (mobileMenu.classList.contains('active')) {
                    closeMobileMenu();
                } else {
                    openMobileMenu();
                }
            }

            // Event listeners
            if (navToggle) {
                navToggle.addEventListener('click', toggleMobileMenu);
            }

            if (mobileMenuClose) {
                mobileMenuClose.addEventListener('click', closeMobileMenu);
            }

            if (mobileMenuOverlay) {
                mobileMenuOverlay.addEventListener('click', closeMobileMenu);
            }

            // Cerrar menú al hacer clic en un enlace
            mobileNavLinks.forEach(function(link) {
                link.addEventListener('click', closeMobileMenu);
            });

            // Cerrar menú con tecla ESC
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
                    closeMobileMenu();
                }
            });
        })();
    </script>