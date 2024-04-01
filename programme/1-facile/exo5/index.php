<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 5 : Boucle for"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$random = rand(5, 9); //5
echo "<h2>Voici la table de multiplication de $random : </h2>";
for ($i = 1; $i <= 9; $i++) {
 echo $random . " * " . $i . " = " . ($random * $i) . "<br />";
}

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>
