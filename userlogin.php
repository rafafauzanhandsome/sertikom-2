<?php
session_start();

// data user dummy (harusnya dari database ya)
$users = [
    ['id' => 1, 'username' => 'user1', 'password' => '111'],
    ['id' => 2, 'username' => 'user2', 'password' => '222'],
    ['id' => 3, 'username' => 'user3', 'password' => '333'],
    ['id' => 4, 'username' => 'user4', 'password' => '444'],
    ['id' => 5, 'username' => 'user5', 'password' => '555']
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    foreach ($users as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            $_SESSION['id_user'] = $user['id'];
            header("Location: voting.php");
            exit;
        }
    }

    $error = "Username atau password kamu salah!";
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/webp" href="aset/pesat-removebg-preview.png">

<title>Pesat admin</title>
    <style>
    body {
      font-family: Arial, sans-serif;
      background-color:rgb(0, 242, 255);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      background-color: white;
      border: 1px solid #ccc;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.76);
      width: 300px;
    }

    .form-container h2 {
      color: #004080;
      text-align: center;
    }

    .form-container input[type="text"],
    .form-container input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      border: 1px solid #ccc;
      border-radius: 30px;
    }

    .form-container button {
      width: 65%;
      padding: 10px;
      height: 40px;
      margin-top: 20px;
      margin-left:50px;
      background-color: #007BFF;
      border: none;
      border-radius: 30px;
      color: white;
      font-weight: bold;
      cursor: pointer;
    }

    .form-container button:hover {
      background-color: #0056b3;
      transition: 0.3s ease;
    }

    .error-message {
      color: red;
      text-align: center;
      margin-top: 10px;
    }
    </style>
</head>
<body>
  <div class="form-container">
    <h2>Form User</h2>
    <?php if (isset($error)) echo "<p class='error-message'>$error</p>"; ?>
    <form method="POST">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>

