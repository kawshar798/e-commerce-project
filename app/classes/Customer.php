<?php
/**
 * Created by PhpStorm.
 * User: unknow
 * Date: 5/9/18
 * Time: 7:52 PM
 */

namespace App\classes;


class Customer
{
    private $db_link;

    public function  __construct()
    {
        $database=new Database();
        $this->db_link=$database->dbConnection();
    }

    public function save_customer_info($data){

        $firstName = $data['first_name'];
        $last_name = $data['last_name'];
        $email_address = $data['email_address'];
        $password = $data['password'];
        $phone_number = $data['phone_number'];
        $address = $data['address'];
        $city = $data['city'];
        $district = $data['district'];
        $zip_code = $data['zip_code'];
        $country = $data['country'];


        $sql = "INSERT INTO tbl_customer(first_name,last_name,email_address,password,phone_number,address,zip_code,city,district,country)
        VALUES ('$firstName','$last_name','$email_address','$password','$phone_number','$address','$zip_code','$city','$district','$country')";
        $run_query = mysqli_query(Database::dbConnection(),$sql);

        if($run_query){
            $customer_id = mysqli_insert_id($this->db_link);

           $_SESSION['customer_id']=$customer_id;
           $_SESSION['customer_name'] =$data['first_name'].' '.$data['last_name'];

           //Customer verification
            $en_customer_id =base64_encode($customer_id);
           $to      = $data['email_address'];
           $subject = "Customer Email verification";
           $message ="
           <span>Dear $last_name.  Thanks for join Our team</span></br>
           <span> Your login information goes here.</span></br>
           <span>Email Address : </span>$email_address.</br>
           <span>Password : </span>$password.</br>
           <span>to active your account please click here :</span></br>
           <a href='http://localhost/ecommerce/update_customer_status.php?id=$en_customer_id'>http://localhost/ecommerce/update_customer_status.php?id=$en_customer_id</a>";
           $header ='From:info@matha.com';


            mail($to,$subject,$message,$header);






            //header("location:shipping.php");

            $msg = "Sing Up successful";
            return $msg;

        }else{
            die("Query problem".mysqli_error(Database::dbConnection()).__LINE__);
        }

    }


    public  function select_customer_info($customer_id){

        $sql = "SELECT * FROM tbl_customer WHERE customer_id='$customer_id'";
        $query_result = mysqli_query(Database::dbconnection(),$sql);
        if($query_result){
            return $query_result;
        }else{
            die("Query problme".mysqli_error(Database::dbConnection()));
        }
    }

    public function checkCustomerLogin($data){

        $email_address=$data['email_address'];
        $password=$data['password'];

        $sql = "SELECT * FROM tbl_customer WHERE email_address='$email_address' AND password='$password'";
        $run_query = mysqli_query(Database::dbConnection(),$sql);
        if($run_query){
            $customer_info = mysqli_fetch_assoc($run_query);
            $_SESSION['customer_id']=$customer_info['customer_id'];
            $_SESSION['customer_name']=$customer_info['customer_name'];
            header("location:order.php");
        }
    }

          public function update_customer_status($customer_id){
        $sql = "UPDATE tbl_customer SET activation_status=1  WHERE customer_id='$customer_id'";
        $run_query = mysqli_query(Database::dbconnection(),$sql);
        if($run_query){
            header("location:customer.php");
        }
    }



    public function customerLogout(){


        unset($_SESSION['customer_id']);
        unset($_SESSION['customer_name']);
        header("location:login.php");
    }

}