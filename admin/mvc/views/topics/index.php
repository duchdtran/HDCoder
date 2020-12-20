<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Custom Styles -->
  <link rel="stylesheet" href="../../assets/css/style.css">

  <!-- Admin Styling -->
  <link rel="stylesheet" href="../../assets/css/admin.css">

  <title>Admin - Manage Topics</title>
</head>

<body>

  <?php include(ROOT . DS . "mvc" . DS . "views" . DS . "adminHeader.php"); ?>

  <div class="admin-wrapper clearfix">

    <?php include(ROOT . DS . "mvc" . DS . "views" . DS . "adminSidebar.php"); ?>


    <!-- Admin Content -->
    <div class="admin-content clearfix">
      <div class="button-group">
        <a href="<?php echo BASE_URL_ADMIN . "/topic/create"; ?>" class="btn btn-sm">Thêm chủ đề</a>
        <a href="<?php echo BASE_URL_ADMIN . "/topic"; ?>" class="btn btn-sm">Quản lí chủ đề</a>
      </div>
      <div class="">
        <h2 style="text-align: center;">Quản lí chủ đề</h2>

        <?php include(ROOT . DS . "mvc" . DS . "views" . DS . "message.php"); ?>

        <table>
          <thead>
            <th>STT</th>
            <th>Tên</th>
            <th colspan="2">Hành động</th>
          </thead>
          <tbody>
            <?php foreach ($data['topics'] as $key => $topics) : ?>
              <tr class="rec">
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $topics['name']; ?>
                </td>
                <td>
                  <a href="<?php echo BASE_URL_ADMIN . "/topic/edit/" . $topics['id']; ?>" class="edit">Sửa</a>
                </td>
                <td>
                  <a href="<?php echo BASE_URL_ADMIN . "/topic/delete/" . $topics['id']; ?>" class="delete">Xóa</a>
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