<?php
   session_start();
   require_once('../contoler/rech.php'); 
   
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



<div class="se-acueil">
  <div class="mt-3 container">
   <nav class="navbar bg-dark d-flex justify-content-center" >
    <div class="container-fluide mx-3">
      <form class="d-flex"  action="../view/rechecher.php" method="POST">
        <input class="form-control me-2" name="rechere" type="search" placeholder="Rechercher" aria-label="Search">

        <button class="btn se-btn" name="valider" type="submit">Rechercher</button>

        
       
      </form>
      </div>
    </nav>
  </div>
  

   <div class="container">
      <a href="Publication.php" class="btn btn-primary w-25 justify-content-center mx-auto d-flex mt-3 ">Publier un article</a>
     </div>
<div class="container">

  <div class="row  mt-4">
          <?php
          
            foreach ($re as $donne) 
            {
           ?>  
    <div class="col-md-4 my-3">
       <div class="card" >
        <img src="<?php echo $donne['img1'] ;  ?>" height="300px" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title"><?php echo $donne['nom'] ;  ?></h3>
          <p class="card-text" style="font-size: 17px;"><?php echo $donne['etat'] ;  ?></p>

           <?php /*

                   if ( !empty($_SESSION['email']) ) {

                   ?>

                   
              <form  action="" method="POST">
                   <input type="hidden" class="btn btn-success mt-3 " name="field" value="test">
                   <input type="hidden" value="<?php echo $donne['id_art'] ;  ?>" name="prod">
                   <input type="hidden" value="<?php echo $donne['id_util'] ;  ?>" name="vendeur">
                   <input type="hidden" value="<?php echo $donne['prix'] ;  ?>" name="prix">
                  

                   <script
                     src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
                     data-public-key="pk_sandbox_CAz-J0QVLwbCtNj6lETTQOvG"
                     data-button-text="<?php echo $donne['prix'] ;  ?> FCFA"
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
                      }else{

                    ?>

                    <form action="../contoler/swv.php" >      
                    <button class="btn btn-success mt-3" name="toto"><?php echo $donne['prix'] ;  ?> FCFA</button>
                    </form>  
                   

                 <?php
                    }*/
                
                  ?>

                     <button class="btn btn-success mt-3" name="toto"><?php echo $donne['prix'] ;  ?> FCFA</button>


                  <form action="detail.php" method="POST">
                    <input type="hidden" value="<?php echo $donne['id_art'] ;  ?>" name="art">
                    <input type="hidden" value="<?php echo $donne['id_util'] ;  ?>" name="vendeur">
              
                     
                    <button class="btn btn-secondary mt-2" name="detail" value="ok" type="submit">Détail </button>
                  </form>
          
        </div>
      </div>
    </div>

    
                 <?php
                    }
                
                  ?>
      
  </div>



</div>

</div>

<footer class="container-fluid se-footer mt-3">
  

 <div class="row" >
  <h4 class="d-flex justify-content-center">© 2022 SE. All Rights Reserved.</h4>
 </div>
</footer >


<script src="../asset/java.js"></script>

<script type="text/javascript" src="../asset/bootstraps/bootstrap.bundle.js"></script>
<script type="text/javascript" src="../asset/bootstraps/bootstrap.bundle.js.map"></script>

</body>
</html>
