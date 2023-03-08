<?php
include('connect.php');

if(isset($_POST['submit'])){

 function test_input($data){
     $data = trim($data);
     $data=  stripslashes($data);
     $data= htmlspecialchars($data);
     return($data);
 }
#personal details
 $name = test_input($_POST['full_name']);
 $date_of_birth= test_input($_POST['date_of_birth']);
 $id_number = test_input($_POST['id_number']);
 $sex = test_input($_POST['sex']);
 $ethnicity = test_input($_POST['ethnicity']);
 $county = test_input($_POST['county']);
 $division = test_input($_POST['division']);
 $ward= test_input($_POST['ward']);
 $email = test_input($_POST['email']);
 $tel = test_input($_POST['tel']);
 $disability = test_input($_POST['disability']);
  # academic details

  $institution_name = test_input($_POST['institution_name']);
  $institution_postal = test_input($_POST['institution_postal']);
  $institution_tel= test_input($_POST['institution_tel']);
  $admission_no = test_input($_POST['admission_no']);
  $faculty_name = test_input($_POST['faculty_name']);
  $course_name = test_input($_POST['course_name']);
  $perfomance_status = test_input($_POST['perfomance_status']);
  $annual_fees= test_input($_POST['annual_fees']);
  $current_term_fees = test_input($_POST['current_term_fees']);
  $next_term_fees = test_input($_POST['next_term_fees']);

  # perent info

  $father_name = test_input($_POST['father_name']);
  $father_tel= test_input($_POST['father_tel']);
  $mother_name = test_input($_POST['mother_name']);
  $mother_tel= test_input($_POST['mother_tel']);
  $gurdian_name = test_input($_POST['gurdian_name']);
  $gurdian_tel= test_input($_POST['gurdian_tel']);
  $death_certificate = test_input($_POST['death_certificate']);
 


  
  
 


 if(empty($name) || empty($date_of_birth) || empty($id_number) || empty($sex) || empty($ethnicity) || empty($county) || empty($division) || empty($ward) || empty($email) || empty($tel)||empty($disability) || empty($institution_name) || empty($institution_postal) || empty($institution_tel) || empty($admission_no) || empty($faculty_name) || empty($course_name) || empty($perfomance_status) || empty($annual_fees) || empty($current_term_fees) || empty($next_term_fees)){

     $error= "Kindly input all the fields";
     header("location:job_application.php?error=emptyfields");   

 }else{  

    $sql =  "INSERT INTO personal_details( full_name, date_of_birth, id_number, sex, ethnicity, county, division, ward, email, tel, disability) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    $sql_1 = "INSERT INTO academic_details(institution_name, institution_postal, institution_tel, admission_no, faculty_name, course_name, perfomance_status, annual_fees, current_term_fees,next_term_fees, father_name, father_tel, mother_tel, gurdian_name, gurdian_tel, death_certificate, time_stamp) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";


    $stmt_1= $conn->prepare($sql);
    $stmt_2 = $conn->prepare($sql_1 );
    
       $stmt_1->bind_param('sssssssssss',$name,$date_of_birth,$id_number,$sex,$ethnicity,$county,$division,$ward,$email,$tel,$disability);
       $stmt_2->bind_param('sssssssssssssssss',$institution_name,$institution_postal,$institution_tel,$admission_no,$faculty_name,$course_name,$perfomance_status,$annual_fees,$current_term_fees,$next_term_fees,$father_name,$father_tel,$mother_name, $mother_tel, $gurdian_name,$gurdian_tel,$death_certificate);
       $stmt_1->execute();
       $stmt_2->execute();
       
    
  
   
    }
 }





?>