<?php

abstract class Modele
{
    private $bdd;
    
    private function getBDD()
    {
        if($this->bdd === NULL)
        {
            $this->bdd = new PDO('mysql:host=localhost;dbname=monblog', 'root', '');
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->bdd->query('set names utf8');
        }
        return $this->bdd;
    }
    protected function executerLecture($sql, $accederPremierElement = FALSE)
    {
        $resultats = $this->getBDD()->query($sql);
        if($accederPremierElement)
        {
            return $resultats->fetch();
        }
        else
        {
            return $resultats;
        }
    }
    protected function exectuerInsertion($sql)
    {
        $this->getBDD()->query($sql);
    }
}
?>
