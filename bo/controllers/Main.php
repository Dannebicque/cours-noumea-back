<?php
namespace controllers;

class Main extends \app\Controller{
    /**
     * Cette méthode affiche la page principale
     *
     * @return void
     */
    public function index() {
		$this->render('index');
	}

	public function connexion() {
		$this->render('connexion');
	}

}

?>
