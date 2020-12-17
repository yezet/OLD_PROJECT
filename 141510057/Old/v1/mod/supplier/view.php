<?php
if ($_GET['get']=='supplier'){
    if (isset($_GET['detail'])){
    if (isset($_GET['id'])) {
        $query = mysqli_query($koneksi, "SELECT  * FROM supplier WHERE id_supplier = '$_GET[id]'") or die('Kesalahan query : '.mysqli_error($koneksi));
        $data = mysqli_fetch_array ($query); }
?> 
<h4 class="page-header"><i class="fa fa-info-circle"></i> Detail Supplier</h4>
<p class="pull-right"><a href="?get=supplier" title="Tutup"><button type="button" class="btn btn-default"><i class="fa fa-close"></i></button></a></p>
                <div class="row">
                   
                        <!--<div class="panel panel-default">-->
                            <div class="panel-heading">
                               <i class="fa fa-file"></i> | Kode Supplier : <?php echo $data['kd_supplier']; ?>
                            </div>
                            <!--<div class="panel-body">-->
                                <!--<div class="table-responsive">-->
                                    <div class="col-lg-12">
                                    <table class="table table-basic table-hover" >
                                        <!--<thead>-->
                                         <tr>
                                            <td>
                                                <div class="col-lg-6">
                                                    Nama Supplier 
                                                </div>
                                                <div class="col-lg-6" style="background-color: ivory; font-style: italic;">
                                                    <?php echo $data['nm_supplier']; ?>
                                                </div>
                                            </td>
                                         </tr>
                                         <tr>
                                            <td>
                                                <div class="col-lg-6">
                                                    Alamat
                                                </div>
                                                <div class="col-lg-6" style="background-color: ivory; font-style: italic;">
                                                    <?php echo $data['alamat']; ?>
                                                </div>
                                            </td>
                                         </tr>
                                         <tr>
                                            <td>
                                                <div class="col-lg-6">
                                                    Telp / Hp
                                                </div>
                                                <div class="col-lg-6" style="background-color: ivory; font-style: italic;">
                                                    <?php echo $data['telp']; ?>
                                                </div>
                                            </td>
                                         </tr>
                                         <tr>
                                            <td>
                                                <div class="col-lg-6">
                                                    Kontak 
                                                </div>
                                                <div class="col-lg-6" style="background-color: ivory; font-style: italic;">
                                                    <?php echo $data['kontak']; ?>
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
if($_GET['get']=='supplier'){
?>
<h4 class="page-header"><i class="fa fa-users"></i> Data Supplier</h4>
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
    elseif ($_GET['pesan'] == '1') {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Data baru berhasil disimpan.
            </div>";
    }
    // jika alert = 2
    // tampilkan pesan Sukses "Data barang berhasil diubah"
    elseif ($_GET['pesan'] == '2') {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Data berhasil diubah.
            </div>";
    }
    // jika alert = 3
    // tampilkan pesan Sukses "Data barang berhasil dihapus"
    elseif ($_GET['pesan'] == '3') {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
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
                                                <th>Kode Supplier</th>
                                                <th>Nama Supplier</th>
                                                <th>Alamat</th>
                                                <th>Telp / Hp</th>
                                                <th>Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 


        $query = mysqli_query($koneksi, "SELECT * FROM supplier order by kd_supplier")or die(mysql_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query)){
        ?>
        
        <tr>
            <td ><?php echo $nomor++; ?></td>
            <td><?php echo $data['kd_supplier']; ?></td>
            <td><?php echo $data['nm_supplier']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['telp']; ?></td>
            <td>
                <a href="?get=supplier&detail&id=<?php echo $data['id_supplier'];?>"><i class="fa fa-info"></i> Detail</a>
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
if($_GET['get']=='kelola_supplier'){
?>
<h4 class="page-header"><i class="fa fa-edit"></i> Kelola Data Supplier</h4>
<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">

                            <div class="panel-heading">
                            <!--<a class="icon fa fa-plus" title="Tambah Data" href="?mod=form_master_barang&form=add_barang"> Tambah Data</a>-->
                            </div>

<!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-basic table-hover" id="dataTables-example" >
                                        <thead>
                                            <tr>
                                                <th >#</th>
                                                <th>Kode Supplier</th>
                                                <th>Nama Supplier</th>
                                                <th>Alamat</th>
                                                <th>Telp / Hp</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 


        $query = mysqli_query($koneksi, "SELECT * FROM supplier order by kd_supplier")or die(mysql_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query)){
        ?>
        
        <tr>
            <td ><?php echo $nomor++; ?></td>
            <td><?php echo $data['kd_supplier']; ?></td>
            <td><?php echo $data['nm_supplier']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['telp']; ?></td>
            <td>
                <a href="?get=supplier&detail&id=<?php echo $data['id_supplier'];?>"><i class="fa fa-info"></i> Detail</a> |
                <a href="?get=edit_supplier&id=<?php echo $data['id_supplier']; ?>"><i class="icon fa fa-edit" title="Edit data"></i> Edit</a> || <a href="mod/supplier/process.php?act=delete_supplier&id=<?php echo $data['id_supplier']; ?>" onclick="return confirm ('Hapus Data Supplier <?php echo $data['nm_supplier']; ?> ?')"><i class="icon fa fa-trash" title="Hapus data"></i> Hapus</a>
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