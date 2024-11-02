<?php
require_once '../Model/userModel.php';

if($_SERVER['REQUEST_METHOD'] ==  'POST') {
    $action = $_POST['action'];

    switch ($action) {
        case 'registrar':
            registrar();
            break;
        case 'login':
            login();
            break;
        default:
            echo "accion no valida";
            break;
    }
}


function registrar () {
    $username = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPassword'];

    // instancia UserModel

    $user = new UserModel();

    // define los datos para registrar un usuario

    $user->setNombre($username);
    $user->setCorreo($email);
    $user->setContraseña($password);


    $user->registrarUsuario();

    echo "usuario registrado";
}

function login(){
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPassword'];

    $user = new UserModel();

    $user->setCorreo($email);
    $user->setContraseña($password);

    if($user->LoguearUsuario()){
        echo "usuario logueado";
        return;
    }
    echo "usuario no encontrado";
}


