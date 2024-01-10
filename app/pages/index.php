<?php
session_start();
$Dir = "../../";
include $Dir . "config.php";  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <?php include $Dir . "assets/headerfiles.php"; ?>
</head>

<body>

    <?php

    include $Dir . "include/extra/Header.php";
    include $Dir . "include/extra/Sidebar.php";
    ?>

    <main id="main" class="main">




        <div class="pagetitle">
            <nav class="nav-parent">
                <h1>Dashboard</h1>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createpages">Add pages
                </button>
            </nav>
        </div>

        <section class="section dashboard">


            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><b>S.No</b></th>
                                <th>PageTitle</th>
                                <th>PageImg</th>
                                <th>pageDescription</th>
                                <th data-type="date" data-format="YYYY/DD/MM">CreatedAt</th>
                                <th data-type="date" data-format="YYYY/DD/MM">UpdatedAt</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $query = "SELECT * FROM pages";
                            $query_run = mysqli_query($conn,   $query);
                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $data) {
                            ?>

                                    <tr>
                                        <td><?php echo $data['page_id']   ?></td>
                                        <td><?php echo $data['Page_Title']  ?></td>
                                        <td><?php echo $data['page_image']  ?></td>
                                        <td><?php echo $data['page_description']  ?></td>
                                        <td><?php echo $data['created_At']  ?></td>
                                        <td><?php echo $data['updated_At']  ?></td>

                                        <td>
                                            <i class="bi bi-eye-fill bg bg-dark text-white" style="font-size: 20px; "></i>
                                            <i class="bi bi-pencil-square" style="background-color: rgb(23,162,184); color:white; padding: 2px; font-size:18px; " data-bs-toggle="modal" data-bs-target="#updatepages"></i> 

                                            <form action="../crud/delete.php" method="POST">
                                                <button type="submit" name="Page_delete_btn" value="<?php echo $data['page_id']; ?>" class='btn btn-sm btn-danger mt-1'><i class="bi bi-trash-fill"></i> </button>
                                            </form>  

                                           


                                            <form action="../crud/update.php" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="modal fade" id="updatepages" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabels" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="">Page</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <section class="section">
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="card">
                                                                                        <div class="card-body">
                                                                                            <div class="mb-3">
                                                                                                <label for="" class="form-label">
                                                                                                    <h4>Page Title</h4>
                                                                                                </label>
                                                                                                <input type="text" name="Page_Title" value="" class="form-control" id="pagetitle">
                                                                                            </div>

                                                                                            <div class="mb-3">
                                                                                                <label for="" class="form-label">
                                                                                                    <h4>Page Image</h4>
                                                                                                </label>
                                                                                                <input type="file" name="page_image" value="" class="form-control" id="pageimage">
                                                                                            </div>

                                                                                            <div class="mb-3">
                                                                                                <!-- Quill Editor Default -->
                                                                                                <label for="" class="form-label">
                                                                                                    <h4>Page Description</h4>
                                                                                                </label>
                                                                                                <textarea class="editor form-control" value="" name="page_description" id="pageDescription"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                        </section>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" name="updatepagesbutton" class="btn btn-primary">updatePages</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>





                                    <?php
                                }
                            } else {
                                    ?>
                                    <tr>
                                        <td>No Record Found.</td>
                                    </tr>

                                <?php
                            }
                                ?>



                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
    <!--Create Modal Start Here: -->
    <form action="../crud/insert.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12">
                <div class="modal fade" id="createpages" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabels" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="">Page</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <section class="section">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            <h4>Page Title</h4>
                                                        </label>
                                                        <input type="text" name="Page_Title" value="" class="form-control" id="pagetitle">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            <h4>Page Image</h4>
                                                        </label>
                                                        <input type="file" name="page_image" value="" class="form-control" id="pageimage">
                                                    </div>

                                                    <div class="mb-3">
                                                        <!-- Quill Editor Default -->
                                                        <label for="" class="form-label">
                                                            <h4>Page Description</h4>
                                                        </label>
                                                        <textarea class="editor form-control" value="" name="page_description" id="pageDescription"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </section>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="createpages" class="btn btn-primary">CreatePages</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>




    <script src="../../assets/./vendor/./quill/quill.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>