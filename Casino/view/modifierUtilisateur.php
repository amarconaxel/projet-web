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
    <link rel="stylesheet" href="../public/css/inscription.css" >
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
    echo '
        <main class="mainn col-9">
        <form class="box" name="modifForm" action="../inc.scripts/modifier_inc.php" method="post">
            <div class="form-group">  
                <h1 class="box-title">Modification</h1>
                <p id="userName"></p>
                <input class="box-input" type="text" name="login" placeholder="Nom d\'utilisateur" value="'.$result['login_profil'].'" required>
                <p id="userName"></p>
                <input class="box-input" type="text" name="nom" placeholder="Nom" value="'.$result['nom_profil'].'" required>
                <p id="Name"></p>
                <input class="box-input" type="text" name="prenom" placeholder="Prenom " value="'.$result['prenom_profil'].'" required>
                <p id="firstName"></p>
                <input class="box-input" type="text" name="mail" placeholder="E-mail" value="'.$result['mail_profil'].'" required>
                <p id="userMail"></p>
                <input class="box-input" type="text" name="status" placeholder="status" value="'.$result['status_profil'].'" required>
                                <button class="cancelbtn"type="button" onclick="window.location.href= "/Casino/view/gestionUtilisateur.php";">Annuler</button>
                <button class="signupbtn" type="submit" name="signup-submit">Modifier</button>
            </div>
        </form>
        </main>
    ';

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

</body>

</html>