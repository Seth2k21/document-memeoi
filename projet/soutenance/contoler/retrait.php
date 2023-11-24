<?php


require '../model/model.php';



if(isset($_POST['retirer'])){

  $solde=$_SESSION['solde_dispo'];
  $statut=$_SESSION['statut'];
  $montant=htmlspecialchars($_POST['prix']);
  $methode=htmlspecialchars($_POST['type']);
  $numero=htmlspecialchars($_POST['num']);

if ($statut== "Valider") {
 

if ( $montant <= $solde ) {
  // code...

      
   $user=$_SESSION['id_util'];

  
      $table = 'transaction';
      $field = 'methode, numero, montant ,id_util ';
      $values = '?,?,?,?';
      $data = array($methode, $numero, $montant, $user );

      $database = new Model();
      

      $cc =$database -> add($table, $field, $values, $data);

     echo "<script >
          alert(' SUCEES '),
          window.location='Profile.php' ; 

          </script>";
     

        }else{
      echo "<script >
          alert(' solde inssufisant '),
          window.location='retrait.php' ; 

          </script>";
    }

    } else{
      echo "<script >
          alert(' Veillez validez votre compte '),
          window.location='retrait.php' ; 

          </script>";
    }
    
  }
 

else {
  //echo '<script>alert("Tous les champs sont requis.")</script>';
}

    



?>