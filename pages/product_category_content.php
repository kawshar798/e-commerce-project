

<?php
/**
 * Created by PhpStorm.
 * User: unknow
 * Date: 5/6/18
 * Time: 11:30 PM
 */
$query_reuslt = $category->selectAllPublishedCategory();
$brand = $brand->showAllPublishedBrand();

if(isset($_GET['category_id'])){
    $product_id = $_GET['category_id'];
    $query_result = $product->showAllPublishedProductBycat($product_id);



}
if(isset($_GET['brand_id'])){
    $brand_id = $_GET['brand_id'];
    $query_result_brand = $product->showAllPublishedProductByBrand_id($brand_id);



}

if (isset($_GET['child_cat_id'])){

    $child_cat_id = $_GET['child_cat_id'];
    $query_result_brand = $product->showAllPublishedProductByChildCat($child_cat_id);
}
?>


<section>
    <div class="second-page-container">
        <div class="container">
            <div class="row">
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
                                        <li><a href="product_category.php?category_id=<?php echo $cat_item['category_id'] ?>"><i class="fa fa-angle-right"></i><?php echo $cat_item['category_title'];?>  </a>
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
                                        <li><a href="product_category.php?brand_id=<?php echo $brand_info['brand_id'] ?>"><i class="fa fa-angle-right"></i><?php echo $brand_info['brand_name'];?> </a>

                                        </li>

                                    <?php }

                                    ?>



                                </ul>

                            </div>
                        </div>
                    </div>


                </aside>


                <div class="col-md-9">
                    <div class="header-with-icon">
                        <i class="fa fa-tags"></i> Products Items <span><?php  ?></span>
                    </div>

                    <div class="row">

                        <?php
                        if(isset($query_result)){
                        while($product_info_cat = mysqli_fetch_assoc($query_result)){?>

                            <div class="col-xs-12 col-sm-6 col-md-4 text-center mb-25">
                                <article class="product light">
                                    <figure class="figure-hover-overlay">
                                        <a href="#"  class="figure-href"></a>
                                        <div class="product-new">new</div>
                                        <div class="product-sale">7% <br> off</div>
                                        <a href="#" class="product-compare"><i class="fa fa-random"></i></a>
                                        <a href="#" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                        <img src="asstes/<?php echo $product_info_cat['product_image_1'];?>" class="img-overlay img-responsive image_size" alt="" >
                                        <img src="asstes/<?php echo $product_info_cat['product_image'];?>" class="img-responsive image_size" alt=""  >
                                    </figure>
                                    <div class="product-caption">
                                        <div class="block-name">
                                            <a href="#" class="product-name"><?php echo $product_info_cat['product_name'];?></a>
                                            <p class="product-price">$<?php echo $product_info_cat['product_price'];?></p>

                                        </div>
                                        <div class="product-cart">
                                            <a href="product_details.php?product_id=<?php echo $product_info_cat['product_id'];?>"><i class="fa fa-shopping-cart"></i> </a>
                                        </div>
                                        <div class="product-rating">
                                            <div class="stars">
                                                <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                                            </div>
                                            <a href="" class="review">8 Reviews</a>
                                        </div>
                                        <p class="description "><?php echo $product_info_cat['product_short_description'];?></p>
                                    </div>

                                </article>
                            </div>

                        <?php }}


                        ?>




                    </div>

                    <div class="row">

                        <?php
                        if(isset($query_result_brand)){


                        while($product_info_cat = mysqli_fetch_assoc($query_result_brand)){?>

                            <div class="col-xs-12 col-sm-6 col-md-4 text-center mb-25">
                                <article class="product light">
                                    <figure class="figure-hover-overlay">
                                        <a href="#"  class="figure-href"></a>
                                        <div class="product-new">new</div>
                                        <div class="product-sale">7% <br> off</div>
                                        <a href="#" class="product-compare"><i class="fa fa-random"></i></a>
                                        <a href="#" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                        <img src="asstes/<?php echo $product_info_cat['product_image_1'];?>" class="img-overlay img-responsive image_size" alt="" >
                                        <img src="asstes/<?php echo $product_info_cat['product_image'];?>" class="img-responsive image_size" alt=""  >
                                    </figure>
                                    <div class="product-caption">
                                        <div class="block-name">
                                            <a href="#" class="product-name"><?php echo $product_info_cat['product_name'];?></a>
                                            <p class="product-price">$<?php echo $product_info_cat['product_price'];?></p>

                                        </div>
                                        <div class="product-cart">
                                            <a href="product_details.php?product_id=<?php echo $product_info_cat['product_id'];?>"><i class="fa fa-shopping-cart"></i> </a>
                                        </div>
                                        <div class="product-rating">
                                            <div class="stars">
                                                <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                                            </div>
                                            <a href="" class="review">8 Reviews</a>
                                        </div>
                                        <p class="description "><?php echo $product_info_cat['product_short_description'];?></p>
                                    </div>

                                </article>
                            </div>

                        <?php }}


                        ?>




                    </div>


                </div>


            </div>
        </div>
    </div>

</section>
