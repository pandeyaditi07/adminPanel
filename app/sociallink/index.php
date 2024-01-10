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

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Addsociallink">AddNewLink
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
                                <th>Icon</th>
                                <th>ProfileTitle</th>
                                <th>AccountSelection</th>
                                <th>ProfileLink</th>
                                <!-- <th>Status</th>  -->
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $query = "SELECT * FROM social_links";
                            $query_run = (mysqli_query($conn, $query));
                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $data) {


                            ?>   
                                    <tr>
                                        <td><?php echo $data['social_profile_id'] ?></td>
                                        <td><?php echo $data['profile_title'] ?></td>
                                        <td><?php echo $data['profile_icon']  ?></td>
                                        <td><?php echo $data['Account_selection']  ?></td>
                                        <td><?php echo $data['profile_link'] ?></td>

                                        <td><i class="bi bi-eye-fill" style="background-color: black; color:white; padding: 3px;"></i>
                                            <i class="bi bi-pencil-square" style="background-color: rgb(23,162,184); color:white; padding: 3px;" data-bs-toggle="modal" data-bs-target="#UpdateSocialLink"></i> 

                                            <form action="../crud/delete.php" method="POST">
                                                <button type="submit" name="SocialLink_delete_btn" value="<?php echo $data['social_profile_id']; ?>" class='btn btn-sm btn-danger mt-1'><i class="bi bi-trash-fill"></i> </button>
                                            </form>  
                                            <!-- <i class="bi bi-trash-fill" style="background-color:rgb(220,53,69); color: white; padding:3px;"></i> </i> -->


                                            <form action="../crud/update.php" method="post">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="modal fade" id="UpdateSocialLink" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="UpdateSocialLink">Add Social Link</h5>
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
                                                                                                    <h4>Profile Icon</h4>
                                                                                                </label>
                                                                                                <input type="file" name="profile_icon" class="form-control" id="profile_icon">
                                                                                            </div>
                                                                                            <div class="mb-3">
                                                                                                <label for="" class="form-label">
                                                                                                    <h4>Profile Title</h4>
                                                                                                </label>
                                                                                                <input type="text" name="profile_title" class="form-control" id="profiletitle">
                                                                                            </div>
                                                                                            <div class="mb-3">
                                                                                                <label for="" class="form-label">
                                                                                                    <h4>Account Selection</h4>
                                                                                                </label>
                                                                                                <input type="text" name="Account_selection" class="form-control" id="Accountselection">  

                          

                                                                                            </div>
                                                                                            <!-- Quill Editor Default -->
                                                                                            <label for="" class="form-label">
                                                                                                <h4>Profile Link</h4>
                                                                                            </label>
                                                                                            <input type="link" name="profile_link" placeholder="https://" class="form-control" id="profilelink">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" name="UpdateSocialLinkbutton" class="btn btn-primary">UpdateLink</button>
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
                <div class="modal fade" id="Addsociallink" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabels">Add Social Link</h5>
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
                                                            <h4>Profile Icon</h4>
                                                        </label>
                                                        <input type="file" name="profile_icon" class="form-control" id="profile_icon">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            <h4>Profile Title</h4>
                                                        </label>
                                                        <input type="text" name="profile_title" class="form-control" id="profiletitle">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            <h4>Account Selection</h4>
                                                        </label>
                                                        <input type="text" name="Account_selection" class="form-control" id="Accountselection">
                                                        <!-- <select name="" id="Account_selection" class="form-control" id="Accountselection"> 
                                                <option value="">Facebook</option> 
                                                <option value="">Instagram</option> 
                                                <option value="">Twitter</option> 
                                                <option value="">LinkdIN</option> 
                                                <option value="">Snapchat</option>   

                                            </select>  -->

                                                    </div>
                                                    <!-- Quill Editor Default -->
                                                    <label for="" class="form-label">
                                                        <h4>Profile Link</h4>
                                                    </label>
                                                    <input type="link" name="profile_link" placeholder="https://" class="form-control" id="profilelink">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="CreateLink" class="btn btn-primary">CreateLink</button>
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