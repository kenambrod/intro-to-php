<?php
//LOOPING IN PHP
//looping enables us to repeat code a number of times as long as a long as condition is true
//TYPES:
//1. while
//2. do while
//3. for
//4. for each

//while: only loops is a certain condition is true;
//syntax
//while(condition is true){
//    code to be excuted only the condition is true
//}

$x = 1; //initializing
while($x < 5){ // checking conditon true first
    echo " $x hello world  <br>";
    $x ++ ; // increment
}
echoThreeTimes();
//do while loop checks condition later
//syntax
//do{code to execute
//increment variable here
//}while(condition is true)
echo "do while loop<br>";
$y = 0;
do {
    echo " $y do while <br>";
    $y++;
} while ($y < 5);

//for loop
//loops a specified number of times


//syntax
//for (init counter: text counter;increment counter){
//    code to execute
//}
// init counter -initializes the start of the loop;
//text counter - evaluates for each loop,check if condition is true
//increment counter - increases the value of each loop;
for($i = 0; $i <5;$i ++){
    echo"value of for loop is $i <br>";
}
echo"assignment <br>";
for($c = 13; $c < 34 ;$c++){
    echo "$c <br>";
}

//FUNCTION- BLOCK of code that performs specific task,WHEN CALLED
//syntax
//function nameoffunction(){
//    
//}

function echoThreeTimes(){
    echo "i love coding in php <br>";
    echo "i am a php geek <br>";
    echo " coding is awesome<br>";
}

//calling a function

echoThreeTimes();

function greetings(){
    echo "hello john <br>";
}

greetings();

//functions that take arguments


//function greetings1($name){
//    echo "hello $name <br>";
//}
//
//greetings1("john");
//greetings1("joice");
//greetings1("lucas");
//greetings1("arnold");


function greetings2($firstName,$lastName,$idNo){
    $fname =$firstName;
    $lname = $lastName;
    $id =$idNo;

     $details = "your details are First name :$fname 
                 last name :$lname 
                 ID Number : $id";
     echo $details;
}

greetings2("john; paul","paul","31309989");

//RETURN
function greetings3($firstName,$lastName,$idNo){

    $details = "your details are First name :$firstName
                 last name :$lastName
                 ID Number : $idNo";

    return $details;
}

$userData = greetings3("john","paul","20203030");

echo"$userData <br>";

//functions with default value
function greetings4( $name = "Developer"){
    echo "Hello $name <br>";
}

greetings4("Opiyo");
greetings4();

//assignment:
//create a function that takes a number as an argurment the number(n) represents the range of a loop. loop from
//0 to n ,if a number is divisible by 3 echo "flizz";
//if a number is divisible by 5 echo "buzz";
//if a number is divisible by both echo "fizz buzz";
//else echo the number that is not divisible;

function divisorBy3And5( $number)
{

    if ($number % 3 == 0 and $number % 5 == 0 ) {
        echo "flizzbuzz <br>";
    } elseif ($number % 5 == 0) {
        echo "buzz <br>";
    } elseif ($number % 3 == 0) {
        echo "fizz <br>";
    } else {
        echo "$number";
    }
}

divisorBy3And5(15);

echo "using switch statement <br>";


function divisorBy3or5($numb){
    switch ($numb){
        case ($numb % 3 == 0 and $numb % 5 == 0):
            echo "fizzbuzz <br>";
            break;
        case ($numb % 5 ==0):
            echo "buzz <br>";
            break;
        case  ($numb % 3 == 0):
            echo "fizz <br>";
            break;
        default:
            echo "$numb";
    }
}
 divisorBy3or5(20);
divisorBy3And5(20);
divisorBy3or5(30);
divisorBy3And5(30);





