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
      Un market place est une plateforme en ligne qui connecte des vendeurs et des acheteurs, leur permettant d'échanger des biens et des services. Son fonctionnement repose sur un modèle économique où le market place facilite les transactions entre les parties prenantes tout en percevant une commission sur chaque vente réalisée.
			
		</p>

    <p>
      Le market place agit en tant qu'intermédiaire entre les vendeurs et les acheteurs. Les vendeurs peuvent créer des profils et proposer leurs produits ou services sur la plateforme, tandis que les acheteurs peuvent parcourir les offres disponibles, comparer les prix et les caractéristiques des produits, et effectuer des achats en ligne en toute sécurité. En centralisant ces offres et en facilitant la rencontre entre l'offre et la demande, le market place offre aux consommateurs une expérience d'achat pratique et diversifiée
    </p>
    <p>
      Pour maintenir leur activité, les market places perçoivent une commission sur chaque vente réalisée par le biais de leur plateforme. Les vendeurs acceptent ces frais en échange des avantages qu'ils tirent de l'exposition à une large base de clients potentiels. Les commissions peuvent être fixées selon un pourcentage fixe ou variable, en fonction des politiques de la plateforme. Ce modèle économique incite les market places à promouvoir le succès des vendeurs, car leur réussite se traduit par des ventes accrues et, par conséquent, par une augmentation des revenus pour la plateforme elle-même.
    </p>

    <p>
      Les market places offrent de nombreux avantages tant pour les vendeurs que pour les acheteurs. Pour les vendeurs, cela leur donne une visibilité et une accessibilité accrues. Ils peuvent atteindre un public plus large sans avoir à investir dans une infrastructure de vente en ligne coûteuse. Les petites entreprises et les entrepreneurs peuvent ainsi se faire connaître et développer leurs activités. Pour les acheteurs, les market places offrent une variété de choix, la commodité de pouvoir comparer facilement les produits et les prix, et une sécurité accrue lors des transactions en ligne. De plus, les systèmes de notation et de commentaires mis en place renforcent la confiance entre les vendeurs et les acheteurs, facilitant ainsi la prise de décision.
    </p>
    <p>
      En résumé, les market places sont des plateformes en ligne qui facilitent les échanges entre vendeurs et acheteurs. Elles agissent en tant qu'intermédiaires, permettant aux vendeurs de proposer leurs produits ou services et aux acheteurs de trouver ce dont ils ont besoin. Les market places fonctionnent en prélevant une commission sur les ventes réalisées, ce qui contribue à leur rentabilité. Elles offrent une visibilité accrue aux vendeurs, une commodité et une sécurité aux acheteurs, et favorisent un environnement de confiance propice aux échanges commerciaux en ligne.
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