<?php
require_once 'Modele/Modele.php';

class ModeleCommentaire extends Modele
{
    public function lire($id_billet)
    {
        $requete = "SELECT COM_AUTEUR,COM_CONTENU FROM t_commentaire WHERE BIL_ID =$id_billet";
        return $this->executerLecture($requete);
    }
    
    public function EnregistrerCommentaire($auteur, $contenu, $id_bil)
    {
        $date = date(DateTime::ISO8601);
        $requete = "INSERT INTO t_commentaire(COM_DATE,COM_AUTEUR,COM_CONTENU,BIL_ID) values('$date','$auteur','$contenu '," . $id_bil . ");";
        $this->exectuerInsertion($requete);
    }
}

?>
