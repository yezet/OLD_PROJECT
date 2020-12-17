

<h3 class="page-header"><i class="fa fa-users"></i> Data Pengguna Sistem</h3>
<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">

                            <div class="panel-heading">
                            <!--<a class="icon fa fa-plus" title="Tambah Data" href="?mod=form_master_barang&form=add_barang"> Tambah Data</a>-->
                            </div>

<?php
    if (empty($_GET['pesan'])) {
      echo "";
    } 
    // jika alert = 1
    // tampilkan pesan Sukses "Data barang baru berhasil disimpan"
    elseif ($_GET['pesan'] == 1) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Data user baru berhasil disimpan.
            </div>";
    }
    // jika alert = 2
    // tampilkan pesan Sukses "Data barang berhasil diubah"
    elseif ($_GET['pesan'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Data user berhasil diubah.
            </div>";
    }
    // jika alert = 3
    // tampilkan pesan Sukses "Data barang berhasil dihapus"
    elseif ($_GET['pesan'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Data user berhasil dihapus.
            </div>";
    }
    ?>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-basic table-hover" id="dataTables-example" >
                                        <thead>
                                            <tr>
                                                <th >#</th>
                                                <th>Username</th>
                                                <th>Nama Lengkap</th>
                                                <th>Bagian</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 


        $query = mysqli_query($koneksi, "SELECT * FROM user order by id")or die(mysql_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query)){
        ?>
        
        <tr>
            <td ><?php echo $nomor++; ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['bagian']; ?></td>
            <td>
                <a href="?get=form_user&form=edit_user&id=<?php echo $data['id']; ?>"<i class="icon fa fa-edit" title="Edit data"> Edit</i></a> || <a href="mod/user/process.php?act=delete_user&id=<?php echo $data['id']; ?>" onclick="return confirm ('Hapus Data User <?php echo $data['username']; ?> ?')"><i class="icon fa fa-trash" title="Hapus data"> Hapus</i></a>
            </td>
        </tr>
        
        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->



                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                </div>
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
