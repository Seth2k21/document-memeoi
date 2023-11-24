<?php
   require_once('../contoler/conection.php');
    
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
			<h2 class="justify-content-center d-flex tt">Bonjour</h2>
			</div>
			<p class="ty mt-5 ">Connectez-vous pour découvrir toutes nos fonctionnalités.</p>
		</div>

		<div class="mt-5">
			<form action="" id="fform" method="POST">
			<div class="form2" id="form2" >
					<div class="mt-3">
						<div class="row">
							<div class="col-8 lb "><p>Email</p></div>
							
						</div>
					</div>
					<div>
						<div class="v-inp">
							<input type="text" name="email"  id="email"  class="inp">
							
						</div>
					        <small  id="small2">Message d'erreur</small>
				    </div>
				</div>

				<div class="form4" id="form4" >
					<div class="mt-3">
						<div class="row">
							<div class="col-8 lb">Mot de passe</div>
						</div>
					</div>
					<div>
					<div class="v-inp">
					<input type="password" name="code" id="code"    class="inp">
					<div class="password-icon">
						<i data-feather="eye"></i>
						<i data-feather="eye-off"></i>
					</div>
					</div>
						
					        <small  id="small4">Message d'erreur</small>
				       </div>
				    </div>
				<div>
					<a href="mdpoubl.php" class="ls">Mot de passe oublié</a>
				</div>

				<button type="submit" name="connextion" value="azerty" class="btn btn-primary exo-btn mt-5 mb-5">Se connecter</button>
			</form>
			<div class="d-flex">
				<p class="ls">Envie de nous rejoindre ? </p> 
				<a href="inscription.php" class="ls">Créer un compte</a>
			</div>
		</div>
		
	</div>
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

<script>
	
	
var eye = document.querySelector('.feather-eye');
var eyeoff= document.querySelector('.feather-eye-off');

var epassword = document.getElementById('code');




eye.addEventListener('click',() => {
    eye.style.display ="none";
    eyeoff.style.display ="block";
    epassword.type ="text";
    

} );

eyeoff.addEventListener('click',() => {
    eye.style.display ="block";
    eyeoff.style.display ="none";
    epassword.type ="password";
 

} );


const form = document.getElementById('fform');
const email = document.getElementById('email');
const password = document.getElementById('code');

form.addEventListener('submit' ,e=>{
  


	let emailValue = email.value.trim();
	let  passwordValue = password.value.trim();

	if(passwordValue === ""){
    let message = " Entrer votre mot de pass";
    setError4(password,message);
	e.preventDefault();

  } else if(!passwordValue.match(/^[a-zA-Z]/)){
    let message = "le not de passe doit commencer par une lettre";
    setError4(password, message);
	e.preventDefault();

  }else if(password.value.length < 5){ 
            let message = " doit contenir au moins cinq caractère";
            setError4(password, message);
			e.preventDefault();
   }else{
       setSucces4(password);
       }

	   if(emailValue === ""){
     
	 let message = "Entrer votre email";
	 setError2(email,message);
	 e.preventDefault();
	}  else if (!email_verify(emailValue)) {
	 let message = "Entrer une adresse email valide";
	 setError2(email, message);
	 e.preventDefault();
   }
   else{
	 setSucces2(email);
      }   
}
)


 function setError2(elem,message){
     
	 const former = elem.parentElement;
	 const formerr = document.getElementById('form2');
	 const small = document.getElementById('small2');
 
	 //Ajout du message d'erreur
	 small.innerText = message;
	  
	 //Ajout de la classe error
 
	 formerr.className = "form2 error";
	 former.className = "v-inp ";
   }

   function setError4(elem,message){
     
	 const former = elem.parentElement;
	 const formerr = document.getElementById('form4');
	 const small = document.getElementById('small4');
 
	 //Ajout du message d'erreur
	 small.innerText = message;
	  
	 //Ajout de la classe error
 
	 formerr.className = "form4 error";
	 former.className = "v-inp ";
   }

   function setSucces2(elem){
    const formerr = document.getElementById('form2');
    formerr.className = "form2 sucess";
    
   }

   function setSucces4(elem){
    const formerr = document.getElementById('form4');
    formerr.className = "form4 sucess";
    
   }
	
   function email_verify(email){
    // Supprimer la ligne suivante car elle ne contient pas d'instructions valides
    // *r_rona.22-t@gmail.com
    
    // Définir l'expression régulière pour la validation de l'adresse e-mail
    var regex = /^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
     
    // Vérifier si l'adresse e-mail passée en argument correspond à l'expression régulière
    return regex.test(email);
 
   }
</script>


</body>
</html>