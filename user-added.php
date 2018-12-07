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
        <li><a href="login.php" class="navlink">Login</a></li>
        <li><a href="register.html" class="navlink active" >Register</a></li>
        <li><a href="#" class="navlink" >About</a></li>
    </ul>
</nav>
<main>
    <div class="container">
        <div class="row">
            <div class="column">
                <div class="card">
                    <h1>Succesfully Added</h1>
                    <ul style="list-style-type: none">
                        <li><strong><?php echo "" . $_POST['firstname'] . " " . $_POST['lastname']; ?></strong></>
                        <li><em><?php echo $_POST['username'] ?></em></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>
