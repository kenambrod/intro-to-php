<?php
//OPERATORS
//used to perform operations
//1.ARITHMETIC OPERATORS
//2.ASSIGNMENT OPERATORS
//3.COMPARISON OPERATORS
//4.LOGIC OPERATORS

//1.Arithmetic operators- mathematical operators

//+ addition
//- subtraction
//* multiplication
/// division
////%modulus-returns a reminder of a division
//** exponential

$x = 5;
$y = 9;
$sum = $y + $x;
 echo "$x + $y = $sum <br>";

 $dif = $y -$x;

 echo "$dif<br>";

 $mult = $x * $y;

 echo"$mult<br>";

 $div = $y/$x;
 echo "$div<br>";
 $mod = $y%$x;
 echo"$mod <br>";

 $k = 20;
 $p = 5;

 $modulo = $k % $p;

 echo "$modulo <br>";

// ASSIGNMENT OPERATOR

//=
$name = "john";
$y = 9;
$x = 5;

$x = $x + $y;
//the above and below statements are equal

$x +=$y;

$x = 5;
$y = 9;
$y %= $x;

echo $y;

////COMPARISON OPERATORS this returns boolean datatype i,e true or false;
//1. == equals to
//2.===identical; have same data type and value
//3. != not equal
//4.<> not equal;
//5!== not identical;
//6.> greater than;
//7. <less than;
//8.>= greater than or equal to;
////9.<= less than or equal to;

$age = 18;
var_dump($age==21);
echo"<br>";
var_dump($age===18);
echo"<br>";

//INCREEMENT OPERATOR
$i = 0;
$i ++;

//LOGICAL OPERATOR
//ASSIGNMENT
//AND;
//NOT;
//OR;
echo "kennedy ";
$y =10;
$x = 20;
$x  and $y >20;

$y or $x ===20;

$y xor $x < 5;






