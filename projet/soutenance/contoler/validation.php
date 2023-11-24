<?php


       
require '../model/model.php';

if(isset($_POST['poster'])){

   $user=$_SESSION['id_util'];
   $adress=htmlspecialchars($_POST['adress']);
   $num=htmlspecialchars($_POST['num']);
   $img1="";
   $tt= time();
$database = new Model(); 



if ($_FILES['image']['name']) {
            

            $imgname1=$tt."".$_FILES['image']['name'];
            $imgtmp1=$_FILES['image']['tmp_name'];
            $imgdes1='../files/'.$imgname1;
           

            if (move_uploaded_file($imgtmp1 ,$imgdes1)) {
                $img1=$imgdes1;
            }
}





        $table3 = 'utilisateur';
        $field3 = 'adress_resid ';
        $sfield3 ='id_util';
        $values3 = array($adress, $user );
        

        $database ->update($table3, $field3, $sfield3, $values3);

        $table4 = 'utilisateur';
        $field4 = 'num_card ';
        $sfield4 ='id_util';
        $values4 = array($num, $user );
        

        $database ->update($table4, $field4, $sfield4, $values4);

        $table5 = 'utilisateur';
        $field5 = 'photo_card ';
        $sfield5 ='id_util';
        $values5 = array($img1, $user );
        

        $database ->update($table5, $field5, $sfield5, $values5);


        echo "<script >
          alert(' SUCEES '),
          window.location='Profile.php' ; 

          </script>";
  
  
}

?>