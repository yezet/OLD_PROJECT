<?php
if ($_GET['get']=='add_barang') { ?> 
<h4 class="page-header"><i class="fa fa-plus-circle"></i> Tambah Data</h4>
<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Form Master Barang
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-6">
                                        <form role="form" method="post" action="mod/barang/process.php?act=add_barang">
                                            <div class="form-group">
                                                <label>Kode Barang</label>
                                                <input class="form-control" name="id" type="hidden" placeholder="id" value="br" autofocus required>
                                                <input class="form-control" name="kd_barang" type="text" placeholder="Kode Barang"  autocomplete="d" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Barang</label>
                                                <input class="form-control" name="nm_barang" type="text" placeholder="Nama Barang" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Satuan</label>
                                                <input class="form-control" name="satuan" type="text" placeholder="Satuan" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <select class="form-control" name="kategori" type="text" placeholder="--Kategori--" autocomplete="off" required>
                                                    <option value=""> - Kategori - </option>
                                                    <?php
                                                    $queryk = mysqli_query($koneksi, "SELECT kd_kategori, kategori FROM kategori order by kd_kategori asc") or die('Kesalahan query : '.mysqli_error($koneksi));
                                                       while ($datak = mysqli_fetch_assoc ($queryk)) {
                                                        echo "<option value=\"$datak[kategori]\"> $datak[kd_kategori] - $datak[kategori]</option>";
                                                       }
                                                     ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <textarea class="form-control" name="ket" type="text" placeholder="Ket" required></textarea>
                                            </div>
                                            <input type="submit" class="btn btn-outline btn-primary btn-block" value="Tambah">
                                        
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
elseif ($_GET['get']=='edit_barang') { 
	if (isset($_GET['id'])) {
        $query = mysqli_query($koneksi, "SELECT kd_barang, nm_barang, satuan, kategori, ket FROM barang WHERE id_barang = '$_GET[id]'") or die('Kesalahan query : '.mysqli_error($koneksi));
        $data = mysqli_fetch_assoc ($query); }
?>
	<h4 class="page-header"><i class="fa fa-edit"></i> Edit Data</h4>
<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Form Master Barang
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form" method="post" action="mod/barang/process.php?act=update_barang">
                                            
                                            <div class="form-group">
                                                <label>Kode Barang</label>
                                                <input class="form-control" name="id" type="hidden" placeholder="id" autofocus required>
                                                <input class="form-control" name="kd_barang" type="text" value="<?php echo $data['kd_barang']; ?>" readonly >
                                                <!--<a href="index.php" onclick="return confirm ('Silahkan login sebagai System Administrator untuk dapat melakukan perubahan data Kode Barang : <?php echo $data['kd_barang']; ?>')"><i class="icon fa fa-edit" title="Hapus data"></i> Ubah Kode Barang</a>-->

                                            </div>
                                            <div class="form-group">
                                                <label>Nama Barang</label>
                                                <input class="form-control" name="nm_barang" type="text" value="<?php echo $data['nm_barang']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Satuan</label>
                                                <input class="form-control" name="satuan" type="text" value="<?php echo $data['satuan']; ?>">                                            </div>
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <select class="form-control" name="kategori" type="text" placeholder="--Kategori--" autocomplete="off" required>
                                                    <option value="<?php echo $data['kategori']; ?>"> - Kategori - </option>
                                                    <?php
                                                    $queryk = mysqli_query($koneksi, "SELECT kd_kategori, kategori FROM kategori order by kd_kategori asc") or die('Kesalahan query : '.mysqli_error($koneksi));
                                                       while ($datak = mysqli_fetch_assoc ($queryk)) {
                                                        echo "<option value=\"$datak[kategori]\"> $datak[kd_kategori] - $datak[kategori]</option>";
                                                       }
                                                     ?>
                                                </select>
                                                <p style="background-color: lavender; color: grey; font-style: italic;"><?php echo $data['kategori']; ?></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <textarea class="form-control" name="ket" type="text" value=""><?php echo $data['ket']; ?></textarea>
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
