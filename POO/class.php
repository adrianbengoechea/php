<?php

// $name = 'george';
// $age = 23;
// $country = 'GT';
//
// $name2 = 'michis';
// $age2 = 333;
// $country2 = 'Disneyland';

// echo $name;

class Person{
  public $name;
  public $age;
  public $country;

  public function showInfo(){
    echo $this->name . ' Tiene ' . $this->age . ' años de edad y es de ' . $this->country;
  }

}

$george = new Person;
$george->name = 'George Alladin';
$george->age = 34;
$george->country = 'Guatemala';
$george->showinfo();











?>
