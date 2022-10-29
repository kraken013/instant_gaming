<div class=screen-title>
    Modifier la page contact
</div>
<div class="section">
    <form action="" method="post">
        <h4> Adresse actuelle :</h4>
        <p><?= $adresse ?></p>
        <h4>Modifier l'adresse :</h4>
        <input type="text" name="adresse" id="adresse">
        <button name="update-address">Modifier adresse</button>

        <h4> Téléphone actuel :</h4>
        <p><?= $telephone ?></p>
        <h4>Modifier le téléphone :</h4>
        <input type="text" name="telephone" id="telephone">
        <button name="update-tel">Modifier telephone</button>

        <h4> Email actuel :</h4>
        <p><?= $email ?></p>
        <h4>Modifier l'email :</h4>
        <input type="text" name="email" id="email">
        <button name="update-mail">Modifier page d'acceuil</button>
    </form>

    <?php
        if(isset($_POST['update-address'])){
            $adresse = $_POST['adresse'];
            $update = $pdo->prepare("UPDATE contact SET adresse = :adresse");
            $update->bindParam(':adresse', $adresse);
            $update->execute();
            header('Location: ../pages/admin.php');
        }elseif(isset($_POST['update-tel'])){
            $telephone = $_POST['telephone'];
            $update = $pdo->prepare("UPDATE contact SET telephone = :telephone");
            $update->bindParam(':telephone', $telephone);
            $update->execute();
            header('Location: ../pages/admin.php');
        }elseif(isset($_POST['update-mail'])){
            $email = $_POST['email'];
            $update = $pdo->prepare("UPDATE contact SET email = :email");
            $update->bindParam(':email', $email);
            $update->execute();
            header('Location: ../pages/admin.php');
        }
    ?>
</div>