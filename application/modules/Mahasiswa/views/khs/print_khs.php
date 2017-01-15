<!DOCTYPE html>
<html>
 <head>
  <title>Print Data Pengajuan</title>
  <style>
    body { font-family:'Arial';  }
     table { font-size:12px; font-family:'Arial'; }
     .header { width:100%; height:10%; font-weight:500;  }
     .big-title {  font-family:'Arial'; font-size:xx-large; letter-spacing:normal; font-weight:bold; }
     .small-title {  font-family:'Arial'; font-size:7px; letter-spacing:normal; text-transform: uppercase; }
     .content { font-size:11px; font-family:'Arial'; margin-top:20px;}
     .upper { text-transform: uppercase;  }
     .underline { text-decoration: underline; }
     .bold { font-weight:bold; }
     .text-center { text-align: center; }
     table.mini-font { font-size: 10px; }
     table.gridtable { border-width: 0; border-color: black; border-collapse: collapse; }
     table.gridtable th {  border-width: 0.1px; padding: 4px; border-style: solid; border-color: black; text-transform: uppercase; }
     table.gridtable td { border-width: 0.1px; border-top: 0px; padding: 4px 3px 5px 3px; border-style: solid; border-color: black; }
     table.kop tr { line-height: 50% }
     table.kop { margin-top: -5px; }
   /*   @page { size: A4; } */
    @media print {
  
        table {page-break-inside: avoid;}
    }
  </style>
 </head>
 <body> <!--  onload="window.print()" -->
   <div class="wrapper table">
      <div class="header">
            <img style="float: left; padding-right: 10px;" src="<?php echo base_url("public/img/logo_kop.png") ?>" alt="">
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
   <hr style="width: 100%;"> </div>

    <h5 class="upper text-center"><?php echo $title; ?></h5>
    <table class="gridtable mini-font" width="100%">

    </table>
<!--       <table style="padding-top: 20px; width: 100%; float: left; border: none;">
   <tr>
      <td style="width: 50%; text-align: center; font-weight: bold;">Kepala Bagian SIM<br>STIE Pertiba Pangkalpinang</td>
      <td style="width: 50%; text-align: center; font-weight: bold;">Kepala Dinas Pekerjaan Umum<br>STIE Pertiba Pangkalpinang</td> 
   </tr>
   <tr style="height: 30px;"></tr>
   <tr>
      <td style="width: 50%; text-align: center;">Adi Suputra, M.Kom<br>NIP.35235235</td>
      <td style="width: 50%; text-align: center;">Vicky Nitinegoro, S.Kom<br>NIP.23523525</td> 
   </tr>
</table> -->
   </div>
 </body>
</html> 

