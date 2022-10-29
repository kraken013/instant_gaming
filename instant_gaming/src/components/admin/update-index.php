<?php
    session_start();
?>

<div class=screen-title>
    Modifier la page d'acceuil
</div>

<div class="section">
    <h3>image actuelle</h3>
    <img class="actuel" src="./../public/assets/<?= $_SESSION["imgName"]?>" alt="pc">
    

    <h3>Modifier l'image</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="image">
        <input type="submit" value="Modifier" name="submit">
    </form>
</div>