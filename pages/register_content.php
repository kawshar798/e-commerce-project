<?php
/**
 * Created by PhpStorm.
 * User: unknow
 * Date: 5/12/18
 * Time: 10:39 AM
 */

if (isset($_POST['submit'])){

    $msg =  $customer->save_customer_info($_POST);
}


?>

<section>
    <div class="second-page-container">
        <div class="block">
            <div class="container">
                <div class="header-for-light">
                  <h3>  <?php if(isset($msg)){

                          echo $msg;
                      }?></h3>
                    <h1 class="wow fadeInRight animated" data-wow-duration="1s">Create new <span>Account</span></h1>
                </div>
                <div class="row">
                    <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="block-form box-border wow fadeInLeft animated" data-wow-duration="1s">
                            <h3><i class="fa fa-user"></i>Personal Information</h3>
                            <hr>
                            <form class="form-horizontal" role="form" method="post" action="#">
                                <div class="form-group">
                                    <label for="inputFirstName" class="col-sm-3 control-label">First Name:<span class="text-error">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="first_name" id="inputFirstName">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputLastName" class="col-sm-3 control-label">Last Name:<span class="text-error">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="last_name" id="inputLastName">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEMail" class="col-sm-3 control-label">E-Mail:<span class="text-error">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="email_address" id="inputEMail">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPhone" class="col-sm-3 control-label">Phone:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="phone_number" id="inputPhone">
                                    </div>
                                </div>
                                <h3><i class="fa fa-truck"></i>Delivery Information</h3>
                                <hr>


                                <div class="form-group">
                                    <label for="inputAdress" class="col-sm-3 control-label">Address:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputAdress2" name="address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPostCode" class="col-sm-3 control-label">Post Code: <span class="text-error">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPostCode" name="zip_code">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCity" class="col-sm-3 control-label">Disctic: <span class="text-error">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputCity" name="district">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPostCode" class="col-sm-3 control-label">City: <span class="text-error">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPostCode" name="city">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Contury: <span class="text-error">*</span></label>
                                    <div class="col-sm-9">
                                        <select  class="form-control" name="country">
                                            <option value="#">-All countries-</option>
                                            <option value="bangladesh">Bangladesh</option>
                                            <option value="indea">Indea</option>
                                        </select>
                                    </div>
                                </div>

                                <h3><i class="fa fa-lock"></i>Password</h3>
                                <hr>
                                <div class="form-group">
                                    <label for="inputPassword1" class="col-sm-3 control-label">Password: <span class="text-error">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" class="form-control" id="inputPassword1">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" name="submit" class="btn-default-1">Register</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </article>
                    <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                        <div class="block-form box-border wow fadeInRight animated" data-wow-duration="1s">
                            <h3><i class="fa fa-check"></i>Conditions</h3>
                            <hr>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <blockquote>
                                <p>
                                    <abbr title="HyperText Markup Language Curabitur pretium tincidunt lacus. Nulla gravida orci a odio." class="initialism">HTML</abbr>
                                    Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
                                </p>
                            </blockquote>
                            <p>
                                Fusce convallis, mauris imperdiet gravida bibendum, nisl turpis suscipit mauris, sed placerat ipsum urna sed risus. In convallis tellus a mauris. Curabitur non elit ut libero tristique sodales. Mauris a lacus. Donec mattis semper leo. In hac habitasse platea dictumst. Vivamus facilisis diam at odio. Mauris dictum, nisi eget consequat elementum, lacus ligula molestie metus, non feugiat orci magna ac sem. Donec turpis. Donec vitae metus. Morbi tristique neque eu mauris. Quisque gravida ipsum non sapien. Proin turpis lacus, scelerisque vitae, elementum at, lobortis ac, quam. Aliquam dictum eleifend risus. In hac habitasse platea dictumst. Etiam sit amet diam. Suspendisse odio. Suspendisse nunc. In semper bibendum libero.
                            </p>
                            <p>
                                Proin nonummy, lacus eget pulvinar lacinia, pede felis dignissim leo, vitae tristique magna lacus sit amet eros. Nullam ornare. Praesent odio ligula, dapibus sed, tincidunt eget, dictum ac, nibh. Nam quis lacus. Nunc eleifend molestie velit. Morbi lobortis quam eu velit. Donec euismod vestibulum massa. Donec non lectus. Aliquam commodo lacus sit amet nulla. Cras dignissim elit et augue. Nullam non diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Aenean vestibulum. Sed lobortis elit quis lectus. Nunc sed lacus at augue bibendum dapibus.
                            </p>


                            <a href="#" class="btn-default-1">Read more</a>
                        </div>
                        <div class="block-form box-border wow fadeInRight animated" data-wow-duration="1s">
                            <h3><i class="fa fa-bookmark-o"></i>Checkout as Guest</h3>
                            <hr>
                            <p>Checkout as a guest instead!</p>

                            <a href="#" class="btn-default-1">As Guest</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

