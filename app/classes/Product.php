<?php
/**
 * Created by PhpStorm.
 * User: unknow
 * Date: 5/4/18
 * Time: 9:50 AM
 */

namespace App\classes;


class Product
{

    public function addProduct($data){
        $product_name               = $data['product_name'];
        $category_name              = $data['category_name'];
        $sub_cat_name               = $data['sb_cat_name'];
       $child_cat_name             = $data['Child_cat_name'];
       $brand_name             = $data['brand_name'];
       $product_price           = $data['product_price'];
        $stock_amount           = $data['stock_amount'];
        $minimum_stock_amount           = $data['minimum_stock_amount'];
        $product_short_description           = $data['product_short_description'];
        $product_long_description           = $data['product_long_description'];
        $publication_status           = $data['publication_status'];



        $directory = "../assets/product_image/";
        $target_file = $directory . $_FILES['product_image']['name'];
        $target_file_1 = $directory . $_FILES['product_image_1']['name'];
        $target_file_2 = $directory . $_FILES['product_image_2']['name'];
        $target_file_3 = $directory . $_FILES['product_image_3']['name'];


        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);

        $check = getimagesize($_FILES['product_image']['tmp_name']);
        $file_size = $_FILES['product_image']['size'];
        if ($check) {
            if (file_exists($target_file)) {
                die("This file already exist");
            } else {
                if ($file_size > 700000) {
                    die("File is too large");
                } else {
                    if ($file_type != "jpg" && $file_type != "png") {
                        die("File type should jpg or png");
                    } else {
                        move_uploaded_file($_FILES['product_image']['tmp_name'], $target_file);
                    }
                }
            }
        } else {
            die("This is not an image.please upload valid image");
        }




        $sql = "INSERT INTO tbl_product(product_name,category_id,sb_cat_id,child_cat_id,brand_id,product_price,stock_amount,minimum_stock_amount,product_short_description,product_long_description,product_image,product_image_1,product_image_2,product_image_3,publication_status)
               VALUES('$product_name','$category_name','$sub_cat_name','$child_cat_name','$brand_name','$product_price','$stock_amount','$minimum_stock_amount','$product_short_description','$product_long_description','$target_file','$target_file_1','$target_file_2','$target_file_3','$publication_status')";
        $query_result = mysqli_query(Database::dbConnection(),$sql);
         if($query_result){
                $msg = "Inssert Succesful";
                return $msg;
         }else{
             die("Query Problem".mysqli_errno(Database::dbConnection()).__LINE__);
         }
    }

    public function show_all_product(){
        $sql       = "SELECT * FROM tbl_product ORDER  BY product_id DESC";
        $run_query = mysqli_query(Database::dbConnection(),$sql);
        if($run_query){
            return $run_query;
        }else{
            die("Query Problem".mysqli_errno(Database::dbConnection()).__LINE__);
        }
    }


    public function show_all_published_product(){
        $sql       = "SELECT * FROM tbl_product WHERE publication_status=1 ORDER BY product_id DESC";
        $run_query = mysqli_query(Database::dbConnection(),$sql);
        if($run_query){
            return $run_query;
        }else{
            die("Query Problem".mysqli_errno(Database::dbConnection()).__LINE__);
        }
    }
    public function  show_latest_product(){
        $sql       = "SELECT * FROM tbl_product  WHERE publication_status=1 ORDER BY product_id DESC LIMIT 7";
        $run_query = mysqli_query(Database::dbConnection(),$sql);
        if($run_query){


            return $run_query;
        }else{
            die("Query Problem".mysqli_errno(Database::dbConnection()).__LINE__);
        }


    }


    public function  show_product_by_id($product_id){

        $sql = "SELECT tbl_product.*, tbl_category.category_title,tbl_brand.brand_name
                FROM tbl_product
                INNER JOIN tbl_category
                ON tbl_product.category_id=tbl_category.category_id
                INNER JOIN tbl_brand
                ON tbl_product.brand_id=tbl_brand.brand_id AND product_id='$product_id'";





        $run_query = mysqli_query(Database::dbConnection(),$sql);
        if($run_query){

            $result = mysqli_fetch_assoc($run_query);
            return $result;
        }else{
            die("Query Problem".mysqli_errno(Database::dbConnection()).__LINE__);
        }


    }

    public function showAllPublishedProductBycat($product_id){
        $sql = "SELECT * FROM tbl_product WHERE  category_id='$product_id'";
        $run_query = mysqli_query(Database::dbConnection(),$sql);
        if($run_query){
                return $run_query;

        }else{
            die("Query Problem".mysqli_errno(Database::dbConnection()).__LINE__);
        }

    }

    public function  showAllPublishedProductByBrand_id($brand_id){
        $sql = "SELECT * FROM tbl_product WHERE  brand_id='$brand_id'";
        $run_query = mysqli_query(Database::dbConnection(),$sql);
        if($run_query){
            return $run_query;

        }else{
            die("Query Problem".mysqli_errno(Database::dbConnection()).__LINE__);
        }

    }
    //Show Men product in home page
    public function  selectProductByMen(){

        $sql = "SELECT * FROM tbl_product WHERE  category_id=2";
        $run_query = mysqli_query(Database::dbConnection(),$sql);
        if($run_query){
            return $run_query;

        }else{
            die("Query Problem".mysqli_errno(Database::dbConnection()).__LINE__);
        }


    }

    public function  selectProductBywoMen(){

        $sql = "SELECT * FROM tbl_product WHERE  category_id=3";
        $run_query = mysqli_query(Database::dbConnection(),$sql);
        if($run_query){
            return $run_query;

        }else{
            die("Query Problem".mysqli_errno(Database::dbConnection()).__LINE__);
        }


    }
    public function  showAllPublishedProductByChildCat($child_cat_id){

        $sql = "SELECT * FROM tbl_product WHERE  child_cat_id='$child_cat_id'";
        $run_query = mysqli_query(Database::dbConnection(),$sql);
        if($run_query){
            return $run_query;

        }else{
            die("Query Problem".mysqli_errno(Database::dbConnection()).__LINE__);
        }


    }





}