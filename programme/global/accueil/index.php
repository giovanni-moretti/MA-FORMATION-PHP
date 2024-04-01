<?php ob_start(); ?>

<!-- mettre ici le code -->

<?php
$titre   = "Formation PHP en 30 exercices";
$content = ob_get_clean();
require "../common/template.php";
?>
