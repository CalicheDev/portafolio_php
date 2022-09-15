<section id="aboutme">
    <div class="container">
      <div class="col-sm-12">
        <div class="mb-5 text-center">
          <h2 data-animate="fadeInUp" class="title">Acerca de mi</h2>
          <p data-animate="fadeInUp" class="lead">Esta es mi historia.</p>
        </div>

        <div id="detail">
          <div class="row">
            <div class="col-lg-10 mx-auto"><span class="close">×</span>
              <div id="detail-slider" class="owl-carousel owl-theme"></div>
              <div class="text-center">
                <h1 id="detail-title" class="title"></h1>
              </div>
              <div id="detail-content"></div>
            </div>
          </div>
        </div>
        <!-- Reference detail-->
        <div id="aboutme-masonry" data-animate="fadeInUp">
          <div class="row">
            <?php
            $sql_banner_top = mysqli_query($con, "select * from portafolio where estado=1 order by orden ");
            while ($row = mysqli_fetch_object($sql_banner_top)) {
            ?>
              <div data-category="webdesign" class="reference-item col-lg-4 col-md-6">
                <div class="reference"><a href="#"><img src="img/banner/<?php echo $row->url_image; ?>" alt="" class="img-fluid">
                    <div class="overlay">
                      <div class="inner">
                        <h3 class="h4 reference-title"><?php echo $row->titulo; ?></h3>
                        <p><?php echo $row->descripcion_corta; ?></p>
                      </div>
                    </div>
                  </a>
                  <div data-images="img/banner/<?php echo $row->url_image; ?>" class="sr-only reference-description">

                    <p class="buttons text-justify"><?php echo $row->descripcion; ?></p>
                    <p class="buttons text-center"><a href="<?php echo $row->url_web; ?>" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visitar Sitio Web</a></p>

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