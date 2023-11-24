<?php
session_start();
require_once('../contoler/sww.php');

require('../contoler/actusolde.php');



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


<div class="row justify-content-center">
	
			

				
					<a href="#" class=" btn col-md-6 mx-3 my-2  se-prof-inp"> <?php echo $_SESSION['nom_util'] ;  ?> <br>
		             <p><?php echo $_SESSION['email'] ;  ?></p>
		             <form action="deco.php">
		             <button class="btn btn-success" type="submit"> Déconnecter</button>
		             </form>
		             </a>



					<a href="#" class=" btn col-md-3 mx-3 my-2  se-prof-inp"> Solde passif: <?php echo $_SESSION['solde_pasif'] ;  ?>FCFA <br>
					<p>Solde Disponible : <?php echo $_SESSION['solde_dispo'] ;  ?>FCFA</p> 
					</a>

	</div>


<div class="container  se-acueil">

	<div class="row  justify-content-center">
		

		<a href="Vente.php" class=" btn col-md-3 mx-3 my-2  se-prof-inp"> Mes ventes <br>
		<p>Suivre vos ventes</p> 
		</a>

		<a href="Achat.php" class=" btn col-md-3 mx-3 my-2  se-prof-inp"> Mes achats <br>
		<p>Suivre vos ventes</p> 
		</a>

		<a href="Transaction.php" class=" btn col-md-3 mx-3 my-2  se-prof-inp"> Transaction <br>
		<p>Suivre toutes vos transactions</p> 
		</a>

	
	</div>

	<div class="row justify-content-center mt-4">
		<a href="a_propos.php" class=" btn col-md-3 mx-3 my-2  se-prof-inp"> A propos <br>
		<p>Comprendre le fonctionnement du site </p> 
		</a>
		
		<a href="securiter.php" class=" btn col-md-3 mx-3 my-2  se-prof-inp"> Sécuriter <br>
		<p>Gérez la sécurité de votre compte</p> 
		</a>

		<a href="contact.php" class=" btn col-md-3 mx-3 my-2  se-prof-inp"> Contactez nous <br>
		<p>Contacter les administrateurs</p> 
		</a>
	
	</div>



</div>

	
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