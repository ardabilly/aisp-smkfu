<?php 

include_once("config/Class_Barang.php");
$db = new Class_Barang();

include_once("config/Class_User.php");
$cu = new Class_User();

include_once("config/Class_Stok.php");
$st = new Class_Stok();

include_once("config/config.php");
// Mengambil kode barang baru
include_once("fungsi/nomatbrg.php");
// Mengambil kode barang masuk
include_once("fungsi/nomatbrgmasuk.php");
// Mengambil nomor pinjam
include_once("fungsi/nomatpinjam.php");


if (isset($_GET['hapus'])) {

    $db->hapus($_GET['id']);
    echo "<script>alert('barang berhasil dihapus'); window.location.href='index.php?page=databarang';</script>";
}
 ?>
<!DOCTYPE html>
<html lang="en">
<?php 
include_once("config/Class_Barang.php");
$db = new Class_Barang();
 

 ?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AISP - SMKFU</title>

    <?php 
    include_once("includes/header.php"); ?>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
            <?php include_once("includes/navbar.php"); ?>
            <!-- /.navbar-top-links -->
            <?php include_once("includes/sidebar.php"); ?>
            
            <!-- /.navbar-static-side -->
        <div id="page-wrapper">

<?php 

        if (isset($_GET['page']) && $_GET['page'] == "databarang") {

            include_once("pages/data_barang.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "barangbaru") {

            include_once("pages/input_barang.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "update") {

            include_once("pages/edit_barang.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "barangmasuk") {

            include_once("pages/data_barangmasuk.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "barangkeluar") {

            include_once("pages/data_barangkeluar.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "inputbarangmasuk") {

            include_once("pages/input_barangmasuk.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "peminjaman") {

            include_once("pages/data_peminjaman.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "formpeminjaman") {

            include_once("pages/form_peminjaman.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "datastok") {

            include_once("stok/data_stok.php");
        }
        else if (isset($_GET['page']) && $_GET['page'] == "pengaturan") {

            include_once("pages/pengaturan.php");
        }  
        else{
            include_once("pages/dashboard.php");
        }

 ?>
            
        </div>
        <!-- /#pag-wrapper -->

    </div>
    <!-- /#wrapper -->

   <?php include_once("includes/footer.php"); ?>

<!-- <script>
$(document).ready(function() {
$('#dataTables-example').DataTable({
responsive: true
});
});
</script>
 -->
</body>

</html>
