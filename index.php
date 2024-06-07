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
    <title>TaxiApp</title>
</head>
<body>
    <header>
        <img class="logo" src="img/logo.jpeg" alt="TaxiApp"> <strong class="i"> TaxiApp</strong>
        <nav>
            <ul>
                <li><a href="index.php">Acceuil</a></li>
                <li><a href="choice.php">Sign Up</a></li>
                <li><a href="SignIn.php">Sign In</a></li>
                <li><a href="commentaire.php">Commentaire</a></li>
                <li><a href="#about">About Us</a></li>
            </ul>
        </nav>
    </header>
    <section id="hero">
        <div class="container">
            <h2>Your One-Stop Solution for Taxi </h2>
            <p>Ready to experience seamless travel with our innovative Booking and purchaising taxi seats ? Get started now and enjoy hassle-free rides whenever you need them!!!</p>
           
              <a href="choice.php" class="btn btn-primary">Book Now </a>
            
        </div>
    </section>

    <section id="taxi">
        <div class="container">
            <h2>Take a wheel of your next journey with our taxi booking app!.</h2>
            <p>Looking for a convenient way to book your taxi rides, introducing our booking and purchaising taxi seats...</p>
            <img src="img/taxi.jpeg" alt="">
        </div>
    </section>

    <br> <br> <br> <br> <br> <br> <br>
    
    <section id="tax">
        <div class="container">
            <h2>No more queues, just taxis at the touch of your phone!.</h2>
            <p>Tired of waiting for taxis? Say goodbye to the hassle of traditional booking and switch to our user-friendly app..</p>
            <img src="img/a5d68eba-2388-4614-8fdf-2c3f53b0c724.jpeg" alt="">
        </div>

    </section>
    <br> <br> <br> <br> <br> <br> <br>
    <section id="about">
        <div class="container">
            <h2>About TaxiApp</h2>
            <p>TaxiApp is a revolutionary app that combines the convenience of taxi booking with the ease of purchaising taxi seats. We aim to make your daily life easier and more efficient.</p>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Have any questions or need assistance? Feel free to contact us:</p> <br> 
            <ul>
                <li>Email: ngomegnieunice@gmail.com</li>
                <li>Phone: +237 693-697-545</li>
            </ul>
            <a href="#"><img src="img/com.whatsapp.png" alt="" class="imgs"></a>
            <a href="#"><img src="img/com.instagram.android.png" alt="" class="imgs"></a>
            <a href="#"><img src="img/com.github.android.png" alt="" class="imgs"></a>
            <a href="#"><img src="img/com.facebook.lite.png" alt=""class="imgs"></a>
        </div>
    </section>
</main>

        
        <footer>
            <p>&copy;Copyright 2024 EuniceNtes - Toute reproduction interdite</p>
            
        </footer>
    
</body>
</html>