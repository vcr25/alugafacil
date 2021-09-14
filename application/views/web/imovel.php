<?php $this->load->view('web/layout/navbar'); ?>



  <main id="main">



    <!-- ======= Intro Single ======= -->

    <section class="intro-single mt-4">

      <div class="container">

        <div class="row">

            <div class="col-md-12 col-lg-4">

            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">

              <ol class="breadcrumb">

                <li class="breadcrumb-item">

                  <a href="<?php echo base_url('/'); ?>">Home</a>

                </li>

                <li class="breadcrumb-item">

                  <a href="<?php echo base_url('imovel/'); ?>">Propriedades</a>

                </li>

                <li class="breadcrumb-item active" aria-current="page">

                  <?php echo word_limiter($produto->produto_nome, 3); ?>

                </li>

              </ol>

            </nav>

          </div>

          <div class="col-md-12 col-lg-8">

            <div class="title-single-box">

              <h1 class="title-single"><?php echo word_limiter($produto->produto_nome, 5); ?></h1>

              <span class="color-text-a"><?php echo $produto->produto_cidade ?>, <?php echo $produto->produto_cep; ?></span>

            </div>

          </div>

          

          

          

        </div>

      </div>

    </section><!-- End Intro Single-->



    <!-- ======= Property Single ======= -->

    <section class="property-single nav-arrow-b">

      <div class="container">

        <div class="row">

          <div class="col-sm-12">



            <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">

            <?php foreach ($fotos_produtos as $foto): ?>

              <div class="carousel-item-b">

                <img  src="<?php echo base_url('uploads/produtos/' . $foto->foto_caminho); ?>"   alt="<?php echo word_limiter($produto->produto_nome, 3); ?>" >

              </div>

              <?php endforeach; ?>

            </div>



            <div class="row justify-content-between">

              <div class="col-md-5 col-lg-4">

                <div class="property-price d-flex justify-content-center foo">

                  <div class="card-header-c d-flex">

                    <div class="card-box-ico">

                      <span class="ion-money"><?php echo 'R$&nbsp;' . number_format($produto->produto_valor, 2); ?></span>

                    </div>

                    <div class="card-title-c align-self-center">

                      <h5 class="title-c"></h5>

                    </div>

                  </div>

                </div>

                <div class="property-summary">

                  <div class="row">

                    <div class="col-sm-12">

                      <div class="title-box-d section-t4">

                        <h3 class="title-d">Dados da propriedade</h3>

                      </div>

                    </div>

                  </div>

                  <div class="summary-list">

                    <ul class="list">

                      <li class="d-flex justify-content-between">

                        <strong>Código da propriedade:</strong>

                        <span><?php echo $produto->produto_codigo; ?></span>

                      </li>

                      <li class="d-flex justify-content-between">

                        <strong>Localização:</strong>

                        <span><?php echo $produto->produto_logradouro; ?>, <?php echo $produto->produto_numero; ?></span>

                      </li>

                      <li class="d-flex justify-content-between">

                        <strong>Tipo da propriedade:</strong>

                        <span><?php echo $produto->produto_tipo; ?></span>

                      </li>

                      <li class="d-flex justify-content-between">

                        <strong>Situação:</strong>



                        <span><?php echo ($produto->produto_ativo == 1 ? '<span ">Disponível</span>' : '<span  >Indisponível</span>'); ?></span>

                      </li>

                      <li class="d-flex justify-content-between">

                        <strong>Area:</strong>

                        <span><?php echo $produto->produto_area; ?>

                          m<sup>2</sup>

                        </span>

                      </li>

                      <li class="d-flex justify-content-between">

                        <strong>Quartos:</strong>

                        <span><?php echo $produto->produto_quartos; ?></span>

                      </li>

                      <li class="d-flex justify-content-between">

                        <strong>Banheiros:</strong>

                        <span><?php echo $produto->produto_banheiros; ?></span>

                      </li>

                      <li class="d-flex justify-content-between">

                        <strong>Garagem:</strong>

                        <span><?php echo $produto->produto_garagem; ?></span>

                      </li>

                    </ul>

                  </div>

                </div>

              </div>

              <div class="col-md-7 col-lg-7 section-md-t3">

                <div class="row">

                  <div class="col-sm-12">

                    <div class="title-box-d">

                      <h3 class="title-d">Descrição</h3>

                    </div>

                  </div>

                </div>

                <div class="property-description">

                  <p class="description color-text-a">

                  <?php echo $produto->produto_descricao; ?>

                  </p>



                </div>

                <!--

                <div class="row section-t3">

                  <div class="col-sm-12">

                    <div class="title-box-d">

                      <h3 class="title-d">Comodidades</h3>

                    </div>

                  </div>

                </div>

                <div class="amenities-list color-text-a">

                  <ul class="list-a no-margin">

                    <li>Balcony</li>

                    <li>Outdoor Kitchen</li>

                    <li>Cable Tv</li>

                    <li>Deck</li>

                    <li>Tennis Courts</li>

                    <li>Internet</li>

                    <li>Parking</li>

                    <li>Sun Room</li>

                    <li>Concrete Flooring</li>

                  </ul>

                </div>

              -->

              </div>

            </div>

          </div>
            <?php if($produto->produto_video_link): ?>
          <div class="col-md-10 offset-md-1">

            <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">

              <li class="nav-item">

                <a class="nav-link active" id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab" aria-controls="pills-video" aria-selected="true">Video</a>

              </li>





            </ul>

            <div class="tab-content" id="pills-tabContent">

              <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
              <?php $link = $produto->produto_video_link; ?>
                 
                 <iframe src="https://player.vimeo.com/video/<?php echo $link ?>" width="100%" height="460" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
                 
              </div>

            </div>

          </div>
          <?php endif; ?>
          <div class="col-md-12">

            <div class="row section-t3">

              <div class="col-sm-12">

                <div class="title-box-d">

                  <h3 class="title-d">Dados do proprietário</h3>

                </div>

              </div>

            </div>

            <div class="row">

              <div class="col-md-6 col-lg-4">

                <img src="assets/img/agent-4.jpg" alt="" class="img-fluid">

              </div>

              <div class="col-md-6 col-lg-4">

                <div class="property-agent">

                  <h4 class="title-agent"><?php echo $produto->produto_nome_proprietario; ?></h4>



                  <ul class="list-unstyled">

                    <li class="d-flex justify-content-between">

                      <strong>Telefone:</strong>

                      <span class="color-text-a"><?php echo $produto->produto_fixo_proprietario; ?></span>

                    </li>

                    <li class="d-flex justify-content-between">

                      <strong>Celular:</strong>

                      <span class="color-text-a"><?php echo $produto->produto_cel_proprietario; ?></span>

                    </li>

                    <li class="d-flex justify-content-between">

                      <strong>Email:</strong>

                      <span class="color-text-a"><?php echo $produto->produto_email_proprietario; ?></span>

                    </li>



                  </ul>



                </div>

              </div>



            </div>

          </div>

        </div>

      </div>

    </section><!-- End Property Single-->



  </main><!-- End #main -->

