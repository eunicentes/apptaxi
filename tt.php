<?php
include("connexion.php");
if(isset($_POST['accepter'])){
    
    $username = $_POST['id'];
    //$name=$_POST['nomc'];
    //$num=$_POST['num'];
    

        $sql = "UPDATE reservations SET statuss='reservation accepté'  WHERE id=$username ";
        $result = $conn->query($sql);
        if($conn->query($sql)==TRUE){
            echo $username;
            header("location:board2.php");
        }else{
            echo"echec lors de l'acceptation";
        }
}
if(isset($_POST['refuser'])){
    
    $username = $_POST['id'];
    
    

        $sql = "UPDATE reservations SET statuss='reservation refusé'  WHERE id='$username' ";
        $result = $conn->query($sql);
        if($conn->query($sql)==TRUE){
             header("location:board2.php");
            
        }
        else{
            echo"echec ";
        }
}

?>