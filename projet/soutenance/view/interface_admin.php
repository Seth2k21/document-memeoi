
<?php session_start(); 
 require_once('../contoler/sww.php');
 require_once('../contoler/adm_user.php');

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
            <a class="nav-link active me-4 btn btn-order se-nav-btn"   href="interface_admin.php">Utilisateur</a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link active me-4 btn btn-order se-nav-btn"  href="validation_admin.php">Valider compte</a>
          </li>
         
          <li class="nav-item mb-2">
            <a class="nav-link active me-4 btn btn-order se-nav-btn"  href="retrait_admin.php">Gérer retrait</a>
          </li>
          <li class="nav-item mb-2">
                 <form action="deco.php">
                   <button class="btn btn-success" type="submit"> Déconnecter</button>
                 </form>
          </li>

        </ul>
      </div>
    </div>
  </nav>
</div>




<div class="container  se-pubform">
  <div class="mt-3">
    <div class="mb-3">
    <h2 class="justify-content-center d-flex ">Gérer utilisateurs</h2>
    </div>
    <table class="table table-striped">

          <tr>
           
          <td>Nom</td>
          <td>Email</td>
          <td>Solde pasif</td>
          <td>Solde dispo</td>
          <td>statut</td>
  
          <td></td>
        
        </tr>

          <tbody >
         <?php
          
            foreach ($re as $donne) 
            {
           ?>   
            

        <tr>
           
          <td><?php echo $donne['nom_util'] ;  ?></td>
          <td><?php echo $donne['email'] ;  ?></td>
          <td><?php echo $donne['solde_pasif'] ;  ?></td>
          <td><?php echo $donne['solde_dispo'] ;  ?></td>
          <td><?php echo $donne['statut'] ;  ?></td>
   
          <form action="" method="POST">

          
           <input type="hidden" value="<?php echo $donne['id_util'] ;  ?>" name="user">
          
          <td><button class="btn btn-secondary" name="admin" value="ok" type="submit">Retrograder </button></td>
          </form>
        </tr>
      <?php
             }
                
          ?>
      

        
      </tbody>
    </table>

  </div>


</div>    
 



<footer class="container-fluid se-footer mt-3">
  

 <div class="row" >
  <h4 class="d-flex justify-content-center">© 2022 SE. All Rights Reserved.</h4>
 </div>
</footer >







<script src="asset/java.js"></script>

<script type="text/javascript" src="asset/bootstraps/bootstrap.bundle.js"></script>
<script type="text/javascript" src="asset/bootstraps/bootstrap.bundle.js.map"></script>

</body>
</html>