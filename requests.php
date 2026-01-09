<?php
    if(isset($_POST["create"])){
        $createUserRequest = $db->prepare('INSERT INTO user(lastName, firstName, mail, zipCode) VALUES (:lastName,:firstName,:mail,:zipCode)');
        // Attribution des variables aux données en attente
        $createUserRequest->bindParam(":lastName", $lastName);
        $createUserRequest->bindParam(":firstName", $firstName);
        $createUserRequest->bindParam(":mail", $mail);
        $createUserRequest->bindParam(":zipCode", $zipCode);
        // Création des variables
        $lastName = $_POST["lastName"];
        $firstName = $_POST["firstName"];
        $mail = $_POST["mail"];
        $zipCode = $_POST["zipCode"];
        // Exécution de la requête
        $createUserRequest->execute();
    }

    $usersRequest = $db->query("SELECT * from user");
    $users = $usersRequest->fetchAll();
?>