<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../style/accueil.css">
  <title>Accueil - Waloc</title>
</head>
<body>

  <?php
    include "../component/navbar.php";
  ?>

  <div class="premiere">

    <img src="../img/Logo.png" alt="logo">
    <h1> "Louer n'a jamais été aussi simple" </h1>

  </div>

  <div class="secondaire">

    <p> Waloc est un service de location de voiture. Louer sereinement votre voiture en Île-de-France à bas prix !</p>

  </div>

  <a href="voiture.php"> 
  <div class="redirection">

    <p> Voir les Waloc </p>

  </div>

  
  </a>

  <div class="tertiaire">

    <figure>
        <p> <img src="../img/voiture.png" alt="voiture" class="img-tertiaire"> </p>
            <figcaption> Voiture </figcaption>
    </figure>

    <figure>
        <p> <img src="../img/service.png" alt="service" class="img-tertiaire"> </p>
        <figcaption> Service </figcaption>
    </figure>

    <figure>
        <p> <img src="../img/qualite.png" alt="qualité" class="img-tertiaire"> </p>
        <figcaption> Qualité </figcaption>
    </figure>

</div>

   <h2> Waloc du mois </h2>
    <div class="container-carousel">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="../img/waloc_du_mois/smart_fortwo.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../img/waloc_du_mois/smart_fortwo_2.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../img/waloc_du_mois/smart_fortwo_3.png" alt="Third slide">
          </div>
        </div>

        <div class="pn">
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
      </div>

        <div class="pn">
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        </div>
      </div>

        <p>Smart Fortwo</p>
    </div>


    <footer>
  
      <div class="rs">
      <a href="www.instagram.com"><img src="../img/footer_rs/instagram.png" alt="instagram" class="rs"></a>
      <a href="www.snapchat.com"><img src="../img/footer_rs/snapchat.png" alt="snapchat" class="rs"></a>
      <a href="www.facebook.com"><img src="../img/footer_rs/facebook.png" alt="facebook" class="rs"></a>
      </div>


      <div class="coordonnes">
      <p>32 Boulevard Marcel Sembat</p>
      <p>93200 Saint-Denis</p>
      <p><img src="../img/footer_rs/t8.png" alt="tram 8" id="t8">Square Degeyter</p>
      <p>06 06 06 06 06</p>
      </div>

    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>