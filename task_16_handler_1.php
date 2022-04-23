<?php
session_start();
 

    session_destroy();
    header('Location: task_16.php');
    exit;
?>