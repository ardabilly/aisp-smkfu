<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Form Peminjaman</h1>
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
                    <form action="pages/proses_barang.php?aksi=tambahdatapinjam" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Kode Pinjam</label>
                                <input type="text" name="no_pinjam" value="<?=$hasilkodepinjam?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nama Barang</label>
                            <select name="nama_barang" class="form-control" required>

                                    <option value="">Pilih Nama Barang</option>
                                <?php 
                                        foreach($db->barang() as $brg)
                                        {
                                            ?>
                                            <option value="<?=$brg['nama_barang']?>"><?=$brg['nama_barang']?></option>
                                            <?php
                                        }
                                ?>  
                            </select>
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Pinjam</label>
                                <input type="text" placeholder="Jumlah Pinjam" name="jumlah_pinjam" class="form-control" required pattern="[0-9]+">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Peminjam</label>
                                <input type="text" placeholder="Masukan Nama Peminjam" name="nama_peminjam" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            
                            <div class="form-group">
                                <label for="">Tanggal Pinjam</label>
                                <input type="date" placeholder="Tanggal Peminjaman" name="tgl_pinjam" class="form-control" required> 
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Pengembalian</label>
                                <input type="date" placeholder="Tanggal Peminjaman" name="tgl_kembali" class="form-control" required> 
                            </div>

                            <div class="form-group">
                                <label for="">Keterangan</label>
                                <select name="keterangan" class="form-control" required>
                                    <option value="">Keterangan</option>
                                    <option value="Sedang dipinjam">Sedang dipinjam</option>
                                </select>
                            </div>
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