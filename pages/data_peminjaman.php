<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data Peminjaman </h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Peminjaman Barang
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" cellpadding="0" cellspacing="0" id="dataTables-example">
                    <thead>
    <?php
        if (is_array($db->tampil_peminjaman()) && count($db->tampil_peminjaman()) > 0) {
    ?>
                        <tr>
                            <th>No</th>
                            <th>No Pinjam</th>
                            <th>Tanggal Pinjam</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Jumlah Pinjam</th>
                            <th>Nama Peminjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Keterangan</th>
                            <th>Pilihan</th>
                        </tr>
                    </thead>
                    <tbody>
    <?php 
        $no = 1;
        foreach ($db->tampil_peminjaman() as $row) {

     ?>
                    <tr>
                        <td><?=$no++?></td>
                        <td><?=$row['nomor_pinjam']?></td>
                        <td><?=$row['tgl_pinjam']?></td>
                        <td><?=$row['kode_barang']?></td>
                        <td><?=$row['nama_barang']?></td>
                        <td><?=$row['jumlah_pinjam']?></td>
                        <td><?=$row['peminjam']?></td>
                        <td><?=$row['tgl_kembali']?></td>
                        <td style="color:red; font-weight: bold;"><?=$row['keterangan']?></td>
                        <td class="text-center">
                        <?php 
                            if ($row['keterangan'] == 'Sudah dikembalikan') {
                         ?>
                        
                            <span class="">-</span>

                         <?php 
                            }
                            else{
                          ?>
                        <form action="barang/proses_barang.php?aksi=kembalibarang" method="post">
                                <select name="status" class="form-control" style="width: 180px; height: 30px;" required>
                                    <option selected="selected"></option>
                                    <option value="Sudah dikembalikan">Sudah dikembalikan</option>
                                </select>
                                <br>
                                <input type="text" name="no_pinjam" value="<?=$row['nomor_pinjam']?>" hidden>
                                <input type="submit" value="proses" class="btn btn-default" style="padding:5px;">
                        </form>
                        <?php } ?>
                        </td>
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