<?php include('dbconn.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Project</title>
    <?php include('head.php') ?>
</head>
<body>
    <?php
    $activePage = basename($_SERVER['PHP_SELF'], ".php");
    include('nav.php')
    ?>
</body>
</html>