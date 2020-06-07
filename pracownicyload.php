<?php  
require_once 'msqlcon.php';

        function pracownikload() {
        $db = new DbConnect;
        $conn = $db->connect();

        $stmt = $conn->prepare("SELECT * FROM pracownik ORDER BY id");
        $stmt->execute();
        $pracownicy = $stmt->fetchAll();
        return $pracownicy;
      
    } 
?>  