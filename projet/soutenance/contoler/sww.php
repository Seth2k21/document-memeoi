<?php

if ( empty($_SESSION['email']) ) {

	
	
	echo "<script >
	alert(' CONNECTEZ VOUS D\'ABORD '),
	window.location='connexion.php' ; 


	</script>";

}


?>