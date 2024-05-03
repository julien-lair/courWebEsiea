<?php
namespace TP7\Controller;

use TP7\Service\MainService;

class MainController {
    protected $mainService;

    public function __construct() {
        $this->mainService = new MainService();
    }



    public function UserController() {
        try {
            // Démarrer la session si elle n'est pas déjà active
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

            // Vérifier la protection CSRF pour toutes les actions POST
            

            // Traiter l'action demandée
            $action = $_GET['action'] ?? '';
            switch ($action) {
                case 'register':
                    $this->mainService->handleRegisterAction();
                    break;
                case 'login':
                    $this->mainService->handleLoginAction();
                    break;
                case 'dashboard':
                    $this->mainService->handleDashboardAction();
                    break;
                case 'update':
                    $this->mainService->handleUpdateAction();
                    break;
                case 'close':
                    $this->mainService->handleCloseAction();
                    break;
                case 'logout':
                    $this->mainService->handleLogoutAction();
                    break;
                default:
                    $this->mainService->handleHomeAction();
                    break;
            }
        } catch (Exception $e) {
            // Gérer les erreurs
            $error_message = $e->getMessage();
            require_once 'templates/error.php';
        }
    }
}
?>
