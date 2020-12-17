<?php
if ($_GET['p']=='profile'){
  if (isset($_GET['view'])){
    ?>
    <div class="w3-center w3-light-grey"><strong>Profil</strong></div>
<form class="w3-container w3-half" method="post" action="config/login_check.php">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input " type="text" value="<?php echo $data['username'];?>" readonly >
          <label><b>Nama Lengkap</b></label>
          <input class="w3-input " type="text" value="<?php echo $data['nama'];?>" readonly >
          <label><b>Bagian / Dept</b></label>
          <input class="w3-input " type="text" value="<?php echo $data['bagian'];?>" readonly >
          <a href="?p=profile&edit&id=<?php echo $data['id_user']; ?>" class="w3-button  w3-black w3-section w3-padding"> Ubah</a>
          <a class="w3-button  w3-black w3-section w3-padding" href="index.php">Tutup</a>
        </div>
      </form>
<div class="w3-container w3-third w3-margin-top ">
  <div class="w3-section">
  <div class="w3-center "><img src="images/user.png" style="max-width: 200px;"></div>
</div>
</div>
</div>
    <?php
  }
  }
?>


<?php
if ($_GET['p']=='profile'){
  if (isset($_GET['edit'])){
    if (isset($_GET['id'])){
      $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = '$_GET[id]'") or die('Kesalahan query : '.mysqli_error($koneksi));
        $data = mysqli_fetch_array ($query); }
      ?>
      <div class="w3-center w3-light-grey"><strong>Ubah profil</strong></div>
      <form class="w3-container w3-half" method="post" action="mod/user/process.php?act=update_profile">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input " type="hidden" name="id_user" placeholder="Username" required >
          <input class="w3-input " type="text" name="username" value="<?php echo $data['username']; ?>" readonly >
          <label><b>Password</b></label>
          <input class="w3-input " type="password" name="password" value="<?php echo $data['password']; ?>" >
          <label><b>Nama Lengkap</b></label>
          <input class="w3-input " type="text" name="nama" value="<?php echo $data['nama']; ?>" >
          <label><b>Bagian / Dept</b></label>
          <input class="w3-input " type="text" name="bagian" value="<?php echo $data['bagian']; ?>" >
          <button type="submit" class="w3-button  w3-black w3-section w3-padding" >Simpan</button>
          <a class="w3-button  w3-black w3-section w3-padding" href="?p=profile&view">Batal</a>
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
