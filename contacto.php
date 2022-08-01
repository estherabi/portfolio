<?php
$pg = "contacto";

if($_POST){
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $telefono = $_POST["txtTelefono"];
    $mensaje = $_POST["txtMensaje"];
    
    if($nombre != "" && $correo != "" && $telefono != "" && $mensaje !="")

    // Varios destinatarios
    $para = "portillolautaro1010@gmail.com";
    $titulo = 'Recibiste un mensaje desde tu Web';

    // mensaje
    $cuerpo = "
    Nombre: $nombre <br>
    Correo: $correo <br>
    Telefono: $telefono <br>
    Mensaje: $mensaje
    ";

    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    // Cabeceras adicionales
    $cabeceras .= 'To: portillolautaro1010@gmail.com' . "\r\n";
    $cabeceras .= 'From: contacto@nelsontarche.com.ar' . "\r\n";

    // Enviarlo
    //mail($para, $titulo, $cuerpo, $cabeceras);
    header("Location: confirmacion_mail.php");
}
?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
    <?php include_once "menu.php"; ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>Te invito a que te contactes envíandome un mensaje o bien por whatsapp</p>
                </div>
                <div class="col-6">
                    <form action="" method="post">
                        <div class="pb-3">
                            <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre"
                                class="form-control">
                        </div>
                        <div class="pb-3">
                            <input type="email" name="txtCorreo" id="txtMail" placeholder="Correo" class="form-control">
                        </div>
                        <div class="pb-3">
                            <input type="tel" name="txtTelefono" id="txtTelefonoWhatsapp"
                                placeholder="Telefono/Whatsapp" class="form-control">
                        </div>
                        <div class="pb-3">
                            <textarea name="txtMensaje" id="txtMensaje" cols="30" rows="10" class="form-control"
                                placeholder="Escribe aquí tu mensaje"></textarea>
                        </div>
                        <div class="">
                            <button type="submit" id="btnEnviar" name="btnEnviar" class="btn">ENVIAR</button>
                        </div>
    </main>
    <footer class="container mt-auto pb-4">
        <div class="btn-whatsapp">
            <a href="https://api.whatsapp.com/send?phone=1124794501" target="_blank" title="Whatsapp"><i
                    class="fa-brands fa-whatsapp"></i></a>
        </div>
        <div class="row">
            <div class="col-3">
                <a href="" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-3">
                Sponsor <a href="https://depcsuite.com">DePC Suite</a>
            </div>
            <div class="col-3">
                <a href="mailto:estherforeman18@gmail.com">estherforeman18@gmail.com</a>
            </div>
            <div class="col-3">
            </div>

    </footer>
</body>

</html>