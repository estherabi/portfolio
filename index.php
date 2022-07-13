<?php
 $pg = "Inicio";
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="inicio">
    <header class="container">
        <nav class="navbar navbar-expand-md  mb-4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($pg == "inicio") ? "active" : ""; ?>" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre-mi.php">Sobre mi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">Contacto</a>
                        </li>
                        <div class="d-inline"><a href class="cv p-3">Descargar mi CV<i class="fas fa-download"></i>
                            </a>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mx-auto text-center cohete my-5">
                <a href="proyectos.html"><img src="images/cohete.svg" alt=""></a>
            </div>
            <div class="col-12 col-sm-6 offset-sm-3 text-center">
                <p><span class="p-2 my-3">Bienvenid@ a mi sitio web sobre desarrollo de sistemas</span></p>
            </div>
            <div class="col-12 text-center">
                <a href="proyectos.html" class="btn my-5">Conoce mis proyectos</a>
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
        </div>
    </footer>
</body>

</html>