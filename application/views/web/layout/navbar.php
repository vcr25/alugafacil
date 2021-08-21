<?php $sistema = info_header_footer(); ?>

<!-- ======= Property Search Section ======= -->
<div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Buscar</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
    <?php $atributos = array(
        'class' => 'hm-searchbox',
      ); ?>
        <?php echo form_open('busca', $atributos); ?>

            <input type="text" name="busca" placeholder="Pesquisar">
            <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>

        <?php echo form_close(); ?>
    </div>
  </div><!-- End Property Search Section -->


 <!-- ======= Header/Navbar ======= -->
 <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
        <a href="<?php echo base_url('/'); ?>"><img style="width: 110px;height:110px; margin-top: -8px; margin-bottom: -15px;" src="<?php echo base_url('public/imobi/img/aluga2.jpg') ?>"></a>
      <!--<a class="navbar-brand text-brand" href="<?php echo base_url('/'); ?>">Aluga <span class="color-b"> Fácil Ubatuba</span></a>-->
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" title="Home" href="<?php echo base_url('/'); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" title="Sobre" href="<?php echo base_url('sobre/'); ?>">Sobre</a>
          </li>
          <li class="nav-item dropdown">
          <?php $categorias_pai = categorias_pai_navbar(); ?>
         <a class="nav-link dropdown-toggle" title="Propriedades" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Propriedades
         </a>

         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <?php foreach ($categorias_pai as $cat_pai): ?>
          <?php $categorias_filha = categorias_filha_navbar($cat_pai->categoria_pai_id); ?>
          <?php foreach ($categorias_filha as $cat_filha): ?>
           <a class="dropdown-item" href="<?php echo base_url('categoria/'.$cat_filha->categoria_meta_link) ?>"><?php echo $cat_filha->categoria_nome; ?></a>
           <?php endforeach; ?>
           <?php endforeach; ?>
         </div>

       </li>


          <?php $grandes_marcas = grandes_marcas_navbar(); ?>
          <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle" title="Bairros" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Bairros
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php foreach ($grandes_marcas as $marca): ?>
              <a class="dropdown-item" href="<?php echo base_url('bairro/'.$marca->marca_meta_link) ?>"><?php echo $marca->marca_nome; ?></a>
              <?php endforeach; ?>
            </div>

          </li>
          <li class="nav-item">
            <a class="nav-link" title="Contato" href="<?php echo base_url('contato'); ?>">Contato</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav><!-- End Header/Navbar -->
