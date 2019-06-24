<?php 
include('bdd.php');

$req = $bdd->prepare("SELECT * FROM notes"); 
$req->execute();