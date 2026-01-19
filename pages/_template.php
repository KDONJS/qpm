<?php
/**
 * Plantilla de página estándar
 * QPM Servicios Técnicos
 * 
 * Esta es una plantilla base que todas las páginas deben seguir.
 * Copiar este archivo y modificar según necesidades específicas.
 * 
 * ESTRUCTURA ESTÁNDAR:
 * 1. Configuración de variables para el hero
 * 2. Inclusión del hero (opcional)
 * 3. Contenido principal en secciones semánticas
 * 4. Scripts necesarios (si aplica)
 */

// ==========================================
// 1. CONFIGURACIÓN DEL HERO
// ==========================================
$title = "Título de la Página";
$description = "Descripción breve de la página";
$badge = null; // Opcional: "Certificado" o similar
$backgroundImage = null; // Opcional: ruta a imagen de fondo

// ==========================================
// 2. INCLUIR HERO (si la página lo necesita)
// ==========================================
// include __DIR__ . '/../includes/hero-service.php';
?>

<!-- ========================================== -->
<!-- 3. CONTENIDO PRINCIPAL -->
<!-- ========================================== -->

<main>
    <!-- Sección de introducción -->
    <section class="section">
        <div class="container">
            <div class="section-header-modern">
                <h2 class="section-title">Título de la Sección</h2>
                <p class="section-subtitle">
                    Descripción de la sección con información relevante para el usuario.
                </p>
            </div>
            
            <!-- Contenido específico de la sección -->
            <div class="content-grid">
                <!-- Agregar contenido aquí -->
            </div>
        </div>
    </section>
    
    <!-- Agregar más secciones según sea necesario -->
</main>

<!-- ========================================== -->
<!-- 4. ESTILOS ESPECÍFICOS DE LA PÁGINA -->
<!-- ========================================== -->
<style>
/* Usar variables CSS globales definidas en assets/css/variables.css */

/* Estilos específicos solo para esta página */
.content-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

/* Responsive */
@media (max-width: 768px) {
    .content-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
}
</style>

<!-- ========================================== -->
<!-- 5. SCRIPTS (si son necesarios) -->
<!-- ========================================== -->
<script>
// Scripts específicos de la página
(function() {
    'use strict';
    
    // Código JavaScript aquí
    
})();
</script>
