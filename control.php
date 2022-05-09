<link rel="stylesheet" href="./css/css.css">
<?php 
$bdd = new PDO ('mysql:host=localhost;dbname=immobilier', "root",""); // connexion à la BDD


$req  = $bdd->prepare("SELECT * FROM logement "); 



$req->execute(); // envoi et execution en BDD 


$myApparts = $req->fetchAll(PDO::FETCH_ASSOC); // recupere les datas de la req on met dans un tableau

$req->closeCursor(); 





// $theme="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/darkly/bootstrap.min.css"

// switch ($theme) {
//     case $_GET["theme"]:
//        if (".ra") $theme = ;
//         break;
//     default:
//         $theme = "cerulean";
//         break;



