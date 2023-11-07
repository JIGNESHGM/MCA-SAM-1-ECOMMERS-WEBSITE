<?php

    include "connaction.php"; // Corrected the include file name
    $id = isset($_GET['id']) ? $_GET['id'] : 0; // Use the ternary operator to set a default value if 'id' is not set
    $select = "SELECT * FROM users WHERE id=$id";
    $data = mysqli_query($con, $select);
    $row = mysqli_fetch_array($data);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
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
    </nav>

    <div class="container">
    <h1 class="mt-5">New User Registration Form</h1>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" value="<?php echo $row['password']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Contact</label>
            <input type="tel" class="form-control" name="contact" value="<?php echo $row['contact']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" name="city" value="<?php echo $row['city']; ?>" required>
        </div>
        <div class="mb-3">
            <label name="address" class="form-label">Address</label>
            <textarea class="form-control" id="address" rows="3" name="address" value="<?php echo $row['address']; ?>"></textarea>
        </div>
        <input class="btn btn-primary" type="submit" value="Update" name="Update">
        <a href="User_Details.php" class="btn btn-primary">View User Deta</a>
        
    </form>
</div>
<br><br>
</body>
</html>



<?php
     if (isset($_POST['Update'])) {
        $name = isset($_POST['name']) ? $_POST['name'] : "";
        $password = isset($_POST['password']) ? $_POST['password'] : ""; 
        $email = isset($_POST['email']) ? $_POST['email'] : "";
        $contact = isset($_POST['contact']) ? $_POST['contact'] : "";
        $city = isset($_POST['city']) ? $_POST['city'] : "";
        $address = isset($_POST['address']) ? $_POST['address'] : "";

        $update = "UPDATE `users` SET `name`='$name',`email`='$email',`password`='$password',`contact`='$contact',`city`='$city',`address`='$address' WHERE id='$id' ";
        $data = mysqli_query($con,$update);

        if($data) {
            ?>
            <script>
                alert ("Data Update Successfully");
                window.open("http://localhost/Projact/Addmin/User_Details.php", "self");
            </script>

            <?php
        }
        else {
            ?>
            <script>
                alert ("Please Try agen");
            </script>

            <?php
        }
    }

?>

<script>
        function validateForm() {
            // Get the input elements
            var nameInput = document.getElementById("name");
            var emailInput = document.getElementById("email");
            var passwordInput = document.getElementById("password");
            var contactInput = document.getElementById("contact");
            var cityInput = document.getElementById("city");
            var addressInput = document.getElementById("address");

            // Check if any of the fields are empty
            if (nameInput.value === "" || emailInput.value === "" || passwordInput.value === "" || contactInput.valu === "" ||  cityInput.valu === "" || addressInput.valu === "") {
                alert("All fields must be filled out");
                return false; // Prevent form submission
            }

            return true; // Allow form submission
        }
    </script>
