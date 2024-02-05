<?php
session_start(); // Start the session at the beginning of the script

if(isset($_POST['login'])){
    include 'config.php';

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = md5($_POST['password']);

    $sql = "SELECT username, user_type, password FROM user WHERE username = '$username' AND password = '$password' ";

    $result = mysqli_query($conn, $sql) or die("error in login");

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $_SESSION["username"] = $row["username"];
            $_SESSION["user_type"] = $row["user_type"];

            header("location: http://localhost/new1/front/admin_post/Post_list.php");
         }
    }
    else {
        ?>
        <script>
            alert("!!..invalid..!!");
            window.location.href = "http://localhost/new1/front/admin_post/";
        </script>
        
        <?php
    }
}
?>
