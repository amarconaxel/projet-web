<?php

/* Profil */

class Profil {

    /* Champs de la table Profil */

    public $id;
    public $username;
    public $email;
    public $password;

    /* D�finir une valeur par d�faut avec le constructeur */
    function __construct()
    {
        $this->id = 0;
        $this->username = "";
        $this->email = "";
        $this->password = "";
    }
}