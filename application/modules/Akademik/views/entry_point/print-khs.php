<!DOCTYPE html>
<html>
   <head>
      <title><?php echo $title; ?></title>
      <style>
         body { font-family:'Arial Narrow';  }
         table { font-size:12px; font-family:'Arial Narrow'; }
         .header { width:100%; height:10%; font-weight:500;  }
         .big-title {  font-family:'Arial Narrow'; font-size:xx-large; letter-spacing:3px; word-spacing: 10px; font-weight:bold; }
         .small-title {  font-family:'Arial'; font-size:7px; letter-spacing:normal; text-transform: uppercase; }
         .content { font-size:11px; font-family:'Arial Narrow'; margin-top:20px;}
         .upper { text-transform: uppercase;  }
         .underline { text-decoration: underline; }
         .bold { font-weight:bold; }
         .text-center { text-align: center; }
         table.mini-font { font-size: 10px; }
         table.gridtable { border-width: 0; border-color: #757572; border-collapse: collapse; }
         table.gridtable th {  border-width: 0.1px; padding: 4px; border-style: solid; border-color: #757572; text-transform: none; }
         table.gridtable td { border-width: 0.1px; border-top: 0px; padding: 4px 3px 5px 3px; border-style: solid; border-color: #757572; }
         table.kop tr { line-height: 50% }
         table.kop { margin-top: -5px; }
         h5 { margin: 10px; }
        .wrapper {
            background-image: url(<?php echo base_url("assets/img/logo_watermark.png"); ?>);
            background-repeat: no-repeat;
           /*  background-attachment: fixed; */
            background-position: center; 
            page-break-inside: avoid;
            height: 400px;
        }
         @media all {
         .watermark {
         display: none;
         background-image: url(<?php echo base_url("assets/img/logo_kop.png"); ?>);
         float: right;
         }
         .pagebreak {
         display: none;
         }
         }
         @media print {
         .watermark {
         display: block;
         }
         .pagebreak {
            display: block;
            page-break-after: always;
         }
         }
        /*  @page { size: 'A4'; } */
         @media print {
         table {page-break-inside: avoid;}
         }
      </style>
   </head>
   <body>
      <!--  onload="window.print()" -->
      <div class="table">
         <div class="header">
            <img style="float: left; padding-right: 10px;" src="<?php echo base_url("assets/img/logo_kop.png") ?>" alt="">
            <strong class="big-title">STIE PERTIBA PANGKALPINANAG</strong>
            <table class="kop">
               <tr style="padding-top: 0px;">
                  <td class="small-title" width="115">program sarjana (S1)</td>
                  <td width="10" style="text-align: center;" class="small-title">:</td>
                  <td class="small-title" style="vertical-align: top; line-height: 150%">izin penyelenggara surat dirjen dikti kemendikbud r.i NO..12176/D/T/K-II/2012 tanggal 05 Juni 2012 Terakeditasi "B" SK.BAT-PT KEMNDIKBUD R.I N0. 020/BAN/BAN-PT/Ak-XV/S1/VII/2012 Tanggal 12 Juli 2012</td>
               </tr>
               <tr style="padding-top: 0px;">
                  <td class="small-title">program pascasarjana (S2)</td>
                  <td width="10" style="text-align: center;" class="small-title">:</td>
                  <td class="small-title" style="vertical-align: top; line-height: none">Terakeditasi "C" SK. BAN-PT KEMINDIKBUD R.I No. 169/SK/BAN-PT/AKRED/M/VI/2014 Tanggal 6 Juni 2014</td>
               </tr>
               <tr style="padding-top: 0px;">
                  <td class="small-title">Alamat</td>
                  <td width="10" style="text-align: center;" class="small-title">:</td>
                  <td class="small-title" style="vertical-align: top; line-height: none">JL. Adyaksa No. 9 Pangkalpinang - Bangka Belitung Telp. (0717) 423374 FAX.(0717) 439289</td>
               </tr>
               <tr style="padding-top: 0px;">
                  <td colspan="3" style="font-size: 7px;"><span>E-Mail : <span style="color: blue">stie_pertiba@yahoo.co.id</span></span> <span style="padding-left: 20px;">Website : <span style="color: blue">http://www.stiepertiba.ac.id</span></span></td>
               </tr>
            </table>
         </div>
         <hr style="width: 100%;">
      </div>
    <div class="wrapper">
      <h5 class="upper text-center"><?php echo $title; ?></h5>
      <table width="80%" align="center" style="margin-bottom: 10px; text-align:left">
          <tr>
              <th width="90">Nama Mahasiswa </th> <td width="10" style="text-align:center;">:</td>
              <td><?php echo $get->name; ?></td>
              <td width="100"></td>
              <th width="90">Jurusan </th>  <td width="10" style="text-align:center;">:</td>
              <td><?php echo $get->study; ?></td>
          </tr>
          <tr>
              <th width="90">NPM</th> <td width="10" style="text-align:center;">:</td>
              <td><?php echo $get->npm; ?></td>
              <td width="100"></td>
              <th width="90">Jenjang </th>  <td width="10" style="text-align:center;">:</td>
              <td><?php echo $get->ladder; ?></td>
          </tr>
          <tr>
              <th width="90">Semester </th> <td width="10" style="text-align:center;">:</td>
              <td><?php echo $this->input->get('thn_ajaran'); ?></td>
              <td width="100"></td>
              <th width="90">Tahun Akademik </th>  <td width="10" style="text-align:center;">:</td>
              <td><?php echo ucfirst($this->input->get('semester')); ?></td>
          </tr>
      </table>
      <table class="gridtable mini-font" width="100%">
        <thead>
            <tr>
                <th rowspan="2">No. </th>
                <th rowspan="2">Kode MK</th>
                <th rowspan="2">Mata Kuliah</th>
                <th rowspan="2">SKS</th>
                <th colspan="4">Nilai</th>
                <th rowspan="2">Nilai Akhir</th>
                <th rowspan="2">Grade</th>
                <th rowspan="2">Bobot</th>
            </tr>
            <tr>
                <th rowspan="2">Kehadiran </th>
                <th rowspan="2">Tugas</th>
                <th rowspan="2">UTS</th>
                <th rowspan="2">UAS</th>
            </tr>
        </thead>
        <tbody>
                    <?php  
                    /**
                     * Start Loop Daftar Nilai
                     *
                     * @var string
                     **/
                    $sks = 0;
                    $bobot = 0;
                    foreach($daftar_nilai as $key => $value) :
                    ?>
                            <tr>
                                <td class="text-center"><?php echo ++$key; ?>.</td>
                                <td><?php echo $value->course_code; ?></td>
                                <td><?php echo $value->course_name; ?></td>
                                <td class="text-center"><?php echo $value->sks; ?></td>
                                <td class="text-center"><?php echo $value->absent; ?></td>
                                <td class="text-center"><?php echo $value->task; ?></td>
                                <td class="text-center"><?php echo $value->midterms; ?></td>
                                <td class="text-center"><?php echo $value->final; ?></td>
                                <td class="text-center"><?php echo $value->point; ?></td>
                                <td class="text-center"><?php echo $value->grade; ?></td>
                                <td class="text-center"><?php echo $value->quality; ?></td>
                            </tr>
                    <?php  
                    $sks += $value->sks;
                    $bobot += $value->quality;
                    // End Loop daftar Nilai
                    endforeach;
                    ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3" style="text-align: right;">Jumlah SKS :</th>
                <th><?php echo $sks; ?></th>
                <th colspan="6" style="text-align: right;">Jumlah Bobot :</th>
                <th><?php echo $bobot; ?></th>
            </tr>
            <tr>
                <th colspan="10" style="text-align: right;">Index Prestasi (IP) :</th>
                <th><?php echo str_replace('.', ',', $this->nilai->getIp()); ?></th>
            </tr>
        </tfoot>
      </table>
            <table style="padding-top: 10px; width: 50%; float: right; border: none;">
              <tr>
                 <!-- <td style="width: 50%; text-align: center; font-weight: bold;">Kepala Bagian SIM<br>STIE Pertiba Pangkalpinang</td> -->
                 <td style="width: 50%; text-align: center; font-weight: normal;">Selasa, 34 Oktober 1978</td> 
              </tr>
              <tr>
                 <!-- <td style="width: 50%; text-align: center; font-weight: bold;">Kepala Bagian SIM<br>STIE Pertiba Pangkalpinang</td> -->
                 <td style="width: 50%; text-align: center; font-weight: bold;">Ketua Program Studi<br>Teknik Informatika</td> 
              </tr>
              <tr style="height: 20px;"></tr>
              <tr>
                <!--  <td style="width: 50%; text-align: center;">Adi Suputra, M.Kom<br>NIP.35235235</td> -->
                 <td style="width: 50%; text-align: center;">Vicky Nitinegoro, S.Kom<br><small>NIP.23523525</small></td> 
              </tr>
           </table>
          
      </div>
      <div class="pagebreak"></div>
    </div>
   </body>
</html>