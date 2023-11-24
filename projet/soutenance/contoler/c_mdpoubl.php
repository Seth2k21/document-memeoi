<?php

session_start();   
require '../model/model.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once '../asset/bat/Exception.php';
require_once '../asset/bat/SMTP.php';
require_once '../asset/bat/PHPMailer.php';



if(isset($_POST['valider'])){


   $email=htmlspecialchars($_POST['email']);

          $table = 'utilisateur';
          $field = '*';
          $sfield ='email';
          
          $values = '?';
          $data = array( $email);

         $database = new Model();
         $database -> afficherou($table, $field, $sfield, $data);
         $existe = $database -> afficherou($table, $field, $sfield, $data)->fetch();
         

   if ($existe) {

   

    try 
    {
         // Paramètres du serveur SMTP Gmail
     $mail = new PHPMailer();
     $mail->isSMTP();
     $mail->Host = 'smtp.gmail.com';
     $mail->SMTPAuth = true;
     $mail->Username = 'benjaminleroux60@gmail.com';
     $mail->Password = 'engdxtexmfsdcgdz'; 
     $mail->SMTPSecure = 'tls';
     $mail->Port = 587;

     // Destinataire, expéditeur, objet et corps du message
     $mail->setFrom("benjaminleroux60@gmail.com");
     $mail->addAddress($email);
  
     $mail->Subject = 'Modifier votre mot de passe';
   
     $mail->Body .= "Pour modifier votre mot de passe , cliquez sur le lien ci-dessous :\n";
     $mail->Body .= "http://127.0.0.1:3000/view/mdpemail.php?key=".$email."\n\n";
     $mail->Body .= "Cordialement,\nL'équipe de EZpalce";

     // Envoi du message
    

   
    if(!$mail->send()) {

    echo 'Mailer Error: ' . $mail->ErrorInfo;
    } 
    else {
    
    }

    echo "<script >
    alert('  Un mail vous a ete envoyer merci de verifier vos mails  '),
    window.location='connexion.php' ; 

    </script>";     

    } 
    catch (Exception $e) 
    {
        
    }

    
           
           

         } else {
           
            echo '<script>alert("Cette adresse email n\'est pas enregistrer  ")</script>';

  }
}



?>