<?php
$a = 0;
$b = 1;
echo $a .;
echo $b .;

for ($i = 3; $i <= 1048; $i++) {
    $c = $a + $b;
    echo $c . "<br>";
    $a = $b;
    $b = $c;
}
?>
