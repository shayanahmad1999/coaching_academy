<?php require 'AdminPanel/production/process/connection.php'; ?>

<!DOCTYPE html>
<html lang="en">

 <?php require 'include/head.php'; ?>
 
<body>

 <?php require 'include/header.php'; ?>

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Academy Courses</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <?php
                $id = $_GET['id'];
                
                $query = "select * from courses where Academies_ID = $id";

                $go = mysqli_query($connect,$query); 
               while($show = mysqli_fetch_array($go)){
           ?>
  
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">

              <img src="AdminPanel/production/uploads/<?php echo $show['Course_photo']; ?>" class="img-fluid" alt="...">

              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4><?php echo $show['Course_Name']; ?></h4>
                  <p class="price"><?php echo $show['Course_Fee']; ?></p>
                </div>


                <h3><a href="course-details.php?Academy_id=<?php echo $show['Academies_ID']; ?>&&Course_id=<?php echo $show['Course_ID']; ?>"><?php echo $show['Course_Name']; ?></a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

 <?php } ?>
        </div>

      </div>
    </section><!-- End Courses Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php require 'include/footer.php'; ?>

</body>

</html>