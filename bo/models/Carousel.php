<?php
namespace models;

class Carousel extends \app\Model{
	public function __construct()
	{
	    // Nous définissons la table par défaut de ce modèle
	    $this->table = "humour";

    	// Nous ouvrons la connexion à la base de données
    	$this->getConnection();
	}

}
?>
