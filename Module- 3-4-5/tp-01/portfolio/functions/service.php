<?php
//utiliser pour toutes les fonctions


function handleLoginAction() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Vérifier le jeton CSRF ici avant d'appeler loginUser
        functions\verifyCsrfToken();

        $email = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
        $password = $_POST['pass'];

        loginUser($email, $password);
    } else {
        include_once 'templates/login.php';
    }
}

function handleRegisterAction() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Vérifier le jeton CSRF
        functions\verifyCsrfToken();

        // Récupérer les données du formulaire
        $nom = functions\sanitizeInput($_POST['nom']);
        $prenom = functions\sanitizeInput($_POST['prenom']);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = $_POST['mdp'];


        // Valider le formulaire
        $errors = functions\validateRegistrationForm($nom, $prenom, $email, $password);

        // Si des erreurs sont présentes, afficher le formulaire avec les erreurs
        if (!empty($errors)) {
            // Ajouter les erreurs au tableau de données pour les afficher dans le formulaire
            error_message($errors);
            include_once 'templates/login.php';
        } else {
            // Appeler la fonction pour enregistrer l'utilisateur
            $error = registerUser($nom, $prenom, $email, $password);

            // Si l'enregistrement est réussi, rediriger vers la page de connexion
            if ($error === true) {
                header("Location: index.php?action=login");
                exit();
            } else {
                // En cas d'erreur, afficher le message d'erreur sur la page d'inscription
                // Ajouter le message d'erreur au tableau de données pour l'afficher dans le formulaire
                error_message($error);
                include_once 'templates/login.php';
            }
        }
    } else {
        // Afficher le formulaire d'inscription si la requête n'est pas de type POST
        include_once 'templates/login.php';
    }
}

function handleUpdateAction() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        \functions\verifyCsrfToken();

        $id = $_SESSION['user_id'];
        $nom = functions\sanitizeInput($_POST['nom']);
        $prenom = functions\sanitizeInput($_POST['prenom']);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'];

        $errors = functions\validateRegistrationForm($nom, $prenom, $email, $password);

        if (!empty($errors)) {
            error_message($errors);
            include_once 'templates/update.php';
        } else {

            $error = updateUserInfo($id, $nom, $prenom, $email, $password);

            if ($error === true) {
                header("Location: index.php?action=dashboard");
                exit();
            } else {
                error_message($error);
                include_once 'templates/update.php';
            }
        }

    } else {
        include_once 'templates/update.php';
    }
}

function handleCloseAction() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_SESSION['user_id'];

        functions\verifyCsrfToken();

        closeAccount($id);

        session_destroy();

        header("Location: index.php");
        exit();
    }
}

function handleLogoutAction() {
    // Détruire la session
    session_destroy();

    // Rediriger vers la page d'accueil
    header("Location: index.php");
    exit();
}
function handleMailAction(){
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $id = $_SESSION['user_id'];

      functions\verifyCsrfToken();

      $objet = functions\sanitizeInput($_POST['objet']);
      $message = functions\sanitizeInput($_POST['message']);

      if(!empty($objet)){
        if(!empty($message)){
          sendMail($objet,$message);
          header("Location: index.php");
        }else{
          error_message("Veuillez renseigner un message","#contact");
        }
      }else{
        error_message("Veuillez renseigner un objet","#contact");
      }




      exit();
  }
}

function sendMail($objet,$message){
  //fonctions pour envoyer un email
  $headers = 'From: portfolio@julien.fr' . "\r\n" .
   'Reply-To: portfolio@julien.fr' . "\r\n" .
   'X-Mailer: PHP/' . phpversion();
    mail("jlair@et.esiea.fr", $objet, $message, $headers);//on envoie le mail

}

 ?>
