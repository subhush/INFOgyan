

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duniyagyan</title>
    <link rel="stylesheet" href="web.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
  <!-- navigation started here  -->
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-info  px-4 border-bottom fixed-top">
    <div class="container-fluid">
      <h1 class="text-uppercase fs-1">Duniya<span class="text-light">Gyan</span></h1>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse fs-4" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-lag-0 text-center">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> 
    </header>








<!-- post information -->
<section class="post-section">
  <br><br>
      <div class="container text-center mt-5" >
          <h2 class="text text-light"data-aos="fade-up" data-aos-offset="230" >Read Full Posts</h2>
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
    
    