<?php

    include "connaction.php";

    // fache tabel details 
    $query = "SELECT * FROM users";
    $data = mysqli_query($con,$query);
    $result = mysqli_num_rows($data);
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Group</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <style>
        /* Basic styling for buttons and containers */
        .container_1 {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding-top: 100px;
        }
        .button-group {
            display: flex;
            gap: 10px;
        }
        .button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        /* Responsive layout */
        @media screen and (max-width: 600px) {
            .container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Admin Portal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="User_Details.php">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Product_Detiails.php">Product </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Order_Detiails.php">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br><br><br>
        <h3 align="center">User Details Table</h3>    <br>
    <form action="" method="POST">
            <table align="center" class="table table-bordered">
                <tr align="center" >
                    <td >id</td>
                    <td >Name</td>
                    <td>Email</td>
                    <td>Contact</td>
                    <td>City</td>
                    <td>Address</td>
                    <td colspan="2">Operations</td>
                </tr>
                <?php
                    // tabel details chake and print
                    if($result) {
                        while($row=mysqli_fetch_array($data)) {
                        ?>

                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['contact']; ?></td>
                            <td><?php echo $row['city']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><a class="btn-outline-success" href="User_Update.php ? id=<?php echo $row['id']; ?>">Edit</a></td>
                            <td><a class="btn-outline-danger" id="confirmDelete"  onclick="displayMessage()" href="User_Delite.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                            

                            <!-- <td align="center"><a href="User_Update.php ? id=<?php echo $row['id']; ?>"><input   type="submit" name="submit" value="Update"></a></td>
                            <td align="center"><a href="User_Delite.php  ? id=<?php echo $row['id']; ?> "><input  type="submit" name="submit" value="Delite"></a></td>
                             -->
                        </tr>
         

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>

    <?php
            }            
        }
    ?>
           </table>
        </form>

</body>
</html>

<!-- <script>
        function displayMessage() {
            var confirmResult = confirm("Are you sure you want to delete this item?");
            
            if (confirmResult) {
                // Perform the delete operation using AJAX
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "User_Delite.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        alert("Item deleted successfully.");
                    } else if (xhr.readyState === 4 && xhr.status !== 200) {
                        alert("An error occurred. Item was not deleted.");
                    }
                };
                xhr.send("item_id=123"); // Replace with appropriate data for your use case
            } else {
                alert("Item was not deleted.");
            }
        }
</script> -->