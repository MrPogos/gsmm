<?php  
require_once 'msqlcon.php';

        function loadczesc() {
        $db = new DbConnect;
        $conn = $db->connect();
        $stmt = $conn->prepare("SELECT * FROM część ORDER BY id");
        $stmt->execute();
        $typczesci = $stmt->fetchAll();
        return $typczesci;
    }

?>  