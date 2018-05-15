<?php
/**
 * Created by PhpStorm.
 * User: unknow
 * Date: 5/9/18
 * Time: 6:12 PM
 */
    $customer_id =   $_SESSION['customer_id'];


    $result  = $customer->select_customer_info($customer_id);
    $customer_info=mysqli_fetch_assoc($result)


?>

<section>
    <div class="second-page-container">
        <div class="block">
            <div class="container">
                <div class="header-for-light">
                    <h1 class="wow fadeInRight animated" data-wow-duration="1s"><span>Billing</span>  Details & <span>Shipping</span> information</h1>

                </div>

                <div class="row">
                    <article class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="box-border block-form wow fadeInLeft" data-wow-duration="1s">
                            <!-- Nav tabs -->

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="address">
                                    <h3>You have to give us shipping information to complete your valuable order.If your <span>Billing</span> and <span>Shipping</span> information are same then just press on save Shipping info Button</h3>
                                    <br>


                                    <form role="form" method="post" action="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="inputFirstName" class="control-label">First Name:<span class="text-error">*</span></label>
                                                    <div>
                                                        <input type="text" class="form-control" id="inputFirstName" name="first_name" value="<?php echo $customer_info['first_name']?>">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="inputEMail" class="control-label">E-Mail:<span class="text-error">*</span></label>
                                                    <div>
                                                        <input type="email" name="email_address" class="form-control" id="inputEMail" value="<?php echo $customer_info['email_address']?>">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="inputPhone" class="control-label">Phone Number</label>
                                                    <div>
                                                        <input type="text" name="phone_number" class="form-control" id="inputPhone" value="<?php echo $customer_info['phone_number']?>">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="inputPhone" class="control-label">City</label>
                                                    <div>
                                                        <input type="text" name="address" class="form-control" id="inputPhone" value="<?php echo $customer_info['city']?>">
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="inputLastName" class="control-label">Last Name:<span class="text-error">*</span></label>
                                                    <div>
                                                        <input type="text" class="form-control" name="last_name" id="inputLastName" value="<?php echo $customer_info['last_name']?>">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="inputPhone" class="control-label">Password:</label>
                                                    <div>
                                                        <input type="password" name="password" class="form-control" id="inputPhone" value="<?php echo $customer_info['password']?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPhone" class="control-label">Adrress</label>
                                                    <div>
                                                        <input type="text" name="address" class="form-control" id="inputPhone" value="<?php echo $customer_info['address']?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPhone" class="control-label">District</label>
                                                    <div>
                                                        <input type="text" name="district" class="form-control" id="inputPhone" value="<?php echo $customer_info['district']?>">
                                                    </div>
                                                </div>


                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <div class="text-center">
                                                <input type="submit" name="submit" class="btn btn-danger" id="inputPhone">
                                            </div>
                                        </div>
                                    </form>

                                    <hr>
                                    <button="#" class="btn-default-1">Back</a>
                                    <a href="#" class="btn-default-1">Next</a>
                                </div>

                            </div>
                        </div>
                    </article>
                    <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="block-form block-order-total box-border wow fadeInRight" data-wow-duration="1s">
                            <h3><i class="fa fa-dollar"></i>Total</h3>
                            <hr>
                            <ul class="list-unstyled">
                                <li>Sub Total: <strong>$500.00</strong></li>
                                <li>Pricing Sharge: <strong>$10.00</strong></li>
                                <li>Promotion Discound: <strong>$5.00</strong></li>
                                <li>VAT: <strong>$10.00</strong></li>
                                <li><hr></li>
                                <li class="active"><b>Total:</b> <strong>$520.00</strong></li>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

