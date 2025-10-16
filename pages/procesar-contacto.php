<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitizar datos del formulario
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $email = htmlspecialchars(trim($_POST['email']));
    $telefono = htmlspecialchars(trim($_POST['telefono']));
    $servicio = htmlspecialchars(trim($_POST['servicio']));
    $mensaje = htmlspecialchars(trim($_POST['mensaje']));
    
    // Validaciones básicas
    $errores = [];
    
    if (empty($nombre)) {
        $errores[] = "El nombre es requerido";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "Email válido es requerido";
    }
    
    if (empty($mensaje)) {
        $errores[] = "El mensaje es requerido";
    }
    
    if (empty($errores)) {
        // Aquí puedes agregar el código para enviar el email
        // Por ahora, solo mostraremos un mensaje de éxito
        
        $exito = true;
        $mensaje_resultado = "¡Gracias por contactarnos! Hemos recibido tu mensaje y te responderemos pronto.";
    } else {
        $exito = false;
        $mensaje_resultado = "Por favor, corrige los siguientes errores: " . implode(", ", $errores);
    }
} else {
    header("Location: contactenos.php");
    exit();
}

include '../includes/header.php';
?>

<main>
    <section class="page-hero">
        <div class="container">
            <h1><?php echo $exito ? 'Mensaje Enviado' : 'Error en el Formulario'; ?></h1>
        </div>
    </section>

    <section class="contact-result">
        <div class="container">
            <div class="result-message <?php echo $exito ? 'success' : 'error'; ?>">
                <p><?php echo $mensaje_resultado; ?></p>
                <a href="contactenos.php" class="btn btn-primary">Volver al Formulario</a>
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

<?php include '../includes/footer.php'; ?>