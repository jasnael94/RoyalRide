<?php
  session_start();
  if(empty($_SESSION['login'])) {
    header('location: login.php');
  }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RoyalRide</title>
  <link rel="stylesheet" href="/css/styleheader.css">
  <link rel="stylesheet" href="/css/stylefooter.css">
  <link rel="stylesheet" href="/css/style.css">

  <link rel="stylesheet" href="/css/<?php echo $css ?>">
  <link rel="icon" type="image/gif" href="/pictures/favicon.png" />
</head>

<body>
  <header>
    <div class="header-container">
      <!-- Logo -->
      <div class="logo">
        <a href="#">
          <img src="/pictures/logo.png" alt="Logo Royal Ride" />
        </a>
      </div>
      
      <!-- Slogan et barre de navigation -->
      <div class="header-content">
        <h1>
          <div class="rouler">Roulez différemment ...</div>
          <div class="choice">Choisissez l'excellence</div> 
        </h1>
        
        <nav class="nav">
          <ul>
            <li><a href="home.php">Accueil</a></li>
            <li><a href="cars.php">Nos véhicules</a></li>
            <li><a href="booking.php">Mes réservations</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="logout.php">Déconnexion</a></li>
          </ul>
        </nav>
      </div>
      
      <!-- Bouton de réservation -->
      <div class="buttonResa">
        <button><a href="cart.php">Réserver ma voiture</a></button>
      </div>
    </div>
  </header>
  <div class="main-content">
  


