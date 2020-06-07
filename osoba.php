 <div >
  <div class="row">
    <div class="col">
    <?php
 $zid=$_GET['pid'];
    require_once 'loadosoba.php';
  $osoba=loadosoba($zid);
  //var_dump($osoba)
    ?>
    <br>
     <img src="jpg/user-256.jpg" class="img-rounded"  width="250px" height="250px" /><br>
  <h2><?php echo "ID-".$osoba[0]['id']?></h2><br>
  <h2><?php echo "Imie-".$osoba[0]['Imie']?></h2><br>
  <h2><?php echo "Nazwisko-".$osoba[0]['Nazwisko']?></h2><br>
    <?php

  if($osoba[0]['test']==1)
  {
    echo"<h2>Szkolenie</h2>"  ;
  }
  ?>
</div><div class="col-8">
     
</div>
</div>

