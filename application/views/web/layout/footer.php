  <!-- ======= Footer ======= -->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Aluga Fácil Ubatuba</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
               Aqui você encontra os melhores imóveis para alugar ou comprar em Ubatuba.
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                    <span class="color-text-a">Celular: <?php echo $sistema->sistema_telefone_movel; ?> . </span>
                </li>
                <li class="color-a">
                  <span class="color-text-a">Telefone:  <?php echo $sistema->sistema_telefone_fixo; ?> .</span>
                </li>
                <li class="color-a">
                  <span class="color-text-a">Email: <?php echo $sistema->sistema_email ?> .</span>
                </li>
              </ul>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="<?php echo base_url('/'); ?>">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="<?php echo base_url('sobre'); ?>">Sobre</a>
              </li>
              <li class="list-inline-item">
                <a href="<?php echo base_url('imovel'); ?>">Propriedades</a>
              </li>

              <li class="list-inline-item">
                <a href="<?php echo base_url('contato'); ?>">Contato</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>


            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">Aluga Fácil Ubatuba</span> todos os direitos reservados.
            </p>
          </div>
          <div class="credits">
            <!--
              Designed by <a href="https://bootstrapmade.com/" target="_blank">BootstrapMade</a>
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->

          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('public/imobi/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('public/imobi/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?php echo base_url('public/imobi/vendor/jquery.easing/jquery.easing.min.js') ?>"></script>
  <script src="<?php echo base_url('public/imobi/vendor/php-email-form/validate.js') ?>"></script>
  <script src="<?php echo base_url('public/imobi/vendor/owl.carousel/owl.carousel.min.js') ?>"></script>
  <script src="<?php echo base_url('public/imobi/vendor/scrollreveal/scrollreveal.min.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('public/imobi/js/main.js') ?>"></script>
  </body>
</html>
