
       <tr>
      <th scope="row"class="text-white bg-dark"><?php echo "$id"?></th>
      <td class="text-white bg-dark"><?php echo $czesc[$ID_część]." ".$model[$ID_model];?></td>
      <td class="text-white bg-dark"><?php echo $typ[$ID_TYP]?></td>
      <td class="text-white bg-dark"><?php if($cena==0)
      {
echo " ";
      }else{echo $cena;}?>
      </td>
      <td class="text-white bg-dark"><?php if($pobrany==0)
      {
echo "Na magazynie";
      }else{echo "pobrany";}?></td>
    </tr>