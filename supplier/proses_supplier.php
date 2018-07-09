<?php 
include_once("../config/Class_Supplier.php");
$db = new Class_Supplier();
include_once("../config/config.php");

$aksi = $_GET["aksi"];

// ===========================================================================================
// SUPPLIER BARU
// ===========================================================================================

if ($aksi == "tambah") {

    $kode_supplier = $_POST['kode_supplier'];
    $nama_supplier = $_POST['nama_supplier'];
    $alamat_supplier = $_POST['alamat_supplier'];
    $telp_supplier = $_POST['telp_supplier'];
    $kota_supplier = $_POST['kota_supplier'];

    $db->input_supplier($kode_supplier,$nama_supplier,$alamat_supplier,$telp_supplier,$kota_supplier);

    echo "<script>alert('Data Supplier berhasil ditambahkan'); window.location.href='../supplier.php';</script>";

}
if ($aksi == "update") {

    $kode_supplier = $_POST['kode_supplier'];
    $nama_supplier = $_POST['nama_supplier'];
    $alamat_supplier = $_POST['alamat_supplier'];
    $telp_supplier = $_POST['telp_supplier'];
    $kota_supplier = $_POST['kota_supplier'];

    $db->update($nama_supplier,$alamat_supplier,$telp_supplier,$kota_supplier,$kode_supplier);

    echo "<script>alert('Data Supplier berhasil diubah'); window.location.href='../supplier.php';</script>";

}
