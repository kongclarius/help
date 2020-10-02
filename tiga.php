<?php
  include "dua.php";
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $jk = $_REQUEST['jk'];
  $no5 = $_REQUEST['no5'];
  $no6 = $_REQUEST['no6'];
  $no7 = $_REQUEST['no7'];
  $no8 = $_REQUEST['no8'];
  $no9 = $_REQUEST['no9'];
  $no10 = $_REQUEST['no10'];
  $mysqli  = "INSERT INTO formcovid (name, email, subject, jk, no5, no6, no7, no8, no9, no10) VALUES ('$name', '$email', '$subject', '$jk', '$no5', '$no6', '$no7', '$no8', '$no9', '$no10')";
  $result  = mysqli_query($conn, $mysqli);
  if ($result) {
    echo "Input berhasil";
  } else {
    echo "Input gagal";
  }
  mysqli_close($conn);
?>