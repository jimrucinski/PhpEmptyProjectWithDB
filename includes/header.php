<?php
    include('includes/arrays.php');
    $connInfo = include('conf/DbConf.php');
    include('includes/SingleDB.class.php');

    $dbo = SingleDB::getInstance();
    $dbo->connect($connInfo->host,$connInfo->username,$connInfo->pass,$connInfo->database);
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    -->
</head>
    <title></title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
        <div id="banner">
            <h2>Banner</h2>
        </div><!--end banner -->
        <div id="nav">
             <?php include('includes/nav.php')?>
        </div><!--end nav -->
        </div>
        <div class="row">