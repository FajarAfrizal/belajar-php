<?php 

//perulangan for untuk mencetak angka 1-100
for($a = 1; $a <= 50; $a++){
    echo $a . "<br>";
}
echo "<br>";echo "<br>";


//perulangan for untuk mencetak 0-10 (hitungan maju)
for ($i = 0; $i <= 10; $i++){
    echo $i . "<br>";
}
echo "<br>";echo "<br>";


//perulangan  for untuk mencetak 10-0 (hitungan mundur)
for ($b = 10; $b >= 0; $b--){
    echo $b . "<br>";
}
echo "<br>";echo "<br>";


//menggunakan array
$list = ['PPLG', 'Wajib', 'Ngulik'];

for ($a = 0; $a < count($list); $a++) {
    echo "{$list[$a]} <br>";
}
echo "<br>";echo "<br>";


//break dan continue menggunakan for
for ($a = 1; $a <= 50; $a++) 
    if ($a % 10 === 0)  {
      continue; //skip kondisi diatas
    }
    
    echo "Perulangan ke-{$a} <br>";

?>