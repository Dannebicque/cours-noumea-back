<?php
namespace controllers;

class Login extends \app\Controller{
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

    public function connexion()
    {
        $login = $_POST['login'];
        $password = $_POST['password'];

        //on charge le modèle Utilisateurs
        $this->loadModel('Utilisateurs');

        //on récupère l'utilisateur en fonction de son login
        $user = $this->Utilisateurs->findByLogin($login);

        if ($user !== null) {
            if (password_verify($password, $user['password'])) {
                //mot de passe OK
                $_SESSION['LOGIN'] = $user['login'];

                header('Location: /');
            } else {
                //Erreur de mot de passe
                header('Location: /login?message="Erreur de mot de passe"');
            }
        } else {
            //pas d'utilisateur trouvé...
            header('Location: /login?message="Utilisateur inconnu"');
        }
    }

    public function deconnexion()
    {
        session_destroy();
        //unset($_SESSION['LOGIN']);
        header('Location: /');
    }
}

?>
