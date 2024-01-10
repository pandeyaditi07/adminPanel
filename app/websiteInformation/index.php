<?php
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
            </nav>
        </div>

        <section class="section dashboard"> 
            <tbody> 

                <tr> 
                <div class="row"> 
                    <div class="col-md-3"> 
                          <input type="text" name="Data" value="APP_NAME" class="form-control" readonly placeholder="App_Name"> 
                    </div> 
                    <div class="col-md-7"> 
                          <input type="text" name="website_Information_value" value="" class="form-control" placeholder="llrm"> 
                    </div> 
                    <div class="col-md-2"> 
                        <button name="update" class="form-control" name="UpdateWebsiteInfoButton" style="background-color: rgb(37,154,63);" value="Update" id="AppName">Update</button>

                    </div>
                </div> 
                </tr> 

             
                <div class="row mt-3"> 
                    <div class="col-md-3"> 
                          <input type="text" name="" value="APP_VERSION" class="form-control" readonly placeholder="App_Name"> 
                    </div> 
                    <div class="col-md-7"> 
                          <input type="text" name="website_Information_value" value="" class="form-control" placeholder=""> 
                    </div> 
                    <div class="col-md-2"> 
                        <button name="update" class="form-control"  name="UpdateWebsiteInfoButton" style="background-color: rgb(37,154,63);" value="Update" id="AppVersion" >Update</button>

                    </div>
                </div> 
               

           
                <div class="row  mt-3"> 
                    <div class="col-md-3"> 
                          <input type="text" name="" value="DOMAIN" class="form-control" readonly placeholder="App_Name"> 
                    </div> 
                    <div class="col-md-7"> 
                          <input type="text" name="website_Information_value" value="" class="form-control" placeholder=""> 
                    </div> 
                    <div class="col-md-2"> 
                        <button name="update" class="form-control"  name="UpdateWebsiteInfoButton" style="background-color: rgb(37,154,63);" value="Update" id="Domain" >Update</button>

                    </div>
                </div> 
              

             
                <div class="row  mt-3"> 
                    <div class="col-md-3"> 
                          <input type="text" name="" value="DEV_NAME" class="form-control" readonly placeholder="App_Name"> 
                    </div> 
                    <div class="col-md-7"> 
                          <input type="text" name="website_Information_value" value="" class="form-control" placeholder=""> 
                    </div> 
                    <div class="col-md-2"> 
                        <button name="update" class="form-control"  name="UpdateWebsiteInfoButton" style="background-color: rgb(37,154,63);" value="Update" id="DevName">Update</button>

                    </div>
                </div> 
        

         
                <div class="row  mt-3"> 
                    <div class="col-md-3"> 
                          <input type="text" name="" value="APP_PHONE" class="form-control" readonly placeholder="App_Name"> 
                    </div> 
                    <div class="col-md-7"> 
                          <input type="text" name="website_Information_value" value="" class="form-control" placeholder=""> 
                    </div> 
                    <div class="col-md-2"> 
                        <button name="update" class="form-control"  name="UpdateWebsiteInfoButton" style="background-color: rgb(37,154,63);" value="Update" id="AppPhone">Update</button>

                    </div>
                </div> 
           

          
                <div class="row  mt-3"> 
                    <div class="col-md-3"> 
                          <input type="text" name="" value="APP_MAIL_ID" class="form-control" readonly placeholder="App_Name"> 
                    </div> 
                    <div class="col-md-7"> 
                          <input type="text" name="website_Information_value" value="" class="form-control" placeholder=""> 
                    </div> 
                    <div class="col-md-2"> 
                        <button name="update" class="form-control"  name="UpdateWebsiteInfoButton" style="background-color: rgb(37,154,63);" value="Update" id="AppMailId">Update</button>

                    </div>
                </div> 
            

                <div class="row  mt-3"> 
                    <div class="col-md-3"> 
                          <input type="text" name="" value="SENDER_MAIL" class="form-control" readonly placeholder="App_Name"> 
                    </div> 
                    <div class="col-md-7"> 
                          <input type="text" name="website_Information_value" value="" class="form-control" placeholder=""> 
                    </div> 
                    <div class="col-md-2"> 
                        <button name="update" class="form-control"  name="UpdateWebsiteInfoButton" style="background-color: rgb(37,154,63);" value="Update" id="SenderMail">Update</button>

                    </div>
                </div> 
           

        
                <div class="row  mt-3"> 
                    <div class="col-md-3"> 
                          <input type="text" name="" value="RECEIVER_MAIL" class="form-control" readonly placeholder="App_Name"> 
                    </div> 
                    <div class="col-md-7"> 
                          <input type="text" name="website_Information_value" value="" class="form-control" placeholder=""> 
                    </div> 
                    <div class="col-md-2"> 
                        <button name="update" class="form-control"  name="UpdateWebsiteInfoButton" style="background-color: rgb(37,154,63);" value="Update" id="ReceiverMail" >Update</button>

                    </div>
                </div> 
             

             
                <div class="row  mt-3"> 
                    <div class="col-md-3"> 
                          <input type="text" name="" value="APP_ADDRESS" class="form-control" readonly placeholder="App_Name"> 
                    </div> 
                    <div class="col-md-7"> 
                          <input type="text" name="website_Information_value" value="" class="form-control" placeholder=""> 
                    </div> 
                    <div class="col-md-2"> 
                        <button name="update" class="form-control"  name="UpdateWebsiteInfoButton" style="background-color: rgb(37,154,63);" value="Update" id="AppAddress">Update</button>

                    </div>
                </div> 
              

           
                <div class="row  mt-3"> 
                    <div class="col-md-3"> 
                          <input type="text" name="" value="MAP_LINK" class="form-control" readonly placeholder="App_Name"> 
                    </div> 
                    <div class="col-md-7"> 
                          <input type="text" name="website_Information_value" value="" class="form-control" placeholder=""> 
                    </div> 
                    <div class="col-md-2"> 
                        <button name="update" class="form-control"  name="UpdateWebsiteInfoButton" style="background-color: rgb(37,154,63);" value="Update" id="MapLink">Update</button>

                    </div>
                </div> 

                <div class="row  mt-3"> 
                    <div class="col-md-3"> 
                          <input type="text" name="" value="DOWNLOAD_APP_LINK" class="form-control" readonly placeholder="App_Name"> 
                    </div> 
                    <div class="col-md-7"> 
                          <input type="text" name="website_Information_value" value="" class="form-control" placeholder=""> 
                    </div> 
                    <div class="col-md-2"> 
                        <button name="update" class="form-control"  name="UpdateWebsiteInfoButton" style="background-color: rgb(37,154,63);" value="Update" id="DownloadAppLink" >Update</button>

                    </div>
                </div> 

                <div class="row  mt-3"> 
                    <div class="col-md-3"> 
                          <input type="text" name="" value="APP_LOGO" class="form-control" readonly placeholder="App_Name"> 
                    </div> 
                    <div class="col-md-7"> 
                          <input type="text" name="website_Information_value" value="" class="form-control" placeholder=""> 
                    </div> 
                    <div class="col-md-2"> 
                        <button name="update" class="form-control"  name="UpdateWebsiteInfoButton" style="background-color: rgb(37,154,63);" value="Update" id="AppLogo" >Update</button>

                    </div>
                </div> 

                <div class="row  mt-3"> 
                    <div class="col-md-3"> 
                          <input type="text" name="" value="META_DESCRIPTION" class="form-control" readonly placeholder="App_Name"> 
                    </div> 
                    <div class="col-md-7"> 
                          <input type="text" name="website_Information_value" value="" class="form-control" placeholder=""> 
                    </div> 
                    <div class="col-md-2"> 
                        <button name="update" class="form-control"  name="UpdateWebsiteInfoButton" style="background-color: rgb(37,154,63);" value="Update" id="MetaDescription" >Update</button>

                    </div>
                </div> 

                <div class="row  mt-3"> 
                    <div class="col-md-3"> 
                          <input type="text" name="" value="META_KEYWORDS" class="form-control" readonly placeholder="App_Name"> 
                    </div> 
                    <div class="col-md-7"> 
                          <input type="text" name="website_Information_value" value="" class="form-control" placeholder=""> 
                    </div> 
                    <div class="col-md-2"> 
                        <button name="update" class="form-control"  name="UpdateWebsiteInfoButton" style="background-color: rgb(37,154,63);" value="Update" id="MetaKeywords" >Update</button>

                    </div>
                </div> 

            
                </div> 
       



                
            </tbody>





        
        </section>
    </main>


    <!-- Button trigger modal -->  

    <!-- website Information form End here:  -->

   

 








    <script src="../../assets/./vendor/./quill/quill.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>