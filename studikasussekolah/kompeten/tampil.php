<?php
  $p = $_POST['p'];
  $k = $_POST['k'];
  if($p < 60 || $k < 60){
      echo "tidak kompeten";
  }elseif(($p + $k) / 2 >=90){
      echo "kategori A+ keterangan LULUS";
  }elseif(($p + $k) / 2>= 80){
      echo "kategori A keterangan LULUS";
  }elseif(($p + $k) / 2 >= 70){
      echo " kategori b keterangan LULUS";
  }elseif(($p + $k) / 2>= 60){
      echo "kategori c keteragan LULUS";
  }
  
?>