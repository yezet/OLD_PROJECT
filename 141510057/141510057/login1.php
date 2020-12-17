
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<body>

<header class="w3-container w3-black ">
  <h3>Login Example</h3>
</header>

<div class="w3-container w3-quarter w3-margin-top">

<img src="http://smallserver.online/v1/images/logo.png" style="width:100%; height: 50%;"> 
</div>
<div class="w3-container w3-third w3-margin-top">

<form class="w3-container" action="index.php">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required>
          <button class="w3-button w3-block w3-black w3-section w3-padding" type="submit">Login</button>
          <!--<input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me-->
        </div>
      </form>

</div>

</body>
</html> 