<?php
session_start();

$admin_id = isset($_SESSION['admin_id']);

if($admin_id){
    header("location:admin_master.php");
}

require_once "../vendor/autoload.php";
use App\classes\Login;
$login = new Login();


if(isset($_POST['submit'])){

    $login->adminLoginCheck($_POST);

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


<body class="login">
<div>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form action="" method="post">
                    <h1>Login Form</h1>
                    <div>
                        <input type="text" class="form-control" name="admin_email" placeholder="Username" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" name="admin_pass" placeholder="Password" required="" />
                    </div>
                    <div class="text-center">
                        <input  class="btn btn-info btn-block submit" type="submit" name="submit" value="Login">

                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <div class="clearfix"></div>
                        <br />

                        <div>

                            <p>©2018 All Rights Reserved.</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>
