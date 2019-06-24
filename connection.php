<?php 

include('bdd.php');

if(empty($_POST['login']) || empty($_POST['pwd'])) {
	echo "Merci de remplir tout les champs";
} else {
	$login = $_POST['login'];
	$pwd = $_POST['pwd'];

	$req = $bdd->prepare("SELECT `login`, `pwd` FROM `user` WHERE login = :login AND pwd = :pwd");
	$req->execute(array(
    	':login' => $login,
    	':pwd' => $pwd
	));
 
	$resultat = $req->fetch();


	if (!$resultat) {
    	echo 'Mauvais identifiant ou mot de passe !';
	} else {
    	echo 'Vous êtes connecté !';
    	header('Location: informations.php');
	}
}