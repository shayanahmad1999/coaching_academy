
<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><img src="img/logo/logosn.png" alt="" /></strong>
            </div>
			<div class="nalika-profile">
				<div class="profile-dtl">
					<a href="#"><img src="../AdminPanel/production/uploads/<?php echo $_SESSION['ACPHOTO']; ?>" alt="" /></a>
					<h2><span class="min-dtn">
                        <?php 
                        if (isset($_SESSION['ACID'])) { echo $_SESSION['ACNAME']; }  ?></span></h2>
				</div>
				<div class="profile-social-dtl">
					<ul class="dtl-social">
						<li><a href="#"><i class="icon nalika-facebook"></i></a></li>
						<li><a href="#"><i class="icon nalika-twitter"></i></a></li>
						<li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                      
                      <li>
                            <a class="has-arrow " href="index.php">
                                   <i class="icon nalika-home  icon-wrap"></i>
                                   <span class="mini-click-non "><?php echo $_SESSION['ACNAME']; ?></span>
                                </a>
                            <ul class="submenu-angle " aria-expanded="true">
                                <li><a title="Academy List" href="Academy_List.php"><span class="mini-sub-pro">List</span></a></li>
                                 <!-- <li><a title="Payment List" href="payment.php"><span class="mini-sub-pro">Payment</span></a></li> -->
                                <li><a title="upload file" href="upload_file.php"><span class="mini-sub-pro">Upload Files
                                </span></a></li>
                            </ul>
                        </li>

                   

                    </ul>
                </nav>
            </div>
        </nav>
    </div>
