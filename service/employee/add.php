<?php
if (isset($_COOKIE['logged'])){ $user = $_COOKIE['logged'];} else {header("Location: /login.php?auth=false");}

    if(isset($_POST['emp-embg'])){
        $embg = $_POST['emp-embg'];
        $contact = $_POST['emp-contact'];
        $name = $_POST['emp-name'];
        $surname = $_POST['emp-surname'];
        $birthday = $_POST['emp-birthday'];
        $street = $_POST['emp-street'];
        $city = $_POST['emp-city'];
        $number = $_POST['emp-number'];
        $position = $_POST['emp-position'];
        $salary = $_POST['emp-salary'];

        echo $embg." ".$contact." ".$name." ".$surname." ".$birthday." ".$street." ".$city." ".$number." ".$position." ".$salary;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php include '../../inc/scripts.php'?>
    <title>Add employee | Mobile Service App</title>
</head>
<body>
<?php include '../../header.php'; ?>
<div class="main container">
    <h2>Create employee</h2>
    <hr/>
    <div class="row">
        <div class="col-md-6 col-form-label">
            <form action="" method="post">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEMBG">EMBG</label>
                        <input type="number" name="emp-embg" class="form-control" id="inputEMBG" placeholder="EMBG" required autofocus>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputContact">Contact</label>
                        <input type="number" name="emp-contact" class="form-control" id="inputContact" placeholder="Contact" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName">Name</label>
                        <input type="text" name="emp-name" class="form-control" id="inputName" placeholder="Name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputSurname">Surname</label>
                        <input type="text" name="emp-surname" class="form-control" id="inputSurname" placeholder="Surname" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputDate">Date of birth</label>
                    <input type="date" name="emp-birthday" class="form-control" id="inputDate" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="inputSName">Street</label>
                        <input type="text" name="emp-street" class="form-control" id="inputSName" placeholder="Street" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputCity">City</label>
                        <input type="text" name="emp-city" class="form-control" id="inputCity" placeholder="City" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputSNumber">Number</label>
                        <input type="number" name="emp-number" class="form-control" id="inputSNumber" placeholder="Number">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPosition">Position</label>
                        <select name="emp-position" class="form-control" id="inputPosition" required>
                            <option value="1">Position name</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputSalary">Salary (mkd)</label>
                        <input type="number" name="emp-salary" class="form-control" id="inputSalary" placeholder="Salary" required>
                    </div>
                </div>

                <button class="btn btn-sm btn-primary" type="submit">Create</button>
                <a href="index.php" class="btn btn-link">Back</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>