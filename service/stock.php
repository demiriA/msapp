<?php
if (isset($_COOKIE['logged'])){ $user = $_COOKIE['logged'];} else {header("Location: /login.php?auth=false");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php include '../inc/scripts.php'?>
    <title>Stock | Mobile Service App</title>
</head>
<body>
    <?php include '../header.php'; ?>
    <div class="main container">
        <h2><i class="fas fa-store-alt"></i> Stock</h2>
        <hr/>

        <div class="alert alert-secondary">
            Last updated: 2019.12.13 01:25
        </div>
        <div class="card mb-2">
            <a class="nav-link" href="add_phone.php">Add phone</a>
        </div>
        <div class="row text-center">
            <div class="col-md">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Manufacturer</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Memory</th>
                            <th>Color</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#" class="badge badge-success p-2"><i class="fas fa-edit"></i> 1</a></td>
                            <td>Apple</td>
                            <td>iPhone 11 Pro</td>
                            <td>74 000 mkd</td>
                            <td>4/64</td>
                            <td>Green</td>
                            <td class="text-left">
                                <a href="#" class="text-warning"><i class="far fa-times-circle"></i> Out of stock</a><br/>
                                <a href="#" class="text-danger"><i class="fas fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
