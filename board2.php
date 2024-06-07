<?php

?>
       <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/form.css">
        <title>TaxiApp</title>
        </head>
        <body class="col">
        <header>
        <img class="logo" src="img/logo.jpeg" alt="TaxiApp"> <strong class="i"> TaxiApp</strong>
        <nav>
            <ul>
                <li><a href="index.php">Acceuil</a></li>
                <li><a href="commentaire.php">Commentaire</a></li>
                
            </ul>
        </nav>
    </header>
    <div class="dashboard">
        <?php
        echo"<strong>La eservation à été traitée</strong>";
        ?>
        <h2>Tableau de bord</h2>
            
                <?php
                    include("connexion.php");
                    $sql = "SELECT * FROM reservations ";
                $result = $conn->query($sql);
                //echo"<table border=2>";
                if ($result->num_rows > 0) {
                    //echo "<table border=1><center>";
                    $action="tt.php";
                    $method="post";
                    $id="id";
                    echo"<form action=$action method=$method>";
                    while ($row = $result->fetch_assoc()) {
                        
                        echo"<div class='reservation'>";
                            echo"<div class='info'>";
                            
                                echo "<p>numero reservation::<strong>" . $row["id"] . "</strong>".
                                "<p>Customer:<strong>" . $row["namec"] . "</strong>".
                                "<p>Surname:<strong>". $row["surename"] ."</strong>".
                                "<p>Phonenumber:<strong>". $row["telephone"]."</strong>".
                                "<p>Collection point: <strong>". $row["cpoint"]."</strong>".
                                "<p>Target: <strong>". $row["Destination"]."</strong>".
                                "<p>reservation date:<strong>  " . $row["dateR"] . "</strong>".
                                "<p>customer address:<strong> ". $row["email"] . "</strong>".
                                "<p>reservation time  :<strong>" . $row["heure"] . "</strong>".
                                "<p>place number :<strong> ". $row["nb_place"]. "</strong>".
                                "<p>Status de la reservation :<strong> ". $row["statuss"]. "</strong>";
                                $idd=$row["id"];
                            echo"</div>";

                            echo"<div>";

                                echo "<button  name='accepter' class='actions' ><a ?id=" . $row["id"] . "'>Accepter</a></button>";
                                echo "<button  name='refuser' class='actions'><a ?id=" . $row["id"] . "'>Refuser</a></button>";
                                echo"<input type='text' hidden name=$id id='name' placeholder='enter your name' value=$idd > <br>";
                                //le chauffeur entre ses informations afin de valider la reservation à son nom dans la base de donnéé
                            //echo"<input type='text'  name='nomc' id='name' placeholder='enter your name' value='' required> <br>";
                                //echo"<input type='text'  name='num' id='name' placeholder='enter your number' value='' required> <br>";
                            echo"</div>";

                        echo "</div>";
                        
                    }
                    echo"<form>";
                   // echo "</center></table>";
                } else {
                    echo "Aucune réservation trouvée.";
                }
                
                $conn->close();
                
                ?>
                </div>
            <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            background-image:url('taxi\ phone.jpeg') ;
             background-size:cover;
              backdrop-filter: blur(13px);
    
        }
        
        header {
    background-color: rgba(220, 223, 29, 0.993);
    padding: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
.logo{
    height: auto;
    width: 80px;
    border-radius: 44px;
}
.i{
    font-size: 18px;
}
.contenair{
    width: 480px;
    margin: 0 auto;
}
nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    text-align:right;
}

nav li {
    display: inline-block;
    margin-right: 20px;
}

nav a {
    text-decoration: none;
    color: rgb(20, 20, 20);
    font-weight: bold;
}
        .dashboard{
            background-image:url('taxi\ phone.jpeg') ;
             background-size:cover;
              backdrop-filter: blur(13px);
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .reservation{
            background-color: #f9f9f9;
            border: 1px solid #e0e0e0;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
        }
        .reservation .info{
            display: inline-block;
            width: 70%;
        }
        .reservation .actions{
            display: inline-block;
            width: 30%;
            text-align: center;
        }
        .actions{
            padding: 10px 10px;
            margin: 10px;
            background-color: #bad32a;
            color: #fff;
            border: none;

            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .actions:hover{
            background-color: black;
        }
    </style>
        </body>
        </html>
       