<?php
    // Informations de la base de donn�es
    define('host', 'localhost');
    define('user', 'root');
    define('pass', '');
    define('database', 'casino');

Class ModelController {

     private $con = null;

     // Fonction pour ouvrir la session sql
     public function __construct() {
          try {
            $this->con = new mysqli(host, user, pass, database);
          } catch (Exception $e) {
            die ('Impossible de se connecter à la base de données.');
        }
     }

     // Fonction pour fermer la session sql
     public function __destruct() {
        if($this->con){
            $this->con->close();
        }
     }
        
    public function fetchRecords($sql) {
        $stmt = $this->con->stmt_init();
        if(!$stmt->prepare($sql)) {
            throw new \Exception( 'Echec de la préparation' );
        } else {
            $stmt->execute();
        }

        $result = $stmt->get_result();
        if($row = $result->fetch_array(MYSQLI_ASSOC)) {
            return $result;
        } else {
            return null;
        }
    }

    public function oneParamRecordspr($sql, $id) {
        $stmt = $this->con->stmt_init();
        if(!$stmt->prepare($sql)) {
            throw new \Exception( 'Echec de la préparation' );
        } else {
            $stmt->bind_param("s", $id);
            $stmt->execute();
        }
        return null;
    }

    public function oneParamRecord($sql, $id) {
        $stmt = $this->con->stmt_init();
        if(!$stmt->prepare($sql)) {
            throw new \Exception( 'Echec de la préparation' );
        } else {
            $stmt->bind_param("s", $id);
            $stmt->execute();
        }

        $result = $stmt->get_result();
        if($row = $result->fetch_array(MYSQLI_ASSOC)) {
            return $row;
        } else {
            return null;
        }
    }

    // values est un tableau, donc call_user_func_array est utilise pour lier les parametres
    public function arrayParamRecord($sql, $values, $type) {
        $stmt = $this->con->stmt_init();
        if(!$stmt->prepare($sql)) {
            throw new \Exception( 'Echec de la préparation' );
        } else {
            $con = new mysqli(host, user, pass, database);
            $stmt = $con->prepare($sql);
            $stmt->bind_param($type,$values->username,$values->email,$values->password);
            $stmt->execute();
        }
    }

    // Compter le nombre de lignes trouvées correspondant à une requete specifique
    public function numRows($sql) {
        $numRows = $this->con->query($sql);
        return $numRows->num_rows;
    }
}