<?php
if (isset($_COOKIE['logged'])){ $user = $_COOKIE['logged'];} else {header("Location: /login.php?auth=false");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php include '../../inc/scripts.php'?>
    <title>Guarantees | Mobile Service App</title>
</head>
<body>
<?php include '../../header.php'; ?>
<div class="main container">
    <h2>Guarantees</h2>
    <hr/>
    <div class="row text-center">
        <div class="col-md">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Employee</th>
                    <th>Customer</th>
                    <th>Phone</th>
                    <th>Months</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="#" class="badge badge-primary p-2"><i class="fas fa-eye"></i> 1</a></td>
                    <td>2019.12.13 02:27</td>
                    <td>Employee name</td>
                    <td>Customer name</td>
                    <td>Phone name</td>
                    <td>24</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>