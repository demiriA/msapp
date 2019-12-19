<?php
if (isset($_COOKIE['logged'])){ $user = $_COOKIE['logged'];} else {header("Location: /login.php?auth=false");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php include '../../inc/scripts.php'?>
    <title>Manufacturers | Mobile Service App</title>
</head>
<body>
<?php include '../../header.php'; ?>
<div class="main container">
    <h2>Manufacturers</h2>
    <hr/>
    <div class="card mb-2">
        <a class="nav-link" href="/service/manufacturer/add.php">Add manufacturer</a>
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
                <tr>
                    <td><a href="/service/manufacturer/edit.php?id=1" class="badge badge-success p-2"><i class="fas fa-edit"></i> 1</a></td>
                    <td>Manufacturer name</td>
                    <td class="text-left">
                        <a href="/service/manufacturer/delete.php?id=1" class="text-danger"><i class="fas fa-trash"></i> Delete</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>