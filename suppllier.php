<?php 

include_once("config/Class_Barang.php");
$db = new Class_Barang();

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


                        if (isset($_GET['page']) && $_GET['page'] == "supplierbaru") {

                            include_once("supplier/input_supplier.php");
                        }
                        else if (isset($_GET['page']) && $_GET['page'] == "updatesupplier") {

                            include_once("supplier/edit_supplier.php");
                        }
                        else{
                            include_once("supplier/data_supplier.php");
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

 --></body>

</html>
