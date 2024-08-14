<?php
    Echo("<center><b>Merci pour l’enregistrement</b></center><br>") ;
    $nom=$_GET['nom'] ;
    $prenom=$_GET['prenom'] ;
    $annee=$_GET['annee'];
    $sexe=$_GET['sexe'];
    $age=2024-$annee;
    If($sexe=="F"){
        if($age < 12) 
            echo $prenom." ".$nom." est une fille,elle a ".$age."ans";
        elseif ($age<=17)
            echo $prenom." ".$nom." est une adolescente, elle a ".$age."ans";
        else
             echo $prenom." ".$nom." est une adulte, elle a ".$age."ans";
                
        }
    elseif($age<12) 
            echo $prenom." ".$nom." est un garçon, il a ".$age."ans";
            elseif($age<=17)
               echo $prenom." ".$nom." est un adolescent, il a ".$age."ans";
               else
                  echo $prenom." ".$nom." est un adulte, il a ".$age."ans";

?>