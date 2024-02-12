<?php
namespace controllers;

class Register extends \app\Controller{
    /**
     * Cette méthode affiche la page principale
     *
     * @return void
     */
    public function index(){
	    // On envoie les données à la vue index
	    $this->render('index', [
        ]);
	}

    public function inscription()
    {
        $login = $_POST['login'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];


        if ($password !== $password2) {
            $_SESSION['ERROR'] = 'Les mots de passe ne correspondent pas';
            header('location: /register');
            die();
        }

        $this->loadModel('Utilisateurs');
        $user = $this->Utilisateurs->findByEmailOrLogin($email, $login);

        if ($user !== null) {
            $_SESSION['ERROR'] = 'Login ou email déjà utilisé';
            //données déjà présentent
            header('location: /register');
            die();
        }

        $passwordCrypt = password_hash($password, PASSWORD_BCRYPT);
        $this->Utilisateurs->insert($login, $email, $passwordCrypt);
        // si on veut pré-connecter l'utilisateur
        // $_SESSION['LOGIN'] = $login;
        $this->render('inscription');
    }
}

?>
