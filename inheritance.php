
<?php

class People
{

    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    protected function intro()
    {
        echo "My name is {$this->name} and my favorite color is {$this->color}";
    }
}

class Person extends People
{
    public function message()
    {
        echo "I am just started";
        echo "<br>";
        $this->intro();
    }
}

$person = new Person("My fake name is Enayet chy", "red");
$person->message();

?>