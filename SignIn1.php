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
    alert('bienvenue !! !');
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
        <legend><center> <h2>Sign In</h2></center> </legend>
         <form action="traitement.php" method="post" >
             <label for="nom">Name:</label>
             <input type="text" name="nom" id="name" placeholder="enter your name"> <br>
             <label for="password"> mot de passe:</label>
            <input type="text" name="password" id="mdp" placeholder="enter your password" required> <br>
             <i style="color: red;">
             <?php
                if(!empty($message)){
                    echo $message;
                    
                }
                ?>
            </i>
            </br></br><button type="bouton" name="connecter" > Sign In</button>
            
        </form>
</section> 

</body>


