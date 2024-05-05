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
            <div id="clapat-page-content" class="dark-content" data-bgcolor="#fff">

                <!-- Header -->
                <?php  $this->load->view('fo/content/menu'); ?>

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
                                    <h1 class="hero-title caption-timeline primary-font-title"><span>PROGRAMME</span></h1>
                                    <div class="hero-subtitle caption-timeline">
                                    	<span>N'OUBLIEZ PAS QUE CHAQUE GRAND SUPER-HÉROS A COMMENCÉ QUELQUE PART, ET VOTRE VOYAGE COMMENCE ICI, AVEC NOUS.  </span>
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
                                        <div class="button-text sticky right"><span data-hover="Scroll to Explore">FAITES DÉFILER POUR EXPLORER</span></div> 
                                    </div>
                                </div>
                                <div class="hero-footer-right">
                    				<div id="info-text">FORMATION DE SUPERHÉROS</div>
                                </div>
                            </div>                                  
                        </div>
                    </div>                      
                    <!--/Hero Section -->   
                         
                        <!-- Main Content -->
                        <div id="main-content">
                            <!-- Main Page Content -->
                            <div id="main-page-content">
                                  <!-- Row -->
                            <div class="content-row full row_padding_left row_padding_right light-section text-align-center" data-bgcolor="#fff">                                
                                
                           
                                <div class="one_half last" style="display: flex;">                                
                                    <figure class="has-animation has-cover" data-delay="200" style="margin: auto;">
                                        <a href="https://www.youtube.com/watch?v=yHVjq6pKZaA" class="video-link"><img src=" <?=base_url("assets/images/logo/youtube.png")?>" alt="Image Title"></a>               
                                        <figcaption>Vidéo d'Apprentissage</figcaption>
                                    </figure>       
                                                               
                                </div>
                                <div style="padding-top: 10%;">
                                    <h3>Découvrez une ressource d'apprentissage essentielle</h3>
                                    <p>une vidéo YouTube conçue pour approfondir vos connaissances. 
                                        Plongez dans un contenu instructif et engageant qui vous guidera à travers les étapes importantes de votre parcours d'apprentissage. 
                                        Appuyez sur lecture et laissez-vous immerger dans une expérience d'apprentissage enrichissante et captivante.</p>
                                        <h4>CLIQUER</h4>
                                </div>  
                               <hr>
                                                                
                            </div> 
                            <!--/Row -->
                               

                                <!-- PROGRAMME 1 -->
                                <div class="content-row   light-section" data-bgcolor="#fff">
                                                                
                                    <div class="pinned-section">
                                        <div class="scrolling-element left">
                                            <figure class="has-animation">
                                                <a href="<?=base_url("assets/images/programme/jump.jpg")?> class="image-link"><img src="<?=base_url("assets/images/programme/jump.jpg")?>" alt="Image Title"></a>
                                            </figure>
                                        </div>
                                        
                                        <div class="pinned-element right">
                                            
                                                <h2><?php echo $programmes[0]['nom_programme'] ?></h2>
                                                <p>
                                                    <span class="has-opacity">
                                                        <?php $noteCategorie1 = $this -> Hability -> noteToAddResultCategorie($programmes[0]['id_programme'], "CAT6") ?>
                                                        Avantages en NIVEAU BATMANIEN : <strong>+ <?php echo $noteCategorie1 ?></strong>
                                                    </span>
                                                </p>
                                                <?php $dataExercices = $this -> Entrainement -> getMyDetailsExercice($programmes[0]['id_programme']) ?>
                                                    <div style="display: flex; justify-content: space-between; width: 100%;">
                                                        <div style="width: 40%;">
                                                            <h4 style="text-decoration: underline;">Liste</h4>

                                                                <ul>
                                                                    <?php foreach($dataExercices as $ex){ ?>
                                                                        <li><?php echo $ex['nom_exercice'] ?></li>
                                                                    <?php } ?>
                                                                </ul>
                                                        </div>
                                                        <div style="width: 40%;">
                                                            <h4 style="text-decoration: underline;">Avantage</h4>

                                                                <ul>
                                                                    <?php foreach($abilities as $ab){ 
                                                                        $noteToAdd = $this -> Hability -> noteToAddResultHability($programmes[0]['id_programme'], $ab['id_hability']);
                                                                        ?>
                                                                        <li><strong><?php echo $ab['nom_hability'] ?> :</strong> + <?php echo  $noteToAdd ?> </li>
                                                                    <?php } ?>
                                                                </ul>
                                                        </div>
                                                    </div>
                                                    <h4>Durée : <strong> <?php echo $programmes[0]['duree'] ?> </strong></h4>

                                                    <div style="width: 100%; display: flex; margin: auto;">
                                                        <div class="button-box text-align-center has-animation fadeout-element">
                                                            <form action="<?=base_url("fo/evolutionCtrl/newProgramme")?>" method="post">
                                                            <input type="hidden" name="id_programme" value="<?php echo $programmes[0]['id_programme'] ?>">
                                                                <div class="clapat-button-wrap parallax-wrap hide-ball">
                                                                    <div class="clapat-button parallax-element">
                                                                        <div class="button-border outline rounded parallax-element-second">
                                                                        <input type="submit" class="" value="Finir ce cours" style="text-align:center;" />
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>    
                                                    
                                            
                                        </div>
                                    </div>
                                    
                                </div> 
                                <!--/Row -->
                                <hr>
                                <hr>

                                <!-- PROGRAMME 2 -->
                                <div class="content-row  light-section" data-bgcolor="#fff">
                                                                
                                    <div class="pinned-section">
                                        <div class="scrolling-element left">
                                            <figure class="has-animation">
                                                <a href="<?=base_url("assets/images/programme/diving.jpg")?> class="image-link"><img src="<?=base_url("assets/images/programme/diving.jpg")?>" alt="Image Title"></a>
                                            </figure>
                                        </div>
                                        
                                        <div class="pinned-element right">
                                            
                                            <h2><?php echo $programmes[2]['nom_programme'] ?></h2>
                                            <p>
                                                <span class="has-opacity">
                                                    <?php $noteCategorie2 = $this -> Hability -> noteToAddResultCategorie($programmes[1]['id_programme'], "CAT6") ?>
                                                    Avantages en NIVEAU BATMANIEN : <strong>+ <?php echo $noteCategorie2 ?></strong>
                                                </span>
                                            </p>
                                            <?php $dataExercices1 = $this -> Entrainement -> getMyDetailsExercice($programmes[1]['id_programme']) ?>
                                                    <div style="display: flex; justify-content: space-between; width: 100%;">
                                                        <div style="width: 40%;">
                                                            <h4 style="text-decoration: underline;">Liste</h4>

                                                            <ul>
                                                                <?php foreach($dataExercices1 as $ex){ ?>
                                                                    <li><?php echo $ex['nom_exercice'] ?></li>
                                                                <?php } ?>
                                                            </ul>
                                                        </div>
                                                        <div style="width: 40%;">
                                                        <h4 style="text-decoration: underline;">Avantage</h4>

                                                                <ul>
                                                                    <?php foreach($abilities as $ab){ 
                                                                        $noteToAdd = $this -> Hability -> noteToAddResultHability($programmes[1]['id_programme'], $ab['id_hability']);
                                                                        ?>
                                                                        <li><strong><?php echo $ab['nom_hability'] ?> :</strong> + <?php echo  $noteToAdd ?> </li>
                                                                    <?php } ?>
                                                                </ul>
                                                        </div>
                                                    </div>
                                                    <h4>Durée : <strong> <?php echo $programmes[1]['duree'] ?> </strong></h4>

                                                    <div style="width: 100%; display: flex; margin: auto;">
                                                        <div class="button-box text-align-center has-animation fadeout-element">
                                                            <form action="<?=base_url(" fo/inscription")?>" method="post">
                                                                <div class="clapat-button-wrap parallax-wrap hide-ball">
                                                                    <div class="clapat-button parallax-element">
                                                                        <div class="button-border outline rounded parallax-element-second">
                                                                        <input type="submit" class="" value="Finir ce cours" style="text-align:center;" />
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>    
                                                    
                                            
                                        </div>
                                    </div>
                                    
                                </div> 
                                <!--/Row -->
                                <hr>
                                <hr>

                                <!-- PROGRAMME 3 -->
                                <div class="content-row   light-section" data-bgcolor="#fff">
                                                                
                                    <div class="pinned-section">
                                        <div class="scrolling-element left">
                                            <figure class="has-animation">
                                                <a href="<?=base_url("assets/images/programme/jump.jpg")?> class="image-link"><img src="<?=base_url("assets/images/programme/jump.jpg")?>" alt="Image Title"></a>
                                            </figure>
                                        </div>
                                        
                                        <div class="pinned-element right">
                                            
                                                <h2><?php echo $programmes[2]['nom_programme'] ?></h2>
                                                <p>
                                                    <span class="has-opacity">
                                                        <?php $noteCategorie2 = $this -> Hability -> noteToAddResultCategorie($programmes[2]['id_programme'], "CAT6") ?>
                                                        Avantages en NIVEAU BATMANIEN : <strong>+ <?php echo $noteCategorie2 ?></strong>
                                                    </span>
                                                </p>
                                                <?php $dataExercices3 = $this -> Entrainement -> getMyDetailsExercice($programmes[2]['id_programme']) ?>
                                                    <div style="display: flex; justify-content: space-between; width: 100%;">
                                                        <div style="width: 40%;">
                                                            <h4 style="text-decoration: underline;">Liste</h4>

                                                                <ul>
                                                                    <?php foreach($dataExercices3 as $ex){ ?>
                                                                        <li><?php echo $ex['nom_exercice'] ?></li>
                                                                    <?php } ?>
                                                                </ul>
                                                        </div>
                                                        <div style="width: 40%;">
                                                            <h4 style="text-decoration: underline;">Avantage</h4>

                                                                <ul>
                                                                    <?php foreach($abilities as $ab){ 
                                                                        $noteToAdd = $this -> Hability -> noteToAddResultHability($programmes[2]['id_programme'], $ab['id_hability']);
                                                                        ?>
                                                                        <li><strong><?php echo $ab['nom_hability'] ?> :</strong> + <?php echo  $noteToAdd ?> </li>
                                                                    <?php } ?>
                                                                </ul>
                                                        </div>
                                                    </div>
                                                    <h4>Durée : <strong> <?php echo $programmes[2]['duree'] ?> </strong></h4>

                                                    <div style="width: 100%; display: flex; margin: auto;">
                                                        <div class="button-box text-align-center has-animation fadeout-element">
                                                            <form action="<?=base_url(" fo/inscription")?>" method="post">
                                                                <div class="clapat-button-wrap parallax-wrap hide-ball">
                                                                    <div class="clapat-button parallax-element">
                                                                        <div class="button-border outline rounded parallax-element-second">
                                                                        <input type="submit" class="" value="Finir ce cours" style="text-align:center;" />
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>    
                                                    
                                            
                                        </div>
                                    </div>
                                    
                                </div> 
                                <!--/Row -->
                          
                            </div>
                        </div>

                    </div>
                    <!--/Main -->


                    <!-- Footer -->

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