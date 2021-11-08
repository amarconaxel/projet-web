<?php

session_status() === PHP_SESSION_ACTIVE ? TRUE : session_start();
    require_once('../controllers/utilisateurController.php');
    $userController = new UserController();

    if (isset($_POST['modifier']) && $_POST['modifier'] != "") {
        $id=$_POST['modifier'];
        $result=$userController->deleteUser($id);
        if ($result !== null) {
            header("Location: /Casino/view/gestionUtilisateur.php?supprimer=error");
            exit();
        }
        else {
            header("Location: /Casino/view/gestionUtilisateur.php?succes=succes");
            exit();
        }
    } else {
        echo "erreur";
    }


?>