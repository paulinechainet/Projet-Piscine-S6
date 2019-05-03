  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title> ECE Amazon - Livres</title>
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
          border-color: #FFD700;
      }
      
      /* Add a gray background color and some padding to the footer */
      footer {
        background-color: #f2f2f2;
        padding: 25px;
      }

.navbar{background-color: #FFD700; color : black; }
    </style>
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
        <a href="pageaccueil.php">  <img src="images/logosimple.png" style="width:10%">  </a>
        <a class="navbar-brand" href="pageaccueil.php">  ECE Amazon </a>
    
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="dropdown"><a class ="dropdown-toggle" data-toggle="dropdown" href="#page">Catégories</a>
              <ul class="dropdown-menu">
                  <li><a href="Livres.php">Livres</a></li>
                  <li><a href="Musique.php"> Musiques</a></li>
                  <li><a href="Vetements.php">Vêtements</a></li>
                  <li><a href="Sport.php">Sports et loisirs</a></li>                  
              </ul>   
          </li>
          <li><a href="#">Ventes Flash</a></li>
          <li><a href="#">Vendre</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="Compte.php"><span class="glyphicon glyphicon-user"></span> Votre compte</a></li>
            <li><a href="Panier.php"><span class="glyphicon glyphicon-shopping-cart"></span> Votre panier </a></li>
            <li><a href="Admin.php"><span class="glyphicon glyphicon-log-in"></span> Admin </a></li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="jumbotron">
    <div class="container text-center">
      <div class="entête">
   <h1>  Livres  </h1> 
          <img src ="images/photolivre.png" style="width:30%">  
        </div>    
     
    </div>
  </div>
    
  <div class="container-fluid bg-3 text-center">    
    <h3> </h3>
    <br>
    <div class="row">
      

      <?php


      // definition du repertoire pour le chemin
      $repertoire="images/";

      //Nom de ma BDD
      $database = "Piscine";

  //connection dans la BDD
        $db_handle = mysqli_connect('localhost', 'root', 'root' );
        $db_found = mysqli_select_db($db_handle, $database);



   //si le BDD existe, faire le traitement suivant 
           if ($db_found) {
                  $cat="Livre";
                  // recupere toutes les données issu d'Artciles qui sont des livres
                 $sql = "SELECT * FROM Articles WHERE Categorie Like '$cat' ";
                 
             $result = mysqli_query($db_handle, $sql);
             // tant qu'il y a un resultat dans la BDD effectuer le traitement suivant
             while ($data = mysqli_fetch_assoc($result) ) {
                ?> 


                
   <div class="col-sm-3"> <?php 
    //affichage du nom du livre et son image 
   echo $data['Nom']."<br> ";  ?> 
    
  <p>  <?php 
    echo $data['Prix'];
   ?>  € <br> </p> 
   <img src="<?php echo $repertoire.$data['Image1']; ?>" width="220" height="330"> <br> <br>  <br> <br> </div> 

    <?php
      
   }//end while
?> <br>  <br>  <?php 
  }//end if 

  //si le BDD n'existe pas
  else {
   echo "Database not found";
  }//end else
  //fermer la connection
  ?>  <?php
  mysqli_close($db_handle);
  ?>




  <br><br>


  </body>
  </html>

