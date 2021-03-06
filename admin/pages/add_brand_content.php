<?php
require_once "../vendor/autoload.php";
use App\classes\Brand;

$brand = new Brand();

if(isset($_POST['submit'])){

   $msg =  $brand->addBrand($_POST);
}

?>

<div class="row x_panel">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_content">
            <span class="section">Add Brand</span>
            <h3 class="text-success text-center"><?php  if(isset($msg)){
                    echo $msg;
                }


                ?></h3>
            <form class="form-horizontal form-label-left" action="" method="post">


                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="brand_name">Brand Name<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="cat_title"  name="brand_name"  class="form-control col-md-7 col-xs-12"  placeholder="Enter Category Title" required="required" type="text">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="brand_description">Brand Description<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea id="brand_description" cols="10" rows="5" name="brand_description"  class="form-control col-md-7 col-xs-12 summernote"  required="required"></textarea>
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
