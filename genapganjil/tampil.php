<?php
$nilai = $_POST['nilai'];
if ($nilai % 2 === 0){
    echo "$nilai merupakan bilangan genap";
}else{
    echo "$nilai merupakan bilangan ganjil";
}

?>