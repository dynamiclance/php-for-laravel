
<?php

// Q1: sort an array descending order using foreach loop

$numbers = array(1, 4, 5, 7, 9, 10);
rsort($numbers);

foreach ($numbers as $number)
    echo " " . $number . "<br>";

// Q2: Replace a part of string

$string = "I love Php";
echo str_ireplace("php", "javascript", $string) . "<br>";


// Q3: Merge or combain two array

$fruits1 =  array("apple", "mango");
$fruits2 =  array("jackfruit", "watermelon");

echo '<pre>';
var_dump([...$fruits1, ...$fruits2]); // Since PHP 7.4
echo '</pre>';


//Q4: convert array into string
$numbers = array("I", "am", "in", "love");

echo "<pre>";
var_dump(implode(",", $numbers));
echo "</pre>";

// convert string into array

$string = "i am in love";
echo "<pre>";
var_dump(explode(",", $string));
echo "</pre>";


//Q5: 

define("PI", 3, 14);

if (defined('PI')) {
    echo "constant is defined";
} else {
    echo "constant isn't defined";
}


?>