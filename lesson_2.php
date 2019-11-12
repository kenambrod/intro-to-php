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
//4.BOOLEAN (state true or false)


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
