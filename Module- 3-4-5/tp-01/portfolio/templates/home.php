<article id="a-propos">
  <p class="title">Bonjour je suis <span class="colorText">Julien LAIR</span>.<br>Je suis <span class="colorText">développeur mobile & web.</span></p>
  <button type="button" name="button"><a href="#projets">Voirs mes projets</a></button>
</article>

<img id="bg-svg" src="assets/img/bg.png" alt="">
<article id="projets">
  <p class="title">Mes réalisations</p>

  <div class="projet">
    <div class="align">
    <img src="assets/img/astero.png" alt="">
    <p class="titleProjet">Astero</p>
    </div>
    <div class="description">
      <p>Pour Astero j'ai eu l'occasion d'intégrer une API pour estimer les prix des biens immobilier grâce à un model d'IA.</p>
    </div>
  </div>

  <div class="projet type2">
    <div class="align">
    <img src="assets/img/athena.png" alt="">
    <p class="titleProjet">Athena</p>
    </div>
    <div class="description">
      <p>Souhaitant Toujours en apprendre plus, j'ai développer ma prmeière application IOS, Athena.<br>Athena est une application pour suivre ses séances de sports et les partager à ses amis.</p>
    </div>
  </div>

  <div class="projet">
    <div class="align">
    <img src="assets/img/hydroclean.png" alt="">
    <p class="titleProjet">Hydroclean</p>
    </div>
    <div class="description">
      <p>HydroClean m'a embauché pour créer un site de gestion de flottes de camions, un projet stimulant en tant que développeur.</p>
    </div>
  </div>

  <div class="projet type2">
    <div class="align">
    <img src="assets/img/laiko.jpeg" alt="">
    <p class="titleProjet">Laiko</p>
    </div>
    <div class="description">
      <p>LAIKO m'a embauché pour développer une partie de leur site web, une opportunité passionnante pour moi en tant que développeur.<br>J'ai pu mettre en place des pages analysant les statistiques de comptes publicitaire, système de création d'image en ligne ou encore un créateur de site web (comme WIX).</p>
    </div>
  </div>

  <div class="projet">
    <div class="align">
    <img src="assets/img/puissance4.png" alt="">
    <p class="titleProjet">Projet scolaire</p>
    </div>
    <div class="description">
      <p>Nous avons créé un jeu de puissance 4 avec une IA avancée en utilisant les compétences acquises en mathématiques et en informatique.</p>
    </div>
  </div>
</article>
<img id="bg-svg2" src="assets/img/bg2.png" alt="">
<?php if(isset($_SESSION['user_id'])){
  echo '  <article id="contact">
      <p class="title">Me contactez</p>
      <form class="formulaire" action="index.php?action=mail" method="post">
        <div class="labelInput taille-100">
          <label for="objet">Objet</label>
          <input type="text" name="objet" value="" placeholder="Objet de votre demande">
        </div>
        <div class="labelInput taille-100">
          <label for="message">Message</label>
          <textarea name="message" rows="8" cols="80"></textarea>
        </div>
        <input type="submit" name="sendMail" value="Envoyer"><p class="error">';
         if (isset($_SESSION['csrf_token'])){
           echo '<input type="hidden" name="csrf_token" value="'.$_SESSION['csrf_token'].'">';
         }else{
           $_SESSION['csrf_token'] = functions\generateCsrfToken();
           echo '<input type="hidden" name="csrf_token" value="'.$_SESSION['csrf_token'].'">';
         }


    if(isset($_GET["error"])){echo '<p class="informationMail">'.$_GET["error"].'</p>';}
    echo'
    </form>
    </article>';
  }else{
    echo '  <article id="contact" class="noConnecter">
        <p class="title">Me contactez</p>
        <div class="">
          <p>Vous devez être connecter pour envoyer un message</p>
          <button type="button" name="button"><a href="index.php?action=login">Vous connecter</a></button>
        </div>
      </article>';
  }
   ?>
