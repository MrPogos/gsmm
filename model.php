<?php  
require_once 'msqlcon.php';

        function loadmodel() {
        $db = new DbConnect;
        $conn = $db->connect();

        $stmt = $conn->prepare("SELECT * FROM model ORDER BY Nazwa ");
        $stmt->execute();
        $model = $stmt->fetchAll();
        return $model;
    }
?>  

