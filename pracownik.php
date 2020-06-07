<?php
if($page=="pracownik"){
    if (isset($_GET['pid']))
    {
        $pid=filter_var($_GET['pid'], FILTER_SANITIZE_STRING);
       
       if (!empty($pid))
      {
          require_once 'zabez.php';
          $allowed_pages_vol2=zabez($_GET['pid']);
          if (!in_array($pid, $allowed_pages_vol2[0]))
          {
           echo "Taka strona nie istni   eje";
          }
           else
          {
include'osoba.php';
          }
      }
   }

}
?>