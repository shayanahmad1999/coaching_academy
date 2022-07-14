
<?php 

require '../AdminPanel/production/process/connection.php'; 
require 'security.php';

 ?>


<!doctype html>
<html class="no-js" lang="en">

<?php require 'include/head.php'; ?>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<?php require 'include/sidebar.php'; ?>

  
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>

<?php require 'include/header.php'; ?>
        <div class="container">
            <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                 <a href="fileList.php"><button class="btn btn-lg btn-block  btn-info">View Files </button></a>
            </div>
        </div>
        </div>
        <div class="widgets-programs-area mg-t-15">
            <div class="container-fluid">
                
                <div class="card">
                    <div class="card-body">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header" style="color:white;">Upload File</div>
                            <div class="card-body">
                                <form action="process/file_insertion.php" method="post" enctype="multipart/form-data" class="form-group">

                                    <input name="files" type="file" class="form-control">
                                    <input type="hidden" name="file" value="upload">

    <br/><br/>
    <button type="submit" name="submit" class="btn btn-success" class="form-control">Upload</button>
</form>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="widget-program-box mg-tb-30">
            <div class="container-fluid">
                
            </div>
        </div>
        <div class="widget-program-bg">
            <div class="container-fluid">
                <div class="row">
                   
                </div>
            </div>
        </div>
        
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>