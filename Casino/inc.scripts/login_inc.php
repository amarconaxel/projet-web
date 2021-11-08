<?php

session_status() === PHP_SESSION_ACTIVE ? TRUE : session_start();

if(isset($_POST['login-submit'])) {
    require_once('../controllers/utilisateurController.php');
	
	$mailuid = str_replace(array(':', '-', '/', '*', '<', '>'), '', $_POST['mailuid']);
    $password = str_replace(array(':', '-', '/', '*', '<', '>'), '', $_POST['pwd']);
    
    $userController = new UserController();
	if(empty($mailuid) || empty($password))  {
		header("Location: ../view/login.php?error=emptyfields&mailuid=".$mailuid."&mail=".$mailuid);
		exit();
	}
	else {
        // Vérification du nom de l'utilisateur ainsi que le mot de passe
		$result = $userController->checkUsername($mailuid);
			if($result !== null) {
					$pwdCheck = password_verify($password, $result["password_profil"]);
					$_SESSION['result'] = $result;
                    if($pwdCheck == false) {
                        header("Location: /Casino/view/login.php?error=wrongpwd");
                        exit();
                    }
                    else if($pwdCheck == true) {
                        $_SESSION['userId'] = $result['Id_Profil'];
                        $_SESSION['userUsername'] = $result['login_profil'];
                        $_SESSION['status'] = $result['status_profil'];
						$_SESSION['point'] = $result['credit_profil'];
                        
                        header("Location: /Casino/index.php?login=succes");
                        exit();
                    }
			} else {
				$_SESSION['result'] = $result;
				header("Location: ../view/login.php?error=nouser");
				exit();
			}
		}
	}

else {
	header("Location: ../view/login.php");
	exit();
}