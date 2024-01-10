<?php

session_start();
include "../../config.php";


// INSERT OPERATION OF SLIDER: 
if (isset($_POST['CreateSlider'])) {  
    $SliderTitle = $_POST['slider_Title']; 


    $SliderImage = $_FILES['slider_image']['name'];   
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES['slider_image']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["CreateSlider"])) {
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


    $SliderDescription = $_POST['slider_description'];
    $sliderstatus = $_POST['slider_status'];

    $slider_query = "INSERT INTO sliders (slider_Title,slider_image,slider_description,slider_status) VALUES ('$SliderTitle', '$SliderImage',   '$SliderDescription', ' $sliderstatus' )";
    $reponse = INSERT($slider_query);
    if ($reponse == true) {
        header("Location: " . ROOT . "/app/sliders");
    } else {
        INSERT($slider_query, true);
    }
} 
// INSERT OPERATION OF SLIDER END HERE 





// INSERT OPERATION OF GALLERY START HERE 

if (isset($_POST['Creategallery'])) {
    $galleryTitle = $_POST['gallery_title']; 


    $galleryImage = $_FILES['gallery_images']['name'];   
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES['gallery_images']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST[""])) {
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
    
    $galleryDescription = $_POST['gallery_description'];
    $gallerystatus = $_POST['gallery_status'];

    $gallery_query = "INSERT INTO gallery (gallery_title,gallery_images,gallery_description,gallery_status) VALUES ('$galleryTitle', '$galleryImage',   '$galleryDescription', ' $gallerystatus' )";
    $reponse = INSERT($gallery_query);
    if ($reponse == true) {
        header("Location: " . ROOT . "/app/gallery");
    } else {
        INSERT($gallery_query, true);  
    }
} 
// INSERT OPERATION OF GALLERY END HERE  



// INSERT OPERATION OF PAGES START HERE   

// if (isset($_POST['createpages'])) {
//     $galleryTitle = $_POST[''];
//     $galleryImage = $_FILES['gallery_images']['name'];


//     $target_dir = "uploads/";
//     $target_file = $target_dir . basename($_FILES['gallery_images']['name']);
//     $uploadOk = 1;
//     $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

//     // Check if image file is a actual image or fake image
//     if (isset($_POST[""])) {
//         $check = getimagesize($_FILES["gallery_images"]["tmp_name"]);
//         if ($check !== false) {
//             echo "File is an image - " . $check["mime"] . ".";
//             $uploadOk = 1;
//         } else {
//             echo "File is not an image.";
//             $uploadOk = 0;
//         }
//     }

//     //create dir
//     mkdir("uploads", 0777);

//     // Check file size
//     if ($_FILES["gallery_images"]["size"] > 500000) {
//         echo "Sorry, your file is too large.";
//         $uploadOk = 0;
//     }

//     // Allow certain file formats
//     if (
//         $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//         && $imageFileType != "gif"
//     ) {
//         echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//         $uploadOk = 0;
//     }

//     // Check if $uploadOk is set to 0 by an error
//     if ($uploadOk == 0) {
//         echo "Sorry, your file was not uploaded.";
//         // if everything is ok, try to upload file
//     } else {
//         if (move_uploaded_file($_FILES["gallery_images"]["tmp_name"], $target_file)) {
//             echo "The file " . htmlspecialchars(basename($_FILES["gallery_images"]["name"])) . " has been uploaded.";
//         } else {
//             echo "Sorry, there was an error uploading your file.";
//         }
//     }

//     // Check if file already exists
//     if (file_exists($target_file)) {
//         echo "Sorry, file already exists.";
//         $uploadOk = 0;
//     }
//     $galleryDescription = $_POST['gallery_description'];
//     $gallerystatus = $_POST['gallery_status'];

//     $gallery_query = "INSERT INTO gallery (gallery_title,gallery_images,gallery_description,gallery_status) VALUES ('$galleryTitle', '$galleryImage',   '$galleryDescription', ' $gallerystatus' )";
//     $reponse = INSERT($gallery_query);
//     if ($reponse == true) {
//         header("Location: " . ROOT . "/app/gallery");
//     } else {
//         INSERT($gallery_query, true);  
//     }
// } 

// INSERT OPERATION OF PAGES END HERE



// INSERT OPERATION OF PRIMARY CONTACT START HERE 

if (isset($_POST['PrimaryContactDetails'])) {   
    $primary_contact_number = $_POST['primary_contact_number']; 

    $primaryContactDetails = "INSERT INTO primary_contact_no (primary_contact_number) VALUES ('$primary_contact_number')"; 
    $responce = INSERT($primaryContactDetails); 
    if($responce == true){
        header("Location: " . ROOT . "/app/primarycontact"); 

    } else{ 
        INSERT($primaryContactDetails , true); 

    }   
} 
// INSERT OPERATION OF PRIMARY CONTACT END HERE 


// INSERT OPERATION OF COURSES FEE START HERE 

if (isset($_POST['CreateCourseFee'])) {   
    $courses_subject = $_POST['courses_subject'];    
    
    
    $courses_img = $_FILES['courses_img']['name'];   
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES['courses_img']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["CreateCourseFee"])) {
        $check = getimagesize($_FILES["courses_img"]["tmp_name"]);
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
    if ($_FILES["courses_img"]["size"] > 500000) {
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
        if (move_uploaded_file($_FILES["courses_img"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["courses_img"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }  
    
    
    $course_description = $_POST['course_description'];   
    $courses_fee_structure = $_POST['courses_fee_structure']; 
    $courses_exam_fee = $_POST['courses_exam_fee']; 
    $courses_duration = $_POST['courses_duration']; 
    $Grand_Total = $_POST['Grand_Total'];  
    

    $coursesfee = "INSERT INTO courses_fee (courses_subject,courses_img, course_description,courses_fee_structure,courses_exam_fee,courses_duration,Grand_Total) VALUES ('$courses_subject', '$courses_img','$course_description', '$courses_fee_structure', '$courses_exam_fee','$courses_duration','$Grand_Total')"; 
    $responce = INSERT($coursesfee); 
    if($responce == true){
        header("Location: " . ROOT . "/app/coursefee"); 

    } else{ 
        INSERT($primaryContactDetails , true); 

    }   
} 

// INSERT OPERATION OF COURSES FEE END HERE 



// INSERT OPERATION OF PAGES START HERE 

if (isset($_POST['createpages'])) {    
    $Page_Title = $_POST['Page_Title']; 
    // $page_image = $_POST['page_image']; 


    $page_image = $_FILES['page_image']['name'];   
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES['page_image']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["createpages"])) {
        $check = getimagesize($_FILES["page_image"]["tmp_name"]);
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
    if ($_FILES["page_image"]["size"] > 500000) {
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
        if (move_uploaded_file($_FILES["page_image"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["courses_img"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }  

    $page_description = $_POST['page_description'];   
 
  $pages = "INSERT INTO pages (Page_Title,page_image,page_description) VALUES ('$Page_Title', '$page_image','$page_description')"; 
    $responce = INSERT($pages);  
    if($responce == true){
        header("Location: " . ROOT . "/app/pages"); 

    } else{ 
        INSERT($pages , true); 

    }   
} 

// INSERT OPERATION OF PAGES END HERE 


// INSERT FACILITIES START HERE 


if (isset($_POST['createfacility'])) {    
    $facilities_title = $_POST['facilities_title']; 
  
    $facilities_image = $_FILES['facilities_image']['name'];   
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES['facilities_image']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["createfacility"])) {  
        $check = getimagesize($_FILES["facilities_image"]["tmp_name"]);
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
    if ($_FILES["facilities_image"]["size"] > 500000) {
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
        if (move_uploaded_file($_FILES["facilities_image"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["facilities_image"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }  

    $facilities_description = $_POST['facilities_description'];   
 
  $facilityUser = "INSERT INTO facilitiess (facilities_title,facilities_image,facilities_description) VALUES ('$facilities_title', '$facilities_image','$facilities_description')"; 
    $responce = INSERT($facilityUser);  
    if($responce == true){
        header("Location: " . ROOT . "/app/facilities"); 

    } else{ 
        INSERT($pages , true); 

    }   
} 


// INSERT FACILITIES END HERE  



// INSERT FACULTY DETAILS START HERE 

if (isset($_POST['createFacultyDetails'])) {    
    // $faculty_id = $_POST['faculty_id'];    
    $faculty_details_name = $_POST['faculty_details_name']; 
  
    $faculty_details_image = $_FILES['faculty_details_image']['name'];   
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES['faculty_details_image']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["createFacultyDetails"])) {  
        $check = getimagesize($_FILES["faculty_details_image"]["tmp_name"]);
        // $check = getimagesize($_FILES["faculty_details_image"]["tmp_name"]);   
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
    if ($_FILES["faculty_details_image"]["size"] > 500000) {
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
        if (move_uploaded_file($_FILES["faculty_details_image"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["faculty_details_image"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }  

 
    $faculty_details_designation = $_POST['faculty_details_designation'];    
    $faculty_details_NatureOfJob = $_POST['faculty_details_NatureOfJob']; 
    $faculty_details_edu = $_POST['faculty_details_edu']; 
 
  $facilityUser = "INSERT INTO faculty_details (faculty_details_name,faculty_details_image,faculty_details_designation,faculty_details_NatureOfJob,faculty_details_edu) VALUES ('$faculty_details_name', '$faculty_details_image','$faculty_details_designation','$faculty_details_NatureOfJob','$faculty_details_edu')"; 
    $responce = INSERT($facilityUser);  
    if($responce == true){
        header("Location: " . ROOT . "/app/facultydetails"); 

    } else{ 
        INSERT($pages , true); 

    }   
} 

// INSERT FACULTY DETAILS END HERE 



// INSERT CONTACT US FORM START HERE 

if(isset($_POST['CreateContact'])){
    $contact_name = $_POST['contact_name']; 
    $contact_email = $_POST['contact_email']; 
    $contact_phone = $_POST['contact_phone']; 
    $contact_subject = $_POST['contact_subject']; 
    $contact_message = $_POST['contact_message']; 


    $contactquery = "INSERT INTO contact_form (contact_name,contact_email,contact_phone,contact_subject,contact_message) VALUES ('$contact_name', '$contact_email', '$contact_phone','$contact_subject','$contact_message')"; 
    $responce = INSERT($contactquery); 
    if($responce == true){
        header("Location: " . ROOT . "/app/contactus"); 
    } else{ 
        INSERT($pages , true); 

    }
}


// INSERT CONTACT US FORM END HERE  



// INSERT SOCIAL LINK START HERE  
if(isset($_POST['CreateLink'])){
    $profile_title = $_POST['profile_title']; 
    $profile_icon = $_POST['profile_icon'];
    $Account_selection = $_POST['Account_selection']; 
    $profile_link = $_POST['profile_link']; 

    $querySocialLink = "INSERT INTO social_links (profile_title,profile_icon,Account_selection,profile_link) VALUES ('$profile_title','$profile_icon','$Account_selection', '$profile_link' )"; 
    $reponse = INSERT($querySocialLink); 
    if($reponse == true){
        header("LOcation:" . ROOT . "/app/sociallink"); 
    } else{
        INSERT($page, true); 
    }
}




// INSERT SOCIAL LINK END HERE  







// INSERT INTO FACULTY SOCIAL LINK START HERE 


if(isset($_POST['CreateFacultySocialLink'])){ 
    $faculty_id = $_POST['faculty_id']; 
    $faculty_contact_socialLink_fb = $_POST['faculty_contact_socialLink_fb']; 
    $faculty_contact_socialLink_insta = $_POST['faculty_contact_socialLink_insta']; 
    $faculty_contact_socialLink_linkdin = $_POST['faculty_contact_socialLink_linkdin']; 
    $faculty_contact_socialLink_twitter = $_POST['faculty_contact_socialLink_twitter']; 

    $FacultySocialLinkQuery = "INSERT INTO faculty_contact_social_link (faculty_id,faculty_contact_socialLink_fb,faculty_contact_socialLink_insta,faculty_contact_socialLink_linkdin,faculty_contact_socialLink_twitter) VALUES ('$faculty_id', '$faculty_contact_socialLink_fb', '$faculty_contact_socialLink_insta', '$faculty_contact_socialLink_linkdin','$faculty_contact_socialLink_twitter')"; 
    $reponse = INSERT($FacultySocialLinkQuery); 
    if($reponse == true){
        header("LOcation:" . ROOT . "/app/facultysociallink"); 
    } else{
        INSERT($page, true); 
    }


}

// INSERT INTO FACULTY SOCIAL LINK END HERE   




// INSERT INTO COURSES OFFERED START HERE 


if (isset($_POST['createCoursesOffered'])) {  
    $courses_offered_id = $_POST['courses_offered_id'];
    $courses_offered_title = $_POST['courses_offered_title']; 

    $courses_offered_images = $_FILES['courses_offered_images']['name'];   
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES['courses_offered_images']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["createCoursesOffered"])) {
        $check = getimagesize($_FILES["courses_offered_images"]["tmp_name"]);
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
    if ($_FILES["courses_offered_images"]["size"] > 500000) {
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
        if (move_uploaded_file($_FILES["courses_offered_images"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["courses_offered_images"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }  


    $courses_offered_description = $_POST['courses_offered_description'];  
  

    $CoursesOffered_query = "INSERT INTO courses_offered (courses_offered_id,courses_offered_title,courses_offered_images,courses_offered_description) VALUES ('$courses_offered_id','$courses_offered_title', '$courses_offered_images',   '$courses_offered_description' )";
    $reponse = INSERT($CoursesOffered_query);
    if ($reponse == true) {
        header("Location: " . ROOT . "/app/coursesOffered");
    } else {
        INSERT($CoursesOffered_query, true);
    }
} 







// INSERT INTO COURSES OFFERED END HERE


