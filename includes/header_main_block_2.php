<?php
/**
 * Created by PhpStorm.
 * User: unknow
 * Date: 5/4/18
 * Time: 5:10 PM */

$query_reuslt = $category->selectAllPublishedCategory();
?>
<div class="header-main-block2">
                <nav class="navbar yamm  navbar-main" role="navigation">

                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                            <a href="index.php" class="navbar-brand"><i class="fa fa-home"></i></a>
                        </div>
                        <div id="navbar-collapse-1" class="navbar-collapse collapse ">
                            <ul class="nav navbar-nav">
                                <!-- Classic list -->
                                <li ><a href="index.php">Home</i></a>

                                </li>

                                <!-- With content -->
                                    <?php

                                    while($cat_info = mysqli_fetch_assoc($query_reuslt)){?>


                                        <li class="dropdown yamm-fw"><a href="<?php $cat_info['category_id']; ?>" data-toggle="dropdown" class="dropdown-toggle"><?php echo $cat_info['category_title'];?> <i class="fa fa-caret-right fa-rotate-45"></i></a>
                                            <ul class="dropdown-menu list-unstyled  fadeInUp animated">
                                                <li>
                                                    <div class="yamm-content">
                                                        <div class="row">

                                                            <?php
                                                            $cat_id = $cat_info['category_id'];

                                                            $sub_cat_res = $category->selectAllPublishedSubCategory($cat_id);

                                                            while ($sub_cat_info = mysqli_fetch_assoc($sub_cat_res)){?>
                                                            <div class="col-md-3">
                                                                <div class="header-menu">
                                                                    <h4><?php echo $sub_cat_info['sb_cat_title'];?></h4>
                                                                </div>

                                                                            <?php
                                                                           $_SESSION['sb_cat_title'] = $sub_cat_info['sb_cat_title'];
                                                                                $sub_cat_id = $sub_cat_info['sb_cat_id'];

                                                                               $child_cat_result =  $category->selectAllPublishedChildCategory($sub_cat_id);
                                                                            while ($child_cat_info=mysqli_fetch_assoc($child_cat_result)){?>
                                                                                <ul class="list-unstyled">

                                                                                    <li><a href="product_category.php?child_cat_id=<?php echo $child_cat_info['child_cat_id'];?>"><?php echo $child_cat_info['child_cat_title'];?></a></li>

                                                                                </ul>

                                                                            <?php }

                                                                            ?>




                                                            </div>
                                                            <?php }?>

                                                        </div>

                                                    </div>
                                                </li>
                                            </ul>
                                        </li>


                                   <?php }


                                    ?>




                                <li><a href="shortcode.html">Shortcode</a></li>
                            </ul>



                        </div>
                    </div>
                </nav>
            </div>