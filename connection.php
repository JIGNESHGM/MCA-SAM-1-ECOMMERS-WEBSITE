<?php
    $user ="localhost";
    $username = "root";
    $pass = "";
    $dbname = "stor";

    $con = new mysqli ($user,$username,$pass,$dbname);

    if($con) {
        echo "";
    }

    else {
        echo ("Connaction fiale" . $con->connect_error);
    }
?>