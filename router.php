<?php

require_once './app/models/login.model.php';
require_once './app/controllers/login.controller.php';

$controller = new login_controller();

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    case '':
        $controller->login();
        break;

    case 'login':
        $controller->home();
        break;

    default:
        // Acción no válida, puedes mostrar un error o redirigir a una página de error
        break;
}