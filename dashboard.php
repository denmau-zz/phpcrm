<?php
require 'db_connection.php';
// function for getting data from database
function get_all_data($conn)
{
    $get_data = mysqli_query($conn, "SELECT * FROM `users`");
    if (mysqli_num_rows($get_data) > 0) {
        echo '<table>
              <tr>
                <th>Username</th>
                <th>Email</th> 
                <th>Action</th> 
              </tr>';
        while ($row = mysqli_fetch_assoc($get_data)) {

            echo '<tr>
            <td>' . $row['username'] . '</td>
            <td>' . $row['user_email'] . '</td>
            <td>
            <a href="update.php?id=' . $row['id'] . '">Edit</a> |
            <a href="delete.php?id=' . $row['id'] . '">Delete</a>
            </td>
            </tr>';

        }
        echo '</table>';
    } else {
        echo "<h3>No records found. Please insert some records</h3>";
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
    <link rel="stylesheet" href="style.css">
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
    <div class="row">
        <input type="text" class="custom-control-inline" name="filter-names" placeholder="Filter by name...      ">
        <a href="insert.php" class="btn btn-primary">Add Contact</a>
    </div>
</div>
<div class="container">
    <div class="mt-2 row">
        <?php
        // calling get_all_data function
        get_all_data($conn);
        ?>
    </div>

</div>

<!--Bootstrap-->
<script src="/js/bootstrap.js"></script>
</body>
</html>
