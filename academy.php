
<?php require 'AdminPanel/production/process/connection.php'; ?>

<!DOCTYPE html>
<html lang="en">

 <?php require 'include/head.php'; ?>

<body>

<?php require 'include/header.php'; ?>

  <main id="main">

    <?php 

            if (isset($_GET['msg']) && $_GET['msg'] == 'success') {
              echo "<h2 class='alert alert-success alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>Congratulation! Your Form Submit Successfully</h2>";
                  }
           
            elseif (isset($_GET['msg']) && $_GET['msg'] == 'error') {
               echo "<h6 class='alert alert-danger alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>Sorry! Your Form is Not Submit Successfully</h6>";
            }
            else{
            echo "
    <div class='breadcrumbs' data-aos='fade-in'>
      <div class='container'>
        <h2>Academies</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div>";
            }
             

       ?>

 

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

           <form class="form-group" action="" method="get">
                 <div class="row">
                  <div class="col-4">
                    <label>Search Your Favourite Academy Here</label>
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

        <div class="row">

          <?php 

            if (isset($_GET['table_search'])) {
              $search = $_GET['table_search'];
              $query = "select * from academy where Academy_Name like '%$search%'";
              $go = mysqli_query($connect,$query);
            }
            else{

          $query = "select * from academy where academyStatus = 1";
          $go = mysqli_query($connect,$query);
}
          while($show = mysqli_fetch_array($go)){ 

     ?>
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="AdminPanel/production/uploads/<?php echo $show['Academy_photo']; ?>" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="AcademyCourses.php?id=<?php echo $show['Academies_ID']; ?>" onclick="return confirm('are you sure to Apply in this Academy')"><?php echo $show['Academy_Name']; ?></a></h5>
                <p class="font-italic text-center">MON to Friday, at 7:00 am to 5:00pm</p>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
              </div>
            </div>
          </div>

            <?php } ?>

        </div>
      </div>
    </section><!-- End Events Section -->



  </main><!-- End #main -->

<?php require 'include/footer.php'; ?>

</body>

</html>