<?php

class Database {

private $servername;
private $username; 
private $password;
private $dbname;
private $conn; 

public function __construct($servername, $username, $password, $dbname){
    $this->servername = $servername;
    $this->username = $username; 
    $this->password = $password; 
    $this->dbname = $dbname; 
}

public function connect(){
    try {
        $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch(PDOException $e){
        echo "Connessione fallita: " . $e->getMessage();
    }
}

public function getConnection() {
    return $this->conn; 
}
}
     
//istanza della classe

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "newcms"; 

$database = new Database($servername, $username, $password, $dbname);
$database->connect();

$conn = $database->getConnection(); 


?>