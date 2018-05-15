<?php
/**
 * Created by PhpStorm.
 * User: unknow
 * Date: 5/9/18
 * Time: 1:18 AM
 */
?>
<?php

if(isset($_POST['submit'])){

    $payment->saveOrderInfo($_POST);

}



?>


<section>
    <div class="second-page-container">
        <div class="block">
            <div class="container">
                <div class="header-for-light box-border " style="text-align: center">
                    <h1 class="wow fadeInRight animated text-center" data-wow-duration="1s"><span> payment</span> System</h1>
                </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">

                                <div class="panel-body">
                                    <form action="" method="post" class="form-horizontal">

                                        <table class="table table-bordered">
                                            <tr>
                                                <td>Cash on Delivery</td>
                                                <td><input type="radio" value="cashondelivery" name="payment_type"> </td>
                                            </tr>
                                            <tr>
                                                <td>Bkash</td>
                                                <td><input type="radio" value="bkash" name="payment_type"> </td>
                                            </tr>
                                            <tr>
                                                <td>Paypal</td>
                                                <td><input type="radio" value="paypal" name="payment_type"> </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><input type="submit" value="submit" class="btn-success btn" name="submit"> </td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>


