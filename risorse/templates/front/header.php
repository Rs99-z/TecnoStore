<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Progetto-Def</title>
  <!-- link di bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- link css definitivo -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <a href="index.php"><h1 class="titolo1">TecnoStore</h1></a>
  <div id="Pulsanti">
    <a href="" type="button" class="btn btn-primary btn-lg" id="Inscriviti">Iscriviti</a>
    <a href="login.php" type="button" class="btn btn-primary btn-lg" id="Accedi"> Accedi</a>
    <!-- Carrello -->
   <a href="checkout.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16" style="width: 50px; height: 50px;">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
</svg></a>
  </div>
  <!-- navbar  -->
  <div id="navbar">
    <a href="index.php">Home</a>
    <a href="" target="_blank">le nostre sedi</a>
    <a href="" target="_blank">I nostri contatti</a>
  </div>


  <!-- barra di ricerca bootstrap -->
  <form class="form-inline my-2 my-lg-0" action="ricerca.php" method="post" style="justify-content: center;">
    <input id="search_bar" class="form-control mr-sm-2" type="text" placeholder="Cerca" aria-label="Search" name="ricerca">
    <button class="btn my-2 " type="submit" name="invia_ricerca" style="background-color:#989ae9;">Cerca</button>
</form>