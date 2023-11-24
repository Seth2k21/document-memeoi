<?php 
require '../model/model.php';


if (isset($_POST['modif'])) {
   
        

        $email=$_GET['key'];
        $code=htmlspecialchars($_POST['code']);
    

        $table2 = 'utilisateur';
        $field2 = 'mot_pass ';
        $sfield2 ='email';
        $values2 = array( sha1($code) , $email );
        
        $database = new Model();
        $database ->update($table2, $field2, $sfield2, $values2);
        
        echo "<script >
          alert('  Votre mot de passe a bien ete modifier '),
          window.location='connexion.php' ; 

          </script>";

}
 
 

?>