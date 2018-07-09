<?php 
/**
* 
*/
class Class_Stok
{
    
   function tampil_data()
    {
        include("config.php");

        $sql = "select * from tbl_barang a inner join tbl_stok c on a.kode_barang=c.kode_barang
 ORDER BY a.nama_barang ASC";

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
}
 ?>