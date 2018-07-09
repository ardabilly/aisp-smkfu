
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
  <?php
if (is_array($db->hitung_data()) && count($db->hitung_data()) > 0) {
foreach ($db->hitung_data() as $row) {
                         ?>
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-qrcode fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?=$row['total_barang']?></div>
                        <div>Barang!</div>
                    </div>
                </div>
            </div>
            <a href="index.php?page=databarang">
                <div class="panel-footer">
                    <span class="pull-left">Lihat Detail</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-truck fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?=$row['jumlah_brg']?></div>
                        <div>Stok!</div>
                    </div>
                </div>
            </div>
            <a href="index.php?page=datastok">
                <div class="panel-footer">
                    <span class="pull-left">Lihat Detail</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-sign-in fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?=$row['jml_barangmasuk']?></div>
                        <div>Barang Masuk!</div>
                    </div>
                </div>
            </div>
            <a href="index.php?page=barangmasuk">
                <div class="panel-footer">
                    <span class="pull-left">Lihat Detail</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-sign-out fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?=$row['jml_barangkeluar']?></div>
                        <div>Barang Keluar!</div>
                    </div>
                </div>
            </div>
            <a href="index.php?page=barangkeluar">
                <div class="panel-footer">
                    <span class="pull-left">Lihat Detail</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
     <?php }
 }

 else{
    ?>
        <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-qrcode fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">0</div>
                        <div>Barang!</div>
                    </div>
                </div>
            </div>
            <a href="index.php?page=databarang">
                <div class="panel-footer">
                    <span class="pull-left">Lihat Detail</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-truck fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">0</div>
                        <div>Stok!</div>
                    </div>
                </div>
            </div>
            <a href="index.php?page=datastok">
                <div class="panel-footer">
                    <span class="pull-left">Lihat Detail</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-sign-in fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">0</div>
                        <div>Barang Masuk!</div>
                    </div>
                </div>
            </div>
            <a href="index.php?page=barangmasuk">
                <div class="panel-footer">
                    <span class="pull-left">Lihat Detail</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-sign-out fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">0</div>
                        <div>Barang Keluar!</div>
                    </div>
                </div>
            </div>
            <a href="index.php?page=barangkeluar">
                <div class="panel-footer">
                    <span class="pull-left">Lihat Detail</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>


<?php } ?>

</div>       <!-- /.row -->
