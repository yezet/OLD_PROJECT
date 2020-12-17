<?php
$query = mysqli_query($koneksi, "SELECT * FROM user where username='$_SESSION[username]' ") or die ('Error '.mysqli_error($koneksi));
$data = mysqli_fetch_array($query);
?>
<nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card" style="z-index:3;width:250px;" id="mySidebar">
  <a class="w3-bar-item w3-button w3-border-bottom w3-large" href="index.php  "><img src="http://smallserver.online/v1/images/logo.png" style="width:20%; height: 20%;"> Small Server</a>
  <a class="w3-bar-item w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>
  <div>
    <a class="w3-bar-item w3-button w3-light-grey" w3-light onclick="myAccordion('account')" href="javascript:void(0)"><i class="fa fa-user"></i> <b>user :</b> <i><?php echo $data['nama'];?></i> <i class="fa fa-caret-down"></i></a>
    <div id="account" class="w3-hide">
      <a class="w3-bar-item w3-button" href="?p=profile&view">Profil</a>
      <a class="w3-bar-item w3-button" href="logout.php">Keluar</a>
    </div>
  </div>
  <hr>
  <a class="w3-bar-item w3-button " href="index.php">Home</a>
  <?php
  if ($_SESSION['level']=='1'){
    ?>
    <div>
    <a class="w3-bar-item w3-button " onclick="myAccordion('barang')" href="javascript:void(0)">Barang <i class="fa fa-caret-down"></i></a>
    <div id="barang" class="w3-hide">
      <a class="w3-bar-item w3-button " href="?p=barang&view">Data Barang</a>
      <a class="w3-bar-item w3-button" href="?p=fbarang&add">Tambah</a>
      <a class="w3-bar-item w3-button" href="?p=tbarang&view">Kelola</a>
      <hr>
    </div>
    </div>
    <div>
    <a class="w3-bar-item w3-button" onclick="myAccordion('cat')" href="javascript:void(0)">Kategori <i class="fa fa-caret-down"></i></a>
    <div id="cat" class="w3-hide">
      <a class="w3-bar-item w3-button" href="?p=cat&view">Kategori</a>
      <a class="w3-bar-item w3-button" href="?p=cat&add">Tambah</a>
      <hr>
    </div>
    </div>
    <div>
    <a class="w3-bar-item w3-button" onclick="myAccordion('user')" href="javascript:void(0)">User <i class="fa fa-caret-down"></i></a>
    <div id="user" class="w3-hide">
      <a class="w3-bar-item w3-button" href="?p=tuser&view">Data user</a>
      <a class="w3-bar-item w3-button" href="?p=fuser&add">Tambah</a>
      <hr>
    </div>
    <a class="w3-bar-item w3-button" onclick="myAccordion('supplier')" href="javascript:void(0)">Supplier <i class="fa fa-caret-down"></i></a>
    <div id="supplier" class="w3-hide">
      <a class="w3-bar-item w3-button" href="?p=tsupplier&view">Data Supplier</a>
      <a class="w3-bar-item w3-button" href="?p=fsupplier&add">Tambah</a>
      <hr>
    </div>
    </div>
    <?php
  }
  ?>

  <?php
  if ($_SESSION['level']!=='1'){
    ?>
    <div>
    <a class="w3-bar-item w3-button" onclick="myAccordion('barang')" href="javascript:void(0)">Barang <i class="fa fa-caret-down"></i></a>
    <div id="barang" class="w3-hide">
      <a class="w3-bar-item w3-button" href="?p=barang&view">Data Barang</a>
    </div>
    </div>
  <?php
  }
  ?>
  </nav>