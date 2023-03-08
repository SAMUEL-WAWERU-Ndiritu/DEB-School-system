<?php  include('./app/includes/header.php')?>
<?php include('./app/includes/servernavbar.php')?>
<?php include('./admin.php')?>
<?php include("./controllers/connect.php")?>





<div class="col-md-10 ">


                <div class="view_body bg-secondary">
                    <div class="view_body_header my-2">
                        <h4 class="text-left text-dark my-2">Applicants Academic Details</h4>
                    </div>

                    <div class="view_body_body bg-light my-2">
                     
                      <div class="bg-light">
                      <?php



                                  $sql = "SELECT academic_details.id, academic_details.institution_name,academic_details.institution_postal, academic_details.institution_tel,academic_details.admission_no,academic_details.faculty_name, academic_details.course_name,academic_details.perfomance_status,academic_details.annual_fees, academic_details.current_term_fees, academic_details.next_term_fees,academic_details.death_certificate
                                  ,personal_details.full_name FROM academic_details  INNER JOIN personal_details on academic_details.id=personal_details.id";
                                  $stmt = $conn->prepare($sql);
                                  $stmt->execute(); 
                            ?>
                     <div class="d-flex">
                            <p> <button onclick="window.printpart()">Print this page</button></p>
                          
                           <p > <form action="./csv/academic_csv.php" method="post">
                              <button type="submit" name="submit"class="btn btn-sm btn-primary text-white">EXPORT TO CSV</button>
                            </form></p>
                            </div>
                            

                            <div id="top_print">
                          <table class="table table-striped  table-responsive table-condensed table-hover table-bordered" id="table" style="width:25%">
                         
                              <tr>
                                  <th>id</th>
                                  <th>Full Name</th>
                                  <th>Institution Name</th>
                                  <th>Institution Postal Adress</th>
                                  <th>Institution Tell No</th>
                                  <th>Admission Number</th>
                                  <th>Faculty Name</th>
                                  <th>Course Name</th>
                                  <th>Perfomance Status</th>
                                  <th>Annual Fees</th>
                                  <th>This Semester Fees/Term Fees:</th>
                                  <th>Next Term Fees/Semester Fees:</th>
                                  <th>Status of Death certificate</th>
                                  
                                  

                             </tr>
                                <?php
                                 $result= mysqli_stmt_get_result($stmt);
                                 $num= mysqli_num_rows($result);
                                 if($num > 0){
                                      while($rows=mysqli_fetch_assoc($result)){?>
                                        <tr>
                                        <td><?php echo $rows['id']?></td>
                                        <td><?php echo $rows['full_name']?></td>
                                        <td><?php echo $rows['institution_name']?></td>
                                        <td><?php echo $rows['institution_postal']?></td>
                                        <td><?php echo $rows['institution_tel']?></td>
                                        <td><?php echo $rows['admission_no']?></td>
                                        <td><?php echo $rows['faculty_name']?></td>
                                        <td><?php echo $rows['course_name']?></td>
                                        <td><?php echo $rows['perfomance_status']?></td>
                                        <td><?php echo $rows['annual_fees']?></td>
                                        <td><?php echo $rows['current_term_fees']?></td>
                                        <td><?php echo $rows['next_term_fees']?></td>
                                        <td><?php echo $rows['death_certificate']?></td>
                                    
                                        

                                       
                                      
                                    </tr>
                                    <?php
                                    }
 
                                 }else{
                                     header('location:manageUsers.php?error=norecord');
                                     exit();
                                 }
                                 
                                ?>
                               
                            </table>
                                </div>
                      </div>

                    
                    </div>
  </div>       
 </div>

 <script>
    function printpart () {
      var printwin = window.open("");
      printwin.document.write(document.getElementById("top_print").innerHTML);
      printwin.stop();
      printwin.print();
      printwin.close();
    }
       </script>

 <?php include('./adminfooter.php')?>

   
