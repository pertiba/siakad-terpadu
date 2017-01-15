<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$my = $this->account->getAll($this->session->has_userdata('account_id'));
?>
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo site_url('mahasiswa/main') ?>">
            <img src="<?php echo base_url("assets/img/brand.png"); ?>" class="logo-head" alt="Logo STIE Pertiba">
          </a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="<?php echo (!$my->photo) ? base_url("assets/dist/img/user2-160x160.jpg") : base_url("assets/dist/img/user2-160x160.jpg"); ?>" class="user-image" alt="User Image">
                <span><?php echo $my->name; ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="<?php echo (!$my->photo) ? base_url("assets/dist/img/user2-160x160.jpg") : base_url("assets/dist/img/user2-160x160.jpg"); ?>" class="img-circle" alt="User Image">
                  <p> <?php echo $my->name; ?> <small><?php echo $my->study; ?></small> </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?php echo site_url('mahasiswa/account'); ?>" class="btn btn-default btn-flat">Profile</a>
                    <a href="<?php echo site_url('mahasiswa/account/setting'); ?>" class="btn btn-default btn-flat">Setting</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" data-toggle="modal" data-target="#logout" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="collapse navbar-collapse pull-<?php echo ($this->agent->is_mobile()) ? 'left' : 'right'; ?>" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="<?php echo active_link_controller('main'); ?>"><a href="<?php echo site_url('mahasiswa/main') ?>">Home</a></li>
            <li class="dropdown <?php echo active_link_controller('krs'); ?>">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">KRS <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li class="<?php echo active_link_method('krs', 'index'); ?>"><a href="<?php echo site_url('mahasiswa/krs'); ?>" >Penyusunan KRS</a></li>
                <li><a href="<?php echo site_url('mahasiswa/view'); ?>">Lihat KRS</a></li>
              </ul>
            </li>
            <li class="<?php echo active_link_controller('khs'); ?>"><a href="<?php echo site_url('mahasiswa/khs') ?>">KHS</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Panduan Sistem <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Penyusunan KRS</a></li>
                <li><a href="#">Pilih Kelompok</a></li>
                <li><a href="#">Jadwal Kuliah</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <div class="content-wrapper">
    <div class="container">
      <section class="content-header">
        <?php 
        /**
         * Generated Page Title
         *
         * @return string
         **/
          echo $page_title;

        /**
         * Generate Breadcrumbs from library
         *
         * @var string
         **/
          echo $breadcrumb; 
        ?>
      </section>
      <section class="content">

<?php  
/* End of file menu.php */
/* Location: ./application/modules/Mahasiswa/views/_template/menu.php */
?>