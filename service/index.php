<?php
    if (isset($_COOKIE['logged'])){ $user = $_COOKIE['logged'];} else {header("Location: /login.php?auth=false");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php include '../inc/scripts.php'?>
    <title>Mobile Service App</title>
</head>
<body>
    <?php include '../header.php'; ?>
    <div class="main container">
        <h2><i class="fas fa-chart-line"></i> Dashboard</h2>
        <hr/>
        <div class="mt-2">
            <div class="row">

                <!-- POSITIONS DASH ITEM -->

                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header">Positions</div>
                        <div class="card-body overflow-auto pre-scrollable" style="height:250px; max-height: 250px;">
                            <ul class="list-group">
                                <li class="list-group-item">Position Name</li>
                                <li class="list-group-item">Position Name</li>
                                <li class="list-group-item">Position Name</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <span class="badge badge-primary">Total: 3</span>
                            <a class="float-right" href="/service/position">Open</a>
                        </div>
                    </div>
                </div>

                <!-- MANUFACTURERS DASH ITEM -->

                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header">Manufacturers</div>
                        <div class="card-body overflow-auto pre-scrollable" style="height:250px; max-height: 250px;">
                            <ul class="list-group">
                                <li class="list-group-item">Manufacturer Name</li>
                                <li class="list-group-item">Manufacturer Name</li>
                                <li class="list-group-item">Manufacturer Name</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <span class="badge badge-primary">Total: 3</span>
                            <a class="float-right" href="/service/manufacturer">Open</a>
                        </div>
                    </div>
                </div>

                <!-- EMPLOYEES DASH ITEM -->
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header">Employees</div>
                        <div class="card-body overflow-auto pre-scrollable" style="height:250px; max-height: 250px;">
                            <ul class="list-group">
                                <li class="list-group-item">Name Surname - Position</li>
                                <li class="list-group-item">Name Surname - Position</li>
                                <li class="list-group-item">Name Surname - Position</li>
                                <li class="list-group-item">Name Surname - Position</li>
                                <li class="list-group-item">Name Surname - Position</li>
                                <li class="list-group-item">Name Surname - Position</li>
                                <li class="list-group-item">Name Surname - Position</li>
                                <li class="list-group-item">Name Surname - Position</li>
                                <li class="list-group-item">Name Surname - Position</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <span class="badge badge-primary">Total: 12</span>
                            <a class="float-right" href="/service/employee">Open</a>
                        </div>
                    </div>
                </div>

                <!-- GUARANTIES DASH ITEM -->

                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header">Guarantee</div>
                        <div class="card-body overflow-auto pre-scrollable" style="height:250px; max-height: 250px;">
                            <ul class="list-group">
                                <li class="list-group-item">Employee Name - Position | Date</li>
                                <li class="list-group-item">Employee Name - Position | Date</li>
                                <li class="list-group-item">Employee Name - Position | Date</li>
                                <li class="list-group-item">Employee Name - Position | Date</li>
                                <li class="list-group-item">Employee Name - Position | Date</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <span class="badge badge-primary">Total: 203</span>
                            <a class="float-right" href="/service/guarantee">Open</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
