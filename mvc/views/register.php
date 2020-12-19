<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="public/css/style.css">

  <title>Đăng kí</title>
</head>

<body>

  <?php include("header.php"); ?>


  <div class="auth-content">
    <form action="register" method="post">
      <h3 class="form-title">Đăng kí</h3>

      <?php include("formErrors.php"); ?>

      <div>
        <label>Tên người dùng</label>
        <input type="text" name="username" value="<?php echo $data["username"]; ?>" class="text-input">
      </div>
      <div>
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $data["email"]; ?>" class="text-input">
      </div>
      <div>
        <label>Mật khẩu</label>
        <input type="password" name="password" value="<?php echo $data["password"]; ?>" class="text-input">
      </div>
      <div>
        <label>Xác nhận mật khẩu</label>
        <input type="password" name="passwordConf" value="<?php echo $data["passwordConf"]; ?>" class="text-input">
      </div>
      <div>
        <button type="submit" name="register-btn" class="btn">Đăng kí</button>
      </div>
      <p class="auth-nav">Hoặc <a href="login">Đăng nhập</a></p>
    </form>
  </div>

</body>

</html>