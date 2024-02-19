<?php
session_start();
// Start the session at the beginning

if(isset($_POST['login'])){
    include 'config.php';

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = md5($_POST['password']); // MD5 is not recommended for password hashing

    $sql = "SELECT user_no, username, user_type FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if($result){
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION["user_no"] = $row["user_no"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["user_type"] = $row["user_type"];
            
            header("location: http://localhost/Infoblog/admin_post/Post_list.php");
        } else {
            ?>
            <script>
                alert("Invalid credentials!");
               window.location.href = "http://localhost/Infoblog/admin_post/";
            </script>
            <?php
            exit();
        }
    } else {
        // Handle SQL error
        die("Error in login: " . mysqli_error($conn));
    }
}
?>
