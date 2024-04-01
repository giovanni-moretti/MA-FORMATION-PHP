<?php ob_start(); //NE PAS MODIFIER 
$titre = "exo 16 : Tableau de tableaux assoficatifs"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
    $j1 = [
        "nom" => "Matthieu",
        "age" => 30,
        "sexe" => true
    ];
    $j2 = [
        "nom" => "Marie",
        "age" => 32,
        "sexe" => false
    ];
    $j3 = [
        "nom" => "Marc",
        "age" => 25,
        "sexe" => true
    ];
    $j4 = [
        "nom" => "Mathilde",
        "age" => 21,
        "sexe" => false
    ];
    $joueurs = [$j1,$j2,$j3,$j4];
    foreach($joueurs as $joueur){
        afficherJoueur($joueur);
        echo "------------------------ <br />";
    }

    function afficherJoueur($joueur){
        echo "Nom : " . $joueur["nom"] . "<br />";
        echo "age : " . $joueur["age"] . "<br />";
        if($joueur["sexe"]){
            echo "sexe : Homme <br />";
        } else {
            echo "sexe : Femme  <br />";
        }
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
