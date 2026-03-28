<?php
/**
 * Procesamiento del formulario de contacto
 * QPM Servicios Técnicos
 */

declare(strict_types=1);

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';

$result = processContactForm();

include __DIR__ . '/../includes/header.php';
?>

<main>
    <section class="page-hero">
        <div class="container">
            <h1><?php echo $result['success'] ? 'Mensaje Enviado' : 'Error en el Formulario'; ?></h1>
        </div>
    </section>

    <section class="contact-result">
        <div class="container">
            <div class="result-message <?php echo $result['success'] ? 'success' : 'error'; ?>">
                <p><?php echo e($result['message']); ?></p>
                <a href="<?php echo getPageUrl('contactenos'); ?>" class="btn btn-primary">Volver al Formulario</a>
            </div>
        </div>
    </section>
</main>

<style>
.contact-result {
    padding: 4rem 0;
    text-align: center;
}

.result-message {
    max-width: 600px;
    margin: 0 auto;
    padding: 2rem;
    border-radius: 10px;
}

.result-message.success {
    background-color: #d4edda;
    border: 1px solid #c3e6cb;
    color: #155724;
}

.result-message.error {
    background-color: #f8d7da;
    border: 1px solid #f5c6cb;
    color: #721c24;
}

.result-message p {
    font-size: 1.1rem;
    margin-bottom: 1.5rem;
}
</style>

<?php include __DIR__ . '/../includes/footer.php'; ?>

<?php
/**
 * Procesa el formulario de contacto
 * @return array{success: bool, message: string}
 */
function processContactForm(): array {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        redirect('contactenos');
    }

    $formData = sanitizeFormData($_POST);
    $errors = validateContactForm($formData);

    if (!empty($errors)) {
        return [
            'success' => false,
            'message' => 'Por favor, corrige los siguientes errores: ' . implode(', ', $errors)
        ];
    }

    // TODO: Implementar envío de email aquí
    // sendContactEmail($formData);

    return [
        'success' => true,
        'message' => '¡Gracias por contactarnos! Hemos recibido tu mensaje y te responderemos pronto.'
    ];
}

/**
 * Sanitiza los datos del formulario
 * @param array<string, mixed> $data
 * @return array<string, string>
 */
function sanitizeFormData(array $data): array {
    $fields = ['nombre', 'email', 'telefono', 'servicio', 'mensaje'];
    $sanitized = [];
    
    foreach ($fields as $field) {
        $value = $data[$field] ?? '';
        $sanitized[$field] = htmlspecialchars(trim((string) $value), ENT_QUOTES, 'UTF-8');
    }
    
    return $sanitized;
}

/**
 * Valida los datos del formulario de contacto
 * @param array<string, string> $data
 * @return array<int, string>
 */
function validateContactForm(array $data): array {
    $errors = [];

    if (empty($data['nombre'])) {
        $errors[] = 'El nombre es requerido';
    }

    if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email válido es requerido';
    }

    if (empty($data['mensaje'])) {
        $errors[] = 'El mensaje es requerido';
    }

    return $errors;
}
