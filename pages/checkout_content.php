<?php
/**
 * Created by PhpStorm.
 * User: unknow
 * Date: 5/9/18
 * Time: 6:12 PM
 */



$session_id = session_id();
$cart_info = $cart->select_cart_product_by_session_id($session_id);



if(isset( $_SESSION['customer_id'])){
    $customer_id = $_SESSION['customer_id'];
    echo $customer_id;
    $result  = $customer->select_customer_info($customer_id);
    $customer_info=mysqli_fetch_assoc($result);
}



?>


<section>
    <div class="second-page-container">
        <div class="block">
            <div class="container">


                <div class="row">
                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="box-border block-form wow fadeInLeft " data-wow-duration="1s">
                            <!-- Nav tabs -->


                            <div class="text-center  ">
                                <h1 class="wow fadeInRight animated " data-wow-duration="1s"><span class="text_align_center">Checkout</span></h1>
                                <?php

                                if(isset($_SESSION['customer_id'])){?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="cart-table table wow fadeInLeft" data-wow-duration="1s">
                                                <thead>
                                                <tr>
                                                    <th class="card_product_image">Image</th>
                                                    <th class="card_product_name">Product Name</th>
                                                    <th class="card_product_model">Model</th>
                                                    <th class="card_product_quantity">Quantity</th>
                                                    <th class="card_product_price">Unit Price</th>
                                                    <th class="card_product_total">Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <?php

                                                $sum = 0;
                                                while($cart_product_items=mysqli_fetch_assoc($cart_info)) {
                                                    ?>
                                                    <tr>
                                                        <td class="card_product_image" data-th="Image"><a href="#"><img
                                                                        title="Product Name" alt="Product Name"
                                                                        src="assets/<?php echo $cart_product_items['product_image']; ?>"></a>
                                                        </td>
                                                        <td class="card_product_name" data-th="Product Name"><a
                                                                    href="#"><?php echo $cart_product_items['product_name']; ?></a></td>
                                                        <td class="card_product_model" data-th="Model">Pro 1</td>
                                                        <td class="card_product_quantity" data-th="Quantity">

                                                            <form action="" method="post">

                                                                <input type="number" min="0"
                                                                       value="<?php echo $cart_product_items['product_quantity']; ?>"
                                                                       name="product_quantity" class="styler">
                                                                <input type="hidden" name="temp_cart_id" class="styler"
                                                                       value="<?php echo $cart_product_items['temp_cart_id']; ?>">
                                                                <input type="submit" name="submit" value="update" class="styler">
                                                            </form>


                                                            &nbsp;
                                                            &nbsp;<a
                                                                    href="?status=delete&&tem_p_id=<?php echo $cart_product_items['temp_cart_id']; ?>"><i
                                                                        class="fa fa-trash-o"></i></a>
                                                        </td>
                                                        <td class="card_product_price" data-th="Unit Price">
                                                            $<?php echo $cart_product_items['product_price']; ?></td>
                                                        <td class="card_product_total" data-th="Total">$
                                                            <?php
                                                            $product_quantity = $cart_product_items['product_quantity'];
                                                            $_SESSION['product_quantity'] = $product_quantity;
                                                            $product_price = $cart_product_items['product_price'];
                                                            $total_cost = $product_quantity * $product_price;

                                                            echo $total_cost;

                                                            ?>
                                                        </td>
                                                    </tr>

                                                    <?php
                                                    $sum = $sum + $total_cost;


                                                }
                                                ?>


                                                </tbody>
                                            </table>



                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                                            <div class="row">
                                                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <div class="block-form block-order-total box-border wow fadeInRight" data-wow-duration="1s">

                                                        <table class="table table-bordered text-right">

                                                            <tr>
                                                                <td>Sub Total:</td>
                                                                <td>$<?php echo $sum;?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>VAT:</td>
                                                                <td>$<?php $vat = ($sum * 15)/100;
                                                                    echo $vat;?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Grand Total:</td>
                                                                <td>$<?php  $result  = $sum + $vat;
                                                                    echo $result;
                                                                    $_SESSION['grand_total'] = $result;?></td>
                                                            </tr>

                                                        </table>


                                                    </div>
                                                </article>




                                                <a href="payment.php"  class="">Select payment method</a>
                                            </div>
                                        </div>



                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                            <table class="table table-bordered text-left">
                                                <tr>
                                                    <td><strong>Full Name</strong></td>
                                                    <td><?php echo $customer_info['first_name']." ".$customer_info['last_name'];?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Phone Number</strong></td>
                                                    <td>
                                                        <?php echo $customer_info['phone_number'];?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Address</td>
                                                    <td><?php echo $customer_info['address'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Country</td>
                                                    <td><?php echo $customer_info['country'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>City</td>
                                                    <td><?php echo $customer_info['city'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>District</td>
                                                    <td><?php echo $customer_info['district'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Zip Code</td>
                                                    <td><?php echo $customer_info['zip_code'];?></td>
                                                </tr>
                                            </table>

                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <td>Full Name</td>
                                                    <td><?php echo $customer_info['first_name']." ".$customer_info['last_name'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Phone Number</td>
                                                    <td>
                                                        <?php echo $customer_info['phone_number'];?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Address</td>
                                                    <td><?php echo $customer_info['address'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Country</td>
                                                    <td><?php echo $customer_info['country'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>City</td>
                                                    <td><?php echo $customer_info['city'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>District</td>
                                                    <td><?php echo $customer_info['district'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Zip Code</td>
                                                    <td><?php echo $customer_info['zip_code'];?></td>
                                                </tr>
                                            </table>
                                        </div>


                                    </div>

                               <?php  }else{?>
                                    <a href="login.php" class="btn-default-1">Login as a User</a>
                                <?php }

                                ?>

                            </div>



                        </div>

                    </article>


                </div>



            </div>
        </div>
    </div>
</section>

