<?php 
require_once 'msqlcon.php';

    if(isset($_POST['aid'])) {
        $db = new DbConnect;
        $conn = $db->connect();
        $stmt = $conn->prepare("SELECT * FROM model WHERE Producent = " . $_POST['aid']." ORDER BY Nazwa ASC" );
        $stmt->execute();
        $models = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($models);
    }

    function producent() {
        $db = new DbConnect;
        $conn = $db->connect();

        $stmt = $conn->prepare("SELECT * FROM producent ORDER BY Producent");
        $stmt->execute();
        $producentt = $stmt->fetchAll();
        return $producentt;
    }

 ?>