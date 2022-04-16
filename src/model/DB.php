<?php

class DB{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'gestion_organisation';
   public function getConnexion()
    {
        try {
            $dbc = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//             echo "connexion successfull";
        } catch (PDOException $e) {
            echo "Error" . $e->getMessage();
        }
        return $dbc;
    }
}
