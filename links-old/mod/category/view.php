<?php
if ($_GET['get']=='category') {
    if(isset($_GET['detail'])){
    if(isset($_GET['id'])){
        $query = mysqli_query($koneksi, "SELECT * FROM category WHERE cat_id = '$_GET[id]'") or die('Kesalahan query : '.mysqli_error($koneksi));
        $data = mysqli_fetch_assoc ($query);
    }
    ?>
    <h4 class="page-header"><i class="fa fa-info-circle"></i> Detail Category</h4>
    <p class="pull-right"><a href="?get=category" title="Close"><button type="button" class="btn btn-default"><i class="fa fa-close"></i></button></a></p>

                <div class="row">
                   
                        <!--<div class="panel panel-default">-->
                            <div class="panel-heading"> 
                               <i class="fa fa-file"></i> | Id : <?php echo $data['cat_id']; ?>
                            </div>
                            <!--<div class="panel-body">-->
                                <!--<div class="table-responsive">-->
                                    <div class="col-lg-12">
                                    <table class="table table-basic table-hover" >
                                        <!--<thead>-->
                                         <tr>
                                            <td>
                                                <div class="col-lg-6">
                                                    Category 
                                                </div>
                                                <div class="col-lg-6" style="background-color: ivory; font-style: italic;">
                                                    <?php echo $data['cat']; ?>
                                                </div>
                                            </td>
                                         </tr>
                                         <tr>
                                            <td>
                                                <div class="col-lg-6">
                                                    Note 
                                                </div>
                                                <div class="col-lg-6" style="background-color: ivory; font-style: italic;">
                                                    <?php echo $data['note']; ?>
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
if ($_GET['get']=='category') {
    ?>
<h3 class="page-header"><i class="fa fa-tag"></i> Category</h3>
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
              category baru berhasil disimpan.
            </div>";
    }
    // jika alert = 2
    // tampilkan pesan Sukses "Data barang berhasil diubah"
    elseif ($_GET['pesan'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              category berhasil diubah.
            </div>";
    }
    // jika alert = 3
    // tampilkan pesan Sukses "Data barang berhasil dihapus"
    elseif ($_GET['pesan'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              category berhasil dihapus.
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
                                                <th>Category</th>
                                                <th>Note</th>
                                                <th>Opt</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 


        $query = mysqli_query($koneksi, "SELECT * FROM category order by cat")or die(mysql_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query)){
        ?>
        
        <tr>
            <td ><?php echo $nomor++; ?></td>
            <td><?php echo $data['cat']; ?></td>
            <td><?php echo $data['note']; ?></td>
            <td> <a href="?get=category&detail&id=<?php echo $data['cat_id'];?>" title="Detail" ><i class="icon fa fa-info-circle"></i> </a>
                | <a href="?get=edit_category&id=<?php echo $data['cat_id']; ?>"<i class="icon fa fa-edit" title="Edit <?php echo $data['cat']; ?>"> </i></a> | <a href="mod/category/process.php?act=delete_category&id=<?php echo $data['cat_id']; ?>" onclick="return confirm ('Delete <?php echo $data['cat']; ?> ?')"><i class="icon fa fa-trash" title="Hapus data"> </i></a>
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
  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#add_category"><i class="fa fa-plus"> Add Category</i></button>

  <!-- Modal -->
  
        <div class="modal fade" id="add_category" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form category</h4>
        </div>
        <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <form role="form" method="post" action="mod/category/process.php?act=add_category">
                                        <div class="col-lg-12">    
                                            <div class="form-group">
                                                <label>Kode category</label>
                                                <!--<input class="form-control" name="id" type="hidden" placeholder="id" autofocus required>-->
                                                <input class="form-control" name="cat_id" type="text" placeholder="Kode category" autofocus required>
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
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#view_category">Open Modal</button>

  <!-- Modal -->
  
        <div class="modal fade" id="view_category" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form category</h4>
        </div>
        <div class="modal-body">
          <h3 class="page-header"><i class="fa fa-users"></i> category</h3>
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
              category baru berhasil disimpan.
            </div>";
    }
    // jika alert = 2
    // tampilkan pesan Sukses "Data barang berhasil diubah"
    elseif ($_GET['pesan'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              category berhasil diubah.
            </div>";
    }
    // jika alert = 3
    // tampilkan pesan Sukses "Data barang berhasil dihapus"
    elseif ($_GET['pesan'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              category berhasil dihapus.
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
                                                <th>Category Id</th>
                                                <th>Category</th>
                                                <th>Note</th>
                                                <th>Opt</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 


        $query = mysqli_query($koneksi, "SELECT * FROM category order by cat_id")or die(mysql_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query)){
        ?>
        
        <tr>
            <td ><?php echo $nomor++; ?></td>
            <td><?php echo $data['cat_id']; ?></td>
            <td><?php echo $data['cat']; ?></td>
            <td><?php echo $data['note']; ?></td>
            <td> <a href="?get=category&view&id=<?php echo $data['cat_id'];?>" title="Detail" ><i class="icon fa fa-info-circle"></i> Detail</a>
                <a href="?get=edit_category&id=<?php echo $data['cat_id']; ?>"<i class="icon fa fa-edit" title="Edit <?php echo $data['cat_id']; ?>"> Edit</i></a> || <a href="mod/category/process.php?act=delete_category&id=<?php echo $data['cat_id']; ?>" onclick="return confirm ('Hapus <?php echo $data['cat']; ?> ?')"><i class="icon fa fa-trash" title="Hapus data"> Hapus</i></a>
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