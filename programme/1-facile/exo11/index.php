<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 11 : Les tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$hommes = ['Matthieu','Pierre','Marc','Jean'];
for($i=0 ; $i < count($hommes) ; $i++){
    echo $i . " : ". $hommes[$i]. '<br />';
}
echo "--------------------- <br />";
$femmes = [];
$femmes[] = "Morgane";
$femmes[] = "Mathilde";
$femmes[] = "Julie";

foreach($femmes as $indice => $femme){
    echo $indice . " : " . $femme . "<br />";
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
