<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Custom Styles -->
  <link rel="stylesheet" href=<?php echo ROOT . DS . "public" . DS . "css" . DS . "style.css" ?>>

  <!-- Admin Styling -->
  <link rel="stylesheet" href="../../public/css/admin.css">

  <title>Admin - Quản lí user</title>
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
        <h2 style="text-align: center;">Quản lí Users</h2>

        <?php include(ROOT . DS . "mvc" . DS . "views" . DS . "message.php"); ?>

        <table>
          <thead>
            <th>STT</th>
            <th>Username</th>
            <th colspan="3">Hành động</th>
          </thead>
          <tbody>
            <?php foreach ($data['users'] as $key => $user) : ?>
              <tr class="rec">
                <td><?php echo $key + 1; ?></td>
                <td>
                  <a href="#"><?php echo $user['username'] ?></a>
                </td>
                <td>
                  <a href="<?php echo BASE_URL_ADMIN . "/user/delete/" . $user['id']; ?>" class="delete">
                    Xóa
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

      </div>
    </div>
    <!-- // Admin Content -->

  </div>

</body>

</html>