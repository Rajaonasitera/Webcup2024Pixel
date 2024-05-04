<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Connexion</title>
  <link rel="stylesheet" href="<?=site_url("assets/css/style1.css")?>">
  <link rel="icon" type="image/ico" href="<?=site_url("/assets/images/P.jpg")?>" />
    <link href="<?=site_url("/assets/css/style.css")?>" rel="stylesheet" />
    <link href="<?=site_url("/assets/css/all.min.css")?>" rel="stylesheet" />

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
    
    <!-- <div class="user_options-forms" id="user_options-forms">
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
      </div> -->
      <div class="user_forms-signup">
        <h2 class="forms_title">Sign Up</h2>
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
<?php include("content/Footer.php"); ?>

</body>
</html>
