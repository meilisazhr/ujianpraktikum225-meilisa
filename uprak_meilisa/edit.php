<?php
require 'connect.php';

$id = $_GET['id'];
$query = "SELECT * FROM todos WHERE id = $id";
$result = mysqli_query($connect, $query);
$show = mysqli_fetch_assoc($result);
?>

<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Ubah</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #E3F2FD; 
      color:rgb(255, 195, 195);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      padding-top: 50px;
    }
    .navbar-custom {
      background-color: #1565C0;
    }
    .navbar-custom .navbar-brand,
    .navbar-custom .btn {
      color: #FFFFFF;
    }
    .btn-outline-light-custom {
      border: 1px solid #FFFFFF;
      color: #FFFFFF;
    }
    .btn-outline-light-custom:hover {
      background-color: #FFFFFF;
      color:hsl(0, 100.00%, 87.10%);
    }
    .card {
      background-color: #ffffff;
      border: 2px solidhsl(0, 100.00%, 93.50%);
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.05);
    }
    .form-label {
      font-weight: 600;
    }
    input.form-control {
      background-color: #F1F8E9; /* hijau muda */
      border: 1px solid #B0BEC5;
      color: #0D47A1;
    }
    input.form-control:focus {
      border-color:rgb(255, 255, 255);
      box-shadow: 0 0 5pxrgb(226, 239, 250);
    }
    .btn-submit {
      background-color:rgb(25, 210, 201);
      color: #fff;
      border: none;
    }
    .btn-submit:hover {
      background-color:rgb(66, 66, 66);
    }
  </style>
</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-custom shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="index.php">Todo List</a>
      <div class="ms-auto">
        <a href="index.php" class="btn btn-outline-light-custom">Kembali</a>
      </div>
    </div>
  </nav>

  <div class="container d-flex justify-content-center">
    <div class="col-md-6">
      <div class="card p-4 mt-4">
        <h3 class="mb-4 text-center">Edit</h3>
        <form action="edit_proses.php" method="POST">
          <input type="hidden" name="id" value="<?= htmlspecialchars($show['id']) ?>" />
          <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" id="title" name="title" class="form-control" required value="<?= htmlspecialchars($show['title']) ?>" />
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <input type="text" id="description" name="description" class="form-control" required value="<?= htmlspecialchars($show['description']) ?>" />
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-submit">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
