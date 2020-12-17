
<?php  
session_start();
require_once "config/connect.php";
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
  header('location:login.php');
}
else {
?>
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="lib/w3-theme-teal.css">
<link rel="stylesheet" href="Font-Awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="DataTables/1.10.20/css/jquery.dataTables.min.css">
<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<style>
body {font-family: "Roboto", sans-serif}
.w3-bar-block .w3-bar-item {
  padding: 16px;
  font-weight: bold;
}
</style>-->
<body>
<!--sidebar-->
<?php include 'part/sidebar.php'; ?>


<div class="w3-overlay  w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px;">
<?php include 'part/top.php'; ?>
<?php include 'part/header.php'; ?>
<div class="w3-container" style="padding:10px;">
<?php include 'data.php'; ?>
</div>

     <?php include 'part/footer.php'; ?>
</div>
<script>
// Open and close the sidebar on medium and small screens
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Change style of top container on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("myTop").classList.add("w3-card-4", "w3-animate-opacity");
    document.getElementById("myIntro").classList.add("w3-show-inline-block");
  } else {
    document.getElementById("myIntro").classList.remove("w3-show-inline-block");
    document.getElementById("myTop").classList.remove("w3-card-4", "w3-animate-opacity");
  }
}

// Accordions
function myAccordion(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme", "");
  }
}
</script>
<script type="text/javascript" src="DataTables/jquery-3.3.1.js"></script>
<script type="text/javascript" src="DataTables/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
          $(document).ready(function() {
    $('#example').DataTable( {
        "scrollX": true,
        scrollCollapse: true,
        "pagingType": "full_numbers"
    } );
} );
</script>
</body>
</html> 
<?php
}
?>