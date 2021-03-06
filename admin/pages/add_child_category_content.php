<?php
require_once "../vendor/autoload.php";
use App\classes\Category;

$category = new Category();

if(isset($_POST['submit'])){

    $msg = $category->addChildCategory($_POST);
}


?>

<div class="row x_panel">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_content">
            <span class="section">Add Child Category</span>
            <h3 class="text-success text-center"><?php  if(isset($msg)){
                    echo $msg;
                }


                ?></h3>
            <form class="form-horizontal form-label-left" action="" method="post">


                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="child_cat_title">Child Category Title<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="child_cat_title"  name="child_cat_title"  class="form-control col-md-7 col-xs-12"  placeholder="Enter Category Title" required="required" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Category Name</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" name="category_name">
                            <option>Choose option</option>
                            <?php
                            $query_result = $category->show_all_category();
                            while($cat_info = mysqli_fetch_assoc($query_result) ){?>
                                <option value="<?php echo $cat_info['category_id'];?>"><?php echo $cat_info['category_title']; ?></option>


                            <?php }

                            ?>


                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Sub Category Name</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" name="sb_cat_name">
                            <option>Choose option</option>

                            <?php

                            $sb_cat_info = $category->show_all_sub_category();
                            while($sb_cat = mysqli_fetch_assoc($sb_cat_info)){?>

                                <option value="<?php echo $sb_cat['sb_cat_id'];?>"><?php echo $sb_cat['sb_cat_title'];?></option>

                            <?php }?>


                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Publication Status</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" name="publication_status">
                            <option>Choose option</option>
                            <option value="1">published</option>
                            <option value="0">unpublished</option>
                        </select>
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">

                        <button id="send" type="submit" name="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
