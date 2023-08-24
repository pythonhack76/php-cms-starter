<?php

/*
|--------------------------------------------------------------------------
| Còasse creazione tabelle
|--------------------------------------------------------------------------
|
| Qui andiamo ad effettuare alcuni test per attività CRUD su oggetto Clienti.
| Classi e soluzioni simili a funzioni anonime come in JS. 
| Proviamo anche a utilizzare strutture Fibonacci e Fattoriale
|
*/


require "./db.php";

Class CreateTable {

//sezione sql per creazione tabella

public function createTable() {
    try {
        $sql = "CREATE TABLE MyGuests (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        $this->conn->exec($sql);
        echo "Table MyGuests created successfully";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

}
}

$database->createTable(); 