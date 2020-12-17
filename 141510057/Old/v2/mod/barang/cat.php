<?php
if ($_GET['p']=='cat'){
    if (isset($_GET['view'])){
        ?>
        <div class="w3-center w3-margin-bottom w3-light-grey"><strong>Kategori barang</strong></div>
        <table id="example" class="w3-table w3-hoverable w3-striped" style="width:100%">
            <!--<table id="example" class="display" style="width:100%">-->
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
                <td>
                    <a href="?p=cat&edit&id=<?php echo $data['kd_kategori']; ?>" class="w3-button w3-small"> Ubah</a> <a href="mod/barang/process.php?act=delete_cat&id=<?php echo $data['kd_kategori']; ?>" onclick="return confirm ('Hapus Data Kategori <?php echo $data['kategori']; ?> ?')" class="w3-button w3-small">Hapus</a>
               </td>
            </tr>
            <?php } ?>  
        </tbody>
        </table>
<?php
    }
}
?>

<?php
if ($_GET['p']=='cat'){
  if (isset($_GET['add'])){
    ?>
    <div class="w3-center w3-light-grey"><strong>Tambah Kategori</strong></div>
      <form class="w3-container w3-half" method="post" action="mod/barang/process.php?act=add_cat">
        <div class="w3-section">
          <label><b>Kode Kategori</b></label>
          <input class="w3-input " type="text" name="kd_kategori" placeholder="Kode Kategori" required >
          <label><b>Kategori</b></label>
          <input class="w3-input " type="text" name="kategori" placeholder="Kategori" required >
          <label><b>Keterangan</b></label>
          <input class="w3-input " type="text" name="ket" placeholder="Keterangan" required >
          <button type="submit" class="w3-button  w3-black w3-section w3-padding" >Tambah</button>
          <a class="w3-button  w3-black w3-section w3-padding" href="?p=cat&view">Tutup</a>
        </div>
      </form>
    <?php
  }
}
?>

<?php
if ($_GET['p']=='cat'){
  if (isset($_GET['edit'])){
    if (isset($_GET['id'])){
      $query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE kd_kategori = '$_GET[id]'") or die('Kesalahan query : '.mysqli_error($koneksi));
        $data = mysqli_fetch_array ($query); }
      ?>
      <div class="w3-center w3-light-grey"><strong>Ubah data Kategori</strong></div>
      <form class="w3-container w3-half" method="post" action="mod/barang/process.php?act=update_cat">
        <div class="w3-section">
          <label><b>Kode Kategori</b></label>
          <input class="w3-input " type="text" name="kd_kategori" value="<?php echo $data['kd_kategori']; ?>" readonly >
          <label><b>Kategori</b></label>
          <input class="w3-input " type="text" name="kategori" value="<?php echo $data['kategori']; ?>" >
          <label><b>Keterangan</b></label>
          <input class="w3-input " type="text" name="ket" value="<?php echo $data['ket']; ?>" >
          <button type="submit" class="w3-button  w3-black w3-section w3-padding" >Simpan</button>
          <a class="w3-button  w3-black w3-section w3-padding" href="?p=cat&view">Tutup</a>
        </div>
      </form>
      <?php
    }
  }
?>
