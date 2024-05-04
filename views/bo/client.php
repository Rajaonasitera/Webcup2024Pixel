  <!-- Row start -->
  <div class="row gx-3">
        <div class="col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Customers</div>
            </div>
            <div class="card-body">

              <div class="table-responsive">
                <table class="table v-middle m-0 text-center">
                  <thead>
                    <tr>
                      <th>Pays</th>
                      <th>Client</th>
                      <th>Contact</th>
                      <th style="width: 10%">Nbr de souscriptions</th>
                      <th>Dernière souscription</th>
                      <th>Total Achat</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($utilisateurs as $utilisateur){ ?>
                    <tr>
                      <td>
                        <img src="<?php echo base_url() ?>assets/bo/images/flags/4x3/<?php echo $utilisateur['code_pays'] ?>.svg" class="flag-img-lg"
                          alt="Flag" />
                          <?php echo $utilisateur['nom_pays'] ?>
                      </td>
                      <td>
                        <div class="media-box">
                          
                          <div class="media-box-body">
                            <div class="text-truncate">
                              <?php echo $utilisateur['nom_client'] . " " . $utilisateur['prenom_client'] ?>
                            </div>
                            <p>ID: #<?php echo $utilisateur['id_client'] ?></p>
                          </div>
                        </div>
                      </td>
                      <td><?php echo $utilisateur['email'] ?></td>
                      <td><?php echo $utilisateur['nbr_vente'] ?></td>
                      <td> <?php echo $utilisateur['last_order'] ?></td>
                      <td> <b>Ar <?php echo format($utilisateur['ca_client']) ?> </b> </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->