<?php

if (session_status() == PHP_SESSION_NONE) {
   session_start();
}
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Portfolio Julien LAIR</title>
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <header>
      <h1><a href="index.php">&lt;Julien LAIR&gt;</a></h1>
      <div class="menu">
        <p><a href="index.php#">A Propos</a></p>
        <p><a href="index.php#projets">Projets</a></p>
        <p><a href="index.php#contact">Contact</a></p>

        <?php
        //si l'utilisateur est connecté on affiche d'autres informations dans le header
        if(isset($_SESSION['user_id'])){
          //on est connecter
          echo '<p><a href="index.php?action=dashboard">Mon compte</a></p>';
        }else{
          echo '<p><a href="index.php?action=loginPage">Se connecter</a></p>';
        }
         ?>

      </div>
    </header>
