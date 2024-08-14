<?php
    $note=$_GET['note'];
    If ($note<0) 
    echo ('Erreur');
    elseif ($note<12)
    echo ('Echec');
    elseif ($note<14)
     echo('Mention assez-bien');
    elseif ($note<16)
    echo('Mention bien');
    elseif ($note<18)
    echo('Mention très bien');
    elseif ($note<20)
    echo('Mention excellent');
    else
    echo ('Echec');
?>