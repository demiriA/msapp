<?php
    setcookie("logged", "", time() - 3600);
    header("Location: /login.php");
