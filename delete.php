<?php

include('bdd.php');
	$reqselect = $bdd->prepare("SELECT * FROM `notes`"); 
	$reqselect->execute();
	$resultat = $reqselect->fetch();
	$id = $resultat["id"];
    
 	$r = $bdd->prepare("DELETE FROM notes WHERE id = :id" );
 	$r->execute(array(
 		":id" => $id,
 	));
 	header("Location:informations.php");
 	$r->closeCursor();
 ?>