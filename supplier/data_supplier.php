<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>Supplier</h1>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Supplier
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" cellpadding="0" cellspacing="0" id="dataTables-example">
                    <thead>
                        <tr>
                           <th>No</th>
                            <th>Kode Supplier</th>
                            <th>Nama Supplier</th>
                            <th>Alamat Supplier</th>
                            <th>Telp Supplier</th>
                            <th>Kota Supplier</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
    <?php 
        
    $no = 1;
    
    if (is_array($cs->tampil_data()) && count($cs->tampil_data()) > 0) {
    foreach ($cs->tampil_data() as $row) {

     ?>
                    <tr>
                        <td><?=$no++?></td>
                            <td><?=$row['kode_supplier']?></td>
                            <td><?=$row['nama_supplier']?></td>
                            <td><?=$row['alamat_supplier']?></td>
                            <td><?=$row['telp_supplier']?></td>
                            <td><?=$row['kota_supplier']?></td>
                            <td><a href="supplier.php?id=<?=$row['kode_supplier']?>&page=updatesupplier">Edit</a> - <a href="supplier.php?hapus&id=<?=$row['kode_supplier']?>" onclick="return confirm('Yakin mau dihapus?');">Hapus</a></td>
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