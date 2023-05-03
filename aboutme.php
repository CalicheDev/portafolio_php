<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Acerca de Mi</title>

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



  <section id="aboutme">
    <div class="container">
      <div class="col-sm-12">
        <div class="mb-5 text-center">
          <h2 data-animate="fadeInUp" class="title">Acerca de mi</h2>
          <p data-animate="fadeInUp" class="lead">Full-Stack Developer | Laravel & React.js | Node.js - JavaScript - PHP, SQL Server - MySQL | Geek & Friki & Bitcoiner</p>
        </div>

        <div>
          <p data-animate="fadeInUp" class="lead">Soy Desarrollador Full-Stack. He realizado algunos proyectos usando PHP, JavaScript y también
            utilizando tecnologías como Laravel, MySQL y SQLServer. Además soy competente en el uso de SQL Server y Windows. Mi objetivo es crecer como
            Desarrollador y DevOps en el corto, mediano y largo plazo; pretendo alcanzar un alto nivel técnico y de análisis en el desarrollo de aplicaciones web, Big Data, Data Science
            y desempeñar un papel en la arquitectura de software para crear excelentes aplicaciones que ayuden a mejorar el desempeño de las organizaciones, mejorar sus procesos y obtener de forma
            rapida y agil los datos para una mejor toma de desiciones. Trabajo en equipo, comunicación y mejora continua, resolución de problemas y orientación a los detalles son habilidades que me permiten hacer
            un excelente trabajo.</p>
        </div>
        <div>
          <p data-animate="fadeInUp" class="lead">I am Full-Stack Developer. I've developed some projects using PHP, JavaScript, and also implemented technologies such as Laravel, MySQL and SQLServer. I am also proficient using SQL, and Windows. My goal is grow as a developer and DevOps, reach a high seniority level and take a role in software architecture to create great applications. Team player, communication, problem-solving, and detail-oriented are skills that allows me to do an excellent job.</p>
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