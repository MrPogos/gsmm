<?php  
require_once 'msqlcon.php';


        function zabez($zid) {
        $db = new DbConnect;
        $conn = $db->connect();

        $stmt = $conn->prepare("SELECT id FROM pracownik WHERE id=$zid ORDER BY id");
        $stmt->execute();
        $allowed_pages_vol2 = $stmt->fetchAll();
        return $allowed_pages_vol2;
      
    } 
        ?> 