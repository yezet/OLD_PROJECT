<?php
if ($_GET['p']=='barang'){
    if (isset($_GET['view'])){
        ?>
        <div class="w3-center w3-margin-bottom w3-light-grey"><strong>Data Barang</strong></div>
        <table id="example" class="w3-table display" style="width:100%">
            <!--<table id="example" class="display" style="width:100%">-->
        <thead>
            <tr>
                <th >#</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Stok</th>
                <!--<th>Opsi</th>-->
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
                <td><a href="?p=barang&detail&id=<?php echo $data['id_barang']; ?>" title="Lihat rincian barang"><?php echo $data['kd_barang']; ?></a></td>
                <td><?php echo $data['nm_barang']; ?></td>
                <td><?php echo $data['kategori']; ?></td>
                <td><?php echo $data['stok']; ?></td>
                <!--<td>
                <a href="?p=fbarang&edit&id=<?php echo $data['id_barang']; ?>" class="w3-button w3-small"> Ubah</a> <a href="mod/barang/process.php?act=delete&id=<?php echo $data['id_barang']; ?>" onclick="return confirm ('Hapus Data Barang : <?php echo $data['nm_barang']; ?> ?')" class="w3-button w3-small">Hapus</a>
               </td>-->
            </tr>
            <?php } ?>  
        </tbody>
        </table>
        <?php
    }
}
?>

<?php
if ($_GET['p']=='tbarang'){
    if (isset($_GET['view'])){
        ?>
        <div class="w3-center w3-margin-bottom w3-light-grey"><strong>Kelola Data Barang</strong></div>
        <table id="example" class="w3-table display" style="width:100%">
            <!--<table id="example" class="display" style="width:100%">-->
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
                <a href="?p=fbarang&edit&id=<?php echo $data['id_barang']; ?>" class="w3-button w3-small"> Ubah</a> <a href="mod/barang/process.php?act=delete&id=<?php echo $data['id_barang']; ?>" onclick="return confirm ('Hapus Data Barang : <?php echo $data['nm_barang']; ?> ?')" class="w3-button w3-small">Hapus</a>
               </td>
            </tr>
            <?php } ?>  
        </tbody>
        </table>
        <?php
    }
}
?>

<!--rincian barang-->
<?php
if ($_GET['p']=='barang'){
  if (isset($_GET['detail'])){
    if (isset($_GET['id'])){
      $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang = '$_GET[id]'") or die('Kesalahan query : '.mysqli_error($koneksi));
        $data = mysqli_fetch_array ($query); }
      ?>
      <div class="w3-center w3-light-grey"><strong>Rincian barang</strong></div>
      <form class="w3-container w3-half" method="post" action="mod/barang/process.php?act=update">
        <div class="w3-section">
          <label><b>Kode Barang</b></label>
          <input class="w3-input " type="hidden" name="id" placeholder="id" required >
          <input class="w3-input " type="text" name="kd_barang" value="<?php echo $data['kd_barang']; ?>" readonly>
          <label><b>Nama Barang</b></label>
          <input class="w3-input " type="text" name="nm_barang" value="<?php echo $data['nm_barang']; ?>" readonly>
          <label><b>Satuan</b></label>
          <input class="w3-input " type="text" name="satuan" value="<?php echo $data['satuan']; ?>" readonly>
          <label><b>Kategori</b></label>
          <input class="w3-input " type="text" name="level" value="<?php echo $data['kategori']; ?>" readonly >
          <label><b>Keterangan</b></label>
          <input class="w3-input " type="text" name="ket" value="<?php echo $data['ket']; ?>" readonly>
          <a class="w3-button  w3-black w3-section w3-padding" href="?p=fbarang&edit&id=<?php echo $data['id_barang']; ?>" onclick="return confirm ('Edit barang : <?php echo $data['nm_barang']; ?> ?')">Edit by Admin</a>
          <a class="w3-button  w3-black w3-section w3-padding" href="?p=barang&view">Tutup</a>
        </div>
      </form>
    <div class="w3-container w3-third w3-margin-top ">
    <div class="w3-section">
    <div class="w3-center "><img src="images/user.png" style="max-width: 200px;"></div>
    </div>
    </div>
      <?php
    }
  }
?>
