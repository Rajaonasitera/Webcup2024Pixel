<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <?php  $this->load->view('fo/content/header'); ?>
    <link href="<?=base_url("assets/myjs/bootstrap.min.css")?>" rel="stylesheet" />
   
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
                                    <h1 class="hero-title caption-timeline primary-font-title"><span>Formation</span></h1>
                                </div>
                            </div>
                            <div id="hero-description" class="content-full-width">
                                <div class="inner">
                                	<p class="bigger has-opacity">Découvrez la formation complète offerte par Knowhere.</p>
                                        <p> À la fin de votre parcours, recevez un certificat atpresenceant de vos compétences acquises.</p> 
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
                            <div id="hero-bg-image" style="background-image:url(<?=base_url("assets/images/formation.jpg")?>)"></div>
                        </div>
                    </div>                        
                    <!--/Hero Section -->   
                         
                    
                    <!-- Main Content -->
                    <div id="main-content">
                        <div id="main-page-content">
                            
                        <!-- Row -->
                        <div class="content-row row_padding_top dark-section change-header-color text-align-center" data-bgcolor="#0c0c0c">
                            
                            
                            
                            <h1 class="primary-font-title has-mask-fill">OPTIONS</h1>
                                <p>
                                    <span class="has-opacity">DÉCOUVREZ NOS OPTIONS FLEXIBLES D'APPRENTISSAGE, QUE CE SOIT EN DISTANCIEL OU EN PRÉSENTIEL. </span>
                                    <br class="destroy">
                                    <span class="has-opacity">CHOISISSEZ LE FORMAT QUI VOUS CONVIENT LE MIEUX POUR ATTEINDRE VOS OBJECTIFS DE FORMATION.</span>
                                </p>
                                
                            <hr><hr>
                            
                        </div> 
                        <!--/Row -->
                         <!-- Row -->
                         <div class="content-row row_padding_top row_padding_bottom dark-section change-header-color" data-bgcolor="#0c0c0c">                                
                                
                                <div class="pinned-section">
                                    <div class="pinned-element left">
                                        <h1 class="primary-font-title has-mask-fill">PRESENTIEL</h1>
                                   		<p>
                                            <span class="has-opacity">
                                                OPTEZ POUR NOTRE FORMATION EN PRÉSENTIEL ACCOMPAGNÉE D'UN HERO COACH DÉDIÉ POUR UN APPRENTISSAGE PERSONNALISÉ ET INSPIRANT.
                                            </span>
                                        </p>
                                        <?php 
                                            $dataPresentiel = $this -> Pack -> getDetailPack($services[1]['id_pack']);
                                        ?>
                                        <ul>
                                            <?php foreach($dataPresentiel as $service){ ?>
                                                <li>
                                                    <<?php echo $service['balise'] ?>>
                                                        <?php echo $service['nom_service'] ?>
                                                    </<?php echo $service['balise'] ?>>
                                                </li>
                                            <?php } ?>
                                            <li> <?php echo $services[1]['descri'] ?></li>
                                        </ul>
                                        <h1 class="primary-font-title has-mask-fill">
                                            Prix: <?php echo $services[1]['pu'] ?> Vibranium
                                        </h1>
                                        <div class="button-border outline rounded parallax-element-second">
                                            <a data-bs-toggle="modal" data-bs-target="#presence">
                                                <span data-hover="Connexion">S'abonner</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                   
                                    
                                    <div class="scrolling-element right">
                                        <figure class="has-animation">
                                            <a href="<?=base_url("assets/images/option/knowhere.jpg")?>" class="image-link">
                                                <img src="<?=base_url("assets/images/option/knowhere.jpg")?>" alt="Image Title"></a>
                                        </figure>
                                    </div>
                                </div>
                                
                            </div> 
                            <!--/Row -->

                             <!-- FORMATION A DISTANCE -->
                             <div class="content-row row_padding_top row_padding_bottom dark-section change-header-color" data-bgcolor="#0c0c0c">
                                
                                <div class="pinned-section">
                                    <div class="scrolling-element left">
                                        <figure class="has-animation">
                                            <a href="images/projects/green01.jpg" class="image-link"><img src="<?=base_url("assets/images/option/online.jpg")?>" alt="Image Title"></a>
                                        </figure>
                                    </div>
                                    
                                    <div class="pinned-element right">
                                        <h1 class="primary-font-title has-mask-fill">DISTANCIEL</h1>
                                   		<p><span class="has-opacity">POUR LES HABITANTS D'AUTRES PLANÈTES, NOTRE OPTION DE FORMATION À DISTANCE LEUR PERMET D'ACCÉDER À NOTRE PROGRAMME OÙ QU'ILS SE TROUVENT DANS L'UNIVERS.</span></p>
                                           <?php 
                                            $dataPresentiel = $this -> Pack -> getDetailPack($services[0]['id_pack']);
                                        ?>
                                        <ul>
                                            <?php foreach($dataPresentiel as $service){ ?>
                                                <li>
                                                    <<?php echo $service['balise'] ?>>
                                                        <?php echo $service['nom_service'] ?>
                                                    </<?php echo $service['balise'] ?>>
                                                </li>
                                            <?php } ?>
                                            <li> <?php echo $services[0]['descri'] ?></li>
                                        </ul>
                                        <h1 class="primary-font-title has-mask-fill">
                                            Prix: <?php echo $services[1]['pu'] ?> Vibranium
                                        </h1>
                                        <div class="button-border outline rounded parallax-element-second">
                                            <a data-bs-toggle="modal" data-bs-target="#distance">
                                                <span data-hover="Connexion">S'abonner</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>                                
                                
                            </div> 
                            <!--/Row -->

              
                    </div>
                    <!--/Main Content --> 
                </div>
                <!--/Main --> 
                <style>
                    .modal-window {
                    position: fixed;
                    background-color: rgba(255, 255, 255, 0.25);
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                    z-index: 999;
                    visibility: hidden;
                    opacity: 0;
                    pointer-events: none;
                    transition: all 0.3s;
                    &:target {
                        visibility: visible;
                        opacity: 1;
                        pointer-events: auto;
                    }
                    & > div {
                        width: 400px;
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        padding: 2em;
                        background: white;
                    }
                    header {
                        font-weight: bold;
                    }
                    h1 {
                        font-size: 150%;
                        margin: 0 0 15px;
                    }
                    }

                    .modal-close {
                    color: #aaa;
                    line-height: 50px;
                    font-size: 80%;
                    position: absolute;
                    right: 0;
                    text-align: center;
                    top: 0;
                    width: 70px;
                    text-decoration: none;
                    &:hover {
                        color: black;
                    }
                    }

                    /* Demo Styles */

                    html,
                    body {
                    height: 100%;
                    }

                    html {
                    font-size: 18px;
                    line-height: 1.4;
                    }

                    body {
                    font-family: apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans,
                        Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
                    font-weight: 600;
                    background-image: linear-gradient(to right, #7f53ac 0, #657ced 100%);
                    color: black;
                    }

                    a {
                    color: inherit;
                    text-decoration: none;
                    }

                    .container {
                    display: grid;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    }

                    .modal-window {
                    & > div {
                        border-radius: 1rem;
                    }
                    }

                    .modal-window div:not(:last-of-type) {
                    margin-bottom: 15px;
                    }

                    .logo {
                    max-width: 150px;
                    display: block;
                    }

                    small {
                    color: lightgray;
                    }

                    .btn {
                    background-color: white;
                    padding: 1em 1.5em;
                    border-radius: 0.5rem;
                    text-decoration: none;
                    i {
                        padding-right: 0.3em;
                    }
                    }

                </style>
                
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

    <script src="<?=base_url("assets/myjs/bootstrap.bundle.min.js")?>"></script>


    <!-- MODAL PAIEMENT PRESENTIEL -->
    <div class="modal fade" id="presence" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title" id="staticBackdropLabel">
                        Veuillez remplir la fiche de paiement ci-dessus :
                    </p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button> 
                </div>
                <form 
                    action="<?=base_url("fo/formationCtrl/paiement")?>" 
                    method="post"
                >
                    <input type="hidden" name="id_pack" value="<?php echo $services[1]['id_pack'] ?>">
                    <div class="modal-body text-center">

                        <div style="margin-bottom: 45px">
                            Retrait de <b class="text-center"> <?php echo $services[1]['pu'] ?> Vibranium</b>
                        </div>
                    
                        <!-- NOM DU PAYEUR -->
                        <input 
                            class="form-control form-control-lg" 
                            type="text" 
                            placeholder="Votre nom" 
                            aria-label=".form-control-lg example"
                            style="margin-bottom: 15px"
                        >
                        <!-- ADRESSE -->
                        <input 
                            class="form-control form-control-lg" 
                            type="email" 
                            placeholder="name@gmail.com" 
                            aria-label=".form-control-lg example"
                            style="margin-bottom: 15px"
                        >
                        <!-- NUMERO -->
                        <input 
                            class="form-control form-control-lg" 
                            type="text" 
                            placeholder="Numero carte Vibranium" 
                            aria-label=".form-control-lg example"
                            style="margin-bottom: 15px"
                        >
                    </div>

                    <div class="modal-footer justify-content-center">
                        <button type = "submit" class="btn btn-primary" style="color: black">
                            Payer 
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

      <!-- MODAL PAIEMENT DISTANCE -->
      <div class="modal fade" id="distance" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title" id="staticBackdropLabel">
                        Veuillez remplir la fiche de paiement ci-dessus :
                    </p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button> 
                </div>
                <form 
                    action="<?=base_url("fo/formationCtrl/paiement")?>" 
                    method="post"
                >
                    <input type="hidden" name="id_pack" value="<?php echo $services[0]['id_pack'] ?>">
                    <div class="modal-body text-center">

                        <div style="margin-bottom: 45px">
                            Retrait de <b class="text-center"> <?php echo $services[0]['pu'] ?> Vibranium</b>
                        </div>
                    
                        <!-- NOM DU PAYEUR -->
                        <input 
                            class="form-control form-control-lg" 
                            type="text" 
                            placeholder="Votre nom" 
                            aria-label=".form-control-lg example"
                            style="margin-bottom: 15px"
                        >
                        <!-- ADRESSE -->
                        <input 
                            class="form-control form-control-lg" 
                            type="email" 
                            placeholder="name@gmail.com" 
                            aria-label=".form-control-lg example"
                            style="margin-bottom: 15px"
                        >
                        <!-- NUMERO -->
                        <input 
                            class="form-control form-control-lg" 
                            type="text" 
                            placeholder="Numero carte Vibranium" 
                            aria-label=".form-control-lg example"
                            style="margin-bottom: 15px"
                        >
                    </div>

                    <div class="modal-footer justify-content-center">
                        <button type = "submit" class="btn btn-primary" style="color: black">
                            Payer 
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>