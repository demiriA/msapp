<?php
if (isset($_COOKIE['logged'])){ $user = $_COOKIE['logged'];} else {header("Location: /login.php?auth=false");}

    include_once '../../inc/database.php';
    $id = $_GET["id"];

    $sql = ' SELECT * FROM `table_position` WHERE `position_id`= :id ';
    $statement = $pdo->prepare($sql);
    $statement->execute([':id'=>$id]);
    $position = $statement->fetch(PDO::FETCH_OBJ);

    $positionName = $position->name;

    if(isset($_POST['positionName'])){
        $positionName = $_POST['positionName'];

        $sql ='UPDATE `table_position` SET `name` = :pname WHERE `position_id` =:id';
        $statement = $pdo->prepare($sql);
        if ($statement->execute([':id'=>$id, ':pname'=>$positionName])){
            header("Location: /service/position/edit.php?id=".$id);
            echo "<script>alert('Position name updated!')</script>";
        }else{
            echo "<script>alert('Position name cannot be updated!')</script>";
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php include '../../inc/scripts.php'?>
    <title>Edit position | Mobile Service App</title>
</head>
<body>
<?php include '../../header.php'; ?>
<div class="main container">
    <h2>Edit position</h2>
    <hr/>
    <div class="row">
        <div class="col-md-4">
            <form action="" method="post">
                <label for="inputPositionName" class="sr-only">Position name</label>
                <input type="text" id="inputPositionName" name="positionName" class="form-control mb-3" placeholder="Name" value="<?= $positionName ?>" required autofocus>

                <button class="btn btn-sm btn-primary" type="submit">Update</button>
                <a href="index.php" class="btn btn-link">Back</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>