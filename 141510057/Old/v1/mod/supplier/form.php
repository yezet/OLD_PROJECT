<?php
//include('./connect.php');
if ($_GET['get']=='add_supplier') { ?> 


<h4 class="page-header"><i class="fa fa-plus-circle"></i> Tambah Supplier</h4>
<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Form Supplier
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <form role="form" method="post" action="mod/supplier/process.php?act=add_supplier">
                                        <div class="col-lg-6"> 
                                            <div class="form-group">
                                                <label>Kode Supplier</label>
                                                <!--<input class="form-control" name="id" type="hidden" placeholder="id" autofocus required>-->
                                                <input class="form-control" name="kd_supplier" type="text" placeholder="Kode Supplier" autofocus required>
                                            </div>   
                                            <div class="form-group">
                                                <label>Nama Supplier</label>
                                                <!--<input class="form-control" name="id" type="hidden" placeholder="id" autofocus required>-->
                                                <input class="form-control" name="nm_supplier" type="text" placeholder="Nama Supplier" autofocus required>
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input class="form-control" name="alamat" type="text" placeholder="Alamat Supplier" required autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label>Telp / Hp</label>
                                                <input class="form-control" name="telp" type="number" placeholder="Telp / Hp" required autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Kontak</label>
                                                <input class="form-control" name="kontak" type="text" placeholder="Kontak" required autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <input class="form-control" name="ket" type="text" placeholder="Keteranagn" required autofocus>
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

elseif ($_GET['get']=='edit_supplier') { 
	if (isset($_GET['id'])) {
        $query = mysqli_query($koneksi, "SELECT kd_supplier, nm_supplier, alamat, telp, kontak, ket FROM supplier WHERE id_supplier = '$_GET[id]'") or die('Kesalahan query : '.mysqli_error($koneksi));
        $data = mysqli_fetch_assoc ($query); }
?>
	<h4 class="page-header"><i class="fa fa-edit"></i> Edit Data</h4>
<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <!--Form Master Barang-->
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form" method="post" action="mod/supplier/process.php?act=update_supplier">
                                            <div class="form-group">
                                                <label>Kode Supplier</label>
                                                <input class="form-control" name="id" type="hidden" placeholder="id" autofocus required>
                                                <input class="form-control" name="kd_supplier" type="text" value="<?php echo $data['kd_supplier']; ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Supplier</label>
                                                <input class="form-control" name="nm_supplier" type="text" value="<?php echo $data['nm_supplier']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input class="form-control" name="alamat" type="text" value="<?php echo $data['alamat']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Telp</label>
                                                <input class="form-control" name="telp" type="text" value="<?php echo $data['telp']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Kontak</label>
                                                <input class="form-control" name="kontak" type="text" value="<?php echo $data['kontak']; ?>">
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
else {
    echo "<script language='javascript' type='text/javascript'>
  alert('Halaman tidak ditemukan');
  </script>
  <meta http-equiv='refresh' content='0; url=?get=beranda'>";
}
?>
