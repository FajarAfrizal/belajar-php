<?php
  $matematika = $_POST['matematika'];
  $indonesia = $_POST['indonesia'];
  $inggris = $_POST['inggris'];

  if($matematika >= 75 && $indonesia >= 75 || $matematika >= 75 && $inggris >= 75 || $indonesia >= 75 && $inggris>= 75 ){
      echo "nilai anda sudah kompeten ";
  }else{
      echo"nilai anda belum konpeten ";
  }

?>