<?php
$uang = 50000;
$makanan = 25000;
$minuman = 10000;

$sisauang = $uang-$makanan-$minuman;
echo "Sisa uang hari setelah di jajankan adalah  Rp$sisauang<br>";

if($sisauang >= 30000) {
    echo "Hari termasuk orang yang hemat";
}else{
    echo "Hari termasuk orang yang boros";
}
?>