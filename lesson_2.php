<?php
//echo //basic ways in php to output data returns a value
//print//basic way of outputing data bt doesnot return a value

//every php statement ends with a semicolon

//output html code
//pathfile starts from localhost/folder/file
echo"<p> hello welcome</p>";
echo "hello world am a php string";
// a string is a text/sequence of characters inside "" or'' quotes
//interger
echo 200;

$x = 12;
$y = 20;
echo $x;

echo $y;
//joining a number and a string

echo"iam $y years old";
echo"<br>";
echo "iam " . $y . "years old";
echo"<br>";
//dot operator is used to join interger and string or variable and variable


//php DATATYPES
//1.STRING
//2.INTERGER
//3.FLOAT(decimal_point)
//4.BOOLEAN (state true or fal



//STRINGS
//A function is a block of code that does something specific
//function in php are written as : functionname()
//strlen()  counts number of characters in a string

echo strlen("hello world, hello");
echo"<br>";

$name = "john";
echo strlen($name);
echo"<br>";

//assignment: research on the following string function
//str_word_count
//strrev()
//strpos()
//str_replace()
//research and implement on the following and implement the string functions
 echo strrev("hello");
 echo "<br>";
 echo str_replace("world","kennedy","hello world");
 echo "<br>";
 echo strpos("kennedy the jude","jude");
 echo "<br>";
$cat=1.9e411;
var_dump($cat);

$arnold = 500;
echo "<br>";
//intergers and floating numbers
//interger -rules
//    whole number without decimal point
//atleast one digit can be -ve or +ve
//function used to check intergrs are
//is int()
//is_long()

//var_dump() returns the type of data i.e interger or string etc
$x = "test interger";
var_dump($x);
echo"<br>";
is_int($x);
echo"<br>";
var_dump(is_int($x));
echo"<br>";

//assignment
//is_int()
//is_long()

//NUMBER DATA TYPES

//FLOAT
//is a number with decimal point
//is_float() returns true if number has decimal point in it

$y = 3.142;

var_dump(is_float($y));

//OPERATORS

