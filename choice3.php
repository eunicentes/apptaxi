<?php
include("connexion.php");
include("insertion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <title>TaxiApp</title>
</head>
<body class="cole">
<script>
    // Script JavaScript pour afficher une alerte
    alert('Action reussie');
</script>
    <header>
        <img class="logo" src="img/logo.jpeg" alt="TaxiApp"> <strong class="i"> TaxiApp</strong>
        <nav>
            <ul>
                <li><a href="index.php">home</a></li>
                <li><a href="#booking">Reserve</a></li>
                <li><a href="commentaire.php">Commentaire</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </nav>
    </header>
    
     <section id="vitrine">
        <div class="container">
            <legend><center> <h2>Notre flotte</h2></center> </legend>
            <div class="fleet-gallery">
                <img src="img/1 (1).jpg" alt="taxi1" class="im">
                <img src="img/2.jpg" alt="taxi2" class="im">
                <img src="img/3.jpg" alt="taxi3" class="im">
                <img src="img/4.jpg" alt="taxi4" class="im">
                <img src="img/5.jpg" alt="taxi5" class="im">
                <img src="img/6.jpg" alt="taxi6" class="im">
                <!--<img src="img/7.jpg" alt="taxi7" class="im">-->
            </div>
        </div>
     </section>
     <section id="booking">
         <div class="contenair">
            <legend><center> <h2>Reserve</h2></center> </legend>
            <center> 
             <form action="choice3.php" method="post" class="css">
                <label for="name">Name:</label>
                 <input type="text" name="name" id="name" placeholder="enter your name" required> <br>
                 <label for="surname">Surname:</label>
                 <input type="text" name="surename" id="surename" placeholder="enter your surname"> <br>
                 <label for="email">Email:</label>
                 <input type="email" name="email" id="email" placeholder="enter your email" required> <br>
                 <label for="telephone">Phone number:</label>
                 <input type="tel" name="telephone" id="telephone" placeholder="enter your phone number" required> <br>
                 <label for="collection">Collection point:</label>
                 <select name="collection" id="collection">
                     <option name="poin" value="Carrefout Borongo">Carrefour Borongo</option>
                     <option name="poin" value="Commissariat">Commissariat</option>
                     <option name="poin" value="Guerite">Guerite</option>
                     <option name="poin" value="LMD">LMD</option>
                     <option name="poin" value="Pakem">Pakem</option>
                     <option name="poin" value="MobileOil Manwi">MobileOil Manwi</option>
                     <option name="poin"value="Carrefour Aeroport">Carrefour Aeroport</option>
                     <option name="poin"value="Marhaba">Marhaba</option>
                 </select> <br>
                 <label for="date">Reservation date:</label>
                 <input type="date" name="date" id="date" placeholder="enter the reservation date" required><br>
                 <label for="time">Reservation time:</label>
                 <input type="time" name="time" id="time" placeholder="enter the reservation time" required><br>
                 <label for="point">Target:</label>
                 <select name="point" id="point">
                     <option name="poin" value="Carrefout Borongo">Carrefour Borongo</option>
                     <option name="poin" value="Commissariat">Commissariat</option>
                     <option name="poin" value="Guerite">Guerite</option>
                     <option name="poin" value="LMD">LMD</option>
                     <option name="poin" value="Pakem">Pakem</option>
                     <option name="poin" value="MobileOil Manwi">MobileOil Manwi</option>
                     <option name="poin"value="Carrefour Aeroport">Carrefour Aeroport</option>
                     <option name="poin"value="Marhaba">Marhaba</option>
                 </select> <br>
                 <label for="place">Place number:</label>
                  <input type="number" name="place" id="place" min="1" max="6" placeholder="enter the place number" required> <br>
                  <label for="place">prix unitaire: 400_FCFA</label></br></br>
                 <input type="submit" name="reserver" value="Reserve"  >
             </form>
            </center>
         </div>
     </section>
     
   
     <footer>
        <p>&copy;Copyright 2024 EuniceNtes - Toute reproduction interdite</p>
        
    </footer>
</body>
</html>
