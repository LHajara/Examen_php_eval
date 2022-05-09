<?php

var_dump($_POST);

$bdd = new PDO('mysql:host=localhost;dbname=immobilier', "root", "");

$titre = $_POST["titre"]; 
$adresse = $_POST["adresse"]; 
$ville = $_POST["ville"]; 
$codepostale = $_POST["cp"]; 
$surface = $_POST["surface"]; 
$prix = $_POST["prix"];  
$photo = $_POST["photo"]; 
$type = $_POST["type"]; 
$description = $_POST["description"]; 
// faire des vérifs avant !
$req = "INSERT INTO `logement` (`titre`, `adresse`, `ville`, `cp`, `surface`, `prix`, `photo`, `type`, `description`) VALUES
                    
                    (:titre, 
                    :adresse,
                    :ville,
                    :cp,
                    :surface,
                    :prix,
                    :photo,
                    :type,
                    :description) ";
$stmt = $bdd->prepare($req);
$stmt->bindValue(":titre",$titre, PDO::PARAM_STR);
$stmt->bindValue(":adresse",$adresse, PDO::PARAM_STR);
$stmt->bindValue(":ville",$ville, PDO::PARAM_STR);
$stmt->bindValue(":cp",$codepostale, PDO::PARAM_INT ('required', 'minLen' -> 5,'maxLen' -> 5,));
$stmt->bindValue(":surface",$surface, PDO::PARAM_INT);
$stmt->bindValue(":prix",$prix, PDO::PARAM_INT);
$stmt->bindValue(":photo",$photo, PDO::PARAM_STR);
$stmt->bindValue(":type",$type, PDO::PARAM_STR);
$stmt->bindValue(":description",$description, PDO::PARAM_STR);

// $result = $stmt->execute(); 
// $myAppart = $req->fetchAll(PDO::FETCH_ASSOC);
// $stmt->closeCursor();      


$req = $stmt->execute(); // envoi et execution en BDD 


$result= $req ->fetchAll(PDO::FETCH_ASSOC); // recupere les datas de la req on met dans un tableau

$req->closeCursor(); 
var_dump($stmt = $bdd->prepare($req));
if ($result) {
    header("Location: test.php");
}