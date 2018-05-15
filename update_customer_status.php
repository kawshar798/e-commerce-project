<?php
/**
 * Created by PhpStorm.
 * User: unknow
 * Date: 5/14/18
 * Time: 1:40 PM
 */
include "vendor/autoload.php";
$en_customer_id = $_GET['id'];
echo $en_customer_id;
$customer_id = base64_decode($en_customer_id);
echo $customer_id;

include "app/classes/Customer.php";

$customer = new \App\classes\Customer();
$customer->update_customer_status($customer_id);



