<link rel="stylesheet" href="./css/css.css">
<?php 
$bdd = new PDO ('mysql:host=localhost;dbname=immobilier', "root",""); // connexion à la BDD


$req  = $bdd->prepare("SELECT * FROM logement "); 



$req->execute(); // envoi et execution en BDD 


$myApparts = $req->fetchAll(PDO::FETCH_ASSOC); // recupere les datas de la req on met dans un tableau

$req->closeCursor(); 

// var_dump($myApparts); // verifie qu'on a bien notre resultat !
