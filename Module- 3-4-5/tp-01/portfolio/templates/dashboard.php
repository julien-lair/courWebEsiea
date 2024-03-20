<?php
// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
// Récupérer les informations de l'utilisateur connecté
$userInfo = getUserInfos($_SESSION['user_id']);
include_once 'templates/parts/header.php';
?>
<div class="compte">
  <h1>Mon compte</h1>
  <p><u>Vos informations</u></p><?php
  // Récupérer l'ID de l'utilisateur à partir de la session ou d'une autre source
  $userID = $_SESSION['user_id'];
  // Appeler la fonction getUserInfos pour obtenir les informations de l'utilisateur
  $userInfo = getUserInfos($userID);

   ?>
  <p>Nom : <?php echo $userInfo['nom']; ?></p>
  <p>Prénom : <?php echo $userInfo['prenom']; ?></p>
  <p>Email : <?php echo  $userInfo['adresse_mail'];?></p>
  <a href="index.php?action=update"><button class="boutton_modifier_info" type="button" name="button">Modifier vos informations</button></a>
  <form class="" action="index.php?action=deco" method="post">
    <input type="hidden" name="csrf_token" value="<?= functions\sanitizeInput($_SESSION['csrf_token']); ?>">
    <input type="submit" name="deconexion" value="Se déconnecter">
  </form>
  <form class="" action="index.php?action=close" method="post">
    <input type="hidden" name="csrf_token" value="<?= functions\sanitizeInput($_SESSION['csrf_token']); ?>">
    <input type="submit" class="inputDelete" name="deleteAccount" value="Supprimer mon compte">
  </form>
</div>
