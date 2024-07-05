<?php
// Arithmetic Operators
$a = 10;
$b = 3;

echo "<br/>Arithmetic Operators:\n";
echo "<br/>$a + $b = " . ($a + $b) . "\n"; // Addition
echo "<br/>$a - $b = " . ($a - $b) . "\n"; // Subtraction
echo "<br/>$a * $b = " . ($a * $b) . "\n"; // Multiplication
echo "<br/>$a / $b = " . ($a / $b) . "\n"; // Division
echo "<br/>$a ** $b = " . ($a ** $b) . "\n"; // Exponentiation
echo "<br/>$a % $b = " . ($a % $b) . "\n"; // Modulus

// Increment/Decrement Operators
$c = 5;

echo "<br/>\nIncrement/Decrement Operators:\n";
echo "<br/>Initial value of c: $c\n";
echo "<br/>++c = " . (++$c) . "\n"; // Pre-increment
echo "<br/>c++ = " . ($c++) . "\n"; // Post-increment
echo "<br/>c+=2 = " . ($c+=2) . "\n"; // increment custom value
echo "<br/>After post-increment, c = $c\n";
echo "<br/>--c = " . (--$c) . "\n"; // Pre-decrement
echo "<br/>c-- = " . ($c--) . "\n"; // Post-decrement
echo "<br/>c+=2 = " . ($c+=2) . "\n"; // custom-decrement
echo "<br/>After post-decrement, c = $c\n";

// Operator Precedence
$d = 2;
$e = 3;
$f = 4;

echo "<br/>\nOperator Precedence:\n";
echo "<br/>$d + $e * $f = " . ($d + $e * $f) . "\n"; // Multiplication before addition
echo "<br/>($d + $e) * $f = " . (($d + $e) * $f) . "\n"; // Parentheses change precedence
echo "<br/>$d + $e / $f = " . ($d + $e / $f) . "\n"; // Division before addition
echo "<br/>($d + $e) / $f = " . (($d + $e) / $f) . "\n"; // Parentheses change precedence
echo "<br/>$d ** $e + $f = " . ($d ** $e + $f) . "\n"; // Exponentiation before addition
echo "<br/>$d * ($e + $f) = " . ($d * ($e + $f)) . "\n"; // Parentheses change precedence
?>
