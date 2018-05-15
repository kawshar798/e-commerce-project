<?php
/**
 * Created by PhpStorm.
 * User: unknow
 * Date: 5/9/18
 * Time: 12:46 AM
 */

namespace App\classes;


class Cart
{

    public function add_to_cart($data)
    {

        $product_id = $data['product_id'];
        $product_quantity = $data['product_quantity'];

        //pick up  product name,product price,product image form product table
        $sql = "SELECT product_name,product_price,product_image FROM tbl_product WHERE product_id='$product_id'";
        $run_query = mysqli_query(Database::dbConnection(), $sql);
        $product_info = mysqli_fetch_assoc($run_query);
        $product_name = $product_info['product_name'];
        $product_price = $product_info['product_price'];
        $product_image = $product_info['product_image'];

        session_start();
        $session_id = session_id();



        //Pick up product id and session id from temp cart table
         //because only one product add one time in cart.
        $sql="SELECT * FROM tbl_temp_cart WHERE product_id='$product_id' AND session_id='$session_id'";
        $query_result = mysqli_query(Database::dbConnection(),$sql);
        if($query_result){
            $tem_product_info = mysqli_fetch_assoc($query_result);
            if($tem_product_info){
                $_SESSION['msg'] = "Product already added!! Please Update Your Quantity";
                header("Location:cart.php");
            }else{

                $query = "INSERT INTO   tbl_temp_cart(session_id,product_id,product_name,product_price,product_quantity,product_image)
                 VALUES ('$session_id','$product_id','$product_name','$product_price','$product_quantity','$product_image')";
                $query_result = mysqli_query(Database::dbConnection(), $query);
                if ($query_result) {
                    header("location:cart.php");
                } else {
                    die("Query Problem" . mysqli_errno(Database::dbConnection()) . __LINE__);
                }
            }

        } else {
            die("Query Problem" . mysqli_errno(Database::dbConnection()) . __LINE__);
        }

    }

        public function select_cart_product_by_session_id($session_id){

        $sql = "SELECT tbl_temp_cart.*, tbl_product.product_name,tbl_product.product_price,tbl_product.product_image
                FROM tbl_temp_cart
                INNER JOIN tbl_product
                ON tbl_temp_cart.product_id=tbl_product.product_id
                WHERE  session_id='$session_id'";

        $run_query = mysqli_query(Database::dbConnection(),$sql);
            if($run_query){


                return $run_query;
            }else{
                die("Query Problem".mysqli_errno(Database::dbConnection()).__LINE__);
            }


        }


        public function  update_temp_cart_by_temp_cart_id($data){
            $temp_cart_id=$data['temp_cart_id'];
        $product_quantity=$data['product_quantity'];

        if($product_quantity > 0){
            $sql = "UPDATE tbl_temp_cart SET product_quantity ='$product_quantity' WHERE  temp_cart_id='$temp_cart_id'";

            $query_result = mysqli_query(Database::dbConnection(),$sql);

            if($query_result){
               header("location:cart.php");
            }else{
                die("Query problme".mysqli_error(Database::dbConnection()));
            }
        }else {
            $msg = "Insert Valid Quantity";
            return $msg;
        }



        }
        public function  delete_cat_tem_product_by_id($temp_pro_id){

        $sql = "DELETE FROM tbl_temp_cart WHERE temp_cart_id='$temp_pro_id'";
            $query_result = mysqli_query(Database::dbConnection(),$sql);

            if($query_result){
                $msg = "Delete successful";
                return $msg;
            }else{
                die("Query problme".mysqli_error(Database::dbConnection()));
            }

        }

        public function  checkCartTable(){
            //session_start();
            $session_id = session_id();
        $sql = "SELECT * FROM tbl_temp_cart WHERE session_id='$session_id'";
        $query_result = mysqli_query(Database::dbConnection(),$sql);
        if($query_result){
            $cat_info = mysqli_fetch_assoc($query_result);
            return $cat_info;

        }else{
            die("Query problme".mysqli_error(Database::dbConnection()));
        }


        }




}