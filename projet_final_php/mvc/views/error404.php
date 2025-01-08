<?php ob_start(); ?>
<h2>Erreur 404</h2>
<p>La page demandée n'existe pas.</p>
<?php $content = ob_get_clean(); require 'layout.php'; ?>
