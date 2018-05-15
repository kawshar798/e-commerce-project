<?php


$query_reuslt = $category->selectAllPublishedCategory();
$brand = $brand->showAllPublishedBrand();
$latest_product = $product->show_latest_product();

$men_pro_details = $product->selectProductBymen();
$women_pro_info = $product->selectProductBywomen();



?>
<?php include "includes/slider.php"?>
<section>
    <div>
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


                </aside>



                <div class="col-md-9">

                    <div class="banner">
                        <a href="#">
                            <img src="http://placehold.it/1200x230" class="img-responsive" alt="">
                        </a>
                    </div>
                    <div class="header-with-icon">
                        <i class="fa fa-tags"></i> Latest Product
                        <div class="toolbar-for-light" id="nav-summer-sale">
                            <a href="javascript:;" data-role="prev" class="prev"><i class="fa fa-angle-left"></i></a>
                            <a href="javascript:;" data-role="next" class="next"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div id="owl-summer-sale"  class="owl-carousel">
                        <?php
                        while($product_info = mysqli_fetch_assoc($latest_product)){?>


                            <div class="text-center">
                                <article class="product light wow fadeInUp">
                                    <figure class="figure-hover-overlay">
                                        <a href="#"  class="figure-href"></a>
                                        <a href="product_details.php?product_id=<?php echo $product_info['product_id'];?>" class="product-compare"><i class="fa fa-random"></i></a>
                                        <a href="#" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                        <img src="assets/<?php echo $product_info['product_image_1'];?>" class="img-overlay img-responsive image_size" alt="<?php echo $product_info['product_name'];?>">
                                        <img src="assets/<?php echo $product_info['product_image'];?>" alt="<?php echo $product_info['product_name'];?>" class="image_size">
                                    </figure>
                                    <div class="product-caption">
                                        <div class="block-name">
                                            <a href="product_details.php?product_id=<?php echo $product_info['product_id'];?>" class="product-name"><?php echo $product_info['product_name'];?></a>
                                            <p class="product-price">$<?php echo $product_info['product_price'];?></p>

                                        </div>
                                        <div class="product-cart">
                                            <a href="product_details.php?product_id=<?php echo $product_info['product_id'];?>"><i class="fa fa-shopping-cart"></i> </a>
                                        </div>
                                    </div>

                                </article>
                            </div>


                       <?php  }

                        ?>


                    </div>

                    <div class="header-with-icon">
                        <i class="fa fa-male"></i> Man
                        <div class="toolbar-for-light" id="nav-child">
                            <a href="javascript:;" data-role="prev" class="prev"><i class="fa fa-angle-left"></i></a>
                            <a href="javascript:;" data-role="next" class="next"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div id="owl-child"  class="owl-carousel">

                            <?php


                            while($product_info=mysqli_fetch_assoc($men_pro_details)){?>
                                <div class="text-center">
                                <article class="product light wow fadeInUp">
                                    <figure class="figure-hover-overlay">
                                        <a href="#"  class="figure-href"></a>
                                        <a href="product_details.php?product_id=<?php echo $product_info['product_id'];?>" class="product-compare"><i class="fa fa-random"></i></a>
                                        <a href="#" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                        <img src="assets/<?php echo $product_info['product_image_1'];?>" class="img-overlay img-responsive image_size" alt="<?php echo $product_info['product_name'];?>">
                                        <img src="assets/<?php echo $product_info['product_image'];?>" alt="<?php echo $product_info['product_name'];?>" class="image_size">
                                    </figure>
                                    <div class="product-caption">
                                        <div class="block-name">
                                            <a href="product_details.php?product_id=<?php echo $product_info['product_id'];?>" class="product-name"><?php echo $product_info['product_name'];?></a>
                                            <p class="product-price">$<?php echo $product_info['product_price'];?></p>

                                        </div>
                                        <div class="product-cart">
                                            <a href="product_details.php?product_id=<?php echo $product_info['product_id'];?>"><i class="fa fa-shopping-cart"></i> </a>
                                        </div>
                                    </div>

                                </article>
                        </div>




                            <?php }


                            ?>
                    </div>


                    <div class="block-product-tab">
                        <div class="tab-bg"></div>
                        <div class="toolbar-for-light" id="nav-tabs2">
                            <a href="javascript:;" data-role="prev" class="prev"><i class="fa fa-angle-left"></i></a>
                            <a href="javascript:;" data-role="next" class="next"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#new" data-toggle="tab">New Arrivals</a><div class="header-bottom-line"></div></li>
                            <li><a href="#featured" data-toggle="tab" class="disabled">Featured</a><div class="header-bottom-line"></div></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active animated fadeIn" id="new">
                                <div id="owl-new2"  class="owl-carousel">
                                    <div class="text-center">
                                        <div class="product light">
                                            <figure class="figure-hover-overlay">
                                                <a href="#"  class="figure-href"></a>
                                                <div class="product-sale">11% <br> off</div>
                                                <a href="#" class="product-compare"><i class="fa fa-random"></i></a>
                                                <a href="#" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                                <img src="http://placehold.it/400x500" class="img-overlay img-responsive" alt="">
                                                <img src="http://placehold.it/400x500" class="img-responsive" alt="">
                                            </figure>
                                            <div class="product-caption">
                                                <div class="block-name">
                                                    <a href="#" class="product-name">Product name</a>
                                                    <p class="product-price"><span>$330</span> $320.99</p>

                                                </div>
                                                <div class="product-cart">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i> </a>
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <article class="product light">
                                            <figure class="figure-hover-overlay">
                                                <a href="#"  class="figure-href"></a>
                                                <a href="#" class="product-compare"><i class="fa fa-random"></i></a>
                                                <a href="#" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                                <img src="http://placehold.it/400x500" class="img-overlay img-responsive" alt="">
                                                <img src="http://placehold.it/400x500" class="img-responsive" alt="">

                                            </figure>
                                            <div class="product-caption">
                                                <div class="block-name">
                                                    <a href="#" class="product-name">Product name</a>
                                                    <p class="product-price"><span>$330</span> $320.99</p>

                                                </div>
                                                <div class="product-cart">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i> </a>
                                                </div>
                                            </div>

                                        </article>
                                    </div>
                                    <div class="text-center">
                                        <article class="product light">
                                            <figure class="figure-hover-overlay">
                                                <a href="#"  class="figure-href"></a>
                                                <div class="product-new">new</div>
                                                <a href="#" class="product-compare"><i class="fa fa-random"></i></a>
                                                <a href="#" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                                <img src="http://placehold.it/400x500" class="img-overlay img-responsive" alt="">
                                                <img src="http://placehold.it/400x500" class="img-responsive" alt="">

                                            </figure>
                                            <div class="product-caption">
                                                <div class="block-name">
                                                    <a href="#" class="product-name">Product name</a>
                                                    <p class="product-price"><span>$330</span> $320.99</p>

                                                </div>
                                                <div class="product-cart">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i> </a>
                                                </div>
                                            </div>

                                        </article>
                                    </div>
                                    <div class="text-center">
                                        <article class="product light">
                                            <figure class="figure-hover-overlay">
                                                <a href="#"  class="figure-href"></a>
                                                <div class="product-sale">17% <br> off</div>
                                                <a href="#" class="product-compare"><i class="fa fa-random"></i></a>
                                                <a href="#" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                                <img src="http://placehold.it/400x500" class="img-overlay img-responsive" alt="">
                                                <img src="http://placehold.it/400x500" class="img-responsive" alt="">
                                            </figure>
                                            <div class="product-caption">
                                                <div class="block-name">
                                                    <a href="#" class="product-name">Product name</a>
                                                    <p class="product-price"><span>$330</span> $320.99</p>

                                                </div>
                                                <div class="product-cart">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i> </a>
                                                </div>
                                            </div>

                                        </article>

                                    </div>
                                    <div class="text-center">
                                        <article class="product light">
                                            <figure class="figure-hover-overlay">
                                                <a href="#"  class="figure-href"></a>
                                                <div class="product-new">new</div>
                                                <a href="#" class="product-compare"><i class="fa fa-random"></i></a>
                                                <a href="#" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                                <img src="http://placehold.it/400x500" class="img-overlay img-responsive" alt="">
                                                <img src="http://placehold.it/400x500" class="img-responsive" alt="">
                                            </figure>
                                            <div class="product-caption">
                                                <div class="block-name">
                                                    <a href="#" class="product-name">Product name</a>
                                                    <p class="product-price"><span>$330</span> $320.99</p>

                                                </div>
                                                <div class="product-cart">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i> </a>
                                                </div>
                                            </div>

                                        </article>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane animated fadeIn" id="featured">
                                <div id="owl-featured2"  class="owl-carousel">

                                    <div class="text-center">
                                        <article class="product light">
                                            <figure class="figure-hover-overlay">
                                                <a href="#"  class="figure-href"></a>
                                                <div class="product-new">new</div>
                                                <a href="#" class="product-compare"><i class="fa fa-random"></i></a>
                                                <a href="#" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                                <img src="http://placehold.it/400x500" class="img-overlay img-responsive" alt="">
                                                <img src="http://placehold.it/400x500" class="img-responsive" alt="">

                                            </figure>
                                            <div class="product-caption">
                                                <div class="block-name">
                                                    <a href="#" class="product-name">Product name</a>
                                                    <p class="product-price"><span>$330</span> $320.99</p>

                                                </div>
                                                <div class="product-cart">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i> </a>
                                                </div>
                                            </div>

                                        </article>
                                    </div>
                                    <div class="text-center">
                                        <article class="product light">
                                            <figure class="figure-hover-overlay">
                                                <a href="#"  class="figure-href"></a>
                                                <div class="product-sale">17% <br> off</div>
                                                <a href="#" class="product-compare"><i class="fa fa-random"></i></a>
                                                <a href="#" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                                <img src="http://placehold.it/400x500" class="img-overlay img-responsive" alt="">
                                                <img src="http://placehold.it/400x500" class="img-responsive" alt="">
                                            </figure>
                                            <div class="product-caption">
                                                <div class="block-name">
                                                    <a href="#" class="product-name">Product name</a>
                                                    <p class="product-price"><span>$330</span> $320.99</p>

                                                </div>
                                                <div class="product-cart">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i> </a>
                                                </div>
                                            </div>

                                        </article>

                                    </div>
                                    <div class="text-center">
                                        <article class="product light">
                                            <figure class="figure-hover-overlay">
                                                <a href="#"  class="figure-href"></a>
                                                <div class="product-new">new</div>
                                                <a href="#" class="product-compare"><i class="fa fa-random"></i></a>
                                                <a href="#" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                                <img src="http://placehold.it/400x500" class="img-overlay img-responsive" alt="">
                                                <img src="http://placehold.it/400x500" class="img-responsive" alt="">

                                            </figure>
                                            <div class="product-caption">
                                                <div class="block-name">
                                                    <a href="#" class="product-name">Product name</a>
                                                    <p class="product-price"><span>$330</span> $320.99</p>

                                                </div>
                                                <div class="product-cart">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i> </a>
                                                </div>
                                            </div>

                                        </article>
                                    </div>
                                    <div class="text-center">
                                        <article class="product light">
                                            <figure class="figure-hover-overlay">
                                                <a href="#"  class="figure-href"></a>
                                                <a href="#" class="product-compare"><i class="fa fa-random"></i></a>
                                                <a href="#" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                                <img src="http://placehold.it/400x500" class="img-overlay img-responsive" alt="">
                                                <img src="http://placehold.it/400x500" class="img-responsive" alt="">
                                            </figure>
                                            <div class="product-caption">
                                                <div class="block-name">
                                                    <a href="#" class="product-name">Product name</a>
                                                    <p class="product-price"><span>$330</span> $320.99</p>

                                                </div>
                                                <div class="product-cart">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i> </a>
                                                </div>
                                            </div>

                                        </article>
                                    </div>

                                    <div class="text-center">
                                        <article class="product light">
                                            <figure class="figure-hover-overlay">
                                                <a href="#"  class="figure-href"></a>
                                                <div class="product-sale">7% <br> off</div>
                                                <a href="#" class="product-compare"><i class="fa fa-random"></i></a>
                                                <a href="#" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                                <img src="http://placehold.it/400x500" class="img-overlay img-responsive" alt="">
                                                <img src="http://placehold.it/400x500" class="img-responsive" alt="">
                                            </figure>
                                            <div class="product-caption">
                                                <div class="block-name">
                                                    <a href="#" class="product-name">Product name</a>
                                                    <p class="product-price"><span>$330</span> $320.99</p>

                                                </div>
                                                <div class="product-cart">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i> </a>
                                                </div>
                                            </div>

                                        </article>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>




                    <div class="row">
                        <div class="col-md-6">
                            <article class="banner">
                                <a href="#">
                                    <img src="http://placehold.it/800x400" class="img-responsive" alt="">
                                </a>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="banner">
                                <a href="#">
                                    <img src="http://placehold.it/800x400" class="img-responsive" alt="">
                                </a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
