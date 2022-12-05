<?php


// Create an array

$fruits = ["apple", "banana", "orange"];

print_r($fruits);


echo '<pre>';
var_dump($fruits);
echo '</pre>';


// Get array Element by Index
echo $fruits[1];


// set element by index

$fruit[3] = "Jumbura";

echo "<pre>";
var_dump($fruits);
echo "</prev>";


// Check if array has element at index 2

echo '<pre>';
var_dump(isset($fruits[2]));
echo '</pre>';



// Append Element to the array

$fruits[] = "dhfdfgedr";
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Print the length of the array

// echo count($fruits) . '<br>';

// Add element at the end of the array

array_push($fruits, "foo");

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// PUSH METHOD RETURN THE LENGTH OF AN ARRAY
echo array_push($fruits, "foo");

// ADD ELEMENT AT THE BEGINNING OF AN ARRAY

array_unshift($fruits, "fgfsfdsrd");

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// unshift() Method return the length of an array
echo array_unshift($fruits);

// remove element from the end of the array
array_pop($fruits);

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// shift element remove element from the beggining of an array

array_shift($fruits);

echo '<pre>';
var_dump($fruits);
echo '</pre>';


//Split the string into an array

// $string = "Banana,apple,orange";

// echo '<pre>';
// var_dump(explode(",", $string));
// echo '</pre>';


// convert the array into a string

echo '<pre>';
var_dump(implode("|", $fruits));
echo '</pre>';


// Check if element exist in the array

echo '<pre>';
var_dump(in_array("apple", $fruits));
echo '</pre>';


// Search element index in the array

echo '<pre>';
var_dump(array_search("jumbura", $fruits));
echo '</pre>';

// Merge multiple array element to an array

$vegetables = ['Potato', 'Cucumber'];
echo '<pre>';
//var_dump(array_merge($fruits, $vegetables));
var_dump([...$fruits, ...$vegetables]); // Since PHP 7.4
echo '</pre>';


// sort($fruits); //sort, rsort

sort(($fruits));
rsort($fruits);

echo '<pre>';
var_dump($fruits);
echo '</pre>';


// Create an associative array

$person = [
    "name" => "dynamic ance",
    "nickname" => "SK",
    "age" => 30,
    "hobbies" => [
        'tennis', 'video games'
    ],
    'address' => "dhaka",
];

// Get associative array elements value
echo $person["name"] . "<br>";
echo $person["hobbies"][0] . "<br>";


// Get element by key

echo $person["name"] . '<br>';

// Null coalescing assignment operator. Since PHP 7.4

// if(!isset($person['address'])){
//     $person['address'] = 'unknown';
// }

$person['address'] = print_r($person["address"])  ?? 'unknown';


// Check if array has specific key
echo '<pre>';
var_dump(isset($person['location']));  // Change age into "location"
echo '</pre>';

// Print the keys of the array

echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array

echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting assosiative array

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
asort($age);

// foreach ($age as $x => $x_value) {
//     echo "Key=" . $x . ", Value=" . $x_value;
//     echo "<br>";
// }


foreach ($age as $x => $x_value) {
    echo $x . " = " . $x_value;
}
