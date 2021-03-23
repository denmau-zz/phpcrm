<?php
require 'db_connection.php';

if (isset($_POST['username']) && isset($_POST['email'])) {

    // check username and email empty or not
    if (!empty($_POST['username']) && !empty($_POST['email'])) {

        // Escape special characters.
        $username = mysqli_real_escape_string($conn, htmlspecialchars($_POST['username']));
        $user_email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['email']));

        //CHECK EMAIL IS VALID OR NOT
        if (filter_var($user_email, FILTER_VALIDATE_EMAIL)) {

            // CHECK IF EMAIL IS ALREADY INSERTED OR NOT
            $check_email = mysqli_query($conn, "SELECT `user_email` FROM `users` WHERE user_email = '$user_email'");

            if (mysqli_num_rows($check_email) > 0) {

                echo "<h3>This Email Address is already registered. Please Try another.</h3>";

            } else {

                // INSERT USER'S DATA INTO THE DATABASE
                $insert_query = mysqli_query($conn, "INSERT INTO `users`(username,user_email) VALUES('$username','$user_email')");

                //CHECK DATA INSERTED OR NOT
                if ($insert_query) {
                    echo "<script>
                    alert('Record has been inserted');
                    window.location.href = 'dashboard.php';
                    </script>";
                    exit;
                } else {
                    echo "<h3>Opp's something wrong!</h3>";
                }
            }

        } else {
            echo "Invalid email address. Please enter a valid email address";
        }
    } else {
        echo "<h4>Please fill all fields</h4>";
    }

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP CRM Dashboard</title>

    <!--    bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<nav class="nav justify-content-between bg-light">
    <span class="px-5"><a href="http://localhost/phpcrm" class="navbar-brand">PHP CRM</a></span>
    <span class="d-inline-flex text-right">
        <a class="nav-item nav-link" href="http://localhost/phpcrm"><span class="navigation-item">Log Out</span></a>
    </span>
</nav>

<div class="container">
    <div class="mt-2 row">
        <form action="insert.php" method="post">
            <div class="form-row">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Enter your full name" required class="form-control">
            </div>

            <div class="form-row">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Enter your email" required class="form-control">
            </div>
            <div class="form-row">
                <input type="submit" value="Insert" class="btn btn-primary mt-2">
            </div>
        </form>
    </div>

</div>

<!--Bootstrap-->
<script src="/js/bootstrap.js"></script>
</body>
</html>