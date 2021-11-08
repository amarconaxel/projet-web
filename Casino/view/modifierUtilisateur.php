<?php
    session_status() === PHP_SESSION_ACTIVE ? TRUE : session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- STYLE -->
    <link href="../public/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="../public/css/default.css" >
	<link rel="stylesheet" href="../public/css/menu.css" >
	<link rel="stylesheet" href="../public/css/pieds.css" >
    <link rel="stylesheet" href="../public/css/entete.css" >
    <link rel="stylesheet" href="../public/css/tableauUtilisateur.css" >
    <title>Gestion des utilisateur</title>
</head>
<body>

<!-- HEADER -->
<?php
    include 'includes/header.php';
?>
<!-- HEADER END -->

<!-- MAIN -->
<div class="wrapper">
<?php 
if (isset($_POST['modifier']) && $_POST['modifier'] != "") {
    $id=$_POST['modifier'];
}
if(isset($_SESSION['userUsername'])) { 
if ($_SESSION['status'] == 'admin'){
    require_once('../controllers/utilisateurController.php');
    $userController = new userController;
    $result = $userController->selectUser($id);
    echo '<body>      
        <div>Modification</div>
        <form method="post">';
if (isset($result['nom_profil'])){
    echo '<div>'.$result['nom_profil'].'</div>';
    }
    echo '<input type="text" placeholder="Votre nom" name="nom" value="'.$result['nom_profil'].'" required>';
if (isset($result['prenom_profil'])){
    echo '<div>'.$result['prenom_profil'].'</div>';  
    }
    echo '<input type="text" placeholder="Votre prénom" name="prenom" value="'.$result['prenom_profil'].'" required>';
if (isset($result['mail_profil'])){
    echo '<div>'<?= $result['mail_profil'] ?>'</div>';
    }
    echo '<input type="email" placeholder="Adresse mail" name="mail" value="'.$result['mail_profil'].'" required>';
    echo '<button type="submit" name="modification">Modifier</button>';
    echo'</form>
    </body>';

    }
    else {
        echo "Vous n'avez pas l'autorisation !!";
    }
    }
    else {
        echo "Vous n'avez pas l'autorisation !!";
    }
?>
</div>
<!-- MAIN END -->
<!-- FOOTER -->
<?php
    include('includes/footer.php');
?>
<!-- FOOTER END -->