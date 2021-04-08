<?php
include('./mpdf60/mpdf.php');
 
ob_start();
?>
<style type="text/css">
td {
    padding: 3px 5px 3px 5px;
    border-right: 2px solid #666666;
    border-bottom: 2px solid #666666;
    font-size: 13px;
}
 
.head td {
    font-weight: bold;
    font-size: 15px;
    background: #b7f0ff; 
}
 
table .main tbody tr td {
    font-size: 14px;
}
 
table, table .main {
    width: 100%;
    border-top: 2px solid #666;
    border-left: 2px solid #666;
    border-collapse: collapse;
    background: #fff;
}
.css1 {font-size: 30; 
      font-family: "Times New Roman", Times, serif;
        font-weight : bold;
        text-align: center;
       }
.css2 {font-size: 20px;
        font-family: "Times New Roman", Times, serif;
        font-weight: bold;}
.css3 {font-size:14px;
        font-family: "Times New Roman", Times, serif;}
.css4 {font-size:18px;
        font-family: "Times New Roman", Times, serif;
        font-weight: bold;
        text-align: center;
      }
</style>
<?php
$host="localhost"; 
$user="root"; 
$password=""; 
$database="arsip_psbr"; 
$koneksi=mysql_connect($host,$user,$password); 
mysql_select_db($database,$koneksi);
$a=$_REQUEST['kode_disposisi'];
$tampil = " SELECT * FROM surat_masuk INNER JOIN disposisi ON surat_masuk.no_agenda=disposisi.no_agenda AND disposisi.kode_disposisi='$a' "; 
 $run=mysql_query($tampil);
$row = mysql_fetch_array($run);

?>
<table width="740" height="837" class="main" align="center">
  <tr >
    <td width="154" align="center" style="border-right: 0px;"><img src="PSBR.gif" width="100" height="95" /></td>
    <td colspan="6" class="css1"><p >KEMENTRIAN SOSIAL RI</p>
    <p  class="css2">PANTI SOSIAL BINA REMAJA RUMBAI PEKANBARU</p>
    <p  class="css3">Jl. Khayangan No.160 Pekanbaru 28261 Telp. 0761-52217 Fax. 0761-554300</p></td>
  </tr>
  <tr>
    <td height="70" colspan="7" class="css4"><div>LEMBARAN DISPOSISI </div></td>
  </tr>
  <tr>
    <td height="50" style="border-right: 0px;">Agno</td>
    <td width="8" style="border-left: 0px; border-right: 0px;">:</td>
    <td width="169"><?php echo $row['no_agenda'];?></td>
    <td width="164" style="border-right: 0px;">Tingkat Kerahasiaan </td>
    <td width="9" style="border-right: 0px; border-left: 0px;">:</td>
    <td colspan="2"><?php echo $row['tgkt_kerahasiaan'];?></td>
  </tr>
  <tr>
    <td height="50" style="border-right: 0px;">Tanggal Penerimaan </td>
    <td style="border-left: 0px; border-right: 0px;">:</td>
    <?php
      $host="localhost"; 
      $user="root"; 
      $password=""; 
      $database="arsip_psbr"; 
      $koneksi=mysql_connect($host,$user,$password); 
      mysql_select_db($database,$koneksi);
      $tampil = "SELECT DATE_FORMAT(tgl_penerimaan, '%m-%d-%Y') AS tanggal_input, 
                  DATE_FORMAT(tgl_penyelesaian, '%m-%d-%Y') AS tanggal_penyelesaian,
                  DATE_FORMAT(tgl_surat, '%m-%d-%Y') AS tanggal_surat
                  FROM surat_masuk,disposisi WHERE surat_masuk.no_agenda=disposisi.no_agenda AND disposisi.kode_disposisi='$a'"; 
       $run=mysql_query($tampil);
      $row1 = mysql_fetch_array($run);

    ?>
    <td><?php echo $row1['tanggal_input'];?></td>
    <td style="border-right: 0px;">Tanggal Penyelesaian </td>
    <td style="border-right: 0px; border-left: 0px;">:</td>
    <td colspan="2" ><?php echo $row1['tanggal_penyelesaian'];?> </td>	
  </tr>
  <tr>
    <td height="40" style="border-right: 0px; border-bottom: 0px;">Tanggal dan No Surat </td>
    <td style="border-right: 0px; border-left: 0px; border-bottom: 0px;">:</td>
    <td colspan="5" style="border-bottom:0px; "><?php echo $row1['tanggal_surat'];?>,<?php echo $row['no_surat'];?>  </td>
  </tr>
  <tr>
    <td height="37" style="border-right: 0px; border-bottom: 0px;">Dari</td>
    <td style="border-right: 0px; border-left: 0px; border-bottom: 0px;">:</td>
    <td colspan="5" style="border-bottom: 0px;"><?php echo $row['almt_pengirim'];?> </td>
  </tr>
  <tr>
    <td height="80" style="border-right: 0px; border-bottom: 0px;">Ringkasan Isi </td>
    <td style="border-right: 0px; border-left: 0px; border-bottom: 0px;">:</td>
    <td colspan="5" style="border-bottom: 0px;"><?php echo $row['hal'];?>  </td>
  </tr>
  <tr>
    <td height="43" style="border-right: 0px;">Lampiran</td>
    <td style="border-right: 0px; border-left: 0px;">:</td>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td height="40" colspan="3" style="text-align: center; font-weight: bold;"><div align="center">Disposisi</div></td>
    <td colspan="3" style="text-align: center; font-weight: bold;">Diteruskan Kepada </td>
    <td width="176" style="text-align: center; font-weight: bold;">Paraf</td>
  </tr>
  <tr>
    <td height="450" colspan="3" align=lefth valign=top><?php echo $row['isidisposisi'];?> </td>
    <td colspan="3" align=lefth valign=top ><?php echo $row['diteruskan'];?>  </td>
    <td>&nbsp;</td>
  </tr>
</table>
 
<?php
$content = ob_get_clean();
 
$footer = '<table cellpadding=0 cellspacing=0 style="border:none;">
           <tr><td style="margin-right:-5px;border:none;" align="left">
           Dicetak: '.date("m-d-Y H:i").'</td>
           <td style="margin-right:-5px;border:none;" align="right">
           Halaman: {PAGENO} / {nb}</td></tr></table>';            
 
try {
    $mpdf=new mPDF('utf-8', "A4", 9 ,'Arial', 5, 5, 20, 5, 5, 4);
    $mpdf->SetTitle("Kartu Disposisi");
    //$mpdf->setHTMLHeader($header);
    $mpdf->setHTMLFooter($footer);
    //$mpdf->SetMargins(10, 70, 50);
    $mpdf->WriteHTML($content);
    $mpdf->SetLineWidth(1);
    $mpdf->line(5, 280, 205, 280);//garis bawah
    //$mpdf->line(5, 35, 205, 35);//garis atas
    $mpdf->SetFont('Arial','I',10);
    $mpdf->Cell(135);
    //$mpdf->Cell(30,7,'Cetak Laporan Bulan:'.$a.'Tahun:'.$b,0,1,'I','L'); 
    $mpdf->Output("Kartu_disposisi.pdf","I");
} catch(Exception $e) {
    echo $e;
    exit;
}
?>