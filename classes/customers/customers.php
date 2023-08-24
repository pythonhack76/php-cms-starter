<?php



/*
|--------------------------------------------------------------------------
| Classi PHP - Customers 
|--------------------------------------------------------------------------
|
| Qui andiamo ad effettuare alcuni test per attività CRUD su oggetto Clienti.
| Classi e soluzioni simili a funzioni anonime come in JS. 
| Proviamo anche a utilizzare strutture Fibonacci e Fattoriale
|
*/


class Customers {

    //proprietà
    public $nome;
    public $cognome;
    public $email;
    public $indirizzo;
    public $skills; 


    //costruttore
    function __construct($nome, $cognome, $skills)
    {
        $this->nome = $nome; 
        $this->cognome = $cognome; 
        $this->skills = $skills; 
    
    }

    protected function intro(){
        echo "il mio nome è {$this->nome} e il mio cognome è {$this->cognome}.";
    }


    //Metodi
    function set_nome($nome){
        $this->nome = $nome; 
    }

    function get_nome() {
        return $this->nome; 
    }

    function set_cognome($cognome){
        $this->cognome = $cognome; 
    }

    function get_cognome(){
        return $this->cognome; 
    }


    function set_email($email){
        $this->email = $email; 
    }

    function get_email(){
        return $this->email; 
    }

    function set_indirizzo($indirizzo){
        $this->indirizzo = $indirizzo; 

    }

    function get_indirizzo(){
        return $this->indirizzo; 
    }





}

class Customers_foreinger extends Customers {

    public $vat_number; 
 
 


    function set_vat_number($vat_number){
        $this->vat_number = $vat_number; 
    }

    public function messaggio() {
        echo "<br>" . "sono un messaggio di conferma";
        $this-> intro(); 
    }


}


class Manager {

    public $settore;
    public $degree;
    public $salario; 


    function __construct($settore = Null, $degree = Null, $salario = Null){

        $this->settore = $settore;
        $this->degree = $degree;
        $this->salario = $salario; 
    }

    //utilizziamo una costante. Alla costante puoi accedere sia con SELF che richiamando la classe, sempre utilizzano :: 
    const WELCOME_MESSAGE = "informazioni per Manager";
    public function welcome(){
        echo "<br>" . self::WELCOME_MESSAGE;
    }

}

//richiamiamo le istanze delle classi 

$customer = new Customers('steve','jobs','marketer'); 
$customer->set_nome('Steve');
$customer->set_cognome('Jobs');
$customer->set_email('stevejobs@apple.com');
echo $customer->get_nome(); 
$foreigner = new Customers_foreinger('Bill','Gates','hacker');
$foreigner->messaggio();
$manager = new Manager(); 
$manager->welcome(); 








?>