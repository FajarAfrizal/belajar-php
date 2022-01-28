<?php 
    $nilai = 111;
    echo "Variable tersebut bernilai : {$nilai} <br>";

    if ($nilai >= 50){
      echo "GOOD JOB !";
    }elseif(45<= $nilai && $nilai <= 50){
      echo "Jangan Menyerah !";
    }else{
      echo "Coba Lagi !";
    }

    $bil=111; // Inisialisasi variabel bil dengan nilai 10

if ($bil % 2 == 0){ //Kondisi
    echo "$bil Merupakan Bilangan Genap"; //Kondisi true
}else {
    echo "$bil Merupakan Bilangan Ganjil"; //Kondisi false
}

   ?>



<?php
/* Studi kasus 2 */
    $nilai = 100;
    echo "Variable ini bernilai : {$nilai} = ";

    if ($nilai >= 90){
        echo "A";
    }elseif ($nilai >= 80){
        echo "B";
    }elseif ($nilai >= 70){
        echo "C"($nilai >=70);
    }else{
        echo "D";
    }
/*Ubah nilai jika ingin melihat perubahannya */
?>