<?php

session_start();   
require '../model/model.php';



if(isset($_POST['valider'])){

   $username=htmlspecialchars($_POST['nom']);
   $email=htmlspecialchars($_POST['email']);
   $password=htmlspecialchars($_POST['code']);
   $numero=htmlspecialchars($_POST['num']);
   $confirm_password=htmlspecialchars($_POST['codef']);
   $admin = "1";

          $table = 'utilisateur';
          $field = '*';
          $sfield ='email';
          
          $values = '?';
          $data = array( $email);

         $database = new Model();
         $database -> afficherou($table, $field, $sfield, $data);
         $existe = $database -> afficherou($table, $field, $sfield, $data)->fetch();
         

   if ($existe) {
           
           echo '<script>alert("Cette adresse email existe deja")</script>';

         } else {
           
         
               

   if($password === $confirm_password) {
      $table = 'utilisateur';
      $field = 'nom_util,tel ,email, mot_pass ,id_admin';
      $values = '?,?,?,?,?';
      $data = array($username,$numero ,$email, sha1($password), 1  );

      $database = new Model();
      

      $cc =$database -> add($table, $field, $values, $data);



      echo "<script >
          alert(' SUCEES '),
          window.location='connexion.php' ; 

          </script>";
     
        }
    else {
        echo '<script>alert("Les mots de passe ne sont pas identiques")</script>';
    }

  }
}



?>