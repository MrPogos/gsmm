<?php  
require_once 'msqlcon.php';

        function loadosoba($zid) {
        $db = new DbConnect;
        $conn = $db->connect();

        $stmt = $conn->prepare("SELECT * FROM pracownik WHERE id=$zid ORDER BY id");
   $stmt->execute();
        $pracownik = $stmt->fetchAll();
        return $pracownik;
      
    } 
?>  