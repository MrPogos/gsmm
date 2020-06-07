<br><br><br>
<?php
require_once 'msqlcon.php';
require_once 'model.php';
?>    <form action="dodajprzedmiot.php" method="post">
 <div class="formdodp">
  <div class="row">
    <div class="col">
    <label for="exampleFormControlSelect1">Rodzaj przedmiotu</label>
    <select class="form-control" id="typ_przedmiotu">
        <?php 
        require_once 'czesc.php';
        $czesc=loadczesc();
        foreach ($czesc as $czescc)
        echo '<option>'.$czescc['Typ'].'</option>';
        ?>
    </select>
    </div>
    <div class="col">
    <label for="exampleFormControlSelect1">Typ przedmiotu</label>
    <select class="form-control" id="typ_przedmiotu">
        <?php 
        require_once 'typ.php';
        $typy=loadtyp();
        foreach ($typy as $typ)
        echo '<option>'.$typ['nazwa_typu'].'</option>';
        ?>
    </select>
    </div>
    <div class="col">
    <label for="producent">producent telefonu</label>
    <select class="fstdropdown-select" id="producent" name="producent">
<option selected="" disabled="">producent</option>
     <?php 
        require_once 'producent.php';
        $producenci=producent();
        foreach ($producenci as $produc)
       // echo '<option>'.$produc['Producent'].'</option>';
        echo "<option id='".$produc['id']."' value='".$produc['id']."'>".$produc['Producent']."</option>";
        ?>
        <option value="other">Inny producent<textarea id="innyproducent"></textarea></option>
    </select><br>
    <label for="models">Model telefonu</label>
    <select class="form-control" id="models" name="models">
        <option value="other">Inny model<textarea id="innymodel"></textarea></option>
    </select>
    </div>
  </div>
       <div class="row">
       <div class="col">
      <select class = "fstdropdown-select"  id = "example">
  <option value = ""> Wybierz opcję </option>
   <?php require_once 'producent.php';
        $producenci=producent();
        foreach ($producenci as $produc)
    echo '<option  text-dark>'.$produc['Producent'].'</option>';?>
</select>
    </div>
    <div class="col">
    <button type="submit">Dodaj przedmiot</button><br><br><br>
    </div>
    <div class="col">
      3 of 3
    </div>
  </div><br><br><br><br><br><br><br>
    </div>
    </div>
</div>




</form>

