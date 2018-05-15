<?php
/**
 * Created by PhpStorm.
 * User: unknow
 * Date: 5/6/18
 * Time: 11:30 PM
 */
$query_reuslt = $category->selectAllPublishedCategory();
$proudct_info = $product->show_all_published_product();
?>

<section>
            <div class="second-page-container">
                <div class="container">
                    <div class="row">

                        <div class="col-md-9">
                            <div class="block-breadcrumb">
                                <ul class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Pages</a></li>
                                    <li class="active">Products grid</li>
                                </ul>
                            </div>

                            <div class="header-for-light">
                                <h1 class="wow fadeInRight animated" data-wow-duration="1s">Short <span>dresses</span></h1>

                            </div>
                            <div class="block-products-modes color-scheme-2">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <div class="product-view-mode">
                                            <a href="products-grid.html" class="active"><i class="fa fa-th-large"></i></a>
                                            <a href="products-list.html"><i class="fa fa-th-list"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                        <div class="row">
                                            <div class="col-md-3 col-md-offset-1">
                                                <label class="pull-right">Sort by</label>
                                            </div>
                                            <div class="col-md-5">
                                                <select name="sort-type" class="form-control">
                                                    <option value="position:asc">--</option>
                                                    <option value="price:asc"  selected="selected">Price: Lowest first</option>
                                                    <option value="price:desc">Price: Highest first</option>
                                                    <option value="name:asc">Product Name: A to Z</option>
                                                    <option value="name:desc">Product Name: Z to A</option>
                                                    <option value="quantity:desc">In stock</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <select name="products-per-page" class="form-control">
                                                    <option value="10" selected="selected">10</option>
                                                    <option value="20">20</option>
                                                    <option value="30">30</option>
                                                    <option value="100">100</option>
                                                    <option value="all">All</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <?php
                                    while($product_items = mysqli_fetch_assoc($proudct_info)){?>

                                        <div class="col-xs-12 col-sm-6 col-md-4 text-center mb-25">
                                            <article class="product light">
                                                <figure class="figure-hover-overlay">
                                                    <a href="#"  class="figure-href"></a>
                                                    <div class="product-new">new</div>
                                                    <div class="product-sale">7% <br> off</div>
                                                    <a href="#" class="product-compare"><i class="fa fa-random"></i></a>
                                                    <a href="#" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <img src="asstes/<?php echo $product_items['product_image_1'];?>" class="img-overlay img-responsive image_size" alt="" >
                                                    <img src="asstes/<?php echo $product_items['product_image'];?>" class="img-responsive image_size" alt=""  >
                                                </figure>
                                                <div class="product-caption">
                                                    <div class="block-name">
                                                        <a href="#" class="product-name"><?php echo $product_items['product_name'];?></a>
                                                        <p class="product-price">$<?php echo $product_items['product_price'];?></p>

                                                    </div>
                                                    <div class="product-cart">
                                                        <a href="product_details.php?product_id=<?php echo $product_items['product_id'];?>"><i class="fa fa-shopping-cart"></i> </a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="stars">
                                                            <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                                                        </div>
                                                        <a href="" class="review">8 Reviews</a>
                                                    </div>
                                                    <p class="description "><?php echo $product_items['product_short_description'];?></p>
                                                </div>

                                            </article>
                                        </div>

                                    <?php }


                                ?>




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




                            <article class="product light last-sale">
                                <figure class="figure-hover-overlay">
                                    <a href="#"  class="figure-href"></a>
                                    <div class="product-sale">Save <br> 17%</div>
                                    <div class="product-sale-time"><p class="time"></p></div>
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
