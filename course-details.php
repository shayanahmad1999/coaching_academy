<?php require 'AdminPanel/production/process/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

 <?php require 'include/head.php'; ?>

<body>

<?php require 'include/header.php'; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">

      <?php 

            if (isset($_GET['msg']) && $_GET['msg'] == 'success') {
              echo "<h2 class='alert alert-success alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>Congratulation! Your Form Submit Successfully</h2>";
                  }
           
            elseif (isset($_GET['msg']) && $_GET['msg'] == 'error') {
               echo "<h6 class='alert alert-danger alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>Sorry! Your Form is Not Submit Successfully</h6>";
            }
            else{
            echo "   <div class='container'>
        <h2>Course Details</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>";
            }
             

       ?>
     
    </div><!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6">
               <?php 
                  $Academy_id = $_GET['Academy_id'];
                  $Course_id = $_GET['Course_id'];
                  $query = "select * from courses where Academies_ID = '$Academy_id' and Course_id ='$Course_id'";
                  $go = mysqli_query ($connect,$query);
                  while ($show = mysqli_fetch_array($go)){
             ?>
            <img src="AdminPanel/production/uploads/<?php echo $show['Course_photo']; ?>" height="200px" width="400px" class=""  alt="">
          </div>

          <div class="col-lg-4">

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Course Fee</h5>
              <p><?php echo $show['Course_Fee']; ?></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Available Seats</h5>
              <p>30</p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Schedule</h5>
              <p>5.00 pm - 7.00 pm</p>
            </div>
          </div>
             <?php } ?>
        </div>
      </div>
          <div class="row">
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-2">
         <!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
Register Now
</button>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Registration Form</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
           <div class="x_content">
                                    <form action="reg_form/Student_Insertion.php" method="post" novalidate enctype="multipart/form-data">
                                        
                                        <span class="section"></span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Name<span class="required">*</span></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="ex. Shayan Ahmad" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">email<span class="required">*</span></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input class="form-control" name="email" class='email' required="required" type="email" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-6 col-sm-6  label-align">Confirm email address<span class="required">*</span></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input class="form-control" type="email" class='email' name="confirm_email" data-validate-linked='email' required='required' /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-6 col-sm-6 label-align">Phone Number <span class="required">*</span></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input class="form-control" type="text" class='number' name="number" data-validate-minmax="10,100" required='required'></div>
                                        </div>
                                        <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Password<span class="required">*</span></label>
                      <div class="col-md-12 col-sm-12">
                        <input class="form-control" type="password" id="password1" name="password"  title="Minimum 8 Characters Including An Upper And Lower Case Letter, A Number And A Unique Character" required />
                        
                        <span style="position: absolute;right:15px;top:7px;" onclick="hideshow()" >
                          <i id="slash" class="fa fa-eye-slash"></i>
                          <i id="eye" class="fa fa-eye"></i>
                        </span>
                      </div>
                    </div>
                                        
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-6 col-sm-6  label-align">Repeat password<span class="required">*</span></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input class="form-control" type="password" name="password2" data-validate-linked='password' required='required' />
                                           
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Telephone<span class="required">*</span></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input class="form-control" type="tel" class='tel' name="phone" data-validate-length-range="8,20" /></div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Gender<span class="required">*</span></label>
                                         <div class="col-md-12 col-sm-12">
                                        <input class="" type="radio" name="gender" value="Male">Male
                                        <input class="" type="radio" name="gender" value="Female">Female
                                        <input class="" type="radio" name="gender" value="Other">Other</div>
                                        </div>

                                          <input type="hidden" name="academy_id" value="<?php echo $_GET['Academy_id']; ?>">
                                          <input type="hidden" name="course_id" value="<?php echo $_GET['Course_id']; ?>">

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align"><span class="required">Photo*</span></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input type="file" name="photos" class="form-control">
                                        </div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-6 col-sm-6  label-align">Complete Address<span class="required">*</span></label>
                                            <div class="col-md-12 col-sm-12">
                                                <textarea required="required" name='address'></textarea></div>
                                        </div>
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary">Submit</button>
                                                    <button type='reset' class="btn btn-success">Reset</button>
                                                    <input type="hidden" name="student" value="submit">
                                                    

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
      </div>
    </div>
    </section><!-- End Cource Details Section -->


    <!-- ======= Cource Details Tabs Section ======= -->
    <section id="cource-details-tabs" class="cource-details-tabs">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">Modi sit est</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2">Unde praesentium sed</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Architecto ut aperiam autem id</h3>
                    <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-1.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Et blanditiis nemo veritatis excepturi</h3>
                    <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-2.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                    <p class="font-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                    <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-3.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                    <p class="font-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-4.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                    <p class="font-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-5.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Cource Details Tabs Section -->

  </main><!-- End #main -->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../vendors/validator/multifield.js"></script>
    <script src="../vendors/validator/validator.js"></script>
    
    <!-- Javascript functions -->
  <script>
    function hideshow(){
      var password = document.getElementById("password1");
      var slash = document.getElementById("slash");
      var eye = document.getElementById("eye");
      
      if(password.type === 'password'){
        password.type = "text";
        slash.style.display = "block";
        eye.style.display = "none";
      }
      else{
        password.type = "password";
        slash.style.display = "none";
        eye.style.display = "block";
      }

    }
  </script>

    <script>
        // initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
        var validator = new FormValidator({
            "events": ['blur', 'input', 'change']
        }, document.forms[0]);
        // on form "submit" event
        document.forms[0].onsubmit = function(e) {
            var submit = true,
                validatorResult = validator.checkAll(this);
            console.log(validatorResult);
            return !!validatorResult.valid;
        };
        // on form "reset" event
        document.forms[0].onreset = function(e) {
            validator.reset();
        };
        // stuff related ONLY for this demo page:
        $('.toggleValidationTooltips').change(function() {
            validator.settings.alerts = !this.checked;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);

    </script>

<?php require 'include/footer.php'; ?>

</body>

</html>