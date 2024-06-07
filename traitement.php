<?php
include("connexion.php");
if(isset($_POST['connecter']))
    {
        $username = $_POST['nom'];
        $password = $_POST['password'];

            $sql = "SELECT * FROM clients WHERE nom='$username' AND mdp='$password'";
            $result = $conn->query($sql);
            
            if ($result->num_rows == 1) {
                //echo "Authentication successful!";
                header("location:choice3.php");
                
            } else {
                echo "Incorrect username or password! Please check your account if necessary!!!";
            }
            
            $conn->close();
        }

        if(isset($_POST['admin']))
    {
        $username = $_POST['name'];
        $password = $_POST['password'];
        if($username=="rodrigue" && $password=="azerty"){
                header("location:SignUp1.php");
                
            } else {
                //echo "Incorrect username or password! Please check your account if necessary!!!";
                header("location:admin.php");
            }
            
            $conn->close();
        }
    
    ?>