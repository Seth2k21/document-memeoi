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
     $mail->addAddress("benjaminleroux60@gmail.com");
  
     $mail->Subject = 'message';
   
     $mail->Body .= "Nom:".$email."\n";
     $mail->Body .= "Email:".$email."\n";
     $mail->Body .= "Numero:".$email."\n";
     $mail->Body .= "message:".$email."\n";
  

     // Envoi du message
    

   
    if(!$mail->send()) {

    echo 'Mailer Error: ' . $mail->ErrorInfo;
    } 
    else {
         echo "<script >
    alert('   Votre message a ete envoyer'),
    window.location='Profile.php' ; 

    </script>"; 
    
    }

       

    } 
    catch (Exception $e) 
    {
        
    }

    
           
           

  
}



?>