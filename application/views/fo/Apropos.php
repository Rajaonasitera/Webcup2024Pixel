<!DOCTYPE html>
<html lang="en">
<?php include("Header.php"); ?>

<body class="hidden hidden-ball smooth-scroll rounded-borders" data-primary-color="#8c6144">

	
	<main>		
        <!-- Preloader -->
        <?php include("Loading.php"); ?>
        <!--/Preloader -->     
        
        <div class="cd-index cd-main-content">
    
        <!-- Page Content -->
        <div id="clapat-page-content" class="light-content" data-bgcolor="#0c0c0c">
            
            <!-- Header -->
            <?php include("Menu.php"); ?>
            <!--/Header -->
            
            
            
            <!-- Content Scroll -->
            <div id="content-scroll">
            
            
                <!-- Main -->
                <div id="main">
                
                    <!-- Hero Section -->
                    <div id="hero">
                        <div id="hero-styles">
                            <div id="hero-caption" class="content-full-width parallax-scroll-caption text-align-center height-title">
                                <div class="inner">                                    
                                    <h1 class="hero-title caption-timeline primary-font-title"><span>Contact</span></h1>
                                    <div class="hero-subtitle caption-timeline">
                                    	<span>WE ARE A CREATIVE STUDIO, SPECIALIZED IN STRATEGY, BRANDING <br class="destroy"> DESIGN, AND DEVELOPMENT. OUR WORK IS ALWAYS AT THE INTERSECTION <br class="destroy"> OF DESIGN AND TECHNOLOGY.</span>
                                    </div>                                   
                                </div>
                            </div>
                            <div id="hero-footer">
                            	<div class="hero-footer-left">
                                	<div class="button-wrap right scroll-down">
                                        <div class="icon-wrap parallax-wrap">
                                            <div class="button-icon parallax-element">
                                                <i class="fa-solid fa-angle-down"></i>
                                            </div>
                                        </div>
                                        <div class="button-text sticky right"><span data-hover="Scroll to Explore">Scroll to Explore</span></div> 
                                    </div>
                                </div>
                                <div class="hero-footer-right">
                    				<div id="info-text">Featured Projects</div>
                                </div>
                            </div>                                  
                        </div>
                    </div>                      
                    <!--/Hero Section -->  
                         
                    
                    <!-- Main Content -->
                    <div id="main-content">
                        <!-- Main Page Content -->
                        <div id="main-page-content" class="content-max-width">
                        
                        
                            <!-- Row -->
                            <div class="content-row full row_padding_left row_padding_right dark-section" data-bgcolor="#0c0c0c">
                                
                                <div id="map_canvas"></div>
                                
                            </div> 
                            <!--/Row -->
                            
                            
                            <!-- Row -->
                            <div class="content-row row_padding_top row_padding_bottom dark-section text-align-center" data-bgcolor="#0c0c0c">
                                
                                <h2 class="big-title has-mask-fill primary-font-title">Let's Talk</h2>
                                
                                <hr><hr> 
                                
                                <!-- Contact Formular -->
                                <div id="contact-formular">
                                
                                    <div id="message"></div>
                                
                                    <form method="post" action="contact.php" name="contactform" id="contactform">                             
                                        <div class="name-box">        
                                            <input name="name" type="text" id="name" size="30" value="" placeholder="What's Your Name"><label class="input_label"></label>
                                        </div>                                                        
                                        <div class="email-box">
                                            <input name="email" type="text" id="email" size="30" value="" placeholder="Your Email"><label class="input_label"></label>
                                        </div>                            
                                        <div class="message-box">
                                            <textarea name="comments" cols="40" rows="4" id="comments" placeholder="Tell Us About Your Project" ></textarea><label class="input_label slow"></label>
                                        </div>
                                        
                                        <div class="verify-box">                                        
                                            <ul class="verify-sum">
                                                <li>1</li>
                                                <li>+</li>
                                                <li>3</li>
                                                <li>=</li>
                                            </ul>
                                            <input name="verify" type="text" id="verify" size="4" value=""/>
                                            <p class="required"><span>*</span> Captcha Validation</p>
                                        </div>
                                                                     
                                        <div class="button-box">             
                                            <div class="clapat-button-wrap parallax-wrap link">
                                                <div class="clapat-button parallax-element">
                                                    <div class="button-border rounded outline "><input type="submit" class="send_message" id="submit" value="Send Message" /></div>
                                                </div>
                                            </div> 
                                        </div>
                                    </form>                        
                                                            
                                </div>
                                <!--/Contact Formular -->
                            </div> 
                            <!--/Row -->
                            
                            
                            <!-- Row -->
                            <div class="content-row dark-section text-align-center" data-bgcolor="#0c0c0c">
                           
                           		<div class="one_third has-animation"  data-delay="100">
                                    
                                    <div class="box-icon-wrapper block-boxes">
                                        <div class="box-icon">
                                            <i class="fa fa-paper-plane fa-2x" aria-hidden="true"></i>
                                        </div>
                                    	<div class="box-icon-content">
                                            <h6 class="no-margins"><a href="mailto:office@montoya.com" class="link"><span>office@montoya.com</span></a></h6>
                                            <p>Email</p>
                                        </div>
                                    </div> 
                                                           
                                </div>
                                
                                <div class="one_third has-animation"  data-delay="200">
                                    
                                    <div class="box-icon-wrapper block-boxes">
                                        <div class="box-icon">
                                            <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                                        </div>
                                    	<div class="box-icon-content">
                                            <h6 class="no-margins">35 M Str, New York, USA</h6>
                                            <p>Address</p>
                                        </div>
                                    </div>
                                                            
                                </div>
                                
                                <div class=" one_third last has-animation"  data-delay="300">
                                    
                                    <div class="box-icon-wrapper block-boxes">
                                        <div class="box-icon">
                                            <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                                        </div>
                                    	<div class="box-icon-content">
                                            <h6 class="no-margins">0040 (7763) 574-8901</h6>
                                            <p>Phone</p>
                                        </div>
                                    </div>
                                    
                                </div> 
                                                       
                           </div> 
                           <!--/Row -->
                            
                        
                        </div>
                        <!--/Main Page Content -->
                        
                        
                        <!-- Page Navigation --> 
                        <div id="page-nav">
                            <div class="page-nav-wrap">
                                <div class="page-nav-caption content-full-width text-align-center height-title">                                 
                                    <div class="inner">
                                    	<div class="next-hero-subtitle caption-timeline"><span>INTERESTED TO DISCOVER MORE FROM OUR WORKS?</span></div>
                                        <a class="page-title next-ajax-link-page" data-type="page-transition" data-centerline="GO TO" href="index-showcase-grid.html">
                                            <div class="next-hero-title primary-font-title caption-timeline"><span>Projects</span></div>
                                        </a>                                        
                                    </div>               
                                </div>
                            </div>
                        </div>      
                        <!--/Page Navigation -->
                        
                                
                    </div>
                    <!--/Main Content --> 
                
                </div>
                <!--/Main -->
                
                <!-- Footer -->
                <?php include("Foot.php"); ?>
                <!--/Footer -->
            
        
        	</div>
            <!--/Content Scroll -->
            
            
            <div id="app"></div>
            
            
		</div>    
        <!--/Page Content -->
    
		</div>
	</main>
    
    
    
    
    <div class="cd-cover-layer"></div>
    <div id="magic-cursor">
        <div id="ball">
        	<div id="ball-drag-x"></div>
            <div id="ball-drag-y"></div>
        	<div id="ball-loader"></div>
        </div>
    </div>
    <div id="clone-image">
    	<div class="hero-translate"></div>
    </div>
    <div id="rotate-device"></div>
    
    
    <?php include("Footer.php"); ?>



</body>

</html>