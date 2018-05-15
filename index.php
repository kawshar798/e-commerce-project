<?php include "includes/header.php"?>
<!-- End header -->


<?php

if(isset($pages)){
        if($pages=="product_list"){
            include  "pages/product_list_content.php";
        }else if($pages=="product_details"){

            include  "pages/product_details_content.php";
        }else if($pages=="product_category"){

            include  "pages/product_category_content.php";
        }else if($pages=="cart"){

            include  "pages/cart_content.php";
        }else if($pages=="checkout"){

            include  "pages/checkout_content.php";
        }else if($pages=="register"){

            include  "pages/register_content.php";
        }else if($pages=="login"){

            include  "pages/login_content.php";
        }else if($pages=="order_page"){

            include  "pages/order_content.php";
        }else if($pages=="payment"){

            include  "pages/payment_content.php";
        }else if($pages=="dashboard"){

            include  "pages/dashboard_content.php";
        }
}else{
    include "pages/home_content.php";
}

?>

<?php include "includes/service_info.php";?>

<?php include "includes/footer.php"?>