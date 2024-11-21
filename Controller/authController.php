<?php
session_start();
require_once '../Model/db.php';
require_once '../Model/userModel.php';

class AuthController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new userModel();
    }

    public function validarComando()
    {

        if ($_SERVER['REQUEST_METHOD'] ==  'POST') {
            $action = $_POST['action'];

            switch ($action) {
                case 'registrar':
                    $this->signUp();
                    break;
                case 'login':
                    $this->login();
                    break;
                default:
                    echo "accion no valida";
                    break;
            }
        }
    }

    // Procesar el inicio de sesión
    public function login()
    {
        $email = $_POST['txtEmail'];
        $password = $_POST['txtPassword'];
        $rol = $this->userModel->obtenerRolPorCorreo($email);
        if($rol == '1'){
            $_SESSION['admin'] = true;
        }

        $_SESSION['user_name'] = $this->userModel->obtenerNombrePorCorreo($email);
        $this->userModel->setCorreo($email);
        $this->userModel->setContraseña($password);

        $loguear = $this->userModel->loguearUsuario();
        if ($loguear) {
            // Guardar datos del usuario en la sesión
            $_SESSION['logedIn'] = true;
            $_SESSION['user_name'] = $this->userModel->obtenerNombrePorCorreo($email);
            $_SESSION['usuario_correo'] = $this->userModel->getCorreo();

            echo "<script>
                window.location.href = '../index.php';
            </script>";

        } else {
            $_SESSION['logIn_error'] = true;
            echo "<script>
                window.location.href = '../layout/logIn.php';
            </script>";
        }
    }

    // Procesar el registro de usuario
    public function signUp()
    {

        $username = $_POST['txtName'];
        $email = $_POST['txtEmail'];
        $password = $_POST['txtPassword'];

        $this->userModel->setNombre($username);
        $this->userModel->setCorreo($email);
        $this->userModel->setContraseña($password);

        if ($this->userModel->registrarUsuario()) {
            $_SESSION['signIn_success'] = true;
            echo "<script>
                window.location.href = '../layout/logIn.php'</script>";

        } else {
            $_SESSION['signIn_error'] = true;
            echo "<script>
                window.location.href = '../layout/signUp.php'</script>";
        }
    }
}

$authController = new AuthController();
$authController->validarComando();
