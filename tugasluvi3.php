<?php
function luas_segitiga($alas, $tinggi){
    return ($alas *$tinggi)/2;
}
//pemanggilan fungsi
$a = 10;
$p = 15;
echo "Alas : $a <br> tinggi : $p <br>  Luas segitiga : ";
echo luas_segitiga($a , $p);

?>