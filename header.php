<style>
    .logo {
        margin-left: -190px;
    }

    .logo_text{
        color: #00ffff;
    }

    .logo_Logout{
        color: #00ffff;
        
    }

    .logo_Logout {
        margin-right: 30px;
    }
</style>


<nav class="navbar navbar-inverse navabar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                
            </button>

            <!-- serch bare code -->
            
            <?php
    if(isset($_SESSION['email'])) {
        
?>
            
<?php } ?>
                
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                    if (isset($_SESSION['email'])){
                ?>

<!-- Login menu code -->
                <li class="logo_text"><img src="img/Logo.png" alt="Logo" width="80px" class="logo">Connect</li>
                <li><a href="products.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                 <li><a href="index.php"><span class="glyphicon glyphicon-info-sign"></span>About</a></li>
                 <li><a href="index.php"><span class="glyphicon glyphicon-earphone"></span>Contact</a></li>
                 <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                 <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                 <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                 <?php
                     }else{
                 ?>     
                 <!-- logout Menu code -->
                 <li class="logo_Logout"><img src="img/Logo.png" alt="Logo" width="70px" class="logo_Logout">Connect</li>
                 <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                 <li><a href="about.php"><span class="glyphicon glyphicon-info-sign"></span>About</a></li>
                 <li><a href="index.php"><span class="glyphicon glyphicon-earphone"></span>Contact</a></li>
                 <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                 <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <?php
               }
            ?>
            </ul>
        </div>
    </div>
</nav><br>

<?php
                    if (isset($_SESSION['email'])){
                ?>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="input-group-btn">
                                        <button class="btn btn-success" type="button">Search</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <?php } ?>