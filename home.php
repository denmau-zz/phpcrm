<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP CRM</title>
    <!--    bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
<nav class="nav justify-content-between bg-light">
    <span class="px-5"><a href="http://localhost/phpcrm" class="navbar-brand">PHP CRM</a></span>
    <span class="d-inline-flex text-right">
        <a class="nav-item nav-link" href="#"><span class="navigation-item">log In</span></a>
        <a class="nav-item nav-link" href="#"><span class="navigation-item">Sign Up</span></a>
    </span>
</nav>


<section>
    <div class="container ml-auto mr-auto">
        <div class="col-md-6">
            <h1>Please Log in to proceed</h1>
            <br/>
            <form action="" method="post" class="form">
                <div class="form-row">
                    <label for="username">Username</label>
                    <input type="text" name="username" value="" class="form-control">
                </div>
                <div class="form-row">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-row">
                    <a href="http://localhost/phpcrm/dashboard.php" class="btn btn-success mt-2">Submit
                    </a>
                </div>
            </form>
        </div>
    </div>
</section>

<!--Bootstrap-->
<script src="/js/bootstrap.js"></script>
</body>
</html>


