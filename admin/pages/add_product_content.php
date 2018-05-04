<?php
require_once "../vendor/autoload.php";
use App\classes\Product;
use App\classes\Category;
use App\classes\Brand;

$category = new Category();
$brand    = new Brand();
$product = new Product();


if(isset($_POST['submit'])){

    $msg=$product->addProduct($_POST);
}

?>

<div class="row x_panel">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_content">
            <span class="section">Add Product Form</span>
            <h3 class="text-success text-center"><?php  if(isset($msg)){
                    echo $msg;
                }


                ?></h3>
            <form class="form-horizontal form-label-left" action="" method="post" enctype="multipart/form-data">


                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_name">Product Name<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="product_name"  name="product_name"  class="form-control col-md-7 col-xs-12"  placeholder="Enter Product Name" required="required" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Category name</label>
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
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Sub Category name</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" name="sb_cat_name">
                            <option>Choose option</option> <?php

                            $sb_cat_info = $category->show_all_sub_category();
                            while($sb_cat = mysqli_fetch_assoc($sb_cat_info)){?>

                                <option value="<?php echo $sb_cat['sb_cat_id'];?>"><?php echo $sb_cat['sb_cat_title'];?></option>

                            <?php }?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Child Category name</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" name="Child_cat_name">
                            <option>Choose option</option>
                            <?php

                            $child_cat_info = $category->show_all_child_category();
                            while($child_cat_show = mysqli_fetch_assoc($child_cat_info)){?>

                                <option value="<?php echo $child_cat_show['child_cat_id'];?>"><?php echo $child_cat_show['child_cat_title'];?></option>

                            <?php }?>


                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Brand name</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" name="brand_name">
                            <option>Choose option</option>
                            <?php

                            $brand_info = $brand->showAllBrand();;
                            while($brand_show = mysqli_fetch_assoc($brand_info)){?>

                                <option value="<?php echo $brand_show['brand_id'];?>"><?php echo $brand_show['brand_name'];?></option>

                            <?php }?>

                        </select>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_price">Product Price<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="product_price"  name="product_price"  class="form-control col-md-7 col-xs-12"  placeholder="Enter Product Price" required="required" type="number">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="stock_amount">Product Price<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="stock_amount"  name="stock_amount"  class="form-control col-md-7 col-xs-12"  placeholder="Enter Stock Amount" required="required" type="number">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="minimum_stock_amount">Product Price<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="minimum_stock_amount"  name="minimum_stock_amount"  class="form-control col-md-7 col-xs-12"  placeholder="Enter Minimum Stock Amount" required="required" type="number">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_short_description">Product Short Description<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea id="product_short_description" cols="10" rows="5" name="product_short_description"  class="form-control col-md-7 col-xs-12 summernote1"  required="required"></textarea>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_long_description">Product Long Description<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea id="product_long_description" cols="10" rows="5" name="product_long_description"  class="form-control col-md-7 col-xs-12 summernote2"  required="required"></textarea>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_image">Product Image<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="product_image"  name="product_image"  class="form-control col-md-7 col-xs-12"  placeholder="Enter product Image" required="required" type="file">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_image_1">Product Image One<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="product_image_1"  name="product_image_1"  class="form-control col-md-7 col-xs-12"  placeholder="Enter product Image one" required="required" type="file">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_image_2">Product Image two<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="product_image_2"  name="product_image_2"  class="form-control col-md-7 col-xs-12"  placeholder="Enter product Image two" required="required" type="file">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_image_3">Product image Three<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="product_image_3"  name="product_image_3"  class="form-control col-md-7 col-xs-12"  placeholder="Enter product Image three" required="required" type="file">
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
