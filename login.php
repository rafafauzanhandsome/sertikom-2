<?php
include "koneksi.php";
session_start();

$error = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $stmt = mysqli_prepare($koneksi, "SELECT * FROM admin WHERE username = ? AND password = ?");
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && $result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Login gagal. Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/webp" href="aset/pesat-removebg-preview.png">

  <title>Pesat admin</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      height: 100vh;
      display: flex;
    }

    .left {
      flex: 1;
      background: linear-gradient(135deg, #4facfe, #00f2fe);
      color: white;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 40px;
    }

    .left h1 {
      font-size: 36px;
      margin-bottom: 30px;
      margin-left: 10px;
    }

    .left h5 {
      font-size: 16px;
      margin-bottom: 30px;
      text-align: center;
      max-width: 700px;
    }

    .left a {
      background: transparent;
      color: white;
      border: 2px solid white;
      padding: 10px 25px;
      border-radius: 25px;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s ease;
    }

    .left a:hover {
      background: white;
      color: #4facfe;
    }

    .right {
      flex: 1;
      background: white;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px;
    }

    .login-box {
      width: 100%;
      max-width: 350px;
    }

    .login-box h2 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 28px;
      color: #333;
    }

    .error {
      color: red;
      text-align: center;
      margin-bottom: 15px;
      font-size: 14px;
    }

    .input-group {
      margin-bottom: 20px;
    }

    .input-group label {
      display: block;
      margin-bottom: 5px;
      color: #555;
      font-weight: bold;
    }

    .input-group input {
      width: 100%;
      padding: 12px 15px;
      border: 1px solid #ddd;
      border-radius: 30px;
      outline: none;
      transition: border-color 0.3s ease;
    }

    .input-group input:focus {
      border-color: #4facfe;
    }

    .login-btn {
      width: 100%;
      padding: 12px;
      background: #4facfe;
      color: white;
      border: none;
      border-radius: 30px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .login-btn:hover {
      background: #00c6ff;
    }
  </style>
</head>
<body>

  <div class="left">
    <h1>Form admin</h1>
    <h5>Selamat datang kembali admin!<br> Silakan login untuk melanjutkan ke dashboard yang telah kamu buat.</h5>
  </div>

  <div class="right">
    <div class="login-box">
      <h2>Login Admin</h2>

      <?php if (!empty($error)): ?>
        <div class="error"><?= htmlspecialchars($error) ?></div>
      <?php endif; ?>

      <form action="" method="POST">
        <div class="input-group">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" required>
        </div>
        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" required>
        </div>
        <button type="submit" class="login-btn">LOGIN</button>
      </form>
    </div>
  </div>

</body>
</html>
