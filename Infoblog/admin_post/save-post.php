<?php 
include 'config.php';
session_start();

if (!isset($_SESSION["username"])) {
  header("location: http://localhost/Infoblog/admin_post/Add_post.php");}

if(isset($_FILES['Post_img'])){
    $errors = array();
    
    $file_name = $_FILES['Post_img']['name'];
    $file_size = $_FILES['Post_img']['size'];
    $file_tmp = $_FILES['Post_img']['tmp_name'];
    $file_type = $_FILES['Post_img']['type'];
    $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION)); // find last name of file for extension
    $allowed_extensions = array("jpg", "jpeg", "png","webp");

    if(in_array($file_extension, $allowed_extensions) === false){
        ?>
        <script>
        alert('<?php $errors[] = "This extension file is not allowed. Please choose a JPG, JPEG, or PNG file.";?>');
        
    </script>
<?php    
}

    if($file_size > 50e+6){
        $errors[] = "File size must be 50 MB or lower.";
    }

    if (empty($errors)) {
        // Create the "upload" directory if it doesn't exist
        if (!is_dir("upload")) {
            mkdir("upload");
        }

        // Move the uploaded file if there are no errors
        $destination_path = "upload/" . $file_name;
    
        if (move_uploaded_file($file_tmp, $destination_path)) {
            // echo "File uploaded successfully.";
        } else {
            $errors[] = "Failed to move the uploaded file.";
        }
    } else {
        // Display or log the validation errors
        foreach ($errors as $error) {
            echo "Error: $error<br>";
        }
    }
}

session_start();
$Title = mysqli_real_escape_string($conn, $_POST['Title']);
$Category = mysqli_real_escape_string($conn, $_POST['Category']);
$Post_info = mysqli_real_escape_string($conn, $_POST['Post_info']);
$sql = "INSERT INTO post_data (Title,Category,Post_info,Post_img) VALUES ('$Title','$Category' ,'$Post_info','$file_name')";

if (mysqli_query($conn, $sql)) {
    ?>
    <script>
        alert("!!..POST UPLOADED..!!");
        window.location.href = "http://localhost/Infoblog/admin_post/Add_post.php";
    </script>
    <?
    // header("location: http://localhost/Infoblogadmin_post/Post_list.php");
    exit(); // Ensure that no further output is sent after the header
} else {
    ?>
    <script>
        alert("This is a pop-up notification!");
        // window.location.href = "http://localhost/Infoblogadmin_post/Post_list.php";
    </script>
    <?php
    exit(); // Ensure that no further PHP code is executed after the JavaScript
}
?>