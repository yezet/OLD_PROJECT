<?php
if ($_GET['get']=='barang'){
    if (isset($_GET['detail'])){
        if (isset($_GET['id'])) {
        $query = mysqli_query($koneksi, "SELECT kd_barang, nm_barang, satuan, kategori, stok, ket FROM barang WHERE id_barang = '$_GET[id]'") or die('Kesalahan query : '.mysqli_error($koneksi));
        $data = mysqli_fetch_assoc ($query); }
?> 
<h4 class="page-header"><i class="fa fa-info-circle"></i> Detail Barang</h4>
<p class="pull-right"><a href="?get=barang" title="Tutup"><button type="button" class="btn btn-default"><i class="fa fa-close"></i></button></a></p>

                <div class="row">
                   
                        <!--<div class="panel panel-default">-->
                            <div class="panel-heading">
                               <i class="fa fa-file"></i> | Kode Barang : <?php echo $data['kd_barang']; ?>
                            </div>
                            <!--<div class="panel-body">-->
                                <!--<div class="table-responsive">-->
                                    <div class="col-lg-12">
                                    <table class="table table-basic table-hover" >
                                        <!--<thead>-->
                                         <tr>
                                            <td>
                                                <div class="col-lg-6">
                                                    Nama Barang 
                                                </div>
                                                <div class="col-lg-6" style="background-color: ivory; font-style: italic;">
                                                    <?php echo $data['nm_barang']; ?>
                                                </div>
                                            </td>
                                         </tr>
                                         <tr>
                                            <td>
                                                <div class="col-lg-6">
                                                    Satuan 
                                                </div>
                                                <div class="col-lg-6" style="background-color: ivory; font-style: italic;">
                                                    <?php echo $data['satuan']; ?>
                                                </div>
                                            </td>
                                         </tr>
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
                                                    Stok 
                                                </div>
                                                <div class="col-lg-6" style="background-color: ivory; font-style: italic;">
                                                    <?php echo $data['stok']; ?>
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
//include('./connect.php');
if ($_GET['get']=='barang') { ?> 

<h4 class="page-header"><i class="fa fa-database"></i> Master Barang</h4>
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
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Data barang baru berhasil disimpan.
            </div>";
    }
    // jika alert = 2
    // tampilkan pesan Sukses "Data barang berhasil diubah"
    elseif ($_GET['pesan'] == '2') {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Data barang berhasil diubah.
            </div>";
    }
    // jika alert = 3
    // tampilkan pesan Sukses "Data barang berhasil dihapus"
    elseif ($_GET['pesan'] == '3') {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Data barang berhasil dihapus.
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
                                                <th>Kode Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Kategori</th>
                                                <th>Stok</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 


        $query = mysqli_query($koneksi, "SELECT * FROM barang order by kd_barang")or die(mysql_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query)){
        ?>
        
        <tr>
            <td ><?php echo $nomor++; ?></td>
            <td><?php echo $data['kd_barang']; ?></td>
            <td><?php echo $data['nm_barang']; ?></td>
            <td><?php echo $data['kategori']; ?></td>
            <td><?php echo $data['stok']; ?></td>
            <td>
                <a href="?get=barang&detail&id=<?php echo $data['id_barang'];?>" title="Lihat Detail" ><i class="icon fa fa-info-circle"></i> Detail</a>
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
if ($_GET['get']=='kelola_barang') { ?> 

<h4 class="page-header"><i class="fa fa-edit"></i> Kelola Data Barang</h4>
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
                                                <th>Kode Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Satuan</th>
                                                <th>Kategori</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 


        $query = mysqli_query($koneksi, "SELECT * FROM barang order by kd_barang")or die(mysql_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query)){
        ?>
        
        <tr>
            <td ><?php echo $nomor++; ?></td>
            <td><?php echo $data['kd_barang']; ?></td>
            <td><?php echo $data['nm_barang']; ?></td>
            <td><?php echo $data['satuan']; ?></td>
            <td><?php echo $data['kategori']; ?></td>
            <td>
                
                <a href="?get=edit_barang&id=<?php echo $data['id_barang'];?>" title="Ubah Data"><i class="icon fa fa-edit" ></i> Ubah</a> |
                <!--<a href="./menu/barang/ap_edit_modal.php"><i class="icon fa fa-edit" title="Edit data"></i></a> |-->
                <a href="mod/barang/process.php?act=delete_barang&id=<?php echo $data['id_barang']; ?>" onclick="return confirm ('Hapus Data Barang <?php echo $data['nm_barang']; ?> ?')" title="Hapus Data"><i class="icon fa fa-trash" title="Hapus data"></i> Hapus</a> |
                <a href="?get=barang&detail&id=<?php echo $data['id_barang'];?>" title="Lihat Detail" ><i class="icon fa fa-info-circle"></i></a> 
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

