<?php 
session_start();

            header('Location: ../index.php?name='.$_SESSION['nom_util']);

?>