<?php
    require_once("db.php");
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form method="POST">
            <input type="text" name="lastName" placeholder="Nom" value="<?= $user["lastName"] ?>">
            <input type="text" name="firstName" placeholder="Prénom" value="<?= $user["firstName"] ?>">
            <input type="text" name="mail" placeholder="Mail" value="<?= $user["mail"] ?>">
            <input type="text" name="zipCode" placeholder="Code postal" value="<?= $user["zipCode"] ?>">
            <button name="confirmUpdate" value="<?= $user["id"] ?>">Modifier l'utilisateur</button>
        </form>
    </body>
</html>