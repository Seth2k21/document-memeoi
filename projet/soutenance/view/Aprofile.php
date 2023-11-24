<?php

		session_start();

		require_once('../contoler/validation.php');
	
  
    
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
	<link rel="stylesheet" href="../asset/img.css">
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
          <li class="nav-item mb-2">
            <a class="nav-link active me-4 btn btn-order se-nav-btn"  href="connexion.php">Connexion</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
</div>

<div class="container d-flex justify-content-center se-pubform">

	<form method="POST"  enctype="multipart/form-data" >
	
		<div >
			<label class="se-ty">
				Veillez remplir les informations suivantes:<br>
				NB:Tout les champ sont requied
			</label>
		</div>

		<div  >
			<label class="se-typub">Adresse</label>
			<input type="" name="adress" class="se-pub-inp d-block mt-3" required>

		</div>

	

		<div>
			<label class="se-typub">N° de la piece </label>
			<input type="tel" name="num" class="se-pub-inp d-block mt-3" required>

		</div>
   <div>
		<div class="">
			<label class="se-typub  mt-3" >Image</label>

			<div class="row justify-content-center">
					<div class="col-md-12 mt-2">
						<div class="input-up">
							<div class="preview  d-flex justify-content-center">
								<div class="" id="boximg">
								<img src="" id="file-preview" class="" alt="">
								</div>
						</div>
							<div class="d-flex justify-content-center">
							<label for="file-ip" class="btn btn-primary  d-flex  se-up " >Choisir une image</label>
							</div>
							<input type="file" id="file-ip" name="image" accept="image/*" onchange="show(event);" required>

							</div>
						</div>

					

					
			</div>
						
		</div>
   </div> 
		<div>
			<button type="submit" name="poster" value="azerty" class="btn btn-primary w-50  mt-3 mb-3 d-flex mx-auto justify-content-center">Publier</button>
		
		</div>

	</form>
	
</div>

<footer class="container-fluid se-footer mt-3">
  

 <div class="row" >
  <h4 class="d-flex justify-content-center">© 2022 SE. All Rights Reserved.</h4>
 </div>
</footer >

<script type="text/javascript" >

  function show(event) {
    if (event.target.files.length > 0) {
      var src =  URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("file-preview");
      var boximg = document.getElementById("boximg");
      preview.src = src;
      preview.src.display = "block";
      boximg.className = " d-flex se-img-box justify-content-center  " 

    }
    
  }



  

</script>

<script src="asset/java.js"></script>
<script type="text/javascript" src="../asset/bootstraps/bootstrap.bundle.js"></script>
<script type="text/javascript" src="../asset/bootstraps/bootstrap.bundle.js.map"></script>
</body>
</html>