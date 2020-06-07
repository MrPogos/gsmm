<div  class="pracownikna ">
  <a class="text-white bg-dark">Pracownicy</a>
  <a class="kolor" href="?page=nowypracownik">Dodaj pracownika</a>
  </div>
  <?php  

require_once 'pracownicyload.php';
$pracownicy=pracownikload();

    foreach ($pracownicy as $pracown) {
        ?>  
        <div class="col-sm">  
        <?php
    echo '<a href="' . htmlspecialchars("?page=pracownik&pid=" .
        urlencode($pracown['id'])) . '">'."\n";
?>
         <h3 class="page-header" style="background-color:cadetblue" align="center" ><?php echo $pracown['id']." ".$pracown['Imie']."<br>".$pracown['Nazwisko'].'</h3>'; ?>
          <img src="jpg/user-256.jpg" class="img-rounded"  width="250px" height="250px" /> </a>
            
            </div>         
        <?php
      }

?>  
