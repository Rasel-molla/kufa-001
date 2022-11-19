
<?php
require_once('./includes/headerr.php');
require_once('./db_connect.php');


?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Service List</h5>
            </div>
            <div class="card-body">
                <div class="example-container">
                    <div class="example-content">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Serial</th>
                                    <th scope="col">work_title</th>
                                    <th scope="col">work_heading</th>
                                    <th scope="col">work_description</th>
                                    <th scope="col">work_image</th>
                                    <th scope="col">work_status</th>
                                    <th scope="col">actons</th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                $work_query = " SELECT *  FROM works ";
                                $work_query_db = mysqli_query($db_connect, $work_query);

                                $serial = 1;

                                foreach ($work_query_db as $work) : ?>

                                    <tr>
                                        <th><?= $serial++ ?></th>
                                        <td> <?= $work['work_title'] ?></td>
                                        <td> <?= $work['work_heading'] ?></td>
                                        <td> <?= $work['work_description'] ?></td>
                                        <td> <img src="./uploads/works/<?=$work['work_image'] ?>" 
                                        alt="" width="100" height="100"></td>

                                        <td> <span class="badge <?= ($work['work_status']
                                                                    == 'active') ? 'badge-success' : 'badge-danger' ?>">
                                                <?= $work['work_status'] ?></span></td>
                                        <td><a href="./work_update.php?id=<?= $work['id'] ?>" class="btn btn-warning ">edit</a>
                                            <a href="./work_delete.php?id=<?= $work['id'] ?> " class="btn btn-danger ">delete</a>
                                        </td>
                                    </tr>

                                <?php
                                endforeach;
                                ?>


                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>




<?php
require_once('./includes/footerr.php');

?>