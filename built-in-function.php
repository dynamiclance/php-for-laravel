
<?php


// String Function Practice

$string = "My name is Javascript";

// echo "1- " . strlen($string) . "<br>" . PHP_EOL;
// echo "2-" . trim($string) . "<br>" . PHP_EOL;
// echo "3- " . str_word_count($string) . "<br>" . PHP_EOL;
// echo "4- " . strrev($string) . "<br>" . PHP_EOL;
// echo "5-" . strtoupper($string) . "<br>" . PHP_EOL;
// echo "6-" . strtolower($string) . "<br>" . PHP_EOL;
// echo "7-" . ucfirst($string) . "<br>" . PHP_EOL;
// echo "8-" . lcfirst($string) . "<br>" . PHP_EOL;
// echo "9-" . ucwords($string) . "<br>" . PHP_EOL;
// echo "10-" . stripos($string, "javascript") . "<br>" . PHP_EOL;
// echo "11-" . str_replace("javascript", "PHP", $string) . "<br>" . PHP_EOL;
// echo "12-" . str_ireplace("javascript", "PHP", $string) . "<br>" . PHP_EOL;
// echo "13-" . substr($string, 7, 11) . "<br>" . PHP_EOL;

// echo "14-" . str_ireplace("world", "Php", "hello world");

$a1 = array("red", "green");
// $a2 = array("blue", "yellow");

// print_r(array_merge($a1, $a2))

// $arr = array(
//     "Welcome", "to", "GeeksforGeeks",
//     "A", "Computer", "Science", "Portal"
// );

// echo implode(",", $a1) //convert array into string

// $x = 5985;
// var_dump(is_long($x));

// echo rand(90, 100)

// 

// define("cars", [
//     'one',
//     "two",
//     "three"
// ]);

// echo cars[0]


define("GREETING", "Welcome to W3Schools.com!");

function myTest()
{
    echo GREETING;
}

myTest();

?>