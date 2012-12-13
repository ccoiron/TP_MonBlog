<?php
require_once 'Modele/ModeleBillet.php';
require_once 'Controleur/Controleur.php';

class ControleurBillet extends Controleur
{
    private $modeleBillet;
    private $ctrlCommentaire;
    
    public function __construct()
    {
        $this->modeleBillet = new ModeleBillet();
        $this->ctrlCommentaire = new ControleurCommentaire($this);
    }
    
    public function getModeleBillet()
    {
        return $this->modeleBillet;
    }
    
    public function listerBillets()
    {
        $billets = $this->modeleBillet->lireTout();
        $this->genererVue('listeBillets', array('billets' => $billets));
    }

    public function afficherBillet($id)
    {
        $billet = $this->modeleBillet->lireUnSeul($id);
        $commentaires = $this->ctrlCommentaire->getModeleCommentaire("modeleCommentaire")->lire($id);
        require 'Vue/detailBillet.php';
    }
}

?>
