<div class="col">
 <a href="?page=nowyprzedmiot" class="kolor">Dodaj Przedmiot</a>
  </div>
<?php
require_once 'msqlcon.php';
require_once 'model.php';
require_once 'typ.php';
require_once 'czesc.php';
?>
<table class="table" id="magazyn">
  <thead>
    <tr>
        <br>
      <th scope="col"class="text-white bg-dark">#</th>
      <th scope="col"class="text-white bg-dark">Nazwa</th>
      <th scope="col"class="text-white bg-dark">Typ</th>
      <th scope="col"class="text-white bg-dark">Cena</th>
      <th scope="col"class="text-white bg-dark">Stan</th>
    </tr>
  </thead>
  <tbody>
<?php
require_once 'magazynn.php';
$stan=loadamagazynczesci();
 foreach ($stan as $czesci) {
  if(($czesci['ID_część']==1)&&($czesci['uszkodzony']==1))
{
   include 'zbitkitabela.php';
  }
  }


?>