<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<script type="text/javascript" src="js/action.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
    function changeColorFond(event) {
    	var idiv = event.parentNode.parentNode.id;
    	var color = event.value;

		document.getElementById(idiv).style.background = color;	
	};

	function changeColorText(event) {
    	var iddiv = event.parentNode.parentNode.id;
    	var text = event.value;

		document.getElementById(iddiv).style.color = text;	
	};

	function ajoutCheck() {
		var div = document.getElementById('notes');
		var newCheck = document.createElement('input');
		newCheck.setAttribute("type", "checkbox");

		div.appendChild(newCheck);
	}
</script>
<head>
	<title> Notes </title>
	<meta charset="utf-8">
</head>
<body>
<header>
	<nav>
		<div class="menu">
			<ul>
				<li> <a href="index.php"> Accueil </a> </li>
				<li> <a href="inscription.php"> Inscription </a> </li>
				<li> <a href="connexion.php"> Connexion </a> </li>
			</ul>
		</div>
	</nav>

</header>

	<h1> Créer une note </h1>
	<?php require_once('recup_notes.php'); ?>
	<form action="informations.php" method="post">
		<div id="notes">
			<button type="button" id="checkbox" onclick="ajoutCheck()"> Ajouter checkbox</button>
			<textarea id="textarea" name="textarea"> </textarea>
		</div>
		<div style="width: 33%;margin: auto; text-align: center;">
			<input type="submit" value="Enregistrer" name="enregistrer" id="submit">
		</div>
</form>

	<h1> Vos notes </h1>
	<?php include('afficher_notes.php'); 
	foreach ($req as $donnees) { ?>
	<div class="notes_afficher" id="<?php echo $donnees['id']; ?>">
		<p style="margin: 12px;  word-wrap: break-word;"> <?php echo $donnees['textarea']; ?> </p>
		<p style="margin-top: 23px;"> 
			<a href="modifier.php?id=<?php echo $donnees['id']; ?>" style="text-decoration: none; margin-left: 12px;"> <img src="img/pencil.png" alt="modifier" style="width: 4%;"> </a> 
			<a href="delete.php?id=<?php echo $donnees['id']; ?>" style="text-decoration: none;" onclick="return confirm('êtes-vous sur de vouloir supprimer ?');"> <img src="img/delete.png" alt="supprimer" style="width: 4%; padding-left: 20px; padding-right: 20px;"> </a> 
			<input class="color_id=<?php echo $donnees['id']; ?>" type="color" name="col_couleur" value="#000" onchange="changeColorFond(this)"/>
			<input style="margin-left: 29px;" class="colortext_id=<?php echo $donnees['id']; ?>" type="color" name="col_couleur" value="#000" onchange="changeColorText(this)"/>
		</p>
		<p class="p-fond"> Couleur de fond </p>
		<p class="p-text"> Couleur du texte </p>
	</div>
	<?php } ?>