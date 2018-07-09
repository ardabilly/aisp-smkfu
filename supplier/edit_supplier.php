<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Supplier</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Input Data Supplier
            </div>
            <div class="panel-body">
                <?php 

                 foreach ($cs->edit_supplier($_GET['id']) as $row) {
                 ?>
                <div class="row">
                    <div class="col-lg-6">
                    <form action="supplier/proses_supplier.php?aksi=update" method="post" enctype="multipart/form-data">
                <div class="form-group ">
                    <label for="">Kode Supplier</label>

                    <input type="text" placeholder="kode Supplier" name="kode_supplier" class="form-control" required value="<?=$row['kode_supplier']?>" readonly> 
                </div>
                <div class="form-group ">
                    <label for="">Nama Supplier</label>

                    <input type="text" placeholder="Nama Supplier" name="nama_supplier" class="form-control" required value="<?=$row['nama_supplier']?>"> 
                </div>
                <div class="form-group ">
                    <label for="">Alamat Supplier</label>
                    <textarea name="alamat_supplier" class="form-control" required placeholder="Alamat Supplier"><?=$row['alamat_supplier']?></textarea>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group ">
                    <label for="">Telp Supplier</label>
                    
                    <input type="text" placeholder="Telp Supplier" name="telp_supplier" class="form-control" required value="<?=$row['telp_supplier']?>"> 
                </div>
                <div class="form-group ">
                    <input type="text" placeholder="Kota Supplier" name="kota_supplier" class="form-control" required value="<?=$row['kota_supplier']?>"> 
                </div>
                            <div class="form-group">
                            <button type="submit" name="submit" value="Simpan" class="btn btn-default" style="background-color: #333; color: #fff;">Submit</button>
                            <a href='?page=databarang' class="btn btn-default" >Batal</a>
                            </div>
                        </div>
                        </form>
                        <?php } ?>
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->