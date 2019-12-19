<?php
if (isset($_COOKIE['logged'])){ $user = $_COOKIE['logged'];} else {header("Location: /login.php?auth=false");}

    $manufacturerName = "Apple";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php include '../../inc/scripts.php'?>
    <title>Edit manufacturer | Mobile Service App</title>
</head>
<body>
<?php include '../../header.php'; ?>
<div class="main container">
    <h2>Edit manufacturer</h2>
    <hr/>
    <div class="row">
        <div class="col-md-4">
            <form class="">
                <label for="inputManufacturerName" class="sr-only">Manufacturer name</label>
                <input type="text" id="inputManufacturerName" name="manufacturerName" class="form-control mb-3" placeholder="Name" value="<?= $manufacturerName ?>" required autofocus>

                <button class="btn btn-sm btn-primary" type="submit">Update</button>
                <a href="index.php" class="btn btn-link">Back</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
