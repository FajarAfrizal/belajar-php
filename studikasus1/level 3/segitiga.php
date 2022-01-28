<?php
$sisi1 = 4;
$sisi2 = 2;
$sisi3 = 6;
if ($sisi1 === $sisi2 && $sisi1 === $sisi3){
    echo "SEGITIGA SAMA SISI";
}elseif($sisi1 === $sisi2 || $sisi1 === $sisi3 || $sisi2 === $sisi3){
    echo "SEGITIGA SAMA KAKI";
}else{
    echo "SEGITIGA SEMBARANG";
}
?>