<?php 


if (isset($_POST['livre'])) {
          $database = new Model();
        
        $vender=htmlspecialchars($_POST['vendeur']);
        $solde=htmlspecialchars($_POST['prix']);

        $table4 = 'utilisateur';
        $field4 = 'solde_pasif ';
        $sfield4 ='id_util';
        $values4 = array( $vender );


        $hold=$database ->afficherou($table4, $field4, $sfield4, $values4);

        foreach ($hold as $data) {
                $holdsolde['solde_pasif'] = $data['solde_pasif'];
                
            }


        $table5 = 'utilisateur';
        $field5 = 'solde_dispo ';
        $sfield5 ='id_util';
        $values5 = array( $vender );


        $hold2=$database ->afficherou($table5, $field5, $sfield5, $values5);

        foreach ($hold2 as $data2) {
                $holdsolde2['solde_dispo'] = $data2['solde_dispo'];
                
            }

        
        
       
        $Sousolde=  $holdsolde['solde_pasif'] - $solde;

        $Addsolde=  $holdsolde2['solde_dispo']  + $solde;
       

        $table2 = 'utilisateur';
        $field2 = 'solde_pasif ';
        $sfield2 ='id_util';
        $values2 = array($Sousolde, $vender );
        

        $database ->update($table2, $field2, $sfield2, $values2);

        $table6 = 'utilisateur';
        $field6 = 'solde_dispo ';
        $sfield6 ='id_util';
        $values6 = array($Addsolde, $vender );
        

        $database ->update($table6, $field6, $sfield6, $values6);

        
        
            

//$username=htmlspecialchars($_POST['transaction-status']);
 
}
 
 

?>