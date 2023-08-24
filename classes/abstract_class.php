<?php


abstract class ParentClass {

    abstract protected function prefissoNome($nome);
}


//parent class
abstract class Auto {
    public $nome; 
    public function __construct($nome){

        $this->nome = $nome; 
        
    }
    abstract public function intro() : string; 
    
}

//child classes
class Audi extends Auto {
    public function intro() : string {
        return "Scegli la qualità tedesca! Io sono " . $this->nome;
    }
}

class Maserati extends Auto {
    public function intro() : string {
        return "Scegli la classe italiana! Io sono" . $this->nome;
    }
}

//creo oggetti dalle classi child
$audi = new audi("Audi");
echo $audi->intro(); 
echo "<br>";


$maserati = new Maserati("Maserati");
echo $maserati->intro();
echo "<br>";




?>