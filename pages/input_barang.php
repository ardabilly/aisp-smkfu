<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Barang</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Input Barang Baru
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                    <form action="pages/proses_barang.php?aksi=tambah" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Kode Barang</label>
                                <input type="text" name="kode_barang" value="<?=$hasilkode?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" placeholder="Masukan Nama Barang" name="nama_barang" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Spesifikasi</label>
                                <input type="text" placeholder="Spesifikasi" name="spesifikasi" class="form-control"  class="form-control">
                            </div>
                           <div class="form-group">
                                <label>Lokasi</label>
                                <input type="text" placeholder="Lokasi" name="lokasi_barang" class="form-control" required >
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select name="kategori" class="form-control" required>
                                    <option value="">Pilih Kategori</option>
                                    <option value="Furniture">Furniture</option>
                                    <option value="Elektronics">Elektronics</option>
                                    <option value="Buku">Buku</option>
                                </select>
                            </div>
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                    <div class="col-lg-6">
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
                            <input  type="text" placeholder="Jenis Barang" name="jenis_barang" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Sumber Dana</label>
                            <input type="text" placeholder="Sumber Dana" name="sumber_dana" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="keterangan" class="form-control" required placeholder="keterangan"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" value="Simpan" class="btn btn-default" style="background-color: #333; color: #fff;">Submit</button>
                            <a href='?page=databarang' class="btn btn-default" >Batal</a>
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