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

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add gallery
                </button>

            </nav>
        </div>



        <section class="section dashboard">


            <div class="row">
                <div class="col-md-12">
                    <?php
                    if (isset($_SESSION['status'])) {
                        echo "<h4> " . $_SESSION['status'] . "</h4>";
                        unset($_SESSION['status']);
                    }
                    ?>


                    <table class="table">
                        <thead>
                            <tr>
                                <th><b>S.No</b></th>
                                <th>galleryTitle</th>
                                <th>galleryImg</th>
                                <th>galleryDescription</th>
                                <th data-type="date" data-format="YYYY/DD/MM">CreatedAt</th>
                                <th data-type="date" data-format="YYYY/DD/MM">UpdatedAt</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM gallery";
                            $query_run = mysqli_query($conn,   $query);
                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $data) {
                            ?>


                                    <tr>
                                        <td><?php echo $data['gallery_id'] ?></td>
                                        <td><?php echo $data['gallery_title'] ?></td>
                                        <td><?php echo $data['gallery_images'] ?></td>
                                        <td><?php echo $data['gallery_description'] ?></td>
                                        <td><?php echo $data['gallery_Created_At'] ?></td>
                                        <td><?php echo $data['updated_At'] ?></td>

                                        <td><?php if ($data['gallery_status'] == 0) {
                                                echo "<button style='background-color: rgb(40,167,69); border-radius:8px;'>Active</button>";
                                            } else {
                                                echo "<button style='background-color: rgb(220,53,69); border-radius:8px;'>InActive</button>";
                                            } ?></td>

                                        <td>
                                            <i class="bi bi-eye-fill" style="background-color: black; padding:3px; color:white;"></i>
                                            <i class="bi bi-pencil-square" style="background-color: rgb(23,162,184); color:white; padding: 3px;" data-bs-toggle="modal" data-bs-target="#Update_gallery_<?php echo $data['gallery_id'] ?>"></i>

                                            <form action="../crud/delete.php" method="POST">
                                                <button type="submit" name="gallery_delete_btn" value="<?php echo $data['gallery_id']; ?>" class='btn btn-sm btn-danger mt-1'><i class="bi bi-trash-fill"></i> </button>
                                            </form>



                                            <form action="../crud/update.php" method="POST" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="modal fade" id="Update_gallery_<?php echo $data['gallery_id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="">Update gallery</h5>
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
                                                                                                    <h4>gallery Title</h4>
                                                                                                </label>
                                                                                                <input type="text" name="gallery_title" value="<?php echo $data['gallery_title'] ?>" class="form-control" id="galleryTitle">
                                                                                            </div>
                                                                                            <div class="mb-3">
                                                                                                <label for="" class="form-label">
                                                                                                    <h4>gallery Image</h4>
                                                                                                </label>
                                                                                                <input type="file" name="gallery_images" class="form-control" value="<?php echo $data['gallery_images']; ?>" id="galleryImage">
                                                                                            </div>
                                                                                            <div class="mb-3">
                                                                                                <label for="" class="form-label">
                                                                                                    <h4>Status</h4>
                                                                                                </label>
                                                                                                <select name="gallery_status" class="form-control">
                                                                                                    <?php
                                                                                                    echo multiOptionsSelectWithKeys([
                                                                                                        "0" => "Active",
                                                                                                        "1" => "Inactive",
                                                                                                    ], $data['gallery_status']);
                                                                                                    ?>
                                                                                                </select>

                                                                                            </div>
                                                                                            <!-- Quill Editor Default -->
                                                                                            <label for="" class="form-label">
                                                                                                <h4>Slider Description</h4>
                                                                                            </label>
                                                                                            <textarea class="editor form-control" name="gallery_description" value='<?php echo $data['gallery_description'] ?>'><?php echo $data['gallery_description'] ?></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" value='<?php echo $data["gallery_id"]; ?>' name="updategallery" class="btn btn-primary">Updatesgallery</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
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


    <!-- Button trigger modal -->


    <!--Create Modal Start Here: -->
    <form action="../crud/insert.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12">
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabels">gallery</h5>
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
                                                            <h4>gallery Title</h4>
                                                        </label>
                                                        <input type="text" name="gallery_title" class="form-control" id="galleryTitle">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            <h4>gallery Image</h4>
                                                        </label>
                                                        <input type="file" name="gallery_images" class="form-control" id="SliderImage">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            <h4>Status</h4>
                                                        </label>
                                                        <select name="gallery_status" class="form-control">
                                                            <?php
                                                            echo multiOptionsSelectWithKeys([
                                                                "0" => "Active",
                                                                "1" => "Inactive",
                                                            ], "0");
                                                            ?>
                                                        </select>

                                                    </div>
                                                    <!-- Quill Editor Default -->
                                                    <label for="" class="form-label">
                                                        <h4>gallery Description</h4>
                                                    </label>
                                                    <textarea class="editor form-control" name="gallery_description"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="Creategallery" class="btn btn-primary">CreateGallery</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--Create Modal End here: -->

    <script src="../../assets/./vendor/./quill/quill.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>