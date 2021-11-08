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
    <title>Connexion</title>
</head>

<body>

<!-- HEADER -->
<?php
    include 'includes/header.php';
?>
<!-- HEADER END -->

<!-- MAIN -->
<div class="wrapper">
    <!-- LOGIN -->
    <main class="mainn col-9">
    <form class="box" name="loginForm" action="../inc.scripts/login_inc.php" method="post" onsubmit="return(validate());">
        <div class="form-group">
            <h1 class="box-title">Connexion</h1>
            <input  class="box-input" type="text" name="mailuid" placeholder="E-mail/Nom de l'utilisateur">
            <p id="userMailName"></p>
            <input class="box-input" type="password" name="pwd" placeholder="Mot de passe">
            <p id="userPwd"></p>
            <button class="cancelbtn"type="button" onclick="window.location.href= '/Casino/index.php';">Annuler</button>
            <button class="signupbtn" type="submit" name="login-submit">Se connecter</button>
        </div>
    </form>

    </main>
    <!-- LOGIN END -->

</div>
<!-- MAIN END -->
<!-- FOOTER -->
<?php
            include('includes/footer.php');
?>
<!-- FOOTER END -->
<script>

//Validation des champs
function validate() {
    
    if(document.forms["loginForm"]["mailuid"].value == "") {
        document.getElementById("userMailName").innerHTML = "Veuillez indiquer votre e-mail/nom d\'utilisateur";
        document.forms["loginForm"]["mailuid"].focus();
        return false;
    }
    if(document.forms["loginForm"]["pwd"].value == "") {
        document.getElementById("userPwd").innerHTML = "Veuillez fournir votre mot de passe";
        document.forms["loginForm"]["pwd"].focus();
        return false;
    }
}
</script>

<?php
    //Vérifie si l'utilisateur existe
    $actual_link = "http://$_SERVER[HTTP_HOST]'$_SERVER[REQUEST_URI]";
    if(strpos($actual_link, 'nouser')) {
        echo '<script>document.getElementById("userMailName").innerHTML = "L\'utilisateur n\'existe pas";</script>';
    }
?>

</body>

</html>