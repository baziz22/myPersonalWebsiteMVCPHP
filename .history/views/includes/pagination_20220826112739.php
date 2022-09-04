<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
  table {
    border-collapse: collapse;
  }  
  .inline {
    display: inline-block;
    float: right;
    margin: 20px 0px;
  }
  input,
  button {
    height: 34px;
  }
  .pagination {
    display: inline-block;
  }
  .pagination a {
    font-weight: bold;
    font-size: 18px;
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    border: 1px solid black;
  }
  .pagination a.active {
    background-color: pink;
  }
  .pagination a:hover:not(.active) {
    background-color: skyblue;
  }
</style>
</head>

<body>
  <center>
    <?php

    // Import the file where we defined the connection to Database.     
    require_once "connection.php";
    $per_page_record = 4;  // Number of entries to show in a page.   
    // Look for a GET variable page if not found default is 1.        
    if (isset($_GET["page"])) {
      $page  = $_GET["page"];
    } else {
      $page = 1;
    }

    $start_from = ($page - 1) * $per_page_record;

    $query = "SELECT * FROM users LIMIT $start_from, $per_page_record";
    $rs_result = mysqli_query($conn, $query);
    ?>

    <div class="container">
      <br>
      <div>
        <h1>Pagination Simple Example</h1>
        <p>This page demonstrates the basic
          Pagination using PHP and MySQL.
        </p>
        <table class="table table-striped table-condensed    
                                          table-bordered">
          <thead>
            <tr>
              <th width="10%">ID</th>
              <th>Name</th>
              <th>College</th>
              <th>Score</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($row = mysqli_fetch_array($rs_result,MYSQLI_ASSOC)) {
              // Display each field of the records.    
            ?>
              <tr>
                <td><?php echo $row["user_id"]; ?></td>
                <td><?php echo $row["user_name"]; ?></td>
                <td><?php echo $row["user_role"]; ?></td>
                <td><?php echo $row["user_status"]; ?></td>
              </tr>
            <?php
            };
            ?>
          </tbody>
        </table>

        <div class="pagination">
          <?php
          

          ?>
        </div>


        <div class="inline">
          <input id="page" type="number" min="1" max="<?php echo $total_pages ?>" placeholder="<?php echo $page . "/" . $total_pages; ?>" required>
          <button onClick="go2Page();">Go</button>
        </div>
      </div>
    </div>
  </center>
  <script>
    function go2Page() {
      var page = document.getElementById("page").value;
      page = ((page > <?php echo $total_pages; ?>) ? <?php echo $total_pages; ?> : ((page < 1) ? 1 : page));
      window.location.href = 'pagination?page=' + page;
    }
  </script>
</body>

</html>