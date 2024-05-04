  <!-- Row start -->
  <div class="row gx-3">
              <div class="col-xxl-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Liste des ventes avec status</div>
                  </div>
                  <div class="card-body">

                    <div class="table-responsive">
                      <table class="table v-middle text-center">
                        <thead>
                          <tr>
                            <th>User ID</th>
                            <th>Client</th>
                            <th>Nom du pack</th>
                            <th> Souscription le </th>
                            <th>Prix</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach($ventes as $vente){ ?>
                            <tr>
                              <td><b>#<?php echo $vente['id_client'] ?></b></td>
                              <td>
                                <div class="media-box">

                                  <div class="media-box-body">
                                    <div class="text-truncate">
                                      <?php echo $vente['nom_client'] . " " . $vente['prenom_client'] ?>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div class="media-box">
                                  
                                  <div class="media-box-body">
                                    <div class="text-truncate">
                                      <?php echo $vente['nom_pack'] ?>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              
                              <td><?php echo $vente['dateSubscription'] ?></td>
                              <td><b> Ar <?php echo format($vente['pu_pack']) ?> </b></td>
                              <td>
                                <span class="text-green td-status">
                                  <i class="<?php echo $vente['icon_status'] ?>"></i> 
                                  <?php echo $vente['status_paiement'] ?>
                                </span>
                              </td>
                            </tr>
                          <?php } ?>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>