<?php

/**
 *  https://www.php.net/manual/en/migration70.new-features.php
 * 
 *   Null coalescing operator (??)
 *   It returns its first operand if it exists and is not null; 
 *   otherwise it returns its second operand.
 * 
 */


$a = "";    
$b = "abcd";

$name = $a ?? $b;   // Returns ""  ( $a != NULL ) 
echo "R: " . $name . PHP_EOL;

$a = ( $a == "")? NULL : $a;
$b = ( $b == "")? NULL : $b;

$name = $a ?? $b;   // Returns "abcd"  ( $a == NULL ) 
echo "R: " . $name . PHP_EOL;

