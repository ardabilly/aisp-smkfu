<style type=text/css>
*{
font-family: Arial;
font-size: 12px;
margin:0px;
padding:0px;
}
@page {
 margin-left:3cm 2cm 2cm 2cm;
}
.container{
    margin-top: 10px;
    width: 780px;
    margin-left: auto;
    margin-right: auto;
}
table.grid{
width:20.4cm ;
font-size: 9pt;
border-collapse:collapse;
}
table.grid th{
padding-top:1mm;
padding-bottom:1mm;
}
table.grid th{
background: #F0F0F0;
border: 0.2mm solid #000;
text-align:center;
padding-left:0.2cm;
}
table.grid tr td{
padding-top:0.5mm;
padding-bottom:0.5mm;
padding-left:2mm;
border:0.2mm solid #000;
}
h1{
font-size: 18pt;
}
h2{
font-size: 14pt;
}
h3{
font-size: 10pt;
}
.header{
display: block;
width:20.4cm ;
margin-bottom: 0.3cm;
text-align: center;
margin-top: 10px;
}
.attr{
font-size:9pt;
width: 100%;
padding-top:2pt;
padding-bottom:2pt;
border-top: 0.2mm solid #000;
border-bottom: 0.2mm solid #000;
}
.pagebreak {
width:20cm ;
page-break-after: always;
margin-bottom:10px;
}
.akhir {
width:20cm ;
}
.page {
font-size:13px;
padding-top: 20px;
}
.footer{
    padding-top: 20px;
    margin-left: 600px;
}
</style>
<?php

include '../config/Class_Stok.php';
$db = new Class_Stok();

session_start();

?>
<div class='header' align='center'>
                    <h1 align='left'>APLIKASI INVENTARIS</h1>
                    <p align='left'>Jl. Raya Puncak Cisarua</p><br/><br/>
                <h2>Cetak Stok</h2>
            </div>
        <table class='grid' align='center'>
        <tr>
            <th width='5%'>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Jumlah Barang Masuk</th>
            <th>Jumlah Barang Keluar</th>
            <th>Total Barang</th>
            <th>Total Barang Saat Ini Tersedia</th>
        </tr>
    <div class='container' align='center'>
                <?php 
                $date = date("d-m-Y");
                $no= 1;
                foreach ($db->tampil_data() as $row) {
                 ?>
        <tr>
                <td align='center'><?=$no++?></td>
                <td align='center'><?=$row['kode_barang']?></td>
                <td align='left'><?=$row['nama_barang']?></td>
                <td align='left'><?=$row['jml_barangmasuk']?></td>
                <td align='left'><?=$row['jml_barangkeluar']?></td>
                <td align='left'><?=$row['total_barang']?></td>
                <td align='center'><?=$row['jumlah_brg']?></td>
        </tr>
    </table>

        <?php } ?>
    <div class='footer'>
            <div>Bogor, <?=$date?></div>
            <div style='margin-top:90px; margin-right:5px;'><?=$_SESSION['username']?></div>
        </div>
    <!-- <div class='page' align='center'>Hal - .$page.</div>; -->
    </div>
<script type=text/javascript>
    window.print();
</script>