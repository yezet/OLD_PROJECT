<?php
if ($_GET['get']=='kategori') {
    if(isset($_GET['detail'])){
    if(isset($_GET['kd'])){
        $query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE kd_kategori = '$_GET[kd]'") or die('Kesalahan query : '.mysqli_error($koneksi));
        $data = mysqli_fetch_assoc ($query);
    }
    ?>
    <h4 class="page-header"><i class="fa fa-info-circle"></i> Detail Kategori</h4>
    <p class="pull-right"><a href="?get=kategori" title="Tutup"><button type="button" class="btn btn-default"><i class="fa fa-close"></i></button></a></p>

                <div class="row">
                   
                        <!--<div class="panel panel-default">-->
                            <div class="panel-heading"> 
                               <i class="fa fa-file"></i> | Kode Kategori : <?php echo $data['kd_kategori']; ?>
                            </div>
                            <!--<div class="panel-body">-->
                                <!--<div class="table-responsive">-->
                                    <div class="col-lg-12">
                                    <table class="table table-basic table-hover" >
                                        <!--<thead>-->
                                         <tr>
                                            <td>
                                                <div class="col-lg-6">
                                                    Kategori 
                                                </div>
                                                <div class="col-lg-6" style="background-color: ivory; font-style: italic;">
                                                    <?php echo $data['kategori']; ?>
                                                </div>
                                            </td>
                                         </tr>
                                         <tr>
                                            <td>
                                                <div class="col-lg-6">
                                                    Keterangan 
                                                </div>
                                                <div class="col-lg-6" style="background-color: ivory; font-style: italic;">
                                                    <?php echo $data['ket']; ?>
                                                </div>
                                            </td>
                                         </tr>
                                     </table>
                                 </div>
                                                
                </div>
                <?php
}
}

?>

<?php
if ($_GET['get']=='kategori') {
    ?>
<h3 class="page-header"><i class="fa fa-tag"></i> Kategori</h3>
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
              Kategori baru berhasil disimpan.
            </div>";
    }
    // jika alert = 2
    // tampilkan pesan Sukses "Data barang berhasil diubah"
    elseif ($_GET['pesan'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Kategori berhasil diubah.
            </div>";
    }
    // jika alert = 3
    // tampilkan pesan Sukses "Data barang berhasil dihapus"
    elseif ($_GET['pesan'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Kategori berhasil dihapus.
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
                                                <th>Kode Kategori</th>
                                                <th>Kategori</th>
                                                <th>Keterangan</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 


        $query = mysqli_query($koneksi, "SELECT * FROM kategori order by kd_kategori")or die(mysql_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query)){
        ?>
        
        <tr>
            <td ><?php echo $nomor++; ?></td>
            <td><?php echo $data['kd_kategori']; ?></td>
            <td><?php echo $data['kategori']; ?></td>
            <td><?php echo $data['ket']; ?></td>
            <td> <a href="?get=kategori&detail&kd=<?php echo $data['kd_kategori'];?>" title="Lihat Detail" ><i class="icon fa fa-info-circle"></i> Detail</a>
                <a href="?get=edit_kategori&kd=<?php echo $data['kd_kategori']; ?>"<i class="icon fa fa-edit" title="Edit <?php echo $data['kategori']; ?>"> Edit</i></a> || <a href="mod/kategori/process.php?act=delete_kategori&kd=<?php echo $data['kd_kategori']; ?>" onclick="return confirm ('Hapus <?php echo $data['kategori']; ?> ?')"><i class="icon fa fa-trash" title="Hapus data"> Hapus</i></a>
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
                <?php
            }

?>

<div class="container">
  <h2>Modal Example</h2>
  
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#add_kategori"><i class="fa fa-plus"> Add Kategori</i></button>

  <!-- Modal -->
  
        <div class="modal fade" id="add_kategori" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form Kategori</h4>
        </div>
        <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <form role="form" method="post" action="mod/kategori/process.php?act=add_kategori">
                                        <div class="col-lg-12">    
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
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#view_kategori">Open Modal</button>

  <!-- Modal -->
  
        <div class="modal fade" id="view_kategori" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form Kategori</h4>
        </div>
        <div class="modal-body">
          <h3 class="page-header"><i class="fa fa-users"></i> Kategori</h3>
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
              Kategori baru berhasil disimpan.
            </div>";
    }
    // jika alert = 2
    // tampilkan pesan Sukses "Data barang berhasil diubah"
    elseif ($_GET['pesan'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Kategori berhasil diubah.
            </div>";
    }
    // jika alert = 3
    // tampilkan pesan Sukses "Data barang berhasil dihapus"
    elseif ($_GET['pesan'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Kategori berhasil dihapus.
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
                                                <th>Kode Kategori</th>
                                                <th>Kategori</th>
                                                <th>Keterangan</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 


        $query = mysqli_query($koneksi, "SELECT * FROM kategori order by kd_kategori")or die(mysql_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query)){
        ?>
        
        <tr>
            <td ><?php echo $nomor++; ?></td>
            <td><?php echo $data['kd_kategori']; ?></td>
            <td><?php echo $data['kategori']; ?></td>
            <td><?php echo $data['ket']; ?></td>
            <td> <a href="?get=kategori&view&kd=<?php echo $data['kd_kategori'];?>" title="Lihat Detail" ><i class="icon fa fa-info-circle"></i> Detail</a>
                <a href="?get=edit_kategori&kd=<?php echo $data['kd_kategori']; ?>"<i class="icon fa fa-edit" title="Edit <?php echo $data['kategori']; ?>"> Edit</i></a> || <a href="mod/kategori/process.php?act=delete_kategori&kd=<?php echo $data['kd_kategori']; ?>" onclick="return confirm ('Hapus <?php echo $data['kategori']; ?> ?')"><i class="icon fa fa-trash" title="Hapus data"> Hapus</i></a>
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>