<?php
  include "dua.php";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $jk = $_POST['jk'];
  $no5 = $_POST['no5'];
  $no6 = $_POST['no6'];
  $no7 = $_POST['no7'];
  $no8 = $_POST['no8'];
  $no9 = $_POST['no9'];
  $no10 = $_POST['no10'];
  $mysqli  = "INSERT INTO formcovid (name, email, subject, jk, no5, no6, no7, no8, no9, no10) VALUES ('$name', '$email', '$subject', '$jk', '$no5', '$no6', '$no7', '$no8', '$no9', '$no10')";
  $result  = mysqli_query($conn, $mysqli);
  if ($result) {
    echo "Input berhasil";
  } else {
    echo "Input gagal";
  }
  mysqli_close($conn);
?>
