<?php
require_once 'Modele/Modele.php';

class ModeleBillet extends Modele
{
    public function lireTout()
    {
        $requete = "SELECT tb.BIL_ID,BIL_DATE,BIL_TITRE,BIL_CONTENU, COUNT(COM_ID) AS 'nbComs' FROM t_billet tb LEFT JOIN t_commentaire tc ON tb.BIL_ID = tc.BIL_ID GROUP BY tb.BIL_ID,BIL_DATE,BIL_TITRE,BIL_CONTENU ORDER BY BIL_ID desc";
        return $this->executerLecture($requete);
    }

    public function lireUnSeul($id_billet)
    {
        $requete = "SELECT * FROM t_billet WHERE BIL_ID =$id_billet";
        return $this->executerLecture($requete, TRUE);
    }
}
?>
