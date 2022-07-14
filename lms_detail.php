
<?php 

require 'AdminPanel/production/process/connection.php'; 
require 'security.php';

 ?>
 <!DOCTYPE html>
 <html>
  <head>
        <style type="text/css">
            #myiframe {
                width: 320px;
                height: 100%;
            }
        </style>
    </head>
<?php require 'include/head.php'; ?>
 <body style="background-color: rgb(186, 199, 196);">
 
   <div class="container-fluid">
        <nav class=" navbar navbar-expand-lg bg-dark justify-content-between sticky-top ">
    <ul class="nav navbar-nav"><li class="nav-item text-light navbar-brand font-italic font-weight-bold">
        <span style="color: rgb(0,128,255); font-size:50px;">L</span>
        <span style="color: rgb(255,128,64); font-size:30px;">M</span>
        <span style="color:rgb(128,0,0);; font-size:50px;">S</span></li></ul>
        <ul class="navbar navbar-nav">
            <li class="nav-item "><a href="" class="nav-link text-light active">Contents</a></li>
            <li class="nav-item "><a href="" class="nav-link text-light">Participants</a></li>
            <li class="nav-item "><a href="" class="nav-link text-light">Grades</a></li>
            <li class="nav-item "><a href="" class="nav-link text-light">Competencies</a></li>
        </ul>
    </nav>
   </div>

   <br>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
              <div class="row">
               <div class="col-4">
                    <?php                    
            $query =  "select * from upload_files";
            $go = mysqli_query($connect,$query);
            while($show = mysqli_fetch_array($go)){
        ?>
                                    <p class="text-big font-light">
                                         <div id="scroller">
                                             <iframe name="myiframe" id="myiframe" src="AcademyPanel/upload_file/<?php echo $show['File'] ?>"></iframe>
                                             <div class="hpanel responsive-mg-b-30">
                                               <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Upload Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="text-success font-bold"><?php echo $show['File'];; ?></span>
                                                </td>
                                                <td><?php echo $show['Date']; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                             </div>
                                         </div>
                                    </p>
               </div>
            <?php } ?>
           </div>
        </div>
    </div>
</div>
                
 </body>
 </html>