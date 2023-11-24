<?php 


if (isset($_POST['livre'])) {
   

       

        $database = new Model();

      	$article=htmlspecialchars($_POST['prod']);
      	$acheteur=$_SESSION['id_util'];

        $table3 = 'paiment';
        $field3 ='id_art';
        $sfield3 ='id_util';
        $values3 = array($article, $acheteur );
     
        $database ->deletdouble($table3, $field3,   $sfield3 , $values3);

        $table2 = 'article';
        
        $field2 ='id_art';
        $values2 = array($article);
     
        $vv=$database ->delet($table2, $field2,  $values2);

        var_dump($vv);
        var_dump($article);

        
 
}

?>