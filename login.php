<?php require 'db-utils.php' ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login - Paglaum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/base/base-style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/components/components.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/atoms.css" />
    <script src="main.js"></script>
</head>
<body>
<nav class="navbar">
    <ul>
        <li><a href="#" class="brand">PAGLAUM</a></li>
        <li><a href="login.php" class="navlink active">Login</a></li>
        <li><a href="register.html" class="navlink" >Register</a></li>
        <li><a href="#" class="navlink" >About</a></li>
    </ul>
</nav>
<main>
    <div class="container">
        <div class="row">
            <div class="column column-50 column-offset-25">
                <div class="card label-card">
                    <h3>Paglaum User Login</h3>
                    <hr>
                    <?php
                        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                            if(isUserFound($_POST['username'])) echo "<span class='alert warning'>Account Found</span>";
                            else echo "<span class='alert danger'>Account not found</span>";
                        }
                    ?>
                    <form action="login.php" method="post">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password">
                        <div class="row">
                            <button type="submit" class="column">Login</button>
                            <a href="#" class="column button button-outline">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>
