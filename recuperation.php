<?php

include('bdd.php');

if (empty($_POST['login']) ||  empty($_POST['pwd'])) {
    echo 'Merci de remplir les champs obligatoire';
    return false;
} else {


	$login = $_POST['login'];
	$pwd = $_POST['pwd'];


	$req = $bdd->prepare("INSERT INTO user (login, pwd) VALUES ( '".$login."', '".$pwd."')");

	$req->execute(array(
		'$login' => $login,
		'$pwd' => $pwd,
	));

}


?>