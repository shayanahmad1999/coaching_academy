 <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>
                <?php if (isset($_SESSION['AaID'])) {
                  echo "Admin Panel";
                }
              ?>
              </span></a>
            </div>

  <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <?php if (isset($_SESSION['AaID'])) { ?>
                <img src="uploads/<?php echo $_SESSION['APHOTO']; ?>" class="img-circle profile_img">
              <?php } ?>
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2 class="font-weight-bold text-primary"><?php echo $_SESSION['ANAME']; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php" class="font-italic"><?php echo $_SESSION['ANAME']; ?> &nbsp;Dashboard</a></li>
                    </ul>
                  </li>

                   <li><a><i class="fa fa-users"></i> Manage Admins <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="signup.php"><i class="fa fa-edit"></i>Add Admin</a></li>
                      <li><a href="admin_list.php"><i class="fa fa-list"></i>Admin List</a></li>
                    <!--   <li><a href="form_upload.php">Form Upload</a></li> -->
                    </ul>
                  </li>


                  <li><a><i class="fa fa-users"></i> Manage Students <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="student_form.php"><i class="fa fa-edit"></i>Add Student</a></li>
                      <li><a href="student_list.php"><i class="fa fa-list"></i>Student List</a></li>
                      <!-- <li><a href="form_upload.php">Form Upload</a></li> -->
                    </ul>
                  </li>

                   <li><a><i class="fa fa-building"></i> Manage Academies <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="academy_form.php"><i class="fa fa-edit"></i>Add Academy</a></li>
                      <li><a href="academy_list.php"><i class="fa fa-list"></i>Academies List</a></li>
               <!--        <li><a href="form_upload.php">Form Upload</a></li> -->
                    </ul>
                  </li>

                       <li><a><i class="fa fa-book"></i> Manage Courses <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="course_form.php"><i class="fa fa-edit"></i>Add Course</a></li>
                      <li><a href="course_list.php"><i class="fa fa-list"></i>Courses List</a></li>
                     <!--  <li><a href="form_upload.php">Form Upload</a></li> -->
                    </ul>
                  </li>   

                   <li><a><i class="fa fa-book"></i> Manage Teacher <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="teacher_form.php"><i class="fa fa-edit"></i>Add Teacher</a></li>
                      <li><a href="teacher_list.php"><i class="fa fa-list"></i>Teacher List</a></li>
                     <!--  <li><a href="form_upload.php">Form Upload</a></li> -->
                    </ul>
                  </li>   

              </div>

             <!--  <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="projects.php">Projects</a></li>
                      <li><a href="project_detail.php">Project Detail</a></li>
                      <li><a href="profile.php">Profile</a></li>
                    </ul>
                  </li>
                </ul>
              </div> -->

              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i>Login Page<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                       <li><a href="login.php">login</a></li>
                       <li><a href="process/logout.php">logout</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

                
            </div>
            <!-- /sidebar menu -->