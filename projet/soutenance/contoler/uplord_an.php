<?php

       
require '../model/model.php';




if(isset($_POST['poster'])){

   /*

$imgname1=$_FILES['image']['name'][0];
$imgname2=$_FILES['image']['name'][1];
$imgname3=$_FILES['image']['name'][2];
$imgname4=$_FILES['image']['name'][3];

*/

if ($_FILES['image']['name'][0]) {

            $imgname1=$_FILES['image']['name'][0];
            $imgtmp1=$_FILES['image']['tmp_name'][0];
            $imgdes1='../files/'.$imgname1;
           

            if (move_uploaded_file($imgtmp1 ,$imgdes1)) {
                $table = 'article';
                $field = 'img1';
                $values = '?';
                $data = array($imgdes1);

                $database = new Model();
                $database -> add($table, $field, $values, $data);
               
            }
}

if ($_FILES['image']['name'][1]) {

            $imgname2=$_FILES['image']['name'][1];
            $imgtmp2=$_FILES['image']['tmp_name'][1];
            $imgdes2='../files/'.$imgname2;
           

            if (move_uploaded_file($imgtmp2 ,$imgdes2)) {
                $table = 'article';
                $field = 'img2';
                $values = '?';
                $data = array($imgdes2);

                $database = new Model();
                $database -> add($table, $field, $values, $data);
               
            }
}

if ($_FILES['image']['name'][2]) {

            $imgname3=$_FILES['image']['name'][2];
            $imgtmp3=$_FILES['image']['tmp_name'][2];
            $imgdes3='../files/'.$imgname1;
           

            if (move_uploaded_file($imgtmp3 ,$imgdes3)) {
                $table = 'article';
                $field = 'img1';
                $values = '?';
                $data = array($imgdes3);

                $database = new Model();
                $database -> add($table, $field, $values, $data);
               
            }
}

if ($_FILES['image']['name'][3]) {

            $imgname4=$_FILES['image']['name'][3];
            $imgtmp4=$_FILES['image']['tmp_name'][3];
            $imgdes4='../files/'.$imgname4;
           

            if (move_uploaded_file($imgtmp1 ,$imgdes4)) {
                $table = 'article';
                $field = 'img1';
                $values = '?';
                $data = array($imgdes4);

                $database = new Model();
                $database -> add($table, $field, $values, $data);
               
            }
}




  
  
}

?>