<?php
$Dir = "../../";
include $Dir . "config.php";  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>


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

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createfacilities">Add Facility
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
                                <th>FacilityTitle</th>
                                <th>FacilityImg</th>
                                <th>FacilityDescription</th>
                                <th data-type="date" data-format="YYYY/DD/MM">CreatedAt</th>
                                <th data-type="date" data-format="YYYY/DD/MM">LastUpdatedAt</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            $query = "SELECT * FROM facilitiess";
                            $query_run = mysqli_query($conn,   $query);
                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $data) {
                            ?>

                                    <tr>
                                        <td><?php echo $data['facilities_id'] ?></td>
                                        <td><?php echo $data['facilities_title']  ?></td>
                                        <td><?php echo $data['facilities_image']  ?></td>
                                        <td><?php echo $data['facilities_description'] ?></td>
                                        <td><?php echo $data['Created_At'] ?></td>
                                        <td><?php echo $data['LastUpdatedAt']  ?></td>

                                        <td> <a href="forms-editors.php"><button type="submit" class="" style="background-color: rgb(40,167,69); border-radius:8px;">Active</button> </a> </td>

                                        <td><i class="bi bi-eye-fill" style="background-color: black; color:white; padding: 3px; "></i>
                                            <i class="bi bi-pencil-square" style="background-color: rgb(23,162,184); color:white; padding: 3px;" data-bs-toggle="modal" data-bs-target="#updateFacilityDetails_" ></i> 

                                       
                                            <form action="../crud/delete.php" method="POST">
                                                <button type="submit" name="Facilities_delete_btn" value="<?php echo $data['facilities_id']; ?>" class='btn btn-sm btn-danger mt-1'><i class="bi bi-trash-fill"></i> </button>
                                            </form>  

                                            <!-- <i class="bi bi-trash-fill" style="background-color:rgb(220,53,69); color: white; padding:3px;"></i> </i>  -->



                                            <form action="../crud/update.php" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="modal fade" id="updateFacilityDetails_" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="staticBackdropLabels">Facilities</h5>
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
                                                                                                    <h4>Facility Title</h4>
                                                                                                </label>
                                                                                                <input type="text" name="facilities_title" class="form-control" id="facilitiestitle">
                                                                                            </div>
                                                                                            <div class="mb-3">
                                                                                                <label for="" class="form-label">
                                                                                                    <h4>Facility Image</h4>
                                                                                                </label>
                                                                                                <input type="file" name="facilities_image" class="form-control" id="facilitiesimage">
                                                                                            </div>

                                                                                            <!-- Quill Editor Default -->
                                                                                            <label for="" class="form-label">
                                                                                                <h4>Facility Description</h4>
                                                                                            </label>
                                                                                            <textarea class="editor" name="facilities_description" id="facilitiesdescription"></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" name="updatefacilitiesdetailsbutton" class="btn btn-primary">UpdateFacility</button>
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





    <!-- Modal Start Here: -->
    <form action="../crud/insert.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12">
                <div class="modal fade" id="createfacilities" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabels">Facilities</h5>
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
                                                            <h4>Facility Title</h4>
                                                        </label>
                                                        <input type="text" name="facilities_title" class="form-control" id="facilitiestitle">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            <h4>Facility Image</h4>
                                                        </label>
                                                        <input type="file" name="facilities_image" class="form-control" id="facilitiesimage">
                                                    </div>

                                                    <!-- Quill Editor Default -->
                                                    <label for="" class="form-label">
                                                        <h4>Facility Description</h4>
                                                    </label>
                                                    <textarea class="editor" name="facilities_description" id="facilitiesdescription"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="createfacility" class="btn btn-primary">CreateFacility</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Modal End here: -->












    <script src="../../assets/./vendor/./quill/quill.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>