<?php  
require_once 'msqlcon.php';

        function loadtyp() {
        $db = new DbConnect;
        $conn = $db->connect();

        $stmt = $conn->prepare("SELECT * FROM typ ORDER BY id");
        $stmt->execute();
        $typ = $stmt->fetchAll();
        return $typ;
      
    } 
?>  