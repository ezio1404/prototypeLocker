<?php include('dbconn.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Project</title>
    <?php include('head.php') ?>
    <style>
    .hover:hover{
        cursor:pointer;
    }
    </style>
</head>
<body>
</body>
    <div class="container" style="margin-top:10%">
    <div class="card w-50 ml-auto mr-auto">
    <div class="card-body">
        <h3 class="card-title">Login</h3>
        <form method="POST" class="form-horizontal">
            <div class="form-group row">
                <label for="username" class="col-sm-4 col-form-label">Username</label>
                <div class="col-sm-8">
                <input type="text" name="username" id="username" class="form-control">
                </div> 
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-8">
                <input type="password" name="password" id="password" class="form-control">
                </div> 
            </div>
            <div class="form-group text-right">
                <button type="submit" name="submit" class="btn hover btn-primary">Login</button>
            </div>
        </form>
        <?php
        if(isset($_POST['submit'])){
            $user = $_POST['username'];
            $pass = $_POST['password'];

            logIn($user,$pass);
        }
        ?>
    </div>
    </div>
    </div>
</html>