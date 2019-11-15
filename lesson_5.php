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