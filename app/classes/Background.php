<?php
/**
 * Created by PhpStorm.
 * User: unknow
 * Date: 5/5/18
 * Time: 7:46 PM
 */

namespace App\classes;


class Background
{

public function  addBackground($data){
    $bg_location_name=$data['bg_location_name'];
    $publication_status=$data['publication_status'];


    $directory = "../assets/product_image/";
    $target_file = $directory.$_FILES['bg_image']['name'];



    $file_type = pathinfo($target_file, PATHINFO_EXTENSION);

    $check = getimagesize($_FILES['bg_image']['tmp_name']);
    $file_size = $_FILES['bg_image']['size'];
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
                    move_uploaded_file($_FILES['bg_image']['tmp_name'], $target_file);
                }
            }
        }
    } else {
        die("This is not an image.please upload valid image");
    }

    $sql = "INSERT INTO tbl_background(bg_location_name,bg_image,publication_status)VALUES ('$bg_location_name','$target_file','$publication_status')";
    $run_query = mysqli_query(Database::dbConnection(),$sql);
    if($run_query){

    }else{
        die("Query Problem".mysqli_error(Database::dbConnection()));
    }


}

}