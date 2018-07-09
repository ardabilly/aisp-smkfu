<?php 

/**
* 
*/
class Class_Barang
{

    // =====================================================================================
    // AMBIL DATA
    // ======================================================================================
    function hitung_data()
    {
        include("config.php");

        $sql = "select * from tbl_barang a inner join tbl_stok c on a.kode_barang=c.kode_barang";

        $data = mysqli_query($conn,$sql);

        $data1 = mysqli_num_rows($data);
        if ($data1 == 0) {

            // echo "<div class='alert alert-danger'>Tidak ada data</div>";
        }
        else{
            
            while ($d=mysqli_fetch_assoc($data)) {

                $hasil[] = $d;
            }
            return $hasil;
        }
    }

    function tampil_data()
    {
        include("config.php");

        $sql = "select * from tbl_barang";

        $data = mysqli_query($conn,$sql);

        $data1 = mysqli_num_rows($data);
        if ($data1 == 0) {

            echo "<div class='alert alert-danger'>Tidak ada data</div>";
        }
        else{
            
            while ($d=mysqli_fetch_assoc($data)) {

                $hasil[] = $d;
            }
            return $hasil;
        }
    }

    function tampil_barangmasuk()
    {
        include("config.php");

        $sql = "select * from tbl_barang a inner join tbl_masukbarang b inner join tbl_stok c on a.kode_barang=b.kode_barang and a.kode_barang=c.kode_barang inner join tbl_supplier d on b.kode_supplier=d.kode_supplier ORDER BY b.tgl_masuk DESC";
        
        // echo $sql;
        $data = mysqli_query($conn,$sql);
        
        $data1 = mysqli_num_rows($data);
        if ($data1 == 0) {

            echo "<div class='alert alert-danger'>Tidak ada data</div>";
        }
        else{
            
            while ($d=mysqli_fetch_assoc($data)) {

                $hasil[] = $d;
            }
            return $hasil;
        }
    }

    function tampil_peminjaman()
    {
         include("config.php");

        $sql = "select * from tbl_pinjam order by tgl_pinjam DESC";

        $data = mysqli_query($conn,$sql);

        $data1 = mysqli_num_rows($data);
        if ($data1 == 0) {

            echo "<div class='alert alert-danger'>Tidak ada data</div>";
        }
        else{
            
            while ($d=mysqli_fetch_assoc($data)) {

                $hasil[] = $d;
            }
            return $hasil;
        }
    }

    function tampil_barangkeluar()
    {
         include("config.php");

        $sql = "select * from tbl_keluarbarang";

        $data = mysqli_query($conn,$sql);

        $data1 = mysqli_num_rows($data);
        if ($data1 == 0) {

            echo "<div class='alert alert-danger'>Tidak ada data</div>";
        }
        else{
            
            while ($d=mysqli_fetch_assoc($data)) {

                $hasil[] = $d;
            }
            return $hasil;
        }
    }


    // mengambil nama dan id_supplier
    function supplier()
    {
        include("config.php");

        $sql = "select * from tbl_supplier order by kode_supplier";

        $data = mysqli_query($conn,$sql);

        while ($d=mysqli_fetch_assoc($data)) {

            $hasil[] = $d;
        }
        return $hasil;
    }

    // mengambil nama dan kode_barang
    function barang()
    {
        include("config.php");

        $sql = "select * from tbl_barang order by kode_barang";

        $data = mysqli_query($conn,$sql);

        while ($d=mysqli_fetch_assoc($data)) {

            $hasil[] = $d;
        }
        return $hasil;
    }

    // ======================================================================================
    // INPUT DATA
    // ======================================================================================

    function input_barangbaru($kode_barang,$nama_barang,$spesifikasi,$lokasi_barang,$kategori,$stok,$kondisi,$jenis_barang,$sumber_dana,$jmlkeluar,$keterangan)
    {
        // $kode_barang = addslashes($kode_barang);
        $nama_barang = addslashes($nama_barang);
        $spesifikasi = addslashes($spesifikasi);
        $lokasi_barang = addslashes($lokasi_barang);
        $kategori = addslashes($kategori);
        $stok = addslashes($stok);
        $kondisi = addslashes($kondisi);
        $jenis_barang = addslashes($jenis_barang);
        $sumber_dana = addslashes($sumber_dana);
        $jmlkeluar = addslashes($jmlkeluar);

        include("config.php");

        $sql1 = "insert into tbl_barang values('$kode_barang','$nama_barang','$spesifikasi','$lokasi_barang','$kategori','$stok','$kondisi','$jenis_barang','$sumber_dana')";
        // echo $sql1;
        $data1 = mysqli_query($conn,$sql1);


        $sql2 = "insert into tbl_stok values('$kode_barang','$nama_barang','$stok','$jmlkeluar','$stok-$jmlkeluar','$keterangan')";
        // echo $sql2;
        $data2 = mysqli_query($conn,$sql2);
    }

    function input_barangmasuk($id_barangmasuk,$kode_barang,$nama_barang,$tgl,$jumlah,$kode_supplier,$jml_barangmasuk,$totalbarang,$totjml_barang)
    {
        // $id_barangmasuk = addslashes($id_barangmasuk);
        $kode_barang = addslashes($kode_barang);
        $nama_barang = addslashes($nama_barang);
        $tgl = addslashes($tgl);
        $jumlah = addslashes($jumlah);
        $kode_supplier = addslashes($kode_supplier);
        $jml_barangmasuk = addslashes($jml_barangmasuk);
        $totalbarang = addslashes($totalbarang);
        $totjml_barang = addslashes($totjml_barang);

        include("config.php");

        // Menyimpan barang masuk
        $sql1 = "insert into tbl_masukbarang values('".$id_barangmasuk."','".$kode_barang."','".$nama_barang."','".$tgl."','".$jumlah."','".$kode_supplier."')";
        // echo $sql1;
        $data1 = mysqli_query($conn,$sql1);

        // update tbl_stok
        $sql2 = "update tbl_stok set jml_barangmasuk='".$jml_barangmasuk."', total_barang='".$totalbarang."' where kode_barang='".$kode_barang."' ";
        // echo $sql2;
        $data2 = mysqli_query($conn,$sql2);

        // update tbl_barang
        $sql3 = "update tbl_barang set jumlah_brg='".$totjml_barang."' where kode_barang='".$kode_barang."'";
        // echo $sql3;
        $data3 = mysqli_query($conn,$sql3);

    }

    function input_datapeminjaman($no_pinjam,$tgl_pinjam,$kode_barang,$nama_barang,$jumlah_pinjam,$nama_peminjam,$tgl_kembali,$keterangan,$totalbarang,$jmlbarangkeluar)
    {
        include("config.php");

        $sql = "insert into tbl_keluarbarang values('".$no_pinjam."','".$kode_barang."','".$nama_barang."','".$tgl_pinjam."','".$nama_peminjam."','".$jumlah_pinjam."')";
        // echo $sql;
        $data = mysqli_query($conn,$sql);

        $sql1 = "insert into tbl_pinjam values('".$no_pinjam."','".$tgl_pinjam."','".$kode_barang."','".$nama_barang."','".$jumlah_pinjam."','".$nama_peminjam."','".$tgl_kembali."','".$keterangan."')";
        // echo $sql1;
        $data1 = mysqli_query($conn,$sql1);

        $sql2 = "update tbl_barang set jumlah_brg='".$totalbarang."' where kode_barang='".$kode_barang."'";
        // echo $sql2;

        $data2 = mysqli_query($conn,$sql2);

        $sql3 = "update tbl_stok set jml_barangkeluar='".$jmlbarangkeluar."' where kode_barang='".$kode_barang."'";
        // echo $sql3;

        $data3 = mysqli_query($conn,$sql3);





    }

    // ======================================================================================
    // UPDATE DATA
    // ======================================================================================
    
    function update_datapeminjaman($jumlah_brg,$kode_barang,$keterangan,$no_pinjam,$stok)
    {
        include("config.php");
        $sql1 = "update tbl_barang set jumlah_brg='".$jumlah_brg."' where kode_barang='".$kode_barang."'";
        // echo $sql1;

        $data1 = mysqli_query($conn,$sql1);

        $sql2 = "update tbl_pinjam set keterangan='".$keterangan."' where nomor_pinjam='".$no_pinjam."'";
        // echo $sql2;

        $data2 = mysqli_query($conn,$sql2);

        $sql3 = "update tbl_stok set jml_barangkeluar='".$stok."' where kode_barang='".$kode_barang."'";
        // echo $sql3;

        $data3 = mysqli_query($conn,$sql3);
    }

    function edit_barang($kode_barang)
    {
        include("config.php");

        $sql = "select * from tbl_barang where kode_barang='".$kode_barang."'";

        $data = mysqli_query($conn,$sql);

        $data1 = mysqli_num_rows($data);
        if ($data1 == 0) {

            echo "<div class='alert alert-danger'>Tidak ada data</div>";
        }
        else{
            
            while ($d=mysqli_fetch_assoc($data)) {

                $hasil[] = $d;
            }
            return $hasil;
        }
    }

    function update_barang($nama_barang,$spesifikasi,$lokasi_barang,$kategori,$kondisi,$jenis_barang,$sumber_dana,$kode_barang)
    {
        include("config.php");

        $sql = "update tbl_barang a inner join tbl_stok e on a.kode_barang=e.kode_barang set 
        
        a.nama_barang='".$nama_barang."',
        e.nama_barang='".$nama_barang."',
        a.spesifikasi='".$spesifikasi."',
        a.lokasi_barang='".$lokasi_barang."',
        a.kategori='".$kategori."',
        a.kondisi='".$kondisi."',
        a.jenis_brg='".$jenis_barang."',
        a.sumber_dana='".$sumber_dana."' where a.kode_barang='".$kode_barang."' ";

        // echo $sql;
        $data = mysqli_query($conn,$sql);

    }
    // ======================================================================================
    // HAPUS DATA
    // ======================================================================================


    function hapus($id)
    {
        include ("config.php");

        $sql1 = "delete from tbl_barang where kode_barang='".$id."' ";
        $data1 = mysqli_query($conn,$sql1);

        $sql2 = "delete from tbl_stok where kode_barang= '".$id."' ";
        $data2 = mysqli_query($conn,$sql2);

        $sql3 = "delete from tbl_pinjam where kode_barang= '".$id."' ";
        $data3 = mysqli_query($conn,$sql3);

        $sql4 = "delete from tbl_masukbarang where kode_barang= '".$id."' ";
        $data4 = mysqli_query($conn,$sql4);

        $sql5 = "delete from tbl_keluarbarang where kode_barang= '".$id."' ";
        $data5 = mysqli_query($conn,$sql5);

    }

}
 ?>