<?php
    require_once("env.php");
    try{
        $db = new PDO("mysql:host=$hostName;dbname=$dbName", $username, $pwd);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
        $db->beginTransaction();
        require_once("requests.php");
        $db->commit();
    }
    catch(PDOException $error){
        $db->rollBack();
        echo $error->getMessage();
    }
?>