<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<script type="text/javascript" src="js/action.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<head>
	<title> Inscription </title>
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
<h1> Profil </h1>


	<?php include('modifier_user.php');
	foreach ($requete as $donnees) { ?>

<div class="formulaire">
<form action="modifier.php?id=<?php echo $donnees['id']; ?>" method="post">
	<textarea name="textarea" id="textarea"> <?php echo $donnees['textarea']; ?> </textarea> 
	<input type="submit" value="Envoyer">
</form>
</div>
<a href="informations.php"> Retour à mes notes </a>
	<?php } ?>