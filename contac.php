<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contacto</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto + Roboto Slab-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700%7CRoboto:400,700,300">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- animate.css-->
    <link rel="stylesheet" href="vendor/animate.css/animate.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.violet.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <!-- Reference item-->
    <!-- navbar-->
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container"><a href="#references" class="navbar-brand scrollTo">Carlos Bejarano </a>
                <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span class="fa fa-bars"></span></button>
                <div id="navbarcollapse" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="index.php" class="nav-link link-scroll">Inicio</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
                            <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                                <a class="dropdown-item" href="#">Desarrollo de software</a>
                                <a class="dropdown-item" href="#">Desarrollo de aplicaciones móviles</a>
                                <a class="dropdown-item" href="#">Aplicaciones WEB personalizadas</a>
                                <a class="dropdown-item" href="#">Business Intelligence</a>
                                <a class="dropdown-item" href="#">Mantenimiento y Soporte</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
                            <div class="dropdown-menu" aria-labelledby="productsDropdown">
                                <a class="dropdown-item" href="#">Solucion ERP Clinic</a>
                                <a class="dropdown-item" href="#">Sistema de gestión de inventarios</a>
                                <a class="dropdown-item" href="#">Sistema control de gastos y presupuesto</a>
                                <a class="dropdown-item" href="#">Sistema control de pagos</a>
                                <a class="dropdown-item" href="#">Sistema de gestión documental</a>
                                <a class="dropdown-item" href="#">Sistema control de citas</a>
                                <a class="dropdown-item" href="#">App móvil control de pagos</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="aws.php" class="nav-link link-scroll">AWS</a></li>
                        <li class="nav-item"><a href="clients.php" class="nav-link link-scroll">Clientes</a></li>
                        <li class="nav-item"><a href="aboutme.php" class="nav-link link-scroll">Acerca de Mi</a></li>
                        <li class="nav-item"><a href="#references" class="nav-link link-scroll">Mi portafolio</a></li>
                        <li class="nav-item"><a href="contac.php" class="nav-link link-scroll">Contáctenos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>



    <section class="contac">
        <div class="container">
            <div class="mb-5 text-center">
                <h2 data-animate="fadeInUp" class="title">Contactame</h2>
                <p data-animate="fadeInUp" class="lead"></p>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <form id="contact-form" method="post" action="contac.php" class="custom-form form">
                        <div class="controls">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Nombre</label>
                                        <input type="text" name="name" id="name" placeholder="Ingrese el nombre" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="surname" class="form-label">Apellido</label>
                                        <input type="text" name="surname" id="surname" placeholder="Ingrese el apellido" required="required" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" placeholder="Ingrese el email" required="required" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="message" class="form-label">Descripcion</label>
                                <textarea rows="4" name="message" id="message" placeholder="Mensaje aquí..." required="required" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Enviar Mensaje</button>
                        </div>
                    </form>
                </div>
                <!-- <div class="col-md-5">
                    <div class="social">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-behance"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
    </section>



    <?php
    include("./views/footer.php");
    ?>

    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="vendor/jquery.counterup/jquery.counterup.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script src="js/front.js"></script>
</body>

</html>