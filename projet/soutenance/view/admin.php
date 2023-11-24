<?php
   session_start();
  
   require_once('../contoler/c_admin.php');
    
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


<div>
	<div class="container forms" >
		<div class="container-fluid ">
			<div class="">
			<h2 class="justify-content-center d-flex tt">Bonjour</h2>
			</div>
			<p class="ty mt-5 ">Connectez-vous pour accéder a l'interface administrateur.</p>
		</div>

		<div class="mt-5">
			<form action="" method="POST">
				<div>
					<div class="">
						<div class="row">
							<div class="col-8 lb "><p>Email</p></div>
							<div class="col-4 "><p class="ls">champ requis</p></div>
						</div>
					</div>
					<div class="v-inp">
					<input type="" name="email"  required class="inp">
					
					</div>
				</div>

				<div class="mt-5">
					<div>
						<div class="row">
							<div class="col-8 lb">Mot de passe</div>
							<div class="col-4 "><p class="ls">champ requis</p></div>
						</div>
					</div>
					<div class="v-inp">
					<input type="password" name="pass" id="code" required class="inp">
					<div class="password-icon">
						<i data-feather="eye"></i>
						<i data-feather="eye-off"></i>
					</div>
					</div>
				</div>
				

				<button type="submit" name="connextion" value="azerty" class="btn btn-primary exo-btn mt-5 mb-5">Se connecter</button>
			</form>
			
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

<script src="../asset/java.js"></script>
</body>
</html>