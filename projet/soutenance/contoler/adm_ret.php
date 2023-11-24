<?php

	require '../model/model.php';


 
    
    $table = 'transaction';
    $field = '*';
    $sfield = 'statut';
    $data = array("En Attente");


    $database = new Model();
    $re = $database -> afficherou($table, $field, $sfield, $data);

    if (isset($_POST['admin'])) {
 

        $trans=$_POST['trans'];
        
        $statut="Payer";


        $database = new Model();
        

        $table2 = 'transaction';
        $field2 = 'statut';
        $sfield2 ='id_trans';
        $values2 = array($statut, $trans );
        

        $database ->update($table2, $field2, $sfield2, $values2);

//---------------------------------------------------------------------------------------------------

        $vender=$_SESSION['id_util'];
        $solde=htmlspecialchars($_POST['montant']);

        $table4 = 'utilisateur';
        $field4 = 'solde_dispo ';
        $sfield4 ='id_util';
        $values4 = array( $vender );


        $hold=$database ->afficherou($table4, $field4, $sfield4, $values4);

        foreach ($hold as $data) {
                $holdsolde['solde_dispo'] = $data['solde_dispo'];
                
            }

        
        
    
        $Addsolde=  $holdsolde['solde_dispo'] - $solde;
        
        
        $table2 = 'utilisateur';
        $field2 = 'solde_dispo ';
        $sfield2 ='id_util';
        $values2 = array($Addsolde, $vender );
        

        $tp=$database ->update($table2, $field2, $sfield2, $values2);


        header("location: retrait_admin.php");
        
            


 
}

?>