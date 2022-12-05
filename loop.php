<!-- $fruits = ["Bananna", "Apple", "Orange"];

foreach($fruits as $i => $fruit) {
echo $i. " " . $fruit . '<br>';
} -->


<?php

$fruits = ["Bananna", "Apple", "Orange"];

foreach ($fruits as $i => $fruit) {
    echo $i . " = " . $fruit . "<br>";
}

$person = [
    'name' => 'Sajib',
    'surname' => 'SK',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];


foreach ($person as $key => $value) {
    if ($key === 'hobbies') {
        break;
    } else {
        echo $key . ' ' . $value . '<br>';
    }
}



?>