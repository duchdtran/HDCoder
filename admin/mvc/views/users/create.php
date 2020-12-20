<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- Custom Styles -->
  <link rel="stylesheet" href=<?php echo ROOT . DS . "public" . DS . "css" . DS . "style.css" ?>>

  <!-- Admin Styling -->
  <link rel="stylesheet" href="../../public/css/admin.css">

  <title>Admin - Thêm user</title>
</head>

<body>

<?php include(ROOT . DS . "mvc" . DS . "views" . DS . "adminHeader.php"); ?>

<div class="admin-wrapper clearfix">

  <?php include(ROOT . DS . "mvc" . DS . "views" . DS . "adminSidebar.php"); ?>


    <!-- Admin Content -->
    <div class="admin-content clearfix">
      <div class="button-group">
        <a href="<?php echo BASE_URL_ADMIN . "/user/create";?>" class="btn btn-sm">Thêm User</a>
        <a href="<?php echo BASE_URL_ADMIN . "/user";?>" class="btn btn-sm">Quản lí Users</a>
      </div>
      <div class="">
        <h2 style="text-align: center;">Tạo User</h2>

        <?php include(ROOT . DS . "mvc" . DS . "views" . DS . "formErrors.php"); ?>

        <form action="create" method="post">
          <div class="input-group">
            <label>Tên tài khoản</label>
            <input type="text" name="username" class="text-input">
          </div>
          <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" class="text-input">
          </div>
          <div class="input-group">
            <label>Mật khẩu</label>
            <input type="password" name="password" class="text-input">
          </div>
          <div class="input-group">
            <label>Xác nhận mật khẩu</label>
            <input type="password" name="passwordConf" class="text-input">
          </div>
          <div class="input-group">
            <label>Quyền</label>
            <select class="text-input" name="admin">
              <option value="0">User</option>
              <option value="1">Admin</option>
            </select>
          </div>
          <div class="input-group">
            <button type="submit" name="save-user" class="btn">Lưu mật khẩu</button>
          </div>
        </form>

      </div>
    </div>
    <!-- // Admin Content -->

  </div>


</body>

</html>