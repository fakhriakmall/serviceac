<?php 
 session_start();
 if ($_SESSION['nama_lengkap']) {
 	session_destroy();
 	header('location:../index.php');
 }
 ?>