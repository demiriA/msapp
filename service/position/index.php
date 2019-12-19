<?php

if (isset($_COOKIE['logged'])){ $user = $_COOKIE['logged'];} else {header("Location: /login.php?auth=false");}

    include_once '../../inc/database.php';

    $sql = 'SELECT * FROM `table_position`';
    $statement = $pdo->prepare($sql);
    $positions = null;
    if($statement->execute()){
        $positions = $statement->fetchAll(PDO::FETCH_OBJ);
    }else{
        echo "<script>alert('Cannot load positions');</script>";
    }

    print_r($positions);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php include '../../inc/scripts.php'?>
    <title>Positions | Mobile Service App</title>
</head>
<body>
<?php include '../../header.php'; ?>
<div class="main container">
    <h2>Positions</h2>
    <hr/>
    <div class="card mb-2">
        <a class="nav-link" href="/service/position/add.php">Add position</a>
    </div>
    <div class="row text-center">
        <div class="col-md">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($positions as $item): ?>
                    <tr>
                        <td><a href="/service/position/edit.php?id=<?= $item->position_id ?>" class="badge badge-success p-2"><i class="fas fa-edit"></i> <?=$item->position_id ?></a></td>
                        <td><?= $item->name ?></td>
                        <td class="text-left">
                            <a href="/service/position/delete.php?id=<?= $item->position_id ?>" class="text-danger"><i class="fas fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>