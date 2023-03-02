
  <?php 
      include 'conn.php';
     $student_id = '';
     if($_GET['message']==1)
{ ?>
<div class="alert alert-success" role="alert">
  Submission Done!!!
</div>

<?php }

     
     if(isset($_GET['id']))
       {$student_id = $_GET['id'];
       // session_start();

       // if (!isset($_SESSION['user'])) {
        //  header('Location: adminlogin.php');
      

    // Get student details for the id requested
     $student_fetch_query = "select * from student where student_id =$student_id ";

     // Run the query
     $result_student= mysqli_query($conn,$student_fetch_query);
     $student_array = mysqli_fetch_array($result_student);

    // Get student details for the id requested
    $student_facility_fetch_query = "select * from student_facility where student_id =$student_id ";

    // Run the query
    $result_student_facility= mysqli_query($conn,$student_facility_fetch_query);
    
       }
       
   
    
     $sql1='select * from facility_id';
     $result1 = mysqli_query($conn,$sql1);
     include 'header.php';

  ?>
 
        <br>
        <div class="container" style="back">
          <nav class="navbar navbar-expand-lg navbar-light bg-light wrapper">

              <div class="row">
                
                  <h2><u>REGISTRATION-FORM</u></h2>  
                
              </div>
        </div>
        <br>
        
        <form
        enctype="multipart/form-data"
        class="well form-horizontal studentRegistration bv-form"
        action="<?php
        if(isset($_GET["id"])){
          echo "updatestudents.php" ;
          }
        else
        {
          echo "addstudents.php";
        }?>"
        method="post"
        id="contact_form"
        >
        <?php
           if(isset($_GET["id"])){
            echo '<input type="hidden" name="student_id" value='.$student_id.'>';
           }
           ?>

        <div class="container">
              <div class="input-group mb-3">
                <label for="student-first-name" class="col-sm-2 col-form-label">First Name</label>
                <div class="input-group-prepend">
                <span class="input-group-text" ><span class="material-symbols-outlined">person</span></span>
                </div>
                <input type="text" class="form-control" id="student-first-name" placeholder="First Name" name="firstname" aria-label="First Name" aria-describedby="basic-addon1" required value="<?php 
                if (is_numeric($student_id)) echo $student_array['firstname'];
                ?>"/>
              
                <label for="student-last-name" class="col-sm-2 col-form-label">Last Name</label>
                <div class="input-group-prepend">
                <span class="input-group-text" id="student-last-name"><span class="material-symbols-outlined">person</span></span>
                </div>
                <input type="text" class="form-control" placeholder="Last Name" id="student-last-name" name="lastname" aria-label="Last Name" aria-describedby="basic-addon1" required value="<?php 
                if (is_numeric($student_id)) echo $student_array['lastname'];
                ?>" />
              </div>
              <div class="input-group mb-3">
                <label for="father-name" class="col-sm-2 col-form-label">Father's Name</label>
                <div class="input-group-prepend">
                <span class="input-group-text" id="father-name"><span class="material-symbols-outlined">person</span></span>
                </div>
                <input type="text" class="form-control" placeholder="Father's Name" id="father-name" name="fathername"aria-label="Father's Name" aria-describedby="basic-addon1" required value="<?php 
                if (is_numeric($student_id)) echo $student_array['fathersname'];
                ?>" />
              
                <label for="mother-name" class="col-sm-2 col-form-label">Mother's Name</label>
                <div class="input-group-prepend">
                <span class="input-group-text" id="mother-name"><span class="material-symbols-outlined">person</span></span>
                </div>
                <input type="text" class="form-control" placeholder="Mother's Name" id="mother-name" name="mothername" aria-label="Mother's Name" aria-describedby="basic-addon1" required value="<?php 
                if (is_numeric($student_id)) echo $student_array['mothersname'];
                ?>"/>
              </div>
              <div class="input-group mb-3">
                <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                <?php
                $selected_male=''; $male_focus='';
                $selected_other=''; $other_focus='';
                $selected_female=''; $female_focus='';
                  if (is_numeric($student_id)) {
                      if ($student_array['gender'] == 'male') {
                        $selected_male='checked'; 
                        $male_focus=' active focus';
                      } else { $selected_male=''; $male_focus='';};

                      if ($student_array['gender'] == 'female'){
                        $selected_female='checked'; 
                        $female_focus=' active focus';
                      } else { $selected_female=''; $female_focus='';};

                      if ($student_array['gender'] == 'other') {
                        $selected_other='checked'; 
                        $other_focus=' active focus';
                      } else { $selected_other=''; $other_focus='';};
                    }  
                ?>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-outline-primary<?php echo $male_focus; ?>">
                      <input type="radio" name="Gender" id="male" <?php echo  $selected_male; ?> value="male"> Male
                    </label>
                    <label class="btn btn-outline-primary<?php echo $female_focus; ?>">
                      <input type="radio" name="Gender" <?php echo  $selected_female; ?> id="female" value="female"> Female
                    </label>
                    <label class="btn btn-outline-primary<?php echo $other_focus; ?>">
                      <input type="radio" name="Gender" <?php echo  $selected_other; ?>  id="other" value="others">Others
                    </label>
                  </div>
                </div>
              <div class="input-group mb-3">
                <label for="dob" class="col-sm-2 col-form-label">Date of Birth</label>
                <input type="date" name="dateofbirth" id="getDOB" placeholder="yyyy-MM-dd"	minlength="6" maxlength="6" required value="<?php 
                if (is_numeric($student_id)) echo $student_array['dob'];
                ?>" />
              </div>
            


              <div class="input-group mb-3">
               <label for="category" class="col-sm-2  col-form-label">Category</label>
                <div class="btn-group btn-grp-toogle" id="category">
                  <?php
                   $cat_selected='';
              
                  $cat_sql = mysqli_query($conn,"select * from category");
                           while($fetched_data = mysqli_fetch_array($cat_sql)) { 
                            if (is_numeric($student_id)) {
                              if ($fetched_data['category_id']==$student_array['category_id']) {
                                $cat_selected='checked';
                              } else {
                                $cat_selected='';
                              }
                            }
                            ?>
                            <label class="btn btn-outline-primary">
                                <input type="radio" name="category" 
                                id="category_id" <?php echo $cat_selected; ?> 
                                value="<?php echo $fetched_data['category_id'] ?>"> 
                                <?php echo $fetched_data['category_name'] ?>
                            </label> 

                          <?php        
                        }
                    ?>
                   
                 
                    
                </div>
                <!--a href="admin.html" class="btn btn-outline-primary">More facility</a-->
              </div>

       
              <div class="input-group mb-3">
                <label for="religion" class="col-sm-2 col-form-label">Religion</label>
                <div class="input-group-prepend">
                <span class="input-group-text" id="religion"><span class="material-symbols-outlined">person</span></span>
                </div>
                <input type="text" name="religion" class="form-control" id="getReligion" placeholder="Religion" aria-label="Religion" aria-describedby="basic-addon1" value="<?php 
                if (is_numeric($student_id)) echo $student_array['religion'];
                ?>" >
              
                <label for="email" class="col-sm-2 col-form-label">E-Mail</label>
                <div class="input-group-prepend">
                <span class="input-group-text" id="email"><span class="material-symbols-outlined">mail</span></span>
                </div>
                <input type="email" id="email" name="email" class="form-control" id="getEmail" placeholder="E-Mail" aria-label="E-Mail" aria-describedby="basic-addon1" value="<?php 
                if (is_numeric($student_id)) echo $student_array['email'];
                ?>">
              </div>
              <div class="input-group mb-3">
                <label for="phnNum" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="input-group-prepend">
                <span class="input-group-text" id="phnNum"><span class="material-symbols-outlined">call</span></span>
                </div>
                <input type="tel" pattern="[1-9]{1}[0-9]{9}" title="Please use a 10 digit telephone number with no dashes or dots" id="phone" class="form-control" name="phonenumber" id="getPhnNum" placeholder="Phone Number" aria-label="Phone Number" aria-describedby="basic-addon1" value="<?php 
                if (is_numeric($student_id)) echo $student_array['phone'];
                ?>">
              </div>
              <div class="input-group">
                <label for="religion" class="col-sm-2 col-form-label">Address</label>
                <div class="input-group-prepend">
                  <span class="input-group-text"><span class="material-symbols-outlined">home</span></span>
                </div>
                <textarea class="form-control" name="Address" id="getAddress" placeholder="Address" aria-label="Address" value=""><?php 
                if (is_numeric($student_id)) echo $student_array['address'];
                ?></textarea>
              </div>
              <br>

              <div class="input-group mb-3">
               <label for="facilities" class="col-sm-2  col-form-label">Facilities</label>
                <div class="btn-group btn-grp-toogle" id="facilities">
                  <?php
                        while($fetched_data1 = mysqli_fetch_array($result1)) 
                        { $facility_checked='';
                          if (is_numeric($student_id)) {
                            mysqli_data_seek($result_student_facility,0);
                            while($student_facility_array = mysqli_fetch_array($result_student_facility)) {
                              if ($fetched_data1['facility_id'] == $student_facility_array['facility_id']) {
                                $facility_checked = 'checked';
                                break;
                              } else {
                                $facility_checked = '';
                              }
                            }
                          } else 
                            $facility_checked = '';

                          ?>
                            <label class="btn btn-outline-primary">
                                <input type="checkbox" name="facility[]" 
                                 <?php echo $facility_checked; ?>
                                value="<?php echo $fetched_data1['facility_id'] ?>"> 
                                <?php echo $fetched_data1['facility_name'] ?>
                            </label> 

                          <?php        
                        }
                    ?>
                 <!--label>  <a href="admin.html" class="btn btn-outline-primary" type="checkbox">More facility</a></label-->
                    
                </div>
                <!--a href="admin.html" class="btn btn-outline-primary">More facility</a-->
              </div>
             
              <br> 
              <div class="wrapper">
              <div class="col-md-5"> 
                <div class="input-group">
                 <div class="custom-file">
                   <input type="file" class="custom-file-input" id="inputGroupFile04" name="photo" aria-describedby="inputGroupFileAddon04" multiple>
                   <label class="custom-file-label" for="inputGroupFile04">Choose Your Photo To Upload</label>
                 </div>
                 <div class="input-group-append">
                   <button class="btn btn-primary" type="button" id="inputGroupFileAddon04">Upload<br></button>
                 </div>
                 </div>
                </div>
               </div>
               <div class="wrapper">
               <div class="form-group form-check">
                <br>
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                
                <label class="form-check-label" for="exampleCheck1">verify that you are not a robot</label>
              </div>
              </div>
              <div class="wrapper">
                <button class="btn btn-primary" type="submit" id="submit">Submit</button>
              </div>
        </div>
        
      
      
        </form>
        
    </body>
</html>