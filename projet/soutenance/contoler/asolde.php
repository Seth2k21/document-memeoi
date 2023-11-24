<?php 


if (isset($_POST['field'])) {
   if($_POST['transaction-status'] == "approved" ){
        $database = new Model();
        $vender=htmlspecialchars($_POST['vendeur']);
        $prix=htmlspecialchars($_POST['prix']);

        $solde = $prix - ($prix * 0.05 );
        
        $table4 = 'utilisateur';
        $field4 = 'solde_pasif ';
        $sfield4 ='id_util';
        $values4 = array( $vender );


        $hold=$database ->afficherou($table4, $field4, $sfield4, $values4);

        foreach ($hold as $data) {
                $holdsolde['solde_pasif'] = $data['solde_pasif'];
                
            }

        
        
    
        $Addsolde=  $holdsolde['solde_pasif'] + $solde ;
        
        
        $table2 = 'utilisateur';
        $field2 = 'solde_pasif ';
        $sfield2 ='id_util';
        $values2 = array($Addsolde, $vender );
        

        $tp=$database ->update($table2, $field2, $sfield2, $values2);


         echo "<script >
          window.location='nice.php' ; 

          </script>";

        
       
        
        
           }

//$username=htmlspecialchars($_POST['transaction-status']);
 
}
 
 

?>