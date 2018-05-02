<?php
/**
 * Created by PhpStorm.
 * User: unknow
 * Date: 5/1/18
 * Time: 4:16 PM
 */
require_once "../vendor/autoload.php";
use App\classes\Category;

$category = new Category();



if(isset($_GET['cat_id'])){

    $cat_id = $_GET['cat_id'];

    $cat_info = $category->edit_category_by_id($cat_id);

}

if(isset($_POST['update_btn'])){

    $category->update_category_by_id($_POST);
}
?>

<div class="row x_panel">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_content">

            <span class="section">Add Category</span>

            <form class="form-horizontal form-label-left" action="" method="post" name="edits_frm">


                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cat_title">Category Title<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="cat_title"  name="category_title"  class="form-control col-md-7 col-xs-12" value="<?php echo $cat_info['category_title']?>" required="required" type="text">
                        <input id="cat_title"  name="category_id"  class="form-control col-md-7 col-xs-12" value="<?php echo $cat_info['category_id']?>" required="required" type="hidden">
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

                        <button id="send" type="submit" name="update_btn" class="btn btn-success">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<script>
    document.forms['edits_frm'].elements['publication_status'].value=<?php echo $cat_info['publication_status'];?>

</script>


