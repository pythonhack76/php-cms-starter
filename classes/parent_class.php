<?php


abstract class Human {


    public $nome; 
    public $carnagione; 

    public function __construct($nome, $carnagione){
        $this->nome = $nome; 
        $this->carnagione = $carnagione;   
   
        
    }

    abstract public function intro() : string; 

}

    // child classes 

    class European extends Human {

        public function intro() : string {
            return "Siamo localizzati in Europa! Noi siamo $this->nome";
        }
    }

    class African extends Human {

        public function intro() : string {

            return "Siamo localizzati in Africa! Noi siamo $this->nome";
        }
    }


    //

$europeo = new Human('Hal','bianco'); 






?>