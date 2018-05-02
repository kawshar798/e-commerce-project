<?php
/**
 * Created by PhpStorm.
 * User: unknow
 * Date: 5/1/18
 * Time: 5:55 PM
 */

namespace App\classes;


class Database
{

    public function dbConnection(){

        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "12345";
        $db_name = "db_ecommerce";

        $db_link = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

        if(!$db_link){
            die("Connection Failed".mysqli_error($db_link));

        }else{
            return $db_link;
        }
    }

}