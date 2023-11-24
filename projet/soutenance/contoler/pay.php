
<?php 



if (isset($_POST['field'])) {
   if($_POST['transaction-status'] == "approved" ){

        $acheteur=$_SESSION['id_util'];
        $article=htmlspecialchars($_POST['prod']);
        $vendeur=htmlspecialchars($_POST['vendeur']);
        
        $table = 'paiment';
        $field = 'id_art, id_util, vendeur ';
        $values = '?,?,?';
        $data = array($article, $acheteur, $vendeur );

        $database = new Model();
        $cc =$database -> add($table, $field, $values, $data);

        $table2 = 'article';
        $field2 = 'statut ';
        $sfield2 ='id_art';
        $values2 = array('Acheter', $article );
        

        $database ->update($table2, $field2, $sfield2, $values2);
        
            }

//$username=htmlspecialchars($_POST['transaction-status']);
 
}
 
 

?>