<?php 
session_start();

session_destroy();

echo '<script>window.close("logout.php");</script>';
exit();
?>