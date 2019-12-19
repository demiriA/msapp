<?php

    $memory = "";
    if (isset($_GET['memory'])){
        $memory = $_GET['memory'];
    }

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
    <div class="preview">
        <h3>Apple iPhone 11 Pro</h3>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                <img src="https://www.telekom.mk/webimg?id=30567" class="w-100" />
            </div>
            <div class="col-md-6">
                <dl class="row">
                    <dt class="col-sm-3">Camera Back:</dt>
                    <dd class="col-sm-9">Triple:12MP +12MP+12MP</dd>

                    <dt class="col-sm-3">Camera Front:</dt>
                    <dd class="col-sm-9">12MP</dd>

                    <dt class="col-sm-3">Processor (CPU):</dt>
                    <dd class="col-sm-9">A13</dd>

                    <dt class="col-sm-3">Display:</dt>
                    <dd class="col-sm-9">5.8"</dd>

                    <dt class="col-sm-3">Available colors:</dt>
                    <dd class="col-sm-9">space gray, midnight green, gold, space gray</dd>

                    <dt class="col-sm-3">Available memory:</dt>
                    <dd class="col-sm-9">
                        <form method="get" action="" id="jsForm">
                            <input type="hidden" name="id" value="1"/>
                            <select name="memory" class="form-control w-50" onchange="submitForm()" value="<?= $memory ?>">
                                <option value="4/64GB">4/64GB</option>
                                <option value="4/128GB" selected="selected">4/128GB</option>
                                <option value="4/256GB">4/256GB</option>
                            </select>
                        </form>
                    </dd>
                </dl>
                <br/><br/>

                <span class="price-btn">79.990 <small>den</small></span>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function submitForm(){
        document.getElementById('jsForm').submit();
    }
</script>
</body>
</html>
