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
        .disabled:hover{
            cursor:not-allowed;
        }
    </style>
</head>
<body>
<?php 
$activePage = basename($_SERVER['PHP_SELF'],".php");
$first = array();
$second = array();
$third = array();
$fourth = array();
$fifth = array();
$initial = array();
$locker = getLocker();
$data1 = array();
$data2 = array();
$data3 = array();
$data4 = array();
$data5 = array();
foreach($locker as $lock => $value){
    if($lock >= 6 && $lock <= 11){
        $first[] = $value['number'];
        $data1[] = $value['locker_id'];
    }else if($lock >= 12 && $lock <= 17){
        $second[] = $value['number'];
        $data2[] = $value['locker_id'];
    }
    else if($lock >= 18  && $lock <= 23){
        $third[] = $value['number'];
        $data3[] = $value['locker_id'];
    }
    else if($lock >= 24 && $lock <= 29){
        $fourth[] = $value['number'];
        $data4[] = $value['locker_id'];
    }
    else if($lock < 6){
        $initial[] = $value['number'];
        $data5[] = $value['locker_id'];
    }
}
?>
<?php include('nav.php'); ?>
<div class="container-fluid mt-5">
    <div class="row">
        <?php foreach(array_combine($initial,$data5) as $e => $d){?>
        <div class="col text-center">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Locker No.<?php echo $e; ?></h4>
                    <p class="card-text">
                    <?php $status = getStatus($d);
                        $stats =  $status['status'];
                    if($stats == '0'){
                    ?>
                    <button class="btn btn-info btn-outline-primary hover" data-toggle="modal" data-target="#reserveModal<?php echo $e; ?>">Reserve</button>
                    <?php } else  {
                        ?>
                    <button class="btn btn-outline-success disabled" disabled>Occupied</button>
                        <?php
                    }
                    ?>
                    </p>
                </div>
            </div>
        </div>
        <?php include('modal.php'); ?>
        <?php } ?>
    </div>
    <div class="row mt-2">
        <?php foreach(array_combine($first,$data1) as $e => $d){?>
        <div class="col text-center">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Locker No.<?php echo $e; ?></h4>
                    <p class="card-text">
                    <button class="btn btn-info btn-outline-primary hover" data-toggle="modal" data-target="#reserveModal<?php echo $e; ?>">Reserve</button>
                    </p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <div class="row mt-2">
        <?php foreach(array_combine($second,$data2) as $e => $d){?>
        <div class="col text-center">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Locker No.<?php echo $e; ?></h4>
                    <p class="card-text">
                    <button class="btn btn-info btn-outline-primary hover" data-toggle="modal" data-target="#reserveModal<?php echo $e; ?>">Reserve</button>
                    </p>
                </div>
            </div>
        </div>
        <?php include('modal.php'); ?>
        <?php } ?>
    </div>
    <div class="row mt-2">
        <?php foreach(array_combine($third,$data3) as $e => $d){?>
        <div class="col text-center">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Locker No.<?php echo $e; ?></h4>
                    <p class="card-text">
                    <button class="btn btn-info btn-outline-primary hover" data-toggle="modal" data-target="#reserveModal<?php echo $e; ?>">Reserve</button>
                    </p>
                </div>
            </div>
        </div>
        <?php include('modal.php'); ?>
        <?php } ?>
    </div>
    <div class="row mt-2">
        <?php foreach(array_combine($fourth,$data4) as $e => $d){?>
        <div class="col text-center">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Locker No.<?php echo $e; ?></h4>
                    <p class="card-text">
                    <button class="btn btn-info btn-outline-primary hover" data-toggle="modal" data-target="#reserveModal<?php echo $e; ?>">Reserve</button>
                    </p>
                </div>
            </div>
        </div>
        <?php include('modal.php'); ?>
        <?php } ?>
    </div>
    
</div>
</body>
</html>