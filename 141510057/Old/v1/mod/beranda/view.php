<?php
if ($_SESSION['level']=='1'){
    ?>
    <h4 class="page-header"><i class="fa fa-dashboard"></i> Panel Admin</h4>
<!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-2">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                Total Persediaan
                            </div>
                            <h3 class="text-center">100</h3>
                            <p class="text-center"><a href="?get=add_barang"><button type="button" class="btn btn-default"><i class="fa fa-plus"></i> Tambah</button></p>
                        </div>
                        </div>
                                     
                                 </div>

                        
                </div>
                <!-- /.row -->
<?php
}

elseif ($_SESSION['level']=='2'){
    ?>
    <h4 class="page-header"><i class="fa fa-dashboard"></i> Panel Store</h4>
<!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-2">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                Total Persediaan
                            </div>
                            <h3 class="text-center">100</h3>
                            <p class="text-center"><a href="?get=form_barang&form=add_barang"><button type="button" class="btn btn-default"><i class="fa fa-plus"></i> Tambah</button></p>
                        </div>
                        </div>
                                     
                                 </div>

                        
                </div>
                <!-- /.row -->
<?php
}

elseif ($_SESSION['level']=='3'){
   
    ?>
    <h4 class="page-header"><i class="fa fa-dashboard"></i> Panel Produksi</h4>
<!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-2">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                Total Persediaan
                            </div>
                            <h3 class="text-center">100</h3>
                            <p class="text-center"><a href="?get=form_barang&form=add_barang"><button type="button" class="btn btn-default"><i class="fa fa-plus"></i> Tambah</button></p>
                        </div>
                        </div>
                                     
                                 </div>

                        
                </div>
                <!-- /.row -->
<?php
}
elseif ($_SESSION['level']=='4'){
    
    ?>
    <h4 class="page-header"><i class="fa fa-dashboard"></i> Panel Marketing</h4>
<!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-2">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                Total Persediaan
                            </div>
                            <h3 class="text-center">100</h3>
                            <p class="text-center"><a href="?get=form_barang&form=add_barang"><button type="button" class="btn btn-default"><i class="fa fa-plus"></i> Tambah</button></p>
                        </div>
                        </div>
                                     
                                 </div>

                        
                </div>
                <!-- /.row -->
<?php
}
else {
    header('location:index.php?login');
}
?>