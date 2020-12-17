<?php
if ($_GET['p']=='fbarang'){
  if (isset($_GET['add'])){
    ?>
    <div class="w3-center w3-light-grey"><strong>Tambah data barang</strong></div>
      <form class="w3-container w3-half" method="post" action="mod/barang/process.php?act=add">
        <div class="w3-section">
          <label><b>Kode Barang</b></label>
          <input class="w3-input " type="text" name="kd_barang" placeholder="Kode Barang" required >
          <label><b>Nama Barang</b></label>
          <input class="w3-input " type="text" name="nm_barang" placeholder="Nama Barang" required >
          <label><b>Satuan</b></label>
          <input class="w3-input " type="text" name="satuan" placeholder="Satuan" required >
          <label><b>Kategori</b></label>
          <!--<input class="w3-input " type="text" name="level" placeholder="Akses" required >-->
          <select class="w3-input" name="kategori" type="text" placeholder="--Kategori--" autocomplete="off" required>
          <option value="<?php echo $datak['kategori']; ?>"> - Kategori - </option>
          <?php
          $queryk = mysqli_query($koneksi, "SELECT kd_kategori, kategori FROM kategori order by kd_kategori asc") or die('Kesalahan query : '.mysqli_error($koneksi));
            while ($datak = mysqli_fetch_assoc ($queryk)) {
            echo "<option value=\"$datak[kategori]\"> $datak[kd_kategori] - $datak[kategori]</option>";
          }
          ?>
          </select><br>
          <label><b>Keterangan</b></label>
          <input class="w3-input " type="text" name="ket" placeholder="Keterangan" required >
          <button type="submit" class="w3-button  w3-black w3-section w3-padding" >Tambah</button>
          <a class="w3-button  w3-black w3-section w3-padding" href="?p=tbarang&view">Tutup</a>
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
if ($_GET['p']=='fbarang'){
  if (isset($_GET['edit'])){
    if (isset($_GET['id'])){
      $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang = '$_GET[id]'") or die('Kesalahan query : '.mysqli_error($koneksi));
        $data = mysqli_fetch_array ($query); }
      ?>
      <div class="w3-center w3-light-grey"><strong>Ubah data barang</strong></div>
      <form class="w3-container w3-half" method="post" action="mod/barang/process.php?act=update">
        <div class="w3-section">
          <label><b>Kode Barang</b></label>
          <input class="w3-input " type="hidden" name="id" placeholder="id" required >
          <input class="w3-input " type="text" name="kd_barang" value="<?php echo $data['kd_barang']; ?>" readonly >
          <label><b>Nama Barang</b></label>
          <input class="w3-input " type="text" name="nm_barang" value="<?php echo $data['nm_barang']; ?>" >
          <label><b>Satuan</b></label>
          <input class="w3-input " type="text" name="satuan" value="<?php echo $data['satuan']; ?>" >
          <label><b>Kategori</b></label>
          <!--<input class="w3-input " type="text" name="level" placeholder="Akses" required >-->
          <select class="w3-input" name="kategori" type="text" placeholder="--Kategori--" autocomplete="off" required>
          <option value="<?php echo $data['kategori']; ?>"> - Kategori - </option>
          <?php
          $queryk = mysqli_query($koneksi, "SELECT kd_kategori, kategori FROM kategori order by kd_kategori asc") or die('Kesalahan query : '.mysqli_error($koneksi));
          while ($datak = mysqli_fetch_array ($queryk)) {
          echo "<option value=\"$datak[kategori]\"> $datak[kd_kategori] - $datak[kategori]</option>";
          }
          ?>
          </select><i class="w3-light-grey">Kategori saat ini : <?php echo $data['kategori']; ?></i><br><br>

          <label><b>Keterangan</b></label>
          <input class="w3-input " type="text" name="ket" value="<?php echo $data['ket']; ?>" >
          <button type="submit" class="w3-button  w3-black w3-section w3-padding" >Simpan</button>
          <a class="w3-button  w3-black w3-section w3-padding" href="?p=tbarang&view">Tutup</a>
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

