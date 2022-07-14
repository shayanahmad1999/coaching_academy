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
        <h2>Teachers</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <form class="form-group" action="" method="get">
                 <div class="row">
                  <div class="col-4">
                    <label>Search Your Favourite Teacher Here</label>
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
    $query = "select * from teachers where Teacher_Name like '%$search%'";
    $go = mysqli_query($connect,$query);
  }
else{

                    $query = "select * from teachers
                    inner join courses where teachers.Course_ID=courses.Course_ID";
                    $go = mysqli_query($connect,$query);
                  }
                    while($show = mysqli_fetch_array($go)){

                ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              
              <img src="AdminPanel/production/uploads/<?php echo $show['Teacher_Photo']; ?>" class="img-fluid" alt="">
              <div class="member-content">
                <h4><?php echo $show['Teacher_Name']; ?></h4>
                <span><?php echo $show['Course_Name']; ?></span>
                <p>
                  Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                </p>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
     <?php } ?>

        </div>

      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->

 <?php require 'include/footer.php'; ?>

</body>

</html>