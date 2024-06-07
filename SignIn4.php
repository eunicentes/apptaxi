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
<script>
    // Script JavaScript pour afficher une alerte
    alert('you have been registered"');
</script>
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
        <legend><center> <h2>Sign-in form</h2></center> </legend>
         <form action="traitemant1.php" method="post" >
             <label for="name">Name:</label>
             <input type="text" name="name" id="name" placeholder="enter your name" required> <br>
             <label for="password"> mot de passe:</label>
               <input type="text" name="password" id="mdp" placeholder="enter your password" required> <br>
             <?php
                if(!empty($message)){
                    echo $message;
                }
                ?>
            </i>
            </br></br>
           <center><button type="bouton" name="signin">SignIn </button></center>
           
         </form>
</section> 
<h3>Sign in as a customer......? <a href="SignIn3.php">Sign In</a></h3>
<style>
    h3{
        color: white;
        text-align: center;
    }
</style>
</body>
</html>