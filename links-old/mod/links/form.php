<?php
if ($_GET['get']=='add_link') { ?> 
<h4 class="page-header"><i class="fa fa-plus-circle"></i> Add</h4>
<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Link
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-6">
                                        <form role="form" method="post" action="mod/links/process.php?act=add_link">
                                            <div class="form-group">
                                                <label>URL</label>
                                                <input class="form-control" name="url_id" type="hidden" placeholder="id" value="br" autofocus required>
                                                <input class="form-control" name="url" type="text" placeholder="URL"  autocomplete="d" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" name="des" type="text" placeholder="Description" required autofocus ></textarea>
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <select class="form-control" name="cat" type="text" placeholder="--Category--" autocomplete="off" required>
                                                    <option value=""> - Category - </option>
                                                    <?php
                                                    $queryc = mysqli_query($koneksi, "SELECT cat_id, cat FROM category order by cat asc") or die('Kesalahan query : '.mysqli_error($koneksi));
                                                       while ($datac = mysqli_fetch_array ($queryc)) {
                                                        echo "<option value=\"$datac[cat]\"> $datac[cat]</option>";
                                                       }
                                                     ?>
                                                </select>
                                            </div>
                                            <input type="submit" class="btn btn-outline btn-primary btn-block" value="Add">
                                        
                                        </form>
                                        </div>
                                    </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php
}
elseif ($_GET['get']=='edit_link') { 
	if (isset($_GET['id'])) {
        $query = mysqli_query($koneksi, "SELECT url, des, cat FROM links WHERE url_id = '$_GET[id]'") or die('Kesalahan query : '.mysqli_error($koneksi));
        $data = mysqli_fetch_assoc ($query); }
?>
	<h4 class="page-header"><i class="fa fa-edit"></i> Edit Data</h4>
<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Links
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form" method="post" action="mod/links/process.php?act=update_link">
                                            
                                            <div class="form-group">
                                                <label>URL</label>
                                                <input class="form-control" name="id" type="hidden" placeholder="url_id" autofocus required>
                                                <input class="form-control" name="url" type="text" value="<?php echo $data['url']; ?>" readonly >
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" name="des" type="text"><?php echo $data['des']; ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <select class="form-control" name="cat" type="text" placeholder="--Category--" autocomplete="off" required>
                                                    <option value="<?php echo $data['cat']; ?>"> - Category - </option>
                                                    <?php
                                                    $queryk = mysqli_query($koneksi, "SELECT cat_id, cat FROM category order by cat asc") or die('Kesalahan query : '.mysqli_error($koneksi));
                                                       while ($datak = mysqli_fetch_assoc ($queryk)) {
                                                        echo "<option value=\"$datak[cat]\">$datak[cat]</option>";
                                                       }
                                                     ?>
                                                </select>
                                                <p style="background-color: lavender; color: grey; font-style: italic;"><?php echo $data['cat']; ?></p>
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
else {
    echo "<script language='javascript' type='text/javascript'>
  alert('Halaman tidak ditemukan');
  </script>
  <meta http-equiv='refresh' content='0; url=?get=beranda'>";
}

?>
