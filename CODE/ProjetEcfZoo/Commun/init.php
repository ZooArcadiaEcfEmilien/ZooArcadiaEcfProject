<?php
    // Connexion
    //              Serveur local en dessous à la bdd zoo arcadia,   Créer un tableau de paramètre de classe / avoir des warning php-bdd en cas d'erreur / specifie language utf8
    $pdo = new PDO('mysql:host=localhost;dbname=zooarcadia','root','root', array(PDO::ATTR_ERRMODE=> PDO:: ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    var_dump($pdo);
