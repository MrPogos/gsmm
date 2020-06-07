       <tr>
      <th scope="row"class="text-white bg-dark"><?php echo $czesci['id']?></th>
      <td class="text-white bg-dark"><?php 
      //foreach ($stan as $czesci) {
      require_once 'producent.php';
      require_once 'model.php';
      require_once 'typ.php';
      $producenci=producent();
      $modell=loadmodel();
      $typ=loadtyp();
     //var_dump($modell);
     // foreach ($producenci as $producent) {
        //if($producent[0][$czesci['ID_model']]==$czesci['ID_model']){
      echo $producenci[$modell[$czesci['ID_model']-1][1]-1][1]." ".$modell[$czesci['ID_model']-1][2];
      ?></td>
      <td class="text-white bg-dark"><?php echo $typ[$czesci['ID_TYP']-1][1]
      ?></td>
      <td class="text-white bg-dark"><?php if($czesci["cena"]==0)
      {
echo " ";
      }else{echo $czesci["cena"];}?>
      </td>
      <td class="text-white bg-dark"><?php if($czesci["pobrany"]==0)
      {
echo "Na magazynie";
      }else{echo "pobrany";}?></td>
    </tr>