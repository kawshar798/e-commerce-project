<?php
/**
 * Created by PhpStorm.
 * User: unknow
 * Date: 5/2/18
 * Time: 8:49 AM
 */

namespace App\classes;


class Category
{

    public function addCategory($data){

        $category_title = $data['category_title'];
        $publication_status = $data['publication_status'];


        $sql = "INSERT INTO tbl_category(category_title,publication_status)VALUES('$category_title', '$publication_status')";
        $query_result = mysqli_query(Database::dbConnection(),$sql);
        if($query_result){
                $msg = "Insert successful";
                return $msg;
        }else{
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }


    }

    public function show_all_category(){

        $sql = "SELECT * FROM tbl_category";

        $query_result = mysqli_query(Database::dbConnection(),$sql);

        if($query_result){

            return $query_result;
        }else{
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }
    }

    public function publishedCatByBid($cat_id){

        $sql = "UPDATE tbl_category SET publication_status = 1  WHERE  category_id='$cat_id'";

        $query_result = mysqli_query(Database::dbConnection(),$sql);

        if($query_result){
            header("location:manage_category.php");
        }
    }


    public function unPublishedCatByBid($cat_id){

        $sql = "UPDATE tbl_category SET publication_status =0  WHERE  category_id='$cat_id'";

        $query_result = mysqli_query(Database::dbConnection(),$sql);

        if($query_result){
            header("location:manage_category.php");
        }else{
            die("Query problme".mysqli_error(Database::dbConnection()));
        }
    }

    public function deleteCatByBid($cat_id){
        $sql = "DELETE FROM tbl_category WHERE category_id = $cat_id";
        $query_result = mysqli_query(Database::dbConnection(),$sql);

        if($query_result){
            header("location:manage_category.php");
        }else{
            die("Query problme".mysqli_error(Database::dbConnection()));
        }

    }

    public function edit_category_by_id($cat_id){
        $sql = "SELECT * FROM tbl_category  WHERE category_id='$cat_id'";
       $query_result = mysqli_query(Database::dbconnection(),$sql);
        if($query_result){
            $cat_info = mysqli_fetch_assoc($query_result);
            return $cat_info;
        }else{
            die("Query problme".mysqli_error(Database::dbConnection()));
        }
    }

    public function  update_category_by_id($data){
        $category_id = $data['category_id'];
        $category_title= $data['category_title'];
        $publication_status = $data['publication_status'];

        $sql = "UPDATE tbl_category SET category_title='$category_title',publication_status='$publication_status' WHERE  category_id=' $category_id'";
        $query_result = mysqli_query(Database::dbConnection(),$sql);
        if($query_result){
            header("location:manage_category.php");
        }else{
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }
    }

    /*================================
          Show all Published Category
    ==================================*/
    public function selectAllPublishedCategory(){
        $sql = "SELECT *  FROM tbl_category WHERE publication_status=1";
        $run_query = mysqli_query(Database::dbConnection(),$sql);

        if($run_query){

            return $run_query;
        }else{
            die("Query problme".mysqli_error(Database::dbConnection()));
        }
    }

    /*******************************
        *
        * SUB CATEGORY
        *
        *
     ***********************************/
    /*=====================
       Add Sub Category
    =======================*/
    
    public function addSubCategory($data){
        $sub_cat_title      = $data['sb_cat_title'];
        $category_title     = $data['category_title'];
        $publication_status = $data['publication_status'];

        $sql = "INSERT INTO tbl_subCategory(sb_cat_title,category_id,publication_status)VALUES('$sub_cat_title','$category_title','$publication_status')";
        $query_result = mysqli_query(Database::dbConnection(),$sql);
        if($query_result){
                    $msg = "Sub Category Add successfully";
                    return $msg;
        }else{
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }

    }
    /*==============================
       Show all Sub Category
    ================================*/
    public function show_all_sub_category(){
        $sql = "SELECT  tbl_subCategory.*,tbl_category.category_title
        FROM tbl_subCategory
        INNER jOIN tbl_category
        ON tbl_subCategory.category_id = tbl_category.category_id
        ORDER BY tbl_subCategory.sb_cat_id DESC;
        ";

        $query_result = mysqli_query(Database::dbConnection(),$sql);

        if($query_result){

            return $query_result;
        }else{
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }
    }

    /*===================================
         Show all Published Sub Category
   ======================================*/
    public function selectAllPublishedSubCategory($cat_id){
        $sql = "SELECT *  FROM tbl_subCategory WHERE publication_status=1 AND category_id='$cat_id'";
        $run_query = mysqli_query(Database::dbConnection(),$sql);

        if($run_query){

            return $run_query;
        }else{
            die("Query problme".mysqli_error(Database::dbConnection()));
        }
    }



    /*===================================
          Unpublished  Sub Category
     ====================================*/

    public function unPublishedSubCatById($subCatId){

        $sql = "UPDATE tbl_subCategory 
                SET publication_status =0
                WHERE  sb_cat_id='$subCatId'";

        $query_result = mysqli_query(Database::dbConnection(),$sql);

        if($query_result){
            header("location:manage_sub_category.php");
        }else{
            die("Query problme".mysqli_error(Database::dbConnection()));
        }

    }
    /*===================================
          Published  Sub Category
     ====================================*/
    public function publishedSubCatById($subCatId){
        $sql = "UPDATE tbl_subCategory 
                SET publication_status =1
                WHERE  sb_cat_id='$subCatId'";

        $query_result = mysqli_query(Database::dbConnection(),$sql);

        if($query_result){
            header("location:manage_sub_category.php");
        }else{
            die("Query problme".mysqli_error(Database::dbConnection()));
        }
    }
    /*===================================
         Delete  Sub Category
    ====================================*/
    public function deleteSubCatById($subCatId){
        $sql = "DELETE FROM tbl_subCategory WHERE sb_cat_id = $subCatId";
        $query_result = mysqli_query(Database::dbConnection(),$sql);

        if($query_result){
            header("location:manage_sub_category.php");
        }else{
            die("Query problme".mysqli_error(Database::dbConnection()));
        }
    }

    /*******************************
        *
        * CHILD CATEGORY
        *
        *
     ***********************************/



    /*=====================
       Add   child Category
    =======================*/

    public function  addChildCategory($data){
        $child_cat_title    =   $data['child_cat_title'];
        $category_name      =   $data['category_name'];
        $sb_cat_name        =   $data['sb_cat_name'];
        $publication_status =   $data['publication_status'];

        $sql = "INSERT 
                INTO
                tbl_child_category(child_cat_title,category_id,sb_cat_id,publication_status)
                VALUES('$child_cat_title','$category_name','$sb_cat_name','$publication_status')";
        $query_result = mysqli_query(Database::dbConnection(),$sql);
        if($query_result){

        }else{
           die("Query Problem".mysqli_error(Database::dbConnection()));
        }

    }

    /*=====================
       Show all Child Category
    =======================*/
    public function  show_all_child_category(){

        $sql = "SELECT tbl_child_category.*,tbl_category.category_title,tbl_subCategory.sb_cat_title
                FROM tbl_child_category
                INNER  JOIN tbl_category
                ON tbl_child_category.category_id = tbl_category.category_id
                INNER  JOIN tbl_subCategory
                ON tbl_child_category.sb_cat_id = tbl_subCategory.sb_cat_id
                ORDER BY tbl_child_category.child_cat_id DESC";

        $query_result = mysqli_query(Database::dbConnection(),$sql);
        if($query_result){
            return $query_result;
        }else{
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }


    }

    /*===================================
     Show all Published Sub Category
======================================*/
    public function selectAllPublishedChildCategory($sub_cat_id){
        $sql = "SELECT *  FROM tbl_child_category WHERE sb_cat_id='$sub_cat_id'";
        $run_query = mysqli_query(Database::dbConnection(),$sql);

        if($run_query){

            return $run_query;
        }else{
            die("Query problme".mysqli_error(Database::dbConnection()));
        }

    }
    /*===================================
           Unpublished  Child Category
      ====================================*/

    public function unpublishedChildCatById($childCatId){

        $sql = "UPDATE tbl_child_category 
                SET publication_status =0
                WHERE  child_cat_id='$childCatId'";

        $query_result = mysqli_query(Database::dbConnection(),$sql);

        if($query_result){
            header("location:manage_child_category.php");
        }else{
            die("Query problme".mysqli_error(Database::dbConnection()));
        }

    }
    /*===================================
          Published  Child Category
     ====================================*/
    public function publishedChildCatById($childCatId){
        $sql = "UPDATE tbl_child_category 
                SET publication_status =1
                WHERE  child_cat_id='$childCatId'";

        $query_result = mysqli_query(Database::dbConnection(),$sql);

        if($query_result){
            header("location:manage_child_category.php");
        }else{
            die("Query problme".mysqli_error(Database::dbConnection()));
        }
    }
    /*===================================
         Delete  Child Category
    ====================================*/
    public function deleteChildCatById($childCatId){
        $sql = "DELETE FROM tbl_child_category WHERE child_cat_id = $childCatId";
        $query_result = mysqli_query(Database::dbConnection(),$sql);

        if($query_result){
            header("location:manage_child_category.php");
        }else{
            die("Query problme".mysqli_error(Database::dbConnection()));
        }
    }








}