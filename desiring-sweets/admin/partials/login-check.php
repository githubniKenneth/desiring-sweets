<?php

    // authorization - Access Control
    // check whether the user is logged in or not
    if(!isset($_SESSION['user'])) // if user session is not set
    {
        // user is not logged in
        // redirect to log in page with message
        $_SESSION['no-login-message'] = "<div class='error text-center'>Please login to access Admin Panel.</div>";
        // redirect to log in page
        header('location:'.SITEURL.'admin/login.php');
    }

?>