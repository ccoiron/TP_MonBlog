<?php
$titre = $billet['BIL_TITRE'];
ob_start();
?>

<article>
    <header>
        <h1 class="titreBillet"> <?= $billet['BIL_TITRE']; ?> </h1>
        <time> <?= $billet['BIL_DATE']; ?> </time>
    </header>
    <p> <?= $billet['BIL_CONTENU']; ?> </p>
    <hr/>
    <h2 id="titreReponses"> Réponse à <?= $billet['BIL_TITRE']; ?> </h2>
    <p>
        <?php foreach ($commentaires as $commentaire): ?>
    <p><?= $commentaire['COM_AUTEUR'] ?> dit :</p>
    <p><?= $commentaire['COM_CONTENU'] ?></p>
<?php endforeach; ?>
    <hr/>
    <?php $lien="index.php?action=ajoutCommentaire&id=" . $billet['BIL_ID'] ?>
    <form method="POST" action="<?= $lien ?>">
        <input type="text" name="pseudo" placeholder="Vôtre pseudo" /> <br/>
        <textarea rows="6" cols="50" name="contenuCommentaire" placeholder="Vôtre commentaire"></textarea> <br/>
        <input type="submit" />
    </form>
</article>
<?php
$contenu = ob_get_clean();
require('gabarit.php');
?>
