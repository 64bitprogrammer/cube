<?php
  session_start();
  require_once('connect.php');

  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $cpass = $_POST['cpass'];

  $insertQuery = "insert into signup ( email, passwd ) values ('$email','$pass') ";

  if (mysqli_query($conn, $insertQuery)) {
      echo "<h1> Registration Successful ! </h1> ";
  } else {
      echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

 ?>