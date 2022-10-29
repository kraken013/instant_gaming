<?php 

// toutes les functions se trouve dans ce fichier
$bdd = new PDO(
        'mysql:host=localhost;
        dbname=mydb;
        charset=utf8',
        'root',
        ''
    );

// function de tri de liste_game par prix croissant ou decroissant ou popularité
