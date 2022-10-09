<?php
require_once ('app/views/viewAuth.php');
require_once ('app/models/modelUser.php');

class controllerAuth{
    private $view;
    private $model;

    public function __construct(){
        $this->model = new userModel();
        $this->view = new authView();
    }

    public function showLoginSite(){
        $this->view->showLogin();
    }

    /*Funcion para validar el login del usuario*/
    public function validateUser() {

        // toma los datos del form
        $email = $_POST['email'];
        $password = $_POST['password'];

        // busco el usuario por email
        $user = $this->model->getUserByEmail($email);

        // verifico que el usuario existe y que las contraseñas son iguales
        if ($user && password_verify($password, $user->password)) {

            // inicio una session para este usuario
            session_start();
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['IS_LOGGED'] = true;

            header("Location: " . BASE_URL . "gameList");
        } else {
            // si los datos son incorrectos muestro el form con un erro
           $this->view->showFormLogin("El usuario o la contraseña no existe.");
        } 
    }
    /*Funcion para desloguear al usuario*/
    public function logout(){
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
}