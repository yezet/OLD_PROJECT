<?php
//include('./connect.php');
if ($_GET['get']=='add_kategori') { ?> 


<h4 class="page-header"><i class="fa fa-plus-circle"></i> Tambah Kategori</h4>
<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Form Kategori
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <form role="form" method="post" action="mod/kategori/process.php?act=add_kategori">
                                        <div class="col-lg-6">    
                                            <div class="form-group">
                                                <label>Kode Kategori</label>
                                                <!--<input class="form-control" name="id" type="hidden" placeholder="id" autofocus required>-->
                                                <input class="form-control" name="kd_kategori" type="text" placeholder="Kode Kategori" autofocus required>
                                            </div>
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <input class="form-control" name="kategori" type="text" placeholder="Kategori" required autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <input class="form-control" name="ket" type="text" placeholder="Keterangan" required autofocus>
                                            </div>
                                            <div class="form-group">
                                                
                                                <input type="submit" class="btn btn-outline btn-primary btn-block" value="Tambah">
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php
}

elseif ($_GET['get']=='edit_kategori') { 
	if (isset($_GET['kd'])) {
        $query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE kd_kategori = '$_GET[kd]'") or die('Kesalahan query : '.mysqli_error($koneksi));
        $data = mysqli_fetch_assoc ($query); }
?>
	<h4 class="page-header"><i class="fa fa-cog"></i> | <i class="fa fa-edit"></i> Edit Data</h4>
<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <!--Form Master Barang-->
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form" method="post" action="mod/kategori/process.php?act=update_kategori">
                                            
                                            <div class="form-group">
                                                <label>Kode Kategori</label>
                                                <!--<input class="form-control" name="id" type="hidden" placeholder="id" autofocus required>-->
                                                <input class="form-control" name="kd_kategori" type="text" value="<?php echo $data['kd_kategori']; ?>" readonly >
                                            </div>
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <input class="form-control" name="kategori" type="text" value="<?php echo $data['kategori']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <input class="form-control" name="ket" type="text" value="<?php echo $data['ket']; ?>">
                                            </div>
                                            <div class="form-group">
                                                
                                                <input type="submit" class="btn btn-outline btn-primary btn-block" value="Update">
                                            </div>
                                            
                                        </form>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<?php 
}

?>
