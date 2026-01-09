<?php
    $usersRequest = $db->query("SELECT * from user");
    $users = $usersRequest->fetchAll();
?>