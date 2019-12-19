<?php
    $query = $_GET['q'];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php include 'inc/scripts.php'?>
    <title>Mobile Service App</title>
</head>
<body>
    <?php include 'public_header.php'?>
    <div class="main container">
        <h2>Results: <?= $query ?></h2>
        <hr/>

    </div>
</body>
</html>
