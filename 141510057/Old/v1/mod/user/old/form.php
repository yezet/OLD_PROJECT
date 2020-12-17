<?php
//include('./connect.php');
if ($_GET['get']=='add_user') { ?> 


<h4 class="page-header"><i class="fa fa-plus-circle"></i> Tambah Pengguna</h4>
<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Form User
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <form role="form" method="post" action="mod/user/process.php?act=add_user">
                                        <div class="col-lg-6">    
                                            <div class="form-group">
                                                <label>Username</label>
                                                <!--<input class="form-control" name="id" type="hidden" placeholder="id" autofocus required>-->
                                                <input class="form-control" name="username" type="text" placeholder="username" autofocus required>
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input class="form-control" name="password" type="password" placeholder="Password" required autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input class="form-control" name="nama" type="text" placeholder="nama" required autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label>Hak Akses</label>
                                                <select class="form-control" name="level" type="text" placeholder="--Level--" autocomplete="off" required>
                                                    <option value=""> - Level - </option>
                                                    <option value="1">Admin</option>
                                                    <option value="2">Gudang</option>
                                                    <option value="3">Produksi</option>
                                                    <option value="4">Pemasaran</option>
                                            </div>
                                            <div class="form-group">
                                                <label>Bagian</label>
                                                <input class="form-control" name="bagian" type="text" placeholder="Bagian" required autofocus>
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

elseif ($_GET['get']=='edit_user') { 
	if (isset($_GET['id'])) {
        $query = mysqli_query($koneksi, "SELECT username, password, nama, level, bagian FROM user WHERE id_user = '$_GET[id]'") or die('Kesalahan query : '.mysqli_error($koneksi));
        $data = mysqli_fetch_assoc ($query); }
?>
	<h3 class="page-header"><i class="fa fa-cog"></i> | <i class="fa fa-edit"></i> Edit Data</h3>
<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <!--Form Master Barang-->
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form" method="post" action="mod/user/process.php?act=update_user">
                                            
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input class="form-control" name="id" type="hidden" placeholder="id" autofocus required>
                                                <input class="form-control" name="username" type="text" value="<?php echo $data['username']; ?>" readonly ><a href="?get=user" onclick="return confirm ('Silahkan ajukan pada Form Pengajuan Perubahan Pengguna agar dapat mengganti Username : <?php echo $data['username']; ?>.')"><i class="icon fa fa-edit"></i> Ubah</a>

                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input class="form-control" name="password" type="text" value="<?php echo $data['password']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama User</label>
                                                <input class="form-control" name="nama" type="text" value="<?php echo $data['nama']; ?>">                                            </div>
                                            <div class="form-group">
                                                <label>Hak Akses</label>
                                                
                                                <select class="form-control" name="level" type="text" placeholder="Hak Akses" required autofocus>
                                                    <option value="1">Admin</option>
                                                    <option value="2">User A</option>
                                                    <option value="3">User B</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Bagian</label>
                                                <input class="form-control" name="bagian" type="text" value="<?php echo $data['bagian']; ?>">
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
