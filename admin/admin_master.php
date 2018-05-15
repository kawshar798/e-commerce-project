<?php include "includes/header.php"?>
<?php include "includes/left_side.php"?>

        <!-- top navigation -->
      <?php include "includes/top_nav.php"?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
          <?php
                if(isset($pages)){

                    if($pages=="add_category"){

                        include  "pages/add_category_content.php";
                    }else if($pages=="manage_category"){
                        include  "pages/manage_category_content.php";
                    }else if($pages=="edit_category"){
                        include  "pages/edit_category_content.php";
                    }else if($pages=="add_sub_category"){
                        include "pages/add_sub_category_content.php";
                    }else if($pages=="manage_sub_category"){
                        include "pages/manage_sb_cat_content.php";
                    }else if($pages=="add_child_category"){
                        include "pages/add_child_category_content.php";
                    }else if($pages=="manage_child_category"){
                        include "pages/manage_child_category_content.php";
                    }else if($pages=="add_brand"){
                        include "pages/add_brand_content.php";
                    }else if($pages=="manage_brand"){
                        include "pages/manage_brand_content.php";
                    }else if($pages=="edit_brand"){
                        include "pages/edit_brand_content.php";
                    }else if($pages=="add_product"){
                        include "pages/add_product_content.php";
                    }else if($pages=="manage_product"){
                        include "pages/manage_product_content.php";
                    }else if($pages=="add_backourd_image"){
                        include "pages/add_bg_image_content.php";
                    }else if($pages=="manage_background_image"){
                        include "pages/manage_bg_image_content.php";
                    }else if($pages=="add_slider"){
                        include "pages/add_slider_content.php";
                    }else if($pages=="manage_slider"){
                        include "pages/manage_slider_content.php";
                    }else if($pages=="order"){
                        include "pages/manage_order_content.php";
                    }else if($pages=="view_order"){
                        include "pages/view_order_content.php";
                    }

                }else{
                    include  "pages/home_content.php";
                }


          ?>
            <!-- /top tiles -->
        </div>
<?php include  "includes/footer.php"?>