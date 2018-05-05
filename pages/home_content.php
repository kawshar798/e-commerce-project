<?php


include "vendor/autoload.php";
use App\classes\Category;

$category = new Category();

$query_reuslt = $category->selectAllPublishedCategory();


?>

<section>
    <div class="home-category color-scheme-2">
        <div class="container">
            <div class="row">
                <?php

                while($cat_item = mysqli_fetch_assoc($query_reuslt)){?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="home-category-block">
                            <div class="home-category-title">
                                <i class="fa fa-male"></i> <a href=""><?php echo $cat_item['category_title'];?></a>
                            </div>
                            <div class="home-category-option">
                                <ul class="list-unstyled home-category-list">
                                    <li><a href=""><i class="fa fa-check"></i>Jeans & Trousers</a></li>
                                    <li><a href=""><i class="fa fa-check"></i>Blouses & Shirts</a></li>
                                    <li><a href=""><i class="fa fa-check"></i>Jacekts & Coats</a></li>
                                    <li><a href=""><i class="fa fa-check"></i>Tops & T-Shirts</a></li>
                                    <li><a href=""><i class="fa fa-check"></i>Short dresses</a></li>
                                    <li><a href=""><i class="fa fa-check"></i>Sandals</a></li>
                                </ul>
                                <img src="http://placehold.it/800x800" class="img-responsive" alt="">
                            </div>
                        </article>

                    </div>

               <?php }

                ?>


            </div>
        </div>
    </div>
</section>

<section>
    <div class="color-scheme-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <article class="banner">
                        <a href="#">
                            <img src="http://placehold.it/900x677" class="img-responsive" alt="">
                        </a>
                    </article>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <article class="banner">
                        <a href="#">
                            <img src="http://placehold.it/900x677" class="img-responsive" alt="">
                        </a>
                    </article>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <article class="banner">
                        <a href="#">
                            <img src="http://placehold.it/900x677" class="img-responsive" alt="">
                        </a>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="block color-scheme-2">
        <div class="container">
            <div class="header-for-light">
                <h1 class="wow fadeInRight animated" data-wow-duration="1s">OUR  <span>Bestseller</span></h1>
                <div class="toolbar-for-light" id="nav-bestseller">
                    <a href="javascript:;" data-role="prev" class="prev"><i class="fa fa-angle-left"></i></a>
                    <a href="javascript:;" data-role="next" class="next"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div id="owl-bestseller"  class="owl-carousel">
                <div class="text-center">
                    <article class="product light">
                        <figure class="figure-hover-overlay">
                            <a href="#"  class="figure-href"></a>
                            <div class="product-new">new</div>
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
                            <div class="product-rating">
                                <div class="stars">
                                    <span class="star"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span>
                                </div>
                                <a href="" class="review">8 Reviews</a>
                            </div>
                            <p class="description">Lorem ipsum dolor sit amet, con sec tetur adipisicing elit, sed do eiusmod</p>
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
                            <div class="product-rating">
                                <div class="stars">
                                    <span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span>
                                </div>
                                <a href="" class="review">8 Reviews</a>
                            </div>
                            <p class="description">Lorem ipsum dolor sit amet, con sec tetur adipisicing elit, sed do eiusmod</p>
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
                            <div class="product-rating">
                                <div class="stars">
                                    <span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span>
                                </div>
                                <a href="" class="review">8 Reviews</a>
                            </div>
                            <p class="description">Lorem ipsum dolor sit amet, con sec tetur adipisicing elit, sed do eiusmod</p>
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
                            <div class="product-rating">
                                <div class="stars">
                                    <span class="star"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span>
                                </div>
                                <a href="" class="review">8 Reviews</a>
                            </div>
                            <p class="description">Lorem ipsum dolor sit amet, con sec tetur adipisicing elit, sed do eiusmod</p>
                        </div>

                    </article>

                </div>
                <div class="text-center">
                    <article class="product light">
                        <figure class="figure-hover-overlay">
                            <a href="#"  class="figure-href"></a>
                            <div class="product-new">new</div>
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
                            <div class="product-rating">
                                <div class="stars">
                                    <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                                </div>
                                <a href="" class="review">8 Reviews</a>
                            </div>
                            <p class="description">Lorem ipsum dolor sit amet, con sec tetur adipisicing elit, sed do eiusmod</p>
                        </div>

                    </article>
                </div>




            </div>
        </div>
    </div>
</section>

<section id="sale-section">
    <div class="block color-scheme-white-90">
        <div class="container">
            <div class="header-for-light  hidden-xs hidden-sm">
                <h1 class="wow fadeInRight animated" data-wow-duration="1s">OUR <span>SPECIAL SELECTION</span></h1>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="title-block light wow fadeInLeft">

                        <h2>Summer sale collection</h2>
                        <h1>Effect</h1>
                        <p>Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla auctor fringilla. </p>
                        <div class="text-center">
                            <div class="toolbar-for-light" id="nav-summer-sale">
                                <a href="javascript:;" data-role="prev" class="prev"><i class="fa fa-angle-left"></i></a>
                                <a href="javascript:;" data-role="next" class="next"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div id="owl-summer-sale"  class="owl-carousel">
                        <div class="text-center">
                            <article class="product light wow fadeInUp">
                                <figure class="figure-hover-overlay">
                                    <a href="#"  class="figure-href"></a>
                                    <div class="product-new">new</div>
                                    <div class="product-sale">11% <br>off</div>
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
                            <article class="product light wow fadeInUp">
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
                            <article class="product light wow fadeInUp">
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
                            <article class="product light wow fadeInUp">
                                <figure class="figure-hover-overlay">
                                    <a href="#"  class="figure-href"></a>
                                    <div class="product-new">new</div>
                                    <div class="product-sale">9% <br>off</div>
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
                            <article class="product light wow fadeInUp">
                                <figure class="figure-hover-overlay">
                                    <a href="#"  class="figure-href"></a>
                                    <div class="product-new">new</div>
                                    <div class="product-sale">12% <br>off</div>
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
    </div>
</section>

<section>
    <div class="block ">
        <div class="container">
            <div class="row">
                <article class="col-md-4">
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
                                    <a href="" class="review">8 Reviews</a>
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
                                    <a href="" class="review">8 Reviews</a>
                                </div>
                                <p class="description">Lorem ipsum dolor sit amet, con sec tetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-md-4">
                    <div class="widget-title">
                        <i class="fa fa-user"></i> Our Store
                    </div>
                    <p>
                        <span class="dropcap">L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <blockquote>
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </blockquote>
                </article>
                <article class="col-md-4">
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
                </article>
            </div>

        </div>
    </div>
</section>
<section class="block-chess-banners">
    <div class="block">
        <div class="container">
            <div class="header-for-dark">
                <h1 class="wow fadeInRight animated" data-wow-duration="2s">New <span>Collections</span></h1>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <article class="block-chess wow fadeInLeft" data-wow-duration="2s">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="#"><img class="img-responsive" src="http://placehold.it/900x677" alt=""></a>

                            </div>
                            <div class="col-md-8">
                                <div class="chess-caption-right">
                                    <a href="#" class="col-name">Modern collection</a>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-3">
                    <article class="block-chess wow fadeInRight" data-wow-duration="2s">
                        <a href="#"><img class="img-responsive" src="http://placehold.it/900x677" alt=""></a>
                    </article>
                </div>
            </div>
            <div class="row">

                <div class="col-md-3">
                    <article class="block-chess wow fadeInLeft" data-wow-duration="2s">
                        <a href="#"><img class="img-responsive" src="http://placehold.it/900x677" alt=""></a>
                    </article>
                </div>
                <div class="col-md-9">
                    <article class="block-chess wow fadeInRight" data-wow-duration="2s">
                        <div class="row">

                            <div class="col-md-8">
                                <div class="chess-caption-left">
                                    <a href="#" class="col-name">Classic collection</a>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <a href="#"><img class="img-responsive" src="http://placehold.it/900x677" alt=""></a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block">
        <div class="container">
            <div class="row">
                <article class="col-md-4">
                    <div class="widget-title">
                        <i class="fa fa-tags"></i> Tags
                    </div>
                    <div class="widget-block">
                        <ul class="list-unstyled tags">
                            <li><a href="#">men</a></li>
                            <li><a href="#">women</a></li>
                            <li><a href="#">clothes</a></li>
                            <li><a href="#">top</a></li>
                            <li><a href="#">sale</a></li>
                            <li><a href="#">dresses</a></li>
                            <li><a href="#">short</a></li>
                            <li><a href="#">skirt</a></li>
                            <li><a href="#">top</a></li>
                            <li><a href="#">bestseller</a></li>
                            <li><a href="#">new</a></li>
                        </ul>
                    </div>
                </article>
                <article class="col-md-4">
                    <div class="widget-title">
                        <i class="fa fa-tasks"></i> Catalog
                    </div>
                    <div class="widget-block">
                        <ul class="list-unstyled catalog">
                            <li><a href="#"><i class="fa fa-male"></i>Clothes for men</a></li>
                            <li><a href="#"><i class="fa fa-female"></i>Dresses for women</a></li>
                            <li><a href="#"><i class="fa fa-child"></i>Shirts for child</a></li>
                        </ul>
                    </div>
                </article>
                <article class="col-md-4">
                    <div class="widget-title">
                        <i class="fa fa-thumbs-up"></i> Services
                    </div>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
                                        Money exchange
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
                                        Packing your request
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
                                        Send as Gift
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolort.
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<section class="partners">
    <div class="block color-scheme-dark-90">
        <div class="container">
            <div class="header-for-dark">
                <h1 class="wow fadeInRight animated" data-wow-duration="2s">Business <span>partners</span></h1>
            </div>
            <div id="owl-partners"  class="owl-carousel">
                <div class="partner">
                    <img src="img/preview/logo1.png" class="img-responsive" alt="">
                </div>
                <div class="partner">
                    <img src="img/preview/logo2.png" class="img-responsive"  alt="">
                </div>
                <div class="partner">
                    <img src="img/preview/logo3.png" class="img-responsive"  alt="">
                </div>
                <div class="partner">
                    <img src="img/preview/logo4.png" class="img-responsive"  alt="">
                </div>
                <div class="partner">
                    <img src="img/preview/logo5.png" class="img-responsive"  alt="">
                </div>
                <div class="partner">
                    <img src="img/preview/logo6.png" class="img-responsive"  alt="">
                </div>
                <div class="partner">
                    <img src="img/preview/logo7.png" class="img-responsive"  alt="">
                </div>
            </div>
        </div>
    </div>
</section>
