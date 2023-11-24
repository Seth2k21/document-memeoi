<?php

	require '../model/model.php';


 
    $table = 'utilisateur';
    $field = '*';
  
    $database = new Model();
    $re = $database -> afficher($table, $field);

    if (isset($_POST['admin'])) {
 

        $user=$_POST['user'];
        
        $statut="Non valider";


        $database = new Model();
        

        $table2 = 'utilisateur';
        $field2 = 'statut ';
        $sfield2 ='id_util';
        $values2 = array($statut, $user );
        

        $database ->update($table2, $field2, $sfield2, $values2);

        header("location: interface_admin.php");
        
            


 
}

?>