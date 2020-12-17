<!-- view detail -->
<?php
if ($_GET['get']=='link'){
    if (isset($_GET['detail'])){
        if (isset($_GET['id'])) {
        $query = mysqli_query($koneksi, "SELECT * FROM links WHERE url_id = '$_GET[id]'") or die('Kesalahan query : '.mysqli_error($koneksi));
        $data = mysqli_fetch_array ($query); }
?> 
<h4 class="page-header"><i class="fa fa-info-circle"></i> Detail</h4>
<p class="pull-right"><a href="?get=link" title="Close"><button type="button" class="btn btn-default"><i class="fa fa-close"></i></button></a>
<a href="mod/links/process.php?act=delete_link&id=<?php echo $data['url_id']; ?>" title="Delete"><button type="button" class="btn btn-default" onclick="return confirm ('Delete <?php echo $data['url']; ?> ?')" ><i class="icon fa fa-trash"></i></button></a></p>

                <!--<div class="row">-->
                   
                        <!--<div class="panel panel-default">-->
                            <div class="panel-heading">
                               <i class="fa fa-link"></i> | <a href="<?php echo $data['url']; ?>" target ='_blank'><?php echo $data['url']; ?></a>  
                            </div>
                            <!--<div class="panel-body">-->
                                <!--<div class="table-responsive">-->
                                    <div class="col-lg-12">
                                    <table class="table table-basic table-hover" >
                                        <!--<thead>-->
                                         <tr>
                                            <td>
                                                <div class="col-lg-6">
                                                    Desc
                                                </div>
                                                <div class="col-lg-6" style="background-color: ivory; font-style: italic;">
                                                    <?php echo $data['des']; ?>
                                                </div>
                                            </td>
                                         </tr>
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
                                         
                                     </table>
                                 </div>
                                                
                <!--</div>-->
                <?php
    }
}
?>

<!-- view link -->
<?php
//include('./connect.php');
if ($_GET['get']=='link') { ?> 

<h4 class="page-header"><i class="fa fa-link"></i> Links</h4>
<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">

                            <div class="panel-heading">
                            <!--<a class="icon fa fa-plus-circle" title="Tambah Data" href="?mod=form_barang&form=add_barang"> Tambah Data</a>-->
                            </div>

<?php
    if (empty($_GET['pesan'])) {
      echo "";
    } 
    // jika alert = 1
    // tampilkan pesan Sukses "Data barang baru berhasil disimpan"
    elseif ($_GET['pesan'] == '1') {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Success!</h4>
              Data baru berhasil disimpan.
            </div>";
    }
    // jika alert = 2
    // tampilkan pesan Sukses "Data barang berhasil diubah"
    elseif ($_GET['pesan'] == '2') {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Success!</h4>
              Data berhasil diubah.
            </div>";
    }
    // jika alert = 3
    // tampilkan pesan Sukses "Data barang berhasil dihapus"
    elseif ($_GET['pesan'] == '3') {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Success!</h4>
              Data berhasil dihapus.
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
                                                <th>URL</th>
                                                <th>Category</th>
                                                <th>Opt</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 


        $query = mysqli_query($koneksi, "SELECT * FROM links order by cat")or die(mysql_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query)){
        ?>
        
        <tr>
            <td ><?php echo $nomor++; ?></td>
            <td><a href="<?php echo $data['url']; ?>" target='_blank'><?php echo $data['url']; ?></a></td>
            <td><?php echo $data['cat']; ?></td>
            <td>
                <a href="?get=link&detail&id=<?php echo $data['url_id'];?>" title="Detail" ><i class="icon fa fa-info-circle"></i></a>
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




<?php
//include('./connect.php');
if ($_GET['get']=='manage_link') { ?> 

<h4 class="page-header"><i class="fa fa-edit"></i> Links</h4>
<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">

                            <div class="panel-heading">
                            <!--<a class="icon fa fa-plus-circle" title="Tambah Data" href="?mod=form_barang&form=add_barang"> Tambah Data</a>-->
                            </div>

                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-basic table-hover" id="dataTables-example" >
                                        <thead>
                                            <tr>
                                                <th >#</th>
                                                <th>URL</th>
                                                <th>Category</th>
                                                <th>Opt</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 


        $query = mysqli_query($koneksi, "SELECT * FROM links order by cat")or die(mysql_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query)){
        ?>
        
        <tr>
            <td ><?php echo $nomor++; ?></td>
            <td><a href="<?php echo $data['url']; ?>" target='_blank'><?php echo $data['url']; ?></a></td>
            <td><?php echo $data['cat']; ?></td>
            <td>
                
                <a href="?get=edit_link&id=<?php echo $data['url_id'];?>" title="Edit"><i class="icon fa fa-edit" ></i></a> |
                <!--<a href="./menu/barang/ap_edit_modal.php"><i class="icon fa fa-edit" title="Edit data"></i></a> |-->
                <a href="mod/links/process.php?act=delete_link&id=<?php echo $data['url_id']; ?>" onclick="return confirm ('Delete <?php echo $data['url']; ?> ?')" title="Delete"><i class="icon fa fa-trash"></i></a>
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

<!-- OLD LINK -->
<?php
//include('./connect.php');
if ($_GET['get']=='old_link') { ?> 

<h4 class="page-header"><i class="fa fa-link"></i> Old Links</h4>
<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">

                            <div class="panel-heading">
                            <!--<a class="icon fa fa-plus-circle" title="Tambah Data" href="?mod=form_barang&form=add_barang"> Tambah Data</a>-->
                            </div>

<?php
    if (empty($_GET['pesan'])) {
      echo "";
    } 
    // jika alert = 1
    // tampilkan pesan Sukses "Data barang baru berhasil disimpan"
    elseif ($_GET['pesan'] == '1') {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Success!</h4>
              Data baru berhasil disimpan.
            </div>";
    }
    // jika alert = 2
    // tampilkan pesan Sukses "Data barang berhasil diubah"
    elseif ($_GET['pesan'] == '2') {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Success!</h4>
              Data berhasil diubah.
            </div>";
    }
    // jika alert = 3
    // tampilkan pesan Sukses "Data barang berhasil dihapus"
    elseif ($_GET['pesan'] == '3') {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Success!</h4>
              Data berhasil dihapus.
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
                                                <th>URL</th>
                                                <th>Category</th>
                                                <th>Opt</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 


        $query = mysqli_query($koneksi, "SELECT * FROM old_links order by cat")or die(mysql_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query)){
        ?>
        
        <tr>
            <td ><?php echo $nomor++; ?></td>
            <td><a href="<?php echo $data['url']; ?>" target='_blank'><?php echo $data['url']; ?><a></td>
            <td><?php echo $data['cat']; ?></td>
            <td>
                
                <a href="mod/links/process.php?act=delete_old_link&id=<?php echo $data['url_id']; ?>" onclick="return confirm ('Delete <?php echo $data['url']; ?> ?')" title="Delete Data"><i class="icon fa fa-close" title="Delete data"></i></a> |
                <a href="mod/links/process.php?act=copy_links&id=<?php echo $data['url_id']; ?>" onclick="return confirm ('Copy <?php echo $data['url']; ?> ?')"><i class="icon fa fa-check" title="Move Data"></i></a>
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