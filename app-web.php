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



    <section id="app-web">
        <div class="container">
            <div class="col-sm-12">
                <div class="mb-5 text-center">
                    <h2 data-animate="fadeInUp" class="title">Aplicaciones WEB personalizadas</h2>
                    <p data-animate="fadeInUp" class="lead"> </p>
                </div>

                <div>
                    <p data-animate="fadeInUp" class="lead">Nuestros servicios de desarrollo de aplicaciones web personalizadas están diseñados para satisfacer las necesidades específicas de su empresa. Trabajamos de cerca con nuestros clientes para entender sus objetivos y desafíos únicos, y desarrollar soluciones personalizadas que impulsen su negocio hacia adelante.</p>
                </div>
                <div>
                    <p data-animate="fadeInUp" class="lead">Nos enfocamos en la creación de aplicaciones web escalables, seguras y fáciles de usar que ofrezcan una experiencia de usuario excepcional. Utilizamos tecnologías de vanguardia y metodologías ágiles para garantizar que nuestros productos sean de alta calidad y se entreguen a tiempo y dentro del presupuesto.</p>
                </div>
                <div>
                    <p data-animate="fadeInUp" class="lead">Ya sea que necesite una aplicación web de comercio electrónico, una plataforma de gestión de contenido o cualquier otro tipo de solución personalizada, nuestro equipo de expertos en desarrollo web trabajará con usted desde el inicio del proyecto hasta su finalización para asegurarse de que obtenga los resultados que espera. Contáctenos hoy para obtener más información sobre cómo podemos ayudar a su negocio a crecer con nuestras soluciones de aplicaciones web personalizadas.</p>
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