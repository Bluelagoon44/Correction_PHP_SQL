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

    if(isset($_POST["delete"])){
        $userToDeleteRequest = $db->prepare("DELETE FROM user WHERE id=:id");
        $userToDeleteRequest->execute([
            ":id"=>$_POST["delete"]
        ]);
    }

    if(isset($_POST["update"])){
        $userToUpdateRequest = $db->prepare("SELECT * FROM user WHERE id=:id");
        $userToUpdateRequest->bindParam(":id",$id);
        $id = $_POST["update"];
        $userToUpdateRequest->execute();
        $user = $userToUpdateRequest->fetch();
    }
    else{
        $usersRequest = $db->query("SELECT * from user");
        $users = $usersRequest->fetchAll();
    }

    if(isset($_POST["confirmUpdate"])){
        $userToConfirmUpdateRequest = $db->prepare("UPDATE user SET firstName=:firstName, lastName=:lastName, mail=:mail, zipCode=:zipCode WHERE id=:id");
        $userToConfirmUpdateRequest->execute([
            ":id" => $_POST["confirmUpdate"],
            ":firstName" => $_POST["firstName"],
            ":lastName"=> $_POST["lastName"],
            ":mail"=> $_POST["mail"],
            ":zipCode"=> $_POST["zipCode"]
        ]);
        header("Location:./index.php");
    }
?>