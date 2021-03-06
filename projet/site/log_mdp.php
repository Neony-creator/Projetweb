<!doctype html>
<?php
require('chaineconnexion.php');


try {                                                                   /*Tente une connexion...*/
    $bdd = new PDO($dsn, $username_bdd, $password_bdd);                 /*Creation objet PDO et init de la connexion*/
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);      /*Définition de toutes erreurs en tant qu'Exception*/
} catch(PDOException $e) {                                              /*Si erreur attrapée*/
    $error = $e->getMessage();                                          /*Stock le msg de l'erreur dans error*/
    echo $error;
}
if (!$error) {
    $query = $bdd->prepare('SELECT name_offer, company_name, skills, trust_of_pilot, sector_of_activity, Town, internship_duration, start_date, remuneration_basis, number_of_places_offered, description FROM offer NATURAL JOIN location NATURAL JOIN company NATURAL JOIN evaluate;');
    $query->execute();
    $results = $query->fetchALL(PDO::FETCH_OBJ);
}

if (isset($_POST['email'])){
    $bonjours=$_POST['email'];
}
else {
    $bonjours='b';
}
echo $bonjours;
?>
<script>
    console.log('<?php echo $bonjours;?>');
</script>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/log%20mdp.css" />
    <title>PROJET WEB, groupe 4</title>
  </head>

  <section class="top">
    <!-- Logo -->
    <div id="logo">
              <p> <img src="assets/file/logo.png" alt="logo cesi" title="Qu'est ce qu'il est beau quand même ! "/> </p>
    </div>

    <!-- Bouton Wish-list -->
    <div id="WL">

              <a href ="#">
                   <button type="button" class="btn btn-lg btn-dark">Wish-list</button>
              </a>
    </div>

    <!-- Titre -->

      <div id="title">
        <h1>Titre</h1> 
      </div>


  </section>

<header  class="sticky-top"> 
    <!-- Barre de navigation -->
    <div id="navigbar">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse btn-lg " id="mynavbar">
          <ul class="navbar-nav ">
            <li class="nav-item" style="padding-right : 2em;">
              <a class="nav-link" href="#">Acceuil</a>
            </li>
            <li class="nav-item " style="padding-right : 2em;">
              <a class="nav-link" href="#">Connection</a>
            </li>
            <li class="nav-item" style="padding-right : 2em;">
              <a class="nav-link" href="#">Entreprise</a>
            </li>
            <li class="nav-item" style="padding-right : 2em;">
              <a class="nav-link" href="#">Stage</a>
            </li>
            <li class="nav-item" style="padding-right : 2em;">
              <a class="nav-link" href="#">Candidature</a>
            </li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gestion
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Gestion entreprise</a></li>
            <li><a class="dropdown-item" href="#">Gestion stage</a></li>
            <li><a class="dropdown-item" href="#">Gestion utilisateur</a></li>

          </ul>
          </ul>
        </div>
      </div>
    </nav>
  </div>  
</header>

    <!-- Body -->


  <body>

    <!-- log in mdp -->
    <div id="all">
<div class="container-md ">
<div class="row ">
    <form  action="log_mdp.php" method="post">
      <div class="form-group col-2 mx-auto ">
      <label for="email">Identifiant</label>
      <input type="email" name="email" class="form-control " id="email" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
      <div class="form-group col-2 mx-auto">
      <label for="password">Mot de passe</label>
      <input type="password" name="password" class="form-control" id="password1" placeholder="Password">
      <button type="submit" name="envoie" class="btn btn-lg btn-dark">Valider</button>
      </div>
    </form>

    <?php
    if(isset($_POST['envoi'])){ // si formulaire soumis
        echo $_POST['password'];
        echo "bonjour";
    }
    ?>
</div>
</div>
</div>

  

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  <br><br><br>
  </body>

<!-- Footer -->
<footer class="bg-light text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Footer text</h5>

        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
          molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
          aliquam voluptatem veniam, est atque cumque eum delectus sint!
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Footer text</h5>

        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
          molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
          aliquam voluptatem veniam, est atque cumque eum delectus sint!
        </p>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-dark" href="https://www.cesi.fr//">Cesi.fr</a>
  </div>
  <!-- Copyright -->
</footer>
</html>