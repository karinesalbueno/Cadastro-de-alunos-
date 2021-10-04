<?php

$conexao= mysqli_connect("localhost", "root", "", "lpw");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  } else{
     // echo "ok";
  }

?>
