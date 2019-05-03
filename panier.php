<!DOCTYPE html>
<html lang="en">
<head>
  <title>ECE Amazon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
.navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Add a gray background color and some padding to the footer */
footer {
      background-color: #f2f2f2;
      padding: 0px;
    }

form#nouveaucompte {
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 30px;
  padding: 30px;
  width: 730px;
width: 50%;
margin: 0 auto;
}
      
.btn {
	padding: 5px 10px;
	background: #F4D03F;
	border: 2px solid;
	color: #ffffff;
}


form#nouveaucompte label {
font-size: 13px;
  width: 110px;
}
    
      
.jumbotron{background: #ffffff;
padding: 5px;}

.navbar{background-color: #4B3E3E;}
      
h3{color: #F4D03F;}
      
body {
  background: #ffffff;
  color: #111111;
  padding: 0px;
      }

</style>
    
	<link rel= " shortcut icon " href= " img/favicon.ico " type= " image/x-icon ">
	<link rel=  "icon " href= " img/favicon.ico " type= " image/x-icon "> <!-- Ajouter une icone -->

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    <img src="images/logopetit.png" style="width:15%">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Compte.php"><span class="glyphicon glyphicon-user"></span> Votre compte</a></li>
          <li><a href="Panier.php"><span class="glyphicon glyphicon-shopping-cart"></span> Votre panier </a></li>
          <li><a href="Admin.php"><span class="glyphicon glyphicon-log-in"></span> Admin </a></li>
      </ul>
    </div>
  </div>
</nav>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a class="navbar-brand" href="pageaccueil.php">ECE Amazon</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
     <li class="dropdown"> <a class ="dropdown-toggle" data-toggle="dropdown" href="#page">Catégories</a>
            <ul class="dropdown-menu">
                <li><a href="Livres.php">Livres</a></li>
                <li><a href="Musique.php">Musiques</a></li>
                <li><a href="Vetements.php">Vêtements</a></li>
                <li><a href="Sports.php">Sports et loisirs</a></li>
                
            </ul> 
        </li>
        <li><a href="VentesFlash.php">Ventes Flash</a></li>
        <li><a href="Vendre.php">Vendre</a></li>
      </ul>
    </div>
  </div>
</nav> 
    
    <div class="jumbotron">
  <div class="container text-center">
<img src="image/Capture%20d%E2%80%99%C3%A9cran%202019-04-29%20%C3%A0%2014.50.23.png">
  </div>
</div>
    
<!-- Barre d'outil du panier --> 
    
<center>  <h4> Panier </h4> </center>
    
<hr color="grey">

<div class="row"> 
    <div class="col-sm-2">
      <center> <p>Photo article</p></center>
    </div>
    <div class="col-sm-2"> 
      <center>
          <p> Description </p>    </center>
    </div>
        <div class="col-sm-2"> 
      <center>
          <p>Taille</p>    </center>
    </div>  
    <div class="col-sm-2">
      <center>
      <p>quantités </p></center>
    </div>
    <div class="col-sm-2">
      <center>
      <p>Montant</p></center>
    </div>
    <div class="col-sm-2">
      <center>
      <p> Supprimer </p></center>
    </div>
    </div>
      <hr color="grey">
    
    
    <!-- Articles du panier --> 
    
    <div class="row"> 
    <div class="col-sm-2">
        <!-- Mettre l'image ici--> 
        <center> <img src="images/sweatimprime2.jpg" style="width:50%"> </center>
     
    </div>
    <div class="col-sm-2"> 
      <center>
          <!-- Mettre la description ici--> 
          <p> Sweat coupe droite à col rond et manches longues. 
              Inscription assortie style marinière imprimée sur le devant en contraste. 
              Finitions côtelées. </p>    </center>
    </div>
        <div class="col-sm-2"> 
      <center>
          <!-- selection de la taille --> 
          <select bale="selection"> 
<option>XS</option>
<option>S</option>
<option>M</option>
    <option>L</option></select>
            </center>
    </div>  
    <div class="col-sm-2">
      <center>
      <select bale="selection"> 
<option> 1 </option>
<option> 2 </option>
<option> 3 </option>
<option> 4 </option>
    <option> 5 </option></select>
        </center>
    </div>
    <div class="col-sm-2">
      <center>
      <p>12 € </p></center>
    </div>
    <div class="col-sm-2">
      <center>
      <button type=submit> Supprimer </button></center>
    </div>
       
    </div>
     <hr color="grey">
    
    
    <center> 
      <div class="btn-group">
          <a href="pageaccueil.php"> <button type="button" class="btn btn-primary">
              Continuer mes achats </button> </a></div> 
    
    
     <div class="btn-group">
    <button type="button" class="btn btn-primary">Payer</button>
  </div>
    
</center>
</body>
</html>
