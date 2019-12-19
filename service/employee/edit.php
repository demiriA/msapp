<?php
if (isset($_COOKIE['logged'])){ $user = $_COOKIE['logged'];} else {header("Location: /login.php?auth=false");}

        $embg = "12345678901234";
        $contact = "38970123456";
        $name = "Employee name";
        $surname = "Employee surname";
        $birthday = "2019-12-13";
        $street = "Street Name";
        $city = "Skopje";
        $number = "22";
        $position = "2";
        $salary = "24000";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php include '../../inc/scripts.php'?>
    <title>Edit employee | Mobile Service App</title>
</head>
<body>
<?php include '../../header.php'; ?>
<div class="main container">
    <h2>Edit employee</h2>
    <hr/>
    <div class="row">
        <div class="col-md-6 col-form-label">
            <form action="" method="post">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEMBG">EMBG</label>
                        <input type="number" name="emp-embg" class="form-control" id="inputEMBG" placeholder="EMBG" value="<?= $embg ?>" required autofocus>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputContact">Contact</label>
                        <input type="number" name="emp-contact" class="form-control" id="inputContact" placeholder="Contact" value="<?= $contact ?>" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName">Name</label>
                        <input type="text" name="emp-name" class="form-control" id="inputName" placeholder="Name" value="<?= $name ?>" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputSurname">Surname</label>
                        <input type="text" name="emp-surname" class="form-control" id="inputSurname" placeholder="Surname" value="<?= $surname ?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputDate">Date of birth</label>
                    <input type="date" name="emp-birthday" class="form-control" id="inputDate" value="<?= $birthday ?>" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="inputSName">Street</label>
                        <input type="text" name="emp-street" class="form-control" id="inputSName" placeholder="Street" value="<?= $street ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputCity">City</label>
                        <input type="text" name="emp-city" class="form-control" id="inputCity" placeholder="City" value="<?= $city ?>" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputSNumber">Number</label>
                        <input type="number" name="emp-number" class="form-control" id="inputSNumber" placeholder="Number" value="<?= $number ?>">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPosition">Position</label>
                        <select name="emp-position" class="form-control" id="inputPosition" required>
                            <option value="1">Position name</option>
                            <option value="2" selected="selected" >Position name 2</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputSalary">Salary (mkd)</label>
                        <input type="number" name="emp-salary" class="form-control" id="inputSalary" placeholder="Salary" value="<?= $salary ?>" required>
                    </div>
                </div>

                <button class="btn btn-sm btn-primary" type="submit">Update</button>
                <a href="index.php" class="btn btn-link">Back</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>