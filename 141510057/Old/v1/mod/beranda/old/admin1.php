<?php
require_once "config/connect.php";

$query = mysqli_query($koneksi, "SELECT username, nama, level FROM user where username = '$_SESSION[username]'") or die ('Ada kesalahan '.mysqli_error($koneksi));
$data = mysqli_fetch_assoc($query);

 echo"
    <div clas = 'row'>
    <br><br><br>
    
    
    <center><i class='fa fa-user fa-3x'></i><center>
    <center><p><h3>Halaman Administrator</b></h3><center>
    
    <p><input class='btn' type=button value='Kembali ke beranda'  onclick=location.href='main.php?get=beranda'></a>
    
    </div";
    ?> <i class="fa fa-user fa-fw"></i>Username : <?php echo $data['username'];?>
    <i class="fa fa-user fa-fw"></i>Nama : <?php echo $data['nama'];?>
    <i class="fa fa-user fa-fw"></i>Level : <?php echo $data['level'];?>

    <p>Tambahan</p>
    <p>
        <?php
        $query = mysqli_query($koneksi, "SELECT kd_barang, nm_barang, satuan FROM barang where kd_barang = 'A002'") or die ('Ada kesalahan '.mysqli_error($koneksi));
$data = mysqli_fetch_assoc($query);?>
    <i class="fa fa-folder fa-fw"></i>Kode Barang : <?php echo $data['kd_barang'];?><br>
    <i class="fa fa-file fa-fw"></i>Nama Barang : <?php echo $data['nm_barang'];?><br>
    <i class="fa fa-folder fa-fw"></i>Satuan : <?php echo $data['satuan'];?>

        
    </p>
    
<h3 class="page-header"><i class="fa fa-dashboard"> </i> Dashboard</h3>
<!-- /.row -->
    <div class="row">
    <div class="col-lg-3 col-md-6">
    </div>
    </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-database fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">26</div>
                                        <div>New Comments!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
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
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">12</div>
                                        <div>New Tasks!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
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
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">124</div>
                                        <div>New Orders!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
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
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">13</div>
                                        <div>Support Tickets!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->