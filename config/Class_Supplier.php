<?php 
/**
* 
*/
class Class_Supplier
{
    
   function tampil_data()
    {
        include("config.php");

        $sql = "select * from tbl_supplier";

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

    function input_supplier($kode_supplier,$nama_supplier,$alamat_supplier,$telp_supplier,$kota_supplier)
    {
        include("config.php");

        $sql = "insert into tbl_supplier values('".$kode_supplier."','".$nama_supplier."','".$alamat_supplier."','".$telp_supplier."','".$kota_supplier."')";


        $data = mysqli_query($conn,$sql);
    }

    function edit_supplier($kode_supplier)
    {
        include("config.php");

        $sql = "select * from tbl_supplier where kode_supplier='".$kode_supplier."'";
        $data = mysqli_query($conn,$sql);   
        include("config.php");

        while ($d=mysqli_fetch_assoc($data)) {

            $hasil[] = $d;
        }
        return $hasil;

    }

    function update($nama_supplier,$alamat_supplier,$telp_supplier,$kota_supplier,$kode_supplier)
    {
        include("config.php");

        $sql = "update tbl_supplier set nama_supplier='".$nama_supplier."', alamat_supplier='".$alamat_supplier."', telp_supplier='".$telp_supplier."', kota_supplier='".$kota_supplier."' where kode_supplier='".$kode_supplier."'";

        $data = mysqli_query($conn,$sql);
    }

    function hapus($kode_supplier)
    {
        include("config.php");

        $sql = "delete from tbl_supplier where kode_supplier = '".$kode_supplier."'";

        $data = mysqli_query($conn,$sql);
    }

}
 ?>