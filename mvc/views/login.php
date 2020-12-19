<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="public/css/style.css">

  <title>Đăng nhập</title>
</head>

<body>

  <?php include("header.php"); ?>


  <div class="auth-content">
    <form action="login" method="post">
      <h3 class="form-title">Đăng nhập</h3>

      <?php include("formErrors.php") ?>


      <div>
        <label>Tên người dùng</label>
        <input type="text" name="username" value="<?php echo $data["username"]; ?>" class="text-input">
      </div>
      <div>
        <label>Mật khẩu</label>
        <input type="password" name="password" value="<?php echo $data["password"]; ?>" class="text-input">
      </div>
      <div>
        <button type="submit" name="login-btn" class="btn">Đăng nhập</button>
      </div>
      <p class="auth-nav">Hoặc <a href="register">Đăng kí</a></p>
    </form>
  </div>

</body>

</html>