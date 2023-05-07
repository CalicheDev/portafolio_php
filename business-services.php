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
                    <h2 data-animate="fadeInUp" class="title"> Business Intelligence Services</h2>
                    <p data-animate="fadeInUp" class="lead"> </p>
                </div>

                <div>
                    <p data-animate="fadeInUp" class="lead">Nuestros servicios de Business Intelligence se enfocan en ayudar a las empresas a obtener el máximo valor de sus datos. Trabajamos con los clientes para entender sus necesidades, identificar los datos relevantes y crear soluciones personalizadas que permitan la toma de decisiones informadas y la optimización de los procesos de negocio.</p>
                </div>
                <div>
                    <p data-animate="fadeInUp" class="lead">Ofrecemos un amplio rango de servicios de BI, incluyendo la integración de datos, la implementación de soluciones de reporting y análisis, la visualización de datos y la creación de dashboards personalizados. Trabajamos con diferentes plataformas de BI como Microsoft Power BI, Tableau, QlikView y más, y nos enfocamos en ofrecer soluciones flexibles y escalables que puedan adaptarse a las necesidades cambiantes de nuestros clientes.</p>
                </div>
                <div>
                    <p data-animate="fadeInUp" class="lead">En resumen, nuestro equipo de expertos en Business Intelligence puede ayudar a su empresa a obtener una visión completa de sus datos, permitiendo la identificación de tendencias, patrones y oportunidades que de otra manera podrían pasar desapercibidas. Ya sea que se trate de la integración de datos de múltiples fuentes, la creación de dashboards interactivos o la implementación de soluciones de análisis avanzado, estamos comprometidos en ayudar a nuestros clientes a mejorar su eficiencia y tomar decisiones más informadas.</p>
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