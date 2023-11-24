
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="asset/bootstraps/bootstrap.min.css">
	<link rel="stylesheet" href="asset/bootstraps/bootstrap.min.css.map">
	<link rel="stylesheet" href="asset/style.css">
  <link rel="stylesheet" href="asset/aos.css">
</head>
<body>
<div class="container-fluide">
  <nav class="se-nav navbar navbar-expand-lg bg-dark navbar-dark   position-fixed w-100">
    <div class="container">
   <h4 class="titre  my-3"> EZplace</h4>
      <button class="navbar-toggler se-nav-bouton" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item mb-2">
            <a class="nav-link active me-4 btn btn-order se-nav-btn"   href="">Acceuil</a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link active me-4 btn btn-order se-nav-btn"  href="view/rechecher.php">Visiter les offres</a>
          </li>
          <?php 
          if  ( !empty($_SESSION['email']) ) {
         
          ?>
          <li class="nav-item mb-2">
            <a class="nav-link active me-4 btn btn-order se-nav-btn"  href="view/Publication.php">Publier un article</a>
          </li>
         
          <li class="nav-item mb-2">
            <a class="nav-link active me-4 btn btn-order se-nav-btn"  href="view/Profile.php">Profil</a>
          </li>

          <?php 

              }

           ?>
            <?php 
          if  ( empty($_SESSION['email']) ) {
         
          ?>
          <li class="nav-item mb-2">
            <a class="nav-link active me-4 btn btn-order se-nav-btn"  href="view/connexion.php">Connexion</a>
          </li>
          <?php 

              }

           ?>

        </ul>
      </div>
    </div>
  </nav>
</div>

<div class="">
<div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="asset/images/img 2.jpg" class="d-block w-100 img-fluid" style="height:auto" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5  style="font-size: 50px; box-shadow: 0 0 25px rgba(0, 0, 0, 0.5);color: blue"> BIENVENU SUR EZplace</h5>
        <p>Offrez une nouvelle vie à des produits d'occasion en achetant sur <span style="color: rgb(255, 110, 20); font-size:45px";>EZplace</span> !</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="asset/images/Fond2.jpg" class="d-block w-100 img-fluid" style="height:auto"  alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5  style="font-size: 50px; box-shadow: 0 0 25px rgba(0, 0, 0, 0.5); color: blue"> BIENVENU SUR EZplace</h5>
        <p>Découvrez une sélection variée de produits en excellent état à des prix imbattables. </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="asset/images/img 3.jpg" class="d-block w-100 img-fluid" style="height:auto"  alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5  style="font-size: 50px; box-shadow: 0 0 25px rgba(0, 0, 0, 0.5); color: blue"> BIENVENU SUR EZplace</h5>
        <p> Faites vos transactions en toute sécurité et en toute confiance sur <span style="color:  rgb(255, 110, 20); font-size:45px";>EZplace</span> "</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<div class="se-acueil">
<h4 class="card-title py-3" style = "color: white; text-align: center;  box-shadow: 0 0 25px rgba(0, 0, 0, 0.5);" >Bienvenue sur notre plateforme de marketplace dédiée à la vente de produits d'occasion !</h4>
</div>

<div class="container mt-5">
  <div class="row">

  <div class="col-md-6">
  <img src="asset/images/Echange.jpg" class="d-block w-100 img-fluid" style="height:500px"  alt="...">
  </div>

  <div class="col-md-6">

  <div class="">
       
      <p class="weltex"  data-aos="fade-left" data-aos-delay="500" data-aos-duration="1500" >

        Chez nous, nous accordons une grande importance à la confiance que vous nous accordez en utilisant notre plateforme pour vendre ou acheter des produits d'occasion. C'est pourquoi nous avons mis en place des mesures de sécurité et de contrôle pour assurer la fiabilité et la qualité des transactions effectuées sur notre site.
        
      </p>
      <p class="weltex" data-aos="fade-left" data-aos-delay="1000" data-aos-duration="1500" >

     
        Tous les vendeurs sur notre plateforme sont vérifiés et nous veillons à ce qu'ils respectent nos conditions générales de vente et nos normes de qualité. N'hésitez pas à nous contacter si vous avez des questions ou des problèmes.
       
      </p>
      <p class="weltex" data-aos="fade-left" data-aos-delay="1500" data-aos-duration="1500" >

        Votre sécurité est notre priorité absolue et nous nous engageons à fournir un environnement en ligne sécurisé et fiable sur notre site marketplace. N'hésitez pas à nous contacter si vous avez des questions ou des préoccupations concernant la sécurité.
      </p>
     </div>
  </div>

  </div>

</div>

<div class="container mt-5">
  <div class="row">

  

  <div class="col-md-6">

          <div class="">
              
              <p class="weltex"  data-aos="fade-left" data-aos-delay="1000" data-aos-duration="1500" >

                Nous utilisons des protocoles de chiffrement avancés pour sécuriser les données sensibles lors des transactions. Cela garantit que les informations telles que les numéros de carte de crédit ou les informations d'identification restent confidentielles et ne peuvent pas être interceptées par des tiers malveillants.                
              </p>
              <p class="weltex" data-aos="fade-left" data-aos-delay="1500" data-aos-duration="1500" >

            
               Nous disposons également d'un système de modération et de signalement efficace pour surveiller les activités des utilisateurs et détecter tout comportement suspect. Si un utilisateur signale une activité frauduleuse ou suspecte, notre équipe d'assistance intervient rapidement pour enquêter et prendre les mesures appropriées.
              
              </p>
              <p class="weltex" data-aos="fade-left" data-aos-delay="2000" data-aos-duration="1500" >

                Nous espérons que vous apprécierez l'expérience d'achat et de vente sur notre plateforme et que vous pourrez trouver des produits d'occasion de grande qualité à des prix abordables.
              </p>
            </div>
  </div>

  <div class="col-md-6">
  <img src="asset/images/gtsrcs-s.jpg" class="d-block w-100 img-fluid" style="height:500px"  alt="...">
  </div>

  </div>

</div>





<div class="se-acueil">
  <div class="mt-3 container">
  <nav class="navbar bg-dark d-flex justify-content-center" >
    <div class="container-fluide mx-3">
      <form class="d-flex"  action="view/rechecher.php" method="POST">
        <input class="form-control me-2" name="rechere" type="search" placeholder="Rechercher" aria-label="Search">

        <button class="btn se-btn" name="valider" type="submit">Rechercher</button>

       
      </form>
      </div>
   </nav>
  </div>
  
                
   <div class="container">
      <a href="view/Publication.php" class="btn btn-primary justify-content-center w-25 mx-auto d-flex mt-3 ">Publier un article</a>
     </div>

     <h2 class= "mt-5" style = "color: white; text-align: center;  box-shadow: 0 0 25px rgba(0, 0, 0, 0.5);">Les catégories les plus populaires</h2>
<div class="container">

  <div class="row  mt-4">

    <div class="col-md-4 my-3">
      <form class="d-flex"  action="view/rechecher.php" method="POST">
       <div class="card" >
        <img src="asset/images/tel.jpg" height="300px" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">TELEPHONE</h3>
          <p class="card-text" style="font-size: 17px;">Cette section de téléphones d'occasion offre des options abordables pour ceux qui cherchent à économiser de l'argent tout en ayant un appareil fiable. Ici, Vous trouverez les téléphones d'occasion de qualité avec une variété de modèles et de marques.</p>
          <button class="btn btn-success mt-3" name="Téléphone" type="submit">Voir les offre</button>
          
        </div>
      </div>
      </form>
    </div>

      <div class="col-md-4 my-3">
      <form class="d-flex"  action="view/rechecher.php" method="POST">
       <div class="card" >
        <img src="asset/images/immeuble.jpg" height="300px" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">IMMOBILIER</h3>
          <p class="card-text" style="font-size: 17px;">Cette section presente différents types de propriétés immobilières pour répondre aux besoins de tous les acheteurs. Ses propriétés immobilières  offrent une opportunité d'achat à prix réduit pour les acheteurs qui cherchent à économiser de l'argent.</p>
          <button class="btn btn-success mt-3" name="Immobilier" type="submit">Voir les offre</button>
          
        </div>
      </div>
      </form>
    </div>

     <div class="col-md-4 my-3">
      <form class="d-flex"  action="view/rechecher.php" method="POST">
       <div class="card" >
        <img src="asset/images/voiture.jpg" height="300px" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">VEHICULE</h3>
          <p class="card-text" style="font-size: 17px;">Cette section presente une variété de voitures, de camions et de motos d'occasion pour répondre à vos besoins de transport. Tous ses véhicules offrent une opportunité d'achat à prix réduit pour ceux qui cherchent à économiser de l'argent.</p>
          <button class="btn btn-success mt-3" name="Vehicule" type="submit">Voir les offre</button>
          
        </div>
      </div>
      </form>
    </div>
      
  </div>

  <div class="row  mt-4">

     <div class="col-md-4 my-3">
      <form class="d-flex"  action="view/rechecher.php" method="POST">
       <div class="card" >
        <img src="asset/images/electromenager.jpg" height="300px" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">ELECTROMENAGER</h3>
          <p class="card-text" style="font-size: 17px;"> Cette section vous propose une large gamme de produits electromenager d'occasion, y compris des réfrigérateurs, des lave-vaisselle, des machines à laver, des sécheuses, des fours et bien plus encore. Cette section d'électroménagers d'occasion vous permet de trouver des produits fiables à des prix réduits.</p>
          <button class="btn btn-success mt-3" name="Electromenager" type="submit">Voir les offre</button>
          
        </div>
      </div>
      </form>
    </div>

     <div class="col-md-4 my-3">
      <form class="d-flex"  action="view/rechecher.php" method="POST">
       <div class="card" >
        <img src="asset/images/ammeublement.jpg" height="300px" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">AMEUBLEMENT</h3>
          <p class="card-text" style="font-size: 17px;">Cette section de meubles  d'occasion vous propose une large gamme de produits, y compris des canapés, des fauteuils, des tables, des chaises et bien plus. vous trouverez ici des produits fiables à des prix réduits afin d'économiser de l'argent tout en obtenant des meubles de haute qualité. </p>
          <button class="btn btn-success mt-3" name="Ameublement" type="submit">Voir les offre</button>
          
        </div>
      </div>
      </form>
    </div>

     <div class="col-md-4 my-3">
      <form class="d-flex"  action="view/rechecher.php" method="POST">
       <div class="card" >
        <img src="asset/images/electronique.jpg" height="300px" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">ELECTRONIQUE</h3>
          <p class="card-text" style="font-size: 17px;">Cette section des produits électroniques d'occasion offrent des options abordables pour ceux qui cherchent à économiser de l'argent. Vous trouverez ici une variété de produits électroniques d'occasion, y compris des ordinateurs portables, des tablettes, des appareils photo, des téléviseurs et plus encore.</p>
          <button class="btn btn-success mt-3" name="Electronique" type="submit">Voir les offre</button>
          
        </div>
      </div>
      </form>
    </div>
      
  </div>



</div>

</div>

<footer class="container-fluid se-footer mt-3">
  

 <div class="row" >
  <h4 class="d-flex justify-content-center">© 2022 SE. All Rights Reserved.</h4>
 </div>
</footer >


<script type="text/javascript" src="asset/aos.js"></script>

<script >
  AOS.init();
</script>

<script src="asset/java.js"></script>

<script type="text/javascript" src="asset/bootstraps/bootstrap.bundle.js"></script>
<script type="text/javascript" src="asset/bootstraps/bootstrap.bundle.js.map"></script>

</body>
</html>