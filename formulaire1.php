<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<center><h1>Inscription</h1></center><br>";
    ?>
    <form name= "f1" action= "cond.php" method="GET">
        <p>Nom : <input name="nom" type="text" size="20" maxlength="30"></p>
        <p>Prénom : <input name="prenom" type="text" size="20" min="1000
        " maxlength="30"></p>
        <p>année de naissance : <input name="annee" type="number" size="5" maxlength="2023"></p>
        <p>Sexe : <input name="sexe" type="radio" name="sexe" value="F">F <input type="radio" name="s_sexe" value="M">M </p>
        <center><input type="submit" value="valider"><input type="reset">
    </form>
</body>
</html> 