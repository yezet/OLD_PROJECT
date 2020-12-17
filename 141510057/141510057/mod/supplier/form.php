<?php
if ($_GET['p']=='fsupplier'){
  if (isset($_GET['add'])){
    ?>
    <div class="w3-center w3-light-grey"><strong>Tambah data Supplier</strong></div>
      <form class="w3-container w3-half" method="post" action="mod/supplier/process.php?act=add">
        <div class="w3-section">
          <label><b>Kode Supplier</b></label>
          <input class="w3-input " type="text" name="kd_supplier" placeholder="Kode Supplier" required >
          <label><b>Nama Supplier</b></label>
          <input class="w3-input " type="text" name="nm_supplier" placeholder="Nama Supplier" required >
          <label><b>Alamat</b></label>
          <input class="w3-input " type="text" name="alamat" placeholder="Alamat" required >
          <label><b>Telp / Hp</b></label>
          <input class="w3-input " type="number" name="telp" placeholder="Telp / Hp" required >
          <label><b>Nama Kontak</b></label>
          <input class="w3-input " type="text" name="kontak" placeholder="Nama Kontak" required >
          <label><b>Keterangan</b></label>
          <input class="w3-input " type="text" name="ket" placeholder="Keterangan" required >
          <button type="submit" class="w3-button  w3-black w3-section w3-padding" >Tambah</button>
          <a class="w3-button  w3-black w3-section w3-padding" href="?p=tsupplier&view">Tutup</a>
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

<?php
if ($_GET['p']=='fsupplier'){
  if (isset($_GET['edit'])){
    if (isset($_GET['id'])){
      $query = mysqli_query($koneksi, "SELECT * FROM supplier WHERE id_supplier = '$_GET[id]'") or die('Kesalahan query : '.mysqli_error($koneksi));
        $data = mysqli_fetch_array ($query); }
      ?>
      <div class="w3-center w3-light-grey"><strong>Ubah data Supplier</strong></div>
      <form class="w3-container w3-half" method="post" action="mod/supplier/process.php?act=update">
        <div class="w3-section">
          <label><b>Kode Supplier</b></label>
          <input class="w3-input " type="hidden" name="id" placeholder="id" required >
          <input class="w3-input " type="text" name="kd_supplier" value="<?php echo $data['kd_supplier']; ?>" readonly >
          <label><b>Nama Supplier</b></label>
          <input class="w3-input " type="text" name="nm_supplier" value="<?php echo $data['nm_supplier']; ?>" >
          <label><b>Alamat</b></label>
          <input class="w3-input " type="text" name="alamat" value="<?php echo $data['alamat']; ?>" >
          <label><b>Telp / Hp</b></label>
          <input class="w3-input " type="text" name="telp" value="<?php echo $data['telp']; ?>" >
          <label><b>Nama Kontak</b></label>
          <input class="w3-input " type="text" name="kontak" value="<?php echo $data['kontak']; ?>" >
          <label><b>Keterangan</b></label>
          <input class="w3-input " type="text" name="ket" value="<?php echo $data['ket']; ?>" >
          <button type="submit" class="w3-button  w3-black w3-section w3-padding" >Simpan</button>
          <a class="w3-button  w3-black w3-section w3-padding" href="mod/supplier/process.php?act=delete&id=<?php echo $data['id_supplier']; ?>" onclick="return confirm ('Hapus Data Supplier <?php echo $data['nm_supplier']; ?> ?')">Hapus</a>
          <a class="w3-button  w3-black w3-section w3-padding" href="?p=tsupplier&view">Tutup</a>
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

