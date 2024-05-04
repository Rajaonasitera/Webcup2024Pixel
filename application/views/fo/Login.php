<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Connexion</title>
  <link rel="stylesheet" href="<?=base_url("assets/css/style1.css")?>">
  <link rel="icon" type="image/ico" href="<?=base_url("/assets/images/P.jpg")?>" />
    <link href="<?=base_url("/assets/css/style.css")?>" rel="stylesheet" />
    <link href="<?=base_url("/assets/css/all.min.css")?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?=base_url("assets/bo/css/animate.css")?>">

    <!-- Bootstrap font icons css -->
    <link rel="stylesheet" href="<?=base_url("assets/bo/fonts/bootstrap/bootstrap-icons.css")?>">

    <!-- Main css -->
    <link rel="stylesheet" href="<?=base_url("assets/bo/css/main.min.css")?>">

</head>
<body>
  <!-- Preloader -->
  <?php include("Loading.php"); ?>
        <!--/Preloader -->   
<!-- partial:index.partial.html -->
<section class="user">
  <div class="user_options-container">
    <div class="user_options-text">
      <div class="user_options-unregistered">
        <h2 class="user_unregistered-title">Don't have an account?</h2>
        <p class="user_unregistered-text">Create now!</p>
        <button class="user_unregistered-signup" id="signup-button">Sign up</button>
      </div>

      <div class="user_options-registered">
        <h2 class="user_registered-title">Already have a account!</h2>
        <p class="user_registered-text">Get started..</p>
        <button class="user_registered-login" id="login-button">Login</button>
      </div>
    </div>
    
    <div class="user_options-forms" id="user_options-forms">
      <div class="user_forms-login">
        <h2 class="forms_title">Login</h2>
        <form class="forms_form">
          <fieldset >
            <div class="forms_field">
              <input type="email" placeholder="Email" class="forms_field-input" required autofocus />
            </div>
            <div class="forms_field">
              <input type="password" placeholder="Password" class="forms_field-input" required />
            </div>
          </fieldset>
          <div class="forms_buttons">
            <input type="submit" value="Log In" class="forms_buttons-action">
          </div>
        </form>
      </div>
      <div class="user_forms-signup">
        <!-- <h2 class="forms_title">Sign Up</h2> -->
        <form class="forms_form">
          <fieldset class="forms_fieldset">
            <div class="forms_field">
              <input type="text" placeholder="Full Name" class="forms_field-input" required />
            </div>
            <div class="forms_field">
              <input type="email" placeholder="Email" class="forms_field-input" required />
            </div>
            <div class="forms_field">
              <input type="password" placeholder="Password" class="forms_field-input" required />
            </div>

          </fieldset>
          <div class="forms_buttons">
            <input type="submit" value="Sign up" class="forms_buttons-action">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- partial -->
<script  src="<?=base_url("/assets/js/script.js")?>"></script>
  <script src="<?=base_url("/assets/js/jquery.min.js")?>"></script>       
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/Flip.min.js"></script>    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/5.0.0/imagesloaded.pkgd.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.4.0/smooth-scrollbar.js'></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpK1sWi3J3EbUOkF_K4-UHzi285HyFX5M&sensor=false"></script>
    
    <script src="<?=base_url("/assets/js/clapat.js")?>"></script>
	<script src="<?=base_url("/assets/js/plugins.js")?>"></script>
    
    <script src="<?=base_url("/assets/js/common.js")?>"></script>
    <script src="<?=base_url("/assets/js/contact.js")?>"></script>
    <script src="<?=base_url("/assets/js/scripts.js")?>"></script>

</body>
</html>
