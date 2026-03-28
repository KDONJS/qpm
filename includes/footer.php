<?php
/**
 * Footer principal del sitio
 * QPM Servicios Técnicos
 */

if (!defined('BASE_URL')) {
    $basePath = (basename(dirname($_SERVER['PHP_SELF'])) === 'pages') ? '../' : '';
} else {
    $basePath = BASE_URL;
}

$companyName = defined('COMPANY_NAME') ? COMPANY_NAME : 'QPM';
$companyEmail = defined('COMPANY_EMAIL') ? COMPANY_EMAIL : 'ventas@qpmsac.com.pe';
$companyPhone = defined('COMPANY_PHONE') ? COMPANY_PHONE : '+51 940 061 321';
$companyWhatsapp = defined('COMPANY_WHATSAPP') ? COMPANY_WHATSAPP : '51940061321';
$companyLinkedin = defined('COMPANY_LINKEDIN') ? COMPANY_LINKEDIN : 'https://www.linkedin.com/company/qpm-sacperu';
?>

<footer class="footer-modern">
    <div class="container">
        <div class="footer-content-modern">
            
            <?php echo renderCompanySection($basePath, $companyName); ?>
            <?php echo renderCompanyLinksSection($basePath); ?>
            <?php echo renderFooterServicesSection($basePath); ?>
            <?php echo renderContactSection($companyEmail, $companyPhone, $companyWhatsapp, $companyLinkedin); ?>
            
        </div>

        <div class="footer-bottom-modern">
            <p>&copy; <?php echo getCurrentYear(); ?> <strong><?php echo $companyName; ?></strong></p>
        </div>
    </div>
</footer>

<link rel="stylesheet" href="<?php echo $basePath; ?>assets/css/footer.css">
<link rel="stylesheet" href="<?php echo $basePath; ?>assets/css/unified-theme.css">

<?php echo renderWhatsAppButton($companyWhatsapp); ?>

<?php
/**
 * Renderiza la sección de la empresa en el footer
 * @param string $basePath
 * @param string $companyName
 * @return string
 */
function renderCompanySection(string $basePath, string $companyName): string {
    return '<div class="footer-section-modern company-section">' .
           '<div class="company-brand">' .
           '<a href="' . $basePath . '?page=home">' .
           '<img src="' . $basePath . 'assets/img/LOGO SIN FONDO.png" alt="' . $companyName . '" class="logo">' .
           '</a>' .
           '</div>' .
           '</div>';
}

/**
 * Renderiza la sección de enlaces de empresa
 * @param string $basePath
 * @return string
 */
function renderCompanyLinksSection(string $basePath): string {
    $links = [
        ['url' => $basePath . '?page=nuestro-equipo', 'label' => 'Nosotros'],
        ['url' => $basePath . '?page=contactenos', 'label' => 'Contáctenos'],
        ['url' => $basePath . '?page=boletin', 'label' => 'Boletín'],
    ];
    
    $html = '<div class="footer-section-modern">';
    $html .= '<h4 class="section-title-modern">Empresa</h4>';
    $html .= '<ul class="footer-links-modern">';
    
    foreach ($links as $link) {
        $html .= '<li><a href="' . $link['url'] . '">' . $link['label'] . '</a></li>';
    }
    
    $html .= '</ul>';
    $html .= '</div>';
    
    return $html;
}

/**
 * Renderiza la sección de servicios del footer
 * @param string $basePath
 * @return string
 */
function renderFooterServicesSection(string $basePath): string {
    $servicesLeft = [
        ['url' => $basePath . '?page=MPd', 'label' => 'MPd y Confiabilidad'],
        ['url' => $basePath . '?page=ensayos', 'label' => 'Ensayos No Destructivos'],
        ['url' => $basePath . '?page=topografia', 'label' => 'Topografía y Geodesia'],
        ['url' => $basePath . '?page=inspeccion', 'label' => 'Inspección y Certificación de Equipos'],
    ];
    
    $servicesRight = [
        ['url' => $basePath . '?page=consultoria', 'label' => 'Consultoría y Asesoramiento'],
        ['url' => $basePath . '?page=especializados', 'label' => 'Servicios Especializados'],
        ['url' => $basePath . '?page=alquiler', 'label' => 'Alquiler y Venta de Equipos'],
        ['url' => 'https://app.reclamovirtual.pe/administracion/login', 'label' => 'Libro de Reclamaciones'],
    ];
    
    $html = '<div class="footer-section-modern services-section-wide">';
    $html .= '<h4 class="section-title-modern">Servicios</h4>';
    $html .= '<div class="services-grid-footer">';
    
    $html .= '<div class="services-column">';
    $html .= '<ul class="footer-links-modern">';
    foreach ($servicesLeft as $service) {
        $html .= '<li><a href="' . $service['url'] . '">' . $service['label'] . '</a></li>';
    }
    $html .= '</ul>';
    $html .= '</div>';
    
    $html .= '<div class="services-column">';
    $html .= '<ul class="footer-links-modern">';
    foreach ($servicesRight as $service) {
        $html .= '<li><a href="' . $service['url'] . '">' . $service['label'] . '</a></li>';
    }
    $html .= '</ul>';
    $html .= '</div>';
    
    $html .= '</div>';
    $html .= '</div>';
    
    return $html;
}

/**
 * Renderiza la sección de contacto
 * @param string $email
 * @param string $phone
 * @param string $whatsapp
 * @param string $linkedin
 * @return string
 */
function renderContactSection(string $email, string $phone, string $whatsapp, string $linkedin): string {
    $contacts = [
        [
            'icon' => 'fas fa-envelope',
            'content' => '<a href="mailto:' . $email . '">' . $email . '</a>'
        ],
        [
            'icon' => 'fas fa-phone-alt',
            'content' => '<a href="https://wa.me/' . $whatsapp . '" target="_blank" rel="noopener">' . $phone . '</a>'
        ],
        [
            'icon' => 'fab fa-linkedin-in',
            'content' => '<a href="' . $linkedin . '" target="_blank" rel="noopener">QPM SAC Perú</a>'
        ],
    ];
    
    $html = '<div class="footer-section-modern">';
    $html .= '<h4 class="section-title-modern">Contacto</h4>';
    $html .= '<div class="contact-info-footer">';
    
    foreach ($contacts as $contact) {
        $html .= '<p class="contact-item-footer">';
        $html .= '<i class="' . $contact['icon'] . '"></i>';
        $html .= $contact['content'];
        $html .= '</p>';
    }
    
    $html .= '</div>';
    $html .= '</div>';
    
    return $html;
}

/**
 * Renderiza el botón flotante de WhatsApp
 * @param string $whatsapp
 * @return string
 */
function renderWhatsAppButton(string $whatsapp): string {
    $svgIcon = '<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">' .
               '<path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"/>' .
               '<path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"/>' .
               '<path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"/>' .
               '</svg>';
    
    return '<a href="https://wa.me/' . $whatsapp . '" ' .
           'class="whatsapp-float" ' .
           'target="_blank" ' .
           'rel="noopener" ' .
           'aria-label="Contactar por WhatsApp">' .
           $svgIcon .
           '</a>';
}
?>
