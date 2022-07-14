<?php require 'AdminPanel/production/process/connection.php'; ?>

<?php 



 ?>

<!DOCTYPE html>
<html lang="en">

 <?php require 'include/head.php'; ?>
 
<body>

 <?php require 'include/header.php'; ?>

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Courses</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

         <form class="form-group" action="" method="get">
                 <div class="row">
                  <div class="col-4">
                    <label>Search Your Favourite Course Here</label>
                    <div class="card-tools">
                      <div class="input-group" style="width: 250px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                          <div class="input-group-append">
                           <button type="" class="btn btn-primary">
                        <i class="fas fa-search">Search</i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
            <br>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <?php 
                if (isset($_GET['table_search'])) {
    $search = $_GET['table_search'];
    $query = "select * from courses where Course_Name like '%$search%'";
    $go = mysqli_query($connect,$query);
  }
else{
          $query = "select * from courses
          inner join academy where courses.Academies_ID=academy.Academies_ID";
                $go = mysqli_query($connect,$query); 
              }
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


                <h3><?php echo $show['Course_Name']; ?>
                 <p><?php echo $show['Academy_Name']; ?></p></h3>
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