<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    // how to convert string  into array

    $string = "Banana,apple,orange";


    // echo '<pre>';
    // var_dump(explode(",", $string));
    // echo '</pre>';

    // var_dump(explode(",", $string));

    // $fruits = ["Banana", "Apple", "orange"];

    // echo count($fruits) . '<br>';
    // echo array_push($fruits, "sfsfds");
    // echo array_pop($fruits);

    // echo "<pre>";
    // var_dump($fruits);
    // echo "</pre>"

    // var_dump(in_array("banana", $fruits));
    // var_dump(array_search("orange", $fruits))


    // var_dump(isset($fruits[1]));

    // $fruits[] = "Jumbora";
    // echo '<pre>';
    // var_dump($fruits);
    // echo '</pre>';


    // convert array into string
    // echo implode(",", $fruits) . "<br>";

    // $person = [
    //     "name" => "Sajib Khan",
    //     "nickname" => "SK",
    //     "age" => 30,
    //     "hobbies" => [
    //         'tennis', 'video games'
    //     ],
    // ];


    // echo '<pre>';
    // var_dump(isset($person['location']));  // Change age into "location"
    // echo '</pre>';


    // While Loop with $number

    // $number = 0;

    // while ($number < 10) {

    //     var_dump($number);
    //     echo PHP_EOL;
    //     $number++;
    // }

    // $fruits = ["Bananna", "Apple", "Orange"];

    // foreach ($fruits as  $i =>  $fruit) {
    //     echo $i . " " . $fruit . '<br>';
    // }

    // foreach ($fruits as $i => $fruit) {
    //     echo $i . " " . $fruit . "<br>";
    // }

    // $person = [
    //     'name' => 'Sajib',
    //     'surname' => 'SK',
    //     'age' => 30,
    //     'hobbies' => ['Tennis', 'Video Games'],
    // ];


    // foreach ($person as $key => $value) {
    //     if ($key === 'hobbies') {
    //         break;
    //     } else {
    //         echo $key . ' ' . $value . '<br>';
    //     }
    // }


    // Create function to sum all numbers using ...$nums

    // function addition(...$nums)
    // {

    //     $sum = 0;

    //     foreach ($nums as $num) $sum += $num;

    //     return $sum;
    // }

    // echo addition(1, 3, 4, 5, 6);


    // function addition(...$numbers)
    // {
    //     $sum = 0;

    //     foreach ($numbers as $number) {
    //         $sum += $number;
    //     }

    //     echo $sum;
    // }

    // echo addition(1, 3, 4, 5, 6);


    // function sum(...$nums)
    // {
    //     return array_reduce($nums, fn ($carry, $n) => $carry + $n);
    // }

    // echo sum(1, 2, 3, 4, 6);


    // cont sum = () => num1 + Num 2

    // $addition = fn ($num1, $num2) => $num1 + $num2;

    // echo $addition(1, 2);    $addition = fn ($num1, $num2) => $num1 + $num2;

    // echo $addition(1, 2);

    $addition = fn ($num1, $num2) => $num1 + $num2;

    echo $addition(1, 2)

    ?>


</body>

</html>