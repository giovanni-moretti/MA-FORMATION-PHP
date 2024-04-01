<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exercice 18 : Méthode GET"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<form action ="" method="GET">
    <div class="form-group">
        <label>Pseudo : </label>
        <input type="text" name="pseudo" class="form-control">
    </div>
    <div class="form-group">
        <label>Age : </label>
        <input type="number" name="age" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary" value="Valider">
</form>

<?php 
if(
    isset($_GET['pseudo']) && !empty($_GET['pseudo']) && 
    isset($_GET['age']) && !empty($_GET['age'])
    ){
        echo $_GET['pseudo'] . " à ". $_GET['age']. " ans";
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
