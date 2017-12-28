<?php
session_start();
function conn(){
    return new PDO("mysql:host=localhost;dbname=locker","root","");
}

function getLocker(){
    $conn = conn();
    $sql = "SELECT * FROM lockers";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $row;
    $conn = null;
}
function lockerCount(){
    $conn = conn();
    $sql = "SELECT COUNT(*) FROM lockers";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetchColumn();
    return $row;
    $conn = null;
}
function logIn($user,$pass){
    $conn = conn();
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array($user,$pass));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if($stmt->rowCount() > 0){
        $_SESSION['name'] = $row['fname'].' '.$row['lname'];
        $_SESSION['id'] = $row['user_id'];
        header('location:home.php');
    }else{
        header('location:index.php');
    }
    $conn = null;
}
function reserveLocker($id, $user_id){
    $conn = conn();
    $sql2 = "SELECT user_id FROM user_lockers WHERE user_id = :user_id";
    $stmt2 = $conn->prepare($sql2);
    $stmt2->bindParam(':user_id', $user_id);
    $stmt2->execute();
    if($stmt2->rowCount() > 0){
       echo "<script> window.location='reserve.php?message=Cannot occupy more than two lockers'; </script>";
    }else{
    $sql = "UPDATE lockers SET status = '1' WHERE locker_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array($id));
    if($stmt->rowCount() > 0){
        $sql2 = "INSERT INTO user_lockers(locker_id,user_id) VALUES(?,?)";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->execute(array($id,$user_id));
    }
}
    $conn = null;
}
function getStatus($id){
    $conn = conn();
    $sql = "SELECT status FROM lockers WHERE locker_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array($id));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
    $conn = null;
}