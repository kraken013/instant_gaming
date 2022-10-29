<?php
    include './../server.config.php';
?>

<div class=screen-title>
    Liste des articles
</div>

<div class="section">
<div class="content-btn">
        <button id="btn">Ajouter un article</button>
        <div class="form-btn">
            <form action="" method="post">
                <select name="choix" id="choix-game">
                    <option value="likes">popularité</option>
                    <option value="price">prix croissant</option>
                    <option value="price">prix decroissant</option>
                </select>
                <button name="btn-game">Trier</button>
            </form>
        </div>
    </div>
   <div class="content-section">
        <?php

            if(isset($_GET['btn-game'])){
                $choix = $_GET['choix'];
                $gameList = $bdd->query("SELECT * FROM liste_game ORDER BY $choix DESC");
                var_dump($gameList);
            }

            
            $gameList = $bdd->query('SELECT * FROM liste_game ORDER BY likes ASC');
            foreach($gameList as $game){ ?>
                <div class="card">
                    <div class="card-header">
                        <span><?= strtoupper($game['name']) ?></span>
                    </div>
                    <div class="content-card">
                        <span id="span0" >Image :</span>
                        <span id="span1"><?= $game['image'] ?></span>
                        <span id="span0"> Id :</span>
                        <span id="span1"><?= $game['id_game'] ?></span>
                        <span id="span0">Price :</span>
                        <span id="span1"><?= $game['price'] ?></span>
                        <span id="span0">Like :</span>
                        <span id="span1"><?= $game['likes'] ?></span>
                    </div>
                    <div class="card-footer">
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $game['id_game'] ?>">
                            <button name="delete">supprimer</button>
                        </form>
                    </div>

                </div>
            <?php ;} ?>
    </div>

</div>