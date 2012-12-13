<?php $titre = 'Mon Blog' ?>

<?php ob_start() ?>
<p>Une erreur est survenue : <?= $msg ?></p>
<?php $contenu = ob_get_clean() ?>
<?php require 'gabarit.php' ?>

