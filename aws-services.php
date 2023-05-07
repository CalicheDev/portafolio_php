<?php
include("conexion.php");

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portafolio</title>

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


    <!--
    *** REFERENCES IMAGE ***
    _________________________________________________________
    -->
    <section id="services">
        <div class="container">
            <div class="mb-5 text-center">
                <h2 data-animate="fadeInUp" class="title">Servicios de consultoría de AWS</h2>
                <p data-animate="fadeInUp" class="lead">Mejore la eficiencia de su negocio utilizando los servicios de AWS.</p>
            </div>

            <!-- <header class="section-header">
                <h3>Servicios de consultoría de AWS</h3>
                <p>Mejore la eficiencia de su negocio utilizando los servicios de AWS.</p>
            </header> -->

            <div class="row">
                <!-- Service cards -->
                <div class="col-md-4 col-lg-4">
                    <div class="card rounded-0 border-0 mb-4">
                        <div class="card-body text-center">
                            <h4 data-animate="fadeInUp" class="card-title">Consultoría en la nube de AWS</h4>
                            <p data-animate="fadeInUp" class="card-text">
                                Con este servicio de AWS ofrecemos asesoramiento especializado y personalizado para
                                ayudar a los clientes a diseñar, planificar e implementar soluciones en la nube de AWS
                                que satisfagan sus necesidades empresariales. Los consultores en la nube de AWS ayudan
                                a los clientes a comprender los conceptos fundamentales de la nube, a evaluar su arquitectura
                                actual y a diseñar soluciones escalables, seguras y rentables para la nube.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div class="card rounded-0 border-0 mb-4">
                        <div class="card-body text-center">
                            <h4 data-animate="fadeInUp" class="card-title">Migración a la nube de AWS</h4>
                            <p data-animate="fadeInUp" class="card-text">
                                Con este servicio de AWS nos enfocamos en ayudar a los clientes a migrar sus aplicaciones y
                                cargas de trabajo actuales a la nube de AWS. AWS ofrece una amplia variedad de herramientas
                                y servicios para facilitar el proceso de migración, desde la evaluación inicial de la
                                migración hasta la implementación final de las aplicaciones en la nube.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div class="card rounded-0 border-0 mb-4">
                        <div class="card-body text-center">
                            <h4 data-animate="fadeInUp" class="card-title">Servicios de administración de AWS</h4>
                            <p data-animate="fadeInUp" class="card-text">
                                Con este servicio de AWS ofrecemos soporte para la gestión y el mantenimiento de las soluciones
                                en la nube de AWS. Los servicios de administración de AWS incluyen monitoreo, automatización,
                                resolución de problemas y optimización de la infraestructura y las aplicaciones en la nube de AWS.
                                Esto permite a los clientes enfocarse en su negocio principal mientras AWS se encarga de la
                                gestión de la infraestructura subyacente.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Service cards -->
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