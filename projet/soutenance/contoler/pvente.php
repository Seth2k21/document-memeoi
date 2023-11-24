<?php

	require '../model/model.php';

   

   $rechere=$_SESSION['id_util'];
 
    $table = 'article';
    $field = '*';
    $sfield = 'id_util';
    $data = array($rechere);

    $database = new Model();
    $re = $database -> afficherou($table, $field, $sfield, $data);
  
  


?>