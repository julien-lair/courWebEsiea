<div class="inlineCreation">
  <div class="login">
    <p class="title">Se connecter</p>
    <form class="" action="index.php?action=login" method="post">

      <?php if (isset($_SESSION['csrf_token'])) : ?>

      <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

      <?php else : ?>
          <?php $_SESSION['csrf_token'] = functions\generateCsrfToken(); ?>
          <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

      <?php endif; ?>

      <label for="mail">Email</label>
      <input type="text" name="mail" value="">
      <label for="pass">Mot de passe</label>
      <input type="password" name="pass" value="">
      <input type="submit" name="connection" value="Se connecter">

    </form>
  </div>
  <div class="separator">

  </div>
  <div class="register">
    <p class="title">Créer un compte</p>
    <form class="" action="index.php?action=register" method="post">
      <?php if (isset($_SESSION['csrf_token'])) : ?>

      <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

      <?php else : ?>
          <?php $_SESSION['csrf_token'] = functions\generateCsrfToken(); ?>
          <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

      <?php endif; ?>
      <div class="align">
        <div>
          <label for="nom">Nom</label>
          <input type="text" name="nom" value="">
        </div>
        <div>
          <label for="prenom">Prénom</label>
          <input type="text" name="prenom" value="">
        </div>
      </div>
      <div class="align">
        <div>
          <label for="email">Email</label>
          <input type="mail" name="email" value="">
        </div>
        <div>
          <label for="mdp">Mot de passe</label>
          <input type="password" name="mdp" value="">
        </div>
      </div>

      <input type="submit" name="creation" value="Créer un compte">

    </form>
  </div>
</div>
  <p class="error centertext"><?php if(isset($_GET["error"])){

    $erreur = htmlspecialchars($_GET["error"]);
    $erreurs = explode(".",$erreur);
    for ($i=0; $i < count($erreurs); $i++) {
      echo $erreurs[$i]."<br>";
    }
  }?></p>
