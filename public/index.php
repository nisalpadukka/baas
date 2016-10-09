<?php include('includes/header.php'); ?>

    <!--searchbar-->

    <section  class="search-bar">
        <div class="auto-container">
              
            <div class="row clearfix">
                
                <div class="col-md-2 col-md-offset-2 col-sm-6 col-xs-6">


                		<div class="ui-buttons has-expanded">
								<a class="searchbar-button is-secondary" href="#"><span class="glyphicon glyphicon-map-marker"></span> Select Location</a>
						</div>
                  
                </div>
                

                <div class="col-md-2 col-sm-6 col-xs-6">
                	
                		<div class="ui-buttons has-expanded">
								<a class="searchbar-button is-secondary" href="#"><span class="glyphicon glyphicon-tags"></span> Select Catagory</a>
						</div>
                    
                           
               
                </div>
                

                <div class="col-md-4 col-sm-12 col-xs-12">

                
                			<form method="GET" class="ui-form is-inline">

                				
                
                				<input id="query" name="query" type="text" class="ui-input" placeholder="What are you searching for?" value=""/>


                				<button type="button" class="searchbar-button-icon">
                                    	<span class="glyphicon glyphicon-search"></span> Search
                                </button>
                            
	                			
							</form>

                </div>

            </div>
        </div>
	</section>
    
   



    
    <!--Our Projects-->

    <!--section class="our-projects">
        <div class="auto-container">
            
            <div class="sec-title wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                <h2>Find <span>service providers</span></h2>
            </div>
           
        </div>
    </section-->

    


            <!--Filters Nav-->

	<section class="our-projects">
		<div class="auto-container">
            <ul class="filter-tabs clearfix anim-3-all">
                <li class="filter" data-role="button" data-filter="all"><span class="btn-txt">All</span></li>
                <li class="filter" data-role="button" data-filter="buildings"><span class="btn-txt">Buildings</span></li>
                <li class="filter" data-role="button" data-filter="hospital"><span class="btn-txt">Hospital</span></li>
                <li class="filter" data-role="button" data-filter="school"><span class="btn-txt">school</span></li>
                <li class="filter" data-role="button" data-filter="isolation"><span class="btn-txt">Isolation</span></li>
                <li class="filter" data-role="button" data-filter="mall"><span class="btn-txt">Mall</span></li>
                <li class="filter" data-role="button" data-filter="others"><span class="btn-txt">Others</span></li>
            </ul>
        </div>
        
        <!--Projects Container-->
        <div class="projects-container filter-list clearfix">
            
            <article class="project-box mix mix_all mall architecture">
                <figure class="image"><img src="images/resource/proj-image-1.jpg" alt=""><a href="images/resource/proj-image-1.jpg" class="lightbox-image zoom-icon"></a></figure>
                <div class="text-content">
                    <div class="text">
                        <span class="cat">Isolation</span>
                        <h4>Roof isolation</h4>
                    </div>
                </div>
            </article>
            
            <article class="project-box mix mix_all school other buildings">
                <figure class="image"><img src="images/resource/proj-image-2.jpg" alt=""><a href="images/resource/proj-image-2.jpg" class="lightbox-image zoom-icon"></a></figure>
                <div class="text-content">
                    <div class="text">
                        <span class="cat">Buildings</span>
                        <h4>Make concept</h4>
                    </div>
                </div>
            </article>
            
            <article class="project-box mix mix_all isolation architecture">
                <figure class="image"><img src="images/resource/proj-image-3.jpg" alt=""><a href="images/resource/proj-image-3.jpg" class="lightbox-image zoom-icon"></a></figure>
                <div class="text-content">
                    <div class="text">
                        <span class="cat">School</span>
                        <h4>Roof isolation</h4>
                    </div>
                </div>
            </article>
            
            <article class="project-box mix mix_all buildings hospital others">
                <figure class="image"><img src="images/resource/proj-image-4.jpg" alt=""><a href="images/resource/proj-image-4.jpg" class="lightbox-image zoom-icon"></a></figure>
                <div class="text-content">
                    <div class="text">
                        <span class="cat">Other</span>
                        <h4>Make concept</h4>
                    </div>
                </div>
            </article>
            
            <article class="project-box mix mix_all buildings architecture">
                <figure class="image"><img src="images/resource/proj-image-5.jpg" alt=""><a href="images/resource/proj-image-5.jpg" class="lightbox-image zoom-icon"></a></figure>
                <div class="text-content">
                    <div class="text">
                        <span class="cat">Mall</span>
                        <h4>Roof isolation</h4>
                    </div>
                </div>
            </article>
            
            <article class="project-box mix mix_all school mall isolation buildings">
                <figure class="image"><img src="images/resource/proj-image-6.jpg" alt=""><a href="images/resource/proj-image-6.jpg" class="lightbox-image zoom-icon"></a></figure>
                <div class="text-content">
                    <div class="text">
                        <span class="cat">Other</span>
                        <h4>Make concept</h4>
                    </div>
                </div>
            </article>
            
            <article class="project-box mix mix_all mall architecture others">
                <figure class="image"><img src="images/resource/proj-image-1.jpg" alt=""><a href="images/resource/proj-image-1.jpg" class="lightbox-image zoom-icon"></a></figure>
                <div class="text-content">
                    <div class="text">
                        <span class="cat">Architecture</span>
                        <h4>Roof isolation</h4>
                    </div>
                </div>
            </article>
            
            <article class="project-box mix mix_all mall isolation hospital buildings architecture others">
                <figure class="image"><img src="images/resource/proj-image-7.jpg" alt=""><a href="images/resource/proj-image-7.jpg" class="lightbox-image zoom-icon"></a></figure>
                <div class="text-content">
                    <div class="text">
                        <span class="cat">Others</span>
                        <h4>Make concept</h4>
                    </div>
                </div>
            </article>
            
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

                <a class="btn btn-block btn-social btn-facebook">
                 <span class="fa fa-facebook"></span> Sign in with Facebook
                </a>

                 <a class="btn btn-block btn-social btn-google">
                 <span class="fa fa-google-plus"></span>Sign in with Google
                </a>

                </div>


            </div>
        </section>
    </div>
</div>

<!--end of login form-->

    
    
<!--Top Services-->
    <section class="top-services">
        <div class="auto-container">
            
            <div class="sec-title wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                <h2>Welcome to <span>baas.lk</span></h2>
            </div>
                
            <div class="sec-text wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
                <p> As the Sri Lankan construction industry has developed immensely in last few years, there is a high demand for Contractors, Builders, Architectures, Designers, Real Estate Companies, Material suppliers, Technicians, and consultancy services in the local community. This is an one stop solution for the Sri Lankan public to meet, connect and communicate with the service providers in construction Industry and to fulfill their informational needs about construction industry effectively and efficiently.</p>
            </div>
            
            <div class="row clearfix">
                
                <!--Post-->
                <article class="col-md-4 col-sm-6 col-xs-12 post wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
                	<div class="post-inner">
                    
                        <figure class="image">
                            <img class="img-responsive" src="images/resource/post-image-1.jpg" alt="" />
                            <span class="curve"></span>
                        </figure>
                        <div class="content">
                            <div class="inner-box">
                                <h3>Find Service Providers</h3>
                                <div class="text">There are many variations of  the passages of Lorem . . .</div>
                                <a href="#" class="read_more">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </article>
                
                <!--Post-->
                <article class="col-md-4 col-sm-6 col-xs-12 post wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                	<div class="post-inner">
                    
                        <figure class="image">
                            <img class="img-responsive" src="images/resource/post-image-2.jpg" alt="" />
                            <span class="curve"></span>
                        </figure>
                        <div class="content">
                            <div class="inner-box">
                                <h3>PUBLISH YOURSELF</h3>
                                <div class="text">There are many variations of  the passages of Lorem . . .</div>
                                <a href="#" class="read_more">READ MORE</a>
                            </div>
                        </div>
                        
                    </div>
                </article>
                
                <!--Post-->
                <article class="col-md-4 col-sm-12 col-xs-12 post wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
                	<div class="post-inner">
                    
                        <figure class="image">
                            <img class="img-responsive" src="images/resource/post-image-3.jpg" alt="" />
                            <span class="curve"></span>
                        </figure>
                        <div class="content">
                            <div class="inner-box">
                                <h3>KNOWLEDGE HUB</h3>
                                <div class="text">There are many variations of  the passages of Lorem . . .</div>
                                <a href="#" class="read_more">READ MORE</a>
                            </div>
                        </div>
                        
                    </div>
                </article>
                
            </div>
        </div>
	</section>
    
    <!--Facts Counter-->
    <section class="fact-counter fact-counter-one" style="background-image:url(images/parallax/image-1.jpg);">
    	<div class="inner clearfix">
        	
            <!--Column-->
        	<div class="column one odd wow fadeIn" data-wow-delay="0s" data-wow-duration="100ms">
            	<div class="content">
                	<div class="count-text" data-speed="1000" data-stop="98"></div>
                    <span>Memebers</span>
                </div>
            </div>
            
            <!--Column-->
            <div class="column one even wow fadeIn" data-wow-delay="0s" data-wow-duration="100ms">
            	<div class="content">
                	<div class="count-text" data-speed="1000" data-stop="241"></div>
                    <span>Users</span>
                </div>
            </div>
            
            <!--Column-->
            <div class="column one odd wow fadeIn" data-wow-delay="0s" data-wow-duration="100ms">
            	<div class="content">
                	<div class="count-text" data-speed="2000" data-stop="258"></div>
                    <span>Members</span>
                </div>
            </div>
            
            <!--Column-->
            <div class="column one even wow fadeIn" data-wow-delay="0s" data-wow-duration="100ms">
            	<div class="content">
                	<div class="count-text" data-speed="1000" data-stop="36"></div>
                    <span>Feedbacks</span>
                </div>
            </div>
            
        </div>
    </section>

     <!--News Area-->
    <section class="news-area">
    	<div class="auto-container">
        	
            <div class="sec-title wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                <h2>Latest <span>JOBS</span></h2>
            </div>
                
            <div class="sec-text wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in<br>some form, by injected humour, or randomised words which don't look even slightly believable</p>
            </div>
            
            <!--News Slider-->
            <div class="news-slider">
            
            	<!--Slide Item-->
                <article class="slide-item">
                	<figure class="image"><img src="images/resource/news-image-1.jpg" alt=""></figure>
                    <div class="content-box">
                    	<div class="text-content">
                        	<h3><a href="#">BLOG HEADLINE HERE</a></h3>
                            <div class="info">By <em><a href="#">Admin</a></em> at Feb 14, 2015</div>
                            <div class="text">There are many variations of passages of Lorem Ipsum available . . .</div>
                            <div class="link-btn"><a class="primary-btn hvr-bounce-to-left"><span class="btn-text">LEARN MORE</span> <strong class="icon"><span class="f-icon flaticon-right11"></span></strong></a></div>
                        </div>
                    </div>
                </article>
                
                <!--Slide Item-->
                <article class="slide-item">
                	<figure class="image"><img src="images/resource/news-image-2.jpg" alt=""></figure>
                    <div class="content-box">
                    	<div class="text-content">
                        	<h3><a href="#">BLOG HEADLINE HERE</a></h3>
                            <div class="info">By <em><a href="#">Admin</a></em> at Feb 14, 2015</div>
                            <div class="text">There are many variations of passages of Lorem Ipsum available . . .</div>
                            <div class="link-btn"><a class="primary-btn hvr-bounce-to-left"><span class="btn-text">LEARN MORE</span> <strong class="icon"><span class="f-icon flaticon-right11"></span></strong></a></div>
                        </div>
                    </div>
                </article>
                
                <!--Slide Item-->
                <article class="slide-item">
                	<figure class="image"><img src="images/resource/news-image-1.jpg" alt=""></figure>
                    <div class="content-box">
                    	<div class="text-content">
                        	<h3><a href="#">BLOG HEADLINE HERE</a></h3>
                            <div class="info">By <em><a href="#">Admin</a></em> at Feb 14, 2015</div>
                            <div class="text">There are many variations of passages of Lorem Ipsum available . . .</div>
                            <div class="link-btn"><a class="primary-btn hvr-bounce-to-left"><span class="btn-text">LEARN MORE</span> <strong class="icon"><span class="f-icon flaticon-right11"></span></strong></a></div>
                        </div>
                    </div>
                </article>
                
                <!--Slide Item-->
                <article class="slide-item">
                	<figure class="image"><img src="images/resource/news-image-2.jpg" alt=""></figure>
                    <div class="content-box">
                    	<div class="text-content">
                        	<h3><a href="#">BLOG HEADLINE HERE</a></h3>
                            <div class="info">By <em><a href="#">Admin</a></em> at Feb 14, 2015</div>
                            <div class="text">There are many variations of passages of Lorem Ipsum available . . .</div>
                            <div class="link-btn"><a class="primary-btn hvr-bounce-to-left"><span class="btn-text">LEARN MORE</span> <strong class="icon"><span class="f-icon flaticon-right11"></span></strong></a></div>
                        </div>
                    </div>
                </article>
                
            </div>
            
        </div>
    </section>
    
    
    <!--We Are Best-->
    <section class="we-are-best">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <div class="col-md-6 col-sm-6 col-xs-12 image-side">
                	<figure class="image"><img class="img-responsive" src="images/resource/about-us-image-1.jpg" alt="" title=""></figure>
                </div>
                
                <div class="col-md-6 col-sm-6 col-xs-12 text-side">
                	<h2 class="wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">The Best <span>Company</span> Ever!!</h2>
                    <div class="text wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                    	<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                    <div class="link-btn wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms"><a class="primary-btn light hvr-bounce-to-left" href="contact-us.html"><span class="btn-text">SIGN UP</span> <strong class="icon"><span class="f-icon flaticon-login12"></span></strong></a></div>
                </div>
                
            </div>
        </div>
    </section>
    

    
    <!--Our Team-->
    <section class="our-team-area">
        <div class="auto-container">
            
            <div class="sec-title wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                <h2>Top <span>profiles</span></h2>
            </div>
                
            <div class="sec-text wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in<br>some form, by injected humour, or randomised words which don't look even slightly believable</p>
            </div>
            
            <div class="row clearfix">
            
                <article class="col-md-4 col-sm-6 col-xs-12 team-member">
                    <figure class="image"><img src="images/resource/team-image-1.png" alt=""></figure>
                    <div class="content-box wow rotateInUpRight" data-wow-delay="0ms" data-wow-duration="700ms">
                    	<div class="inner hvr-bounce-to-bottom">
                            <div class="text-content">
                                <h4>MASUM RANA</h4>
                                <div class="info">
                                    <p>Architecture</p>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum </p>
                            </div>
                            <div class="social-links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
                
                <article class="col-md-4 col-sm-6 col-xs-12 team-member">
                    <figure class="image"><img src="images/resource/team-image-2.png" alt=""></figure>
                    <div class="content-box wow rotateInUpRight" data-wow-delay="300ms" data-wow-duration="700ms">
                    	<div class="inner hvr-bounce-to-bottom">
                            <div class="text-content">
                                <h4>RASHED KABIR</h4>
                                <div class="info">
                                    <p>Engineer</p>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum </p>
                            </div>
                            <div class="social-links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
                
                <article class="col-md-4 col-sm-12 col-xs-12 team-member">
                    <figure class="image"><img src="images/resource/team-image-3.png" alt=""></figure>
                    <div class="content-box wow rotateInUpRight" data-wow-delay="600ms" data-wow-duration="700ms">
                    	<div class="inner hvr-bounce-to-bottom">
                            <div class="text-content">
                                <h4>MAHFUZ RIAD</h4>
                                <div class="info">
                                    <p>Electrician</p>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum </p>
                            </div>
                            <div class="social-links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
                
            </div>
        </div>
    </section>
    
    <!--Testimonials-->
    <section class="testimonials-area" style="background-image:url(images/parallax/image-1.jpg);">
    	<div class="auto-container clearfix">
        	<h2 class="wow tada" data-wow-delay="0ms" data-wow-duration="1500ms">TESTI<span>MONIALS</span></h2>
            <div class="icon-quote"><span class="fa fa-quote-left"></span></div>
        	<!--Slider-->
            <ul class="slider">
        		<li class="slide-item">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</li>
                <li class="slide-item">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</li>
                <li class="slide-item">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</li>
            </ul>
            
            <!--Custom-Pager-->
            <div class="custom-pager clearfix">
            	
            	<a href="#" class="pager-item active" data-slide-index="0">
                	<span class="testi-thumb"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt="" title=""></span>
                    <strong>Jhone Doe</strong>MD/Apple
                </a>
                <a href="#" class="pager-item" data-slide-index="1">
                	<span class="testi-thumb"><img class="img-circle" src="images/resource/testi-thumb-2.jpg" alt="" title=""></span>
                    <strong>Grey White</strong>CEO/Google Inc
                </a>
                <a href="#" class="pager-item" data-slide-index="2">
                	<span class="testi-thumb"><img class="img-circle" src="images/resource/testi-thumb-3.jpg" alt="" title=""></span>
                    <strong>White More</strong>PM/Amazon
                </a>
                
            </div>
            
        </div>
        
    </section>
    

<?php include('includes/client-logos.php'); ?>
<?php include('includes/footer.php'); ?>