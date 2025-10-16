<section class="page-section">
    <div class="container">
        <div class="section-header">
            <h1>Buscador de Certificaciones</h1>
            <p>Encuentra y verifica certificaciones de equipos</p>
        </div>
        
        <div class="service-card" style="max-width: 600px; margin: 0 auto;">
            <h3>Buscar Certificación</h3>
            <form method="GET" action="">
                <input type="hidden" name="page" value="buscador">
                <div style="margin-bottom: 1rem;">
                    <input type="text" name="numero_certificado" placeholder="Número de certificado" style="width: 100%; padding: 0.8rem; border: 1px solid #ddd; border-radius: 5px;">
                </div>
                <div style="margin-bottom: 1rem;">
                    <input type="text" name="equipo" placeholder="Tipo de equipo" style="width: 100%; padding: 0.8rem; border: 1px solid #ddd; border-radius: 5px;">
                </div>
                <button type="submit" class="btn btn-primary">Buscar Certificación</button>
            </form>
            
            <?php if(isset($_GET['numero_certificado']) && !empty($_GET['numero_certificado'])): ?>
            <div style="margin-top: 2rem; padding: 1rem; background: #f8f9fa; border-radius: 5px;">
                <h4>Resultado de la búsqueda:</h4>
                <p><strong>Certificado:</strong> <?= htmlspecialchars($_GET['numero_certificado']) ?></p>
                <p><strong>Estado:</strong> <span style="color: var(--primary-green);">Válido</span></p>
                <p><strong>Fecha de emisión:</strong> 15/01/2024</p>
                <p><strong>Fecha de vencimiento:</strong> 15/01/2025</p>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>