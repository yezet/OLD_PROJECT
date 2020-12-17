<?php
if ($_GET['p']=='fuser'){
  if (isset($_GET['add'])){
    ?>
    <div class="w3-center w3-light-grey"><strong>Tambah data user</strong></div>
      <form class="w3-container w3-half" method="post" action="mod/user/process.php?act=add">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input " type="text" name="username" placeholder="Username" required >
          <label><b>Password</b></label>
          <input class="w3-input " type="password" name="password" placeholder="password" required >
          <label><b>Nama Lengkap</b></label>
          <input class="w3-input " type="text" name="nama" placeholder="Nama" required >
          <label><b>Hak akses</b></label>
          <!--<input class="w3-input " type="text" name="level" placeholder="Akses" required >-->
          <select class="w3-input" name="level" type="text" placeholder="--Hak Akses--" autocomplete="off" required>
          <option value="<?php echo $datalevel['level']; ?>"> - Level - </option>
          <?php
          $querylevel = mysqli_query($koneksi, "SELECT kd_level, level, ket FROM akses order by kd_level asc") or die('Kesalahan query : '.mysqli_error($koneksi));
          while ($datalevel = mysqli_fetch_array ($querylevel)) {
          echo "<option value=\"$datalevel[level]\"> $datalevel[level] - $datalevel[ket]</option>";
          }
          ?>
          </select><br>
          <label><b>Bagian / Dept</b></label>
          <input class="w3-input " type="text" name="bagian" placeholder="Bagian / Dept" required >
          <button type="submit" class="w3-button  w3-black w3-section w3-padding" >Tambah</button>
          <a class="w3-button  w3-black w3-section w3-padding" href="?p=tuser&view">Tutup</a>
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
if ($_GET['p']=='fuser'){
  if (isset($_GET['edit'])){
    if (isset($_GET['id'])){
      $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = '$_GET[id]'") or die('Kesalahan query : '.mysqli_error($koneksi));
        $data = mysqli_fetch_array ($query); }
      ?>
      <div class="w3-center w3-light-grey"><strong>Ubah data user</strong></div>
      <form class="w3-container w3-half" method="post" action="mod/user/process.php?act=update">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input " type="hidden" name="id_user" placeholder="Username" required >
          <input class="w3-input " type="text" name="username" value="<?php echo $data['username']; ?>" readonly >
          <label><b>Password</b></label>
          <input class="w3-input " type="password" name="password" value="<?php echo $data['password']; ?>" >
          <label><b>Nama Lengkap</b></label>
          <input class="w3-input " type="text" name="nama" value="<?php echo $data['nama']; ?>" >
          <label><b>Hak akses</b></label>
          <!--<input class="w3-input " type="text" name="level" placeholder="Akses" required >-->
          <select class="w3-input" name="level" type="text" placeholder="--Hak Akses--" autocomplete="off" required>
          <option value="<?php echo $datalevel['level']; ?>"> - Level - </option>
          <?php
          $querylevel = mysqli_query($koneksi, "SELECT * FROM akses order by kd_level asc") or die('Kesalahan query : '.mysqli_error($koneksi));
          while ($datalevel = mysqli_fetch_array ($querylevel)) {
          echo "<option value=\"$datalevel[level]\">$datalevel[level] : $datalevel[ket]</option>";
          }
          ?>
          </select><i class="w3-light-grey">Hak akses saat ini : <?php echo $data['level']; ?></i><br>

          <label><b>Bagian / Dept</b></label>
          <input class="w3-input " type="text" name="bagian" value="<?php echo $data['bagian']; ?>" >
          <button type="submit" class="w3-button  w3-black w3-section w3-padding" >Simpan</button>
          <a class="w3-button  w3-black w3-section w3-padding" href="?p=tuser&view">Tutup</a>
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
