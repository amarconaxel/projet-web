<?php

require_once ('modelController.php');

class UserController {

    public function getController() {
        $controller = new ModelController();
        return $controller;
    }

    /* Sélectionner tous les utilisateurs de la base de données */
    public function fetchUsers() {
        $controller = $this->getController();
        $sql = "SELECT Id_Profil, login_profil, mail_profil, password_profil,nom_profil, prenom_profil,tel_profil,status_profil FROM profil
        ORDER BY Id_Profil";
        $result = $controller->fetchRecords($sql);
        return $result;
    }

    /* Sélectionner un utilisateur */
    public function selectUser($id) {
        $controller = $this->getController();
        $sql = "SELECT Id_Profil, login_profil, mail_profil, password_profil,nom_profil, prenom_profil,tel_profil,status_profil FROM profil WHERE Id_Profil = ?;";
        $result = $controller->oneParamRecord($sql, $id);
        return $result;
    }

    /* Ajouter utilisateur */
    public function insertUser($values) {
        $controller = $this->getController();
        $sql = "INSERT INTO profil (login_profil, mail_profil,  password_profil, status_profil, nom_profil, prenom_profil, naissance_profil, tel_profil, credit_profil) 
        VALUES (?, ?, ?,'user','Non renseigné','Non renseigné','Non renseigné','Non renseigné',100);";
        $type = 'sss';
        $controller->arrayParamRecord($sql, $values, $type);
    }

    /* Mettre à jour les données d'un utilisateur */
    public function updateUser($values) {
        $controller = $this->getController();
        $sql = "UPDATE profil SET login_profil = ?, password_profil = ? mail_profil = ?  WHERE Id_Profil = ?;";
        $type = 'sss';
        $controller->arrayParamRecord($sql, $values, $type);
    }

    /* Supprimer un utilisateur */
    public function deleteUser($id) {
        $controller = $this->getController();
        $sql = "DELETE FROM profil WHERE Id_Profil = ?;";
        $controller->oneParamRecordspr($sql, $id);
    }

    /* Vérifier un pseudonyme */
    public function checkUsername($login) {
        $controller = $this->getController();
        $sql = "SELECT Id_Profil, login_profil, password_profil , status_profil, credit_profil FROM profil WHERE login_profil = ? ";
        $result = $controller->oneParamRecord($sql, $login);
        return $result;
    }

    /* Vérifier les logins */
    public function checkLogin($values) {
        $controller = $this->getController();
        $sql = "SELECT Id_Profil, login_profil, password_profil, status_profil, credit_profil FROM Profil WHERE login_profil = ? OR mail_profil = ? ;";
        $type = 'ss';
        $result = $controller->arrayParamRecord($sql, $values, $type);
        return $result;
    }

    /* Obtenir l'id de l'utilisateur */
    public function getNumOfUsers() {
        $controller = $this->getController();
        $sql = "SELECT Id_Profil FROM Profil ;";
        $result = $controller->numRows($sql);
        return $result;
    }

}