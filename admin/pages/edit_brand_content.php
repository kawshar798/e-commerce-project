<?php
/**
 * Created by PhpStorm.
 * User: unknow
 * Date: 5/3/18
 * Time: 12:42 PM
 */

require_once  "../vendor/autoload.php";
use App\classes\Brand;
$brand = new Brand();
if(isset($_GET['brand_id'])){

    $brand_id = $_GET['brand_id'];
    $brand_info = $brand->showBrandById($brand_id);

}

if(isset($_POST['submit'])){

    $msg =  $brand->updateBrandById($_POST);
}
?>

<div class="row x_panel">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_content">
            <span class="section">Edit Brand</span>

            <form class="form-horizontal form-label-left" action="" method="post" name="edit_form">


                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="brand_name">Brand Name<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="cat_title"  name="brand_name"  class="form-control col-md-7 col-xs-12" value="<?php echo $brand_info['brand_name']?>" required="required" type="text">
                        <input id="cat_title"  name="brand_id"  class="form-control col-md-7 col-xs-12" value="<?php echo $brand_info['brand_id']?>" required="required" type="text">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="brand_description">Brand Description<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea id="brand_description" cols="10" rows="5" name="brand_description"  class="form-control col-md-7 col-xs-12 summernote"  required="required">
                            <?php echo $brand_info['brand_description']?>"
                        </textarea>
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
<script>
    document.forms['edit_form'].elements['publication_status'].value=<?php echo $brand_info['publication_status']; ?>
</script>