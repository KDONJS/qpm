<?php
// Detectar si estamos en la raíz o en una subcarpeta
$basePath = (basename(dirname($_SERVER['PHP_SELF'])) == 'pages') ? '../' : '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QPM - Calidad y Precisión en Medición</title>
    <!-- Preconexión para optimizar carga de fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Fuente Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- .ico -->
    <link rel="icon" href="<?php echo $basePath; ?>assets/img/LOGO SIN FONDO.png" type="image/png">
    <link rel="stylesheet" href="<?php echo $basePath; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $basePath; ?>assets/css/header.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <div class="nav-brand">
                    <a href="<?php echo $basePath; ?>?page=inicio">
                        <img src="<?php echo $basePath; ?>assets/img/LOGO SIN FONDO.png" alt="QPM - Calidad y Precisión en Medición" class="logo">
                    </a>
                </div>
                
                <!-- Menú Desktop -->
                <ul class="nav-menu">
                    <li><a href="<?php echo $basePath; ?>?page=inicio" class="nav-link">Inicio</a></li>
                    <li class="dropdown">
                        <a href="#" class="nav-link">Nosotros</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="<?php echo $basePath; ?>?page=nuestro-equipo" class="nav-link">Nuestro Equipo</a></li>
                            <li class="dropdown-item"><a href="<?php echo $basePath; ?>?page=vision" class="nav-link">Visión y Misión</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link">Servicios</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="<?php echo $basePath; ?>?page=MPd" class="nav-link">MPd y Confiabilidad</a></li>
                            <li class="dropdown-item"><a href="<?php echo $basePath; ?>?page=ensayos" class="nav-link">Ensayos No Destructivos</a></li>
                            <li class="dropdown-item"><a href="<?php echo $basePath; ?>?page=topografia" class="nav-link">Topografía y Geodesia</a></li>
                            <li class="dropdown-item separator"><a href="<?php echo $basePath; ?>?page=inspeccion" class="nav-link">Inspección y Certificación de Equipos</a></li>
                            <li class="dropdown-item"><a href="<?php echo $basePath; ?>?page=consultoria" class="nav-link">Consultoría y Asesoramiento</a></li>
                            <li class="dropdown-item separator"><a href="<?php echo $basePath; ?>?page=especializados" class="nav-link">Servicios Especializados</a></li>
                            <li class="dropdown-item"><a href="<?php echo $basePath; ?>?page=alquiler" class="nav-link">Alquiler y Venta de Equipos</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo $basePath; ?>?page=boletin" class="nav-link">Boletin</a></li>
                    <li><a href="<?php echo $basePath; ?>?page=contactenos" class="nav-link">Contacto</a></li>
                </ul>

                <!-- Menú Móvil -->
                <div class="mobile-menu">
                    <div class="mobile-menu-header">
                        <h3>Menú</h3>
                        <button class="mobile-menu-close">&times;</button>
                    </div>
                    
                    <div class="mobile-menu-content">
                        <!-- Inicio -->
                        <div class="mobile-menu-item">
                            <a href="<?php echo $basePath; ?>?page=inicio" class="mobile-nav-link">
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
                                <a href="<?php echo $basePath; ?>?page=nuestro-equipo" class="mobile-nav-link">
                                    <i class="fas fa-user-tie"></i>
                                    Nuestro Equipo
                                </a>
                                <a href="<?php echo $basePath; ?>?page=vision" class="mobile-nav-link">
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
                                <a href="<?php echo $basePath; ?>?page=MPd" class="mobile-nav-link">
                                    <i class="fas fa-chart-line"></i>
                                    MPd y Confiabilidad
                                </a>
                                <a href="<?php echo $basePath; ?>?page=ensayos" class="mobile-nav-link">
                                    <i class="fas fa-microscope"></i>
                                    Ensayos No Destructivos
                                </a>
                                <a href="<?php echo $basePath; ?>?page=topografia" class="mobile-nav-link">
                                    <i class="fas fa-map-marked-alt"></i>
                                    Topografía y Geodesia
                                </a>
                                <a href="<?php echo $basePath; ?>?page=inspeccion" class="mobile-nav-link">
                                    <i class="fas fa-search"></i>
                                    Inspección y Certificación
                                </a>
                                <a href="<?php echo $basePath; ?>?page=consultoria" class="mobile-nav-link">
                                    <i class="fas fa-handshake"></i>
                                    Consultoría y Asesoramiento
                                </a>
                                <a href="<?php echo $basePath; ?>?page=especializados" class="mobile-nav-link">
                                    <i class="fas fa-tools"></i>
                                    Servicios Especializados
                                </a>
                                <a href="<?php echo $basePath; ?>?page=alquiler" class="mobile-nav-link">
                                    <i class="fas fa-shopping-cart"></i>
                                    Alquiler y Venta de Equipos
                                </a>
                            </div>
                        </div>

                        <!-- Boletín y Contacto -->
                        <div class="mobile-menu-item">
                            <a href="<?php echo $basePath; ?>?page=boletin" class="mobile-nav-link">
                                <i class="fas fa-newspaper"></i>
                                Boletín y Noticias
                            </a>
                        </div>

                        <div class="mobile-menu-item">
                            <a href="<?php echo $basePath; ?>?page=contactenos" class="mobile-nav-link">
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
        // JavaScript para el menú móvil
        document.addEventListener('DOMContentLoaded', function() {
            const navToggle = document.querySelector('.nav-toggle');
            const mobileMenu = document.querySelector('.mobile-menu');
            const mobileMenuClose = document.querySelector('.mobile-menu-close');
            const mobileMenuOverlay = document.querySelector('.mobile-menu-overlay');
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

            navToggle.addEventListener('click', function() {
                if (mobileMenu.classList.contains('active')) {
                    closeMobileMenu();
                } else {
                    openMobileMenu();
                }
            });

            mobileMenuClose.addEventListener('click', closeMobileMenu);
            mobileMenuOverlay.addEventListener('click', closeMobileMenu);

            // Cerrar menú al hacer clic en un enlace
            const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
            mobileNavLinks.forEach(link => {
                link.addEventListener('click', closeMobileMenu);
            });
        });
    </script>