<?php

	require '../model/model.php';


 
    $table = 'utilisateur';
    $field = 'id_util,tel,adress_resid,num_card,photo_card';
    $sfield1="statut";
    $sfield2="num_card";
    $values=array("Non valider","Null" );


  
    $database = new Model();
    $re = $database ->  afficherandnot($table, $field, $sfield1, $sfield2, $values);

    if (isset($_POST['admin'])) {
 

        $user=$_POST['user'];
        
        $statut="Valider";


        $database = new Model();
        

        $table2 = 'utilisateur';
        $field2 = 'statut ';
        $sfield2 ='id_util';
        $values2 = array($statut, $user );
        

        $database ->update($table2, $field2, $sfield2, $values2);

        header("location: validation_admin.php");
        
            


 
}

?>