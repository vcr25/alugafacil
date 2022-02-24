<?php $this->load->view('web/layout/navbar'); ?>





  <!-- ======= Intro Section ======= -->

  <div class="intro intro-carousel">



    <div id="carousel" class="owl-carousel owl-theme">

      <?php foreach($produtos_banner as $prod_destaques): ?>

      <div class="carousel-item-a intro-item bg-image" style="background-image: url(<?php echo base_url('uploads/produtos/'.$prod_destaques->foto_caminho)?> )">

        <div class="overlay overlay-a"></div>

        <div class="intro-content display-table">

          <div class="table-cell">

            <div class="container">

              <div class="row">

                <div class="col-lg-8">

                  <div class="intro-body">

                    <p style="font-size: 20px;" class="intro-title-top mt-4"><?php echo $prod_destaques->produto_cidade; ?>, São Paulo

                      <br> <?php echo $prod_destaques->produto_cep; ?>

                    </p>

                    <h1 style="font-size: 30px;" class="intro-title mb-4">

                      <span class="color-b"><?php echo $prod_destaques->produto_logradouro; ?> </span>  <?php echo $prod_destaques->produto_numero; ?>

                      <br> <?php echo $prod_destaques->marca_nome; ?>

                    </h1>

                    <p class="intro-subtitle intro-price">

                      <a href="<?php echo base_url('imovel/'.$prod_destaques->produto_meta_link); ?>"><span class="price-a">R$: <?php echo number_format($prod_destaques->produto_valor, 2); ?></span></a>

                    </p>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

  <?php endforeach; ?>

    </div>

  </div><!-- End Intro Section -->



  <main id="main">



    <!-- ======= Services Section ======= -->

    <section class="section-services section-t8">

      <div class="container">

        <div class="row">

          <div class="col-md-12">

            <div class="title-wrap d-flex justify-content-between">

              <div class="title-box">

                <h2 class="title-a">Nossos Serviços</h2>

              </div>

            </div>

          </div>

        </div>

        <div class="row">

            

          <!--<div class="col-md-4">

            <div class="card-box-c foo">

              <div class="card-header-c d-flex">

                <div class="card-box-ico">

                  <span class="fa fa-gamepad"></span>

                </div>

                <div class="card-title-c align-self-center">

                  <h2 class="title-c">Estilo </h2>

                </div>

              </div>

              <div class="card-body-c">

                <p class="content-c">

                  Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,

                  convallis a pellentesque

                  nec, egestas non nisi.

                </p>

              </div>

              <div class="card-footer-c">

                <a href="<?php echo base_url('contato'); ?>" class="link-c link-icon">Leia mais

                  <span class="ion-ios-arrow-forward"></span>

                </a>

              </div>

            </div>

          </div>-->

          

          <div class="col-md-6">

            <div class="card-box-c foo">

              <div class="card-header-c d-flex">

                <div class="card-box-ico">

                  <span class="fa fa-home"></span>

                </div>

                <div class="card-title-c align-self-center">

                  <h2 class="title-c">Locações</h2>

                </div>

              </div>

              <div class="card-body-c">

                <p class="content-c">

                 Residencial, comercial e por temporada.

                </p>

              </div>

              <!-- <div class="card-footer-c">

                <a href="<?php echo base_url('contato'); ?>" class="link-c link-icon">Leia mais

                  <span class="ion-ios-arrow-forward"></span>

                </a>

              </div> -->

            </div>

          </div>

          <div class="col-md-6">

            <div class="card-box-c foo">

              <div class="card-header-c d-flex">

                <div class="card-box-ico">

                  <span class="fa fa-usd"></span>

                </div>

                <div class="card-title-c align-self-center">

                  <h2 class="title-c">Vendas</h2>

                </div>

              </div>

              <div class="card-body-c">

                <p class="content-c">

               Imóveis com os melhores prelços de Ubatuba

                </p>

              </div>

             <!--  <div class="card-footer-c">

                <a href="<?php echo base_url('contato'); ?>" class="link-c link-icon">Leia mais

                  <span class="ion-ios-arrow-forward"></span>

                </a>

              </div> -->

            </div>

          </div>

        </div>

      </div>

    </section><!-- End Services Section -->



    <!-- ======= Latest Properties Section ======= -->



    <section class="section-property section-t8">

      <div class="container">

        <div class="row">

          <div class="col-md-12">

            <div class="title-wrap d-flex justify-content-between">

              <div class="title-box">

                <h2 class="title-a">Ultimas</h2>

                <p>Prodiedades</p>

              </div>

              <div class="title-link">

                <a href="<?php echo base_url('imovel/'); ?>">Todas

                    <p>Prodiedades</p>

                  <span class="ion-ios-arrow-forward"> </span>

                </a>

              </div>

            </div>

          </div>

        </div>



        <div id="property-carousel" class="owl-carousel owl-theme">

        <?php foreach($produtos_destaques as $prod_destaques): ?>

          <div class="carousel-item-b">

            <div class="card-box-a card-shadow">

              <div class="img-box-a">

                <img src="<?php echo base_url('uploads/produtos/small/'.$prod_destaques->foto_caminho)?>" alt="<?php echo $prod_destaques->produto_meta_link; ?>" class="img-a img-fluid">

              </div>

              <div class="card-overlay">

                <div class="card-overlay-a-content">

                  <div class="card-header-a">

                    <h2 class="card-title-a">

                      <a href="<?php echo base_url('imovel/'.$prod_destaques->produto_meta_link); ?>"><?php echo word_limiter($prod_destaques->produto_nome, 3); ?>



                    </h2>

                  </div>

                  <div class="card-body-a">

                    <div class="price-box d-flex">

                      <span class="price-a">R$: <?php echo number_format($prod_destaques->produto_valor, 2); ?></span>

                    </div>

                    <a href="<?php echo base_url('imovel/'.$prod_destaques->produto_meta_link); ?>" class="link-a">Ver propriedade

                      <span class="ion-ios-arrow-forward"></span>

                    </a>

                  </div>

                  <div class="card-footer-a">

                    <ul class="card-info d-flex justify-content-around">

                      <li>

                        <h4 class="card-info-title">Area</h4>

                        <span><?php echo $prod_destaques->produto_area; ?>

                          <sup>2</sup>

                        </span>

                      </li>

                      <li>

                        <h4 class="card-info-title">Quartos</h4>

                        <span><?php echo $prod_destaques->produto_quartos; ?></span>

                      </li>

                      <li>

                        <h4 class="card-info-title">Banheiros</h4>

                        <span><?php echo $prod_destaques->produto_banheiros; ?></span>

                      </li>

                      <li>

                        <h4 class="card-info-title">Garagens</h4>

                        <span><?php echo $prod_destaques->produto_garagem; ?></span>

                      </li>

                    </ul>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <?php endforeach; ?>

        </div>

      </div>

    </section><!-- End Latest Properties Section -->

 <!-- ======= Testimonials Section ======= -->

 <section class="section-testimonials section-t8 nav-arrow-a">

<div class="container">

  <div class="row">

    <div class="col-md-12">

      <div class="title-wrap d-flex justify-content-between">

        <div class="title-box">

          <h2 class="title-a">Testemunhos</h2>

        </div>

      </div>

    </div>

  </div>

  <div id="testimonial-carousel" class="owl-carousel owl-arrow">

    <div class="carousel-item-a">

      <div class="testimonials-box">

        <div class="row">

          <div class="col-sm-12 col-md-6">

            <div class="testimonial-img">

              <img src="<?php echo base_url('public/imobi/img/testimonial-1.jpg')?>" alt="" class="img-fluid">

            </div>

          </div>

          <div class="col-sm-12 col-md-6">

            <div class="testimonial-ico">

              <span class="ion-ios-quote"></span>

            </div>

            <div class="testimonials-content">

              <p class="testimonial-text">

                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium

                debitis hic ber quibusdam

                voluptatibus officia expedita corpori.

              </p>

            </div>

            <div class="testimonial-author-box">

              <img src="<?php echo base_url('public/imobi/img/mini-testimonial-1.jpg')?>" alt="" class="testimonial-avatar">

              <h5 class="testimonial-author">Albert & Erika</h5>

            </div>

          </div>

        </div>

      </div>

    </div>

    <div class="carousel-item-a">

      <div class="testimonials-box">

        <div class="row">

          <div class="col-sm-12 col-md-6">

            <div class="testimonial-img">

              <img src="<?php echo base_url('public/imobi/img/testimonial-2.jpg')?>" alt="" class="img-fluid">

            </div>

          </div>

          <div class="col-sm-12 col-md-6">

            <div class="testimonial-ico">

              <span class="ion-ios-quote"></span>

            </div>

            <div class="testimonials-content">

              <p class="testimonial-text">

                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium

                debitis hic ber quibusdam

                voluptatibus officia expedita corpori.

              </p>

            </div>

            <div class="testimonial-author-box">

              <img src="<?php echo base_url('public/imobi/img/mini-testimonial-2.jpg')?>" alt="" class="testimonial-avatar">

              <h5 class="testimonial-author">Pablo & Emma</h5>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>

</section><!-- End Testimonials Section -->

    <!-- ======= Agents Section ======= -->

    <section class="section-agents section-t8">

      <div class="container">

        <div class="row">

          <div class="col-md-12">

            <div class="title-wrap d-flex justify-content-between">

              <div class="title-box">

                <h2 class="title-b">Links recomendado</h2>

              </div>



            </div>

          </div>

        </div>

        <div class="row">



        <div class="col-md-4">

            <div class="card-box-d">

              <div class="card-img-d">

                <img src="<?php echo base_url('public/imobi/img/prefeitura-ubatuba.jpeg')?>" alt="" class="img-d img-fluid">
               
              </div>

              <div class="card-overlay card-overlay-hover">

                <div class="card-header-d">

                  <div class="card-title-d align-self-center">

                    <h3 class="title-d">

                      <a href="https://www.ubatuba.sp.gov.br/" target="blank" >Visite o site</a>

                    </h3>

                  </div>

                </div>



                <div class="card-footer-d">

                  <div class="socials-footer d-flex justify-content-center">



                  </div>

                </div>

              </div>

            </div>

          </div>



          <div class="col-md-4">

            <div class="card-box-d">

              <div class="card-img-d">

                <img src="<?php echo base_url('public/imobi/img/qualidade-das-praias.png')?>" alt="" class="img-d img-fluid">

              </div>

              <div class="card-overlay card-overlay-hover">

                <div class="card-header-d">

                  <div class="card-title-d align-self-center">

                    <h3 class="title-d">

                      <a href="https://qualipraia.cetesb.sp.gov.br/qualidade-da-praia/ubatuba.phtml" target="blank" >Visite o site</a>

                    </h3>

                  </div>

                </div>



                <div class="card-footer-d">

                  <div class="socials-footer d-flex justify-content-center">



                  </div>

                </div>

              </div>

            </div>

          </div>



          <div class="col-md-4">

            <div class="card-box-d">

              <div class="card-img-d">

                <img src="<?php echo base_url('public/imobi/img/logoFundart.jpg')?>" alt="" class="img-d img-fluid">

              </div>

              <div class="card-overlay card-overlay-hover">

                <div class="card-header-d">

                  <div class="card-title-d align-self-center">

                    <h3 class="title-d">

                      <a href="https://fundart.com.br/" target="blank" >Visite o site</a>

                    </h3>

                  </div>

                </div>



                <div class="card-footer-d">

                  <div class="socials-footer d-flex justify-content-center">



                  </div>

                </div>

              </div>

            </div>

          </div>

          <div class="col-md-4">

            <div class="card-box-d">

              <div class="card-img-d">

                <img src="<?php echo base_url('public/imobi/img/logoComtur.jpg')?>" alt="" class="img-d img-fluid">

              </div>

              <div class="card-overlay card-overlay-hover">

                <div class="card-header-d">

                  <div class="card-title-d align-self-center">

                    <h3 class="title-d">

                      <a href="https://comturubatuba.com.br/" target="blank" >Visite

                         o site </a>

                    </h3>

                  </div>

                </div>



                <div class="card-footer-d">

                  <div class="socials-footer d-flex justify-content-center">



                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </section><!-- End Agents Section -->



   



  </main><!-- End #main -->







</html>

