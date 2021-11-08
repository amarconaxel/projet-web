<?php

session_status() === PHP_SESSION_ACTIVE ? TRUE : session_start();

if(isset($_POST['signup-submit'])) {
	require_once('../controllers/utilisateurController.php');
	require_once('../model/utilisateur.php');

	$userController = new UserController();
	$userTable = new Profil();
	
	$userTable->login = str_replace(array(':', '-', '/', '*', '<', '>'), '', $_POST['login']);
    $userTable->nom = str_replace(array(':', '-', '/', '*', '<', '>'), '', $_POST['nom']);
    $userTable->prenom = str_replace(array(':', '-', '/', '*', '<', '>'), '', $_POST['prenom']);
	$userTable->email = str_replace(array(':', '-', '/', '*', '<', '>'), '', $_POST['mail']);
    $userTable->status = str_replace(array(':', '-', '/', '*', '<', '>'), '', $_POST['status']);
        // Mise à jour de la table profil
        $userController->updateUser($userTable);
        header("Location: ../view/gestionUtilisateur.php?signup=success");
        exit();
} else {
	header("Location: ../view/modifierUtilisateur.php");
	exit();
}