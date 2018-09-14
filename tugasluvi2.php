<?php
function Luas_persegipanjang($panjang, $lebar ){
    return $panjang*$lebar;
}
//pemanggilan fungsi

    $p = 20;
    $l = 25;
    
    echo "<b>panjang : $p <br> lebar : $l <br> Luas persegi panjang : ";
    echo Luas_persegipanjang ($p, $l);

    ?>