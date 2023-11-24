<?php
session_start();
require '../model/model.php';


if ((isset($_POST['connextion']))) {
    
    if (isset($_POST['email']) && isset($_POST['code'])  ) {
        $email = htmlspecialchars($_POST['email']);
        $pass = htmlspecialchars($_POST['code']);
        
          $table = 'utilisateur';
          $field = '*';
          $sfield1 ='email';
          $sfield2 ='mot_pass'; 
          $values = '?,?';
          $data = array( $email, sha1($pass));

         $database = new Model();
         $database -> afficherand($table, $field, $sfield1, $sfield2, $data);

         $existe = $database -> afficherand($table, $field, $sfield1, $sfield2, $data);
         $existetry = $database -> afficherand($table, $field, $sfield1, $sfield2, $data)->fetch();


        if ($existetry) {
            foreach ($existe as $data) {
                $_SESSION['id_util'] = $data['id_util'];
                $_SESSION['nom_util'] = $data['nom_util'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['tel'] = $data['tel'];
                $_SESSION['solde_pasif'] = $data['solde_pasif'];
                $_SESSION['solde_dispo'] = $data['solde_dispo'];
                $_SESSION['statut'] = $data['statut'];
            }

            header('Location: ../index.php?name='.$_SESSION['nom_util']);
        }else{
            echo '<script>alert("MOT DE PASSE OU EMAIL INCORECT")</script>';
          
        }
        
        
      

    }
    

  


}


?>