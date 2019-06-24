<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<head>
	<title> Connexion </title>
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
<h1> Connectez-vous ! </h1>

<?php require_once 'connection.php';?>
<div class="formulaire">
<form action="connexion.php" method="post">
	<label for="login"> Login : </label> <input type="text" for="login" name="login"> <br/>
	<label for="pwd"> Password : </label> <input type="password" for="pwd" name="pwd"> <br/>
	<input type="submit" value="Connexion">
</form>
</div>

</body>
</html>