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
                
            </ul>
        </nav>
    </header>
    <?php
     $sql = "SELECT * FROM commentaire";
     $result = $conn->query($sql);
     //echo"<table border=2>";
     if ($result->num_rows > 0) {
         echo "<center>";
         echo"<h1>Commentaires</h1>";
         while ($row = $result->fetch_assoc()) {
             //echo"<tr>";
            // echo"<div class='contenair'>";
             
                 echo"<div class='comment'>";
                     echo "nom:<strong>" . $row["nom"] . "</strong> <br>".
                     "Commentaire:<strong>" . $row["comment"] . "</strong>";
                 echo"</div>";
            // echo "</div>";
             //echo"</tr>";
         }
            echo "</center>>";
     } else {
         echo "Aucun commentaire trouve.";
     }
     
     $conn->close();
    ?>
    <!--<div class="contenair">
       <h1>Commentaires</h1>
    <div class="comment">
        <h3>Alexandre</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, eligendi consequuntur maxime in cumque quis reiciendis esse temporibus blanditiis rerum aperiam dolorem illum dolorum, possimus, facilis eius eveniet distinctio corrupti.</p>
    </div>
    <div class="comment">
        <h3>Alexei</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, aspernatur mollitia. Soluta, voluptatibus cum nesciunt explicabo provident, voluptate voluptates possimus sed, eos veritatis molestiae repudiandae iste obcaecati sint aut. Sed.</p>
    </div>
    <div class="comment">
        <h3>Samira</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, aspernatur mollitia. Soluta, voluptatibus cum nesciunt explicabo provident, voluptate voluptates possimus sed, eos veritatis molestiae repudiandae iste obcaecati sint aut. Sed.</p>
    </div>
    <div class="comment">
        <h3>Sonia</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, aspernatur mollitia. Soluta, voluptatibus cum nesciunt explicabo provident, voluptate voluptates possimus sed, eos veritatis molestiae repudiandae iste obcaecati sint aut. Sed.</p>
    </div>-->
    <center>
    <form action="insertion.php" method="post" id="commentform">
        <label for="username" id="user">Nom:</label> <br>
        <input type="text" id="username" name="username"> <br>
        <label for="commenttext">Commentaire:</label><br>
        <textarea name="commenttext" id="commenttext" cols="20" rows="10"></textarea><br>
        <button  name="poster" type="bouton"> Poster le commentaire</button>
    </form>
    </center>
    
</div>
</body>
</html>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        padding: 0;
        
    }
    
    .comment{
        border: 1px solid #ccc;
        padding: 20px;
        margin-bottom: 15px;
        padding-bottom:5px
        margin: 0 auto;
        display: flex;
        width: 40%;
    flex-direction: column;
    align-items: center;
    justify-content: center;
      background-color: #f9f9f9;
      color: rgb(26, 25, 25);
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    }
    button{
        padding:  10px 20px;
    background-color: #0d0e0d;
    color: rgb(216, 230, 32);
    border: none;
    border-radius: 5px;
    cursor: pointer;
    }
   
    input[type="text"]{
    width: 20%;
    padding: 10px;
    margin-bottom: 5px;
    margin: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
   background-color: rgb(15, 15, 14);
   color: rgb(213, 235, 18);
}
   
</style>