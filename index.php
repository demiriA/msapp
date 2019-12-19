<?php
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
    <?php require 'public_header.php' ?>
    <div class="main container">
        <img src="./mobile-service-app-cover.jpg" class="w-100 mb-5" />
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md">
                        <small>Manufacturer</small><br/>
                        <label>
                            <input type="checkbox" name="filter-manufacturer" value="Apple" /> <small>Apple</small><br/>
                            <input type="checkbox" name="filter-manufacturer" value="Samsung" /> <small>Samsung</small><br/>
                            <input type="checkbox" name="filter-manufacturer" value="Huawei" /> <small>Huawei</small><br/>
                        </label>
                    </div>
                    <div class="col-md">
                        <small>Memory</small><br/>
                        <label>
                            <input type="checkbox" name="filter-memory" value="4/64GB" /> <small>4/64GB</small><br/>
                            <input type="checkbox" name="filter-memory" value="4/512GB" /> <small>4/512GB</small><br/>
                            <input type="checkbox" name="filter-memory" value="2/32GB" /> <small>2/32GB</small><br/>
                        </label>
                    </div>
                    <div class="col-md">
                        <small>Color</small><br/>
                        <label>
                            <input type="checkbox" name="filter-color" value="Red" /> <small>Red</small><br/>
                            <input type="checkbox" name="filter-color" value="Gold" /> <small>Gold</small><br/>
                            <input type="checkbox" name="filter-color" value="White" /> <small>White</small><br/>
                            <input type="checkbox" name="filter-color" value="Rose" /> <small>Rose</small><br/>
                            <input type="checkbox" name="filter-color" value="Green" /> <small>Green</small><br/>
                        </label>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <a href="#" class="btn btn-link">Clear filter</a>
                <a href="#" class="btn btn-primary btn-sm ml-1"><i class="fas fa-filter"></i> Filter</a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-4 text-center mb-5">
                <div class="w-75 m-auto border p-2 phone-background">
                    <a href="phone.php?id=1" class="custom-link">
                        <p><b>Apple iPhone 11 Pro</b></p>
                        <img src="https://www.telekom.mk/webimg?id=30567" class="w-100 zoom-image" />
                        <hr/>
                        <h5>70.990 <small>den</small></h5>
                    </a>
                </div>
            </div>
            <div class="col-md-4 text-center mb-5">
                <div class="w-75 m-auto border p-2 phone-background">
                    <a href="phone.php?id=1" class="custom-link">
                        <p><b>Samsung Galaxy S10+</b></p>
                        <img src="https://www.telekom.mk/webimg?id=28729" class="w-100 zoom-image"/>
                        <hr/>
                        <h5>60.990 <small>den</small></h5>
                    </a>
                </div>
            </div>
            <div class="col-md-4 text-center mb-5">
                <div class="w-75 m-auto border p-2 phone-background">
                    <a href="phone.php?id=1" class="custom-link">
                        <p><b>Apple iPhone 11</b></p>
                        <img src="https://www.telekom.mk/webimg?id=30145" class="w-100 zoom-image"/>
                        <hr/>
                        <h5>52.990 <small>den</small></h5>
                    </a>
                </div>
            </div>
            <div class="col-md-4 text-center mb-5">
                <div class="w-75 m-auto border p-2 phone-background">
                    <a href="phone.php?id=1" class="custom-link">
                        <p><b>Samsung Galaxy A20E</b></p>
                        <img src="https://www.telekom.mk/webimg?id=29363" class="w-100 zoom-image"/>
                        <hr/>
                        <h5>10.990 <small>den</small></h5>
                    </a>
                </div>
            </div>
            <div class="col-md-4 text-center mb-5">
                <div class="w-75 m-auto border p-2 phone-background">
                    <a href="phone.php?id=1" class="custom-link">
                        <p><b>Apple iPhone 11 Pro Max</b></p>
                        <img src="https://www.telekom.mk/webimg?id=30629" class="w-100 zoom-image"/>
                        <hr/>
                        <h5>99.990 <small>den</small></h5>
                    </a>
                </div>
            </div>
            <div class="col-md-4 text-center mb-5">
                <div class="w-75 m-auto border p-2 phone-background">
                    <a href="phone.php?id=1" class="custom-link">
                        <p><b>Huawei Nova 5T</b></p>
                        <img src="https://www.telekom.mk/webimg?id=30753" class="w-100 zoom-image"/>
                        <hr/>
                        <h5>23.990 <small>den</small></h5>
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
