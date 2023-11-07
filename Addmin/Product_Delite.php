<?php
    include "connaction.php"; 
    $id = $_GET['id'];

    $query = "DELETE FROM items WHERE id =".$id;

    
        $res=mysqli_query($con,$query);
        header('Location:Product_Detiails.php');        
?>