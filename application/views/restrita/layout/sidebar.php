  <!-- Sidebar -->
  <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="<?php echo base_url('public/assets/img/logo.png'); ?>" class="header-logo" /> <span
                class="logo-name">VCR25</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>

            <li class="dropdown <?php echo $this->router->fetch_class() == 'home' && $this->router->fetch_method() == 'index' ? 'active': '' ?>">
              <a href="<?php echo base_url('/restrita'); ?>" class="nav-link"><i data-feather="home"></i><span>Home</span></a>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="settings"></i><span>Configurações</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo base_url('/restrita/usuarios'); ?>">Usuarios</a></li>
                <li><a class="nav-link" href="<?php echo base_url('/restrita'); ?>">Home</a></li>
                <li><a class="nav-link" href="<?php echo base_url('/restrita/sistema'); ?>">Dados da Loja</a></li>
                <li><a class="nav-link" href="<?php echo base_url('/restrita/sistema/correios'); ?>">Configuração dos Correios</a></li>
                <li><a class="nav-link" href="<?php echo base_url('/restrita/sistema/pagseguro'); ?>">Configuração do Pagseguro</a></li>
                <li><a class="nav-link" href="<?php echo base_url('/restrita/produto'); ?>">Imóveis</a></li>

                <li><a class="nav-link" href="calendar.html">Calendar</a></li>
              </ul>
            </li>

            <li class="dropdown <?php echo $this->router->fetch_class() == 'usuarios' && $this->router->fetch_method() == 'index' ? 'active': '' ?>">
              <a href="<?php echo base_url('/restrita/usuarios'); ?>" class="nav-link"><i data-feather="users"></i><span>Usuários</span></a>
            </li>

            <li class="dropdown <?php echo $this->router->fetch_class() == 'sistema' && $this->router->fetch_method() == 'index' ? 'active': '' ?>">
              <a href="<?php echo base_url('/restrita/sistema'); ?>" class="nav-link"><i data-feather="airplay"></i><span>Dados da Loja</span></a>
            </li>

            <li class="dropdown <?php echo $this->router->fetch_class() == 'marcas' && $this->router->fetch_method() == 'index' ? 'active': '' ?>">
              <a href="<?php echo base_url('/restrita/marcas'); ?>" class="nav-link"><i data-feather="clipboard"></i><span>Bairros</span></a>
            </li>

            <li class="dropdown <?php echo $this->router->fetch_class() == 'produto' && $this->router->fetch_method() == 'index' ? 'active': '' ?>">
              <a href="<?php echo base_url('/restrita/produto'); ?>" class="nav-link"><i data-feather="truck"></i><span>Imóveis</span></a>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="package"></i><span>Categorias</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo base_url('/restrita/master'); ?>">Categorias Pai</a></li>
                <li><a class="nav-link" href="<?php echo base_url('/restrita/categorias'); ?>">Categorias filho</a></li>

              </ul>
            </li>


            <li class="dropdown <?php echo $this->router->fetch_class() == 'sair' && $this->router->fetch_method() == 'index' ? 'active': '' ?>">
              <a href="<?php echo base_url('/restrita/login/logout'); ?>" class="nav-link"><i data-feather="log-out"></i><span>Sair</span></a>
            </li>


          </ul>
        </aside>
      </div>
