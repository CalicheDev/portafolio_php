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
  <?php
  include("./views/head.php");
  ?>



  <section id="aboutme">
    <div class="container">
      <div class="col-sm-12">
        <div class="mb-5 text-center">
          <h2 data-animate="fadeInUp" class="title">Acerca de mi</h2>
          <p data-animate="fadeInUp" class="lead"></p>
        </div>

        <div>
          <p data-animate="fadeInUp" class="lead">
            Soy un Desarrollador Web y Analista de Datos con una amplia experiencia en el desarrollo de software personalizado, gestión de la información y bases de datos. Ofrezco mis servicios en Desarrollo Web, Análisis de Datos, Gestión de la Información y Desarrollo de Bases de Datos.</p>
        </div>
        <div>
          <p data-animate="fadeInUp" class="lead">
            Tengo experiencia en el manejo de herramientas y tecnologías como Laravel, JavaScript, PHP, React.js, Django, Django REST framework, JSON Web Token (JWT), SQL Server T-SQL, Power BI y Power Pivot. He sido capaz de crear informes detallados y alertas de seguimiento que han ayudado a mis superiores a tomar decisiones basadas en datos.</p>
        </div>
        <div>
          <p data-animate="fadeInUp" class="lead">
            Mi objetivo profesional es ayudarte a llevar a cabo tus proyectos de manera eficiente y efectiva. Busco trabajar con empresas que valoren mis habilidades y me permitan aplicar todo lo que he aprendido hasta ahora, mientras continúo creciendo tanto personal como profesionalmente.</p>
        </div>
        <div>
          <p data-animate="fadeInUp" class="lead">
            Soy una persona apasionada por mi trabajo y siempre estoy buscando nuevas oportunidades para mejorar mis habilidades y alcanzar mis metas. Estoy comprometido con mi desarrollo continuo y siempre estoy buscando maneras de mejorar y crecer profesionalmente</p>
        </div>
        <div>
          <p data-animate="fadeInUp" class="lead">
            Si estás buscando servicios de Desarrollo Web, App móviles, BI, AWS y Analisis de Datos, estoy seguro de que puedo cumplir tus necesidades. Por favor, no dudes en contactarme a través de LinkedIn o enviarme un correo electrónico para discutir cómo puedo ayudarte a alcanzar tus objetivos.</p>
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