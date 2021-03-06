<?php
 $pg = "Sobre Mi";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mí</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobreMi">
    <header class="container">
    <?php include_once "menu.php"; ?>
    </header>
    <main>
        <section class="container" id="descripcion">
            <div class="row">
                <div class="col-12 col-sm-7 pb-3">
                    <h1 class="pb-5 pt-3">Sobre mí</h1>
                    <p>
                        Apasionada por la tecnología y gestión de proyectos. Soy programadora Full Stack y de Base de
                        datos.
                    </p>
                    <div>
                        <a href="contacto.html" class=" p-2 mensaje">Enviar Mensaje</a>
                    </div>
                </div>
                <div class="col-12 col-sm-5 p-5 mt-5">
                    <img src="Images/AbigailEstherMonje3.jpg" alt="AbigailEstherMonje" class="foto-perfil">
                </div>
            </div>
        </section>
        <section id="stack-tecnologico">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-12 py-5">
                        <h2>
                            Stack tecnológico
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>Javascript</h3>
                            <img src="images/javascript (1).jpeg" alt="Javascript">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>PHP</h3>
                            <img src="images/php.png" alt="PHP">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>HTML5</h3>
                            <img src="Images/html5.png" alt="HTML5">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>React.js</h3>
                            <img src="Images/reactJs.png" alt="reactJs">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>jQuery</h3>
                            <img src="Images/jQuery.png" alt="jQuery">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>Boostrap</h3>
                            <img src="Images/boostrap.png" alt="boostrap">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>Laravel</h3>
                            <img src="Images/laravel.png" alt="laravel">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>mySQL</h3>
                            <img src="Images/mySQL.png" alt="mySQL">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>CSS</h3>
                            <img src="Images/css.png" alt="css">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>git</h3>
                            <img src="Images/git.png" alt="git">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>Apache</h3>
                            <img src="Images/apache.png" alt="apache">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>Mercadopago</h3>
                            <img src="Images/mercadopago.png" alt="mercadopago">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="experiencia-laboral">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-5">
                        <h2>
                            <i class="fa-solid fa-briefcase"></i> Experiencia laboral
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container shadow">
                <div class="row mt-7">
                    <div class="col-2 d-none d-sm-block p-5">
                        <img src="Images/sin-logo .png" alt="SinLogo" class="img-fluid">
                    </div>
                    <div class="col-sm-10 p-5">
                        <h3> Administrativa </h3>
                        <h4>Optica campañas visuales</h4>
                        <h5>abr-jul 2021</h5>
                        <p>
                            Carga de datos en planillas Excel. Manejo de stock. </p>
                    </div>
                </div>
                <div class="row mb-7">
                    <div class="col-2 d-none d-sm-block p-5">
                        <img src="Images/cat.png" alt="CAT" class="imagen-cat" class="">
                    </div>
                    <div class="col-sm-10 p-5">
                        <h3>Operadora </h3>
                        <h4>CAT TECHNOLOGIES SA</h4>
                        <h5>nov 2021-presente</h5>
                        <p>
                            Atención a clientes de Personal Flow en el sector de Gestiones especiales, bajo calidad
                            de COPC. Gestiono base de datos de acuerdo con requerimientos y objetivos comerciales de
                            la empresa. Capto, fidelizo, retengo y recupero a los clientes. Atiendo contactos de
                            información de entrada y de salida de productos. Comercializo productos y servicios de
                            telecomunicaciones por medios electrónicos. Experiencia en sistemas operativos: manejo
                            de CRM, OPEN GENESYS, AVAYA, SIEBEL, SALESFORCE.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="formacion-academica">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-5">
                        <h2>
                            <i class="fa-solid fa-graduation-cap"></i>Formación Académica
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container shadow">
                <div class="row mt-7">
                    <div class="col-2 d-none d-sm-block p-5">
                        <img src="Images/sin-logo .png" alt="SinLogo" class="img-fluid">
                    </div>
                    <div class="col-sm-10 p-5">
                        <h3>Bachiller en Comunicaciones</h3>
                        <h4>Escuela de Educación Secundaria 22</h4>
                        <h5>2011-2016</h5>
                    </div>
                    <div class="row mb-7">
                        <div class="col-2 d-none d-sm-block p-5">
                            <img src="Images/isft198.jpg" alt="isft198" class="img-fluid">
                        </div>
                        <div class="col-sm-10 p-5">
                            <h3> Técnico Superior en Administración Contable </h3>
                            <h4>Instituto Superior de Formación Técnica 198</h4>
                            <h5>2019-2021</h5>
                            <p>
                                https://isft198.jimdofree.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="cursos">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-4">
                        <h2>
                            <i class="fa-solid fa-graduation-cap"></i>Cursos de desarollo profesional
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container shadow mb-4">
                <div class="row mb-3">
                    <div class="col-2 d-none d-sm-block p-5">
                        <img src="images/DePc.jpg" alt="DePC" class="De-Pc">
                    </div>
                    <div class="col-sm-10 p-5">
                        <h3>Programación Full Stack</h3>
                        <h4>DePC Suite</h4>
                        <h5>Expedición:nov 2022</h5>
                        <p></p>
                    </div>
                </div>
            </div>
        </section>
        <section id="idiomas">
            <div class="container">
                <div class="row py-5 mb-5">
                    <div class="col-sm-6 col-12 pb-sm-0">
                        <div class="row mr-sm bg-white shadow m-5">
                            <div class="col-4 text-center idioma">
                                <i class="fas fa-comment-alt p-3"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h3 class="p-3">IDIOMAS</h3>
                                <ul>
                                    <li>Español: Nativo</li>
                                    <li>Inglés: Básico</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 pb-sm-0">
                        <div class="row mr-sm bg-white shadow m-5">
                            <div class="col-4 text-center idioma">
                                <i class="fas fa-star p-3"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h3 class="p-3">HOBBIES</h3>
                                <ul>
                                    <li>Gym</li>
                                    <li>Series</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
        </div>
    </footer>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>