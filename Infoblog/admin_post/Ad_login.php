<?php
include 'config.php';

if(isset($_POST['Submit'])){
    
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $user_type = mysqli_real_escape_string($conn,$_POST['type']);
    $password=mysqli_real_escape_string($conn, md5 ($_POST["password"]));

    $sql = "INSERT INTO user (username,user_type,password) VALUES ('$username','$user_type','$password')";
    if (mysqli_query($conn, $sql)) {
        ?>
        <script>
            alert("!!..User Add sucessfully..!!");
            window.location.href = "http://localhost/Infoblog/admin_post/user-list.php";
        </script>
        <?
        exit(); // Ensure that no further output is sent after the header
    } else {
        ?>
        <script>
            alert("erroe plz try again!");
        </script>
        <?php
        exit(); // Ensure that no further PHP code is executed after the JavaScript
    }

}


?>


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

<div class="card col-md-4" >
<h1 class="text-uppercase fs-1">INFO<span class="text-primary">Gyan</span></h1>
    <h2>Welcome</h2>
    <h3>New User by Admin</h3>
    <form class="form" action="<?php $_SERVER['PHP_SELF'];?>" method ="POST" autocomplete="off">
      <input type="text" placeholder="Username" name="username" pattern="[A-Za-z]+" title="Please enter only alphabets" required />
      <select name="type" id="type" class="type" name="user_type">
            <option value="0">Admin</option>
            <option value="1">Normal</option>
            </select>
      <input type="password" placeholder="Password" name="password" id="myInput" required />
     
      <div style="">
        <i class="fa fa-eye-slash" onclick="myFunction()" aria-hidden="true"></i> Show password</div>
      <button name="Submit" >Register</button>
    </form>
<footer>
Already have account?? Login
<a href="index.php">here</a>
<br>
<a href="Post_list.php">
<button type="button" class="btn btn-outline-info">HOME</button></a>  
</footer>
</div>
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