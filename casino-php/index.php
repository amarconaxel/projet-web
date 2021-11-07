<!DOCTYPE html>

<?php 
if (isset($_GET['page']) && $_GET['page'] != "") {
    $page=$_GET['page'];
} else {
    $page="accueil";
}
?>

<head>
	<meta charset="utf-8">
	<title>CYKASINO <?php echo("- ".ucfirst($page)); ?></title>
	<link rel="stylesheet" type="text/css" href="../css/default.css" >
	<link rel="stylesheet" type="text/css" href="../css/entete.css" >
	<link rel="stylesheet" type="text/css" href="../css/pieds.css" >
</head>

<?php 

include("pages/entete.php");
include("pages/$page.php");
include("pages/pieds.php");

?>