<?php


if (isset($_POST['detail'])) {

	require '../model/model.php';

   

   $article=$_POST['art'];
   $vendeur=$_POST['vendeur'];

   
 
    $table = 'article';
    $field = '*';
    $sfield = 'id_art';

    $data = array($article);

    $database = new Model();
    $re = $database -> afficherou($table, $field, $sfield, $data); 

    $table1 = 'utilisateur';
    $field1 = '*';
    $sfield1 = 'id_util';

    $data1 = array($vendeur);

    $database = new Model();
    $re1 = $database -> afficherou($table1, $field1, $sfield1, $data1); 


}




?>