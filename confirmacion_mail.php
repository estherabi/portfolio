<?php
$pg = "Contacto";
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
                <h1>Gracias por contactarte!</h1>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>Te estare contactando a la brevedad</p>
                </div>
            </div>
        </div>
    </main>
    <footer class="container mt-auto pb-4">
        <div class="btn-whatsapp">
            <a href="https://api.whatsapp.com/send?phone=1124794501" target="_blank" title="Whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
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