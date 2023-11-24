<?php

       
require '../model/model.php';

 
    $table = 'article';
    $field = '*';
    $sfield = 'statut';
    $data = array("En vente");


    $database = new Model();
    $re = $database -> afficherour($table, $field, $sfield, $data);




if(isset($_POST['valider'])){

   $rechere=htmlspecialchars($_POST['rechere']);
 
    $table = 'article';
    $field = '*';
    $sfield = 'nom';
    $sfield1 = 'statut';
    $data = array($rechere , "En vente");

    $database = new Model();
    $re = $database -> afficherandr($table, $field, $sfield, $sfield1, $data);
   
  
  
}    

if(isset($_POST['Téléphone'])){

   $rechere="16";

    $table = 'article';
    $field = '*';
    $sfield = 'id_cat';
    $sfield1 = 'statut';
    $data = array($rechere , "En vente");

    $database = new Model();
    $re = $database -> afficherandr($table, $field, $sfield, $sfield1, $data);
  
  
}

if(isset($_POST['Immobilier'])){

   $rechere="12";

  $table = 'article';
    $field = '*';
    $sfield = 'id_cat';
    $sfield1 = 'statut';
    $data = array($rechere , "En vente");

    $database = new Model();
    $re = $database -> afficherandr($table, $field, $sfield, $sfield1, $data);
  
  
  
}

if(isset($_POST['Electronique'])){

   $rechere="11";

    $table = 'article';
    $field = '*';
    $sfield = 'id_cat';
    $sfield1 = 'statut';
    $data = array($rechere , "En vente");

    $database = new Model();
    $re = $database -> afficherandr($table, $field, $sfield, $sfield1, $data);
  
  
  
}

if(isset($_POST['Vehicule'])){

   $rechere="17";

    $table = 'article';
    $field = '*';
    $sfield = 'id_cat';
    $sfield1 = 'statut';
    $data = array($rechere , "En vente");

    $database = new Model();
    $re = $database -> afficherandr($table, $field, $sfield, $sfield1, $data);
  
  
  
}

if(isset($_POST['Electromenager'])){

   $rechere="9";

   $table = 'article';
    $field = '*';
    $sfield = 'id_cat';
    $sfield1 = 'statut';
    $data = array($rechere , "En vente");

    $database = new Model();
    $re = $database -> afficherandr($table, $field, $sfield, $sfield1, $data);
  
  
  
}

if(isset($_POST['Ameublement'])){

   $rechere="5";

   $table = 'article';
    $field = '*';
    $sfield = 'id_cat';
    $sfield1 = 'statut';
    $data = array($rechere , "En vente");

    $database = new Model();
    $re = $database -> afficherandr($table, $field, $sfield, $sfield1, $data);
  
  
  
}

?>