<?php
//utiliser pour toute intéraction avec la bdd
function dbConnect(){
    try{
      //on rentre les informations de connexion
      $host_name = 'localhost';
       $database = 'portofolio';
       $user_name = 'root';
       $password = 'root';
        $pdo = new PDO('mysql:host='.$host_name.';dbname='.$database.';charset=utf8', $user_name, $password);//connection à la bdd

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }catch(Exception $e){
        throw new Exception('Erreur lors de la connexion à la base de données : ' . $e->getMessage());
    }
}
function error_message($error,$anchor = ''){
  //fonctions qui permet de retourner sur une page et d'ajouter des informations dans l'URL en méthode GET.
  //cela permet d'afficher les erreurs souhaitez sur les pages
  header('Location: http://'.$_SERVER['HTTP_HOST'].'/portfolio/index.php?action='.$_GET['action'].'&error='.urlencode($error).''.$anchor);

  return;
}
function loginUser($email, $password) {
    $pdo = dbConnect();

    try {
        // Récupérer les informations de l'utilisateur (Requête préparée pour prévenir l'injection SQL)
        $stmt = $pdo->prepare("SELECT id, mot_de_passe FROM utilisateurs WHERE adresse_mail = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && $user['mot_de_passe'] == hash('sha512',$password)) {
            // Connexion réussie, stocker l'ID de l'utilisateur en session
            $_SESSION['user_id'] = $user['id'];

            // Rediriger vers la page de profil après la connexion réussie
            header("Location: index.php?action=dashboard");
            exit();
        } else {
            // Échec de connexion, afficher un message d'erreur
            error_message("Email ou mot de passe incorrect.");
        }
    } catch (PDOException $e) {
        throw new Exception("Erreur lors de la connexion de l'utilisateur : " . $e->getMessage());
    }
}

function registerUser($nom, $prenom, $email, $password) {
    $pdo = dbConnect();
    //role 0 = admin, 1 = modérateur, 2 = utilisateur
    $defaultRole = 2;
    // Vérifier le jeton CSRF
    functions\verifyCsrfToken();
    try {
        // Vérifier si l'email existe déjà (Prévention d'injection SQL)
        $stmt = $pdo->prepare("SELECT id FROM utilisateurs WHERE adresse_mail = ?");
        $stmt->execute([$email]);
        $existingUser = $stmt->fetch();

        if ($existingUser) {
            // L'email existe déjà, renvoyer une erreur
            return "email_exists";
        } else {
            // Enregistrement réussi
            $hashedPassword = hash('sha512',htmlspecialchars($password));
            $stmt = $pdo->prepare("INSERT INTO utilisateurs (nom, prenom, adresse_mail, mot_de_passe, role) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$nom, $prenom, $email, $hashedPassword, $defaultRole]);
            return true;
        }
    } catch (PDOException $e) {
        throw new Exception("Erreur lors de l'enregistrement de l'utilisateur : " . $e->getMessage());
    }
}


function getUserInfos($id) {
    $pdo = dbConnect();

    try {
        // Récupérer les informations de l'utilisateur par son ID (Requête préparée pour prévenir l'injection SQL)
        $stmt = $pdo->prepare("SELECT id, nom, prenom, adresse_mail FROM utilisateurs WHERE id = ?");
        $stmt->execute([$id]);
        $userInfo = $stmt->fetch();

        return $userInfo;
    } catch (PDOException $e) {
        throw new Exception("Erreur lors de la récupération des informations de l'utilisateur : " . $e->getMessage());
    }
}

function updateUserInfo($id, $nom, $prenom, $email, $password){
    $pdo = dbConnect();
    // Vérifier le jeton CSRF
    functions\verifyCsrfToken();

    $hashedPassword = hash('sha512',htmlspecialchars($password));
    try {
            $stmt = $pdo->prepare("UPDATE utilisateurs SET nom = ?, prenom = ?, adresse_mail = ?, mot_de_passe = ? WHERE id = ?");
            $stmt->execute([$nom, $prenom, $email, $hashedPassword, $id]);
            return true;

    } catch (PDOException $e) {
        throw new Exception("Erreur lors de la modification des informations de l'utilisateur : " . $e->getMessage());
    }

}

function closeAccount($id) {
    global $pdo;

    try {
        $pdo = dbConnect();

        if (!$pdo) {
            throw new Exception('Database connection failed.');
        }
        // Supprimer le compte de l'utilisateur (Requête préparée pour prévenir l'injection SQL)
        $stmt = $pdo->prepare("DELETE FROM utilisateurs WHERE id = ?");
        $stmt->execute([$id]);

        // Déconnecter l'utilisateur et rediriger vers la page d'accueil
        session_destroy();
        header("Location: index.php");
        exit();
    } catch (PDOException $e) {
        throw new Exception("Erreur lors de la fermeture du compte de l'utilisateur : " . $e->getMessage());
    }
}



 ?>
