<?php
$str = "Is your name O'Reilly ?";
$str2 = addslashes ($str);
$str3 = stripcslashes ($str2);

echo "<b>String asli</b> : $str";
echo "<br><b>addslashes()</b> : $str2";
echo "<br><b>stripslashes()</b> : $str3";

?>