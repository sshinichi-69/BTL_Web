<?php
    session_start();

    unset($_SESSION['user']);
    header('Location: ../my-account.php');
?>