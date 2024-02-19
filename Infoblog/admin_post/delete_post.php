<?php

include 'config.php';



$post_no = $_GET['id'];

$sql="SELECT * FROM  post_data WHERE post_no = '$post_no'";
$result = mysqli_query($conn , $sql) or die("Query Failed : selected");
$row = mysqli_fetch_assoc($result);

unlink("upload/".$row['Post_img']);

$sql = " DELETE FROM post_data WHERE post_no = '$post_no'";

if(mysqli_multi_query($conn , $sql)) {
    header("location: http://localhost/Infoblog/admin_post/Post_list.php"); 
}
else{
    echo "Query failed";
}