    <!-- Row start -->
    <div class="row justify-content-center" style="margin 0">
        <div class="col-sm-5 col-12">

            <!-- Pricing plan start -->
            <div class="pricing-plan shade-blue">
                <div class="pricing-header">
                    <h4 class="pricing-title"><?php echo $packs[0]['nom_pack'] ?></h4>
                    <h6 class="text-muted">

                    </h6>
                    <div class="pricing-cost">
                        Ar <?php echo format($packs[0]['pu']) ?>
                    </div>
                </div>
                <div class="pricing-body">
                    <ul class="pricing-features">
                        <li>Services inclus :</li>
                        <?php 
                            $allServices = $this -> Pack -> getDetailPack($packs[0]['id_pack']);
        
                            foreach($allServices as $service){ ?>
                                <li class="<?php echo $service['style_texte'] ?>">
                                    <<?php echo $service['balise'] ?>>
                                        <?php echo $service['nom_service'] ?>
                                    </<?php echo $service['balise'] ?>>
                                </li>
                            <?php } ?>
                    </ul>
                    <div class="pricing-footer">
                        <a href="#" class="btn btn-light btn-lg">Modifier</a>
                    </div>
                </div>
            </div>
    
        </div>

        <div class="col-sm-5 col-12">
            <!-- Pricing plan start -->
            <div class="pricing-plan shade-green">
                <div class="pricing-header">
                    <h4 class="pricing-title"><?php echo $packs[1]['nom_pack'] ?></h4>
                    <h6 class="text-muted">

                    </h6>
                    <div class="pricing-cost">
                        Ar <?php echo format($packs[1]['pu']) ?>
                    </div>
                </div>
                <div class="pricing-body">
                    <ul class="pricing-features">
                        <li>Services inclus :</li>
                        <?php 
                            $allServices2 = $this -> Pack -> getDetailPack($packs[1]['id_pack']);
        
                            foreach($allServices2 as $service){ ?>
                                <li class="<?php echo $service['style_texte'] ?>">
                                    <<?php echo $service['balise'] ?>>
                                        <?php echo $service['nom_service'] ?>
                                    </<?php echo $service['balise'] ?>>
                                </li>
                            <?php } ?>
                    </ul>
                    <div class="pricing-footer">
                        <a href="#" class="btn btn-light btn-lg">Modifier</a>
                    </div>
                </div>
            </div>
        </div>
    </div>