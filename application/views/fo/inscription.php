<!DOCTYPE html>
<html lang="en">
<?php  $this->load->view('fo/content/header'); ?>

  <body
    class="hidden hidden-ball smooth-scroll1 rounded-borders"
    data-primary-color="#8c6144"
  >
    <style>
      .form-container {
        max-width: 400px;
        background-color: #fff;
        padding: 32px 24px;
        font-size: 14px;
        font-family: inherit;
        color: #fff;
        display: flex;
        flex-direction: column;
        gap: 20px;
        box-sizing: border-box;
        border-radius: 10px;
        box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.084),
          0px 2px 3px rgba(0, 0, 0, 0.168);
      }

      .form-container button:active {
        scale: 0.95;
      }

      .form-container .logo-container {
        text-align: center;
        font-weight: 600;
        font-size: 18px;
      }

      .form-container .form {
        display: flex;
        flex-direction: column;
      }

      .form-container .form-group {
        display: flex;
        flex-direction: column;
        gap: 2px;
      }

      .form-container .form-group label {
        display: block;
        margin-bottom: 5px;
      }

      .form-container .form-group input {
        width: 100%;
        padding: 12px 16px;
        border-radius: 6px;
        font-family: inherit;
        border: 1px solid #ccc;
      }

      .form-container .form-group input::placeholder {
        opacity: 0.5;
      }

      .form-container .form-group input:focus {
        outline: none;
        border-color: #1778f2;
      }

      .form-container .form-submit-btn {
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: inherit;
        color: #fff;
        background-color: #fff;
        border: none;
        width: 100%;
        padding: 12px 16px;
        font-size: inherit;
        gap: 8px;
        margin: 12px 0;
        cursor: pointer;
        border-radius: 6px;
        box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.084),
          0px 2px 3px rgba(0, 0, 0, 0.168);
      }

      .form-container .form-submit-btn:hover {
        background-color: #fff;
      }

      .form-container .link {
        color: #1778f2;
        text-decoration: none;
      }

      .form-container .signup-link {
        align-self: center;
        font-weight: 500;
      }

      .form-container .signup-link .link {
        font-weight: 400;
      }

      .form-container .link:hover {
        text-decoration: underline;
      }
    </style>
    <main>
      <!-- Preloader -->
      <?php include("loading.php"); ?>

      <!--/Preloader -->

      <div class="cd-index cd-main-content">
        <!-- Page Content -->
        <div
          id="clapat-page-content"
          class="light-content"
          data-bgcolor="#0c0c0c"
        >
          <!-- Header -->
          <?php  $this->load->view('fo/content/menu'); ?>
<hr>
<hr>
          <!-- Content Scroll -->
          <div id="content-scroll">
            <!-- Main -->
            <div id="main">
              <!-- Main Content -->
              <div id="main-content">
                <!-- Main Page Content -->
                <div
                  id="main-page-content"
                  class="content-full-width"
                  style="align-item: center; justify-content: center;"
                >
                  <!-- Row -->
                  <div
                    class="content-row light-section text-align-center" style="  width:80%;"
                    data-bgcolor="#0c0c0c"
                  >
                   

                    <div class="form-container" style="margin: auto; background-color: #0c0c0c;">
                      <div class="logo-container">Inscription à Knowhere</div>

                      <form 
                        class="form"
                        method="post"
                        action="<?php echo site_url("fo/connexion/abonnement") ?>"  
                      >
                        <div class="form-group">
                          <label for="nom">Nom</label>
                          <input
                            type="text"
                            id="nom"
                            name="nom_client"
                            placeholder="Entrer votre nom"
                            required=""
                            style="background-color: #fff;"
                          />
                        </div>

                        <div class="form-group">
                          <label for="dtn">Date de naissance</label>
                          <input
                            type="date"
                            id="dtn"
                            name="dtn"
                            required=""
                            style="background-color: #fff;"
                          />
                        </div>
    
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Enter your email"
                            required=""
                            style="background-color: #fff;"
                          />
                        </div>
        
                          <div class="form-group">
                            <label for="mdp">Mots de passe</label>
                            <input
                              type="password"
                              id="mdp"
                              name="mdp"
                              placeholder="Enter your mdp"
                              required=""
                              style="background-color: #fff;"
                            />
                          </div>
    
                            <div class="form-group">
                                <label >Genre</label>
                                <select name="genre" id=""  style="height: 50px; border-color: #ccc; font-family: inherit;">
                                    <option value="0"  style="height: 50px; border-color: #ccc; font-family: inherit;">Homme</option>
                                    <option value="1"  style="height: 50px; border-color: #ccc;font-family: inherit;">Femme</option>
                                </select>
                            </div>
        
                            <div class="form-group">
                                <label >Planete</label>
                                <select name="id_pays" id=""  style="height: 50px; border-color: #ccc;font-family: inherit;">
                                    <?php foreach($pays as $planete){ ?>
                                      <option 
                                        value="<?php echo $planete['id_pays'] ?>"  
                                        style="height: 50px; border-color: #ccc;font-family: inherit;">
                                          <?php echo $planete['nom_pays'] ?>
                                      </option>
                                    <?php } ?>
                                </select>
                            </div>
            
                            <div class="form-group">
                                <label >Categorie</label>
                                <select name="id_categorie" id=""  style="height: 50px; border-color: #ccc;font-family: inherit;">
                                  <?php foreach($categories as $categorie){ ?>
                                    <option 
                                      value="<?php echo $categorie['id_categorie'] ?>"  
                                      style="height: 50px; border-color: #ccc;font-family: inherit;">
                                      <?php echo $categorie['nom_categorie'] ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>

                        <button class="form-submit-btn" type="submit"  style="color: #0c0c0c;">
                          S'inscrire
                        </button>
                      </form>

                      <p class="signup-link" >
                        Vous avez déjà un compte ?
                        <a href="#" class="signup-link link" style="color: #fff;">Se connecter</a>
                      </p>
                    </div>
                    <!--/Row -->
                  </div>
                </div>
              </div>
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
