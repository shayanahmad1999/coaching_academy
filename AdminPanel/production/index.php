<?php 

require 'process/connection.php';
require 'process/security.php';

 ?>

<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
         
<?php include 'include/sidebar.php'; ?>
          

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

    <?php include 'include/navbar.php';?>

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row" style="display: inline-block;" >
          <div class="tile_count">
            <div class="col-md-4 col-lg-4 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Student</span>
                 <?php 
                $query = "select *,count(Students_ID) as total from student_record";
                $responce = mysqli_query($connect,$query);
                while($result = mysqli_fetch_array($responce)){
               ?>    
              <div class="count"><?php echo $result['total']; ?></div>
            <?php } ?>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-users"></i>Total Teachers</span>
                <?php 
                $query = "select *,count(Teacher_ID) as total from teachers";
                $responce = mysqli_query($connect,$query);
                while($result = mysqli_fetch_array($responce)){
               ?>    
              <div class="count"><?php echo $result['total']; ?></div>
            <?php } ?>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4  tile_stats_count">
              <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-4">
                  <span class="count_top"><i class="fa fa-building"></i>Total Academies</span>
                </div>
              </div>
               <?php 
                $query = "select *,count(Academies_ID) as total from academy";
                $responce = mysqli_query($connect,$query);
                while($result = mysqli_fetch_array($responce)){
               ?>    
              <div class="count"><?php echo $result['total']; ?></div>
            <?php } ?>
            </div>
          </div>
        </div>
        </div>
        <!-- /page content -->
<?php include  'include/footer.php'; ?>
     
  </body>
</html>
