<?php

 require 'process/connection.php';
 require 'process/security.php';
?>

<!DOCTYPE html>
<html lang="en">

  <?php require 'include/head.php'; ?>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">

  <?php require 'include/sidebar.php'; ?>


                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

           <?php require 'include/navbar.php'; ?>


            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Course Form</h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
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
                                    // echo " <h2>Course Form<small>sub title</small></h2>
                                    // <ul class='nav navbar-right panel_toolbox'>
                                    //     <li><a class='collapse-link'><i class='fa fa-chevron-up'></i></a>
                                    //     </li>
                                    //     <li><a class='close-link'><i class='fa fa-close'></i></a>
                                    //     </li>";
                                   }

                                   ?>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form class="" action="Course/Course_Insertion.php" method="post" novalidate enctype="multipart/form-data">
                                        
                                        <span class="section">Course Info</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Name<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="coursename" placeholder="ex. Course Name" required="required" />
                                            </div>
                                        </div>
                                       <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Credit Hours<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="crdhour" placeholder="ex. Credit Hours" required="required" />
                                            </div>
                                        </div>
                                       
                                          <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Select Academy<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                            <select class="form-control" name="academies">
                                             <option>Select Academy</option>
                                             <?php 
                                                $query = "select * from academy where academyStatus = 1";
                                                $go = mysqli_query($connect,$query);
                                                while ($list = mysqli_fetch_array($go)) {
                                             ?>
                                             <option value="<?php echo $list['Academies_ID'] ?>">
                                                 <?php echo $list['Academy_Name'] ?>
                                             </option>    
                                             <?php } ?>
                                                </select>
                                            

                                        </div>
                                        </div>
                                       
                                         <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Photo<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="file" class="form-control" name="photo" required="required" />
                                            </div>
                                        </div>
                                           <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">FEE<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" class="form-control" name="course_fee" required="required" />
                                            </div>
                                        </div>

                                            <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <input type="hidden" name="course" value="submit">
                                                    <button type='submit' class="btn btn-primary">Submit</button>
                                                    <button type='reset' class="btn btn-success">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

         
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../vendors/validator/multifield.js"></script>
    <script src="../vendors/validator/validator.js"></script>
    
    <!-- Javascript functions	-->
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
