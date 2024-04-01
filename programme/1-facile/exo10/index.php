<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 10 : Fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$monMot = "Coucou";
$monMotSansVoyelle = supprimerVoyelle($monMot);

echo "$monMot sans voyelle est $monMotSansVoyelle";

function supprimerVoyelle($mot){
    $voyelle = ["a","e","i","o","u","y"];
    $resultat = str_replace($voyelle,"",$mot);
    return $resultat;
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
