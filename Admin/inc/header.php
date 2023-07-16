<?php
session_start();
require_once("config.php");
if($_SESSION ['key'] != "Adminkey")
{
    echo "<script>location.assign('logout.php');</script>";
    die;

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel-Online Voting System</title>
    <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/css/style.css" >
</head>
<body>
    <div class="container-fluid">
        <div class="row bg-black text-white">
        <div class="col-1">
        <img src ="../images/oovs.jpg" width="80px"/>
        </div>
            <div class="col-11 my-auto">
            <h3>Online Voting System -<small> Admin Panel</small></h3>
            </div>
            </div