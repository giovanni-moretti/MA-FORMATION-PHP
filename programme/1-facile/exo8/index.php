<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 8 : La boucle while"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$random = rand(1,20);
$cpt = 1;
while($random < 15){
    echo "Essaie $cpt : $random est trop petit <br />";
    $random = rand(1,20);
    $cpt++;
}
echo "Le chiffre est supérieur à 15";

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
