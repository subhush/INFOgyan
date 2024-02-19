<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info-register-user</title>
    <link rel="stylesheet" type="text/css" href="admin1.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


</head>
<body>
   
<div class="background">

</div>
<div class="card col-md-4">
<h1 class="text-uppercase fs-1">INFO<span class="text-primary">Gyan</span></h1>
    <h2>Welcome Back</h2>
    
    <form class="form" action="log-in.php" method ="POST" >
    <span>
    <i class="fa-brands fa-facebook fa-2xl" style="color: #1558cb;"></i> &nbsp;
    <i class="fa-brands fa-google fa-2xl" style="color: #1259d3;"></i></span>
      <input type="text" placeholder="Username" name="username" required />
      <input type="password" placeholder="Password" name="password" required id="myInput">
      <div style="">
        <i class="fa fa-eye-slash" onclick="myFunction()" aria-hidden="true"></i> Show password</div>
      <button name="login" > <i class="fa-solid fa-arrow-right-to-bracket"></i> Sign In</button>
    </form>
<footer>
Need an account? Sign up
<a href="register-user.php"> here </a> <br>
<a href="../index.php">
<button type="button" class="btn btn-outline-info">HOME</button></a>  
</footer>


<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script>
  AOS.init();
</script>
</body>
</html>