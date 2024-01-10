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

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddFacultySocialLink">AddNewLink
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
                                <th>facultyId</th>
                                <th>facultyFbLink</th>
                                <th>facultyInstaLink</th>
                                <th>facultyLinkedinLink</th>
                                <th>facultyTwitterLink</th>
                                <th data-type="date" data-format="YYYY/DD/MM">CreatedAt</th>
                                <th data-type="date" data-format="YYYY/DD/MM">UpdatedAt</th>

                                <!-- <th>Status</th>  -->
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php

                            // $query = "SELECT * FROM faculty_details INNER JOIN faculty_contact_social_link ON faculty_details.faculty_details_id = faculty_contact_social_link.faculty_contact_social_link_id WHERE faculty_details_id  = faculty_id"; 

                            $query = "SELECT * FROM faculty_contact_social_link";

                            // $query = "SELECT faculty_id,faculty_contact_socialLink_fb,faculty_contact_socialLink_insta,faculty_contact_socialLink_linkdin,faculty_contact_socialLink_twitter,faculty_details_id FROM faculty_details INNER JOIN faculty_contact_social_link ON faculty_details.faculty_details_id = faculty_contact_social_link.faculty_contact_social_link_id"; 
                            $query_run = (mysqli_query($conn, $query));
                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $data) {


                            ?>

                                    <tr>
                                        <td><?php echo $data['faculty_contact_social_link_id']  ?></td>
                                        <td><?php echo $data['faculty_id'] ?></td>
                                        <td><?php echo $data['faculty_contact_socialLink_fb'] ?></td>
                                        <td><?php echo $data['faculty_contact_socialLink_insta']  ?></td>
                                        <td><?php echo $data['faculty_contact_socialLink_linkdin']  ?></td>
                                        <td><?php echo $data['faculty_contact_socialLink_twitter'] ?></td>
                                        <td><?php echo $data['created_At'] ?></td>
                                        <td><?php echo $data['Updated_At'] ?></td>

                                        <!-- <td> <a href="forms-editors.php"><button type="submit" class="" style="background-color: rgb(40,167,69); border-radius:8px;">Active</button> </a> </td> -->

                                        <td><i class="bi bi-eye-fill" style="background-color: black; color:white; padding: 3px; "></i>
                                            <i class="bi bi-pencil-square" style="background-color: rgb(23,162,184); color:white; padding: 3px;" data-bs-toggle="modal" data-bs-target="#updateFacultySocialLink"></i> 

                                            <form action="../crud/delete.php" method="POST">
                                                <button type="submit" name="facultySocialLink_delete_btn" value="<?php echo $data['faculty_contact_social_link_id']; ?>" class='btn btn-sm btn-danger mt-1'><i class="bi bi-trash-fill"></i> </button>
                                            </form>  
                                          


                                            <form action="../crud/update.php" method="post">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="modal fade" id="updateFacultySocialLink" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="staticBackdropLabels">Add Faculty Social Link</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <section class="section">
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="card">
                                                                                        <div class="card-body">
                                                                                            <h5 class="card-title"></h5>
                                                                                            <div class="mb-3">
                                                                                                <label for="" class="form-label">
                                                                                                    <h4>faculty_id</h4>
                                                                                                </label>
                                                                                                <input type="number" name="faculty_id" class="form-control" id="facultyid">
                                                                                            </div>
                                                                                            <div class="mb-3">
                                                                                                <label for="" class="form-label">
                                                                                                    <h4>Faculty Contact Link Fb</h4>
                                                                                                </label>
                                                                                                <input type="link" name="faculty_contact_socialLink_fb" placeholder="https://" class="form-control" id="faculty_contactsocialLinkfb">
                                                                                            </div>

                                                                                            <div class="mb-3">
                                                                                                <label for="" class="form-label">
                                                                                                    <h4>Faculty Contact Link Instagram</h4>
                                                                                                </label>
                                                                                                <input type="link" name="faculty_contact_socialLink_insta" placeholder="https://" class="form-control" id="facultycontactsocialLinkinsta">
                                                                                            </div>

                                                                                            <div class="mb-3">
                                                                                                <label for="" class="form-label">
                                                                                                    <h4>Faculty Contact Link Linkedin</h4>
                                                                                                </label>
                                                                                                <input type="link" name="faculty_contact_socialLink_linkdin" placeholder="https://" class="form-control" id="facultycontactsocialLinklinkdin">
                                                                                            </div>

                                                                                            <div class="mb-3">
                                                                                                <label for="" class="form-label">
                                                                                                    <h4>Faculty Contact Link Twitter</h4>
                                                                                                </label>
                                                                                                <input type="link" name="faculty_contact_socialLink_twitter" placeholder="https://" class="form-control" id="facultycontactsocialLinktwitter">
                                                                                            </div>


                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" name="updateFacultysocialLinkButton" class="btn btn-primary">UpdateFacultySocialLink</button>
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
    <form action="../crud/insert.php" method="post">
        <div class="row">
            <div class="col-md-12">
                <div class="modal fade" id="AddFacultySocialLink" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabels">Add Faculty Social Link</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <section class="section">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title"></h5>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            <h4>faculty_id</h4>
                                                        </label>
                                                        <input type="number" name="faculty_id" class="form-control" id="facultyid">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            <h4>Faculty Contact Link Fb</h4>
                                                        </label>
                                                        <input type="link" name="faculty_contact_socialLink_fb" placeholder="https://" class="form-control" id="faculty_contactsocialLinkfb">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            <h4>Faculty Contact Link Instagram</h4>
                                                        </label>
                                                        <input type="link" name="faculty_contact_socialLink_insta" placeholder="https://" class="form-control" id="facultycontactsocialLinkinsta">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            <h4>Faculty Contact Link Linkedin</h4>
                                                        </label>
                                                        <input type="link" name="faculty_contact_socialLink_linkdin" placeholder="https://" class="form-control" id="facultycontactsocialLinklinkdin">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            <h4>Faculty Contact Link Twitter</h4>
                                                        </label>
                                                        <input type="link" name="faculty_contact_socialLink_twitter" placeholder="https://" class="form-control" id="facultycontactsocialLinktwitter">
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="CreateFacultySocialLink" class="btn btn-primary">CreateFacultySocialLink</button>
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