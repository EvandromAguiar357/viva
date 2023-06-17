<?php

    session_start();
    unset($_SESSION['ra']);
    unset($_SESSION['senha']);
    header("Location: login.php");

?>