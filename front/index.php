
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
      <h1 class="text-uppercase fs-1">INFO<span class="text-light">Gyan</span></h1>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse fs-4" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-lag-0 text-center">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin_post/index.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> 
</header>
<!-- navigation ends here -->
<!-- slider starts here -->
<section class="slider">
     <!-- carousel-indicators -->
     <div id="carouselExampleCaptions" class="carousel slide mt-5">
    <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <!-- 9612x1951 img l/w -->
      <img src="img/logo_banner.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Gyan Duniya</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/logo.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>RAM</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/logo2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>BUDDHA</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>


<!-- slider ends here -->








<!-- post information -->
<section class="post-section">
      <div class="container text-center my-2">
          <h2 class="text text-primary "data-aos="fade-up" data-aos-offset="230" >Latest Posts</h2>
          <hr class="mx-n3 my-5 text-bg-light ">
          <?php
    include 'admin_post/config.php';
    $limit = 4; // how many record you want to show
                // $page = $_GET['page']; // to get the passed in url of page
     if(isset($_GET['page'])){
      $page = $_GET['page'];
          }else{
                   $page = 1;
               }
     $offset = ($page - 1) * $limit;

     $sql = "SELECT post_data.post_no,post_data.Title,post_data.Category ,post_data.Post_info,post_data.Post_img FROM post_data
     ORDER BY post_data.post_no DESC  LIMIT {$offset},{$limit}";
    
    $result = mysqli_query($conn,$sql) or die("Query Unsuccessfull");

    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
    

    ?>
          <!-- post1 -->
          <div class="post-box ms-3">
              <div class="card mb-3">
                  <div class="row g-0">
                      <div class="col-lg-4 col-md-6">
                          <img src="admin_post/upload/<?php echo $row['Post_img'];?>" class="img-fluid rounded-start" alt="post-img">
                      </div>
                      <div class="col-lg-8 col-md-6">
                          <div class="card-body">
                              <h2 class="post-title" data-aos="zoom-in" data-aos-offset="250"><?php echo $row['Title'];?></h2>
                              <h4 class="ms-5" data-aos="zoom-in" data-aos-offset="250">by <?php echo $row['Category'];?></h4>
                              <p class="post-text" data-aos="zoom-in" data-aos-offset="250" ><?php echo substr($row['Post_info'], 0, 400).".........";?></p>
                             <a id="button" class="read-more pull-right" data-aos="zoom-in-right" data-aos-offset="200" href='single.php?id=<?php echo $row['post_no'];?>'>read more</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

      <nav aria-label="Page navigation example" >
      <?php
         }
          } else {
            echo "<h2> No Record Found.</h2>";
          }
          $sql1 = "SELECT * FROM post_data";

                        $result1 = mysqli_query($conn,$sql1) or die("Paginaion error");
      
                        if(mysqli_num_rows($result1)>0){
                          $total_records = mysqli_num_rows($result1); // Total no. of record
                          
      
                          $total_page = ceil($total_records / $limit); // ceil give upper value 
                          // record divided in pages
                          echo '<div class="d-flex justify-content-center my-3"><ul class="pagination">';
                          if($page > 1)
                          {
                              echo '<li class="page-item">
                              <a class="page-link" href="index.php?page='.($page - 1).'" >Previous</a>
                              </li>';
                          }
                          for($i = 1 ; $i <= $total_page ; $i++) // for page 
                          { //for li color after color
                              if($i == $page){
                                  $active = "active";
                              }else{
                                  $active ="";
                              }
                    
                              echo '<li class="page-item ' . $active . '"><a class="page-link" href="index.php?page=' . $i . '">' . $i . '</a></li>';
      
                          }
                          if($total_page > $page)
                          {
                              echo '<li class="page-item">
                              <a class="page-link" href="index.php?page='.($page + 1).'">Next</a>
                              </li>';
                          }
                         
                          echo '</ul></div>';
                        }
          ?>
  </nav>
    </div>
  


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
    