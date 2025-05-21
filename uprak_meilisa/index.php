<?php
require 'connect.php';

$query = "SELECT * FROM todos";
$results = mysqli_query($connect, $query);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/sandstone/bootstrap.min.css" rel="stylesheet">
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<style>
  body {
    background-color: #fff0f5; 
  }
  .navbar {
    background-color: #ffb6c1 !important; 
  }
  .btn-primary {
    background-color: #ff69b4;
    border-color: #ff69b4;
  }
  .btn-primary:hover {
    background-color: #ff85c1;
    border-color: #ff85c1;
  }
  .table-dark {
    background-color: #ffc0cb !important;
    color: white;
  }
</style>

  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
      <div class="container">
        <a class="navbar-brand" href="#">Todo List</a>
        <div class="ms-auto">
          <a href="login.php" class="btn btn-outline-light">Login</a>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Todo List</h2>
        
        <a href="tambah.php" class="btn btn-primary">+Add Todo</a>
      </div>

      <div class="card shadow">
        <div class="card-body">
          <table class="table table-bordered table-hover">
            <thead class="table-dark">
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php
            if (mysqli_num_rows($results) > 0){
                $no = 1;
                while ($show = mysqli_fetch_assoc($results)){
                    echo "
                    <tr>
                        <td>$no</td>
                        <td>$show[title]</td>
                        <td>$show[description]</td>
                        <td>
                            <a href='edit.php?id=$show[id]' class='btn btn-sm btn-warning'>Edit</a>
                            <form action='hapus_proses.php' method='POST' class='d-inline'>
                                <input type='hidden' name='id' value='$show[id]' />
                                <button type='submit' class='btn btn-sm btn-danger'>Delete</button>
                            </form>
                        </td>
                    </tr>
                    ";
                    $no++;
                }
            } else {
                echo "
                <tr>
                    <td colspan='4' class='text-center text-danger'>Data Tidak Ada</td>
                </tr>";
            }
            ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
