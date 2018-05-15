<?php
/**
 * Created by PhpStorm.
 * User: unknow
 * Date: 5/14/18
 * Time: 12:20 AM
 */

namespace App\classes;




class Order
{
    private $db_link;

public function  __construct()
{
    $database=new Database();
    $this->db_link=$database->dbConnection();
}


// save order info from user;

    public function saveOrderInfo($data)
    {


        $payment_type = $data['payment_type'];
        if ($payment_type == "cashondelivery") {

            $customer_id = $_SESSION['customer_id'];
            $shiping_id = $_SESSION['shipping_id'];
            $total_order = $_SESSION['grand_total'];

            $query = "INSERT INTO tbl_order(customer_id,shipping_id,order_total)VALUES('$customer_id',$shiping_id,'$total_order')";
            $run_query = mysqli_query($this->db_link,$query);
            if ($run_query) {
                $order_id = mysqli_insert_id($this->db_link);
                $sql = "INSERT INTO  tbl_payment(order_id,payment_type)VALUES ('$order_id','$payment_type')";
                $run_query = mysqli_query($this->db_link,$sql);
                if($run_query){
                    $session_id = session_id();
                    $query = " SELECT * FROM tbl_temp_cart WHERE session_id='$session_id'";
                    $run_query = mysqli_query(Database::dbConnection(),$query);

                    while ($product_info = mysqli_fetch_assoc($run_query)) {

                        $product_id = $product_info['product_id'];
                        $product_name = $product_info['product_name'];
                        $product_price = $product_info['product_price'];
                        $product_quantity = $product_info['product_quantity'];
                        $product_image = $product_info['product_image'];

                        $sql = "INSERT INTO tbl_order_details(order_id,product_name,product_id,product_price,product_quantity,product_image)
                              VALUES ('$order_id','$product_name','$product_id','$product_price','$product_quantity','$product_image')";
                        $run_query = mysqli_query($this->db_link,$sql);


                        $query = "DELETE FROM tbl_temp_cart WHERE session_id='$session_id'";
                        $run_query = mysqli_query(Database::dbConnection(),$query);
                        unset($_SESSION['grand_total']);
                        header("location:dashboard.php");


                    }
                }else{
                    die("Query problems" . mysqli_error(Database::dbConnection()));
                }

            } else {
                die("Query problems" . mysqli_error(Database::dbConnection()));
            }
        }
    }




    public function select_all_order_info(){

        $query = "SELECT o.*,c.first_name,c.last_name,p.payment_type,p.payment_status 
                   FROM tbl_order as o,tbl_customer as c,tbl_payment as p 
                  WHERE o.customer_id AND o.order_id=p.order_id";


        $run_query = mysqli_query(Database::dbConnection(),$query);
        if($run_query){
            return $run_query;
        }else{
            die("query Problem".mysqli_error($this->db_con));
        }
    }


    // pick up customer info by order id

    public function  select_customer_info_by_order_id($order_id){

        $query = "SELECT o.order_id,o.customer_id,c.*FROM tbl_order as o,tbl_customer as c WHERE   o.customer_id=c.customer_id AND o.order_id = $order_id";

        $run_query = mysqli_query(Database::dbconnection(),$query);
        if($run_query){
            return $run_query;
        }else{
            die("Query problems" . mysqli_error(Database::dbConnection()));
        }

    }
        // pick up Shipping  info by order id
    public function  select_shipping_info_by_order_id($order_id){

        $query = "SELECT o.shipping_id,s.*FROM tbl_order as o,tbl_shipping as s WHERE   o.shipping_id=s.shipping_id AND o.order_id = $order_id";

        $run_query = mysqli_query(Database::dbconnection(),$query);
        if($run_query){
            return $run_query;
        }else{
            die("Query problems" . mysqli_error(Database::dbConnection()));
        }

    }
    // pick up payment  info by order id
    public function  select_payment_info_by_order_id($order_id){

        $query = "SELECT o.order_id,p.*FROM tbl_order as o,tbl_payment as p WHERE   o.order_id=p.order_id AND o.order_id = $order_id";

        $run_query = mysqli_query(Database::dbconnection(),$query);
        if($run_query){
            return $run_query;
        }else{
            die("Query problems" . mysqli_error(Database::dbConnection()));
        }

    }

    // pick up payment  info by order id
    public function  select_product_by_order_id($order_id){

        $query = "SELECT od.*,o.order_id,o.order_total FROM tbl_order_details as od, tbl_order as o WHERE   od.order_id=o.order_id AND o.order_id = $order_id";

        $run_query = mysqli_query(Database::dbconnection(),$query);
        if($run_query){
            return $run_query;
        }else{
            die("Query problems" . mysqli_error(Database::dbConnection()));
        }

    }

}