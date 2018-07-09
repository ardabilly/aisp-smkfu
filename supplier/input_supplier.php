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
                <div class="row">
                    <div class="col-lg-6">
                    <form action="supplier/proses_supplier.php?aksi=tambah" method="post" enctype="multipart/form-data">
        
                            <div class="form-group">
                                <label>Kode Supplier</label>
                                <input type="text" placeholder="kode Supplier" name="kode_supplier" class="form-control" required value="<?=$hasilkode1?>" readonly> 
                            </div>
                           <div class="form-group ">
                                <label for="">Nama Supplier</label>
                                <input type="text" placeholder="Masukan Nama Supplier" name="nama_supplier" class="form-control" required> 
                            </div>
                            <div class="form-group ">
                                <label for="">Alamat Supplier</label>
                                <textarea name="alamat_supplier" class="form-control" required placeholder="Alamat Supplier"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group ">
                                <label for="">Telp Supplier</label>
                                <input type="text" placeholder="Telp Supplier" name="telp_supplier" class="form-control" required minlength="11"> 
                            </div>
                            <div class="form-group ">
                                <label for="">Kota Supplier</label>
                                    <input type="text" placeholder="Kota Supplier" name="kota_supplier" class="form-control" required> 
                            </div>
                            <div class="form-group">
                            <button type="submit" name="submit" value="Simpan" class="btn btn-default" style="background-color: #333; color: #fff;">Submit</button>
                            <a href='?page=databarang' class="btn btn-default" >Batal</a>
                            </div>
                        </div>
                        </form>
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