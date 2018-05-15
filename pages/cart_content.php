<?php
/**
 * Created by PhpStorm.
 * User: unknow
 * Date: 5/9/18
 * Time: 1:18 AM
 */


$session_id = session_id();
$cart_info = $cart->select_cart_product_by_session_id($session_id);

if(isset($_POST['submit'])){
    $msg=$cart->update_temp_cart_by_temp_cart_id($_POST);
}
if(isset($_GET['status'])){
    $temp_pro_id = $_GET['tem_p_id'];

    if ($_GET['status']=="delete"){
        $cart->delete_cat_tem_product_by_id($temp_pro_id);
    }

}


if(!isset($_GET['id'])){
    echo "<meta http-equiv='refresh' content='0;URL=?id=product'/>";
}

?>

<section>
    <div class="second-page-container">
        <div class="block">
            <div class="container">
                <div class="header-for-light">
                    <?php if (isset($msg)){
                        echo $msg;
                        unset($msg);
                    }
                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }

                    ?>

                    <h1 class="wow fadeInRight animated" data-wow-duration="1s">Shopping<span> Cart</span></h1>
                </div>
               <?php if($get_cat){ ?>

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
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <div class="row">
                                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="block-form box-border wow fadeInLeft" data-wow-duration="1s">
                                        <h3><i class="fa fa-truck"></i> Shipping Cost</h3>
                                        <hr>
                                        <h4>Shipping Cost Free</h4>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <div class="row">
                                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="block-form box-border wow fadeInLeft" data-wow-duration="1s">
                                        <h3><i class="fa fa-tag"></i> Apply Discount Code</h3>
                                        <hr>
                                        <form action="#" method="post">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Discount Code</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="submit"  value="Apply Coupon"  class="btn-default-1">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </article>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <div class="row">
                                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="block-form block-order-total box-border wow fadeInRight" data-wow-duration="1s">
                                        <h3><i class="fa fa-dollar"></i> Total</h3>
                                        <hr>
                                        <ul class="list-unstyled">
                                            <li>Sub Total: <strong>$<?php echo $sum;?></strong></li>
                                            <li>VAT: <strong>$<?php

                                                    $vat = ($sum * 15)/100;
                                                    echo $vat;

                                                    ?></strong></li>
                                            <li><hr></li>

                                            <li ><b>Grand Total:</b> <strong>$<?php

                                                    $result  = $sum + $vat;
                                                    $_SESSION['grand_total'] = $result;
                                                    echo $result;



                                                    ?></strong></li>
                                        </ul>

                                        <a href="index.php"  class="btn-default-1">Contuine Shoping</a>
                                        <a href="checkout.php"  class="btn-default-1">Checkout</a>
                                    </div>
                                </article>
                            </div>
                        </div>



                    </div>





                <?php }else{
                   header("location:index.php");
               }?>
            </div>
        </div>
    </div>
</section>


