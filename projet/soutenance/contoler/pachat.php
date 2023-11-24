<?php

	require '../model/model.php';

   

   $rechere=$_SESSION['id_util'];
 
    $table = 'article,paiment';
    $field = '*';
    $sfield1 = 'article.id_art';
    $sfield2 = 'paiment.id_art';
    $sfield3 = 'paiment.id_util';
    $data = array($rechere);

    $database = new Model();
    $re = $database -> afficherjont($table, $field, $sfield1, $sfield2, $sfield3, $data);
    
  
 


?>
