<?php
include 'config.php';
include 'log-in.php';
session_start();

if (!isset($_SESSION["username"])) {
  header("location: http://localhost/new1/front/admin_post/");}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timepass</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    

</head>
<body>
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
            <a class="nav-link" href="Add_post.php">Add Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Post_list.php">Post List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ad_login.php">Add user</a>
          </li>
          <div class="col-md col-md-2" style=" border-radius: 10px; width: 150px;  background-color: red;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
</svg>
            <a href="logout.php" class="admin-logout pt-2" style="text-decoration: none; color: white; "><?php echo $_SESSION["username"] ?> logout
            </a>
</div>
        </ul>
      </div>
    </div>
  </nav> 
    </header>