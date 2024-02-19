
<?php 
include 'admin_post/config.php';

if(isset($_POST['send'])){

    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $message = mysqli_real_escape_string($conn,$_POST["message"]);

    $sql = "INSERT INTO feedback (name , email , message) VALUES ('$name','$email','$message')";

    if(mysqli_query($conn, $sql)){
      ?>
      <script>
            alert("!!..User Add sucessfully..!!");
            window.location.href = "http://localhost/Infoblog/adout.php";
        </script>
        <?php 
        exit();
    }else{
      ?>
      <script>
            alert("erroe plz try again!");
        </script>
      <?php
    }
  }?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duniyagyan</title>
    <link rel="stylesheet" type="text/css" href="web.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

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
          <li class="nav-item" >
            <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin_post/register-user.php">Register user</a>
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
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/logo.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/logo2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">

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

<div class="container mt-5 col-md-12  col-sm-2">
        <h1>About INFOgyan</h1>
        <p>Welcome to INFOgyan, your go-to source for informative content. We're dedicated to providing you with the latest news, insights, and educational resources on a wide range of topics.</p>
        <p>Founded in [Year], INFOgyan has come a long way from its beginnings. We now serve readers all around the world and are thrilled to be a part of the ever-growing online community.</p>
        <p>We hope you enjoy our content as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.</p>
    </div>

    <!-- Feedback Form -->
    <div class="container col-md-8 mt-5 mb-3 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <h2>Feedback Form</h2>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" autocomplete="off">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary mt-3" name="send"> Send</button>
            
        </form>
    </div>
    



    <div class="card">
  <div class="card-header bg-dark text-light text-center">
    INFO blog
  </div>
  
</div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script>
  AOS.init();
</script>
</body>
</html>
    
