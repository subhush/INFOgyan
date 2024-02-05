<?php 
include 'nav.php';
?>
<!-- post information -->
<section class="post-section">
  <br><br>
      <div class="container text-center mt-5" >
          <h2 class="text text-primary "data-aos="fade-up" data-aos-offset="230" >Latest Posts</h2>
          <hr class="mx-n3 my-5 text-bg-light ">
          

    <?php
    include 'admin_post/config.php';
    $post_no = $_GET['id'];

     $sql = "SELECT post_data.post_no,post_data.Title,post_data.Category ,post_data.Post_info,post_data.Post_img FROM post_data WHERE post_data.post_no = '$post_no'";

    
    $result = mysqli_query($conn,$sql) or die("Query Unsuccessfull");

    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
        

    ?>

    <!-- post1 -->
<div class="post-box ms-3">
              <div class="card mb-3">
                  <div class="row g-0">
                      <div class="col-lg-4 col-md-6">
                          <img src="admin_post/upload/<?php echo $row['Post_img'];?>" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-lg-8 col-md-6">
                          <div class="card-body">
                              <h2 class="post-title" data-aos="zoom-in" data-aos-offset="250"><?php echo $row['Title'];?></h2>
                              <h4 class="ms-5" data-aos="zoom-in" data-aos-offset="250">by <?php echo $row['Category'];?></h4>
                              <p class="post-text" data-aos="zoom-in" data-aos-offset="250" > <?php echo $row['Post_info'];?></p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

      <?php
         }
          } else {
            echo "<h2> No Record Found.</h2>";
          }
          ?>
  
    </div>
  

</section>
        <!-- FOOTER-SECTION-STARTED HERE -->

</section>
<section class="">
    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: #0a4275;">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: CTA -->
        <section class="">
          <p class="d-flex justify-content-center align-items-center">
            <span class="me-3">Give us Feedback</span>
            <button data-mdb-ripple-init type="button" class="btn btn-outline-light btn-rounded">
              Feedback
            </button>
          </p>
        </section>
        <!-- Section: CTA -->
      </div>
      <!-- Grid container -->
  
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        
        <p> Copyright: Tree Blog</p>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </footer>
  </section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script>
  AOS.init();
</script>
</body>
</html>
    
    