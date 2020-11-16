﻿<?php
  include("./exit.php");
php?>

<!doctype html>
<html>
  <head>
    <title>Page de test d'écriture en base de données</title>
    <meta charset="UTF-8">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="robots" content="noindex" />
    <link rel="icon" href="/Images/favicon.ico" />
    <link href="/style.css" rel="stylesheet" media="all" type="text/css">
  </head>
  <body>
    <?php

      // Définition des variables de connexion à la base MySQL:
      $host="********";
      $username_to_db="********";
      $password_to_db="********";
      $database_name="********";
      $table="********";

      // Connexion et sélection de la base
      $link = mysql_connect($host, $username_to_db, $password_to_db) or die ('Impossible de se connecter. ' . mysql_error());
      echo 'Connected successfully to write some datas.';
      mysql_select_db ($database_name) or die ('Impossible de sélectionner la base de données');

      // Exécution des requêtes SQL
      $query = "INSERT INTO `" . $database_name . "`.`" . $table . "` (`key` ,`data1`, `data2`) VALUES (NULL, 'écriture en base de données 1', 'écriture en base de données 2');";
      $result = mysql_query($query) or die('Echec de la requête : ' . mysql_error());

      // Fermeture de la connexion
      mysql_close($link);

    php?>
    <p class=src><a href="/FichiersTexte/dataToDB.txt">source de la page php</a></p>
  </body>
</html>
