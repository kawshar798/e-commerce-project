<?php
/**
 * Created by PhpStorm.
 * User: unknow
 * Date: 5/6/18
 * Time: 4:42 PM
 */

namespace App\classes;


class Slider
{


    public function  addSlide($data){
        $slider_title=$data['slider_title'];
        $slider_description=$data['slider_description'];
        $publication_status=$data['publication_status'];


        $directory = "../assets/slider_image/";
        $target_file = $directory.$_FILES['slide_image']['name'];



        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);

        $check = getimagesize($_FILES['slide_image']['tmp_name']);
        $file_size = $_FILES['slide_image']['size'];
        if ($check) {
            if (file_exists($target_file)) {
                die("This file already exist");
            } else {
                if ($file_size > 1100000) {
                    die("File is too large");
                } else {
                    if ($file_type != "jpg" && $file_type != "png") {
                        die("File type should jpg or png");
                    } else {
                        move_uploaded_file($_FILES['slide_image']['tmp_name'], $target_file);
                    }
                }
            }
        } else {
            die("This is not an image.please upload valid image");
        }

        $sql = "INSERT INTO  tbl_slider(slider_title,slider_description,slide_image,publication_status)VALUES ('$slider_title','$slider_description','$target_file','$publication_status')";
        $run_query = mysqli_query(Database::dbConnection(),$sql);
        if($run_query){

        }else{
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }

    }


    public function showAllSlider(){
        $sql = "SELECT * FROM  tbl_slider";
        $run_query = mysqli_query(Database::dbConnection(),$sql);
        if($run_query){
            return $run_query;

        }else{
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }
    }

    public function showAllPublishedSlider(){
        $sql = "SELECT * FROM  tbl_slider WHERE publication_status=1 ORDER  BY slider_id DESC LIMIT 3";
        $run_query = mysqli_query(Database::dbConnection(),$sql);
        if($run_query){
            return $run_query;

        }else{
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }
    }



}