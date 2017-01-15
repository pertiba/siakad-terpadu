<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
   <aside class="main-sidebar">
      <section class="sidebar">
      <div class="user-panel">
         <div class="pull-left image">
            <img src="<?php echo base_url("assets/img/avatar.jpg"); ?>" class="img-circle" alt="User Image">
         </div>
         <div class="pull-left info">
            <p><?php echo $this->session->userdata('account')->name; ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
         </div>
      </div>
      <ul class="sidebar-menu">
        <li class="header">MENU NAVIGASI</li>
        <li class="<?php echo active_link_controller('main'); ?>">
            <a href="<?php echo site_url('akademik/main') ?>">
               <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
        <li class="<?php echo active_link_controller('verifikasi_krs'); ?>">
            <a href="<?php echo site_url('akademik/verifikasi_krs') ?>">
               <i class="fa fa-file-text-o"></i> <span>Verifikasi KRS </span> 
              <span class="pull-right-container">
          <?php  
          /**
           * Count Notiikasi Unread
           *
           * @return string
           **/
          if($this->krs_callback->getPlain('0')) :
          ?>
                <small class="label pull-right bg-red" data-toggle="tooltip" data-placement="top" title="Belum diverifikasi"><?php echo count($this->krs_callback->getPlain('0')); ?></small>
          <?php  
          // End Condition
          endif;
          ?>
              </span>
            </a>
        </li>
        <li class="<?php echo active_link_controller('entrypoint'); ?>">
            <a href="<?php echo site_url('akademik/entrypoint') ?>">
               <i class="fa fa-pencil"></i> <span>Entry Nilai</span>
            </a>
        </li>
        <li class="treeview">
            <a href="#">
               <i class="fa fa-database"></i> <span>Master Data</span>
               <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
               </span>
            </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url("akademik/course") ?>"><i class="fa fa-minus"></i> Mata Kuliah</a></li>
            <li><a href="<?php echo site_url("akademik/lecture") ?>"><i class="fa fa-minus"></i> Dosen</a></li>
            <li><a href="<?php echo site_url("akademik/room") ?>"><i class="fa fa-minus"></i> Ruang Perkuliahan</a></li>
          </ul>
        </li>
        <li class="treeview <?php echo active_link_controller('student'); ?>">
            <a href="#">
               <i class="ion ion-ios-people"></i> <span>Mahasiswa</span>
               <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
               </span>
            </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo site_url("akademik/student") ?>" class="<?php echo active_link_method('index', 'student'); ?>"><i class="fa fa-minus"></i> Data Mahasiswa</a>
            </li>
            <li>
              <a href="<?php echo site_url('akademik/student/add') ?>" class="<?php echo active_link_method('add', 'student'); ?>"><i class="fa fa-minus"></i> Tambah Baru</a>
            </li>
            <li>
              <a href="<?php echo site_url('akademik/student/import') ?>" class="<?php echo active_link_method('import', 'student'); ?>"><i class="fa fa-minus"></i> Import</a>
            </li>
          </ul>
        </li>
        <li class="treeview <?php echo active_link_multiple(array('user')); ?>">
            <a href="#">
               <i class="fa fa-wrench"></i> <span>Pengaturan</span>
               <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
               </span>
            </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo site_url("akademik/user") ?>" class="<?php echo active_link_controller('user') ?>"><i class="fa fa-minus"></i> Pengguna Sistem</a>
            </li>
            <li>
              <a href="<?php echo site_url("akademik/role") ?>" class=""><i class="fa fa-minus"></i> Hak Akses Pengguna</a>
            </li>
            <li>
              <a href="<?php echo site_url("akademik/setting") ?>" class=""><i class="fa fa-minus"></i> Lain-lain</a>
            </li>
          </ul>
        </li>
      </ul>
      </section>
   </aside>
   <div class="content-wrapper">
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
/* End of file left_sidebar.php */
/* Location: ./application/modules/Akademik/views/_template/left_sidebar.php */
?>