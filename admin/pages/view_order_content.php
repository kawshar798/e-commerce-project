<?php

require_once "../vendor/autoload.php";
use App\classes\Order;
$order = new Order();

if ($_GET['order_id']) {
    $order_id = $_GET['order_id'];

    $result_cus = $order->select_customer_info_by_order_id($order_id);
    $customer_info = $result_cus->fetch_assoc();
    $result_shi = $order->select_shipping_info_by_order_id($order_id);
    $shipping_info = $result_shi->fetch_assoc();

   $result = $order->select_payment_info_by_order_id($order_id);
    $payment_info = $result->fetch_assoc();

    $result_pro = $order->select_product_by_order_id($order_id);
}
?>


<div class="x_panel">
    <div class="x_title">
        <h2>Category manage</h2>

        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="datatable_length"><label>Show <select name="datatable_length" aria-controls="datatable" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></label></div></div></div><div class="row"><div class="col-sm-12">


                    <h3>Customer info</h3>
                    <hr>
                    <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">


                        <tr>
                            <td>Customer Name</td>
                            <td><?php echo $customer_info['first_name']; ?></td>
                        </tr>
                        <tr>
                            <td>Customer Email</td>
                            <td><?php echo $customer_info['email_address']; ?></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><?php echo $customer_info['phone_number']; ?></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><?php echo $customer_info['address']; ?></td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td><?php echo $customer_info['city']; ?></td>
                        </tr>

                    </table>
                    <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">

                    <h2>Shipping Info</h2>
                    <tbody>

                    <tr>
                        <td>Full Name</td>
                        <td><?php echo $shipping_info['full_name']; ?></td>
                    </tr>
                    <tr>
                        <td> Email</td>
                        <td><?php echo $shipping_info['email_address']; ?></td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td><?php echo $shipping_info['phone_number']; ?></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><?php echo $shipping_info['address']; ?></td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td><?php echo $shipping_info['city']; ?></td>
                    </tr>
                    </tbody>
                    </table>


                    <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">

                        <h2>Payment Info</h2>
                        <tbody>

                        <tr>
                            <td>Payment Type</td>
                            <td><?php echo $payment_info['payment_type']; ?></td>
                        </tr>
                        <tr>
                            <td>Payment status</td>
                            <td><?php echo $payment_info['payment_status']; ?></td>
                        </tr>

                        </tbody>
                    </table>
                    <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">

                    <h2>product Info</h2>
                        <tbody>

                        <tr>
                            <td>Product Id</td>
                            <td>Product Name</td>
                            <td>Product image</td>
                            <td>Product Price</td>
                            <td>Product Quantity</td>
                            <td>Total price</td>
                        </tr>

                        <?php while ($product_info = $result_pro->fetch_assoc()) {


                            ?>

                            <tr>
                                <td><?php echo $product_info['product_id']; ?></td>
                                <td><?php echo $product_info['product_name']; ?></td>
                                <td>
                                    <img src="<?php echo $product_info['product_image']; ?>" alt="Product image" height="100px" width="100px">


                                </td>
                                <td><?php echo $product_info['product_price']; ?></td>
                                <td><?php echo $product_info['product_quantity']; ?></td>
                                <td><?php echo $product_info['order_total']; ?></td>

                            </tr>
                        <?php }
                        ?>



                        </tbody>

                    </table>

                </div>
            </div>
            <div class="row"><div class="col-sm-5"><div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                </div>
                <div class="col-sm-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                        <ul class="pagination"><li class="paginate_button previous disabled" id="datatable_previous">
                                <a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0">Previous</a>
                            </li>
                            <li class="paginate_button active"><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0">1</a>
                            </li><li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0">2</a>
                            </li><li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0">3</a>
                            </li><li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="4" tabindex="0">4</a>
                            </li><li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="5" tabindex="0">5</a>
                            </li><li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="6" tabindex="0">6</a>
                            </li><li class="paginate_button next" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0">Next</a></li></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


