<?php

require '../model/model.php';


if ((isset($_POST['connextion']))) {
    
    if (isset($_POST['email']) && isset($_POST['pass'])  ) {
        $email = htmlspecialchars($_POST['email']);
        $pass = htmlspecialchars($_POST['pass']);
        
          $table = 'administrateur';
          $field = '*';
          $sfield1 ='email';
          $sfield2 ='mot_pass'; 
          $values = '?,?';
          $data = array( $email, $pass);

         $database = new Model();
         $database -> afficherand($table, $field, $sfield1, $sfield2, $data);

         $existe = $database -> afficherand($table, $field, $sfield1, $sfield2, $data);

         if ($existe) {
            foreach ($existe as $data) {
               
                $_SESSION['email'] = $data['email'];
              
            }

            header('Location: interface_admin.php?name='.$_SESSION['nom_util']);
        }else{
            echo    "MOT DE PASSE OU NOM INCORECT";
        }
        
        
      

    }
    

  
}




?>