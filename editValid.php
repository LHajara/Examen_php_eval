<?php
require_once "./test.php"
// var_dump($_POST);

$bdd = new PDO('mysql:host=localhost;dbname=immobilier', "root", ""); 
// hum un require database.php serait mieux non ?
$idGame = $_POST['id_'];

$req  = $bdd->prepare("SELECT * FROM logement WHERE id_logement=:title"); 

$req->bindValue('gameID', $idGame, PDO::PARAM_INT); 

$req->execute(); 

$myAppart = $req->fetchAll(PDO::FETCH_ASSOC); 

$req->closeCursor(); 

var_dump($game);
var_dump($game[0]['nom']);

?>

<form action="editValid.php" method="post">
    <input type="text" name="nom" value="<?= $game[0]['nom'] ?>">
    <input hidden type="text" name="gameID" value="<?= $game[0]['ID'] ?>">
<button type="submit">Edit</button>
</form>
