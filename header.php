<?php
    include_once 'inc/database.php';
    include_once 'inc/auth.php';

    if (isset($_COOKIE['logged'])){
        $role = getUserRole($_COOKIE['logged'], $pdo);
        $user = getUserDetails($_COOKIE['logged'], $pdo);
        $logInfo = $role."/".$user->name;
    }
?>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="/">Mobile Service App</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/service"><i class="fas fa-chart-line"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/service/sell.php"><i class="fas fa-cart-plus"></i> Sell</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/service/service.php"><i class="fas fa-cogs"></i> Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/service/stock.php"><i class="fas fa-store-alt"></i> Stock</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout.php"><i class="fas fa-user"></i> Log out (<?= $logInfo?>)</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0" method="get" action="/search.php">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="q" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
</header>