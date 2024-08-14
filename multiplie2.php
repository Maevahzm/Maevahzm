<?php
    $nombre=$_GET['nombre'];
    echo "Table de multiplication par ".$nombre;
    For($i=0;$i<=10;$i++) {
        $result=$nombre*$i;
        echo $nombre." x ".$i." = ".$result."<br>";
    }
?>