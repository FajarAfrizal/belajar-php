<?php
  $nilai = $_POST['nilai'];
  if($nilai >= 100){
      echo "kategori A+ keterangan LULUS";
  }elseif($nilai >= 80){
      echo "kategori A keterangan LULUS ";
  }elseif($nilai >=70){
      echo "kategori B keterangan LULUS";
  }elseif($nilai >=60){
      echo "kategori C keterangan LULUS";
  }else{
      echo "TIDAK LULUS";
  }
    

?>