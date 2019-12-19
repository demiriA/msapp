<?php
if (isset($_COOKIE['logged'])){ $user = $_COOKIE['logged'];} else {header("Location: /login.php?auth=false");}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php include '../inc/scripts.php'?>
    <title>Add phone | Mobile Service App</title>
</head>
<body>
<?php include '../header.php'; ?>
<div class="main container">
    <h2>Create stock</h2>
    <hr/>
    <div class="row">
        <div class="col-md-6">
            <label>Phone details</label>
            <form action="" method="post">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputSerial">Serial</label>
                        <input type="number" name="phone-serial" class="form-control" id="inputSerial" placeholder="Serial" required autofocus>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputImei">IMEI</label>
                        <input type="number" name="phone-imei" class="form-control" id="inputImei" placeholder="IMEI" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputManufacturer">Manufacturer</label>
                        <select name="phone-manufacturer" class="form-control" id="inputManufacturer" required>
                            <option value="1">Manufacturer name</option>
                            <option value="2">Manufacturer name 2</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputName">Name</label>
                        <input type="text" name="phone-name" class="form-control" id="inputName" placeholder="Name" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPPrice">Purchased price (mkd)</label>
                        <input type="number" name="phone-pprice" class="form-control" id="inputPPrice" placeholder="Purchased price" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputSPrice">Sale price (mkd)</label>
                        <input type="number" name="phone-sprice" class="form-control" id="inputSPrice" placeholder="Sale price" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputYear">Year produced</label>
                    <input type="number" name="phone-year" class="form-control" id="inputYear" placeholder="Year" required>
                </div>

                <button class="btn btn-sm btn-outline-primary" type="submit">Save phone</button>
            </form>
        </div>

        <div class="col-md-6">
            <label>Specification details</label>
            <form action="" method="post">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputSpecCamF">Camera front</label>
                        <input type="text" name="spec-cam-front" class="form-control" id="inputSpecCamF" placeholder="Camera front" required autofocus>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputSpecCamB">Camera back</label>
                        <input type="text" name="spec-cam-back" class="form-control" id="inputSpecCamB" placeholder="Camera back" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputSpecProcessor">Processor</label>
                    <input type="text" name="spec-cam-back" class="form-control" id="inputSpecProcessor" placeholder="Processor" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputMemory">Memory</label>
                        <input type="text" name="spec-memory" class="form-control" id="inputMemory" placeholder="Memory" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputBattery">Battery</label>
                        <input type="text" name="spec-battery" class="form-control" id="inputBattery" placeholder="Battery" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputDisplay">Display</label>
                        <input type="text" name="spec-display" class="form-control" id="inputDisplay" placeholder="Display" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputColor">Color</label>
                        <input type="text" name="spec-color" class="form-control" id="inputColor" placeholder="Color" required>
                        <span id="color-box" style="position: absolute; top: 0; left: 50px;padding: 0 10px; border-radius: 20px;">&nbsp;</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputImage">Image</label>
                    <input type="text" name="spec-image" class="form-control" id="inputImage" placeholder="Image" required>
                </div>

                <button class="btn btn-sm btn-primary float-right" type="submit">Create</button>
                <a href="stock.php" class="btn btn-link float-right">Back</a>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="../js/colors.js"></script>
</body>
</html>