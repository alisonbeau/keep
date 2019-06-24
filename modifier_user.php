<?php 
include('bdd.php');

$id = $_GET["id"];

if(!empty($_POST['textarea'])) {
	$req = $bdd->prepare("UPDATE notes SET textarea =  '".$_POST['textarea']."' WHERE id = '".$_GET["id"]."'");
	$req->execute();
} 

$requete = $bdd->prepare("SELECT * FROM notes WHERE id = :id"); 
$requete->execute(array(
 		":id" => $id,
 	));

