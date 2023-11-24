<?php
session_start();
require_once('../contoler/detail_apv.php');


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="../asset/bootstraps/bootstrap.min.css">
	<link rel="stylesheet" href="../asset/bootstraps/bootstrap.min.css.map">
	<link rel="stylesheet" href="../asset/style.css">
</head>
<body>

<div class="container-fluide">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-4">
    <div class="container">
	<h4 class="titre  my-3"> EZplace</h4>
      <button class="navbar-toggler se-nav-bouton" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item mb-2">
            <a class="nav-link active me-4 btn btn-order se-nav-btn"   href="../index">Accueil</a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link active me-4 btn btn-order se-nav-btn"  href="Publication.php">Publier un article</a>
          </li>
         
          <li class="nav-item mb-2">
            <a class="nav-link active me-4 btn btn-order se-nav-btn"  href="Profile.php">Profil</a>
          </li>
         

        </ul>
      </div>
    </div>
  </nav>
</div>
<?php 

if (isset($_POST['detail'])) {
 ?>

<div class="container  se-pubform">
	<div class="mt-3">
		<div class="mb-3">
		<h2 class="justify-content-center d-flex ">Information après vente</h2>
		</div>

		<div class="row">

			<div class="col-3">
				
			</div>
			
		</div>
		<table class="table">
		  	  <tbody>
		  	  	<tr>
		  	  		<td>Nom:</td>
		  	  		<td>Prix:</td>
		  	  		<td>NOM du vendeur :</td>
		  	  		<td>Numero du vendeur:</td>
		  	  		
		  	  	</tr>
		  	 <?php

          
            foreach ($re as $donne) 
            {
           ?>  	
		  	  	
		    <tr>
		       
		      <td><?php echo $donne['nom'] ;  ?></td>
		      <td><?php echo $donne['prix'] ;  ?></td>

		     <?php
             }
                
    			?>
    			
    			<?php

          
            foreach ($re1 as $donne1) 
            {
           ?>  	 
		      <td><?php echo $donne1['nom_util'] ;  ?></td>
		      <td><?php echo $donne1['tel'] ;  ?></td>
		      

		      	 <?php
                }
                
    			  ?>

		     </tr>
		    
		  
		  

		    
		  </tbody>
		</table>

	</div>


</div>		

<?php

    } else{

?>


<div class="container  se-pubform">
	<div class="mt-3">
		<div class="mb-3">
		<h2 class="justify-content-center d-flex ">Information complete</h2>
		</div>

		
		<table class="table">
		  	  <tbody>
		  	  	<tr>
		  	  		<td>Nom:</td>
		  	  		<td>Prix:</td>
		  	  		<td>Description:</td>
		  	  		<td>Etat:</td>
		  	  		<td>Lieu:</td>
		  	  	</tr>
		  
		  

		    
		  </tbody>
		</table>

	</div>


</div>	
<?php 
		}
 ?>

 <footer class="container-fluid se-footer mt-3">
  

 <div class="row" >
  <h4 class="d-flex justify-content-center">© 2022 SE. All Rights Reserved.</h4>
 </div>
</footer >


<script src="asset/java.js"></script>
<script type="text/javascript" src="../asset/bootstraps/bootstrap.bundle.js"></script>
<script type="text/javascript" src="../asset/bootstraps/bootstrap.bundle.js.map"></script>
</body>
</html>