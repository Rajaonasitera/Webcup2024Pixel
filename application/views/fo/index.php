<!DOCTYPE html>
<html lang="en">
<?php include("content/header.php"); 
session_start();
$id = "null";
if(isset($_SESSION['user_id'])){
    $id = $_SESSION['user_id'];
}
?>


<body class="hidden hidden-ball smooth-scroll1 rounded-borders" data-primary-color="#8c6144">

	
	<main>		
        <!-- Preloader -->
        <?php include("loading.php"); ?>
       
        <!--/Preloader -->     
        
        <div class="cd-index cd-main-content">
    
        <!-- Page Content -->
        <div id="clapat-page-content" class="light-content" data-bgcolor="#0c0c0c">
            
            <!-- Header -->
           <?php include("content/menu.php"); ?>
            
                
            <!-- Content Scroll -->
            <div id="content-scroll">
            
            
                <!-- Main -->
                <div id="main">

                    <!-- Hero Section -->
                    <div id="hero"  class="has-image autoscroll1">
                        <div id="hero-styles">
                            <div id="hero-caption" class="content-full-width parallax-scroll-caption text-align-center height-title">
                                <div class="inner">                                    
                                    <h1 class="hero-title caption-timeline primary-font-title"><span>knowhere</span></h1>
                                    <div class="hero-subtitle caption-timeline">
                                    	<span>

DEVENEZ UN HÉROS !  <?php echo $id ?>
Knowhere, L'ACADÉMIE DES SUPER-HÉROS VOUS OUVRE SES PORTES !<br class="destroy">MAÎTRISEZ VOS POUVOIRS, DÉVELOPPEZ VOS COMPÉTENCES ET SAUVEZ LE MONDE !<br class="destroy">REJOIGNEZ-NOUS ET RÉVÉLEZ VOTRE POTENTIEL !</span>
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
                                        <div class="button-text sticky right"><span data-hover="Faites défiler pour explorer">FAITES DÉFILER POUR EXPLORER</span></div> 
                                    </div>
                                </div>
                                <div class="hero-footer-right">
                    				<div id="info-text">FORMATION DE SUPERHÉROS</div>
                                </div>
                            </div>                                  
                        </div>
                    </div>           
                    <div id="hero-image-wrapper">
                    	<div id="hero-background-layer" class="parallax-scroll-image">
                            <div id="hero-bg-image" style="background-image:url(<?=base_url("assets/images/knowhere_back.jpg")?>)"></div>
                        </div>
                    </div>                     
                    <!--/Hero Section -->
                    
                    
                    <!-- Main Content -->
                    <div id="main-content">
                        <!-- Main Page Content -->
                        <div id="main-page-content" class="content-full-width">                            
                            <hr>
                            <hr>
                        <script src="https://cdn.jsdelivr.net/gh/cnumr/ecoindex_badge@3/assets/js/ecoindex-badge.js" defer></script>  
<div id="ecoindex-badge" ></div>
                            <!-- SERVICE ROW -->
                            <div class="content-row text-align-center dark-section" data-bgcolor="#0c0c0c">
                                
                                
                                <div class="move-thumbs-wrapper">
                                
                                    <div class="start-thumbs-caption">
                                        <h2 class="primary-font-title big-title has-mask-fill">SPÉCIALISATIONS SURHUMAINES</h2>
                                        <p> NOTRE PROGRAMME COMPLET VOUS PRÉPARE À DEVENIR LE DÉFENSEUR ULTIME DE LA JUSTICE ET DU BIEN-ÊTRE DE L'HUMANITÉ.</p>
                                    </div>
                                
                                    
                                            
                                    <div class="start-thumbs-wrapper">
                                    
                                        <div class="start-move-thumb" data-start="top 120%" data-stop="600%">
                                            <div class="move-thumb-inner">                                                    
                                                <div class="section-image">
                                                    <img src="<?=base_url("assets/images/categorie/categorie1.png")?>" class="item-image" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="start-move-thumb" data-start="top 90%" data-stop="1100%">
                                            <div class="move-thumb-inner">                                                    
                                                <div class="section-image">
                                                    <img src="<?=base_url("assets/images/categorie/categorie2.png")?>" class="item-image" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="start-move-thumb" data-start="top 90%" data-stop="400%">
                                            <div class="move-thumb-inner">                                                    
                                                <div class="section-image">
                                                    <img src="<?=base_url("assets/images/categorie/categorie3.png")?>" class="item-image" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="start-move-thumb" data-start="top 120%" data-stop="600%">
                                            <div class="move-thumb-inner">                                                    
                                                <div class="section-image">
                                                    <img src="<?=base_url("assets/images/categorie/categorie4.png")?>" class="item-image" alt="">
                                                </div>
                                            </div>
                                        </div>                                        
                                        
                                        <div class="start-move-thumb" data-start="top 100%" data-stop="750%">
                                            <div class="move-thumb-inner">                                                    
                                                <div class="section-image">
                                                    <img src="<?=base_url("assets/images/categorie/categorie5.png")?>" class="item-image" alt="">
                                                </div>
                                            </div>
                                        </div>
                                                                                
                                        <div class="start-move-thumb" data-start="top 40%" data-stop="300%">
                                            <div class="move-thumb-inner">                                                    
                                                <div class="section-image">
                                                    <img src="<?=base_url("assets/images/categorie/categorie6.png")?>" class="item-image" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    
                                    </div>
                                    
                                    
                                    <div class="end-thumbs-wrapper">
                                        <div class="end-move-thumb"></div>
                                        <div class="end-move-thumb"></div>
                                        <div class="end-move-thumb"></div>
                                        <div class="end-move-thumb"></div>
                                        <div class="end-move-thumb"></div>
                                        <div class="end-move-thumb"></div>
                                    </div>
                                    
                                </div>
                                
                                
                            </div> 
                            <!--/Row -->

                            <!-- Row -->
                            <div class="content-row full text-align-center row_padding_left row_padding_right dark-section" data-bgcolor="#0c0c0c">
                            <hr>
                            <div class="start-thumbs-caption">
                                    <h2 class="primary-font-title big-title has-mask-fill">EXPLOREZ LA FORMATION SUPERHÉROÏQUE</h2>
                                
                                <p>
                                    <span class="has-opacity"> NOUS SOMMES FIERS DE VOUS PRÉSENTER UNE GAMME COMPLÈTE DE SERVICES CONÇUS POUR VOUS</span>
                                    <br class="destroy">
                                    <span class="has-opacity">PRÉPARER À DEVENIR LE PROCHAIN DÉFENSEUR DE LA JUSTICE ET DU BIEN-ÊTRE DE L'HUMANITÉ.</span>
                                </p>
                                                                
                                <div class="button-box text-align-center has-animation fadeout-element">             
                                    <div class="clapat-button-wrap parallax-wrap hide-ball">
                                        <div class="clapat-button parallax-element">
                                            <div class="button-border outline rounded parallax-element-second">
                                                <a class="" href="<?php echo base_url("fo/connexion") ?>">
                                                    <span data-hover="Connexion">Connexion</span>
                                                    </a>
                                                </div>
                                        </div>
                                    </div> 
                                </div>
                                </div>
                                <hr>
                                
                                <div id="itemsWrapperLinks">                               
                                    <div id="itemsWrapper" class="webgl-fitthumbs fx-one"> 
                                
                                        <div class="overlapping-gallery">
                                        
                                            <div class="overlapping-image">
                                                <div class="overlapping-image-inner trigger-item" data-centerLine="VOIR">                                                    
                                                    <div class="img-mask">
                                                        <a class="slide-link" data-type="page-transition" href="<?=site_url("fo/fonctionnalite/f1")?>"></a>
                                                        <div class="section-image trigger-item-link">
                                                            <img src="<?=base_url("assets/images/qui.jpg")?>" class="item-image grid__item-img" alt="">
                                                        </div>                                                
                                                        <img src="<?=base_url("assets/images/qui.jpg")?>" class="grid__item-img grid__item-img--large" alt="">                              
                                                    </div>
                                                    <div class="slide-caption trigger-item-link-secondary">
                                                        <div class="slide-title primary-font-title"><span>Qui suis je?</span></div>
                                                        <div class="slide-date"><span>01</span></div>
                                                        <div class="slide-cat"><span>Service</span></div>                                           
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="overlapping-image">
                                                <div class="overlapping-image-inner trigger-item" data-centerLine="VOIR">                                                    
                                                    <div class="img-mask">
                                                        <a class="slide-link" data-type="page-transition" href="<?=site_url("fo/fonctionnalite/f2")?>"></a>
                                                        <div class="section-image trigger-item-link">
                                                            <img src="<?=base_url("assets/images/formation.jpg")?>" class="item-image grid__item-img" alt="">
                                                        </div>                                                
                                                        <img src="<?=base_url("assets/images/formation.jpg")?>" class="grid__item-img grid__item-img--large" alt="">                              
                                                    </div>
                                                    <div class="slide-caption trigger-item-link-secondary">
                                                        <div class="slide-title primary-font-title"><span>Formation</span></div>                                                    
                                                        <div class="slide-date"><span>02</span></div>
                                                        <div class="slide-cat"><span>Service</span></div>                                      
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="overlapping-image">
                                                <div class="overlapping-image-inner trigger-item" data-centerLine="VOIR">                                                    
                                                    <div class="img-mask">
                                                        <a class="slide-link" data-type="page-transition" href="<?=site_url("fo/fonctionnalite/f3")?>"></a>
                                                        <div class="section-image trigger-item-link">
                                                            <img src="<?=base_url("assets/images/progress.jpg")?>" class="item-image grid__item-img" alt="">
                                                        </div>                                                
                                                        <img src="<?=base_url("assets/images/progress.jpg")?>" class="grid__item-img grid__item-img--large" alt="">                              
                                                    </div>
                                                    <div class="slide-caption trigger-item-link-secondary">
                                                        <div class="slide-title primary-font-title"><span>Mon evolution</span></div>                                                    
                                                        <div class="slide-date"><span>03</span></div>
                                                        <div class="slide-cat"><span>Service</span></div>                                           
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- <div class="overlapping-image">
                                                <div class="overlapping-image-inner trigger-item change-header" data-centerLine="OPEN">                                                    
                                                    <div class="img-mask">
                                                        <a class="slide-link" data-type="page-transition" href="project04.html"></a>
                                                        <div class="section-image trigger-item-link">
                                                            <img src="images/04hero.jpg" class="item-image grid__item-img" alt="">
                                                            <div class="hero-video-wrapper">
                                                                <video loop muted class="bgvid">
                                                                    <source src="images/04hero.mp4" type="video/mp4">
                                                                </video>
                                                            </div>
                                                        </div>                                                
                                                        <img src="images/04hero.jpg" class="grid__item-img grid__item-img--large" alt="">                              
                                                    </div>
                                                    <div class="slide-caption trigger-item-link-secondary">
                                                        <div class="slide-title primary-font-title"><span>Cool Dude</span></div>
                                                        <div class="slide-date"><span>2024</span></div>
                                                        <div class="slide-cat"><span>Video Production</span></div>                                         
                                                    </div>
                                                </div>
                                            </div> -->
                                            
                                            
                                            
                                        </div>
                                        
                                    </div> 
                                </div>
                                
                                
                                    
                                
                            </div> 
                            <!--/Row -->
                            <hr><hr>
                            <hr><hr>

                             <!-- Row -->
                             <div class="content-row full row_padding_bottom dark-section text-align-center" data-bgcolor="#0c0c0c">
                                
                             <h2 class="primary-font-title big-title has-mask-fill">COMMUNAUTE DES HEROS</h2>
                                <p>DÉCOUVREZ CE QUE NOTRE COMMUNAUTÉ DE HÉROS EN HERBE A À DIRE SUR LEUR EXPÉRIENCE AVEC NOTRE PROGRAMME DE FORMATION. 
                
                                    <br>REJOIGNEZ-NOUS ET FAITES PARTIE DE CETTE COMMUNAUTÉ ENGAGÉE QUI ŒUVRE ENSEMBLE POUR RENDRE LE MONDE MEILLEUR.</p>
                                
                                <hr>
                                
                                <div class="clapat-slider-wrapper content-slider small-looped-carousel has-animation disabled-slider-dots autocenter dark-cursor">
        							<div class="clapat-slider">
                                        <div class="clapat-slider-viewport">
                                            <div class="clapat-slide"><div class="slide-img"><img src="<?=base_url("assets/images/commentaire/commentaires-01.png")?>"></div></div>
                                            <div class="clapat-slide"><div class="slide-img"><img src="<?=base_url("assets/images/commentaire/commentaires-02.png")?>" ></div></div>
                                            <div class="clapat-slide"><div class="slide-img"><img src="<?=base_url("assets/images/commentaire/commentaires-03.png")?>" ></div></div>
                                            <div class="clapat-slide"><div class="slide-img"><img src="<?=base_url("assets/images/commentaire/commentaires-04.png")?>" ></div></div>
                                        </div>
                                    </div>
                                    
                                    <div class="clapat-controls">
                                        <div class="clapat-button-next slider-button-next"></div>
                                        <div class="clapat-button-prev slider-button-prev"></div>
                                        <div class="clapat-pagination"></div>
                                    </div>
                                </div>
                                
                            </div> 
                            <!--/Row -->
                            
                                
                           
                        </div>
                        <!--/Main Page Content -->
                        
                                
                    </div>
                    <!--/Main Content --> 
                
                </div>
                <!--/Main -->
                
                <!-- Footer -->
                <?php include("content/foot.php"); ?>
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
    
    
    <?php include("content/footer.php"); ?>
   

</body>

</html>