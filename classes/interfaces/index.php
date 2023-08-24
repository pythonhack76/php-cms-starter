<?php

//utilizzliamo i trait perché una child class non può ereditare pià chew da una singola classe
trait allerta1 {
    public function alert1() {
        echo "attenzione allerta uno";
    }
}

trait allerta2 {
    public function alert2() {
        echo "attenzione allerta due"; 
    }
}

interface Animal {

    public function makeSound();
}

class Cat implements Animal {
    public function makeSound()
    {
        echo "miaooo!";
    }
    use allerta1, allerta2; 

}


class Dog implements Animal {
    public function makeSound()
    {
        echo "baubau bau bau";
    }
}

class Sqirrel implements Animal {
    public function makeSound()
    {
        echo "sqit sqit sqit";
    }
}

// creiamo una lista di animali 


$gatto = new Cat(); 
$cane = new Dog(); 
$scoiattolo = new Sqirrel();
$animali = array($gatto, $cane);

// ciclo l'array 
foreach ($animali as $animale){
   echo "<br>" . $animale->makeSound();
}


?>