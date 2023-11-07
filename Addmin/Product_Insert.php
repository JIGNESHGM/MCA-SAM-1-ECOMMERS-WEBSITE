<?php

include "connaction.php";

if (isset($_POST['Insurt'])) {
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $price = isset($_POST['price']) ? $_POST['price'] : "";
    $discription = isset($_POST['discription']) ? $_POST['discription'] : "";
    

    // File upload  
    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    
    //$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $Image = $target_file;
        // Insert data into the database
        $sql = "INSERT INTO items (image,name, price, discription) VALUES ('$target_file', '$name', '$price','$discription')";
        $result = mysqli_query($con, $sql);

        if ($result) {
            header("Location: Product_Insert.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    } else {
        echo "Error uploading the Image.";
    }
}

mysqli_close($con);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
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
    <!-- Navbar -->
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
                        <a class="nav-link" href="#">Product </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>


    <div class="container">
        <h1 class="mt-5">New User Registration Form</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Product Image</label>
                <input type="file" class="form-control" name="image" accept="Image/*" required> 
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Product Name" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Product Price</label>
                <input type="number" class="form-control" name="price" placeholder="Enter Product Price" required>
            </div>
            <div class="mb-3">
                <label for="contact" class="form-label">Product Discription</label>
                <textarea class="form-control" id="discription" rows="4" name="discription" placeholder="Enter Product Discription" required></textarea>
            </div>

            <input class="btn btn-primary" type="submit" value="Insurt" name="Insurt">
            <a href="Product_Detiails.php" class="btn btn-primary">View Product</a>

        </form>
    </div>

</body>

</html>


<script>
        function validateForm() {
            // Get the input elements
            var imageInput = document.getElementById("image");
            var namelInput = document.getElementById("name");
            var priceInput = document.getElementById("price");
            var discriptionInput = document.getElementById("discription");

            // Check if any of the fields are empty
            if (imageInput.value === "" || namelInput.value === "" || priceInput.value === "" || discriptionInput.valu === "" ) {
                alert("All fields must be filled out");
                return false; // Prevent form submission
            }

            return true; // Allow form submission
        }
    </script>
