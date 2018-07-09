<?php 
include_once("../config/Class_Barang.php");
$db = new Class_Barang();
include_once("../config/config.php");

$aksi = $_GET["aksi"];

// ===========================================================================================
// BARANG BARU
// ===========================================================================================

if ($aksi == "tambah") {

    $kode_barang = $_POST["kode_barang"];
    $nama_barang = $_POST["nama_barang"];
    $spesifikasi = $_POST["spesifikasi"];
    $lokasi_barang = $_POST["lokasi_barang"];
    $kategori = $_POST["kategori"];

    $kondisi = $_POST["kondisi"];
    $jenis_barang = $_POST["jenis_barang"];
    $sumber_dana = $_POST["sumber_dana"];
    $keterangan = $_POST["keterangan"];

    $stok = "0";
    $jmlkeluar = "0";

    $db->input_barangbaru($kode_barang,$nama_barang,$spesifikasi,$lokasi_barang,$kategori,$stok,$kondisi,$jenis_barang,$sumber_dana,$jmlkeluar,$keterangan);

    echo "<script>alert('Data barang tersimpan'); window.location.href='../index.php?page=databarang';</script>";

}

// ===========================================================================================
// BARANG MASUK
// ===========================================================================================
else if($aksi == "tambahbarangmasuk"){

    $nama_supplier = $_POST["nama_supplier"];
    $id_barangmasuk = $_POST["id_masukbarang"];
    $nama_barang = $_POST["nama_barang"];
    $tgl = $_POST["tgl_masuk"];
    $jumlah = $_POST["jumlah_masuk"];

    $kdsup = mysqli_query($conn,"select kode_supplier from tbl_supplier where nama_supplier='".$nama_supplier."'");
    $skode = mysqli_fetch_array($kdsup);
    $kode_supplier = $skode["kode_supplier"];

    $kdbarang = mysqli_query($conn,"select kode_barang from tbl_barang where nama_barang='".$nama_barang."' ");
    $skodebrg = mysqli_fetch_array($kdbarang);
    $kode_barang = $skodebrg["kode_barang"];

    $stok = mysqli_query($conn,"select * from tbl_stok where kode_barang ='".$kode_barang."' ");
    $tmpstok = mysqli_fetch_array($stok);

    $jml_barang = $tmpstok["jml_barangmasuk"];
    $jml_barangkeluar = $tmpstok["jml_barangkeluar"];
    $total = $tmpstok["total_barang"];

    $jml_barangmasuk = $jumlah + $jml_barang;
    $totalbarang = $jumlah + $jml_barang;
    $totjumlah_barang = $totalbarang - $jml_barangkeluar;

    $db->input_barangmasuk($id_barangmasuk,$kode_barang,$nama_barang,$tgl,$jumlah,$kode_supplier,$jml_barangmasuk,$totalbarang,$totjumlah_barang);
    
    echo "<script>alert('Barang masuk berhasil ditambahkan'); window.location.href='../index.php?page=inputbarangmasuk';</script>";

}

// ===========================================================================================
// PINJAM BARANG
// ===========================================================================================
else if($aksi == "tambahdatapinjam"){

    $no_pinjam = $_POST["no_pinjam"];
    $tgl_pinjam = $_POST["tgl_pinjam"];
    $nama_barang = $_POST["nama_barang"];
    $tgl_kembali = $_POST["tgl_kembali"];
    $jumlah_pinjam = $_POST["jumlah_pinjam"];
    $nama_peminjam = $_POST["nama_peminjam"];
    $keterangan = $_POST["keterangan"];


    $kodebrg =  mysqli_query($conn,"select kode_barang, jumlah_brg from tbl_barang where nama_barang='".$nama_barang."'");
    $kd = mysqli_fetch_array($kodebrg); 
    $kode_barang = $kd["kode_barang"]; 
    $jumlah_brg = $kd["jumlah_brg"];

    $totalbarang = $jumlah_brg - $jumlah_pinjam;

    $cekstok = mysqli_query($conn,"select jml_barangkeluar,total_barang from tbl_stok where kode_barang='".$kode_barang."'");
    $cek = mysqli_fetch_array($cekstok);
    $jumlah_barangkeluar = $cek["jml_barangkeluar"];
    // $tot_stok = $cek["total_barang"];
    // $total_stok = $tot_stok - $jumlah_pinjam;

    $totbarangkeluar = $jumlah_barangkeluar + $jumlah_pinjam;

    if ($jumlah_pinjam > $jumlah_brg) {

        echo "<script>alert('Jumlah barang yang dipinjam terlalu banyak! Jumlah barang tersedia hanya = $jumlah_brg, mohon kembali input ulang.'); window.location.href='../index.php?page=formpeminjaman';</script>";

    }
    else{
        
        $db->input_datapeminjaman($no_pinjam,$tgl_pinjam,$kode_barang,$nama_barang,$jumlah_pinjam,$nama_peminjam,$tgl_kembali,$keterangan,$totalbarang,$totbarangkeluar);
   
    echo "<script>alert('Data peminjaman tersimpan'); window.location.href='../index.php?page=peminjaman';</script>";
        
    }

}


// ===========================================================================================
// KEMBALI BARANG
// ===========================================================================================

else if($aksi == "kembalibarang"){

    $no_pinjam = $_POST["no_pinjam"];
    $status = $_POST["status"];

    $query = mysqli_query($conn,"select * from tbl_pinjam a inner join tbl_barang b on a.kode_barang=b.kode_barang where a.nomor_pinjam='$no_pinjam'");
    $data = mysqli_fetch_array($query);

    $jumlah_pinjam = $data["jumlah_pinjam"];
    $kode_barang = $data["kode_barang"];
    $keterangan = $data["keterangan"];
    $jumlah_brg = $data["jumlah_brg"];

    $query2 = mysqli_query($conn,"select * from tbl_stok where kode_barang='$kode_barang'");
    $data2 = mysqli_fetch_array($query2);
    $barangkeluar = $data2["jml_barangkeluar"];

    $jumlah_barang = $jumlah_brg + $jumlah_pinjam;
    $stok = $barangkeluar - $jumlah_pinjam;

    if ($keterangan == "Sudah dikembalikan") {
        echo "<script>alert('Barang ini sudah dikembalikan sebelumnya!'); window.location.href='../barang.php?page=peminjaman';</script>";

    }
    else{
        $db->update_datapeminjaman($jumlah_barang,$kode_barang,$status,$no_pinjam,$stok);
        echo "<script>alert('Data barang dikembalikan ke stok'); window.location.href='../index.php?page=peminjaman';</script>";

    }

}

else if($aksi == "updatebarang")
{
    $kode_barang = $_POST["kode_barang"];
    $nama_barang = $_POST["nama_barang"];
    $spesifikasi = $_POST["spesifikasi"];
    $lokasi = $_POST["lokasi_barang"];
    $kategori = $_POST["kategori"];
    $kondisi = $_POST["kondisi"];
    $jenis = $_POST["jenis_barang"];
    $sumber_dana = $_POST["sumber_dana"];

    // $query = $db->update_barang($nama_barang,$spesifikasi,$lokasi,$kategori,$kondisi,$jenis,$sumber_dana,$kode_barang);

    $query = mysqli_query($conn,"update tbl_barang a inner join tbl_stok e on a.kode_barang=e.kode_barang set 
        
        a.nama_barang='".$nama_barang."',
        e.nama_barang='".$nama_barang."',
        a.spesifikasi='".$spesifikasi."',
        a.lokasi_barang='".$lokasi."',
        a.kategori='".$kategori."',
        a.kondisi='".$kondisi."',
        a.jenis_brg='".$jenis."',
        a.sumber_dana='".$sumber_dana."' where a.kode_barang='".$kode_barang."' ");

    // mengambil data barang keluar/masuk
    $UPD = mysqli_query($conn,"select * from tbl_keluarbarang a inner join tbl_masukbarang b inner join tbl_pinjam c on a.kode_barang=b.kode_barang and b.kode_barang=c.kode_barang where a.kode_barang='".$kode_barang."' and  b.kode_barang='".$kode_barang."' and  c.kode_barang='".$kode_barang."' ");

    $cek = mysqli_fetch_array($UPD);
    
    if ($query) {
        if ($cek > 0) {
            $queryupdate  = mysqli_query($conn,"update tbl_keluarbarang a inner join tbl_masukbarang b inner join tbl_pinjam c on 
                a.kode_barang=b.kode_barang
                and b.kode_barang=c.kode_barang set a.nama_barang='".$nama_barang."',b.nama_barang='".$nama_barang."',c.nama_barang='".$nama_barang."' where a.kode_barang='".$kode_barang."' ");
            if ($queryupdate) {
                echo "<script>alert('Data berhasil diubah'); window.location.href='../index.php?pages=databarang';</script>";
            }
        }
                echo "<script>alert('Data berhasil diubah'); window.location.href='../index.php?pages=databarang';</script>";

    }
    else
    {
        echo "Gagal";
    }


}