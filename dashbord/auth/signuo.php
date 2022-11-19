<?php require_once('./include/header.php'); 
session_start();
?>

<div class="app app-auth-sign-up align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.html">Neptune</a>
            </div>
            <p class="auth-description">Please enter your credentials to create an account.<br>Already have an account? 
            <a href="./sign.php">Sign In</a></p>
              
            
            
            <div class="auth-credentials m-b-xxl">
          <form action="./signuo_deta.php" method="post">
          <label for="signUpUsername" class="form-label"> Name  </label>

                <input type="text" class="form-control m-b-md <?= isset($_SESSION['name_error']) ? 'is-invalid' : '' ?>"
                 id="signUpUsername" aria-describedby="signUpUsername" name="user_name" 
                value="<?=isset($_SESSION['old_name']) ? $_SESSION['old_name'] : '';  unset($_SESSION['old_name']) ?>">
               
                <?php
              if (isset($_SESSION['name_error'])) { 
                ?>
        
              <p class="text-danger"><?= $_SESSION['name_error']; ?> </p> 

              <?php
              }
                 unset($_SESSION['name_error'])
                 ?>

                <label for="signUpEmail" class="form-label">Email address</label>
                <input type="text" class="form-control m-b-md <?= isset($_SESSION['name_error']) ? 'is invalid' : '' ?>" id="signUpEmail" aria-describedby="signUpEmail" 
                name="user_email" value="<?=isset($_SESSION['old_email']) ? $_SESSION['old_email'] : ' '; unset($_SESSION['old_email'])?>">
                <?php
              if(isset($_SESSION['email_error'])) {  ?>
                <p class="text-danger"> <?= $_SESSION['email_error']; ?> </p> 
              <?php
              }
                 unset($_SESSION['email_error'])
                 ?>

                <label for="signUpPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="signUpPassword" aria-describedby="signUpPassword" 
               name="user_password">
               <?php
              if (isset($_SESSION['password_error'])) { ?>
              <p class="text-danger"><?= $_SESSION['password_error']; ?> </p> 
              <?php
              }
                 unset($_SESSION['password_error'])
                 ?>

                <label for="signUpPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="signUpPassword" aria-describedby="signUpPassword" 
                name="user_confirm_password">
                <?php
              if (isset($_SESSION['confirm_password_error'])) { ?>
              <p class="text-danger"><?= $_SESSION['confirm_password_error']; ?> </p> 
              <?php
              }
                 unset($_SESSION['confirm_password_error'])
                 ?>
            </div>

            <div class="auth-submit">
            <button type="submit" class="btn btn-primary">  Sign Up </button>
            </div>
          </form>
            <!-- <div class="divider"></div>             -->
        </div>
    </div>
    <?php 
   require_once('./include/footer.php')
?> 