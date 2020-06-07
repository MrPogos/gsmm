<?php
require_once 'msqlcon.php';

        function loadamagazynczesci() {
        $db = new DbConnect;
        $conn = $db->connect();

        $stmt = $conn->prepare("SELECT * FROM magazyn_czesci ORDER BY id ");
        $stmt->execute();
        $magazynczesci = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $magazynczesci;
    }
?>