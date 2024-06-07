<?php
    include("connexion.php");

    //enregistrement des chauffeurs
    if(isset($_POST['valider']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $tel=$_POST['tel'];
        $numpermis=$_POST['numpermis'];
        $Tvoiture=$_POST['Tvoiture'];
        $plaque=$_POST['plaque'];
        $password=$_POST['password'];
        
        $preparer="INSERT INTO chauffeurs(nom,email,tel,numPermis,Tvoiture,plaqueImmatriculation,mdp) 
        VALUES('$name','$email','$tel','$numpermis','$Tvoiture','$plaque','$password')";
        $execution=mysqli_query($conn,$preparer);
        if($execution){
             echo"reussi";
             header("location:SignIn4.php");

        }
        else{
            echo"echec ce compte existe deja | ces informations appartiennent deja a un autre compte !!!";
            echo $name."       --".$email."       --".$tel."       --".$numpermis."       --".$Tvoiture."       --".$plaque."       --".$password;
              
        }
    }?><?php
        //insertion des clients
    if(isset($_POST['ok']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $tel=$_POST['tel'];
        $password=$_POST['password'];
        
        
        $preparer="INSERT INTO clients(nom,email,tel,mdp) 
        VALUES('$name','$email','$tel','$password')";
        $execution=mysqli_query($conn,$preparer);
        if($execution)
        {
            echo"reussi";
            header("location: SignIn1.php");
            echo '<script>';
            echo 'document.getElementById("message").innerText = "Message à afficher";';
            echo 'alert("Message à afficher");';
            echo '</script>';

        }
        else{
            echo"echec";
            echo $name;
            echo $email;
              echo $tel;
        
        }
    }

    //insertion des reservations
    if(isset($_POST['reserver']))
    {
        $name=$_POST['name'];
        $surename=$_POST['surename'];
        $email=$_POST['email'];
        $dateR=$_POST['date'];
        $heure=$_POST['time'];
        $place=$_POST['place'];
        $telephone=$_POST['telephone'];
        $collection=$_POST['collection'];
        $target=$_POST['point'];
                
        $preparer="INSERT INTO reservations(namec,surename,email,dateR,heure,nb_place,telephone,cpoint,Destination) 
        VALUES('$name','$surename','$email','$dateR','$heure','$place','$telephone','$collection','$target')";
        $execution=mysqli_query($conn,$preparer);
        if($execution){
           // echo"reussi";
        }
        else{
            echo"echec";
        echo $name=$_POST['name'];
        echo $surename=$_POST['surename'];
        echo $email=$_POST['email'];
        echo $dateR=$_POST['date'];
        echo $heure=$_POST['time'];
        echo $place=$_POST['place'];
        echo  $telephone=$_POST['telephone'];
       echo $collection=$_POST['point'];
        
        }
    }
    if(isset($_POST['poster']))
    {
        $cname=$_POST['username'];
        $comment=$_POST['commenttext'];
        $poste=" INSERT INTO commentaire(nom,comment)
        VALUES('$cname','$comment')";
        $execution=mysqli_query($conn,$poste);
        if($execution){
            // echo"reussi";
             header("location:commentaire.php");
         }
         else{
             echo"echec";}
    }
    
                    
?>


