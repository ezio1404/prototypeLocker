<?php
include('dbconn.php');
session_destroy($_SESSION);
session_unset($_SESSION['id']);
header('location:index.php');