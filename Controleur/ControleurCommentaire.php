<?php
require_once 'Modele/ModeleCommentaire.php';
require_once 'Controleur/ControleurBillet.php';
require_once 'Controleur/Controleur.php';

class ControleurCommentaire extends Controleur
{
    private $modeleCommentaire;
    private $ctrlBillet;
    
    public function __construct($ctrl)
    {
        $this->modeleCommentaire = new ModeleCommentaire();
        $this->ctrlBillet = $ctrl;
    }
    
    public function EnregistrerCommentaire($auteur, $contenu, $id_bil)
    {
        $this->modeleCommentaire->EnregistrerCommentaire($auteur, $contenu, $id_bil);
        $billet = $this->ctrlBillet->getModeleBillet()->lireUnSeul($id_bil);
        $commentaires = $this->modeleCommentaire->lire($id_bil);
        $this->genererVue('detailBillet', array('billet' => $billet, 'commentaires' => $commentaires));
    }
    
    public function getModeleCommentaire()
    {
        return $this->modeleCommentaire;
    }
}

?>
