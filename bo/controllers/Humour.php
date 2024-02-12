<?php
namespace controllers;

class Humour extends \app\Controller {
    /**
     * Cette méthode affiche la liste des articles
     *
     * @return void
     */
    public function index(){
    	// On instancie le modèle "Article"
    	$this->loadModel('Carousel');

    	// On stocke la liste des articles dans $articles
    	$carousels = $this->Carousel->getAll();

    	// On affiche les données
    	//var_dump($articles);

	    // On envoie les données à la vue index
	    $this->render('index', compact('carousels'));    
	}

}
?>