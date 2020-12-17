
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<body>

<!--<header class="w3-center w3-light-grey ">
  <h3>Login Example</h3>
</header>-->
<div class="w3-container w3-third w3-margin-top">
<!--<img src="http://smallserver.online/v1/images/logo.png" style="width:30%; height: 30%;">-->
</div>
<div class="w3-container w3-third w3-margin-top ">
  <div class="w3-center "><img src="images/logo.png" style="width:30%; height: 30%;">
    <?php
    if ($_GET['pesan']=='login_gagal'){
      ?>
      <p><h5>Login gagal! <br>Silahkan periksa kembali username dan password.</h5></p>
      <?php
    }
    elseif ($_GET['pesan']=='login'){
      ?>
      <p><h5>Anda belum login! Silahkan masukkan username dan password.</h5></p>
      <?php
    }
    elseif ($_GET['pesan']=='logout_berhasil'){
      ?>
      <p><h5>Anda berhasil logout.</h5></p>
      <?php
    }
    ?>
    
  </div>
<form class="w3-container" method="post" action="config/login_check.php">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="username" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" required>
          <button class="w3-button w3-block w3-black w3-section w3-padding" type="submit">Login</button>
        </div>
      </form>

</div>

</body>
</html> 