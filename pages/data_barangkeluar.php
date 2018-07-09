<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data Barang </h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Barang Keluar  
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" cellpadding="0" cellspacing="0" id="dataTables-example">
                    <thead>
    <?php  
        if (is_array($db->tampil_barangkeluar()) && count($db->tampil_barangkeluar()) > 0) {
      ?>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Tanggal Keluar</th>
                            <th>Penerima</th>
                            <th>Jumlah Keluar</th>
                        </tr>
                    </thead>
                    <tbody>
    <?php 

    $no = 1;

    foreach ($db->tampil_barangkeluar() as $row) {


     ?>
    <tr>
                            <td><?=$no++?></td>
                            <td><?=$row['kode_barang']?></td>
                            <td><?=$row['nama_barang']?></td>
                            <td><?=$row['tgl_keluar']?></td>
                            <td><?=$row['penerima']?></td>
                            <td><?=$row['jumlah_keluar']?></td>
      </tr>
    <?php } 
}?>
                    </tbody>
                </table>
                <!-- /.table-responsive -->
               
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->