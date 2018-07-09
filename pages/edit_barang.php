<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data Barang</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Update Barang Baru
            </div>
            <div class="panel-body">
                <?php 
                    foreach ($db->edit_barang($_GET['id']) as $row) {
                 ?>

                <div class="row">
                    <div class="col-lg-6">
                    <form action="pages/proses_barang.php?aksi=updatebarang" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Kode Barang</label>
                                <input type="text" name="kode_barang" value="<?=$row['kode_barang']?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" placeholder="Masukan Nama Barang" name="nama_barang" class="form-control" required value="<?=$row['nama_barang']?>">
                            </div>
                            <div class="form-group">
                                <label>Spesifikasi</label>
                                <input type="text" placeholder="Spesifikasi" name="spesifikasi" class="form-control"  class="form-control" value="<?=$row['spesifikasi']?>">
                            </div>
                           <div class="form-group">
                                <label>Lokasi</label>
                                <input type="text" placeholder="Lokasi" name="lokasi_barang" class="form-control" required value="<?=$row['lokasi_barang']?>">
                            </div>
                            
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                    <div class="col-lg-6">
                        <div class="form-group" >
                                <label>Kategori</label>
                                <select name="kategori" class="form-control" required>
                                    <option value="">Pilih Kategori</option>
                                    <option value="Furniture">Furniture</option>
                                    <option value="Elektronics">Elektronics</option>
                                    <option value="Buku">Buku</option>
                                </select>
                            </div>
                        <div class="form-group">
                                <label>Kondisi</label>
                                <select name="kondisi" class="form-control" required>
                                    <option value="">Pilih Kondisi</option>
                                    <option value="Baru">Baru</option>
                                    <option value="Bekas">Bekas</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label>Jenis Barang</label>
                            <input  type="text" placeholder="Jenis Barang" name="jenis_barang" class="form-control" required  value="<?=$row['jenis_brg']?>">
                        </div>
                        <div class="form-group">
                            <label>Sumber Dana</label>
                            <input type="text" placeholder="Sumber Dana" name="sumber_dana" class="form-control" required value="<?=$row['sumber_dana']?>">
                        </div>
                        <!-- <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="keterangan" class="form-control" required placeholder="keterangan"></textarea>
                        </div> -->
                    </div>

                     <div class="col-lg-12">
                            <button type="submit" name="submit" value="Simpan" class="btn btn-default" style="background-color: #333; color: #fff;">Submit</button>
                            <a href='?page=databarang' class="btn btn-default" >Batal</a>
                        </div>
                    </form>
                        <?php } ?>
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