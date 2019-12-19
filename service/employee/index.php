<?php
if (isset($_COOKIE['logged'])){ $user = $_COOKIE['logged'];} else {header("Location: /login.php?auth=false");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php include '../../inc/scripts.php'?>
    <title>Employees | Mobile Service App</title>
</head>
<body>
<?php include '../../header.php'; ?>
<div class="main container">
    <h2>Employees</h2>
    <hr/>
    <div class="card mb-2">
        <a class="nav-link" href="/service/employee/add.php">Add employee</a>
    </div>
    <div class="row text-center">
        <div class="col-md">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>EMBG</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Position</th>
                    <th>Contact Nr.</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="/service/employee/edit.php?id=1" class="badge badge-success p-2"><i class="fas fa-edit"></i> 1</a></td>
                    <td>12345678901234</td>
                    <td>Employee name</td>
                    <td>Surname</td>
                    <td>Employee position</td>
                    <td>389123456789</td>
                    <td class="text-left">
                        <a href="/service/employee/delete.php?id=1" class="text-danger"><i class="fas fa-trash"></i> Delete</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>