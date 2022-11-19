<?php
require_once('./includes/headerr.php');
$tab_title = 'add work';

?>


<div class="row justify-content-center">
    <div class="col-8">
    <div class="card">
    <div class="card-header">
        <h5 class="card-title">Add service</h5>
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
      <form action="./work_data.php" method="post" enctype="multipart/form-data">
      <div class="example-container">
           
           <div class="example-content">
           <label for="">work_title </label>
               <input type="text" class="form-control
                form-control-rounded m-b-sm" 
        placeholder="service title" name="work_title">
           </div>
           <div class="example-content">
           <label for="">work_heading </label>
               <input type="text" class="form-control
                form-control-rounded m-b-sm" 
        placeholder="service title" name="work_heading">
           </div>
    
               </div>
           <div class="example-content">
           <label for=""> work_description</label>
               <textarea cols="30" rows="5" class="form-control
                form-control-rounded m-b-sm" name="work_description"></textarea>

           </div>
           <div class="example-content">
           <label for=""> work_image</label>
           <input type="file" class="form-control
                form-control-rounded m-b-sm" 
        placeholder="service title" name="work_image">
     
           </div>
           <div class="example-content">
           <label for=""> work_status</label>
       <select name="work_status" >
<option value="active">active</option>
<option value="inactive">inactive</option>
       </select>
           </div>
      
           <div class="example-content">
       <button class="btn btn-primary" name="add_work">add work</button>
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
