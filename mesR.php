<?php
 include("connexion.php");
 if(isset($_POST['connecter'])){
    $cel=$_POST['cel'];
    $sql = "SELECT * FROM reservations WHERE   telephone==$cel";
    $result = $conn->query($sql);

    if ($result->num_rows >= 1){
        if($result->num_rows >= 1){
            while ($row = $result->fetch_assoc())
        
            {
            
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
                    "<p>place number :<strong> ". $row["nb_place"]. "</strong>";
                echo"</div>";
    
            echo"</div>";
        
        } 
        
   
        }
    }
echo"Aucune réservation trouvée.";
    }   

$conn->close();

?>