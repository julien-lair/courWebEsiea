<?php
    if (!isset($_SESSION['user_id'])) {
        header("Location: index.php");
        exit();
    }

    $userInfo = getUserInfos($_SESSION['user_id']);
?>

<main>
    <section>
      <div class="compte update">
        <h1>Modifier mes informations</h1>
        <form action="index.php?action=update" method="post">
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" value="<?= functions\sanitizeInput($userInfo['nom']); ?>" required>
            <?php if (isset($data['errors']['nom'])) : ?>
            <?php endif; ?>
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" value="<?= functions\sanitizeInput($userInfo['prenom']); ?>" required>
            <?php if (isset($data['errors']['prenom'])) : ?>
            <?php endif; ?>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?= functions\sanitizeInput($userInfo['adresse_mail']); ?>" required>
            <?php if (isset($data['errors']['email'])) : ?>
            <?php endif; ?>
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required>
            <?php if (isset($data['errors']['password'])) : ?>
            <?php endif; ?>
            <?php
            if (isset($error) ) {
                echo $error;
            }
            if (isset($_GET["error"]) ) {
                echo $_GET["error"];
            }
            ?>
            <button type="submit">Envoyer</button>
        </form>
      </div>
    </section>
</main>
