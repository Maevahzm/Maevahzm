<?php
    $nombre=$_GET['nombre'];
    $i=0;
    echo "Table de multiplication par ".$nombre;
    Do {
        $result=$nombre*$i;
        echo $nombre." x ".$i." = ".$result."<br>";
        $i++;
    }
    while($i<=10)
?>