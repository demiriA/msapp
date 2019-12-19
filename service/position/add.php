<?php
if (isset($_COOKIE['logged'])){ $user = $_COOKIE['logged'];} else {header("Location: /login.php?auth=false");}
    include_once '../../inc/database.php';

    if(isset($_POST['positionName'])){
        $positionName = $_POST['positionName'];

        $sql = 'INSERT INTO `table_position`(`name`) VALUES(:position_name)';
        $statement = $pdo->prepare($sql);
        if ($statement->execute([':position_name'=>$positionName])){
            header("Location: /service/position");
        } else {
            echo "<script>alert('Cannot create position!!!')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php include '../../inc/scripts.php'?>
    <title>Add position | Mobile Service App</title>
</head>
<body>
<?php include '../../header.php'; ?>
<div class="main container">
    <h2>Create position</h2>
    <hr/>
    <div class="row">
        <div class="col-md-4">
            <form method="post" action="">
                <label for="inputPositionName" class="sr-only">Position name</label>
                <input type="text" id="inputPositionName" name="positionName" class="form-control mb-3" placeholder="Name" required autofocus>

                <button class="btn btn-sm btn-primary" type="submit">Create</button>
                <a href="index.php" class="btn btn-link">Back</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>