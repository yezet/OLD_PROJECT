

<?php
session_start();
// hapus session
session_destroy();

// alihkan ke halaman login (index.php) dan berikan alert = 2
header('Location: login.php?pesan=logout_berhasil');
?>