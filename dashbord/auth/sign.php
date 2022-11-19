<?php 
require_once('./include/header.php');
session_start();
?>
    <div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.html">Neptune</a>
            </div>
            <p class="auth-description">Please sign-in to your account and continue to the dashboard.<br>Don't have an account? 
            <a href="./signuo.php">Sign Up</a></p>
       <?php
       
    if (isset($_SESSION['signin_status'])): ?>
 <div class=" alert alert-primary text-center" role="alert">
              <p><?= $_SESSION['signin_status'] ?> </p>
                </div>
                
   <?php

    endif
       ?>

<?php
       
       if (isset($_SESSION['login_error'])): ?>
    <div class=" alert alert-danger  text-center rounded-bottom " role="alert">
                 <p><?= $_SESSION['login_error'] ?> </p>
                   </div>
                   <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
      <?php
   
       endif
          ?>
    
            <div class="auth-credentials m-b-xxl">
            <form action="./sign_data.php" method="post">
            <label for="signInEmail" class="form-label">Email address</label>
                <input type="email" class="form-control m-b-md" id="signInEmail" 
                aria-describedby="signInEmail" placeholder="example@neptune.com" name="email">

                <label for="signInPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="signInPassword"  
                aria-describedby="signInPassword"  name="password">
            </div>

            <div class="auth-submit">
            <button href="" class="btn btn-primary">Sign In</button>
            </div>
</form>
           
        </div>
    </div>
    <?php 
require_once('./include/footer.php');
session_unset();
?>