<?php
/**
 * Created by PhpStorm.
 * User: unknow
 * Date: 5/1/18
 * Time: 5:48 PM
 */


namespace App\classes;
use App\classes\Database;


class Login
{

    public function adminLoginCheck($data){
        $admin_email = $data['admin_email'];
        $admin_pass = md5($data['admin_pass']);

        $sql = "SELECT * FROM tbl_admin WHERE admin_mail='$admin_email' AND admin_pass='$admin_pass'";
        $query_result = mysqli_query(Database::dbConnection(),$sql);
        if($query_result){
            $admin_info = mysqli_fetch_assoc($query_result);
            if($admin_info){

                session_start();
                $_SESSION['admin_id'] = $admin_info['admin_id'];
                $_SESSION['admin_name'] = $admin_info['admin_name'];
                    header("location:admin_master.php");
            }else{
                $msg = "Please Enter Valid Email or Password";
                return $msg;
            }

        }else{
            die("Query Problem".mysqli_error(Database::dbconnection()));
        }
    }

    public function adminLogOut(){
        unset($_SESSION['admin_id']);
        unset($_SESSION['admin_name']);
        header("location:index.php");
    }


}