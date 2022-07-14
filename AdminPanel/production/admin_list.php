<?php 

  require 'process/connection.php';
  require 'process/security.php';

  if (isset($_GET['id']) && $_GET['id'] != "") {
    $id = $_GET['id'];
    $status = $_GET['status'];

   if ($status == 0) {
       $query = "update admin set status = 1 where Admin_ID = '$id'";
       $go=mysqli_query($connect,$query);
     }
     else{
      $query = "update admin set status = 0 where Admin_ID = '$id'";
      $go=mysqli_query($connect,$query);
     }
    }

  $query = "select * from admin";

  $go = mysqli_query($connect,$query);

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
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="row">
                      <div class="col-xl-8 col-md-8 col-sm-8">
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
                                        echo "<div class='page-title'>
                                                <div class='title_left'>
                                                 <h3>Admin <small>List</small></h3>
                                                </div>
                                             </div>";
                                   }

                                   ?>
                                 </div>
                                  <div class="col-md-2 col-sm-2 col-lg-2 form-group pull-right top_search">     
                                  <a href="Admin/admin_deleteall.php" onclick="return confirm('are you sure want to Delete All record from your list?')" ><button class="btn btn-secondary" type="button"><i class="fa fa-trash"></i></button></a>
                                    </div>

                               </div>
                    </ul>

                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">

                            <div class="card-box table-responsive">
                  
                            <div class="card-box table-responsive">
                      <div class="title_right">
                      <div class="col-md-4 col-sm-4 col-xs-12 form-group pull-right top_search"></div>
                       <div class="col-md-4 col-sm-4 col-xs-12 form-group pull-right top_search"></div>

              </div>
            </div>
             
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Admin ID</th>
                          <th>User Name</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>Photo</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php $a = 1;; while ($list = mysqli_fetch_array($go)) { ?>
                        <tr>
                          <td><?php echo $a; ?></td>
                          <td><?php echo  $list['User_Name']; ?></td>
                          <td><?php echo  $list['Email']; ?></td>
                          <td><?php echo  $list['Password']; ?></td>
                          <td><img src="uploads/<?php echo $list['Photo'];?>"class="rounded-circle" weight = "50px" height = "50px" alt=""></td>
                          <td>
                            <?php if ($list['status'] == 0) { ?>
                            <a href="admin_list.php?id=<?php echo $list['Admin_ID'];?>&&status=<?php echo $list['status']; ?>"><button class="btn btn-danger"><i class="fa fa-times"></i></button></a>
                            <?php } else { ?>
                              <a href="admin_list.php?id=<?php echo $list['Admin_ID'];?>&&status=<?php echo $list['status']; ?>"><button class="btn btn-success"><i class="fa fa-check"></i></button></a>

<!--                               <a href="admin_edit.php?id=<?php echo $list['Admin_ID']; ?>" onclick="return confirm('are you sure want to edit this record from your list?')" ><button class="btn btn-info"><i class="fa fa-edit"></i></button></a>
 -->
                               <a href="Admin/admin_delete.php?id=<?php echo $list['Admin_ID']; ?>" onclick="return confirm('are you sure want to delete this record from your list?')" ><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
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