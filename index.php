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
  <section id="references">
    <div class="container">
      <div class="col-sm-12">
        <div class="container" style="position: relative;">
          <img class="profile-background-image__image relative
            full-width full-height" id="profile-background-image-target-image" alt="Imagen de fondo" src="fondo_1.jpg" style="left:0px;top:0px;">
          <h1 style="position: absolute; top: 50%; left: 15%; transform: translate(-50%, -50%);">Portafolio</h1>
        </div>
      </div>
    </br>
      <!-- Reference detail-->
      <div id="references-masonry" data-animate="fadeInUp">
        <div class="row">
          <?php
          $sql_banner_top = mysqli_query($con, "SELECT * FROM portafolio WHERE estado=1 ORDER BY orden");
          while ($row = mysqli_fetch_object($sql_banner_top)) {
          ?>
            <div data-category="webdesign" class="reference-item col-lg-12">
              <div class="row">
                <div class="col-md-6">
                  <img src="img/banner/<?php echo $row->url_image; ?>" alt="<?php echo $row->titulo; ?>" class="img-fluid rounded float-left shadow" style="height: 300px;">
                </div>
                <div class="col-md-6">
                  <div class="reference-description">
                    <h3 class="h4 reference-title"><?php echo $row->titulo; ?></h3>
                    <p><?php echo $row->descripcion; ?></p>
                    <p class="buttons text-center"><a href="<?php echo $row->url_web; ?>" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visitar Sitio Web</a></p>
                  </div>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
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