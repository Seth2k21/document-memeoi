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


<div>


<h4 class="card-title py-3" style = "color: black; text-align: center;  box-shadow: 0 0 25px rgba(0, 0, 0, 0.5);" >Information !</h4>

</div>


<div class="container  se-acueil">
	

    <p>
     Votre achat a ete effectue avec succes. Veillez consulter les detail dans mes achats disponible sur votre <a href="Profile.php" class="btn btn-success se-pay-btn "  >Profil </a>  
    </p>
   
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