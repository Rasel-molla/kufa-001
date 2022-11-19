

<?php
require_once('./includes/headerr.php');

?>


<div class="row justify-content-center">
    <div class="col-8">
    <div class="card">
    <div class="card-header">
        <h5 class="card-title"> social link</h5>
    </div>

<?php

if (isset( $_SESSION['success'])) : ?>
<div class="alert alert-success " role="alert">
<h4 class="alert-heading"> <?= $_SESSION['success'] ?> </h4>
</div>

  <?php
endif;
unset($_SESSION['success']);

?>

    <div class="card-body">
      <form action="./social_link_update.php" method="post">
      <div class="example-container">
           
           <div class="example-content">
           <label for=""> facebook  </label>
               <input type="url" class="form-control
                form-control-rounded m-b-sm" 
        placeholder="facebook links" name="facebook" >
           </div>
           <div class="example-content">
           <label for="">  twitrer </label>
               <input type="url" class="form-control
                form-control-rounded m-b-sm" 
        placeholder="twitrer links" name="twitrer" >
           </div>
           <div class="example-content">
           <label for=""> instagram  </label>
               <input type="url" class="form-control
                form-control-rounded m-b-sm" 
        placeholder="instagram links" name="instagram" >
           </div>
           <div class="example-content">
           <label for=""> linked in  </label>
               <input type="url" class="form-control
                form-control-rounded m-b-sm" 
        placeholder="linked in  links" name="linkedin " >
           </div>
       
    
           <div class="example-content">
       <button class="btn btn-primary">update social links</button>
           </div>
       </div>

      </form>
    </div>
</div>
    </div>
</div>

<?php
require_once('./includes/footerr.php');

?>



