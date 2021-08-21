<?php $this->load->view('web/layout/navbar'); ?>
    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
            <?php echo $titulo; ?>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="<?php echo base_url('/'); ?>">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                <?php echo $termo_digitado; ?>
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->


    <section class="property-grid grid">
      <div class="container">
        <div class="row">

        <?php if(isset($produtos)):  ?>
            <?php foreach($produtos as $prod_destaques): ?>

          <div class="col-md-4">
            <div class="card-box-a card-shadow">

              <div class="img-box-a">
                <img src="<?php echo base_url('uploads/produtos/'.$prod_destaques->foto_caminho)?>" alt="" class="img-a img-fluid">
              </div>

              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="#"><?php echo word_limiter($prod_destaques->produto_nome, 5); ?>

                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a"><?php echo $prod_destaques->produto_valor; ?></span>
                    </div>
                    <a href="<?php echo base_url('imovel/'.$prod_destaques->produto_meta_link); ?>" class="link-a">Ver Propiedade
                      <span class="ion-ios-arrow-forward"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Area</h4>
                        <span><?php echo $prod_destaques->produto_area;?>m
                          <sup>2</sup>
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Quartos</h4>
                        <span><?php echo $prod_destaques->produto_quartos;?></span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Banheiros</h4>
                        <span><?php echo $prod_destaques->produto_banheiros;?></span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Garagens</h4>
                        <span><?php echo $prod_destaques->produto_garagem;?></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
          <?php else: ?>

             <div class="col-lg-12 text-center">
               <p style="color:#2ECA6A;">Nenhuma propriedade encontrada!</p>

               <img width="50%" src="<?php echo base_url('public/web/images/under.png')?>" alt="product image thumb">
             </div>


          <?php endif; ?>


        </div>

      </div>
    </section><!-- End Property Grid Single-->
