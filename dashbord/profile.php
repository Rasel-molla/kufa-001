<?php
require_once('./includes/headerr.php');

?>

<!-- Active-User-show -->

<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Profile</h1>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="example-container">
                        <div class="example-content">
                            <form action="./profile_data.php" method="post" enctype="multipart/form-data">
                                <h6>Name Change</h6>
                                <div class="input-group mb-3">


                                    <input type="text" class="form-control" aria-label="Username" name="name" value="<?= $_SESSION['auth_name'] ?>">
                                    <!-- <br> -->
                                </div>
                                <?php
                                if (isset($_SESSION['name_error'])) {
                                ?>

                                    <p class="text-danger"><?= $_SESSION['name_error'] ?> </p>

                                <?php
                                }
                                unset($_SESSION['name_error'])
                                ?>

                                <h6>Old passeord</h6>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" aria-label="Username" name="old_password">

                                </div>

                                <?php
                                if (isset($_SESSION['old_password_error'])) {
                                ?>

                                    <p class="text-danger"><?= $_SESSION['old_password_error'] ?> </p>

                                <?php
                                }
                                unset($_SESSION['old_password_error'])
                                ?>
                                <h6>New password</h6>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" aria-label="Username" name="new_password">

                                </div>
                                <?php
                                if (isset($_SESSION['new_password_error'])) {
                                ?>

                                    <p class="text-danger"><?= $_SESSION['new_password_error']; ?> </p>

                                <?php
                                }
                                unset($_SESSION['new_password_error'])
                                ?>
                                <h6>Confirm Change</h6>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" aria-label="Username" name="confirm_password">

                                </div>
                                <?php
                                if (isset($_SESSION['confirm_password_error'])) {
                                ?>

                                    <p class="text-danger"><?= $_SESSION['confirm_password_error']; ?> </p>

                                <?php
                                }
                                unset($_SESSION['confirm_password_error'])
                                ?>
                                 <p><label for="">Upload Profile</label></p>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control"  name="profile_pic">

                                </div>
                                <p><label for="">Phone Number </label></p>
                                <div class="input-group mb-3">
                                    <input type="tel" class="form-control"  name="phone_number">

                                </div>


                                <button type="submit" class="btn btn-info" name="update">Update</button>
                                <button type="submit" class="btn btn-info" name="change_password">Change Password</button>

                            </form>

                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div>

</div>

</div>



<?php
require_once('./includes/footerr.php');

?>