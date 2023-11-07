<?php
    include "connaction.php"; 
    $id = $_GET['id'];

    $query = "DELETE FROM users WHERE id =".$id;

    
        $res=mysqli_query($con,$query);
        header('Location:User_Details.php');   
        
        if($query) {}
?>