<?php
if (isset($_COOKIE['logged'])){ $user = $_COOKIE['logged'];} else {header("Location: /login.php?auth=false");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php include '../inc/scripts.php'?>
    <title>Sell | Mobile Service App</title>
</head>
<body>
    <?php include '../header.php'; ?>
    <div class="main container">
        <h2><i class="fas fa-cart-plus"></i> Sell</h2>
        <hr/>
    </div>
</body>
</html>
