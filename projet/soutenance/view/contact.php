
<?php
   
   require_once('../contoler/c_contats.php');
    
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
          <li class="nav-item mb-2">
            <a class="nav-link active me-4 btn btn-order se-nav-btn"  href="connexion.php">Connexion</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
</div>

<div>
	<div class="container forms" >
		<div class="container-fluid ">
			<div class="">
			<h2 class="justify-content-center d-flex tt">contactez nous</h2>
			</div>
			<p class="ty mt-5 ">Veillez remplire ce formulaire</p>
		</div>

		<div class="mt-5">
			<form  id="fform" method="POST">

          <div class="form1" id="form1">
					<div class="">
						<div class="row">
							<div class="col-8 lb "><p>Nom d'utilisteur</p></div>
							
						</div>
					</div>
					<div class="v-inp">
					<input type="text" name="nom" id="nom"  required class="inp">
					</div>	
					<small  id="small1">Message d'erreur</small>
				</div>

				<div class="form2" id="form2" >
					<div class="mt-3">
						<div class="row">
							<div class="col-8 lb "><p>Email</p></div>
							
						</div>
					</div>
					<div>
						<div class="v-inp">
							<input type="text" name="email"  id="email" required class="inp">
							
						</div>
					        <small  id="small2">Message d'erreur</small>
				    </div>
				</div>

				<div class="form3" id="form3" >
					<div class="mt-3">
						<div class="row">
							<div class="col-8 lb "><p>Numero</p></div>
							
						</div>
					</div>
					<div>
						<div class="v-inp">
							<input type="text" name="num"  id="num" required class="inp">
							
						</div>
						
					        <small  id="small3">Message d'erreur</small>
				       </div>
				    </div>
				
					<div class="form4" id="form4" >
					<div class="mt-3">
						<div class="row">
							<div class="col-8 lb">message</div>
						</div>
					</div>
					<div>
					<div class="mb-3">
			<textarea class="se-pub-inp " name="description"  rows="5" required minlength="5" maxlength="250"></textarea>
					</div>
						
					        <small  id="small4">Message d'erreur</small>
				       </div>
				    </div>


				
              
				

				<button type="submit" name="valider" value="azerty" class="btn btn-primary exo-btn mt-5 mb-5">Envoyer</button>
			</form>
		
		</div>
		
	</div>
</div>
<div>
	
</div>

<footer class="container-fluid se-footer mt-3">
  

 <div class="row" >
  <h4 class="d-flex justify-content-center">© 2022 SE. All Rights Reserved.</h4>
 </div>
</footer >

<script src="../asset/feather-icons.min.js">
</script>

<script>
	feather.replace();
</script>

<script src="../asset/java.js"></script>


</body>
</html>