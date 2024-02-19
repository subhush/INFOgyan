
<?php
include 'config.php';

$user_id = $_GET['id'];

$sql = "DELETE FROM user WHERE user_no = '$user_id'";
$result = mysqli_query($conn, $sql) or die("QUERY ERROR: " . mysqli_error($conn)); // Corrected typo in "QUERY ERROR" and added mysqli_error() to display the MySQL error message

echo '<script>alert("DELETE SUCCESSFULLY")</script>';
header("Location: http://localhost/Infoblog/admin_post/user-list.php"); 

exit(); // Added exit() to stop further execution after the redirect
?>
