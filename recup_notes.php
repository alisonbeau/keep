<?php 
include('bdd.php');

if(isset($_POST['textarea'])) { 
	$textarea = $_POST['textarea'];

	$req = $bdd->prepare("INSERT INTO notes (textarea) VALUES ( '".$textarea."')");

	$req->execute(array(
		'$textarea' => $textarea,
	));
}

?>