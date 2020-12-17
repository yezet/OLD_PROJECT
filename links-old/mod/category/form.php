<?php
//include('./connect.php');
if ($_GET['get']=='add_category') { ?> 


<h4 class="page-header"><i class="fa fa-plus-circle"></i> Tambah category</h4>
<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Form category
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <form role="form" method="post" action="mod/category/process.php?act=add_category">
                                        <div class="col-lg-6">    
                                            <div class="form-group">
                                                <label>Category Id</label>
                                                <!--<input class="form-control" name="id" type="hidden" placeholder="id" autofocus required>-->
                                                <input class="form-control" name="cat_id" type="hidden" placeholder="Kode category" autofocus required>
                                            </div>
                                            <div class="form-group">
                                                <label>category</label>
                                                <input class="form-control" name="cat" type="text" placeholder="category" required autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label>Note</label>
                                                <input class="form-control" name="note" type="text" placeholder="Note" required autofocus>
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

elseif ($_GET['get']=='edit_category') { 
	if (isset($_GET['id'])) {
        $query = mysqli_query($koneksi, "SELECT * FROM category WHERE cat_id = '$_GET[id]'") or die('Kesalahan query : '.mysqli_error($koneksi));
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
                                        <form role="form" method="post" action="mod/category/process.php?act=update_category">
                                            
                                            <div class="form-group">
                                                <label>Category Id</label>
                                                <!--<input class="form-control" name="id" type="hidden" placeholder="id" autofocus required>-->
                                                <input class="form-control" name="cat_id" type="text" value="<?php echo $data['cat_id']; ?>" readonly >
                                            </div>
                                            <div class="form-group">
                                                <label>Category</label>
                                                <input class="form-control" name="cat" type="text" value="<?php echo $data['cat']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Note</label>
                                                <input class="form-control" name="note" type="text" value="<?php echo $data['note']; ?>">
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
