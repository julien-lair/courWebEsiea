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
<main>
    <section class="align">
      <div class="part1">
        <h1>Vos informations</h1>
        <!-- Afficher les informations de l'utilisateur connecté -->
        <?php
            // Récupérer l'ID de l'utilisateur à partir de la session ou d'une autre source
            $userID = $_SESSION['user_id'];
            // Appeler la fonction getUserInfos pour obtenir les informations de l'utilisateur
            $userInfo = getUserInfos($userID);
            // Utiliser les informations récupérées
            echo "Nom: " . $userInfo['nom'];
            echo "<br>Prénom: " . $userInfo['prenom'];
            echo "<br>Adresse: " . $userInfo['adresse'];
            echo "<br>Email: " . $userInfo['email'];
        ?>
        <form action="index.php?action=close" method="post">
            <input type="hidden" name="csrf_token" value="<?= functions\sanitizeInput($_SESSION['csrf_token']); ?>">
            <button class="close-button" type="submit" name="delete_user">Supprimer mon compte</button>
        </form>
      </div>
        <div class="part2">
          <h1>Météo actuelle</h1>
          <div class="meteo">
            <img id="imgMeteo" src="" alt="">
            <p id="meteoTemp"></p>
          </div>

        </div>





        <!--Supprimer le compte -->

    </section>
</main>

<?php
include_once 'templates/parts/footer.php';
?>
<script type="text/javascript">
  getMeteo("<?php echo $userInfo['adresse']?>");
</script>
