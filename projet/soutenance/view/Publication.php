<?php

		session_start();
		
		require_once('../contoler/sww.php');
       require_once('../contoler/Anonnce.php');
   
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
         

        </ul>
      </div>
    </div>
  </nav>
</div>

<div class="container d-flex justify-content-center se-pubform">

	<form method="POST" enctype="multipart/form-data" >
	
		<div >
			<label class="se-ty">
				Veillez remplir les informations suivantes:
			</label>
		</div>

		<div  >
			<label class="se-typub">Nom du produit</label>
			<input type="" name="nom" class="se-pub-inp d-block mt-3" required minlength="2" maxlength="20">

		</div>

		<div>
			<label class="se-typub">Catégorie</label>
			
			<select  name="cat" class="se-pub-inp d-block mt-3" >
				<?php
          
            foreach ($se as $donne) 
            {
           ?>  
				<option value="<?php echo $donne['id_cat'] ;  ?>"><?php echo $donne['nom_cat'] ;  ?></option>
				
					<?php
             }
                
    			?>

			</select>
		</div>

		<div>
			<label class="se-typub">Etat</label>
			<div class="mb-3">
         <textarea class="se-pub-inp" name="etat"  rows="2" required minlength="5" maxlength="45" ></textarea>
     </div>
		
			
		</div>

		<div>
			<label class="se-typub">Position du vendeur</label>

			<input type="" name="position" class="se-pub-inp " required minlength="5" maxlength="15">

		</div>

		<div>
			<label class="se-typub">Description</label>
				<div class="mb-3">
			<textarea class="se-pub-inp " name="description"  rows="5" required minlength="5" maxlength="250"></textarea>
					</div>
		</div>

		<div>
			<label class="se-typub">Prix </label>
			<input type="number" name="prix" class="se-pub-inp d-block mt-3" required min="1" minlength="3" maxlength="15">

		</div>
   <div>
		<div class="">
			<label class="se-typub  mt-3" >Image</label>

			<div class="row justify-content-center">
					<div class="col-md-5 mt-2">
						<div class="input-up">
							<div class="preview  ">
								<div class="" id="boximg">
								<img src="" id="file-preview" class=" d-flex" alt="">
								</div>
							</div>

								<label for="file-ip" class="btn btn-primary mx-auto justify-content-center d-flex  se-up " >Choisir l'image1 </label>

								<input type="file" id="file-ip" name="image[]" accept="image/*" onchange="show(event);" required>

							</div>
						</div>

					

					<div class="col-md-5 mt-2">
						<div class="input-up">
							<div class="preview">
								<div class="" id="boximg2">
								<img src="" id="file-preview2" alt="">
								</div>
							</div>

								<label for="file-ip2" class="btn btn-primary mx-auto justify-content-center d-flex  se-up " >Choisir l'image2</label>

								<input type="file" id="file-ip2" name="image[]" accept="image/*" onchange="show2(event);">

							</div>
						</div>

					
			</div>
			<div class="row  justify-content-center  ">
					<div class="col-md-5 mt-2">
						<div class="input-up">
							<div class="preview">
								<div class="" id="boximg3">
								  <img src="" id="file-preview3" alt="">
							  </div>
							</div>

								<label for="file-ip3" class="btn btn-primary mx-auto justify-content-center d-flex  se-up " >Choisir l'image3</label>

								<input type="file" id="file-ip3" name="image[]" accept="image/*" onchange="show3(event);">

							</div>
						</div>


					<div class="col-md-5 mt-2 ">
						<div class="input-up">
							<div class="preview">
								<div class="" id="boximg4">
								<img src="" id="file-preview4" alt="">
							 </div>
							</div>

								<label for="file-ip4" class="btn btn-primary mx-auto justify-content-center d-flex  se-up " >Choisir l'image4</label>

								<input type="file" id="file-ip4" name="image[]" accept="image/*" onchange="show4(event);">

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
      boximg.className = " d-flex se-img-box justify-content-center se-img-box" 

    }
    
  }

  function show2(event) {
    if (event.target.files.length > 0) {
      var src =  URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("file-preview2");
      var boximg = document.getElementById("boximg2");
      preview.src = src;
      preview.src.display = "block"; 
      boximg.className = " d-flex se-img-box justify-content-center se-img-box" 

    }
    
  }

  function show3(event) {
    if (event.target.files.length > 0) {
      var src =  URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("file-preview3");
      var boximg = document.getElementById("boximg3");
      preview.src = src;
      preview.src.display = "block"; 
      boximg.className = " d-flex se-img-box justify-content-center se-img-box" 

    }
    
  }

  function show4(event) {
    if (event.target.files.length > 0) {
      var src =  URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("file-preview4");
      var boximg = document.getElementById("boximg4");
      preview.src = src;
      preview.src.display = "block"; 
      boximg.className = " d-flex se-img-box justify-content-center se-img-box" 

    }
    
  }

</script>

<script src="asset/java.js"></script>
<script type="text/javascript" src="../asset/bootstraps/bootstrap.bundle.js"></script>
<script type="text/javascript" src="../asset/bootstraps/bootstrap.bundle.js.map"></script>
</body>
</html>