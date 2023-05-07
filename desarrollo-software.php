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



    <section id="desarrollo-software">
        <div class="container">
            <div class="col-sm-12">
                <div class="mb-5 text-center">
                    <h2 data-animate="fadeInUp" class="title">Desarrollo de Software</h2>
                    <p data-animate="fadeInUp" class="lead"> </p>
                </div>

                <div>
                    <p data-animate="fadeInUp" class="lead">Ofrecemos servicios de desarrollo de software personalizados y adaptados a las necesidades específicas de cada cliente. Nuestro equipo de expertos en desarrollo de software está altamente capacitado para diseñar, desarrollar e implementar soluciones que ayuden a las empresas a mejorar sus procesos, aumentar la eficiencia y maximizar su rentabilidad.</p>
                </div>
                <div>
                    <p data-animate="fadeInUp" class="lead">Contamos con un enfoque ágil y colaborativo, lo que significa que trabajamos estrechamente con nuestros clientes para comprender sus objetivos y desafíos. A través de un proceso iterativo, creamos soluciones de software que se ajustan a las necesidades de nuestros clientes y les permiten lograr sus metas de manera efectiva y eficiente. Además, ofrecemos servicios de soporte y mantenimiento para asegurarnos de que el software siga funcionando sin problemas después de su implementación.</p>
                </div>
                <div>
                    <p data-animate="fadeInUp" class="lead">En resumen, nuestra oferta de servicios de desarrollo de software se enfoca en brindar soluciones personalizadas, utilizando tecnologías de última generación y un enfoque colaborativo para asegurarnos de que nuestros clientes logren el éxito en su negocio. Ya sea que necesite una aplicación móvil, un sistema de gestión empresarial o cualquier otro tipo de solución de software, nuestro equipo de expertos está listo para ayudarlo a alcanzar sus objetivos.</p>
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