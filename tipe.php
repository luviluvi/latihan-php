<?php
$nim = "0052348960";
$nama = 'Luvi Nur Allawiyyah';
$umur = 16;
$nilai = 82.25;
$status = true;
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama<br>";
print "umur : " . $umur;
print "<br>";
printf("Nilai : %.3f<br>", $nilai);
if ($status) {
    echo "Status : Aktif";
} else {
    echo "Status : Tidak Aktif";
}