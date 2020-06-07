<?php
require_once 'msqlcon.php';


$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];
$checbox=$_POST['szkolenie'];
        $db = new DbConnect;
        $conn = $db->connect();

if($checbox==1)
{
    $sql="INSERT INTO pracownik(id, Imie, Nazwisko, test) VALUES ('','$imie','$nazwisko','$checbox')";
   // $stmt= $pdo->prepare($sql);
    $conn->exec($sql);
        header('Location: index.php');
     // } else {
      //  echo "Error: " . $sql . "<br>" . $conn->error;
      //}
      
      
}
else
{
    $sql="INSERT INTO pracownik(id, Imie, Nazwisko, test) VALUES ('','$imie','$nazwisko','0')";
   $conn->exec($sql);
            header('Location: index.php');

      
      
}
?>