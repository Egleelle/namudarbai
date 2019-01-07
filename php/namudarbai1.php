<?php

class Human {

   public $name;
   public $surname;

   public function labas() {

       return 'Sveiki ,as esu <i>' .$this–>name . $this–>surname . '<br>';
   }

}

$humantwo = new Human();
$humanone = new Human();

$humantwo –> name ="Darius";
$humantwo –> surname ="Pipiraitis";

$humanone –> name ="Egle";
$humanone –> surname ="Grazyte";

echo humantwo –> labas();
echo humanone –> labas();



?>
