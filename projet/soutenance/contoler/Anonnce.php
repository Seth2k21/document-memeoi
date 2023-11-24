<?php

       
require '../model/model.php';


    $table = 'categorie';
    $field = '*';
  

    $database = new Model();
    $se = $database -> afficher($table, $field);


if(isset($_POST['poster'])){

   $nom=htmlspecialchars($_POST['nom']);
   $prix=htmlspecialchars($_POST['prix']);
   $description=htmlspecialchars($_POST['description']);
   $etat=htmlspecialchars($_POST['etat']);
   $position=htmlspecialchars($_POST['position']);
   $cat=htmlspecialchars($_POST['cat']);
   $user=$_SESSION['id_util'];
   $cat= htmlspecialchars($_POST['cat']);
   $img1="";
   $img2="";
   $img3="";
   $img4="";
   $tt= time();





if ($_FILES['image']['name'][0]) {

            $imgname1=$tt."".$_FILES['image']['name'][0];
            $imgtmp1=$_FILES['image']['tmp_name'][0];
            $imgdes1='../files/'.$imgname1;
           

            if (move_uploaded_file($imgtmp1 ,$imgdes1)) {
                $img1=$imgdes1;
            }
}

if ($_FILES['image']['name'][1]){

            $imgname2=$tt."".$_FILES['image']['name'][1];
            $imgtmp2=$_FILES['image']['tmp_name'][1];
            $imgdes2='../files/'.$imgname2;
           

            if (move_uploaded_file($imgtmp2 ,$imgdes2)) {
                $img2=$imgdes2;
            }
}

if ($_FILES['image']['name'][2]) {

            $imgname3=$tt."".$_FILES['image']['name'][2];
            $imgtmp3=$_FILES['image']['tmp_name'][2];
            $imgdes3='../files/'.$imgname3;
           

            if (move_uploaded_file($imgtmp3 ,$imgdes3)) {
                $img3=$imgdes3;
            }
}

if ($_FILES['image']['name'][3]) {

            $imgname4=$tt."".$_FILES['image']['name'][3];
            $imgtmp4=$_FILES['image']['tmp_name'][3];
            $imgdes4='../files/'.$imgname4;
           

            if (move_uploaded_file($imgtmp4 ,$imgdes4)) {
                $img4=$imgdes4;
            }
}





    $table = 'article';
    $field = 'nom, prix, description,etat,position,img1,img2,img3,img4,id_cat,id_util';
    $values = '?,?,?,?,?,?,?,?,?,?,?';
    $data = array($nom, $prix, $description, $etat, $position,$img1,$img2,$img3,$img4,$cat,$user);

    $database = new Model();
    $database -> add($table, $field, $values, $data);

     echo "<script >
          alert(' SUCEES '),
          window.location='Publication.php' ; 

          </script>";
  
  
}

?>