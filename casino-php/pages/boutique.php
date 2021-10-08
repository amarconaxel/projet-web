<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>CYKASINO - Boutique</title>
	<link rel="stylesheet" type="text/css" href="../css/default.css" >
	<link rel="stylesheet" type="text/css" href="../css/menu.css" >
	
</head>

<body>
	
	<?php include_once("entete.php"); ?>
	
	<div id="page">
		<div id="corps">
			<h1>Choisissez vos cadeaux !</h1>
			<form>
				<div id="produits">
				    <!-- TODO inserez PHP pour la g�n�ration des produits -->
					<div>
						<img src="$lienImgProduit" alt="$descriptionProduit" />
						<p>$nomProduit</p>
						<label for="quantite">Quantité : </label>
    					<input type="number" name="quantite" id="quantite" value="0">
					</div>
					<div>
						<img src="$lienImgProduit" alt="$descriptionProduit" />
						<p>$nomProduit</p>
						<label for="quantite">Quantité : </label>
    					<input type="number" name="quantite" id="quantite" value="0">
					</div>
					<div>
						<img src="$lienImgProduit" alt="$descriptionProduit" />
						<p>$nomProduit</p>
						<label for="quantite">Quantité : </label>
    					<input type="number" name="quantite" id="quantite" value="0">
					</div>
					<div>
						<img src="$lienImgProduit" alt="$descriptionProduit" />
						<p>$nomProduit</p>
						<label for="quantite">Quantité : </label>
    					<input type="number" name="quantite" id="quantite" value="0">
					</div><div>
						<img src="$lienImgProduit" alt="$descriptionProduit" />
						<p>$nomProduit</p>
						<label for="quantite">Quantité : </label>
    					<input type="number" name="quantite" id="quantite" value="0">
					</div>
					<div>
						<img src="$lienImgProduit" alt="$descriptionProduit" />
						<p>$nomProduit</p>
						<label for="quantite">Quantité : </label>
    					<input type="number" name="quantite" id="quantite" value="0">
					</div><div>
						<img src="$lienImgProduit" alt="$descriptionProduit" />
						<p>$nomProduit</p>
						<label for="quantite">Quantité : </label>
    					<input type="number" name="quantite" id="quantite" value="0">
					</div>
					<div>
						<img src="$lienImgProduit" alt="$descriptionProduit" />
						<p>$nomProduit</p>
						<label for="quantite">Quantité : </label>
    					<input type="number" name="quantite" id="quantite" value="0">
					</div>
				</div>
				<p id="bouton"><button>Acheter</button></p>
			</form>
		</div>
		<div id="pubs">
			<img src="../images/pub-vodka.gif" alt="Publicit� Vodka" />
		</div>
	</div>
	
</body>

</html>