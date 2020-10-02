<?php
  $host ="localhost"; //host server
  $user ="root"; //user login phpMyAdmin
  $pass ="root"; //pass login phpMyAdmin
  $db ="covid"; //nama database
  $conn = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
?>