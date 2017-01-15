<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$date = new DateTime($get->birts);
?>
<div class="row">
   <div class="col-md-4">
      <div class="box box-widget widget-user-2">
         <div class="widget-user-header bg-yellow">
            <div class="widget-user-image">
               <img class="img-circle" src=<?php echo base_url('assets/dist/img/user7-128x128.jpg'); ?> alt="User Avatar">
            </div>
            <h3 class="widget-user-username"><?php echo $get->name; ?></h3>
            <h5 class="widget-user-desc"><?php echo $get->study; ?></h5>
         </div>
         <div class="box-footer no-padding">
            <ul class="nav nav-stacked">
               <li><a href="#">Jumlah SKS <span class="pull-right badge bg-blue">31</span></a></li>
               <li><a href="#">IPK <span class="pull-right badge bg-aqua">5</span></a></li>
               <li><a href="#">Jumlah Mata Kuliah <span class="pull-right badge bg-green">12</span></a></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="col-md-8">
      <div class="box box-warning">
         <div class="box-header with-border">
            <h3 class="box-title">Data Identitas</h3>
         </div>
         <div class="box-body form-horizontal">
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th class="col-xs-3">NPM <span class="pull-right">:</span></th>
                     <td><?php echo $get->npm; ?></td>
                  </tr>
                  <tr>
                     <th class="col-xs-3">Nama Lengkap <span class="pull-right">:</span></th>
                     <td><?php echo $get->name; ?></td>
                  </tr>
                  <tr>
                     <th class="col-xs-3">Jenis Kelamin <span class="pull-right">:</span></th>
                     <td><?php echo ucfirst($get->gender); ?></td>
                  </tr>
                  <tr>
                     <th class="col-xs-3">Tempat, Tanggal Lahir <span class="pull-right">:</span></th>
                     <td><?php echo $get->place_of_birts . ', ' . $date->format('d M Y '); ?></td>
                  </tr>
                  <tr>
                     <th class="col-xs-3">Agama <span class="pull-right">:</span></th>
                     <td><?php echo ucfirst($get->religion); ?></td>
                  </tr>
                  <tr>
                     <th class="col-xs-3">Asal Sekolah <span class="pull-right">:</span> </th>
                     <th><?php echo $get->school_name; ?></th>
                  </tr>
               </thead>
            </table>
         </div>
         <div class="box-header with-border">
            <h3 class="box-title">Data Orang Tua</h3>
         </div>
         <div class="box-body form-horizontal">
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th class="col-xs-3">Nama Ayah<span class="pull-right">:</span></th>
                     <td><?php echo $get->father_name; ?></td>
                  </tr>
                  <tr>
                     <th class="col-xs-3">Pekerjaan Ayah<span class="pull-right">:</span></th>
                     <td><?php echo $get->father_jobs; ?></td>
                  </tr>
                  <tr>
                     <th class="col-xs-3">Nama Ibu<span class="pull-right">:</span></th>
                     <td><?php echo $get->mother_name; ?></td>
                  </tr>
                  <tr>
                     <th class="col-xs-3">Pekerjaan Ibu<span class="pull-right">:</span></th>
                     <td><?php echo $get->mother_jobs; ?></td>
                  </tr>
                  <tr>
                     <th class="col-xs-3">Alamat <span class="pull-right">:</span></th>
                     <td><?php echo $get->parent_address; ?></td>
                  </tr>
                  <tr>
                     <th class="col-xs-3">Nomor Telepon <span class="pull-right">:</span></th>
                     <td><?php echo $get->phone_number; ?></td>
                  </tr>
               </thead>
            </table>
         </div>
         <div class="box-header with-border">
            <h3 class="box-title">Data Umum</h3>
         </div>
         <div class="box-body form-horizontal">
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th class="col-xs-3">Jurusan<span class="pull-right">:</span></th>
                     <td><?php echo $get->study; ?></td>
                  </tr>
                  <tr>
                     <th class="col-xs-3">Konsentrasi<span class="pull-right">:</span></th>
                     <td><?php echo $get->concentration_name; ?></td>
                  </tr>
                  <tr>
                     <th class="col-xs-3">Jenjang<span class="pull-right">:</span></th>
                     <td><?php echo $get->ladder; ?></td>
                  </tr>
                  <tr>
                     <th class="col-xs-3">Kelas<span class="pull-right">:</span></th>
                     <td><?php echo ucfirst($get->class); ?></td>
                  </tr>
               </thead>
            </table>
         </div>
         <div class="box-footer with-border">
              <div class="callout callout-default">
                <h4><i class="fa fa-bullhorn"></i> Perhatian !</h4>
                <p>Jika terdapat data yang tidak valid segera menghubungi Bagian Akademik untuk diperbaiki.</p>
              </div>
         </div>
      </div>
   </div>
</div>
<?php  
/* End of file index.php */
/* Location: ./application/modules/Mahasiswa/views/account/index.php */
?>