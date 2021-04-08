<?php
include('./mpdf60/mpdf.php');
 
ob_start();
?>
<style>
td {
    padding: 3px 5px 3px 5px;
    border-right: 1px solid #666666;
    border-bottom: 1px solid #666666;
}
 
.head td {
    font-weight: bold;
    font-size: 14px;
    background: #b7f0ff; 
}
 
table .main tbody tr td {
    font-size: 14px;
}
 
table, table .main {
    width: 100%;
    border-top: 1px solid #666;
    border-left: 1px solid #666;
    border-collapse: collapse;
    background: #fff;
}
.style5 {font-size: 20px;}
.style7 {font-size: 18px;}
.style4 {
    font-size: 20px;
    font-family: "Times New Roman", Times, serif;
    font-weight: bold;
}
.style2 {font-size: 23px
        font-family: "Times New Roman", Times, serif;
        font-weight: bold;}
.style3 {font-size:14px
        font-family: "Times New Roman", Times, serif;}
.style1 {font-size:28px
        font-family: "Times New Roman", Times, serif;
        font-weight: bold;}
</style>
 <p align="center"  class="style4">DATA PENGGUNA SIPAS PSBR</p>
<table class='main' repeat_header="1" cellspacing="0" width="100%" style="width:100%">
<thead>
<tr class="head">
    <td width="35" height="30" align='center'><span class="style5">No.</span></td>
    <td align='center' width="212" ><span class="style5">NAMA</span></td>
    <td align='center' width="296"><span class="style5">USERNAME</span></td>
    <td align='center' width="267"><span class="style5">EMAIL</span></td>
    <td align='center' width="267"><span class="style5">LEVEL</span></td>
</tr>
</thead>
<?php
 //Koneksi ke database dan tampilkan datanya
$host="localhost"; 
$user="root"; 
$password=""; 
$database="arsip_psbr"; 
$koneksi=mysql_connect($host,$user,$password); 
mysql_select_db($database,$koneksi); 
$tampil = "select * from user"; 
// $SQL = "SELECT * FROM reviews  ";
 $run=mysql_query($tampil);
 $nomor=1;
while($row = mysql_fetch_array($run))
{
    ?>
<tbody>
<tr  style="font-size: 12px">
    <td align='center' ><span class="style7"><?php echo $nomor++;?></span></td>
    <td align='left'><span class="style7"><?php echo "$row[nama_user]";?></span></td>
    <td align='left'><span class="style7"><?php echo "$row[username]";?></span></td>
    <td align='left'><span class="style7"><?php echo "$row[email]";?></span></td>
    <td align='center' ><span class="style7"><?php echo "$row[Level]";?></span></td>
</tr>

<?php } ?>
</tbody>
</table>
 
<?php
$content = ob_get_clean();
 
$header = '
<table width="690"cellpadding=0 cellspacing=0 style="border:none;" align="center">
  <tr >
    <td width="105"  style="border:none;"><div align="left"><img src="PSBR.gif" width="110" height="110"></div></td>
    <td width="558" align="center"  style="border:none;"><p align="center" class="style1">KEMENTRIAN SOSIAL REPUBLIK INDONESIA</p>
    <p  class="style2">PANTI SOSIAL BINA REMAJA &quot;RUMBAI&quot; PEKANBARU</p>
    <p  class="style3">Alamat: Jl. Khayangan No.160 Pekanbaru 28261 Telp. 0761-52217 Fax. 0761-554300</p>
    <p class="style3">E-mail: psbrrumbai@gmail.com, psbrrumbai@kemsos.go.id Website: rumbai.kemsos.go.id</p></td>
  </tr>
</table>';
 
$footer = '<table cellpadding=0 cellspacing=0 style="border:none;">
           <tr><td style="margin-right:-5px;border:none;" align="left">
           Dicetak: '.date("Y-m-d H:i").'</td>
           <td style="margin-right:-5px;border:none;" align="right">
           Halaman: {PAGENO} / {nb}</td></tr></table>';            
 
try {
    $mpdf=new mPDF('utf-8', "A4", 9 ,'Arial', 5, 5, 20, 5, 5, 4);
    $mpdf->SetTitle("Data SIPAS PSBR");
    $mpdf->setHTMLHeader($header);
    $mpdf->setHTMLFooter($footer);
    $mpdf->SetMargins(25, 70, 50);
    $mpdf->WriteHTML($content);
    $mpdf->SetLineWidth(1);
    $mpdf->line(5, 280, 205, 280);//garis bawah
    $mpdf->line(5, 35, 205, 35);//garis atas
    $mpdf->SetFont('Arial','I',10);

    $mpdf->Output("Data SIPAS.pdf","I");
} catch(Exception $e) {
    echo $e;
    exit;
}
?>