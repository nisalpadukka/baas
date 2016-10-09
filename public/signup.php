<?php include('includes/header.php'); ?>



    <!-- Page Banner -->
    <section class="page-banner" style="background-image:url(images/background/page-banner-bg-2.jpg);">
    	<div class="auto-container text-center">
        	<h1>Sign UP</h1>
            <ul class="bread-crumb"><li><a href="#">Home</a></li> <li>Contact Us</li></ul>
        </div>
    </section>

<!--login form-->
    
<div class="container">
   
    <div id="modal" class="popupContainer" style="display:none;">
        <header class="popupHeader">
            <span class="header_title">Login</span>
            <span class="modal_close"><i class="fa fa-times"></i></span>
        </header>
        
        <section class="popupBody">
        
            <!-- Username & Password Login form -->
            <div class="user_login">
                <form>
                    <label>Email / Phone number</label>
                    <input type="text" />
                    <br />

                    <label>Password</label>
                    <input type="password" />
                    <br />

                    <div class="">
                        <input id="remember" type="checkbox" />
                        <label for="remember">Remember me</label>

                        <a href="#" class="forgot_password">Forgot password?</a>
                    </div>

                    <div class="action_btns">

                    
                        <div class="one_half last"><a href="#" class="btn btn_yellow ">Login</a></div>
                    </div>

                    
                      
                


                </form>



                <div class="social-buttons">

                <a class="btn btn-block btn-social btn-facebook fb-sign-in">
                 <span class="fa fa-facebook"></span> Sign in with Facebook
                </a>

                 <a class="btn btn-block btn-social btn-google google-sign-in">
                 <span class="fa fa-google-plus"></span>Sign in with Google
                </a>

                </div>


            </div>
        </section>
    </div>
</div>

<!--end of login form-->
   
    <!--Contact Us Area-->
    <section class="contact-us-area">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                 <!--Contact Form-->
            	<div class="col-md-offset-3 col-md-6 col-sm-6 col-xs-12 contact-form wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <hr>

                    <div class="col-md-7 col-sm-12 col-xs-12">

                    <form id="signup1" method="post" action="" onsubmit="return validateSignUP()">
                        <div class="field-container clearfix">
                        	
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            	<input type="text" name="fname" value="" placeholder="First Name">
                            </div>
                            
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            	<input type="text" name="lname" value="" placeholder="Last Name">
                            </div>
                            
                            <div class="clearfix"></div>
                            
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            	<input type="text" name="email-moblile" value="" placeholder="Mobile number or email address">
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <input type="text" name="password" value="" placeholder="Password">
                            </div>

                             <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <input type="text" name="confpassword" value="" placeholder="Confirm Password">
                            </div>
                           
                            
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            	<button type="submit" name="submit-form" class="primary-btn hvr-bounce-to-left" >

                                <span class="btn-text">Sign UP</span> <strong class="icon"><span class="f-icon flaticon-login12"></span></strong></button>
                            </div>
                            
                        </div>
                    </form>



                    </div>

                    <div class="col-md-5 col-sm-12 col-xs-12">


                        <div class="social-buttons-sign-up">

                            <a class="btn btn-block btn-social btn-facebook">
                             <span class="fa fa-facebook"></span> Sign up with Facebook
                            </a>

                            <a class="btn btn-block btn-social btn-google">
                             <span class="fa fa-google-plus"></span>Sign up with Google
                            </a>
                        </div>
    
                    </div>



                </div>

                
              
            
            </div>
        </div>
    </section>
    
    <!--Client Logos-->
    <section class="client-logo wow fadeIn" data-wow-delay="300ms" data-wow-duration="1000ms">
    	<div class="auto-container">
        	<div class="slider-container">
            	
                <ul class="slider">
                	<li><a href="#"><img src="images/clients/1.png" alt="" title=""></a></li>
                    <li><a href="#"><img src="images/clients/2.png" alt="" title=""></a></li>
                    <li><a href="#"><img src="images/clients/3.png" alt="" title=""></a></li>
                    <li><a href="#"><img src="images/clients/4.png" alt="" title=""></a></li>
                    <li><a href="#"><img src="images/clients/1.png" alt="" title=""></a></li>
                    <li><a href="#"><img src="images/clients/2.png" alt="" title=""></a></li>
                    <li><a href="#"><img src="images/clients/3.png" alt="" title=""></a></li>
                    <li><a href="#"><img src="images/clients/4.png" alt="" title=""></a></li>
                </ul>
                
            </div>
        </div>
    </section>
    
 
    
<?php include('includes/footer.php'); ?>