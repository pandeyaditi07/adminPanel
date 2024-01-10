<?php
session_start();
include "../../config.php";


// UPDATE SLIDER DETAILS

if (isset($_POST['updateSlider'])) {
    $slider_id = $_POST['updateSlider'];
    $slider_Title = $_POST['slider_Title'];



    $SliderImage = $_FILES['slider_image']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES['slider_image']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["updateSlider"])) {
        $check = getimagesize($_FILES["slider_image"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    //create dir
    mkdir("uploads", 0777);

    // Check file size
    if ($_FILES["slider_image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["slider_image"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["slider_image"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }


    // $slider_image = $_POST['slider_image']; 

    $slider_description = $_POST['slider_description'];
    $slider_status = $_POST['slider_status'];

    $update_slider_query = "UPDATE sliders SET slider_Title='$slider_Title',slider_image='$slider_image', slider_description='$slider_description',slider_status='$slider_status' where slider_id='$slider_id'";
    $reponse = UPDATE($update_slider_query);
    if ($reponse == true) {
        header("Location: " . ROOT . "/app/sliders");
    } else {
        UPDATE($update_slider_query, true);
    }
}

// UPDATE END SLIDER DETAILS   




// UPDATE GALLERY START DETAILS

if (isset($_POST['updategallery'])) {
    $gallery_id = $_POST['updategallery'];
    $gallery_title = $_POST['gallery_title'];


    $galleryImage = $_FILES['gallery_images']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES['gallery_images']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["updategallery"])) {
        $check = getimagesize($_FILES["gallery_images"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    //create dir
    mkdir("uploads", 0777);

    // Check file size
    if ($_FILES["gallery_images"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["gallery_images"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["gallery_images"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }





    // $gallery_images = $_POST['gallery_images'];   
    $gallery_description = $_POST['gallery_description'];
    $gallery_status = $_POST['gallery_status'];

    $update_gallery_query = "UPDATE gallery SET gallery_title='$gallery_title', gallery_description='$gallery_description', gallery_status='$gallery_status' where gallery_id='$gallery_id'";
    $reponse = UPDATE($update_gallery_query);
    if ($reponse == true) {
        header("Location: " . ROOT . "/app/gallery");
    } else {
        UPDATE($update_gallery_query, true);
    }
}

// UPDATE GALLERY END DETAILS 

// UPDATE PAGES START HERE 

if (isset($_POST['updatepagesbutton'])) {
    $page_id = $_POST['updatepagesbutton'];
    $Page_Title = $_POST['Page_Title'];
    $page_image = $_POST['page_image'];
    $page_description = $_POST['page_description'];



    $update_Pages_query = "UPDATE pages SET Page_Title='$Page_Title',page_image='$page_image',page_description='$page_description'";
    $responce = UPDATE($update_Pages_query);
    if ($responce == true) {
        header("Location: " . ROOT . "/app/pages");
    } else {
        UPDATE($update_Pages_query, true);
    }
}
// UPDATE PAGES END HERE 


// UPDATE PRIMARY CONTACT DETAILS START HERE 

if (isset($_POST['updateContactDetails'])) {
    $primary_contact_num_id = $_POST['updateContactDetails'];
    $primary_contact_number = $_POST['primary_contact_number'];


    $update_contact_details_query = "UPDATE primary_contact_no SET primary_contact_number='$primary_contact_number'";
    $responce = UPDATE($update_contact_details_query);
    if ($responce == true) {
        header("Location: " . ROOT . "/app/primarycontact");
    } else {
        UPDATE($update_contact_details_query, true);
    }
}

// UPDATE PRIMARY CONTACT DETAILS END HERE  


// UPDATE COURSES DETAILS START HERE 

if (isset($_POST['updatecoursesdetailsbutton'])) {
    $course_id = $_POST['updatecoursesdetailsbutton'];
    $courses_subject = $_POST['courses_subject'];
    $courses_img = $_POST['courses_img'];
    $courses_fee_structure = $_POST['courses_fee_structure'];
    $courses_exam_fee = $_POST['courses_exam_fee'];
    $courses_duration = $_POST['courses_duration'];
    $Grand_Total = $_POST['Grand_Total'];
    $course_description = $_POST['course_description'];

    $update_courses_details_query = "UPDATE courses_fee SET courses_subject='$courses_subject',courses_img='$courses_img',courses_fee_structure='$courses_fee_structure',courses_exam_fee='$courses_exam_fee',courses_duration='$courses_duration',Grand_Total='$Grand_Total',course_description='$course_description'where course_id = '$course_id'";
    $responce = UPDATE($update_courses_details_query);
    if ($responce == true) {
        header("Location: " . ROOT . "/app/coursefee");
    } else {
        UPDATE($update_courses_details_query, true);
    }
}
// UPDATE COURSES DETAILS END HERE 



// UPDATE FACILITIES DETAILS START HERE 



if (isset($_POST['updatefacilitiesdetailsbutton'])) {
    $facilities_id = $_POST['updatefacilitiesdetailsbutton'];
    $facilities_title = $_POST['facilities_title'];
    $facilities_image = $_POST['facilities_image'];
    $facilities_description = $_POST['facilities_description'];

    $update_facility_details_query = "UPDATE facilitiess SET facilities_title='$facilities_title',facilities_image='$facilities_image',facilities_description='$facilities_description' where facilities_id = '$facilities_id'";
    $responce = UPDATE($update_facility_details_query);
    if ($responce == true) {
        header("Location: " . ROOT . "/app/facilities");
    } else {
        UPDATE($update_facility_details_query, true);
    }
}

// UPDATE FACILITIES DETAILS END HERE  


// UPDATE FACULTY DETAILS START HERE  

if (isset($_POST['updateFacultydetailsbutton'])) {
    $faculty_details_id = $_POST['updateFacultydetailsbutton'];
    $faculty_details_name = $_POST['faculty_details_name'];
    $faculty_details_image = $_POST['faculty_details_image'];
    $faculty_details_designation = $_POST['faculty_details_designation'];
    $faculty_details_NatureOfJob = $_POST['faculty_details_NatureOfJob'];
    $faculty_details_edu = $_POST['faculty_details_edu'];

    $update_faculty_details_query = "UPDATE faculty_details SET faculty_details_name='$faculty_details_name',faculty_details_image='$faculty_details_image',faculty_details_designation='$faculty_details_designation',faculty_details_NatureOfJob='$faculty_details_NatureOfJob',faculty_details_edu='$faculty_details_edu'  where faculty_details_id = '$faculty_details_id'";
    $responce = UPDATE($update_faculty_details_query);
    if ($responce == true) {
        header("Location: " . ROOT . "/app/facultydetails");
    } else {
        UPDATE($update_faculty_details_query, true);
    }
}

// UPDATE FACULTY DETAILS END HERE




// UPDATE FACULTY CONTACT SOCIAL LINK START HERE 




if (isset($_POST['updateFacultysocialLinkButton'])) {
    $faculty_contact_social_link_id = $_POST['updateFacultysocialLinkButton'];
    $faculty_id = $_POST['faculty_id'];
    $faculty_contact_socialLink_fb = $_POST['faculty_contact_socialLink_fb'];
    $faculty_contact_socialLink_insta = $_POST['faculty_contact_socialLink_insta'];
    $faculty_contact_socialLink_linkdin = $_POST['faculty_contact_socialLink_linkdin'];
    $faculty_contact_socialLink_twitter = $_POST['faculty_contact_socialLink_twitter'];

    $update_faculty_SocialLink_query = "UPDATE faculty_contact_social_link SET faculty_id='$faculty_id', faculty_contact_socialLink_fb='$faculty_contact_socialLink_fb',faculty_contact_socialLink_insta='$faculty_contact_socialLink_insta',faculty_contact_socialLink_linkdin='$faculty_contact_socialLink_linkdin',faculty_contact_socialLink_twitter='$faculty_contact_socialLink_twitter'  where faculty_contact_social_link_id = '$faculty_contact_social_link_id' where faculty_contact_social_link_id = '$faculty_contact_social_link_id'";
    $responce = UPDATE($update_faculty_SocialLink_query);
    if ($responce == true) {
        header("Location: " . ROOT . "/app/facultysociallink");
    } else {
        UPDATE($update_faculty_SocialLink_query, true);
    }
}
// UPDATE FACULTY CONTACT SOCIAL LINK END HERE  




// UPDATE CONTACT FORM START HERE 

if (isset($_POST['Updatecreatecontactformbutton'])) {
    $contact_id = $_POST['Updatecreatecontactformbutton'];
    $contact_name = $_POST['contact_name'];
    $contact_email = $_POST['contact_email'];
    $contact_phone = $_POST['contact_phone'];
    $contact_subject = $_POST['contact_subject'];
    $contact_message = $_POST['contact_message'];



    $update_faculty_ContactForm_query = "UPDATE contact_form SET contact_name='$contact_name',contact_email='$contact_email',contact_phone='$contact_phone',contact_subject='$contact_subject',contact_message='$contact_message' where contact_id = '$contact_id'";
    $responce = UPDATE($update_faculty_ContactForm_query);
    if ($responce == true) {
        header("Location: " . ROOT . "/app/contactus");
    } else {
        UPDATE($update_faculty_ContactForm_query, true);
    }
}


// UPDATE CONTACT FORM END HERE  


// UPDATE SOCIAL LINK START HERE 


if (isset($_POST['UpdateSocialLinkbutton'])) {
    $social_profile_id = $_POST['UpdateSocialLinkbutton'];
    $profile_icon = $_POST['profile_icon'];
    $profile_title = $_POST['profile_title'];
    $Account_selection = $_POST['Account_selection'];
    $profile_link = $_POST['profile_link'];

    $update_SocialLink_query = "UPDATE social_links SET profile_icon='$profile_icon',profile_title='$profile_title',Account_selection='$Account_selection',profile_link='$profile_link' where social_profile_id = '$social_profile_id'";
    $responce = UPDATE($update_SocialLink_query);
    if ($responce == true) {
        header("Location: " . ROOT . "/app/contactus");
    } else {
        UPDATE($update_SocialLink_query, true);
    }
}  

// UPDATE SOCIAL LINK END HERE  


// UPDATE WEBSITE SETTINGS START HERE 

if(isset($_POST['UpdateWebsiteInfoButton'])){ 
    $website_Information_value = $_POST['website_Information_value']; 

    $update_website_Info_query = "UPDATE INTO website_information SET website_Information_value='$website_Information_value'"; 
    
    $responce = UPDATE($update_website_Info_query); 

    if ($responce == true){
        header("Location: " . ROOT . "/app/websiteInformation"); 
    } else{
        UPDATE($update_website_Info_query, true); 
    }  
}

// UPDATE WEBSITE SETTINGS END HERE 
