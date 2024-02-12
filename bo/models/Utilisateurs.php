<?php

namespace models;

class Utilisateurs extends \app\Model
{
    public function __construct()
    {
        // Nous définissons la table par défaut de ce modèle
        $this->table = "utilisateurs";

        // Nous ouvrons la connexion à la base de données
        $this->getConnection();
    }

    public function findByLogin($login)
    {
        $sql = "SELECT * FROM ".$this->table." WHERE `login`='".$login."'";
//        echo $sql;
//        die();
        $query = $this->_connexion->query($sql);

        return $query->fetch_assoc();
    }

    public function findByEmailOrLogin($email, $login)
    {
        $sql = "SELECT * FROM ".$this->table." WHERE email='".$email."' OR login='".$login."'";
        $query = $this->_connexion->query($sql);

        return $query->fetch_assoc();
    }

    public function insert($login, $email, $password)
    {
        $sql = "INSERT INTO ".$this->table." (login, email, password) VALUES ('".$login."', '".$email."', '".$password."')";
        $this->_connexion->query($sql);
    }
}
