<?php 

  require 'process/connection.php';
  require 'process/security.php';

  if (isset($_GET['id']) && $_GET['id'] != "") {
    $id = $_GET['id'];
    $status = $_GET['status'];

   if ($status == 0) {
    
       $query = "update student_record set status = 1 where Students_ID = '$id'";
       $go=mysqli_query($connect,$query);
       
     }
     else{
     
      $query = "update student_record set status = 0 where Students_ID = '$id'";
      $go=mysqli_query($connect,$query);
      
     }
    }

  $query = "select * from student_record
  inner join academy on student_record.Academies_ID = academy.Academies_ID
  inner join courses on student_record.Course_ID = courses.Course_ID order by Students_ID";

  $go = mysqli_query($connect,$query);

 ?>

<!DOCTYPE html>
<html lang="en">

   <?php require 'include/head.php'; ?>

   <style type="text/css">

  @media print  {
    
    button,a{
      visibility: hidden;
    }
  }
  

  </style>

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
                <h3>Student <small>List</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                     <span class="input-group-btn"> <a href="Student/student_deleteall.php" onclick="return confirm('are you sure want to Delete All record from your list?')" >
                      <button class="btn btn-outline-danger font-weight-bold" type="button">Delete All!</button></a>
                    </span>
                  </div>
                </div>
              </div>
            </div>



            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <?php 

                                   if (isset($_GET['msg']) && $_GET['msg'] == 'success') {
                                       echo "<h2 class='alert alert-success alert-dismissible fade show'>
                                            <button type='button' class='close' data-dismiss='alert'>&times;</button>Congratulation! Your Record Delete Successfully</h2>";
                                   }
                                   elseif (isset($_GET['msg']) && $_GET['msg'] == 'error') {
                                      echo "<h6 class='alert alert-danger alert-dismissible fade show'>
                                            <button type='button' class='close' data-dismiss='alert'>&times;</button>Sorry! Your Record is Not Delete Successfully</h6>";
                                   }
                                    elseif (isset($_GET['sms']) && $_GET['sms'] == 'success') {
                                      echo "<h6 class='alert alert-success alert-dismissible fade show'>
                                            <button type='button' class='close' data-dismiss='alert'>&times;</button>Sorry! Your All Record is Delete Successfully</h6>";
                                   }
                                    elseif (isset($_GET['sms']) && $_GET['sms'] == 'error') {
                                      echo "<h6 class='alert alert-danger alert-dismissible fade show'>
                                            <button type='button' class='close' data-dismiss='alert'>&times;</button>Sorry! Your All Record is Not Delete Successfully</h6>";
                                   }
                                   elseif (isset($_GET['msgs']) && $_GET['msgs'] == 'success') {
                                      echo "<h6 class='alert alert-success alert-dismissible fade show'>
                                            <button type='button' class='close' data-dismiss='alert'>&times;</button>Congratulation! Your Record Update Successfully</h6>";
                                   }
                                   elseif (isset($_GET['msgs']) && $_GET['msgs'] == 'error') {
                                      echo "<h6 class='alert alert-danger alert-dismissible fade show'>
                                            <button type='button' class='close' data-dismiss='alert'>&times;</button>Sorry! Your Record is Not Update Successfully</h6>";
                                   }
                                   else{
                                    // echo " <h2>Student List<small>sub title</small></h2>
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
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                            <div class="card-box table-responsive">                             
                      <div class="title_right">
              </div>
            </div>
              <div class="row">
                <div class="col-10"></div>
                <div class="col-md-2">
                    <a href="student_form.php"><button class="btn btn-primary">Add</button></a>
                    <button onclick="window.print();" class="btn btn-primary">Print</button>

                </div>
              </div>
             
                    <table id="datatable" class="table table-striped table-bordered " style="width:100%">

                      <thead>
                        <tr>
                          <th>Student ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Confirm Email</th>
                          <th>Phone</th>
                          <th>Password</th>
                          <th>Repeat Password</th>
                          <th>Telephone</th>
                          <th>Gender</th>
                          <th>Photo</th>
                          <th>Address</th>
                          <th>Academy</th>
                          <th>Course</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php $a = 1; while ($list = mysqli_fetch_array($go)) { ?>
                        <tr>
                          <td><?php echo $a; ?></td>
                          <td><?php echo  $list['Name']; ?></td>
                          <td><?php echo  $list['Email']; ?></td>
                          <td><?php echo  $list['Confirm_Email']; ?></td>
                          <td><?php echo  $list['Phone']; ?></td>
                          <td><?php echo  $list['Password']; ?></td>
                          <td><?php echo  $list['Repeat_Password']; ?></td>
                          <td><?php echo  $list['Telephone']; ?></td>
                          <td><?php echo  $list['Gender']; ?></td>
                          <td><img src="uploads/<?php echo $list['photo'];?>"class="rounded-circle" weight = "50px" height = "50px" alt=""></td>
                          <td><?php echo  $list['Address']; ?></td>
                          <td><?php echo  $list['Academy_Name']; ?></td>
                          <td><?php echo  $list['Course_Name']; ?></td>
                          <td>
                            <?php  
                              if ($list['status'] == 0) { ?>
                            <a href="student_list.php?id=<?php echo $list['Students_ID'];?>
                            &&status=<?php echo $list['status']; ?>">
                            <button class="btn btn-danger"><i class="fa fa-times"></i></button></a>
                            <?php } else { ?>
                              <a href="student_list.php?id=<?php echo $list['Students_ID'];?>&&status=<?php echo $list['status']; ?>"><button class="btn btn-success"><i class="fa fa-check"></i></button></a>

                              <a href="student_edit.php?id=<?php echo $list['Students_ID']; ?>" onclick="return confirm('are you sure want to edit this record from your list?')" ><button class="btn btn-info"><i class="fa fa-edit"></i></button></a>

                               <a href="Student/student_delete.php?id=<?php echo $list['Students_ID']; ?>" onclick="return confirm('are you sure want to delete this record from your list?')" ><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
<!-- 
                                 <a href="Student/view.php?id=<?php echo $list['Students_ID']; ?>" onclick="return confirm('are you sure want to see this record profile?')" ><button class="btn btn-secondary"><i class="fa fa-eye"></i></button></a> -->
                          </td>
                        </tr>
                       <?php $a++; } }  ?>
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>
                </div>
              </div>


        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>