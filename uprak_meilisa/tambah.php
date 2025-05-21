<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tambah Tugas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #E3F2FD; /* biru muda */
      color:rgb(77, 108, 155);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      padding-top: 50px;
    }
    .navbar-custom {
      background-color:rgb(118, 121, 123);
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
      color: #1565C0;
    }
    .card {
      background-color: #ffffff;
      border: 2px solid #90CAF9;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
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
      border-color: #42A5F5;
      box-shadow: 0 0 5px #42A5F5;
    }
    .btn-submit {
      background-color: #1976D2;
      color: #fff;
      border: none;
    }
    .btn-submit:hover {
      background-color: #1565C0;
    }
  </style>
</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-custom shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#">Todo List</a>
      <div class="ms-auto">
        <a href="index.php" class="btn btn-outline-light-custom">Kembali</a>
      </div>
    </div>
  </nav>

  
  <div class="container d-flex justify-content-center">
    <div class="col-md-6">
      <div class="card p-4 mt-4">
        <h3 class="mb-4 text-center">Tambah</h3>
        <form action="tambah_proses.php" method="POST">
          <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" name="title" class="form-control" placeholder="Masukkan judul tugas" required />
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <input type="text" name="description" class="form-control" placeholder="Masukkan deskripsi singkat" required />
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
