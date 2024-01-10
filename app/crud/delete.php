<?php
include "../../config.php"; 


// DELETE SLIDER DETAILS START HERE: 

if (isset($_POST['cate_delete_btn'])) {
   $delete_record_id = $_POST['cate_delete_btn'];
   $query_delete = "DELETE FROM sliders WHERE slider_id='$delete_record_id'";
   $query_run = mysqli_query($conn, $query_delete);
   if ($query_run == true) {
      header("Location: " . ROOT . "/app/sliders");
   } else {
      header("Location: " . ROOT . "/app/sliders");
   }
} 

// DELETE SLIDER DETAILS END HERE: 



// DELETE GALLERY DETAILS START HERE: 
if (isset($_POST['gallery_delete_btn'])) {
   $delete_record_id = $_POST['gallery_delete_btn'];
   $query_delete = "DELETE FROM gallery WHERE gallery_id='$delete_record_id'";
   $query_run = mysqli_query($conn, $query_delete);
   if ($query_run == true) {
      header("Location: " . ROOT . "/app/gallery");
   } else {
      header("Location: " . ROOT . "/app/gallery");  
   }
}

// DELETE GALLERY DETAILS END HERE: 


// DELETE PAGES START HERE 

if (isset($_POST['Page_delete_btn'])) {
   $delete_record_id = $_POST['Page_delete_btn'];
   $query_delete = "DELETE FROM pages WHERE page_id='$delete_record_id'";
   $query_run = mysqli_query($conn, $query_delete);
   if ($query_run == true) {
      header("Location: " . ROOT . "/app/pages");
   } else {
      header("Location: " . ROOT . "/app/pages");  
   }
}

// DELETE PAGES END HERE 


// DELETE PRIMARY CONTACT START HERE 

if (isset($_POST['primaryContact_delete_btn'])) {
   $delete_record_id = $_POST['primaryContact_delete_btn'];
   $query_delete = "DELETE FROM primary_contact_no WHERE primary_contact_num_id='$delete_record_id'";
   $query_run = mysqli_query($conn, $query_delete);
   if ($query_run == true) {
      header("Location: " . ROOT . "/app/primarycontact");
   } else {
      header("Location: " . ROOT . "/app/primarycontact");  
   }
}

// DELETE PRIMARY CONTACT END HERE 


// DELETE COURSES DETAILS START HERE 

if (isset($_POST['courses_delete_btn'])) {
   $delete_record_id = $_POST['courses_delete_btn'];
   $query_delete = "DELETE FROM courses_fee WHERE course_id='$delete_record_id'";
   $query_run = mysqli_query($conn, $query_delete);
   if ($query_run == true) {
      header("Location: " . ROOT . "/app/coursefee");
   } else {
      header("Location: " . ROOT . "/app/coursefee");  
   }
}

// DELETE COURSES DETAILS END HERE 


// DELETE FACILITIES  START HERE  

if (isset($_POST['Facilities_delete_btn'])) {
   $delete_record_id = $_POST['Facilities_delete_btn'];
   $query_delete = "DELETE FROM facilitiess WHERE facilities_id='$delete_record_id'";
   $query_run = mysqli_query($conn, $query_delete);
   if ($query_run == true) {
      header("Location: " . ROOT . "/app/facilities");
   } else {
      header("Location: " . ROOT . "/app/facilities");  
   }
}

// DELETE FACILITIES END HERE 


// DELETE FACULTY DETAILS START HERE 

if (isset($_POST['facultyDetails_delete_btn'])) {
   $delete_record_id = $_POST['facultyDetails_delete_btn'];
   $query_delete = "DELETE FROM faculty_details WHERE faculty_details_id='$delete_record_id'";
   $query_run = mysqli_query($conn, $query_delete);
   if ($query_run == true) {
      header("Location: " . ROOT . "/app/facultydetails");
   } else {
      header("Location: " . ROOT . "/app/facultydetails");  
   }
}

// DELETE FACULTY DETAILS END HERE 



// DELETE FACULTY CONTACT SOCIAL LINK START HERE 

if (isset($_POST['facultySocialLink_delete_btn'])) {
   $delete_record_id = $_POST['facultySocialLink_delete_btn'];
   $query_delete = "DELETE FROM faculty_contact_social_link WHERE faculty_contact_social_link_id='$delete_record_id'";
   $query_run = mysqli_query($conn, $query_delete);
   if ($query_run == true) {
      header("Location: " . ROOT . "/app/facultysociallink");
   } else {
      header("Location: " . ROOT . "/app/facultysociallink");  
   }
}

// DELETE FACULTY CONTACT SOCIAL LINK END HERE 





//DELETE CONTACT US FORM START HERE  

if (isset($_POST['contactUsForm_delete_btn'])) {
   $delete_record_id = $_POST['contactUsForm_delete_btn'];
   $query_delete = "DELETE FROM contact_form WHERE contact_id='$delete_record_id'";
   $query_run = mysqli_query($conn, $query_delete);
   if ($query_run == true) {
      header("Location: " . ROOT . "/app/contactus");
   } else {
      header("Location: " . ROOT . "/app/contactus");  
   }
}

// DELETE CONTACT US FORM END HERE  



// DELETE SOCIAL LINK START HERE  

if (isset($_POST['SocialLink_delete_btn'])) {
   $delete_record_id = $_POST['SocialLink_delete_btn'];
   $query_delete = "DELETE FROM social_links WHERE social_profile_id='$delete_record_id'";
   $query_run = mysqli_query($conn, $query_delete);
   if ($query_run == true) {
      header("Location: " . ROOT . "/app/sociallink");
   } else {
      header("Location: " . ROOT . "/app/sociallink");  
   }
}



// DELETE SOCIAL LINK END HERE 


// DELETE COURSES OFFERED START HERE  

if (isset($_POST['CoursesOffeedDeletebtn'])) {
   $delete_record_id = $_POST['CoursesOffeedDeletebtn'];
   $query_delete = "DELETE FROM courses_offered WHERE courses_offered_id='$delete_record_id'";
   $query_run = mysqli_query($conn, $query_delete);
   if ($query_run == true) {
      header("Location: " . ROOT . "/app/coursesOffered");
   } else {
      header("Location: " . ROOT . "/app/coursesOffered");  
   }
}







// DELETE COURSES OFFERED END HERE
