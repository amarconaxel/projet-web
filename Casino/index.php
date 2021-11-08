<?php
session_status() === PHP_SESSION_ACTIVE ? TRUE : session_start();
?>
<?php 
if (isset($_GET['page']) && $_GET['page'] != "") {
    $page=$_GET['page'];
} else {
    $page="accueil";
}
?>
    
<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <!-- STYLE -->
    <meta charset="utf-8">
	<title>CYKASINO<?php echo(" - ".ucfirst($page)); ?></title>
	<link rel="stylesheet" href="public/css/default.css" >
	<link rel="stylesheet" href="public/css/menu.css" >
	<link rel="stylesheet" href="public/css/pieds.css" >
    <link rel="stylesheet" href="public/css/entete.css" >
    <link rel="stylesheet" href="../public/css/inscription.css" >
    <title>Cykasino</title>
</head>

<body>
<!-- HEADER -->
<?php
    include 'view/includes/header.php';
?>
<!-- HEADER END -->
<!-- WRAPPER -->
        <!-- MAIN -->
        <?php
            include("view/".$page.".php");
        ?>
        <!-- MAIN END -->
<!-- WRAPPER END -->
<!-- FOOTER -->
<?php
            include 'view/includes/footer.php';
?>
<!-- FOOTER END -->

</body>

</html>