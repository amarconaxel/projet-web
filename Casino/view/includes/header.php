<?php
        if(isset($_SESSION['userUsername'])) {
            $userUsername = $_SESSION['userUsername'];
            $status = $_SESSION['status'];
            if($status =='user'){
            // Affiche l'interface utilisateur
            echo '
            <head>
                <script type="text/javascript" src="/Casino/js/entete.js"></script>
            </head>
            ';
            echo '<body onload="initEntete();">';
            echo '<header role="banner">
                <div id="entete">
                    <div id="menu">
                        <nav>
                            <span id="btnMenu">☰</span>
                        </nav>
                    </div>
                    <div id="logo">
                        <a href="/Casino/index.php?page=accueil">
                            <p><img src="/Casino/public/images/logo.png" alt="Logo de Cykasino" />Cукаsino</p>
                        </a>	
                    </div>
                    <div id="connexion">
                        <ul>
                            <li><a class="text"> Bienvenue '.$userUsername.'</a></li>
                            <li><a href="/Casino/inc.scripts/logout.inc.php">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </header>
                ';
            // Affiche la liste du menu déroulant
            echo '
                <div id="listeMenu">
                    <table>
                        <tr>
                            <td><a href="/Casino/index.php?page=accueil">Accueil</a></td>
                        </tr>
                        <tr>
                            <td><a href="/Casino/index.php?page=cartes">Cartes</a></td>
                        </tr>
                        <tr>
                            <td><a href="/Casino/index.php?page=boutique">Boutique</a></td>
                        </tr>
                        <tr class="tableConnexion">
                            <td><a class="text"> Bienvenue '.$userUsername.'</a></td>
                        </tr>
                        <tr class="tableConnexion">
                            <td><a href="#">Log Out</a></td>
                        </tr>
                    </table>
                </div>
                <div id="sombre"></div>
                ';
            }
            // Affiche l'interface admin
            elseif ($status =='admin') {
                echo '
            <head>
                <script type="text/javascript" src="js/entete.js"></script>
            </head>
            ';
            echo '<body onload="initEntete();">';
            echo '<header role="banner">
                <div id="entete">
                    <div id="menu">
                        <nav>
                            <span id="btnMenu">☰</span>
                        </nav>
                    </div>
                    <div id="logo">
                        <a href="/Casino/index.php?page=accueil">
                            <p><img src="/Casino/public/images/logo.png" alt="Logo de Cykasino" />Cукаsino</p>
                        </a>	
                    </div>
                    <div id="connexion">
                        <ul>
                            <li><a class="text"> Espace admin de : '.$userUsername.'</a></li>
                            <li><a href="/Casino/inc.scripts/logout.inc.php">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </header>
                ';
            // Affiche la liste du menu déroulant
            echo '
                <div id="listeMenu">
                    <table>
                        <tr>
                            <td><a href="/Casino/index.php?page=accueil">Accueil</a></td>
                        <tr>
                            <td><a href="/Casino/index.php?page=boutique">Boutique</a></td>
                        </tr>
                        <tr>
                            <td><a href="/Casino/view/gestionUtilisateur.php?page=GestionUtilisateur">Gestion des utilisateurs</a></td>
                        </tr>
                        <tr>
                            <td><a href="/Casino/index.php?page=Gestion page d\'accueil">Gestion de la page d\'accueil</a></td>
                        </tr>
                        <tr class="tableConnexion">
                            <td><a class="text"> Bienvenue '.$userUsername.'</a></td>
                        </tr>
                        <tr class="tableConnexion">
                            <td><a href="#">Log Out</a></td>
                        </tr>
                    </table>
                </div>
                <div id="sombre"></div>
                ';
            }
            else{}
        // Affiche interface pour un utilisateur inconnu
        } else {
            echo '
            <head>
                <script type="text/javascript" src="js/entete.js"></script>
            </head>
            ';
            echo '<body onload="initEntete();">';
            echo '<header role="banner">
                <div id="entete">
                    <div id="menu">
                        <nav>
                            <span id="btnMenu">☰</span>
                        </nav>
                    </div>
                    <div id="logo">
                        <a href="/Casino/index.php?page=accueil">
                            <p><img src="/Casino/public/images/logo.png" alt="Logo de Cykasino" />Cукаsino</p>
                        </a>	
                    </div>
                    <div id="connexion">
                        <ul>
                            <li><a href="/Casino/view/login.php?page=Connexion">Se connecter</a></li>
                            <li><a href="/Casino/view/inscription.php?page=Inscription">Inscription</a></li>
                        </ul>
                    </div>
                </div>
            </header>
                ';
            echo '
                <div id="listeMenu">
                    <table>
                        <tr>
                            <td><a href="/Casino/index.php?page=accueil">Accueil</a></td>
                        </tr>
                        <tr>
                            <td><a href="/Casino/index.php?page=cartes">Cartes</a></td>
                        </tr>
                        <tr>
                            <td><a href="/Casino/index.php?page=boutique">Boutique</a></td>
                        </tr>
                        <tr class="tableConnexion">
                            <td><a href="/Casino/view/login.php"">Se connecter</a></td>
                        </tr>
                        <tr class="tableConnexion">
                            <td><a href="/Casino/view/inscription.php">Inscription</a></td>
                        </tr>
                    </table>
                </div>
                <div id="sombre"></div>
                ';
        }
    ?>


<!-- show the username of the person who is logged in, and manage button for admins -->
<?php
if(isset($_SESSION['userUsername'])) {
    $status = $_SESSION['status'];
    echo '<li class="nav-item active white-font">'.$status.'</li>';
} else {
    '<li class="nav-item active"></li>';
}
?>


<!-- JUMBOTRON -->


<script>
    //navbar brand animation
    document.getElementsByClassName("navbar-brand")[0].addEventListener('mouseover', function(){
        document.getElementsByClassName("navbar-brand")[0].classList.add('flip-brand');
        window.setTimeout(function(){
            document.getElementsByClassName("navbar-brand")[0].classList.remove('flip-brand')
        }, 500);
    });
</script>