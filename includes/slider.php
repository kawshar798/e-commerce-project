<?php
/**
 * Created by PhpStorm.
 * User: unknow
 * Date: 5/4/18
 * Time: 5:15 PM
 */
require_once "vendor/autoload.php";
use App\classes\Slider;

$slider = new Slider();
$slider_info = $slider->showAllPublishedSlider();
?>



<section>
    <div class="revolution-container">
        <div class="revolution">
            <ul class="list-unstyled">	<!-- SLIDE  -->

                <?php

                    while ($slider_item = mysqli_fetch_assoc($slider_info)){?>

                        <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                    <!-- MAIN IMAGE -->
                    <img src="assets/<?php echo $slider_item['slide_image']; ?>"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->
                    <div class="tp-caption skewfromrightshort customout"
                         data-x="20"
                         data-y="160"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="300"
                         data-easing="Power4.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="on"
                         style="z-index: 4">
                      <H2 class="slider_title"><?php echo $slider_item['slider_title']; ?></H2>
                    </div>

                    <div class="tp-caption customin customout hidden-xs"
                         data-x="20"
                         data-y="430"
                         data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="1000"
                         data-easing="Power4.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="on"
                         style="z-index: 2">
                        <a href="#" class="btn-home">Shop All</a>
                    </div>
                    <div class="tp-caption customin customout hidden-xs"
                         data-x="145"
                         data-y="430"
                         data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="1200"
                         data-easing="Power4.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="on"
                         style="z-index: 2">
                        <a href="#" class="btn-home">Read more</a>
                    </div>
                </li>
                  <?php  }


                ?>




            </ul>
            <div class="revolutiontimer"></div>
        </div>
    </div>
</section>