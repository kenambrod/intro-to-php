<?php
//PHP if statement
//if statements is used to make conditions
//we use them to perform different actions based on different conditions
//php has the folllowing if statements
//!;if...include
//2.if---else
//3.if---elseif--else
//4.switch
$x = 3;
$y = 5;
//if execute block of a code is condition is true
//syntax :
//if(condition){
//    code to execute if a condition is true
//}
if( $x == $y){
    echo "variable $x is equal tp 3 <br>";
}else{
    echo "$x is not equal to $y <br>";
}
if( $x == $y){
    echo "variable $x is equal tp 3 <br>";
}elseif($x <10)
{
    echo "$x is less than 10 <br>";
}else{
    echo "i will run if the above condition is not true <br>";
}
$age= 22;
if( $age <= 18){
    echo "you cannot drink <br>";
}elseif( $age==18 and $age < 35)
{
    echo "go have fun<br>";
}else{
    echo "you are to old to have fun in a club <br>";
}
//switch case
//used to perform different action based on different conditions
$favcolor ="yellow";
switch ($favcolor) {
    case"red";
        echo "your favourite color is red <br>";
        break;
    case"green";
        echo "your favourite color is green <br>";
        break;
    case"black";
        echo "your favourite color is black <br>";
        break;
    case"blue";
        echo "your favourite color is blue <br>";
        break;
    default:
        echo "your favourite color is not listed <br>";
}
//Assignment: using a switch statement. Write a program that chhecks developers programming language
//if a programmer chooses a programming language like "php" echo
//Php is used for developing websites.
$proglang ="php";
switch ($proglang) {
    case"php";
        echo "PHP is a programming language used to develop websites <br>";
        break;
    case"Java";
        echo "java is a programming language used to develop games,movies etc <br>";
        break;
    case"c";
        echo "it is used to develop  desktop applications also used to develop browsers and their extentions<br>";
        break;
    case"per";
        echo "perl is used to extract information from a text file and printing out a report or for converting a text file into another form <br>";
        break;
    default:
        echo "language not found<br>";
}

