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

class CreateTable {

private $conn;

public function __construct($conn) {
    $this->conn = $conn;
}

public function createTable() {
    try {
        $sql = "CREATE TABLE IF NOT EXISTS Utenti (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(30) NOT NULL,
            cognome VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        $this->conn->exec($sql);
        echo "Tabella Utenti creata con successo!";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}
}

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "newcms"; 

$database = new Database($servername, $username, $password, $dbname);
$database->connect();

$conn = $database->getConnection(); 

$createTable = new CreateTable($conn);
$createTable->createTable();


?>