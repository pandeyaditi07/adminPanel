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

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#primaryContactDetailss">Add ContactNumber
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
                                <th>PrimaryContactNumber</th>
                                <th data-type="date" data-format="YYYY/DD/MM">CreatedAt</th>
                                <th data-type="date" data-format="YYYY/DD/MM">LastUpdatedAt</th>
                                <!-- <th>Status</th>  -->
                                <th>Action</th> 
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $query = "SELECT * FROM primary_contact_no";
                            $query_run = mysqli_query($conn,   $query);
                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $data) {
                            ?>


                                    <tr>
                                        <td><?php echo $data['primary_contact_num_id']  ?></td>
                                        <td><?php echo $data['primary_contact_number']  ?></td>
                                        <td><?php echo $data['created_At'] ?></td>
                                        <td><?php echo $data['Updated_At']  ?></td>
                                        <!-- <td></td>   -->
                                        <!-- <td></td>  -->
                                        <!-- <td> <a href="forms-editors.php"><button type="submit" class="" style="background-color: rgb(40,167,69); border-radius:8px;">Active</button> </a> </td>  -->

                                        <td><i class="bi bi-eye-fill" style="background-color: black; color:white; padding: 3px; "></i>
                                            <i class="bi bi-pencil-square" style="background-color: rgb(23,162,184); color:white; padding: 3px;"  data-bs-toggle="modal" data-bs-target="#updateContactDetails_"></i> 

                                            <form action="../crud/delete.php" method="POST">
                                                <button type="submit" name="primaryContact_delete_btn" value="<?php echo $data['primary_contact_num_id']; ?>" class='btn btn-sm btn-danger mt-1'><i class="bi bi-trash-fill"></i> </button>
                                            </form>  
                                   



                                            <form action="../crud/update.php" method="POST">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="modal fade" id="updateContactDetails_" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="staticBackdropLabels">Primary Contact Number</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <section class="section">
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="card">
                                                                                        <div class="card-body">
                                                                                            <!-- <h5 class="card-title">PrimaryContactNumber</h5>  -->
                                                                                            <div class="mb-3">
                                                                                                <label for="" class="form-label">
                                                                                                    <h4>Primary Contact Number</h4>
                                                                                                </label>
                                                                                                <input type="number" name="primary_contact_number" class="form-control" id="primaryContactDetails" maxlength="12">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" name="updateContactDetails" class="btn btn-primary">UpdateContact</button>
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


    <!-- Modal Start Here: -->

    <form action="../crud/insert.php" method="POST">
        <div class="row">
            <div class="col-md-12">
                <div class="modal fade" id="primaryContactDetailss" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabels">Primary Contact Number</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <section class="section">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <!-- <h5 class="card-title">PrimaryContactNumber</h5>  -->
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            <h4>Primary Contact Number</h4>
                                                        </label>
                                                        <input type="number" name="primary_contact_number" class="form-control" id="primaryContactDetails" maxlength="12">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="PrimaryContactDetails" class="btn btn-primary">CreateContact</button>
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