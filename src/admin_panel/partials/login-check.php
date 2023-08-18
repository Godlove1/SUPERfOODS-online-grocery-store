<?php

    if(!isset($_SESSION['user']))  {
        //User is not logged in
        header('location:login');
        exit();

    }


?>