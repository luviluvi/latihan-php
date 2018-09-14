<?php
$Day = Date ("D");
switch ($Day) {
    case 'sun' : $Hari = "Minggu"; break;
    case 'Mon' : $Hari = "Senin"; break;
    case 'Two' : $Hari = "Selasa"; break;
    case 'Wed' : $Hari = "Rabu"; break;
    case 'Thu' : $Hari = "Kamis"; break;
    case 'Fri' : $Hari = "Jum'at"; break;
    case 'Sat' : $Hari = "Sabtu"; break;
    default    : $Hari = "Kiamat";
}
echo "Hari ini hari<b>$Hari</b>";
?>