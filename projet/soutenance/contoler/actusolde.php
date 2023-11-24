<?php 
require '../model/model.php';
 $email = $_SESSION['email'];
     
        
          $table = 'utilisateur';
          $field = '*';
          $sfield ='email';
       
          $data = array( $email);

         $database = new Model();
        

         $existe = $database -> afficherou($table, $field, $sfield, $data);


        if ($existe) {
            foreach ($existe as $data) {
             
                $_SESSION['solde_pasif'] = $data['solde_pasif'];
                $_SESSION['solde_dispo'] = $data['solde_dispo'];
            }	

        }

        


?>