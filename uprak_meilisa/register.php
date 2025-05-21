<?php
session_start();
$error = $_SESSION['error'] ?? [];
$old = $_SESSION['old'] ?? [];
unset($_SESSION['error'], $_SESSION['old']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Todo List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #E3F2FD;
      color:rgb(255, 158, 158);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .card {
      background-color: #FFFFFF;
      border: 1px solidrgb(255, 164, 164);
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
    }
    .btn-primary {
      background-color:rgb(159, 149, 252);
      border: none;
    }
    .btn-primary:hover {
      background-color:rgb(16, 47, 82);
    }
    .form-label {
      font-weight: 600;
    }
    small.text-danger {
      font-size: 0.85em;
    }
    a.text-info {
      text-decoration: none;
    }
    a.text-info:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="card p-4" style="max-width: 450px; margin: auto;">
    <h3 class="text-center mb-4">Buat Akun Baru</h3>
    <form action="register_proses.php" method="POST" novalidate>

      <div class="mb-3">
        <label for="fullname" class="form-label">Nama Lengkap</label>
        <input type="text" name="fullname" class="form-control" value="<?= htmlspecialchars($old['fullname'] ?? '') ?>" required>
        <?php if(isset($error['fullname'])): ?>
          <small class="text-danger"><?= htmlspecialchars($error['fullname']) ?></small>
        <?php endif; ?>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($old['email'] ?? '') ?>" required>
        <?php if(isset($error['email'])): ?>
          <small class="text-danger"><?= htmlspecialchars($error['email']) ?></small>
        <?php endif; ?>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
        <?php if(isset($error['password'])): ?>
          <small class="text-danger"><?= htmlspecialchars($error['password']) ?></small>
        <?php endif; ?>
      </div>

      <div class="mb-3">
        <label for="password_confirm" class="form-label">Ulangi Password</label>
        <input type="password" name="password_confirm" class="form-control" required>
        <?php if(isset($error['password_confirm'])): ?>
          <small class="text-danger"><?= htmlspecialchars($error['password_confirm']) ?></small>
        <?php endif; ?>
      </div>

      <button type="submit" class="btn btn-primary w-100">Daftar </button>
    </form>
    <p class="mt-3 text-center">Sudah memiliki akun? <a href="login.php" class="text-info">Masuk di sini</a></p>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
