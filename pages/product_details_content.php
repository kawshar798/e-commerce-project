<?php
/**
 * Created by PhpStorm.
 * User: unknow
 * Date: 5/6/18
 * Time: 11:30 PM
 *
 * $
 */
$query_reuslt = $category->selectAllPublishedCategory();
$brand = $brand->showAllPublishedBrand();
if(isset($_GET['product_id'])){
    $product_id = $_GET['product_id'];

    $product_info = $product->show_product_by_id($product_id);
   

}



if (isset($_POST['submit'])){

    $cart->add_to_cart($_POST);

}

?>
<section>
    <div class="second-page-container">
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <div class="block-breadcrumb">
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Shirts</a></li>
                            <li class="active">Lolo</li>
                        </ul>
                    </div>

                    <div class="header-for-light">
                        <h3><?php
                            if(isset($_SESSION['msg'])){
                                echo  $_SESSION['msg'];
                            }

                            ?></h3>
                        <h1 class="wow fadeInRight animated" data-wow-duration="1s">Shirt <span>"LOLO"</span> </h1>


                    </div>

                    <div class="block-product-detail">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="product-image">
                                    <img id="product-zoom"  src='assets/<?php echo $product_info['product_image'];?>' data-zoom-image="assets/<?php echo $product_info['product_image'];?>" alt="">
                                    <div id="gal1">

                                        <a href="assets/<?php echo $product_info['product_image_1'];?>" data-lightbox="product" data-title="Product name" data-image="assets/<?php echo $product_info['product_image_1'];?>" data-zoom-image="assets/<?php echo $product_info['product_image_1'];?>">
                                            <img id="img_01" src="assets/<?php echo $product_info['product_image_1'];?>" alt="">
                                        </a>

                                        <a href="assets/<?php echo $product_info['product_image_2'];?>" data-lightbox="product" data-title="Product name" data-image="assets/<?php echo $product_info['product_image_2'];?>" data-zoom-image="assets/<?php echo $product_info['product_image_2'];?>">
                                            <img id="img_01" src="assets/<?php echo $product_info['product_image_2'];?>"  alt="">
                                        </a>

                                        <a href="assets/<?php echo $product_info['product_image_3'];?>" data-lightbox="product" data-title="Product name"  data-image="assets/<?php echo $product_info['product_image_3'];?>" data-zoom-image="assets/<?php echo $product_info['product_image_3'];?>">
                                            <img id="img_01" src="assets/<?php echo $product_info['product_image_3'];?>" />
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">


                                <div class="product-detail-section">
                                    <h3><?php echo $product_info['product_name'];?></h3>
                                    <div class="product-rating">
                                        <div class="stars">
                                            <span class="star"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span>
                                        </div>
                                        <a href="" class="review">150 Reviews</a>
                                    </div>

                                    <div class="product-information">
                                        <div class="clearfix">
                                            <label class="pull-left">Brand:</label> <a href="#"><?php echo $product_info['brand_name'];?></a><br>
                                        </div>
                                        <div class="clearfix">
                                            <label class="pull-left">Collection:</label> Effect collection
                                        </div>
                                        <div class="clearfix">
                                            <label class="pull-left">Product Code:</label> ID <?php echo $product_info['product_id'];?>
                                        </div>
                                        <div class="clearfix">
                                            <label class="pull-left">Size:</label>
                                            <select name="size" class="form-control">
                                                <option value="" selected="selected">...</option>
                                                <option value="1">L</option>
                                                <option value="2">XL</option>
                                                <option value="3">XLL</option>
                                            </select>
                                        </div>
                                        <div class="clearfix">
                                            <label class="pull-left">Availability:</label>
                                            <p><?php echo $product_info['stock_amount'];?> in stock</p>
                                        </div>
                                        <div class="clearfix">
                                            <label class="pull-left">Description:</label>
                                            <p class="description"><?php echo $product_info['product_short_description'];?></p>
                                        </div>
                                        <div class="clearfix">
                                            <label class="pull-left">Price:</label>
                                            <p class="product-price">$<?php echo $product_info['product_price'];?></p>
                                        </div>
                                        <form action="" method="post">
                                        <div class="clearfix">


                                                <label class="pull-left">Quantity:</label>
                                                <input type="number" name="product_quantity" class="form-control" value="1">
                                                <input type="number" name="product_id" class="form-control" value="<?php echo $product_info['product_id'];?>">



                                        </div>
                                        <div class="shopping-cart-buttons">

                                            <input name="submit" type="submit" class="shoping" value="Add to cart"><i class="fa fa-shopping-cart"></i>

                                        </div>
                                        </form>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-border block-form">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills  nav-justified">
                            <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
                            <li><a href="#additional" data-toggle="tab" class="disabled">Additional</a></li>
                            <li><a href="#review" data-toggle="tab">Review</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="description">
                                <br>
                                <h3>Product Details</h3>
                                <hr>
                                <?php echo $product_info['product_long_description'];?>
                            </div>
                            <div class="tab-pane" id="additional">
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3>Sizes</h3>
                                        <hr>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit ollit anim id est laborum.
                                        </p>

                                    </div>
                                    <div class="col-md-4 block-color">
                                        <h3>Colors</h3>
                                        <hr>
                                        <ul class="colors clearfix list-unstyled">
                                            <li><a href="" rel="003d71"></a></li>
                                            <li><a href="" rel="c42c39"></a></li>
                                            <li><a href="" rel="f4bc08"></a></li>
                                            <li><a href="" rel="02882c"></a></li>
                                            <li><a href="" rel="000000"></a></li>
                                            <li><a href="" rel="caccce"></a></li>
                                            <li><a href="" rel="ffffff"></a></li>
                                            <li><a href="" rel="f9e7b6"></a></li>
                                            <li><a href="" rel="ef8a07"></a></li>
                                            <li><a href="" rel="5a433f"></a></li>
                                            <li><a href="" rel="ff9bb5"></a></li>
                                            <li><a href="" rel="8c56a9"></a></li>
                                        </ul>

                                    </div>
                                    <div class="col-md-4">
                                        <h3>Other</h3>
                                        <hr>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit ollit anim id est laborum.
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane" id="review">
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Clients review</h3>
                                        <hr>
                                        <div class="review-header">
                                            <h5>John Smith</h5>
                                            <div class="product-rating">
                                                <div class="stars">
                                                    <span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span>
                                                </div>
                                            </div>
                                            <small class="text-muted">26/06/2014</small>
                                        </div>
                                        <div class="review-body">
                                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                                        </div>
                                        <hr>
                                        <div class="review-header">
                                            <h5>Tom Carry</h5>
                                            <div class="product-rating">
                                                <div class="stars">
                                                    <span class="star"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span>
                                                </div>
                                            </div>
                                            <small class="text-muted">05/07/2014</small>
                                        </div>
                                        <div class="review-body">
                                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                                        </div>
                                        <hr>
                                    </div>
                                </div>
                                <form role="form" method="post" action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputFirstName" class="control-label">First Name:<span class="text-error">*</span></label>
                                                <div>
                                                    <input type="text" class="form-control" id="inputFirstName">
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputCompany" class="control-label">Company:</label>
                                                <div>
                                                    <input type="text" class="form-control" id="inputCompany">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control">    </textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label  class="control-label">Your Rate:</label>
                                                <div class="product-rating">
                                                    <div class="stars">
                                                        <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit"  class="btn-default-1" value="Add Review">
                                </form>

                            </div>

                        </div>



                    </div>



                </div>
                <aside class="col-md-3">
                    <div class="main-category-block ">
                        <div class="main-category-title">
                            <i class="fa fa-list"></i> Category

                        </div>
                        <div class="main-category-items">
                            <div class="widget-block">
                                <ul class="list-unstyled ul-side-category">

                                    <?php

                                    while($cat_item = mysqli_fetch_assoc($query_reuslt)){?>
                                        <li><a href="<?php echo $cat_item['category_id'] ?>"><i class="fa fa-angle-right"></i><?php echo $cat_item['category_title'];?> </a>
                                            <ul class="sub-category">
                                                <?php

                                                $cat_id = $cat_item['category_id'];
                                                $sub_cat_info = $category->selectAllPublishedSubCategory($cat_id);
                                                if($sub_cat_info){

                                                    while($sub_cat_items = mysqli_fetch_assoc($sub_cat_info)){?>


                                                        <li><a href="<?php echo $sub_cat_items['sb_cat_id'] ?>"><?php echo $sub_cat_items['sb_cat_title'];?></a>
                                                            <ul class="sub-category">
                                                                <?php

                                                                $sub_cat_id = $sub_cat_items['sb_cat_id'];
                                                                $child_cat_info= $category->selectAllPublishedChildCategory($sub_cat_id);
                                                                while($child_cat_items = mysqli_fetch_assoc($child_cat_info)){?>
                                                                <li><a href="<?php echo $child_cat_items['child_cat_id'] ?>"><?php echo $child_cat_items['child_cat_title'];?></a>
                                                                    <?php }


                                                                    ?>

                                                            </ul>
                                                        </li>
                                                    <?php  }}?>


                                            </ul>
                                        </li>

                                    <?php }

                                    ?>



                                </ul>

                            </div>
                        </div>
                    </div>




                    <div class="main-category-block ">
                        <div class="main-category-title">
                            <i class="fa fa-list"></i> Brand

                        </div>
                        <div class="main-category-items">
                            <div class="widget-block">
                                <ul class="list-unstyled ul-side-category">

                                    <?php

                                    while($brand_info  = mysqli_fetch_assoc($brand)){?>
                                        <li><a href="<?php echo $brand_info['brand_id'] ?>"><i class="fa fa-angle-right"></i><?php echo $brand_info['brand_name'];?> </a>

                                        </li>

                                    <?php }

                                    ?>



                                </ul>

                            </div>
                        </div>
                    </div>


                    <div class="widget-title">
                        <i class="fa fa-thumbs-up"></i> Bestseller
                    </div>
                    <div class="widget-block">
                        <div class="row">
                            <div class="col-md-4 col-sm-2 col-xs-3">
                                <img class="img-responsive" src="http://placehold.it/400x500.jpg" alt="" title="">
                            </div>
                            <div class="col-md-8  col-sm-10 col-xs-9">
                                <div class="block-name">
                                    <a href="#" class="product-name">Product name</a>
                                    <p class="product-price"><span>$330</span> $320.99</p>

                                </div>
                                <div class="product-rating">
                                    <div class="stars">
                                        <span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span>
                                    </div>
                                    <a href="" class="review hidden-md">8 Reviews</a>
                                </div>
                                <p class="description">Lorem ipsum dolor sit amet, con sec tetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="widget-block">
                        <div class="row">
                            <div class="col-md-4 col-sm-2 col-xs-3">
                                <img class="img-responsive" src="http://placehold.it/400x500" alt="" title="">
                            </div>
                            <div class="col-md-8 col-sm-10 col-xs-9">
                                <div class="block-name">
                                    <a href="#" class="product-name">Product name</a>
                                    <p class="product-price"><span>$330</span> $320.99</p>

                                </div>
                                <div class="product-rating">
                                    <div class="stars">
                                        <span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span>
                                    </div>
                                    <a href="" class="review hidden-md">8 Reviews</a>
                                </div>
                                <p class="description">Lorem ipsum dolor sit amet, con sec tetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>



                    <div class="widget-title">
                        <i class="fa fa-comments"></i> Latest Posts
                    </div>
                    <div class="widget-block">
                        <div class="row">
                            <div class="col-md-4  col-sm-2 col-xs-4">
                                <img class="img-responsive" src="http://placehold.it/400x300" alt="" title="">
                            </div>
                            <div class="col-md-8  col-sm-10 col-xs-8">
                                <div class="block-name">
                                    <a href="#" class="product-name">Summer sale</a>

                                </div>
                                <p class="description">Lorem ipsum dolor sit amet, con sec tetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="widget-block">
                        <div class="row">
                            <div class="col-md-4 col-sm-2 col-xs-4">
                                <img class="img-responsive" src="http://placehold.it/400x300" alt="" title="">
                            </div>
                            <div class="col-md-8 col-sm-10 col-xs-8">
                                <div class="block-name">
                                    <a href="#" class="product-name">Call now</a>

                                </div>
                                <p class="description">Lorem ipsum dolor sit amet, con sec tetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="widget-block">
                        <div class="row">
                            <div class="col-md-4 col-sm-2 col-xs-4">
                                <img class="img-responsive" src="http://placehold.it/400x300" alt="" title="">
                            </div>
                            <div class="col-md-8 col-sm-10 col-xs-8">
                                <div class="block-name">
                                    <a href="#" class="product-name">Good day</a>

                                </div>
                                <p class="description">Lorem ipsum dolor sit amet, con sec tetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>

                    <div class="widget-title">
                        <i class="fa fa-tags"></i> Tags
                    </div>
                    <div class="widget-block">
                        <ul class="list-unstyled tags">
                            <li><a href="#">men</a></li>
                            <li><a href="#">women</a></li>
                            <li><a href="#">top</a></li>
                            <li><a href="#">clothes</a></li>
                            <li><a href="#">sale</a></li>
                            <li><a href="#">short</a></li>
                            <li><a href="#">dresses</a></li>
                            <li><a href="#">skirt</a></li>
                            <li><a href="#">top</a></li>
                        </ul>
                    </div>


                </aside>

            </div>
        </div>
    </div>

</section>
