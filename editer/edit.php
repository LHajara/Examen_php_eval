<?php require_once "../parts/header.php" ?>


<form action="editValid.php"></form>

<input type="text" class="form-control my-2" name="titre" placeholder="titre">
        <input type="text" class="form-control my-2" name="adresse" placeholder="votre adresse">
        <input type="text" class="form-control my-2" name="ville" placeholder="ville">
        <input type="number" class="form-control my-2" name="cp" placeholder="code Postale">
        <input type="number" class="form-control my-2" name="surface" placeholder="la surface">
        <input type="number" class="form-control my-2" name="prix" placeholder="prix">
        <select id="monselect" name="type" class="form-control my-2">
            <option value="valeur1">Location</option>
            <option value="valeur2" selected>Vente</option>
            <option value="valeur3">Vacances</option>
        </select>
        <input type="file" class="form-control my-2" name="photo" placeholder="photo">
        <textarea type="text" class="form-control my-2" name="description" placeholder="un commentaire..."></textarea>
        <br><button type="submit">Ajouter</button>

        <?php require_once "../parts/footer.php" ?>

