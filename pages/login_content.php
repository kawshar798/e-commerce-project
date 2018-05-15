<?php
/**
 * Created by PhpStorm.
 * User: unknow
 * Date: 5/12/18
 * Time: 11:31 AM
 */


$customer_id = isset($_SESSION['customer_id']);
if( $customer_id){
    header("location:order.php");
}
if(isset($_POST['submit'])){


    $customer->checkCustomerLogin($_POST);
}
?>

<section>
    <div class="second-page-container">
        <div class="block">
            <div class="container">
                <div class="header-for-light">
                    <h1 class="wow fadeInRight animated" data-wow-duration="1s"><span>Login</span> or <span>Register</span></h1>
                </div>
                <div class="row">
                    <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="block-form box-border wow fadeInLeft animated" data-wow-duration="1s">
                            <h3><i class="fa fa-unlock"></i>Login</h3>
                            <p>Please login using your existing account</p>
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" placeholder="Username" name="email_address">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" placeholder="Password" name="password">
                                    </div>
                                    <div class="col-md-12">
                                        <hr>
                                        <input type="submit"  value="Login" name="submit"  class="btn-default-1">
                                        <input type="reset" value="Reset password" class="btn-default-1">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </article>

                    <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="block-form box-border wow fadeInRight animated" data-wow-duration="1s">
                            <h3><i class="fa fa-pencil"></i>Create new account</h3>
                            <p>Registration allows you to avoid filling in billing and shipping forms every time you checkout on this website.</p>
                            <hr>
                            <a href="register.php" class="btn-default-1">Register</a>
                        </div>
                   

                    </article>

                </div>
            </div>
        </div>
    </div>
</section>

