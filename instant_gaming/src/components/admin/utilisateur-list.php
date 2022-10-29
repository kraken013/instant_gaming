<?php
    include './../server.config.php';    
?>

<div class=screen-title>
    Liste des utilisateurs
</div>

<div class="section">
    <div class="content-btn">
        <button id="btn">Ajouter un utilisateur</button>
    </div>

   <div class="content-section">
        
        <?php
            $utilisateur = $bdd->query('SELECT * FROM user');
            foreach($utilisateur as $user){ ?>
                <div class="card">
                    <div class="card-header">
                        <span><?= strtoupper($user['name']) ?></span>
                    </div>
                    <div class="content-card">
                        <span id="span0" >addresse :</span>
                        <span id="span1"><?= $user['addresse'] ?></span>
                        <span id="span0">mail :</span>
                        <span id="span1"><?= $user['mail'] ?></span>
                        <span id="span0">mot de passe :</span>
                        <span id="span1"><?= $user['passwd'] ?></span>
                        <span id="span0">role :</span>
                        <span id="span1"><?= $user['role'] ?></span>
                    </div>
                    <div class="card-footer">
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $user['id_user'] ?>">
                            <button name="delete">supprimer</button>
                        </form>
                    </div>

                </div>
            <?php ;} ?>
    </div>

</div>