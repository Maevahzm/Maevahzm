<?php
    $notes=array("Jean"=>15,"Paul"=>17,"Marie"=>12,"David"=>12);
    echo "<table border=1>";
    echo "<tr><th>Etudiant</th><th>Note</th></tr>";
    foreach($notes as $cle => $valeur) {
        echo "<tr><td>$cle</td><td>$valeur</td></tr>";
    }
    echo "</table>";
?>