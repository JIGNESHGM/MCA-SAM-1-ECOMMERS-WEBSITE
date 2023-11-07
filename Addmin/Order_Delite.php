<?php
    include "connaction.php"; 
    $id = $_GET['id'];

    $query = "DELETE FROM users_items WHERE id =$id";

    
        $res=mysqli_query($con,$query);
        header('Location:Order_Detiails.php');        
?>