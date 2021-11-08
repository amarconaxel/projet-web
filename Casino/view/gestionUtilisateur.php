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
if(isset($_SESSION['userUsername'])) { 
if ($_SESSION['status'] == 'admin'){
    require_once('../controllers/utilisateurController.php');
    $userController = new userController;
    $result = $userController->fetchUsers();
    echo '<table class=tableauUtilisateur>
        <thead>
            <tr>
                <th>Id Profil</th>
                <th>Login</th>
                <th>Email</th>
                <th>Nom complet</th>
                <th>Téléphone portable</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>';
    if($result !== null) {
        foreach ($result as $key => $value) {
            $suprUtilisateur = "../inc.scripts/suppression_inc.php?supprimer=".$value['Id_Profil']."";
            $modUtilisateur = "../view/modifierUtilisateur.php?modifier=".$value['Id_Profil']."";
            echo "<tr>";
            echo "<td>".$value['Id_Profil']."</td>";
            echo "<td>".$value['login_profil']."</td>";
            echo "<td>".$value['mail_profil']."</td>";
            echo "<td>".$value['nom_profil']. " ".$value['prenom_profil']."</td>";
            echo "<td>".$value['tel_profil']."</td>";
            echo "<td>".$value['status_profil']."</td>";
            echo '<td>
                <form name="form1" action="'.$modUtilisateur.'" method="post">
                <button  type="submit" name="modifier" value="'.$value['Id_Profil'].'">Modifier</button>
                </form>
                <form name="form1" action="'.$suprUtilisateur.'" method="post">
                <button  type="submit" name="modifier" value="'.$value['Id_Profil'].'">Supprimer</button>
                </form>
                </td>';
        }    
    }
    else {
        echo "ERROR";
    }
    echo '</tbody>
    </table>';
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