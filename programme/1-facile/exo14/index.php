<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exercice 14 : Tableau de tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
  $notesMarc = [12,15,13,7,18];
  $notesMatthieu = [11,14,10,4,20,8,2];
  $notesPierre = [5,13,9,3];
  $notesPaul = [6,11,15,2];
  $notesEleves = [$notesMarc, $notesMatthieu, $notesPierre, $notesPaul];
  
  for($i=0; $i <= count($notesEleves) -1; $i++){
    echo "La moyenne des notes du $i eme élément est de <b>". calculerMoyenneEleve($notesEleves[$i])."</b><br />";
  }

  foreach($notesEleves as $index => $notes){
    echo "La moyenne des notes du $index eme élément est de <b>". calculerMoyenneEleve($notes)."</b><br />";
  }

  function calculerMoyenneEleve($notes){
      $resultat = 0;
      foreach($notes as $note){
          $resultat += $note;
      }
      return $resultat / count($notes);
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
