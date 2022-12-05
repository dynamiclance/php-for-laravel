<!-- Define a class  -->

<?php

class Fruits
{
    public $name;
    public $color;


    function set_name($name)
    {
        $this->name = $name;
    }

    function set_color($color)
    {
        $this->color = $color;
    }


    function get_name()
    {
        return $this->name;
    }

    function get_color()
    {
        return $this->color;
    }
}

$apple = new Fruits();


$apple->set_name("apple is delicious fruit");
$apple->set_color("red");

echo  "name : " . $apple->get_name();
echo "<br>";
echo "color: " . $apple->get_color();


?>