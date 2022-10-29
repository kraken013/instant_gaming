<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/admin-style.css">
    <title>Administration</title>
</head>
<body>
    <?php 

        include '../src/components/admin/header_admin.php';

    ?>
    <div class="container">
        <div class="categorie">
            <form method="post">
                <button name="update-index">Modifier page d'acceuil</button>
                <button name="update-contact" >Modifier page de contact</button>
                <button name="utilisateur-list">Voir les utilisateurs</button>
                <button name="article-list">Voir les articles</button>
            </form>
            <?php

            

                // switch ($choice) {
                //     case isset($index):
                //         $choice = include '../src/components/update-index.php';
                //         break;
                //     case isset($contact):
                //         $choice = include '../src/components/update-contact.php';
                //         break;
                //     case isset($utilisateur):
                //         $choice = include '../src/components/utilisateur-list.php';
                //         break;
                //     case isset($article):
                //         $choice = include '../src/components/article-list.php';
                //         break;
                //     default:
                //         $choice = "error";
                //         break;
                // }
            ?>
        </div>
        <div class="affichage">
            <?php
                if(isset($_POST['update-index'])){
                    $choice = include '../src/components/admin/update-index.php';
                }elseif(isset($_POST['update-contact'])){
                    $choice = include '../src/components/admin/update-contact.php';
                }elseif(isset($_POST['utilisateur-list'])){
                    $choice = include '../src/components/admin/utilisateur-list.php';
                }elseif(isset($_POST['article-list'])){
                    $choice = include '../src/components/admin/article-list.php';
                }else{
                    $choice = include '../src/components/admin/update-index.php';
                }
            ?>
            <?php $choice ?>
        </div>
    </div>

    <?php include '../src/components/footer.php';?>
</body>
</html>