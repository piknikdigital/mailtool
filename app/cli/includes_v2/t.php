<?php

$b = "";
$a = "abc";

$a = ( $a == "")? NULL : $a;
$b = ( $b == "")? NULL : $b;
$name = $a ?? $b;

echo $name . PHP_EOL;