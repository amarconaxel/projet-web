
<body>

<!-- MAIN -->
<div class="wrapper">
    <!-- INSCRIPTION -->
    <main class="mainn col-9">
    <form class="box" name="signupForm" action="../inc.scripts/inscription_inc.php" method="post" onsubmit="return(validate());">
        <div class="form-group">  
            <h1 class="box-title">Inscription</h1>
            <input class="box-input" type="text" name="uid" placeholder="Nom d'utilisateur">
            <p id="userName"></p>
            <input class="box-input" type="text" name="mail" placeholder="E-mail">
            <p id="userMail"></p>
            <input class="box-input" type="password" name="pwd" placeholder="Mot de passe">
            <small id="passwordHelpInline" class="text-muted">
                Doit comporter au moins 5 caracteres.
            </small>
            <p id="userPwdd"></p>
            <input class="box-input" type="password" name="pwdrepeat" placeholder="Confirmation du mot de passe">
            <p id="userPwddRep"></p>
            <button class="cancelbtn"type="button" onclick="window.location.href= '../index.php';">Annuler</button>
            <button class="signupbtn" type="submit" name="signup-submit">S'inscrire</button>
        </div>
    </form>
    </main>
    <!--FIN INSCRIPTION -->
</div>
<!-- MAIN END -->

<script>

// validation cote client
function validate() {
    if(document.forms["signupForm"]["uid"].value == "") {
        document.getElementById("userName").innerHTML = "Veuillez fournir votre nom d'utilisateur";
        document.forms["signupForm"]["uid"].focus();
        return false;
    }
    if(document.forms["signupForm"]["mail"].value == "") {
        document.getElementById("userMail").innerHTML = "Veuillez fournir votre E-mail";
        document.forms["loginForm"]["mail"].focus();
        return false;
    }
    if(document.forms["signupForm"]["pwd"].value == "") {
        document.getElementById("userPwdd").innerHTML = "Veuillez fournir votre mot de passe";
        document.forms["signupForm"]["pwd"].focus();
        return false;
    }
    if(document.forms["signupForm"]["pwd-repeat"].value == "") {
        document.getElementById("userPwddRep").innerHTML = "Veuillez fournir la confirmation de votre mot de passe ";
        document.forms["signupForm"]["pwd-repeat"].focus();
        return false;
    }
}

</script>
</body>

</html>