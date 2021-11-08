<?php

session_status() === PHP_SESSION_ACTIVE ? TRUE : session_start();

if(isset($_POST['signup-submit'])) {
	require_once('../controllers/utilisateurController.php');
	require_once('../model/utilisateur.php');

	$userController = new UserController();
	$userTable = new Profil();
	
	$userTable->username = str_replace(array(':', '-', '/', '*', '<', '>'), '', $_POST['uid']);
	$userTable->email = str_replace(array(':', '-', '/', '*', '<', '>'), '', $_POST['mail']);
    
	$password = str_replace(array(':', '-', '/', '*', '<', '>'), '', $_POST['pwd']);
    $passwordRepeat = str_replace(array(':', '-', '/', '*', '<', '>'), '', $_POST['pwdrepeat']);
	
	/* Getionnaire des erreurs*/
	// Vérifie si les variables sont vides.
	if(empty($userTable->username) || empty($userTable->email) || empty($password) || empty($passwordRepeat) ) {
		header("Location: ../view/inscription.php?error=emptyfields&&uid=".$userTable->username."&mail=".$userTable->email);
		exit();
	}
	// Filtre la variable et vérifie si elle est valide.
	else if(!filter_var($userTable->email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $userTable->username)) {
		header("Location: ../view/inscription.php?error=invalidmailuid");
		exit();
	}
	// Vérifie que l'adresse mail est valide.
	else if(!filter_var($userTable->email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../view/inscription.php?error=invalidmail&uid=".$userTable->username);
		exit();
	}
	// Vérifie si le login est valide
	else if(!preg_match("/^[a-zA-Z0-9]*$/", $userTable->username)) {
		header("Location: ../view/inscription.php?error=invaliduid&mail=".$userTable->username);
		exit();
	}
	// Vérifie que la confirmation de mot de passe est valide
	else if($password !== $passwordRepeat) {
		header("Location: ../view/inscription.php?error=passwordcheck&uid=".$userTable->username."&mail=".$userTable->email);
		exit();
	}
	else {
		// Vérifie si le login choisie existe déjà
		$resultCheck = $userController->checkUsername($userTable->username);
		if(!empty($resultCheck)) {
			header("Location: ../view/inscription.php?error=usertaken&mail=".$userTable->email);
			exit();
		} else {
			// Ajoute à la table profil
			$userTable->password = password_hash($password, PASSWORD_DEFAULT);
            //$values = array(&$fullname, &$username, &$hashedPwd, &$email);
            $userController->insertUser($userTable);
            header("Location: ../view/login.php?signup=success");
            exit();
		}
	}
		
} else {
	header("Location: ../view/inscription.php");
	exit();
}