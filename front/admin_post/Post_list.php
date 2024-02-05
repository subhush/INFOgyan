
<?php
include 'config.php';

if (isset($_SESSION["username"])) {
  header("location: http://localhost/new1/front/admin_post/");
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

     $sql = "SELECT post_data.post_no,post_data.Title,post_data.Category ,post_data.Post_info,post_data.Post_img FROM post_data
     ORDER BY post_data.post_no DESC  LIMIT {$offset},{$limit}";
    
    $result = mysqli_query($conn,$sql) or die("Query Unsuccessfull");

    if(mysqli_num_rows($result) > 0){
     
    

    ?>
          <table class="table table-success table-striped table-bordered border-dark">
        <thead>
          <tr>
            <th scope="col">Post_No</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Post_information</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <?php
           while($row = mysqli_fetch_assoc($result)){
            ?>
          <tr>
          <td class='id'><?php echo $row['post_no'];?></td>
            <td><?php echo $row['Title'];?></td>
            <td><?php echo $row['Category'];?></td>
            <td><?php echo substr($row['Post_info'],0,50).".........";?></td>
            <td>
              <!-- <a href=
          'Modify_post.php?id=<?php echo $row['post_no'];?>'>
              <input type="button" value="Modify" name="Modify" class="btn btn-primary"></a> -->
            <a href="delete_post.php?id=<?php echo $row['post_no'];?>">
            <input type="button" value="Delete" name="Delete" class="btn btn-danger"></a>
        </td>
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
    $sql1 = "SELECT * FROM post_data";

    $result1 = mysqli_query($conn, $sql1) or die("Pagination error");

    if (mysqli_num_rows($result1) > 0) {
        $total_records = mysqli_num_rows($result1); // Total no. of records

        $total_page = ceil($total_records / $limit); // ceil gives the upper value 
        // records divided into pages
        echo '<div class="d-flex justify-content-center"><ul class="pagination">';
        if ($page > 1) {
            echo '<li class="page-item"><a class="page-link" href="Post_list.php?page=' . ($page - 1) . '">Previous</a></li>';
        }
        for ($i = 1; $i <= $total_page; $i++) { // for each page
            // for li color after color
            $active = ($i == $page) ? "active" : "";
            echo '<li class="page-item ' . $active . '"><a class="page-link" href="Post_list.php?page=' . $i . '">' . $i . '</a></li>';
        }
        if ($total_page > $page) {
            echo '<li class="page-item"><a class="page-link" href="Post_list.php?page=' . ($page + 1) . '">Next</a></li>';
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