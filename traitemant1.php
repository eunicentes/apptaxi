<?php
    include("connexion.php");
    if(isset($_POST['signin']))
    $username = $_POST['name'];
    $password = $_POST['password'];
        $sql = "SELECT * FROM chauffeurs WHERE nom='$username' AND mdp='$password'";
        $result = $conn->query($sql);
        
        if ($result->num_rows >= 1) {
            echo "Authentication successful!";
            header("location:Untitled-1.php");
            
        } else {
           // echo "Incorrect username or password! Please check your account if necessary!!";
           header("location:SignIn.php");
          echo "<script>
                 alert('Incorrect username or password! ')        
          </script>";
        }
        
        $conn->close();
        
?>