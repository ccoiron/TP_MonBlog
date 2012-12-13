<?php
$titre = "MonBlog";

ob_start();
foreach ($billets as $ligne):
?>
<article>
    <header>
        <?php $lien = "index.php?action=afficherBillet&id=" . $ligne['BIL_ID']; ?>
        <h1 class="titreBillet"> <?= '<a id="lien" href="' . $lien . '">' .  $ligne['BIL_TITRE'] . '</a>'; ?> </h1>
        <time> <?= $ligne['BIL_DATE']; ?> </time>
    </header>
<p> <?= $ligne['BIL_CONTENU']; ?> </p>
<p class="commentaire"> <?=  $ligne['nbComs'] . " commentaire(s)"?></p>
<hr />
</article>

<?php
endforeach;
$contenu = ob_get_clean();
require('gabarit.php');
?>