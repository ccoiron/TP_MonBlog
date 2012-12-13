<?php

abstract class Controleur
{
    protected function genererVue($vue, $donnees)
    {
        $fichierVue = "Vue/$vue.php";
        if(file_exists($fichierVue))
        {
            extract($donnees);
            require $fichierVue;
        }
        else
        {
            throw new Exception("Fichier $fichierVue non trouvé");
        }
    }
    protected function afficherErreur($msg)
    {
        require 'Vue/erreur.php';
    }
}

?>
