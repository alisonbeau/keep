<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" type="text/css" href="css/styles.css">
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

<?php require_once 'recuperation.php';?>
<div class="formulaire">
<form action="inscription.php" method="post">
	<label for="login"> Login : </label> <input type="text" for="login" name="login"> <br/>
	<label for="pwd"> Password : </label> <input type="password" for="pwd" name="pwd"> <br/>
	<input type="submit" value="Envoyer" id="submit">
</form>
</div>

<script type="text/javascript" src="js/action.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</body>