<?php
// dua buah bilangan bulat
// menggunakan max
$bil1 = 5;
$bil2 = 9;
$highest_number = max($bil1, $bil2);
echo"<hr>";
echo"bilangan yang terbesar adalah " . max($bil1, $bil2);
echo "<br>";
// mengguakan if elseif else
if ($bil1 < $bil2){
    echo "bilangan terbesar adalah ", $bil2;
} else{
    echo "bilangan yang terbesar adalah ", $bil1;
}

// tiga buah bilangan bulat
// menggunakan max
$bil3 = 7;
$bil4 = 5;
$bil5 = 3;
$highest_number = max($bil3, $bil4, $bil5);
echo "<hr>";
echo "bilangan yang terbesar adalah " . max($bil3, $bil4, $bil5);
echo "<br>";
// mengguakan if elseif else
if ($bil3 > $bil4 && $bil3 > $bil5){
    echo "nilai yang terbesar adalah $bil3";
} elseif ($bil5 > $bil3 && $bil5 > $bil4){
    echo "nilai yang terbesar adalah $bil5 ";
} else {
    echo "nilai yang tertinggi adalah $bil4";
}
// empat buah bilangan bulat
//menggunakan max
$bil6 = 34;
$bil7 = 56;
$bil8 = 90;
$bil9 = 35;
$highest_number = max($bil6, $bil7, $bil8, $bil9);
echo "<hr>"; 
echo "bilangan yang terbesar adalah " . max($bil6, $bil7, $bil8, $bil9);
echo "<br>";
// mengguakan if elseif else
if ($bil8 > $bil6 && $bil8 > $bil7 && $bil8 > $bil9){
    echo "nilai yang tertinggi adalah $bil8";
}elseif ($bil6 > $bil7 && $bil6 > $bil8 && $bil6 > $bil9){
    echo "nilai yang tertinggi adalah $bil6";
}elseif($bil9 > $bil6 && $bil9 > $bil7 && $bil9 > $bil8){
    echo "nilai yang tertinggi adalah $bil9";
}else {
    echo "nilai yang tertinggi adalah $bil8";
}
?>


