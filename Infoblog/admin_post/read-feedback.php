
<?php
include 'config.php';
session_start();
if (!isset($_SESSION["username"])) {
   header("location: http://localhost/Infoblog/admin_post/index.php");
}
include 'login_nav.php';
?>
<section class="vh-100" style="background-color: #2779e2;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">

        <h1 class="text-white mb-4">Post-List</h1>

        <div class="card" style="border-radius: 15px;">
          <div class="card-body">
          <?php
   
    $limit = 4; // how many record you want to show
                // $page = $_GET['page']; // to get the passed in url of page
     if(isset($_GET['page'])){
      $page = $_GET['page'];
          }else{
                   $page = 1;
               }
     $offset = ($page - 1) * $limit;
     $sql = "SELECT * FROM feedback
    ORDER BY `feed-id` DESC LIMIT {$offset}, {$limit}";

    
    $result = mysqli_query($conn,$sql) or die("Query Unsuccessfull");

    if(mysqli_num_rows($result) > 0){
     
    

    ?>
          <table class="table table-success table-striped table-bordered border-dark">
        <thead>
          <tr>
            <th scope="col">S.No</th>
            <th scope="col">Name</th>
            <th scope="col">email</th>
            <th scope="col">Message</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <?php
           while($row = mysqli_fetch_assoc($result)){
            ?>
          <tr>
          <td class='id'><?php echo $row['feed-id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['message']?></td>
          </tr>
          <?php
           }
          ?>
        </tbody>
      </table>
      <nav aria-label="Page navigation example">
    <?php
    } else {
        echo "<h2> No Record Found.</h2>";
    }
    $sql1 = "SELECT * FROM feedback";

    $result1 = mysqli_query($conn, $sql1) or die("Pagination error");

    if (mysqli_num_rows($result1) > 0) {
        $total_records = mysqli_num_rows($result1); // Total no. of records

        $total_page = ceil($total_records / $limit); // ceil gives the upper value 
        // records divided into pages
        echo '<div class="d-flex justify-content-center"><ul class="pagination">';
        if ($page > 1) {
            echo '<li class="page-item"><a class="page-link" href="read-feedback.php?page=' . ($page - 1) . '">Previous</a></li>';
        }
        for ($i = 1; $i <= $total_page; $i++) { // for each page
            // for li color after color
            $active = ($i == $page) ? "active" : "";
            echo '<li class="page-item ' . $active . '"><a class="page-link" href="read-feedback.php?page=' . $i . '">' . $i . '</a></li>';
        }
        if ($total_page > $page) {
            echo '<li class="page-item"><a class="page-link" href="read-feedback.php?page=' . ($page + 1) . '">Next</a></li>';
        }

        echo '</ul></div>';
    }
    ?>
</nav>

        </div>
        </div>
      </div>
    </div>
  </div>
</section>
 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>