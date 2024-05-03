<?php
namespace TP7\Service;
require_once 'model/model.php';
use TP7\Model\UserController; // Utiliser le bon chemin vers la classe UserController
use TP7\Security\Utils; // Ajouter l'utilisation du namespace TP7\Security

class MainService {
    private $db; 

    public function __construct() {
        $this->db = new UserController();
    }
   
    public function handleDashboardAction(){
        include_once 'templates/dashboard.php';
    }
    public function handleRegisterAction() {
        $model = new UserController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve form data
            $nom = $this->sanitizeInput($_POST['nom']);
            $prenom = $this->sanitizeInput($_POST['prenom']);
            $adresse = $this->sanitizeInput($_POST['adresse']);
            $email = $this->sanitizeInput($_POST['email']);
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirm_password'];
    
            // Validate form data
            $errors = $this->validateRegistrationForm($nom, $prenom, $adresse, $email, $password, $confirmPassword);
    
            if (!empty($errors)) {
                $data['errors'] = $errors;
                include_once 'templates/register.php';
            } else {
                // Pass the database instance to the registerUser method
                $error = $model::registerUser($this->db, $nom, $prenom, $adresse, $email, $password, $confirmPassword);
    
                if ($error === true) {
                    header("Location: index.php?action=login");
                    exit();
                } else {
                    $data['error'] = $error;
                    include_once 'templates/register.php';
                }
            }
        } else {
            include_once 'templates/register.php';
        }
    }

    public function handleLoginAction() {
        $model = new UserController();
        // Traitement de la connexion
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Vérifier le jeton CSRF ici avant d'appeler loginUser
           // functions\verifyCsrfToken();
    
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $password = $_POST['password'];
    
            $error = $model::loginUser($this->db, $email, $password);
    
            if($error === true){
                header("Location: index.php?action=dashboard");
                exit();
            } else {
                include_once 'templates/login.php';
            }
        } else {
            include_once 'templates/login.php';
        }
    }

    public function handleUpdateAction() {
        $model = new UserController();
        // Traitement de la mise à jour du profil
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $this->verifyCsrfToken();
    
            $id = $_SESSION['user_id'];
            $nom = $this->sanitizeInput($_POST['nom']);
            $prenom = $this->sanitizeInput($_POST['prenom']);
            $adresse = $this->sanitizeInput($_POST['adresse']);
            $email = $this->sanitizeInput($_POST['email']);
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirm_password'];
    
            $errors = $this->validateRegistrationForm($nom, $prenom, $adresse, $email, $password, $confirmPassword);
    
            if (!empty($errors)) {
                $data['errors'] = $errors;
                include_once 'templates/update.php';
            } else {
    
                $error = $model::updateUserInfo($this->db,$id, $nom, $prenom,$adresse, $email, $password, $confirmPassword);
    
                if ($error === true) {
                    header("Location: index.php?action=dashboard");
                    exit();
                } else {
                    include_once 'templates/update.php';
                }
            }
    
        } else {
            include_once 'templates/update.php';
        }
    }

    public function handleCloseAction() {
        $model = new UserController();
        // Traitement de la fermeture de compte
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_SESSION['user_id'];
    
            $this->verifyCsrfToken();
    
            $model::closeAccount($this->db, $id);
    
            session_destroy();
    
            header("Location: index.php");
            exit();
        }
    }

    public function handleLogoutAction() {
        // Détruire la session
    session_destroy();

    // Rediriger vers la page d'accueil
    header("Location: index.php");
    exit();
    }
    public function handleHomeAction() {
        include_once 'templates/home.php';

    }
   
    public static function sanitizeInput($input) {
        return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    }

    public static function verifyCsrfToken() {
        if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            throw new \Exception("Erreur CSRF token. Les jetons ne correspondent pas.");
        }
    }

    public static function generateCsrfToken() {
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }

        return $_SESSION['csrf_token'];
    }

    public static function validateRegistrationForm($nom, $prenom, $adresse, $email, $password, $confirmPassword) {
        $errors = [];

        // Validation du nom et prénom (autorise uniquement les lettres et les espaces)
        if (!preg_match("/^[a-zA-Z\sàáâãäåèéêëìíîïòóôõöùúûüýÿç']+$/", $nom)) {
            $errors['nom'] = "Le nom n'est pas valide.";
        }

        if (!preg_match("/^[a-zA-Z\sàáâãäåèéêëìíîïòóôõöùúûüýÿç']+$/", $prenom)) {
            $errors['prenom'] = "Le prénom n'est pas valide.";
        }

        // Validation de l'adresse (autorise les lettres, les chiffres, les espaces et les caractères spéciaux courants)
        if (!preg_match("/^[a-zA-Z0-9\sàáâãäåèéêëìíîïòóôõöùúûüýÿç'-.,]+$/", $adresse)) {
            $errors['adresse'] = "L'adresse n'est pas valide.";
        }

        // Validation de l'email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "L'adresse email n'est pas valide.";
        }

        // Validation du mot de passe
        if (strlen($password) < 8 || !preg_match("/[A-Z]/", $password) || !preg_match("/[0-9]/", $password)) {
            $errors['password'] = "Le mot de passe doit avoir au moins 8 caractères, une majuscule et un chiffre.";
        }

        // Validation de la confirmation du mot de passe
        if ($password !== $confirmPassword) {
            $errors['confirm_password'] = "Les mots de passe ne correspondent pas.";
        }

        return $errors;
    }
}

?>