<?php

    include_once 'inc/database.php';
    include_once 'inc/auth.php';

    if (isset($_COOKIE['logged'])){
        header("Location: /service");
    }


    if (isset($_POST['inputUsername'])){
        login($_POST['inputUsername'], $pdo);
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="./style/signin.css" />
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="./bootstrap/js/bootstrap.js"></script>
    <title>Mobile Service App</title>
</head>
<body class="text-center bg-custom">
    <form class="form-signin" method="post" action="">
        <h1 class="h3 mb-3 font-weight-normal">Log In</h1>
        <?php
            if (isset($_GET['auth']) && $_GET['auth'] == "false"){
                ?>
                <div class="alert alert-danger">
                    <p>Not authorized!</p>
                </div>
            <?php
            }
        ?>
        <label for="inputUsername" class="sr-only">Email address</label>
        <input type="text" id="inputUsername" name="inputUsername" class="form-control mb-3" placeholder="EMBG" required autofocus>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-dark">&copy; Mobile Service App</p>
    </form>
</body>
</html>
