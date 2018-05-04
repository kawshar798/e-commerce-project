<?php
ob_start();
require_once "../vendor/autoload.php";
use App\classes\Login;

$login = new Login();

session_start();

if($_SESSION['admin_id']==null){

    header("location:index.php");
}


if(isset($_GET['logout'])){

    $login->adminLogOut();
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href=" ../assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href=" ../assets/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href=" ../assets/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- summernote -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" rel="stylesheet">
    <!--<link href="../assets/admin/vendors/summernote/summernote-bs4.css" rel="stylesheet">-->
    <!-- bootstrap-progressbar -->
    <link href=" ../assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href=" ../assets/admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href=" ../assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../assets/admin/css/custom.min.css" rel="stylesheet">
    <link href="../assets/admin/css/custom.css" rel="stylesheet">
</head>


<body class="nav-md">
<div class="container body">
    <div class="main_container">