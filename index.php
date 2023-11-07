<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Mobile Store</title>
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
          <div id="bannerImage">
              <div class="container">
                   <center>
                     <?php
            include "header.php";
           ?>
                   <div id="bannerContent" class="msg_div">
                     <h1>CONNECT TO US .</h1>
                       <p>Prmeum Brands Coonect Technology</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
          
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center> 
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>

<br><br><br>

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
        <h6><center>Connect</center>
            
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
<h5><center>connect_store23@gmail.com</center></h5>
  </div>
</div>



<div class="row1">
  <div class="column1" style="background-color:black;">
    <center>   <h3><u>connect</u></h3>
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
