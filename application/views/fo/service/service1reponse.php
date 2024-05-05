<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <?php  $this->load->view('fo/content/header'); ?>

   
</head>    


<body class="hidden hidden-ball smooth-scroll rounded-borders" data-primary-color="#8c6144">

	
	<main>		
        <!-- Preloader -->
        <?php  $this->load->view('fo/loading'); ?>

        <!--/Preloader -->     
        
        <div class="cd-index cd-main-content">
    
        <!-- Page Content -->
        <div id="clapat-page-content" class="light-content" data-bgcolor="#0c0c0c">
            
            <!-- Header -->
            <?php  $this->load->view('fo/content/menu'); ?>
            
            <!--/Header -->        
            
            
            <!-- Content Scroll -->
            <div id="content-scroll">
                <!-- Main -->
                <div id="main">
                
                     <!-- Row -->
                     <div class="content-row row_padding_top row_padding_bottom light-section change-header-color" data-bgcolor="#eee">
                                
                                <div class="pinned-section">
                                    <div class="scrolling-element left">
                                        <figure class="has-animation">
                                            <a href="" class="image-link"><img src="<?=base_url("assets/images/matching/" . $categorie['image_cat'])?>" alt="Image Title"></a>
                                        </figure>
                                    </div>
                                    
                                    <div class="pinned-element right">
                                        <h1 class="primary-font-title has-mask-fill">
                                            Categorie <?php echo $categorie['nom_categorie'] ?>
                                        </h1>
                                   		<p><span class="has-opacity">
                                            Bravo ! Vous avez décroché votre billet pour devenir un véritable <b> <?php echo $categorie['nom_categorie'] ?> </b>. 
                                            Inscrivez vous et explorez nos formations pour découvrir et développer vos talents extraordinaires et même rencontrer votre prof <b> <?php echo $categorie['nom_prof'] ?></b> 
                                        </span></p>
                                           <div class="button-box text-align-center has-animation fadeout-element">  
                                        <form action="<?=base_url("fo/connexion/inscriptionPage")?>" method="post">           
                                    <div class="clapat-button-wrap parallax-wrap hide-ball">
                                        <div class="clapat-button parallax-element">
                                            <div  class="button-border outline rounded parallax-element-second">
                                                <input type = "submit" class="" value="S'inscrire" style="text-align:center;" />
 
                                                </div>
                                        </div>
                                    </div> 
                                    </form>
                                </div>
                                    </div>
                                    </div>
                                </div>                                
                                
                            </div> 
                            <!--/Row -->
                         
                                                         
                </div>
                <!--/Main --> 
                
                

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

    <?php  $this->load->view('fo/content/footer'); ?>


</body>

</html>