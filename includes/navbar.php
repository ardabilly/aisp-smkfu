<?php 
session_start();
if (!isset($_SESSION["username"])) {

echo "<script>window.location.href='login.php';</script>";
exit();
}
?>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">APLIKASI INVENTARIS</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>&nbsp;&nbsp;&nbsp;<span class="text-uppercase"><?=$_SESSION["username"]?></span>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i>Profile</a>
                </li>
                <li><a href="index.php?page=pengaturan"><i class="fa fa-gear fa-fw"></i> Pengaturan</a>
                </li>
                <li class="divider"></li>
                <li><a href="logout.php" onclick="return confirm('Yakin keluar?');"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
</nav>