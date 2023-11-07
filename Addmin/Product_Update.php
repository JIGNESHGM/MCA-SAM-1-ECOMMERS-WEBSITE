<?php
include "connaction.php"; // Corrected the include file name
$id = isset($_GET['id']) && !empty($_GET['id']) ? $_GET['id'] : 0; // Use the ternary operator to set a default value if 'id' is not set or empty
$select = "SELECT * FROM items WHERE id = $id";
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
        <h1 class="mt-5">New Product Registration Form</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="image" class="form-label">Product Image</label>
                <input type="file" class="form-control" name="image" accept="Image/*" value="<?php echo $row['image']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Product Name" value="<?php echo $row['name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Product Price</label>
                <input type="number" class="form-control" name="price" placeholder="Enter Product Price" value="<?php echo $row['price']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="discription" class="form-label">Product Discription</label>
                <textarea class="form-control" id="discription" rows="4" name="discription" placeholder="Enter Product Discription"  value="<?php echo $row['discription']; ?>" required></textarea>
            </div>

            <input class="btn btn-primary" type="submit" value="Update" name="Update">

        </form>
    </div>

<br><br>
</body>
</html>

<?php
if (isset($_POST['Update'])) {
    $image = $_FILES['image'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $discription = $_POST['discription'];

    
    if(isset($_FILES["image"]["name"])) {
        // File upload  
        $target_dir = "../img/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // //$stmt = "UPDATE `items` SET `name`='$name',`price`=$price,`discription`='$discription',`image`='$target_file' WHERE 'id'= $id ";
            // $stmt = "UPDATE `items` SET `name`='$name',`price`=$price,`discription`='$discription',`image`='$target_file' WHERE 'id'=$id";
            $stmt = "UPDATE `items` SET `name`='$name', `price`=$price, `discription`='$discription', `image`='$target_file' WHERE `id`=$id";
            // echo $stmt;
            // exit;
            $stmt = mysqli_query($con, $stmt);
        }
    } else {
        $stmt = "UPDATE `items` SET `name`='$name', `price`=$price, `discription`='$discription' WHERE `id`=$id";
        echo $stmt;
        die();
        $stmt = mysqli_query($con, $stmt);
    }
    
   
   
    
    
    
    if ($stmt) {
        ?>
        <script>
            alert("Data Update Successfully");
            window.open("http://localhost/Projact/Addmin/Product_Detiails.php", "_self");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Please Try Again");
        </script>
        <?php
    }
}
?>


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
