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
                
                    <!-- Hero Section -->
                    <div id="hero" class="has-image">
                        <div id="hero-styles">
                            <div id="hero-caption" class="content-full-width height-title">
                                <div class="inner">   
                                    <h1 class="hero-title caption-timeline primary-font-title"><span>Qui suis je?</span></h1>
                                </div>
                            </div>
                            <div id="hero-description" class="content-full-width">
                                <div class="inner">
                                	<p class="bigger has-opacity">Veux-tu découvrir quel super-héros te correspond ? </p>
                                        <p> Laisse-nous t'aider à trouver ta vocation !</p> 
                                        <p>Réponds au questionnaire ci-dessous et nous te révélerons ton alter ego super-héroïque.</p>
                                    <br>
                                                                                                       
                                    <hr> 
                                    <p class="has-animation">[ <a class="link-text" target="_blank" href="https://www.behance.net/gallery/188644629/Yioiy"><span class="link" data-hover="View Website">Accueil</span></a> ]</p>
                                </div>
                            </div>
                            <div id="hero-footer">
                            	<div class="hero-footer-left">                                	
                                    <div class="button-wrap right scroll-down">
                                        <div class="icon-wrap parallax-wrap">
                                            <div class="button-icon parallax-element">
                                                <i class="arrow-icon-down"></i>
                                            </div>
                                        </div>
                                        <div class="button-text sticky right"><span data-hover="FAITES DÉFILER POUR EXPLORER">FAITES DÉFILER POUR EXPLORER</span></div> 
                                    </div>	
                                </div>
                                <div class="hero-footer-right">
                    				<div id="share" class="page-action-content" data-text="Partager :"></div>
                                </div>
                            </div>                                    
                        </div>
                    </div>
                    <div id="hero-image-wrapper">
                    	<div id="hero-background-layer" class="parallax-scroll-image">
                            <div id="hero-bg-image" style="background-image:url(<?=base_url("assets/images/qui.jpg")?>)"></div>
                        </div>
                    </div>                        
                    <!--/Hero Section -->   
                         
                    
                    <!-- Main Content -->
                    <div id="main-content">
                        <div id="main-page-content">
                             <!-- Row -->
                             <div class="content-row full row_padding_top row_padding_left row_padding_right text-align-center dark-section" data-bgcolor="#0c0c0c">
                            
                            	<h2 class="big-title primary-font-title"><span class="has-mask-fill">
DÉCOUVRE TON ALTER EGO SUPER-HÉROÏQUE !</span></h2>
                                <p>PLONGE DANS L'AVENTURE ET RÉPONDS AU QUESTIONNAIRE CI-DESSOUS AVEC SOIN.<br class="destroy"> TA RÉPONSE POURRAIT RÉVÉLER L'IDENTITÉ DU HÉROS QUI SOMMEILLE EN TOI !</p>
                                <hr><hr>
                                
                                
                            
                            </div> 
                            <!--/Row -->

                         <!-- Row -->
                         <div class="content-row row_padding_top row_padding_bottom light-section change-header-color has-clip-path" data-bgcolor="#fff">
                                
                                <hr class="destroy"><hr class="destroy">
                                
								
								<div class="pinned-section">
                                    <div class="pinned-element left">
                                        <h2 class="big-title primary-font-title no-margins"><span class="has-mask-fill">3 questions</span><br><span class="has-mask-fill">heros!</span></h2>
                                    </div>
                                    <!-- ---------------------------- form ---------------------------------- -->
                                    <form method="post" name="" action="<?=base_url("fo/orientationCtrl/reponseOrientation")?>">
                                    <div class="scrolling-element right">

                                    <?php for ($j = 0; $j < count($questions); $j++) { ?>

                                        
                                            <dl class="accordion has-animation">
                                                <dt>
                                                    <span class="link"><div>
                                                        <?php echo $questions[$j]['nom_question'] ?>
                                                    </div></span>
                                                    <div class="acc-icon-wrap parallax-wrap">
                                                        <div class="acc-button-icon parallax-element">
                                                            <i class="fa fa-arrow-right"></i>
                                                        </div>
                                                    </div>
                                                </dt>
                                                
                                                <dd class="accordion-content">
                                                    <?php $responses = $this->Orientation->getReponsesQuestions($questions[$j]['id_question']); ?>
                                                    <?php for ($i = 0; $i < count($responses); $i++) { ?>
                                                        <div style="display: flex; align-items: center; justify-content:space-between; width:100%;">
                                                            <img src="<?=base_url("assets/images/qcm/" . $responses[$i]['image_path'])?>" alt="" style="width:150px; height:150px; margin-right:10px; margin-bottom:10px;">
                                                            <p style="width: 300px;">
                                                                <?php echo $responses[$i]['nom_reponse']; ?>
                                                            </p>
                                                            <label class="custom-checkbox">
                                                                <input name="question<?php echo $j ?>" value="<?php echo $responses[$i]['id_categorie'] ?>" type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>          
                                                        </div>
                                                    <?php } ?>  
                                                </dd>

                                                
                                            </dl>  
                                        <?php } ?>  
                                    </div>
                                </div>
                                <div class="button-box text-align-center has-animation fadeout-element">             
                                    <div class="clapat-button-wrap parallax-wrap hide-ball">
                                        <div class="clapat-button parallax-element">
                                            <div  class="button-border outline rounded parallax-element-second">
                                                <input type = "submit" class="" value="Orientez moi" style="text-align:center;" />
 
                                                </div>
                                        </div>
                                    </div> 
                                </div>
                            </form>
                                    <!-- ---------------------------- /form ---------------------------------- -->

                                
                               <hr class="destroy">
                                <style>
                                    /* Variation of work by @mrhyddenn for Radios */
                                    .custom-checkbox {
                                    display: inline-flex;
                                    align-items: center;
                                    cursor: pointer;
                                    user-select: none;
                                    font-size: 16px;
                                    color: #333;
                                    transition: color 0.3s;
                                    }

                                    .custom-checkbox input[type="checkbox"] {
                                    display: none;
                                    }

                                    .custom-checkbox .checkmark {
                                    width: 24px;
                                    height: 24px;
                                    border: 2px solid #333;
                                    border-radius: 4px;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    margin-right: 10px;
                                    transition: background-color 0.3s, border-color 0.3s, transform 0.3s;
                                    transform-style: preserve-3d;
                                    }

                                    .custom-checkbox .checkmark::before {
                                    content: "\2713";
                                    font-size: 16px;
                                    color: transparent;
                                    transition: color 0.3s, transform 0.3s;
                                    }

                                    .custom-checkbox input[type="checkbox"]:checked + .checkmark {
                                    background-color: #0c0c0c;
                                    border-color: #0c0c0c;
                                    transform: scale(1.1) rotateZ(360deg) rotateY(360deg);
                                    }

                                    .custom-checkbox input[type="checkbox"]:checked + .checkmark::before {
                                    color: #fff;
                                    }

                                    .custom-checkbox:hover {
                                    color: #0c0c0c;
                                    }

                                    .custom-checkbox:hover .checkmark {
                                    border-color: #0c0c0c;
                                    background-color: #f0f0f0;
                                    transform: scale(1.05);
                                    }

                                    .custom-checkbox input[type="checkbox"]:focus + .checkmark {
                                    box-shadow: 0 0 3px 2px rgba(0, 0, 0, 0.2);
                                    outline: none;
                                    }

                                    .custom-checkbox .checkmark,
                                    .custom-checkbox input[type="checkbox"]:checked + .checkmark {
                                    transition: background-color 1.3s, border-color 1.3s, color 1.3s, transform 0.3s;
                                    }


                                </style>
                                <script>
                                    const checkboxes1 = document.querySelectorAll('input[type="checkbox"][name="question1"]');

                                    checkboxes1.forEach(checkbox => {
                                    checkbox.addEventListener('change', function() {
                                        if (this.checked) {
                                        checkboxes1.forEach(cb => {
                                            if (cb !== this) {
                                            cb.checked = false;
                                            }
                                        });
                                        }
                                    });
                                    });
                                    const checkboxes2 = document.querySelectorAll('input[type="checkbox"][name="question2"]');

                                    checkboxes2.forEach(checkbox => {
                                    checkbox.addEventListener('change', function() {
                                        if (this.checked) {
                                        checkboxes2.forEach(cb => {
                                            if (cb !== this) {
                                            cb.checked = false;
                                            }
                                        });
                                        }
                                    });
                                    });
                                    const checkboxes3 = document.querySelectorAll('input[type="checkbox"][name="question3"]');

                                    checkboxes3.forEach(checkbox => {
                                    checkbox.addEventListener('change', function() {
                                        if (this.checked) {
                                        checkboxes3.forEach(cb => {
                                            if (cb !== this) {
                                            cb.checked = false;
                                            }
                                        });
                                        }
                                    });
                                    });
                                </script>
                                
                            </div> 
                            <!--/Row -->
                           
                           
                           

                            
                            
                            
                                                                          
                                
                    </div>
                    <!--/Main Content --> 
                </div>
                <!--/Main --> 
                
                
                <!-- Footer -->
                <?php  $this->load->view('fo/content/foot'); ?>
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