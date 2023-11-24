<?php
session_start();
require('../contoler/detail.php');

require_once('../contoler/pay.php'); 

require_once('../contoler/asolde.php'); 
 
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
            <a class="nav-link active me-4 btn btn-order se-nav-btn"   href="index.php">Accueil</a>
          </li>
           <li class="nav-item mb-2">
            <a class="nav-link active me-4 btn btn-order se-nav-btn"  href="rechecher.php">Visiter les offres</a>
          </li>
          <?php 
          if  ( !empty($_SESSION['email']) ) {
         
          ?>
          <li class="nav-item mb-2">
            <a class="nav-link active me-4 btn btn-order se-nav-btn"  href="Publication.php">Publier un article</a>
          </li>
         
          <li class="nav-item mb-2">
            <a class="nav-link active me-4 btn btn-order se-nav-btn"  href="Profile.php">Profil</a>
          </li>

          <?php 

              }

           ?>

            <?php 
          if  ( empty($_SESSION['email']) ) {
         
          ?>
          <li class="nav-item mb-2">
            <a class="nav-link active me-4 btn btn-order se-nav-btn"  href="connexion.php">Connexion</a>
          </li>


          <?php 

              }

           ?>

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
		<h2 class="justify-content-center d-flex ">Information complete</h2>
		</div>
        <?php

          
            foreach ($re as $donne) 
            {
       ?> 
		<div class="row">

			<div class="col-md-3 my-2" >

				<img src="<?php echo $donne['img1'] ;  ?>" style="width: 260px; height: 250px; ">
			</div>
			<div class="col-md-3 my-2">
				
				<img src="<?php echo $donne['img2'] ;  ?>" style="width: 260px; height: 250px; ">
			</div>
			<div class="col-md-3 my-2">
				
				<img src="<?php echo $donne['img3'] ;  ?>" style="width: 260px; height: 250px; ">
			</div>
			<div class="col-md-3 my-2">
				
				<img src="<?php echo $donne['img4'] ;  ?>" style="width: 260px; height: 250px; ">
			</div>
			
		</div>


		<table class="table mt-3">
		  	  <tbody>
		  	  	<tr>
		  	  		<td>Nom:</td>
		  	  		<td><?php echo $donne['nom'] ;  ?></td>
		  	  		
		  	  	</tr>

					<tr>
		  	  		<td>Prix:</td>
		  	  		<td><?php echo $donne['prix'] ;  ?> FCFA</td>
		  	  	
		  	    	</tr>

					  <tr>
		  	  		<td>Etat:</td>
		  	  		<td><?php echo wordwrap($donne['etat'],20,"<br/>\n") ;  ?></td>
		  	  		
		  	    	</tr>

					<tr>
		  	  		<td>Description:</td>
		  	  		 <td ><?php echo wordwrap($donne['description'],20,"<br/>\n");?></td>
					
		  	     	</tr>
					
		  	  	
					<tr>
					
					
					
					<td>Lieu:</td>
					<td><?php echo $donne['position'] ; ?></td>
					
					</tr>



		    
		  <?php
             }
                
    			?>
		  

		    
		  </tbody>
		</table>


<div class="d-flex justify-content-center">
	 <?php 

                   if ( !empty($_SESSION['email']) ) {

                   	
                   	

                   	if ($_SESSION['id_util'] != $donne['id_util']) {



                   		
                   	

                   ?>

                   
              <form  action="" method="POST">
                   <input type="hidden" class="btn btn-success mt-3 " name="field" value="test">
                   <input type="hidden" value="<?php echo $donne['id_art'] ;  ?>" name="prod">
                   <input type="hidden" value="<?php echo $donne['id_util'] ;  ?>" name="vendeur">
                   <input type="hidden" value="<?php echo $donne['prix'] ;  ?>" name="prix">
                  

                   <script
                     src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
                     data-public-key="pk_live_K4u1QSt9r747fE5lGFkcG6SQ"
                     data-button-text="Payer pour <?php echo $donne['prix'] ;  ?> FCFA"
                     data-customer-email="<?php echo $_SESSION['email'];  ?>"
                     data-customer-lastname="<?php echo $_SESSION['nom_util'];  ?>"
                     data-customer-firstname="<?php echo $_SESSION['nom_util'];  ?>"
                     data-button-class="btn btn-success mt-3"
                     data-transaction-amount="<?php echo $donne['prix'] ;  ?>"
                     data-transaction-description="Transaction description"
                     data-currency-iso="XOF">
                   </script>
                  </form>

                  <?php
                  	}
                      }else{

                    ?>

                    <form action="../contoler/swv.php" >      
                    <button class="btn btn-success se-pay-btn mt-3" name="toto">Payer pour  <?php echo $donne['prix'] ;  ?> FCFA</button>
                    </form>  
                   

                 <?php
                    }
                
                  ?>
</div>
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