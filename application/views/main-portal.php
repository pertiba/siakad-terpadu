<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?> | Login</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css"); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url("assets/dist/css/AdminLTE.min.css"); ?>">
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url("assets/img/logo.png"); ?>"/>
  <style>
    body { height: auto; }
    .lockscreen-itme { padding: 10px; }
    .lockscreen-item a > img {
      border-radius: 10px; border:2.2px solid #cecece;
      margin-bottom: 15px;
    }
     a.btn-social { font-family: 'Arial Narrow'; }
    a.btn-social > i { color: #EBB906; border-color:white; }
/*     a.btn-social { background: #222A7B; color: white;  } */
    .box-warning { border-color: #444; }
    .lockscreen-footer { font-family: 'Arial'; font-size:12px; color:white; }
    .box { background: <?php echo ($this->agent->is_mobile()) ? 'none' : '#222A7B'; ?>; border-radius: 7px; border-color: ; }
  </style>
</head>
<body>
   <div class="container">
      <div class="row">
         <div class="col-md-6 col-md-offset-3 col-sm-5 col-xs-12" style="margin-top: 10%; text-align:center;">
           <div class="text-center">
             <img src="<?php echo base_url("assets/img/logo_login.png"); ?>" class="img" alt="logo siakad">
           </div>
            <div class="box" style="margin-top: 20px; border-color:#F8C301;">
               <div class="box-body">
                  <div class="col-md-6 col-xs-12">
                     <a href="<?php echo site_url('mahasiswa/login') ?>" class="btn btn-block btn-social btn-default btn-flat btn-lg">
                        <i class="ion ion-ios-people" style="font-size:27px;"></i> Mahasiswa
                     </a>
                     <a href="" class="btn btn-block btn-social btn-default btn-flat btn-lg">
                        <i class="fa fa-graduation-cap" style="font-size:22px;"></i> Alumni
                     </a>
                     <a href="<?php echo md5("nitinegoro") ?>" class="btn btn-block btn-social btn-default btn-flat btn-lg">
                        <i class="ion ion-person-stalker" style="font-size:24px;"></i> Dosen
                     </a>
                     <a href="" class="btn btn-block btn-social btn-default btn-flat btn-lg">
                        <i class="ion ion-person" style="font-size:24px;"></i> Dosen PA
                     </a>                 
                  </div>
                  <div class="col-md-6 col-xs-12">
                     <div class="hidden-md hidden-lg" style="margin-top:5px;"></div>
                     <a href="<?php echo site_url('akademik/login') ?>" class="btn btn-block btn-social btn-default btn-flat btn-lg">
                        <i class="fa fa-university" style="font-size:22px;"></i> Bag.  Akademik
                     </a>  
                     <a href="" class="btn btn-block btn-social btn-default btn-flat btn-lg">
                        <i class="ion-android-people" style="font-size:27px;"></i> Bag. Kemahasiswaan
                     </a>
                     <a href="" class="btn btn-block btn-social btn-default btn-flat btn-lg">
                        <i class="fa fa-cubes" style="font-size:22px;"></i> Bag.  Penjaminan Mutu
                     </a>    
                     <a href="" class="btn btn-block btn-social btn-default btn-flat btn-lg">
                        <i class="fa fa-money" style="font-size:24px;"></i> Bag.  Keuangan
                     </a>                     
                  </div>
                  <div class="col-md-12 col-xs-12" style="margin-top: 5px;">
                     <div class="hidden-md hidden-lg" style="margin-top:5px;"></div>
                     <a href="" class="btn btn-block btn-default btn-flat btn-lg">
                        <i class="fa fa-file-text" style="font-size:22px; color: #EBB906;"></i> <span style="padding-left: 20px; font-family: 'Arial Narrow'"> Pendaftaran Online</span>
                     </a>
                  </div>
               </div>
            </div>
            <div class="lockscreen-footer text-center">
               <small>Copyright &copy; 2016 - <?php echo date('Y'); ?> <a href="">IT Division</a> STIE Pertiba Pangkalpinang. All rights reserved.<small>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- /.center -->

<script src="<?php echo base_url("assets/plugins/jQuery/jquery-2.2.3.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/dist/js/jquery.backstretch.min.js"); ?>"></script>
    <script>
        $.backstretch("<?php echo base_url("assets/img/login-bg.jpg"); ?>", {speed:10});
    </script>

</body>
</html>
