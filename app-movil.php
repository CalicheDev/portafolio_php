<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Servicios</title>

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
    <?php
    include("./views/head.php");
    ?>



    <section id="app-movil">
        <div class="container">
            <div class="col-sm-12">
                <div class="mb-5 text-center">
                    <h2 data-animate="fadeInUp" class="title">Desarrollo de aplicaciones móviles</h2>
                    <p data-animate="fadeInUp" class="lead"> </p>
                </div>

                <div>
                    <p data-animate="fadeInUp" class="lead">Ofrecemos servicios de desarrollo de aplicaciones móviles de alta calidad y personalizadas para ayudar a nuestros clientes a llevar sus ideas de negocios a dispositivos móviles. Nos especializamos en el desarrollo de aplicaciones móviles para iOS y Android, utilizando tecnologías de vanguardia para crear experiencias de usuario innovadoras y atractivas. Nuestro equipo de desarrolladores móviles altamente capacitados trabaja estrechamente con nuestros clientes para entender sus necesidades y objetivos de negocio y convertirlos en una aplicación móvil funcional y atractiva.</p>
                </div>
                <div>
                    <p data-animate="fadeInUp" class="lead">En nuestro proceso de desarrollo de aplicaciones móviles, nos enfocamos en garantizar una experiencia de usuario sin problemas, rápida y eficiente. Desde el diseño de la interfaz de usuario y la experiencia de usuario, hasta el desarrollo y pruebas de la aplicación, nuestro equipo trabaja para crear una aplicación que sea fácil de usar y funcione sin problemas. Además, ofrecemos servicios de mantenimiento y soporte continuos para asegurar que la aplicación siga funcionando a su máximo potencial.</p>
                </div>
                <div>
                    <p data-animate="fadeInUp" class="lead">Nuestros servicios de desarrollo de aplicaciones móviles son ideales para empresas y organizaciones que buscan expandir su presencia en línea y mejorar la experiencia del usuario. Nos aseguramos de que nuestras aplicaciones móviles sean seguras, escalables y adaptables a medida que evoluciona la tecnología y las necesidades de negocio. Si está buscando una solución personalizada de aplicaciones móviles, nuestro equipo de desarrollo de aplicaciones móviles está aquí para ayudarlo a llevar su negocio al siguiente nivel.</p>
                </div>
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