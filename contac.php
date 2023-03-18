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
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container"><a href="#references" class="navbar-brand scrollTo">Carlos Bejarano </a>
                <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span class="fa fa-bars"></span></button>
                <div id="navbarcollapse" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="aboutme.php" class="nav-link link-scroll">Acerca de Mi</a></li>
                        <li class="nav-item"><a href="#references" class="nav-link link-scroll">Mi portafolio</a></li>
                        <li class="nav-item"><a href="contac.php" class="nav-link link-scroll">Contacto</a></li>


                    </ul>
                </div>
            </div>
        </nav>
    </header>



    <section id="contac">
        <div class="container">
            <div class="col-sm-12">
                <div class="mb-5 text-center">
                    <h2 data-animate="fadeInUp" class="title">Contactame</h2>
                    <p data-animate="fadeInUp" class="lead"></p>
                </div>
                <div id="after_submit"></div>
                <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <label class="required" for="name">Nombre:</label><br />
                        <input id="name" class="input" name="name" type="text" value="" size="30" /><br />
                        <span id="name_validation" class="error_message"></span>
                    </div>
                    <div class="row">
                        <label class="required" for="email">Correo electrónico:</label><br />
                        <input id="email" class="input" name="email" type="text" value="" size="30" /><br />
                        <span id="email_validation" class="error_message"></span>
                    </div>
                    <div class="row">
                        <label for="asunto">Asunto:</label><br />
                        <input type="text" id="asunto" name="asunto" required>
                        <span id="asunto_validation" class="error_message"></span>
                    </div>
                    <div class="row">
                        <label class="required" for="message">Mensaje:</label><br />
                        <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
                        <span id="message_validation" class="error_message"></span>
                    </div>

                    <input id="submit_button" type="submit" value="Enviar" />
                </form>

            </div>
        </div>
    </section>



    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left">
                    <p class="social"><a href="https://www.linkedin.com/in/full-stack-carlos-bejarano/" data-wow-delay="0.2s" class="external linkedin wow fadeInUp"><i class="fa fa-linkedin"></i></a><a href="#" data-wow-delay="0.2s" class="external instagram wow fadeInUp"><i class="fa fa-instagram"></i></a><a href="#" data-wow-delay="0.4s" class="external gplus wow fadeInUp"><i class="fa fa-google-plus"></i></a><a href="#" data-wow-delay="0.6s" class="email wow fadeInUp"><i class="fa fa-envelope"></i></a></p>
                </div>
                <!-- /.6-->
                <div class="col-md-6 text-center text-lg-right mt-4 mt-lg-0">
                    <p>© <?php echo date('Y'); ?> Carlos Bejarano. All rights reserved.</p>
                </div>
                <div class="col-12 mt-4">
                    <p class="template-bootstrapious">Template designed by <a href="https://www.bootstrapious.com">Bootstrapious</a>
                        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                    </p>
                </div>
            </div>
        </div>
    </footer>

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