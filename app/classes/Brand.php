<?php
/**
 * Created by PhpStorm.
 * User: unknow
 * Date: 5/3/18
 * Time: 10:09 AM
 */

namespace App\classes;



class Brand
{

    /*=====================
        Add   Brand
    =======================*/
    public function addBrand($data){

        $brand_name         = $data['brand_name'];
        $brand_description  = $data['brand_description'];
        $publication_status = $data['publication_status'];

        $sql = "INSERT 
                INTO 
                tbl_brand(brand_name,brand_description,publication_status)
                VALUES ('$brand_name','$brand_description','$publication_status')";
        $query_problem = mysqli_query(Database::dbConnection(),$sql);
        if($query_problem){
            $msg = "Brand Add Successfully";
            return $msg;
        }else{
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }

    }
    /*========================
        Show All  Brand
    ==========================*/
    public function showAllBrand(){

                $sql = "SELECT * FROM tbl_brand ORDER BY   brand_id DESC";
                $query_result= mysqli_query(Database::dbConnection(),$sql);
                if($query_result){
                    return $query_result;
                }else{
                    die("Query Problem".mysqli_error(Database::dbConnection()));
                }

    }
    /*==============================
         published   Brand  By Id
    ================================*/

    public function publishedBrandbyId($brand_id){
        $sql = "UPDATE tbl_brand SET publication_status = 1  WHERE  brand_id='$brand_id'";

        $query_result = mysqli_query(Database::dbConnection(),$sql);

        if($query_result){
            header("location:manage_brand.php");
        }

    }
    /*===============================
        Unpublished   Brand  By Id
    =================================*/
    public function unPublishedBrandbyId($brand_id){
        $sql = "UPDATE tbl_brand SET publication_status = 0  WHERE  brand_id='$brand_id'";

        $query_result = mysqli_query(Database::dbConnection(),$sql);

        if($query_result){
            header("location:manage_brand.php");
        }

    }
    /*==========================
        Delete   Brand  By Id
     ==============================*/
    public function  deleteBrandbyId($brand_id){
        $sql = "DELETE FROM tbl_brand WHERE brand_id = $brand_id";
        $query_result = mysqli_query(Database::dbConnection(),$sql);

        if($query_result){
            header("location:manage_brand.php");
        }else{
            die("Query problme".mysqli_error(Database::dbConnection()));
        }


    }

    /*==========================
           Update   Brand  By Id
    ==============================*/
    public function showBrandById($brand_id){

        $sql = "SELECT * FROM tbl_brand WHERE  brand_id = $brand_id";

        $query_result = mysqli_query(Database::dbConnection(),$sql);
        if($query_result){
            $brand_info = mysqli_fetch_assoc($query_result);
            return $brand_info;
        }
    }

    public function  updateBrandById($data){
        $brand_id           = $data['brand_id'];
        $brand_name         = $data['brand_name'];
        $brand_description  = $data['brand_description'];
        $publication_status = $data['publication_status'];

        $sql = "UPDATE tbl_brand
        SET brand_name='$brand_name',brand_description='$brand_description',publication_status='$publication_status'
        WHERE brand_id='$brand_id'";

        $query_result = mysqli_query(Database::dbConnection(),$sql);
        if($query_result){
            header("location:manage_brand.php");
        }else{
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }
    }
}