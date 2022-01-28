<?php
  $ketinggian = $_POST['ketinggian'];
  if($ketinggian >= 10){
      echo "banjir";
  }elseif($ketinggian >=8){
    echo "rawan banjir";
  }elseif($ketinggian >= 5){
    echo "bahaya";
  }elseif($ketinggian >= 2){
    echo "siaga";  
  }else{
    echo "aman";
  }

?>