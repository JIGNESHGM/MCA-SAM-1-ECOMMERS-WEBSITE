<?php
    session_start();

    include "check_if_added.php";
    // include_once 'connection.php';
    // $res=$con->query("SELECT * FROM product_details ");
    // while($row=$res->fetch_assoc())
    // {
 
    //     echo '<img src="'.$row['Prduct_Image'].'" height=200>';

    // }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                include "header.php";
            ?>
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to our Connect Store!</h1>
                    <p>We have the best Electronic accessories,we have all in one place.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/Dell Inspiron .jpg" alt="Cannon">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Dell Inspiron 7430 2in1 Touch Laptop</h3>
                                    <p>Price: Rs. 86990.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <p>
                                                <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(13)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=13" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                        </p>
                                        
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/Lenovo XYIN IdeaPad 3.jpg" alt="Sony DSLR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Lenovo XYIN IdeaPad 3 Thin and Light Laptop</h3>
                                    <p>Price: Rs. 54993.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/Sony Alpha Camera.jpg" alt="Oppo K 10">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Sony Alpha Camera</h3>
                                    <p>Price: Rs. 230577.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/BLACKPOOLR camera.jpg" alt="Olympus">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>BLACKPOOL®</h3>
                                    <p>Price: Rs. 2999.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/HP 14s-fq1092AU Laptop.jpg" alt="apple airpods pro" width="222" height="52">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Titan Model #301</h3>
                                    <p>Price: Rs. 13000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p	>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/Asus MB511WS VivoBook 16X Laptop.jpg" alt="Titan 201" width="435" height="509">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Asus MB511WS VivoBook 16X Laptop</h3>
                                    <p>Price: Rs. 55349.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/Viva Magenta, Mobile Phone.jpg" alt="htm milan" width="256" height="173">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>HMT Milan</h3>
                                    <p>Price: Rs. 8000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/TP-Link AC750 Wifi Range Extender .jpg" alt="htm milan" width="256" height="173">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>TP-Link AC750 Wifi Range Extender</h3>
                                    <p>Price: Rs. 1899.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/Noisefit-Halo-Plus-Smart-watch.jpg" alt="htm milan" width="256" height="173">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Noise Halo Plus Elite Edition Smartwatch </h3>
                                    <p>Price: Rs. 4999.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/boAt Airdopes.jpg" alt="htm milan" width="256" height="173">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>boAt Airdopes 170</h3>
                                    <p>Price: Rs. 1299.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/OnePlus 11R.jpg" alt="htm milan" width="256" height="173">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>OnePlus 11R</h3>
                                    <p>Price: Rs. 79900.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/smart apeaker.png" alt="htm milan" width="256" height="173">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>SMART Speaker</h3>
                                    <p>Price: Rs. 2999.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(14)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=14" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <!-- <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/Canon Printer.png" alt="htm milan" width="256" height="173">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Canon Pixma E470 Inkjet Multi-function Color Wi-Fi Printer</h3>
                                    <p>Price: Rs. 4999.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(15)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=15" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/Apple-iPhone-15-blue.jpg" alt="htm milan" width="256" height="173">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Apple iPhone 15 128GB Blue</h3>
                                    <p>Price: Rs. 79900.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(16)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=16" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div> -->
                   
                    <!-- <div class="col-md-3 col-sm-6">
                        <div class="thumbnail"><a href="cart.php"><a href="cart.php"><a href="cart.php"></a><a href="cart.php"><a href="cart.php"></a><a href="cart.php"></a><a href="cart.php"><a href="cart.php"></a><a href="cart.php"></a><a href="cart.php"></a><a href="cart.php"><a href="cart.php"><a href="cart.php"></a><a href="cart.php"></a><a href="cart.php"></a><a href="cart.php"></a><a href="cart.php"></a><a href="cart.php"></a><a href="cart.php"></a><a href="cart.php"></a><a href="cart.php"></a><a href="cart.php"><img src="img/boat air phone.jpeg" alt="Favre Leuba" width="223" height="242">
                          <center>
                              <div class="caption">
                                    <h3>boat earphone </h3>
                                    <p>Price: Rs. 600.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(20)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=20" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                            </div>
                          </center>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/mobile watch.jpeg" alt="Raymond shirt">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>smart watch</h3>
                                    <p>Price: Rs. 1500.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(21)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=21" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail"><a href="cart.php"><a href="cart.php"><img src="img/vivo charger.jpeg" alt="Charles shirt" width="421" height="380"></a></a>
                          <center>
                              <div class="caption">
                                    <h3>vivo charger</h3>
                                    <p>Price: Rs.400.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(22)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=22" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/wireless speaker.jpeg" alt="HXR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>wireless speaker</h3>
                                    <p>Price: Rs. 400.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(23)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=23" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/single ear blutooth.jpeg" alt="PINK">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>single ear bluetooth</h3>
                                    <p>Price: Rs.300 .00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(24)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=24" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
                <center> 
               </center>
               </div>
           </footer>
        </div>
    </body>
</html> -->


<br><br><br><br><br><br>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.column1 {
    float: left;
    width: 20%;
    padding: 10px;
    height: 300px; /* Should be removed. Only for demonstration */
  }
  
  /* Clear floats after the columns */
  .row1:after {
    content: "";
    display: table;
    clear: both;
  }
  .fa {
    padding: 25px;
    font-size: 30px;
    width: 30px;
    text-align: center;
    text-decoration: none;
    color: rgb(60, 171, 211);
  }
  
  .fa:hover {
      opacity: 0.7;
  }
  
  .row1 p{
    color: aqua;
  }
.row h2
{
    color:white;
}


    
    /* Create four equal columns that floats next to each other */

    /* Clear floats after the columns */
    .row1 h3
    {
    color:white;
    }
    .row1 h4
{
    color:rgba(200, 203, 200, 0.685);
}
.row h5
{
    color:rgba(200, 203, 200, 0.685);
}
.row1 h6{
    color: rgba(200, 203, 200, 0.685);
}
.row h6{
    color: rgba(200, 203, 200, 0.685);;
}
</style>
</head>
<body>



<div class="row">
  <div class="column" style="background-color: black;">
    <img src="img/1.png " style=" float:left;height:50px;width:50px;margin:10px 215px;">
        <br><br><br>
        <h2><b><center>ADDRESS</center></b></h2>
        <h6><center>Group Name</center>
            
            <center>146, yuma street</center>
        
          <center>  Denver CO 364034</center>
        </h6>
        
  </div>
  <div class="column" style="background-color:black;">
    <img src="img/2.png" style="float:left;height:90px;width:90px;margin:-10px 180px;">
        <br><br><br>
        <h2><b><center>CONTACT</center></b></h2>
        <h5><center> +91 7858762031</center> </h5>
  </div>
  <div class="column" style="background-color:black;">
    <img src="img/3.png " style=" float:left;height:55px;width:50px;margin:10px 215px;"><br>
<h2><b><center>E-MAIL</center></b></h2> 
<h5><center>e_store23@gmail.com</center></h5>
  </div>
</div>



<div class="row1">
  <div class="column1" style="background-color:black;">
    <center>   <h3><u>E-Store</u></h3>
        <h6>©2023</h6></center>
  </div>
  <div class="column1" style="background-color:black;">
    <center>  <h3><u>Customers</u></h3>
        <h6>Buyer<br>
            Supplier</h6></center>
  </div>
  <div class="column1" style="background-color:black;">
    <center> <h3><u>Company</u></h3>
        <h6>about us<br>
            careers<br>
        contact us</h6></center>
  </div>
  <div class="column1" style="background-color:black;">
    <center> <h3><u>Further Information</u></h3>
        <h6>Term & Conditions<br>
    Privacy Policy</h6></center>
  
  </div>
  <div class="column1" style="background-color:black;">
    <center><h3><u>Follow us</u></h3>
        <a href="#" class="fa fa-twitter"></a>
        <a href="https://www.instagram.com/samsungfact/" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-whatsapp"></a>
        <a href="#" class="fa fa-telegram"></a>
       </center>
       </div>
</div>
</body>
</html>
