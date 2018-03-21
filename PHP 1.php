<?php
$x = 5;
$y = 4;
echo $x + $y . "<br>";



$a = '12345';
echo "qwe{$a}rty <br>"; // qwe12345rty, using braces
echo "qwe" . $a . "rty <br>"; // qwe12345rty, concatenation used
echo $a + $x + $y . "<br>";



if (date("h") % 2 == 0) {
  echo "The time is " . date("h") . "h<br>";
  echo "It's even";
}
else {
	echo "The time is " . date("h") . "h<br>";
	echo "It's odd";
}



?>