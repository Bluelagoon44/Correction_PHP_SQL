<?php
    require_once("db.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestion RH</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Mail</th>
                    <th>Code postal</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user){ ?>
                    <tr>
                        <td><?= $user["lastName"] ?></td>
                        <td><?= $user["firstName"] ?></td>
                        <td><?= $user["mail"] ?></td>
                        <td><?= $user["zipCode"] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>