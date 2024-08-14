<?php
    $note=array("Jocelyne"=>13,"Eric"=>16,"Gaston"=>15);
    echo "<table border=1>";
    echo "<tr><th>Clé</th><th>Valeur</th></tr>";
    foreach($note as $cle => $valeur) {
        echo "<tr><td>$cle</td><td>$valeur</td></tr>";
    }
    echo "</table>";
?>

<hr>

<?php
    $note["Jean Paul"]=10;
?>