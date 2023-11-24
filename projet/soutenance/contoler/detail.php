<?php

require '../model/model.php';

if (isset($_POST['detail'])) {

   $article=$_POST['art'];
 
    $table = 'article';
    $field = '*';
    $sfield = 'id_art';

    $data = array($article);

    $database = new Model();
    $re = $database -> afficherou($table, $field, $sfield, $data);


}




?>