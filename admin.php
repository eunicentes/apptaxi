<?php
    include("connexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/formulaire.css">
    <title>TaxiApp</title>
</head>
<body>
    <header>
        <img class="logo" src="img/logo.jpeg" alt="TaxiApp"> <strong class="i"> TaxiApp</strong>
        <nav>
            <ul>
                <li><a href="index.php">Acceuil</a></li>
                <li><a href="choice.php">Sign Up</a></li>
                <li><a href="commentaire.php">Commentaire</a></li>
                
            </ul>
        </nav>
    </header>
    <section class=" form-contenair">
        <legend><center> <h2>Admin form </h2></center> </legend>
        <p>Contactez-nous au 696494062/677302364 pour vous inscrire en tant que chauffeur</p>
        <style>
          p{
              color:white;
          }
        </style>
         <form action="traitement.php" method="post" >
             <label for="name">Name:</label>
             <input type="text" name="name" id="name" placeholder="enter your name" required> <br>
             <label for="password"> mot de passe:</label>
               <input type="text" name="password" id="password" placeholder="enter your password" required> <br>
                         </i>
            </br></br>
           <center><button type="bouton" name="admin">Sign In </button></center>
           
         </form>
</section> 
<h3>Se connecter en tant que client......? <a href="SignIn3.php">Sign In</a></h3>
<style>
    h3{
        color: white;
        text-align: center;
    }
    button{
        padding:  10px 20px;
    background-color: #0d0e0d;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    }
    button:hover{
        background-color: rgb(231, 231, 7);
    color: black;
    }
</style>
</body>
</html>