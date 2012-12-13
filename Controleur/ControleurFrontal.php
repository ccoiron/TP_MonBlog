<?php

require 'Controleur/ControleurBillet.php';
require 'Controleur/ControleurCommentaire.php';
require_once 'Controleur/Controleur.php';

class ControleurFrontal extends Controleur {

    private $ctrlBillet;
    private $ctrlCommentaire;

    public function __construct() {
        $this->ctrlBillet = new ControleurBillet();
        $this->ctrlCommentaire = new ControleurCommentaire($this->ctrlBillet);
    }

    public function routerRequete()
    {
        try
        {
            if (isset($_GET['action']))
            {
                if (isset($_GET['id']))
                {
                    if ($_GET['action'] == 'afficherBillet')
                    {
                        if ($_GET['id'] != 0)
                        {
                            $this->ctrlBillet->afficherBillet($_GET['id']);
                        }
                        else
                        {
                            throw new Exception("Identifiant du billet non valide");
                        }
                    }
                    elseif($_GET['action'] == 'ajoutCommentaire')
                    {
                        $this->ctrlCommentaire->EnregistrerCommentaire($_POST['pseudo'], $_POST['contenuCommentaire'],$_GET['id']);
                    }
                    else
                    {
                        throw new Exception("Action non valide");
                    }
                }
                else
                {
                    throw new Exception("Identifiant du billet non défini");
                }
            }
            else
            {
                $this->ctrlBillet->listerBillets();
            }
        }
        catch (Exception $ex)
        {
            $this->afficherErreur($ex->getMessage());
        }
    }
}

?>
