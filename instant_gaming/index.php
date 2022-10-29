<?php 
    include './server.config.php'; 
    session_start();
    
    $_SESSION['imgName'] = "9034.jpg";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instant Gaming</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
        <?php 
            include_once './src/components/header.php';
            include_once 'src/components/menu.php';
            include_once 'src/components/menu_deroulant/menu_default.php';
            
            // switch ($_GET) {
            //     case isset($_GET['menu_deroulant']):
            //         $menu = include_once 'src/components/menu_deroulant/menu_default.php';
            //         break;
                
            //     default:
            //         $menu = "error";
            //         break;
            // }
            
            // $menu;
            
        ?>
            <div class="img-form">
                <img src="./public/assets/<?= $_SESSION["imgName"]?>" alt="pc">
            </div>

            <div class="content_index">
                <div class="tendance">
                    <div class=screen-title>
                        <h1>Tendances</h1>
                        <button name="voirTendances">Tout voir</button>
                    </div>
                    <div class="tendance-content">
                        <?php
                            $tendances = $bdd->query('SELECT * FROM liste_game');

                            for ($i=0; $i < 4 ; $i++) {
                                foreach ($tendances as $tendance) {
                                        
                                    echo '<div class="card">';
                                    echo '<div class="gameImg"><img src="./public/games/'.$tendance['image'].'" width="100%" height="100%" alt="game"></div>';
                                    echo '<div class="name-price"><span>'.$tendance['name'].'</span><span>'.$tendance['price'].'€</span></div>';
                                    echo '</div>';
                                    
                                }
                            }
                        ?>
                    </div>
                
            

                    <div class="precommande">
                        <div class=screen-title><h1>Precommandes</h1> <button name="voirPrecommandes">Tout voir</button></div>
                            <?php 
                                // foreach ($precommandes as $precommande => $value) {
                                //     echo '<div class="precommande-item">';
                                //     echo '<img src="'.$value['image'].'" alt="image">';
                                //     echo '<h2>'.$value['nom'].'</h2>';
                                //     echo '<p>'.$value['description'].'</p>';
                                //     echo '<p>'.$value['prix'].'€</p>';
                                //     echo '<button name="ajouterPanier">Ajouter au panier</button>';
                                //     echo '</div>';
                                // }
                                echo "zoulette";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once './src/components/footer.php';
        ?>
        <script src="./script/menu.js"></script>
</body>
</html>