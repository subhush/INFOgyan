<?php
include 'config.php';
include 'log-in.php';


if (!isset($_SESSION["username"])) {
  header("location: http://localhost/new1/front/admin_post/");}


if(isset($_POST['save'])){
    
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $user_type = mysqli_real_escape_string($conn,$_POST['type']);
    $password=mysqli_real_escape_string($conn, md5 ($_POST["password"]));

    $sql = "INSERT INTO user (username,user_type,password) VALUES ('$username','$user_type','$password')";
    if (mysqli_query($conn, $sql)) {
        ?>
        <script>
            alert("!!..User Add sucessfully..!!");
            window.location.href = "http://localhost/new1/front/admin_post/admin_login.php";
        </script>
        <?
        exit(); // Ensure that no further output is sent after the header
    } else {
        ?>
        <script>
            alert("This is a pop-up notification!");
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
    <title>Document</title>
    
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="box">
        <a href="add_post.php">Back</a>
        <h1>ADD USER</h1>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method ="POST" autocomplete="off">
            <div class="inputBox">
            <input type="text" name="username" id="" placeholder="username" required >
            <br><br>
            <select name="type" id="type" class="type" name="user_type">
                <option value="0">Admin</option>
            </select>
            <br><br>
            <input type="password" name="password" id="" placeholder="password" required>
            </div>
            <br><br>
            <input type="submit"  name="save" name="login" class="btn2" value="Save">
        </form>
        
    </div>
</body>
</html>