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

  <title>Admin - Sửa user</title>
</head>

<body>

  <?php include(ROOT . DS . "mvc" . DS . "views" . DS . "adminHeader.php"); ?>

  <div class="admin-wrapper clearfix">

    <?php include(ROOT . DS . "mvc" . DS . "views" . DS . "adminSidebar.php"); ?>


    <!-- Admin Content -->
    <div class="admin-content clearfix">
      <div class="button-group">
        <a href="<?php echo BASE_URL_ADMIN . "/user/create"; ?>" class="btn btn-sm">Thêm User</a>
        <a href="<?php echo BASE_URL_ADMIN . "/user"; ?>" class="btn btn-sm">Quản lí Users</a>
      </div>
      <div class="">
        <h2 style="text-align: center;">Sửa user</h2>

        <form action="edit" method="post">
          <!-- <div class="msg error">
            <li>Username required</li>
          </div> -->
          <div class="input-group">
            <label>Tên người dùng</label>
            <input type="text" name="username" value="<?php echo $data['username']; ?>" class="text-input">
          </div>
          <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $data['email']; ?>" class="text-input">
          </div>
          <div class="input-group">
            <label>Mật khẩu</label>
            <input type="password" name="password" value="<?php echo $data['password']; ?>" class="text-input">
          </div>
          <div class="input-group">
            <label>Xác nhận mật khẩu</label>
            <input type="password" name="passwordConf" value="<?php echo $data['passwordConf']; ?>" class="text-input">
          </div>
          <div class="input-group">
            <label>Quyền</label>
            <select class="text-input" name="role">
              <option value="user">User</option>
              <option value="admin">Admin</option>
            </select>
          </div>
          <div class="input-group">
            <button type="submit" name="save-user" class="btn">Lưu user</button>
          </div>
        </form>

      </div>
    </div>
    <!-- // Admin Content -->

  </div>


</body>

</html>